@extends('layouts.doctor')

@section('title', 'Doctor Profile')

@section('content')
<div class="container py-5">

  <div class="d-flex align-items-center justify-content-between flex-wrap gap-2 mb-4">
    <div>
      <h2 class="fw-bold mb-1">Doctor Profile</h2>
      <p class="text-muted mb-0">Update your profile information.</p>
    </div>
  </div>

  {{-- Profile Info --}}
  <div class="card border-0 shadow-sm rounded-4 mb-4">
    <div class="card-body p-4">
      <h5 class="fw-semibold mb-3">Profile Information</h5>

      <form>
        <div class="row g-3">
          <div class="col-md-6">
            <label class="form-label fw-semibold">Full Name</label>
            <input type="text" class="form-control" value="{{ auth()->user()->name ?? '' }}" placeholder="Enter full name">
          </div>

          <div class="col-md-6">
            <label class="form-label fw-semibold">Email</label>
            <input type="email" class="form-control" value="{{ auth()->user()->email ?? '' }}" placeholder="Enter email">
          </div>

          <div class="col-md-6">
            <label class="form-label fw-semibold">Specialization</label>
            <input type="text" class="form-control" placeholder="e.g., Cardiologist">
          </div>

          <div class="col-md-6">
            <label class="form-label fw-semibold">Phone</label>
            <input type="text" class="form-control" placeholder="Enter phone number">
          </div>

          <div class="col-12">
            <label class="form-label fw-semibold">Clinic Address</label>
            <input type="text" class="form-control" placeholder="Enter clinic address">
          </div>
        </div>

        <div class="mt-4">
          <button type="button" class="btn btn-primary px-4">Update Info</button>
        </div>
      </form>
    </div>
  </div>

  {{-- Change Password --}}
  <div class="card border-0 shadow-sm rounded-4">
    <div class="card-body p-4">
      <h5 class="fw-semibold mb-3">Change Password</h5>

      <form>
        <div class="row g-3">
          <div class="col-md-4">
            <label class="form-label fw-semibold">Current Password</label>
            <input type="password" class="form-control" placeholder="Enter current password">
          </div>

          <div class="col-md-4">
            <label class="form-label fw-semibold">New Password</label>
            <input type="password" class="form-control" placeholder="Enter new password">
          </div>

          <div class="col-md-4">
            <label class="form-label fw-semibold">Confirm Password</label>
            <input type="password" class="form-control" placeholder="Confirm new password">
          </div>
        </div>

        <div class="mt-4">
          <button type="button" class="btn btn-dark px-4">Update Password</button>
        </div>
      </form>
    </div>
  </div>

</div>
@endsection