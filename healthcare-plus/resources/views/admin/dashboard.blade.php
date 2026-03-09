@extends('layouts.admin')

@section('title', 'Admin Dashboard')

@section('content')
<div class="container py-5">

  <div class="d-flex align-items-center justify-content-between flex-wrap gap-2 mb-4">
    <div>
      <h2 class="fw-bold mb-1">Admin Dashboard</h2>
      <p class="text-muted mb-0">Manage doctors, services, departments, and patients.</p>
    </div>
  </div>

  <div class="row g-4">

    <div class="col-md-6 col-lg-3">
      <div class="card border-0 shadow-sm rounded-4 h-100">
        <div class="card-body p-4">
          <div class="d-flex align-items-center justify-content-between">
            <div>
              <h6 class="text-muted mb-1">Doctors</h6>
              <h3 class="fw-bold mb-0">12</h3>
            </div>
            <i class="bi bi-person-badge fs-2 text-primary"></i>
          </div>
          <a href="{{ url('/admin/manage-doctors') }}" class="btn btn-outline-dark btn-sm mt-3">Manage</a>
        </div>
      </div>
    </div>

    <div class="col-md-6 col-lg-3">
      <div class="card border-0 shadow-sm rounded-4 h-100">
        <div class="card-body p-4">
          <div class="d-flex align-items-center justify-content-between">
            <div>
              <h6 class="text-muted mb-1">Services</h6>
              <h3 class="fw-bold mb-0">18</h3>
            </div>
            <i class="bi bi-hospital fs-2 text-primary"></i>
          </div>
          <a href="{{ url('/admin/manage-services') }}" class="btn btn-outline-dark btn-sm mt-3">Manage</a>
        </div>
      </div>
    </div>

    <div class="col-md-6 col-lg-3">
      <div class="card border-0 shadow-sm rounded-4 h-100">
        <div class="card-body p-4">
          <div class="d-flex align-items-center justify-content-between">
            <div>
              <h6 class="text-muted mb-1">Departments</h6>
              <h3 class="fw-bold mb-0">6</h3>
            </div>
            <i class="bi bi-diagram-3 fs-2 text-primary"></i>
          </div>
          <a href="{{ url('/admin/manage-departments') }}" class="btn btn-outline-dark btn-sm mt-3">Manage</a>
        </div>
      </div>
    </div>

    <div class="col-md-6 col-lg-3">
      <div class="card border-0 shadow-sm rounded-4 h-100">
        <div class="card-body p-4">
          <div class="d-flex align-items-center justify-content-between">
            <div>
              <h6 class="text-muted mb-1">Patients</h6>
              <h3 class="fw-bold mb-0">45</h3>
            </div>
            <i class="bi bi-people fs-2 text-primary"></i>
          </div>
          <a href="{{ url('/admin/delete-patients') }}" class="btn btn-outline-danger btn-sm mt-3">Delete</a>
        </div>
      </div>
    </div>

  </div>

</div>
@endsection