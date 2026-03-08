@extends('layouts.patient')

@section('content')
<div class="container py-5">

  <div class="d-flex align-items-center justify-content-between mb-4">
    <h2 class="fw-bold mb-0">Patient Profile</h2>
  </div>

  <!-- Profile Information -->
  <div class="card border-0 shadow-sm rounded-4 mb-4">
    <div class="card-body p-4">
      <h5 class="fw-semibold mb-3">Profile Information</h5>

      <form method="POST" action="#">
        @csrf

        <div class="row g-3">
          <div class="col-md-6">
            <label class="form-label fw-medium">Name</label>
            <input type="text" class="form-control" value="{{ auth()->user()->name ?? '' }}" placeholder="Full Name">
          </div>

          <div class="col-md-6">
            <label class="form-label fw-medium">Email</label>
            <input type="email" class="form-control" value="{{ auth()->user()->email ?? '' }}" placeholder="Enter Email address">
          </div>

          <div class="col-md-6">
            <label class="form-label fw-medium">Phone</label>
            <input type="text" class="form-control" placeholder="Enter Phone number">
          </div>

          <div class="col-md-6">
            <label class="form-label fw-medium">Address</label>
            <input type="text" class="form-control" placeholder="Enter address">
          </div>
        </div>

        <button class="btn btn-primary mt-4">Update Info</button>
      </form>
    </div>
  </div>

  <!-- Change Password -->
  <div class="card border-0 shadow-sm rounded-4">
    <div class="card-body p-4">
      <h5 class="fw-semibold mb-3">Change Password</h5>

      <form method="POST" action="#">
        @csrf

        <div class="row g-3">
          <div class="col-md-6">
            <label class="form-label fw-medium">Current Password</label>
            <input type="password" class="form-control" placeholder="Enter Current Password">
          </div>

          <div class="col-md-6">
            <label class="form-label fw-medium">New Password</label>
            <input type="password" class="form-control" placeholder="Enter New Password">
          </div>

          <div class="col-md-6">
            <label class="form-label fw-medium">Confirm Password</label>
            <input type="password" class="form-control" placeholder="Enter Confirm Password">
          </div>
        </div>

        <button class="btn btn-dark mt-4">Update Password</button>
      </form>
    </div>
  </div>

</div>
@endsection