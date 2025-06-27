<?php

namespace App\Http\Controllers;

use App\Models\Appointment;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class DashboardController extends Controller
{

    public function dashboard()
    {
        $totalAppointments = Appointment::count();
        $approvedAppointments = Appointment::where('status', 'approved')->count();
        $rejectedAppointments = Appointment::where('status', 'rejected')->count();
        $pendingAppointments = Appointment::where('status', 'pending')->count();

        return view('admin.pages.dashboard', compact(
            'totalAppointments',
            'approvedAppointments',
            'rejectedAppointments',
            'pendingAppointments'
        ));
    }

    public function getChartData()
    {
        $monthlyStats = Appointment::selectRaw("strftime('%m', created_at) as month, status, COUNT(*) as count")
            ->groupBy('month', 'status')
            ->get();

        $approved = array_fill(1, 12, 0);
        $pending = array_fill(1, 12, 0);
        $rejected = array_fill(1, 12, 0);

        $totalApproved = 0;
        $totalPending = 0;
        $totalRejected = 0;

        foreach ($monthlyStats as $stat) {
            $month = (int)$stat->month;
            switch ($stat->status) {
                case 'approved':
                    $approved[$month] = $stat->count;
                    $totalApproved += $stat->count;
                    break;
                case 'pending':
                    $pending[$month] = $stat->count;
                    $totalPending += $stat->count;
                    break;
                case 'rejected':
                    $rejected[$month] = $stat->count;
                    $totalRejected += $stat->count;
                    break;
            }
        }

        return response()->json([
            'approved' => array_values($approved),
            'pending' => array_values($pending),
            'rejected' => array_values($rejected),
            'totals' => [
                'approved' => $totalApproved,
                'pending' => $totalPending,
                'rejected' => $totalRejected,
            ]
        ]);
    }
}
