@extends('layouts.site')

@section('content')

{{-- HERO section --}}
<section class="hero-section d-flex align-items-center"
         style="background:
         linear-gradient(rgba(198, 198, 198, 0), rgba(0, 0, 0, 0)),
         url('{{ asset('images/hero-doctor.png') }}') right  / contain no-repeat;
         background-color:#f4f8fb;">

  <div class="container text-primary">
    <div class="row">
      <div class="col-lg-6">

    

        <h1 class="display-4 fw-bold mb-3">
          Your Health,<br>Our Priority
        </h1>

        
            <p class="lead mb-4 text-dark" style="max-width:520px;">
          Book appointments with trusted doctors, explore healthcare services,
          and manage your medical records securely — anytime.
        </p>

        <div class="d-flex gap-3 flex-wrap">
          <a href="{{ url('/book-appointment') }}"
             class="btn btn-primary btn-lg px-4">
            Book Appointment
          </a>

          <a href="{{ url('/find-doctor') }}"
             class="btn btn-success btn-lg px-4">
            Find a Doctor
          </a>
        </div>

      </div>
    </div>
  </div>

</section>

{{-- WHY CHOOSE US --}}
<section class="py-5">
  <div class="container">
    <h2 class="text-center fw-bold section-title mb-4">Why Choose Us</h2>

    <div class="row g-4 justify-content-center">
      <div class="col-md-4">
        <div class="feature-card text-center h-100">
          <div class="display-6 mb-2 text-primary"><i class="bi bi-calendar2-check"></i></div>
          <h5 class="fw-semibold">Easy Scheduling</h5>
          <p class="text-muted small mb-0">
            Book appointments online 24/7. Pick a date, time, and doctor in seconds.
          </p>
        </div>
      </div>

      <div class="col-md-4">
        <div class="feature-card text-center h-100">
          <div class="display-6 mb-2 text-success"><i class="bi bi-person-badge"></i></div>
          <h5 class="fw-semibold">Expert Doctors</h5>
          <p class="text-muted small mb-0">
            Browse verified profiles by specialization, location, and availability.
          </p>
        </div>
      </div>

      <div class="col-md-4">
        <div class="feature-card text-center h-100">
          <div class="display-6 mb-2 text-danger"><i class="bi bi-file-earmark-medical"></i></div>
          <h5 class="fw-semibold">Digital Records</h5>
          <p class="text-muted small mb-0">
            Keep your health information secure and accessible from your dashboard.
          </p>
        </div>
      </div>
    </div>
  </div>
</section>

{{-- OUR SERVICES -}}
<section class="py-5">
  <div class="container">
    <h2 class="text-center fw-bold section-title mb-2">Our Services</h2>
    <p class="text-center text-muted mb-4">
      Comprehensive services across multiple specialties to meet your medical needs.
    </p>

    <div class="row g-4 justify-content-center">
      <div class="col-md-4">
        <div class="service-card h-100">
          <img class="service-img" src="https://images.unsplash.com/photo-1559757175-0eb30cd8c063?auto=format&fit=crop&w=1200&q=80" alt="Cardiology">
          <div class="p-3 text-center">
            <h6 class="fw-semibold text-primary mb-1">Cardiology</h6>
            <p class="text-muted small mb-0">
              Heart screenings, diagnostics, and treatment plans.
            </p>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="service-card h-100">
          <img class="service-img" src="https://images.unsplash.com/photo-1580281657527-47f249e8f6b6?auto=format&fit=crop&w=1200&q=80" alt="Pediatrics">
          <div class="p-3 text-center">
            <h6 class="fw-semibold text-primary mb-1">Pediatrics</h6>
            <p class="text-muted small mb-0">
              Care for infants, children, and adolescents.
            </p>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="service-card h-100">
          <img class="service-img" src="https://images.unsplash.com/photo-1588776814546-1ffcf47267a5?auto=format&fit=crop&w=1200&q=80" alt="Orthopedics">
          <div class="p-3 text-center">
            <h6 class="fw-semibold text-primary mb-1">Orthopedics</h6>
            <p class="text-muted small mb-0">
              Bone, joint, and muscle care + recovery support.
            </p>
          </div>
        </div>
      </div>
    </div>

    <div class="text-center mt-4">
      <a href="{{ url('/services') }}" class="btn btn-dark px-4">View All Services</a>
    </div>
  </div>
</section>

{{-- Contact info section --}}
<section class="py-5">
  <div class="container">
    <div class="p-4 p-md-5 rounded-4 text-white" style="background: #1565C0;">
      <div class="row align-items-center g-3">
        <div class="col-md-8">
          <h3 class="fw-bold mb-2">Need help booking an appointment?</h3>
          <p class="mb-0" style="opacity:.9;">
            Our support team can help you find the right doctor and schedule faster.
          </p>
        </div>
        <div class="col-md-4 text-md-end">
          <a href="{{ url('/contact') }}" class="btn btn-light px-4">Contact Us</a>
          <a href="{{ url('/find-doctor') }}" class="btn btn-outline-light px-4 ms-2">Browse Doctors</a>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection
