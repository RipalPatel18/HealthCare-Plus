@extends('layouts.site')

@section('content')
<section class="py-5" style="background:#f4f8fc;">
  <div class="container">

    {{-- Header --}}
    <div class="text-center mb-5">
      <h1 class="fw-bold section-title mb-2">{{ $department->name }}</h1>
      <p class="text-muted mb-0">{{ $department->description ?? 'Specialized healthcare services and expert consultation.' }}</p>
    </div>

    {{-- Doctors in this department --}}
    <h3 class="fw-bold mb-3">Our Doctors</h3>
    <div class="row g-4 mb-5">
      @forelse($doctors as $doctor)
        <div class="col-md-6 col-lg-4">
          <div class="service-card h-100">
            <div class="p-4 d-flex align-items-center gap-3">
              <img src="{{ asset('images/doctors/' . ($doctor->image ?? 'default.jpg')) }}"
                   alt="{{ $doctor->name }}"
                   class="rounded-3 border"
                   style="width:70px;height:70px;object-fit:cover;">
              <div>
                <h6 class="fw-bold mb-1">{{ $doctor->name }}</h6>
                <p class="text-muted small mb-2">{{ $department->name }}</p>
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

    {{-- Services in this department --}}
    <h3 class="fw-bold mb-3">Available Services</h3>
    <div class="card border-0 shadow-sm rounded-4 mb-4">
      <div class="card-body p-0">
        <div class="table-responsive">
          <table class="table table-bordered align-middle mb-0">
            <thead class="table-light">
              <tr>
                <th class="py-3 ps-4">Service Name</th>
                <th class="py-3">Duration</th>
                <th class="py-3">Price</th>
                <th class="py-3 text-center">Action</th>
              </tr>
            </thead>
            <tbody>
              @forelse($services as $service)
                <tr>
                  <td class="ps-4 fw-semibold">{{ $service->name }}</td>
                  <td>{{ $service->duration_minutes }} mins</td>
                  <td>${{ number_format($service->price, 0) }}</td>
                  <td class="text-center">
                    <a href="{{ route('book-appointment') }}"
                       class="btn btn-primary btn-sm px-3">Book Now</a>
                  </td>
                </tr>
              @empty
                <tr>
                  <td colspan="4" class="text-center py-4 text-muted">No services found.</td>
                </tr>
              @endforelse
            </tbody>
          </table>
        </div>
      </div>
    </div>

    {{-- Back button --}}
    <a href="{{ route('services') }}" class="btn btn-outline-primary px-4">
      Back to Services
    </a>

  </div>
</section>
@endsection