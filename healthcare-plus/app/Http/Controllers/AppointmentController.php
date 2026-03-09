<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointment;
use App\Models\User;

class AppointmentController extends Controller
{
    public function index()
    {
        $doctors = User::where('role', 'doctor')
            ->with('department')

            ->orderBy('name')
            ->get();

        return view('pages.book-appointment', compact('doctors'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'patient_name' => 'required',
            'email' => 'required|email',
            'doctor' => 'required',

            'appointment_date' => 'required',
            'time_slot' => 'required',

            'phone' => 'required',

        ]);

        Appointment::create([
            
            'patient_name' => $request->patient_name,

            'email' => $request->email,
            'doctor' => $request->doctor,

            'appointment_date' => $request->appointment_date,
            'time_slot' => $request->time_slot,
            'phone' => $request->phone,
            'notes' => $request->notes,


        ]);




        return redirect()->back()->with('success', 'Appointment booked successfully!');
    }
}