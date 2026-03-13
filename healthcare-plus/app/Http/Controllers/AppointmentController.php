<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointment;
use App\Models\User;

class AppointmentController extends Controller
{
    public function create()
    {
        $doctors = User::where('role', 'doctor')->get();


        
        return view('pages.book-appointment', compact('doctors'));
    }

    public function store(Request $request)
    {
        if (!auth()->check()) {
            return redirect()->route('login')->with('error', 'Please login first.');
        }

        $request->validate([


            'doctor' => 'required|string|max:255',
            'appointment_date' => 'required|date|after_or_equal:today',
            'time_slot' => 'required|string|max:100',
            'phone' => 'required|string|max:20',
            'notes' => 'nullable|string|max:1000',
        ]);

        $user = auth()->user();

        Appointment::create([
            'user_id' => $user->id,
            'patient_name' => $user->name,
            'email' => $user->email,
            'doctor' => $request->doctor,
            'department' => $request->department ?? null,
            'appointment_date' => $request->appointment_date,
            'time_slot' => $request->time_slot,
            'phone' => $request->phone,
            'notes' => $request->notes,
            'status' => 'Upcoming',
        ]);

        return redirect()->route('patient.appointments')


            ->with('success', 'Appointment booked successfully.');
    }
}