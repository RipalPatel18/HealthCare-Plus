<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Department;

class DoctorController extends Controller
{
    public function index(Request $request)
    {
        $query = User::where('role', 'doctor')->with('department');

        if ($request->filled('specialty')) {
            $query->where('department_id', $request->specialty);
        }

        if ($request->filled('location')) {
            $query->where('location', 'like', '%' . $request->location . '%');
        }

        $doctors = $query->get();
        $departments = Department::orderBy('name')->get();

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