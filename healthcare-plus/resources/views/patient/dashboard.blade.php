@extends('layouts.patient')

@section('title', 'Patient Dashboard')

@section('content')
<div class="container py-5">


  <div class="d-flex align-items-center justify-content-between flex-wrap gap-2 mb-4">
    <div>
      <h2 class="fw-bold mb-1">Patient Dashboard</h2>

      <p class="text-muted mb-0">Quick access to your appointments, records, and profile.</p>
    </div>

    <a href="{{ url('/book-appointment') }}" class="btn btn-primary">

      <i class="bi bi-calendar2-plus me-1"></i> Book Appointment
    </a>

  </div>


  <div class="row g-4">


    <!-- Upcoming Appointments -->

    <div class="col-lg-6">
      <div class="card border-0 shadow-sm rounded-4 h-100">

        <div class="card-body p-4">
          <div class="d-flex justify-content-between align-items-center mb-3">
            <h5 class="fw-bold mb-0">Upcoming Appointments</h5>
            <a href="{{ url('/patient/appointments') }}" class="btn btn-outline-dark btn-sm">View All</a>
          </div>


          <div class="table-responsive">

            <table class="table align-middle mb-0">
              <thead class="table-light">

                <tr>
                  <th>Doctor</th>
                  <th>Date</th>
                  <th>Time</th>
                  <th class="text-end">Action</th>

                </tr>

              </thead>
              <tbody>
                <tr>
                  <td class="fw-semibold">Dr. Sarah Johnson</td>
                  <td>Mar 06, 2026</td>
                  <td>10:30 AM</td>
                  <td class="text-end">

                    <a href="#" class="btn btn-outline-danger btn-sm">Cancel</a>
                  </td>

                </tr>
                <tr>
                  <td class="fw-semibold">Dr. Emma Lee</td>
                  <td>Mar 10, 2026</td>
                  <td>02:00 PM</td>

                  <td class="text-end">

                    <a href="#" class="btn btn-outline-danger btn-sm">Cancel</a>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>

       
        </div>
      </div>
    </div>

    <!-- Health Records -->
    <div class="col-lg-6">
      <div class="card border-0 shadow-sm rounded-4 h-100">
        <div class="card-body p-4">

          <div class="d-flex justify-content-between align-items-center mb-3">

            <h5 class="fw-bold mb-0">Health Records</h5>

            <a href="{{ url('/patient/records') }}" class="btn btn-outline-dark btn-sm">View All</a>
          </div>

          <ul class="list-group list-group-flush">
            <li class="list-group-item d-flex justify-content-between align-items-center px-0">
              <div>
                <div class="fw-semibold">Lab Report</div>
                <div class="text-muted small">Feb 20, 2026</div>

              </div>
              <a href="#" class="btn btn-outline-dark btn-sm">View</a>
            </li>


            <li class="list-group-item d-flex justify-content-between align-items-center px-0">
              <div>
                <div class="fw-semibold">Prescription</div>
                <div class="text-muted small">Feb 12, 2026</div>

              </div>
              <a href="#" class="btn btn-outline-dark btn-sm">View</a>
            </li>

            <li class="list-group-item d-flex justify-content-between align-items-center px-0">
              <div>
                <div class="fw-semibold">X-Ray</div>

                <div class="text-muted small">Jan 30, 2026</div>
              </div>
              <a href="#" class="btn btn-outline-dark btn-sm">View</a>
            </li>
          </ul>
        </div>
      </div>
    </div>

    <!-- Profile Shortcut -->
    <div class="col-12">

      <div class="card border-0 shadow-sm rounded-4">
        <div class="card-body p-4 d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-center gap-3">
          <div>
            <h5 class="fw-bold mb-1">Profile</h5>

            <p class="text-muted mb-0">Update your personal info and password.</p>
          </div>

          <a href="{{ url('/patient/profile') }}" class="btn btn-outline-dark">
            Go to Profile
            
          </a>
        </div>
      </div>
    </div>

  </div>
</div>
@endsection