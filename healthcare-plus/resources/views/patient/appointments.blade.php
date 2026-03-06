@extends('layouts.patient')

@section('title', 'My Appointments')

@section('content')
<div class="container py-5">

  <div class="d-flex align-items-center justify-content-between flex-wrap gap-2 mb-4">
    <div>
      <h2 class="fw-bold mb-1">My Appointments</h2>
      <p class="text-muted mb-0">View and manage your upcoming appointments.</p>
    </div>

    <a href="{{ url('/book-appointment') }}" class="btn btn-primary">
      <i class="bi bi-calendar2-plus me-1"></i> Book Appointment
    </a>
  </div>

  <div class="card border-0 shadow-sm rounded-4">
    <div class="card-body p-0">
      <div class="table-responsive">
        <table class="table align-middle mb-0">
          <thead class="table-light">
            <tr>
              <th class="py-3 ps-4">Doctor</th>
              <th class="py-3">Department</th>
              <th class="py-3">Date</th>
              <th class="py-3">Time</th>
              <th class="py-3">Status</th>
              <th class="py-3 text-end pe-4">Action</th>
            </tr>
          </thead>

          <tbody>
            {{-- Demo rows (DB later) --}}
            <tr>
              <td class="ps-4 fw-semibold">Dr. Sarah Johnson</td>
              <td>Cardiology</td>
              <td>Mar 06, 2026</td>
              <td>10:30 AM</td>
              <td><span class="badge text-bg-success">Upcoming</span></td>
              <td class="text-end pe-4">
                <a href="#" class="btn btn-outline-danger btn-sm">Cancel</a>
              </td>
            </tr>

            <tr>
              <td class="ps-4 fw-semibold">Dr. Emma Lee</td>
              <td>Pediatrics</td>
              <td>Mar 10, 2026</td>
              <td>02:00 PM</td>
              <td><span class="badge text-bg-success">Upcoming</span></td>
              <td class="text-end pe-4">
                <a href="#" class="btn btn-outline-danger btn-sm">Cancel</a>
              </td>
            </tr>

            <tr>
              <td class="ps-4 fw-semibold">Dr. Amit Patel</td>
              <td>Dermatology</td>
              <td>Feb 20, 2026</td>
              <td>11:00 AM</td>
              <td><span class="badge text-bg-secondary">Completed</span></td>
              <td class="text-end pe-4">
                <a href="#" class="btn btn-outline-dark btn-sm">View</a>
              </td>
            </tr>

            {{-- Empty state later --}}
            {{--
            <tr>
              <td colspan="6" class="text-center py-5 text-muted">
                No appointments found.
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