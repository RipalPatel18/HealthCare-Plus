@extends('layouts.site')

@section('content')

  <section class="py-5 bg-white">
    <div class="container">

      <div class="text-center mb-5 fade-in">
        <h1 class="fw-bold section-title mb-2">Find a Doctor</h1>

        <p class="text-muted mb-0">Search doctors by name, specialty, and location.</p>
      </div>

      <!-- Search Filters -->
      <div class="service-card mb-4">
        <div class="p-4">

          <form method="GET" class="row g-3 align-items-end">


            <div class="col-md-4">
              <label class="form-label fw-semibold">Doctor Name</label>

              <input type="text" class="form-control" placeholder="e.g. Dr. John">
            </div>

            <div class="col-md-3">
              <label class="form-label fw-semibold">Specialty</label>
              <select class="form-select">
                <option selected>All</option>
                <option>Cardiology</option>

                <option>Dermatology</option>
                <option>Pediatrics</option>

                <option>Orthopedics</option>
              </select>
            </div>

            <div class="col-md-3">
              <label class="form-label fw-semibold">Location</label>
              <input type="text" class="form-control" placeholder="Toronto">
            </div>

            <div class="col-md-2 d-grid">
              <button type="submit" class="btn btn-primary">
                <i class="bi bi-search me-1"></i> Search

              </button>
            </div>

          </form>
        </div>
      </div>

      <!-- Doctors List -->
      <div class="row g-4">

        <!-- Doctor Card 1 -->
        <div class="col-md-6 col-lg-4">
          <div class="service-card h-100">
            <div class="p-4 text-center">
              <!-- https://www.freepik.com/free-photo/female-doctor-hospital_12164476.htm#fromView=search&page=1&position=5&uuid=1ec67fd1-4b61-4f5f-b47d-829c31706661&query=doctors+images -->
              <img src="{{ asset('images/doctors/doctor1.jpg') }}"
                onerror="this.onerror=null; this.src='{{ asset('images/Sarah.jpg') }}';" class="rounded-circle mb-3"
                style="width:140px;height:140px;object-fit:cover;" alt="Doctor">

              <h5 class="fw-bold mb-1">Dr. Sarah Johnson</h5>

              <p class="text-muted mb-2">Cardiologist</p>

              <div class="d-flex justify-content-center gap-2 mb-3">
                <span class="badge bg-primary">10+ Years</span>
                <span class="badge bg-success">Available</span>

              </div>

              <a href="{{ url('/doctor-profile') }}" class="btn btn-dark btn-sm px-4">

                View Profile
              </a>
            </div>
          </div>
        </div>

        <!-- Doctor Card 2 -->
        <div class="col-md-6 col-lg-4">
          <div class="service-card h-100">
            <div class="p-4 text-center">
              <!-- https://www.freepik.com/free-ai-image/nurse-portrait-hospital_66191503.htm#fromView=search&page=1&position=32&uuid=0f64edfa-2ba1-4cee-8626-6f32f9b89346&query=doctors+images+ -->
              <img src="{{ asset('images/doctors/doctor2.jpg') }}"
                onerror="this.onerror=null; this.src='{{ asset('images/Amit.jpg') }}';" class="rounded-circle mb-3"
                style="width:140px;height:140px;object-fit:cover;" alt="Doctor">

              <h5 class="fw-bold mb-1">Dr. Amit Patel</h5>

              <p class="text-muted mb-2">Dermatologist</p>

              <div class="d-flex justify-content-center gap-2 mb-3">

                <span class="badge bg-primary">7+ Years</span>
                <span class="badge bg-danger">Busy</span>

              </div>

              <a href="{{ url('/doctor-profile') }}" class="btn btn-dark btn-sm px-4">
                View Profile
              </a>
            </div>
          </div>
        </div>

        <!-- Doctor Card 3 -->
        <div class="col-md-6 col-lg-4">
          <div class="service-card h-100">

            <div class="p-4 text-center">
              <!-- https://www.freepik.com/free-ai-image/confident-doctor-clinic_418010511.htm#fromView=search&page=1&position=0&uuid=0f64edfa-2ba1-4cee-8626-6f32f9b89346&query=doctors+images+ -->
              <img src="{{ asset('images/doctors/doctor3.jpg') }}"
                onerror="this.onerror=null; this.src='{{ asset('images/Emma.jpg') }}';" class="rounded-circle mb-3"
                style="width:140px;height:140px;object-fit:cover;" alt="Doctor">

              <h5 class="fw-bold mb-1">Dr. Emma Lee</h5>

              <p class="text-muted mb-2">Pediatrician</p>

              <div class="d-flex justify-content-center gap-2 mb-3">
                <span class="badge bg-primary">5+ Years</span>
                <span class="badge bg-success">Available</span>

              </div>

              <a href="{{ url('/doctor-profile') }}" class="btn btn-dark btn-sm px-4">
                View Profile
              </a>
            </div>
          </div>
        </div>

      </div>


    </div>
  </section>

@endsection