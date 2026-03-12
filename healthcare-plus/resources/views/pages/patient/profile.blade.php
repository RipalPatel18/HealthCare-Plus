@extends('layouts.site')

@section('content')

<section class="py-5">
    <div class="container">

        <div class="mb-4">
            <h2 class="fw-bold section-title mb-2">My Profile</h2>
            <p class="text-muted mb-0">Update your account details and password.</p>
        </div>

        @if(session('success'))
            <div class="alert alert-success rounded-4 shadow-sm border-0">
                {{ session('success') }}
            </div>
        @endif

        @if(session('error'))
            <div class="alert alert-danger rounded-4 shadow-sm border-0">
                {{ session('error') }}
            </div>
        @endif

        <div class="row g-4">

            <div class="col-lg-7">
                <div class="feature-card h-100">
                    <h4 class="fw-bold mb-4">Profile Information</h4>

                    <form method="POST" action="{{ route('patient.profile.update') }}">
                        @csrf

                        <div class="row g-3">
                            <div class="col-md-6">
                                <label class="form-label fw-semibold">Full Name</label>
                                <input type="text" name="name" class="form-control" value="{{ old('name', $user->name ?? '') }}">
                            </div>

                            <div class="col-md-6">
                                <label class="form-label fw-semibold">Email</label>
                                <input type="email" name="email" class="form-control" value="{{ old('email', $user->email ?? '') }}">
                            </div>

                            <div class="col-md-6">
                                <label class="form-label fw-semibold">Phone</label>
                                <input type="text" name="phone" class="form-control" value="{{ old('phone', $user->phone ?? '') }}">
                            </div>

                            <div class="col-md-6">
                                <label class="form-label fw-semibold">Date of Birth</label>
                                <input type="date" name="dob" class="form-control" value="{{ old('dob', $user->dob ?? '') }}">
                            </div>

                            <div class="col-12">
                                <label class="form-label fw-semibold">Address</label>
                                <input type="text" name="address" class="form-control" value="{{ old('address', $user->address ?? '') }}">
                            </div>
                        </div>

                        <div class="mt-4">
                            <button type="submit" class="btn btn-primary px-4">Update Profile</button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="col-lg-5">
                <div class="service-card h-100">
                    <div class="p-4">
                        <h4 class="fw-bold mb-4">Change Password</h4>

                        <form method="POST" action="{{ route('patient.password.update') }}">
                            @csrf

                            <div class="mb-3">
                                <label class="form-label fw-semibold">Current Password</label>
                                <input type="password" name="current_password" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label class="form-label fw-semibold">New Password</label>
                                <input type="password" name="new_password" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label class="form-label fw-semibold">Confirm New Password</label>
                                <input type="password" name="new_password_confirmation" class="form-control">
                            </div>

                            <button type="submit" class="btn btn-dark w-100">Update Password</button>
                        </form>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>

@endsection