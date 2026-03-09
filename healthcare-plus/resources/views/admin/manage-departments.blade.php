@extends('layouts.admin')

@section('title', 'Manage Departments')

@section('content')
<div class="container py-5">

  <h3 class="fw-semibold mb-4">Manage Services & Departments</h3>

  <!-- Tabs -->
  <div class="d-flex align-items-center gap-3 mb-4">
    <a href="{{ url('/admin/manage-services') }}" class="btn btn-outline-dark px-4">Services</a>
    <a href="{{ url('/admin/manage-departments') }}" class="btn btn-dark px-4">Departments</a>
  </div>

  <!-- Add Department Button -->
  <div class="mb-4">
    <a href="{{ route('admin.departments.create') }}" class="btn btn-dark px-4">
        Add Department
    </a>
</div>

  <!-- Table -->
  <div class="card border-0 shadow-sm rounded-4">
    <div class="card-body p-0">
      <div class="table-responsive">
        <table class="table align-middle mb-0">
          <thead class="table-light">
            <tr>
              <th class="py-3 ps-4">Department Name</th>
              <th class="py-3">Description</th>
              <th class="py-3 text-center pe-4">Actions</th>
            </tr>
          </thead>

          <tbody>
            {{-- Static rows for UI (DB later) --}}
            @php
              $rows = [
                ['Cardiology','Heart and cardiovascular care'],
                ['Pediatrics','Healthcare for children'],
                ['Orthopedics','Bone and joint treatment'],
                ['Dermatology','Skin care and treatment'],
                ['Radiology','Imaging and diagnostics'],
                ['Diagnostics','Lab tests and screening'],
              ];
            @endphp

            @foreach($rows as $r)
              <tr>
                <td class="ps-4 fw-semibold">{{ $r[0] }}</td>
                <td class="text-muted">{{ $r[1] }}</td>
                <td class="text-center pe-4">
                  <a href="#" class="btn btn-dark btn-sm px-4 me-2">Edit</a>
                  <a href="#" class="btn btn-outline-dark btn-sm px-4">Delete</a>
                </td>
              </tr>
            @endforeach

          </tbody>
        </table>
      </div>
    </div>
  </div>

</div>
@endsection