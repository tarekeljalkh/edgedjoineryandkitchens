<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function store(Request $request)
    {
        // Validate the request
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|string|max:20',
            'service' => 'required|string',
            'preferred_date' => 'required|date',
            'preferred_time' => 'required',
            'additional_details' => 'nullable|string',
        ]);

        // Store the appointment
        Appointment::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'service' => $request->service,
            'preferred_date' => $request->preferred_date,
            'preferred_time' => $request->preferred_time,
            'additional_details' => $request->additional_details,
        ]);

        return redirect()->back()->with('success', 'Your appointment has been booked successfully.');
    }

}
