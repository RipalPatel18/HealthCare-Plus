<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Department;


class DoctorController extends Controller
{
    public function index(Request $request)
    {
        $departments = Department::all();

        $doctors = User::where('role', 'doctor')
            ->with('department')

            ->when($request->specialty, function ($query) use ($request) {
                $query->where('department_id', $request->specialty);

            })
            ->when($request->location, function ($query) use ($request) {
               
            $query->where('location', 'like', '%' . $request->location . '%');
            })
            ->get();

        return view('find-doctor', compact('doctors', 'departments'));
    }

    public function show($id)

    {
        $doctor = User::where('role', 'doctor')
            ->with('department')

            ->findOrFail($id);

        return view('doctor-profile', compact('doctor'));
    }
}