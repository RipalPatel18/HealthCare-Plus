@extends('layouts.doctor')

@section('title', 'Doctor Appointments')

@section('content')
<div class="container py-5">

  <div class="d-flex align-items-center justify-content-between flex-wrap gap-2 mb-4">
    <div>
      <h2 class="fw-bold mb-1">Appointments</h2>
      <p class="text-muted mb-0">View upcoming patient appointments.</p>
    </div>
  </div>

  <div class="card border-0 shadow-sm rounded-4">
    <div class="card-body p-0">
      <div class="table-responsive">
        <table class="table table-hover align-middle mb-0">
          <thead class="table-light">
            <tr>
              <th class="py-3 ps-4">Patient</th>
              <th class="py-3">Date</th>
              <th class="py-3">Time</th>
              <th class="py-3">Reason</th>
              <th class="py-3 text-end pe-4">Action</th>
            </tr>
          </thead>

          <tbody>
            {{-- Demo rows (DB later) --}}
            <tr>
              <td class="ps-4 fw-semibold">Ripal Patel</td>
              <td>Mar 05, 2026</td>
              <td>10:30 AM</td>
              <td class="text-muted">General Consultation</td>
              <td class="text-end pe-4">
                <a href="#" class="btn btn-outline-dark btn-sm">View</a>
                <a href="#" class="btn btn-outline-success btn-sm ms-1">Confirm</a>
                <a href="#" class="btn btn-outline-danger btn-sm ms-1">Cancel</a>
              </td>
            </tr>

            <tr>
              <td class="ps-4 fw-semibold">Patient One</td>
              <td>Mar 06, 2026</td>
              <td>02:15 PM</td>
              <td class="text-muted">Follow-up</td>
              <td class="text-end pe-4">
                <a href="#" class="btn btn-outline-dark btn-sm">View</a>
                <a href="#" class="btn btn-outline-success btn-sm ms-1">Confirm</a>
                <a href="#" class="btn btn-outline-danger btn-sm ms-1">Cancel</a>
              </td>
            </tr>

            <tr>
              <td class="ps-4 fw-semibold">Patient Two</td>
              <td>Mar 08, 2026</td>
              <td>11:00 AM</td>
              <td class="text-muted">Lab Review</td>
              <td class="text-end pe-4">
                <a href="#" class="btn btn-outline-dark btn-sm">View</a>
                <a href="#" class="btn btn-outline-success btn-sm ms-1">Confirm</a>
                <a href="#" class="btn btn-outline-danger btn-sm ms-1">Cancel</a>
              </td>
            </tr>

            {{-- No data state (later when DB) --}}
            {{--
            <tr>
              <td colspan="5" class="text-center py-5 text-muted">
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