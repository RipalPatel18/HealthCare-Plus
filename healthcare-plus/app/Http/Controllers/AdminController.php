<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Appointment;
use App\Models\Department;
use App\Models\Service;

class AdminController extends Controller
{
    // Show admin dashboard with total counts
    public function dashboard()
    {
        $totalPatients     = User::where('role', 'patient')->count();
        $totalDoctors      = User::where('role', 'doctor')->count();
        $totalAppointments = Appointment::count();

        return view('admin.dashboard', compact(
            'totalPatients', 'totalDoctors', 'totalAppointments'
        ));
    }

    // Show all doctors with their department
    public function manageDoctors()
    {
        $doctors     = User::where('role', 'doctor')->with('department')->get();
        $departments = Department::orderBy('name')->get();

        return view('admin.manage-doctors', compact('doctors', 'departments'));
    }

    // Add a new doctor
    public function createDoctor(Request $request)
    {
        $request->validate([
            'name'          => 'required|string|max:255',
            'email'         => 'required|email|unique:users,email',
            'password'      => 'required|min:8',
            'department_id' => 'nullable|exists:departments,id',
            'phone'         => 'nullable|string|max:30',
            'address'       => 'nullable|string|max:255',
        ]);

        User::create([
            'name'          => $request->name,
            'email'         => $request->email,
            'password'      => Hash::make($request->password),
            'role'          => 'doctor',
            'department_id' => $request->department_id,
            'phone'         => $request->phone,
            'address'       => $request->address,
        ]);

        return redirect()->route('admin.manage-doctors')->with('success', 'Doctor added successfully.');
    }

    // Show edit form for a specific doctor
    public function editDoctor($id)
    {
        $doctor      = User::where('role', 'doctor')->findOrFail($id);
        $departments = Department::orderBy('name')->get();

        return view('admin.manage-doctors-edit', compact('doctor', 'departments'));
    }

    // Update doctor details
    public function updateDoctor(Request $request, $id)
    {
        $doctor = User::where('role', 'doctor')->findOrFail($id);

        $request->validate([
            'name'          => 'required|string|max:255',
            'email'         => 'required|email|unique:users,email,' . $id,
            'department_id' => 'nullable|exists:departments,id',
            'phone'         => 'nullable|string|max:30',
            'address'       => 'nullable|string|max:255',
        ]);

        $doctor->update($request->only('name', 'email', 'department_id', 'phone', 'address'));

        return redirect()->route('admin.manage-doctors')->with('success', 'Doctor updated successfully.');
    }

    // Delete a doctor
    public function deleteDoctor($id)
    {
        User::where('role', 'doctor')->findOrFail($id)->delete();

        return redirect()->route('admin.manage-doctors')->with('success', 'Doctor deleted successfully.');
    }

    // Show all services and departments on one page
    public function manageServices()
    {
        $services    = Service::with('department')->get();
        $departments = Department::orderBy('name')->get();

        return view('admin.manage-services', compact('services', 'departments'));
    }

    // Add a new service
    public function createService(Request $request)
    {
        $request->validate([
            'name'             => 'required|string|max:255',
            'department_id'    => 'required|exists:departments,id',
            'duration_minutes' => 'required|integer|min:1',
            'price'            => 'required|numeric|min:0',
            'description'      => 'nullable|string',
        ]);

        Service::create($request->only('name', 'department_id', 'duration_minutes', 'price', 'description'));

        return redirect()->route('admin.manage-services')->with('success', 'Service added successfully.');
    }

    // Update an existing service
    public function updateService(Request $request, $id)
    {
        $request->validate([
            'name'             => 'required|string|max:255',
            'department_id'    => 'required|exists:departments,id',
            'duration_minutes' => 'required|integer|min:1',
            'price'            => 'required|numeric|min:0',
            'description'      => 'nullable|string',
        ]);

        Service::findOrFail($id)->update(
            $request->only('name', 'department_id', 'duration_minutes', 'price', 'description')
        );

        return redirect()->route('admin.manage-services')->with('success', 'Service updated successfully.');
    }

    // Delete a service
    public function deleteService($id)
    {
        Service::findOrFail($id)->delete();

        return redirect()->route('admin.manage-services')->with('success', 'Service deleted successfully.');
    }

    // Show all departments with doctor count
    public function manageDepartments()
    {
        $departments = Department::withCount('doctors')->get();

        return view('admin.manage-departments', compact('departments'));
    }

    // Add a new department
    public function createDepartment(Request $request)
    {
        $request->validate([
            'name'        => 'required|string|max:255|unique:departments,name',
            'description' => 'nullable|string',
        ]);

        Department::create($request->only('name', 'description'));

        return redirect()->route('admin.manage-departments')->with('success', 'Department added successfully.');
    }

    // Update an existing department
    public function updateDepartment(Request $request, $id)
    {
        $dept = Department::findOrFail($id);

        $request->validate([
            'name'        => 'required|string|max:255|unique:departments,name,' . $id,
            'description' => 'nullable|string',
        ]);

        $dept->update($request->only('name', 'description'));

        return redirect()->route('admin.manage-services')->with('success', 'Department updated successfully.');
    }

    // Delete a department
    public function deleteDepartment($id)
    {
        Department::findOrFail($id)->delete();

        return redirect()->route('admin.manage-departments')->with('success', 'Department deleted successfully.');
    }

    // Show all patients so admin can delete them
    public function deletePatients()
    {
        $patients = User::where('role', 'patient')->get();

        return view('admin.delete-patients', compact('patients'));
    }

    // Delete a patient account
    public function deletePatient($id)
    {
        User::where('role', 'patient')->findOrFail($id)->delete();

        return redirect()->route('admin.delete-patients')->with('success', 'Patient deleted successfully.');
    }
}