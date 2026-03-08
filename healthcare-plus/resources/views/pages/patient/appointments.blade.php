@extends('layouts.patient')

@section('content')
<div class="container py-5">

  <div class="d-flex align-items-center justify-content-between mb-4">
    <div>
      <h2 class="fw-bold mb-1">My Appointments</h2>
      <p class="text-muted mb-0">View your upcoming and past appointments.</p>
    </div>

    <a href="{{ url('/book-appointment') }}" class="btn btn-primary">
      <i class="bi bi-plus-lg me-1"></i> Book New
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
              <th class="py-3">Date</th>
              <th class="py-3">Time</th>
              <th class="py-3">Status</th>
              <th class="py-3 text-end pe-4">Action</th>
            </tr>
          </thead>

          <tbody>
            <!-- Demo data -->
            <tr>
              <td class="ps-4 fw-semibold">Dr. Sarah Johnson</td>
              <td>Cardiology</td>
              <td>Mar 10, 2026</td>
              <td>10:30 AM</td>
              <td><span class="badge text-bg-success">Upcoming</span></td>
              <td class="text-end pe-4">
                <a href="#" class="btn btn-outline-dark btn-sm">View</a>
                <a href="#" class="btn btn-outline-danger btn-sm ms-1">Cancel</a>
              </td>
            </tr>

            <tr>
              <td class="ps-4 fw-semibold">Dr. Amit Patel</td>
              <td>Dermatology</td>
              <td>Feb 18, 2026</td>
              <td>02:00 PM</td>
              <td><span class="badge text-bg-secondary">Completed</span></td>
              <td class="text-end pe-4">
                <a href="#" class="btn btn-outline-dark btn-sm">View</a>
              </td>
            </tr>

            <tr>
              <td class="ps-4 fw-semibold">Dr. Emma Lee</td>
              <td>Pediatrics</td>
              <td>Jan 29, 2026</td>
              <td>11:15 AM</td>
              <td><span class="badge text-bg-danger">Cancelled</span></td>
              <td class="text-end pe-4">
                <a href="#" class="btn btn-outline-dark btn-sm">View</a>
              </td>
            </tr>

             <!-- If their is no appointments  -->
<!--            
            <tr>
              <td colspan="6" class="text-center py-5 text-muted">
                No appointments found.
              </td>
            </tr>  -->
            
          </tbody>
        </table>
      </div>
    </div>
  </div>

</div>
@endsection