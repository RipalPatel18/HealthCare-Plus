<?php


use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth', 'role:patient'])->group(function () {
    Route::get('/patient/dashboard', function () {
        return view('patient.dashboard');
    })->name('patient.dashboard');
});

Route::middleware(['auth', 'role:doctor'])->group(function () {
    Route::get('/doctor/dashboard', function () {
        return view('doctor.dashboard');
    })->name('doctor.dashboard');
});

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');
});


Route::get('/whoami', function () {
    return auth()->check()
        ? auth()->user()->only(['id','name','email','role'])
        : ['logged_in' => false];
});

Route::get('/', fn() => view('pages.home'))->name('home');

Route::get('/find-doctor', fn() => view('pages.doctors.index'))->name('doctors.index');
Route::get('/doctors/{id}', fn($id) => view('pages.doctors.show', compact('id')))->name('doctors.show');

Route::get('/services', fn() => view('pages.services.index'))->name('services.index');

Route::get('/departments', fn() => view('pages.departments.index'))->name('departments.index');
Route::get('/departments/{id}', fn($id) => view('pages.departments.show', compact('id')))->name('departments.show');

Route::get('/contact', fn() => view('pages.contact'))->name('contact');

require __DIR__.'/auth.php';
