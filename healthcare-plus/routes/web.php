<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\DepartmentController;

/* Web Routes */

// Home page
Route::get('/', function () {
    return view('pages.home');
})->name('home');

// Dashboard redirect after login
Route::get('/dashboard', function () {
    return redirect('/redirect');
})->middleware(['auth'])->name('dashboard');



// Dynamic pages
Route::get('/find-doctor', [DoctorController::class, 'index'])->name('find-doctor');
Route::get('/doctor-profile/{id}', [DoctorController::class, 'show'])->name('doctor-profile');

Route::get('/services', [ServiceController::class, 'index'])->name('services');
Route::get('/departments/{id}', [ServiceController::class, 'showDepartment'])->name('department.show');
Route::get('/services/{id}', [ServiceController::class, 'show'])->name('service.show');

Route::get('/book-appointment', [AppointmentController::class, 'index'])->name('book-appointment');
Route::post('/book-appointment', [AppointmentController::class, 'store'])->name('book-appointment.store');
Route::get('/doctor/appointments', [AppointmentController::class, 'doctorAppointments'])->name('doctor.appointments');

Route::get('/department/{id}', [DepartmentController::class, 'show'])->name('department.show');

// Static pages

Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');

Route::post('/contact', function () {
    return back()->with('success', 'Your message has been sent successfully!');
})->name('contact.send');

/* Redirect user by role after login */
Route::get('/redirect', function () {
    $role = auth()->user()->role;

    if ($role === 'admin') {
        return redirect()->route('admin.dashboard');
    }

    if ($role === 'doctor') {
        return redirect()->route('doctor.dashboard');
    }

    return redirect()->route('patient.dashboard');
})->middleware(['auth'])->name('redirect');

/* Protected routes */
Route::middleware(['auth'])->group(function () {

    /* Patient Routes */
    Route::get('/patient/dashboard', function () {
        return view('pages.patient.dashboard');
    })->name('patient.dashboard');

    Route::get('/patient/profile', function () {
        return view('pages.patient.profile');
    })->name('patient.profile');

    Route::get('/patient/appointments', function () {
        return view('pages.patient.appointments');
    })->name('patient.appointments');

    Route::get('/patient/records', function () {
        return view('pages.patient.records');
    })->name('patient.records');

    /* Doctor Routes */
    Route::get('/doctor/dashboard', function () {
        return view('doctor.dashboard');
    })->name('doctor.dashboard');

    Route::get('/doctor/appointments', function () {
        return view('doctor.appointments');
    })->name('doctor.appointments');

    Route::get('/doctor/availability', function () {
        return view('doctor.availability');
    })->name('doctor.availability');

    Route::get('/doctor/profile', function () {
        return view('doctor.profile');
    })->name('doctor.profile');

    /* Admin Routes */
    Route::get('/admin/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');

    Route::get('/admin/manage-doctors', function () {
        return view('admin.manage-doctors');
    })->name('admin.manage-doctors');

    Route::get('/admin/manage-doctors/create', function () {
        return view('admin.manage-doctors-create');
    })->name('admin.manage-doctors.create');

    Route::get('/admin/manage-doctors/{id}/edit', function ($id) {
        return view('admin.manage-doctors-edit', ['id' => $id]);
    })->name('admin.manage-doctors.edit');

    Route::get('/admin/manage-doctors/{id}/delete', function ($id) {
        return view('admin.manage-doctors-delete', ['id' => $id]);
    })->name('admin.manage-doctors.delete');

    Route::get('/admin/manage-services', function () {
        return view('admin.manage-services');
    })->name('admin.manage-services');

    Route::get('/admin/manage-services/create', function () {
        return view('admin.manage-services-create');
    })->name('admin.manage-services.create');

    Route::get('/admin/manage-departments', function () {
        return view('admin.manage-departments');
    })->name('admin.manage-departments');

    Route::get('/admin/departments/create', function () {
        return view('admin.departments-create');
    })->name('admin.departments.create');

    Route::get('/admin/delete-patients', function () {
        return view('admin.delete-patients');
    })->name('admin.delete-patients');

    Route::get('/admin/delete-patients/{id}/confirm', function ($id) {
        return view('admin.delete-patients-confirm', ['id' => $id]);
    })->name('admin.delete-patients.confirm');
});

require __DIR__ . '/auth.php';