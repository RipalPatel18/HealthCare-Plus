@extends('layouts.site')

@section('content')

<section class="py-5">
  <div class="container">

    <div class="d-flex align-items-center justify-content-between flex-wrap gap-2 mb-4">
      <div>
        <h2 class="fw-bold mb-1">Doctor Profile</h2>
        <p class="text-muted mb-0">View details and book an appointment.</p>
      </div>

      <a href="{{ url('/find-doctor') }}" class="btn btn-outline-dark btn-sm">
        Back to Find Doctor
      </a>
    </div>

    <div class="row g-4">

      <!-- Left: Doctor Info -->
      <div class="col-lg-4">
        <div class="service-card h-100">
          <div class="p-4 text-center">
            <img
              src="{{ asset('images/doctors/doctor1.jpg') }}"
              onerror="this.src='https://via.placeholder.com/160x160?text=Doctor';"
              class="rounded-circle mb-3"
              style="width:160px;height:160px;object-fit:cover;"
              alt="Doctor">

            <h4 class="fw-bold mb-1">Dr. Sarah Johnson</h4>
            <p class="text-muted mb-3">Cardiologist</p>

            <div class="d-flex justify-content-center gap-2 mb-3">
              <span class="badge bg-primary">10+ Years</span>
              <span class="badge bg-success">Available</span>
            </div>

            <div class="text-start mt-4">
              <p class="mb-2"><i class="bi bi-geo-alt me-2"></i> Toronto, ON</p>
              <p class="mb-2"><i class="bi bi-envelope me-2"></i> doctor@healthcareplus.com</p>
              <p class="mb-0"><i class="bi bi-telephone me-2"></i> +1 (647) 123-4567</p>
            </div>

            <a href="{{ url('/book-appointment') }}" class="btn btn-primary w-100 mt-4">
              Book Appointment
            </a>
          </div>
        </div>
      </div>

      <!-- Right: About + Availability -->
      <div class="col-lg-8">
        <div class="service-card mb-4">
          <div class="p-4 p-md-5">
            <h5 class="fw-bold mb-3">About</h5>
            <p class="text-muted mb-0">
              Dr. Sarah Johnson is a board-certified cardiologist with over 10 years of experience.
              Specializes in heart health screening, diagnosis, and preventive care.
            </p>
          </div>
        </div>

        <div class="service-card">
          <div class="p-4 p-md-5">
            <h5 class="fw-bold mb-3">Available Time Slots</h5>

            <div class="row g-3">
              <div class="col-md-4">
                <div class="border rounded-3 p-3 text-center">
                  <div class="fw-semibold">Mon</div>
                  <div class="text-muted small">10:00 AM - 1:00 PM</div>
                </div>
              </div>

              <div class="col-md-4">
                <div class="border rounded-3 p-3 text-center">
                  <div class="fw-semibold">Wed</div>
                  <div class="text-muted small">2:00 PM - 5:00 PM</div>
                </div>
              </div>

              <div class="col-md-4">
                <div class="border rounded-3 p-3 text-center">
                  <div class="fw-semibold">Fri</div>
                  <div class="text-muted small">9:00 AM - 12:00 PM</div>
                </div>
              </div>
            </div>

            <div class="alert alert-info mt-4 mb-0">
              <i class="bi bi-info-circle me-2"></i>
              Select a slot while booking an appointment.
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>
</section>

@endsection