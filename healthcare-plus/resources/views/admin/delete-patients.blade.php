@extends('layouts.admin')

@section('title', 'Delete Patient Accounts')

@section('content')
<div class="container py-5">

  <div class="d-flex align-items-center justify-content-between flex-wrap gap-2 mb-4">
    <div>
      <h2 class="fw-bold mb-1">Delete Patient Accounts</h2>
      <p class="text-muted mb-0">Search and remove patient accounts</p>
    </div>
  </div>

  <!-- Search -->
  <div class="card border-0 shadow-sm rounded-4 mb-4">
    <div class="card-body p-4">
      <div class="row g-3 align-items-end">
        <div class="col-md-6">
          <label class="form-label fw-semibold">Search Patient</label>
          <input type="text" class="form-control" placeholder="Search by name or email...">
        </div>
        <div class="col-md-3">
          <label class="form-label fw-semibold">Status</label>
          <select class="form-select">
            <option selected>All</option>
            <option>Active</option>
            <option>Inactive</option>
          </select>
        </div>
        <div class="col-md-3 d-grid">
          <button class="btn btn-dark">Search</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Patients Table -->
  <div class="card border-0 shadow-sm rounded-4">
    <div class="card-body p-0">
      <div class="table-responsive">
        <table class="table align-middle mb-0">
          <thead class="table-light">
            <tr>
              <th class="py-3 ps-4">Patient Name</th>
              <th class="py-3">Email</th>
              <th class="py-3">Created</th>
              <th class="py-3">Status</th>
              <th class="py-3 text-end pe-4">Action</th>
            </tr>
          </thead>

          <tbody>
            {{-- Demo rows (DB later) --}}
            <tr>
              <td class="ps-4 fw-semibold">Ripal Patel</td>
              <td>ripal@email.com</td>
              <td>Feb 10, 2026</td>
              <td><span class="badge text-bg-success">Active</span></td>
              <td class="text-end pe-4">
                <a href="{{ url('/admin/delete-patients/1/confirm') }}" class="btn btn-outline-danger btn-sm">
                  Delete
                </a>
              </td>
            </tr>

            <tr>
              <td class="ps-4 fw-semibold">John Smith</td>
              <td>john@email.com</td>
              <td>Jan 28, 2026</td>
              <td><span class="badge text-bg-secondary">Inactive</span></td>
              <td class="text-end pe-4">
                <a href="{{ url('/admin/delete-patients/2/confirm') }}" class="btn btn-outline-danger btn-sm">
                  Delete
                </a>
              </td>
            </tr>

            <tr>
              <td class="ps-4 fw-semibold">Aisha Khan</td>
              <td>aisha@email.com</td>
              <td>Jan 12, 2026</td>
              <td><span class="badge text-bg-success">Active</span></td>
              <td class="text-end pe-4">
                <a href="{{ url('/admin/delete-patients/3/confirm') }}" class="btn btn-outline-danger btn-sm">
                  Delete
                </a>
              </td>
            </tr>

          </tbody>
        </table>
      </div>
    </div>
  </div>

</div>
@endsection