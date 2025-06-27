<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'age' => 'required|numeric|min:0',
            'health_history' => 'required|string',
            'gender' => 'nullable|in:male,female',
            'phone' => 'required|string|min:10|max:11',
            'complaints' => 'required|string',
        ]);

        $validated['status'] = 'pending'; // Set default status

        Appointment::create($validated);

        return redirect()->back()->with('success', 'Appointment booked successfully!');
    }

    public function index(Request $request)
    {
        $query = Appointment::query();

        if ($request->has('status') && in_array($request->status, ['pending', 'approved', 'rejected'])) {
            $query->where('status', $request->status);
        }

        $appointments = $query->orderBy('created_at', 'desc')->get(); // or paginate()
        return view('admin.pages.appointment', compact('appointments'));
    }


    public function approve($id)
    {
        $appointment = Appointment::findOrFail($id);
        $appointment->status = 'approved';
        $appointment->save();

        return redirect()->back()->with('success', 'Appointment approved successfully!');
    }

    public function reject($id)
    {
        $appointment = Appointment::findOrFail($id);
        $appointment->status = 'rejected';
        $appointment->save();

        return redirect()->back()->with('error', 'Appointment rejected.');
    }
}
