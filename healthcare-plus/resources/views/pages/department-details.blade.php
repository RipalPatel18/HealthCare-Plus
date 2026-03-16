@extends('layouts.site')

@section('content')
<section class="py-5" style="background:#f4f8fc;">
  <div class="container">

   <!-- Breadcrumb so user knows where they are -->
    <nav class="mb-4">
      <span class="text-muted small">
        <a href="{{ route('home') }}" class="text-muted text-decoration-none">Home</a> /
        <a href="{{ route('services') }}" class="text-muted text-decoration-none">Services</a> /
        {{ $department->name }}
      </span>
    </nav>

    <!-- Main department info card  -->
    <div class="card border-0 shadow-sm rounded-4 mb-4">
      <div class="card-body p-4">

        <!-- Department name and description from database -->
        <h5 class="fw-bold mb-2">{{ $department->name }} Department</h5>
        <p class="text-muted mb-4">
          {{ $department->description ?? 'Specialized healthcare services and expert consultation.' }}
        </p>

       <!-- Quick info row: location, phone, email, doctor count -->
        <div class="row g-3 mb-4">
          <div class="col-6 col-md-3">
            <div class="d-flex align-items-start gap-2">
              <i class="bi bi-geo-alt text-primary mt-1"></i>
              <div>
                <div class="fw-semibold small">Location</div>
                <div class="text-muted small">Main Building</div>
              </div>
            </div>
          </div>
          <div class="col-6 col-md-3">
            <div class="d-flex align-items-start gap-2">
              <i class="bi bi-telephone text-primary mt-1"></i>
              <div>
                <div class="fw-semibold small">Phone</div>
                <div class="text-muted small">+1 (647) 123-4567</div>
              </div>
            </div>
          </div>
          <div class="col-6 col-md-3">
            <div class="d-flex align-items-start gap-2">
              <i class="bi bi-envelope text-primary mt-1"></i>
              <div>
                <div class="fw-semibold small">Email</div>
                <div class="text-muted small">support@healthcareplus.com</div>
              </div>
            </div>
          </div>
          <div class="col-6 col-md-3">
            <div class="d-flex align-items-start gap-2">
              <i class="bi bi-people text-primary mt-1"></i>
              <div>
                <div class="fw-semibold small">Doctors</div>

                <!-- Count doctors in this department dynamically -->
                
                <div class="text-muted small">{{ $doctors->count() }} Specialist{{ $doctors->count() != 1 ? 's' : '' }}</div>
              </div>
            </div>
          </div>
        </div>

       <!-- Department opening hours -->

        <div class="card border rounded-3 p-3">
          <div class="fw-semibold mb-1">Department Hours</div>
          <div class="text-muted small">Monday - Friday: 8:00 AM - 6:00 PM, Saturday: 9:00 AM - 2:00 PM</div>
        </div>

      </div>
    </div>



  <!-- Services offered in this department from database -->
    <div class="card border-0 shadow-sm rounded-4 mb-4">
      <div class="card-body p-4">
        <h5 class="fw-semibold mb-4">Services Offered</h5>

        <div class="row g-3">
          @forelse($services as $service)
            <div class="col-md-6">
              <div class="card border rounded-3 p-3 h-100">


                <!-- Service name and duration -->


                <div class="d-flex justify-content-between align-items-start mb-1">
                  <span class="fw-semibold">{{ $service->name }}</span>
                  <span class="badge bg-light text-dark border">{{ $service->duration_minutes }} mins</span>
                </div>


           <!-- Service description from database -->
                <p class="text-muted small mb-0">
                  {{ $service->description ?? 'Healthcare service and consultation.' }}
                </p>
              </div>
            </div>
          @empty
            <div class="col-12">
              <p class="text-muted">No services found for this department.</p>
            </div>
          @endforelse
        </div>
      </div>
    </div>

    <!-- Doctors that belong to this department from database -->
    <div class="card border-0 shadow-sm rounded-4 mb-4">
      <div class="card-body p-4">
        <h5 class="fw-semibold mb-4">Our Doctors</h5>

        <div class="row g-3">
          @forelse($doctors as $doctor)
            <div class="col-md-6">
              <div class="card border rounded-3 p-3 h-100">
                <div class="d-flex align-items-center gap-3">
                <!-- Doctor photo, fallback to default if no image -->
                  <img src="{{ asset('images/doctors/' . ($doctor->image ?? 'default.jpg')) }}"
                       alt="{{ $doctor->name }}"
                       class="rounded-3 border"
                       style="width:70px;height:70px;object-fit:cover;">
                  <div>
                    <h6 class="fw-bold mb-1">{{ $doctor->name }}</h6>
                    <p class="text-muted small mb-2">{{ $department->name }}</p>
                   <!-- Link to doctor profile page -->
                    <a href="{{ route('doctor-profile', $doctor->id) }}"
                       class="btn btn-primary btn-sm px-3">View Profile</a>
                  </div>
                </div>
              </div>
            </div>
          @empty
            <div class="col-12">
              <p class="text-muted">No doctors found in this department.</p>
            </div>
          @endforelse
        </div>
      </div>
    </div>

   <!-- buttons at the bottom -->
    <div class="d-flex gap-3 flex-wrap">
      <a href="{{ route('book-appointment') }}" class="btn btn-primary px-4">Book Appointment</a>
      <a href="{{ route('services') }}" class="btn btn-success px-4">Back to Services</a>
    </div>

  </div>
</section>
@endsection