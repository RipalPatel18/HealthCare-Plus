<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Appointment;
use App\Models\HealthRecord;

class PatientController extends Controller
{
    // dashboard
    public function dashboard()
    {
        $appointments = Appointment::where('user_id', auth()->id())
            ->orderBy('appointment_date', 'asc')
            ->orderBy('time_slot', 'asc')
            ->get();

        $upcomingAppointments = Appointment::where('user_id', auth()->id())
            ->where('status', 'Upcoming')
            ->orderBy('appointment_date', 'asc')
            ->orderBy('time_slot', 'asc')
            ->take(1)
            ->get();

        return view('pages.patient.dashboard', compact('appointments', 'upcomingAppointments'));
    }

    // appointments

    public function appointments()
    {
        $appointments = Appointment::where('user_id', auth()->id())
            ->orderBy('appointment_date', 'asc')
            ->orderBy('time_slot', 'asc')
            ->get();

        return view('pages.patient.appointments', compact('appointments'));
    }

    // Patient records
    public function records()
    {
        $records = HealthRecord::where('patient_id', auth()->id())
            ->with('doctor')
            ->orderBy('record_date', 'desc')
            ->get();

        return view('pages.patient.records', compact('records'));
    }

    // Patient profile
    public function profile()
    {
        $user = auth()->user();

        return view('pages.patient.profile', compact('user'));
    }

    // updateProfile
    public function updateProfile(Request $request)
    {
        $user = auth()->user();

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email,' . $user->id,
            'phone' => 'nullable|string|max:50',
            'dob' => 'nullable|date',
            'address' => 'nullable|string|max:255',
        ]);

        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->dob = $request->dob;
        $user->address = $request->address;
        $user->save();

        return back()->with('success', 'Profile updated successfully.');
    }

    // updatePassword
    public function updatePassword(Request $request)
    {
        $request->validate([
            'current_password' => 'required',
            'new_password' => 'required|min:6|confirmed',
        ]);

        $user = auth()->user();

        if (!Hash::check($request->current_password, $user->password)) {
            return back()->with('error', 'Current password is incorrect.');
        }

        $user->password = Hash::make($request->new_password);
        $user->save();

        return back()->with('success', 'Password updated successfully.');
    }

    // cancelAppointment
    public function cancelAppointment($id)
    {
        $appointment = Appointment::where('id', $id)
            ->where('user_id', auth()->id())
            ->firstOrFail();

        if ($appointment->status !== 'Completed') {
            $appointment->status = 'Cancelled';
            $appointment->save();
        }

        return back()->with('success', 'Appointment cancelled successfully.');
    }

    // editAppointment
    public function editAppointment($id)
    {
        $appointment = Appointment::where('id', $id)
            ->where('user_id', auth()->id())
            ->where('status', '!=', 'Completed')
            ->where('status', '!=', 'Cancelled')
            ->firstOrFail();

        return view('pages.patient.appointment-edit', compact('appointment'));
    }

    // updateAppointment
    public function updateAppointment(Request $request, $id)
    {
        $appointment = Appointment::where('id', $id)
            ->where('user_id', auth()->id())
            ->where('status', '!=', 'Completed')
            ->where('status', '!=', 'Cancelled')
            ->firstOrFail();

        $request->validate([
            'appointment_date' => 'required|date|after_or_equal:today',
            'time_slot' => 'required|string|max:100',
        ]);

        $appointment->appointment_date = $request->appointment_date;
        $appointment->time_slot = $request->time_slot;
        $appointment->status = 'Upcoming';
        $appointment->save();

        return redirect()->route('patient.appointments')
            ->with('success', 'Appointment rescheduled successfully.');

            
    }

    // show Health Record
    public function showRecord($id)
    {
        $record = HealthRecord::where('id', $id)
            ->where('patient_id', auth()->id())
            ->with('doctor')
            ->firstOrFail();


        return view('pages.patient.record-show', compact('record'));


    }
}