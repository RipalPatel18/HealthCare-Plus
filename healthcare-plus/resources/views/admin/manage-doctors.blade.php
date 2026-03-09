@extends('layouts.admin')

@section('title', 'Manage Doctors')

@section('content')
<div class="container py-5">

  <div class="d-flex align-items-center justify-content-between flex-wrap gap-2 mb-4">
    <div>
      <h2 class="fw-bold mb-1">Manage Doctors</h2>
      <p class="text-muted mb-0">Add, edit, and remove doctor profiles.</p>
    </div>

    <a href="{{ url('/admin/manage-doctors/create') }}" class="btn btn-primary">
      <i class="bi bi-plus-lg me-1"></i> Add Doctor
    </a>
  </div>

  <div class="card border-0 shadow-sm rounded-4">
    <div class="card-body p-0">
      <div class="table-responsive">
        <table class="table table-hover align-middle mb-0">
          <thead class="table-light">
            <tr>
              <th class="py-3 ps-4">Doctor</th>
              <th class="py-3">Specialty</th>
              <th class="py-3">Email</th>
              <th class="py-3">Status</th>
              <th class="py-3 text-end pe-4">Actions</th>
            </tr>
          </thead>

          <tbody>
            {{-- Demo rows (DB later) --}}
            <tr>
              <td class="ps-4 fw-semibold">Dr. Sarah Johnson</td>
              <td>Cardiology</td>
              <td>sarah@healthcareplus.com</td>
              <td><span class="badge text-bg-success">Active</span></td>
              <td class="text-end pe-4">
                <a href="{{ url('/admin/manage-doctors/1/edit') }}" class="btn btn-outline-dark btn-sm">Edit</a>
                <a href="{{ url('/admin/manage-doctors/1/delete') }}" class="btn btn-outline-danger btn-sm ms-1">Delete</a>
              </td>
            </tr>

            <tr>
              <td class="ps-4 fw-semibold">Dr. Amit Patel</td>
              <td>Dermatology</td>
              <td>amit@healthcareplus.com</td>
              <td><span class="badge text-bg-success">Active</span></td>
              <td class="text-end pe-4">
                <a href="{{ url('/admin/manage-doctors/2/edit') }}" class="btn btn-outline-dark btn-sm">Edit</a>
                <a href="{{ url('/admin/manage-doctors/2/delete') }}" class="btn btn-outline-danger btn-sm ms-1">Delete</a>
              </td>
            </tr>

            <tr>
              <td class="ps-4 fw-semibold">Dr. Emma Lee</td>
              <td>Pediatrics</td>
              <td>emma@healthcareplus.com</td>
              <td><span class="badge text-bg-secondary">Inactive</span></td>
              <td class="text-end pe-4">
                <a href="{{ url('/admin/manage-doctors/3/edit') }}" class="btn btn-outline-dark btn-sm">Edit</a>
                <a href="{{ url('/admin/manage-doctors/3/delete') }}" class="btn btn-outline-danger btn-sm ms-1">Delete</a>
              </td>
            </tr>

            {{-- No data state later --}}
            {{--
            <tr>
              <td colspan="5" class="text-center py-5 text-muted">
                No doctors found.
              </td>
            </tr>
            --}}
          </tbody>
        </table>
      </div>
    </div>
  </div>

</div>
@endsection