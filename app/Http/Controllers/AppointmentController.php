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
        Appointment::create($validated);
        return redirect()->back()->with('success', 'Appointment booked successfully!');
    }
    public function index()
    {
        $appointments = Appointment::orderBy('created_at', 'desc')->get(); // You can paginate if needed
        return view('admin.pages.appointment', compact('appointments'));
    }
}
