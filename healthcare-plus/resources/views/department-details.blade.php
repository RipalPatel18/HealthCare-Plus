@extends('layouts.site')

@section('content')

<section class="py-5" style="background: #f4f8fc;">
    <div class="container">

        <div class="mb-4">
            <small class="text-muted">
                Home / Services / {{ $department->name }}
            </small>
        </div>

        <!-- Top Section -->
        <div class="service-card mb-4">
            <div class="p-4 p-md-5">
                <h2 class="fw-bold mb-3">{{ $department->name }} Department</h2>

                <p class="text-muted mb-4" style="line-height:1.8;">
                    {{ $details['description'] ?? 'Department information is available.' }}
                </p>

                <div class="border rounded-3 p-4 mb-4">
                    <h5 class="fw-bold mb-3">Department Head</h5>
                    <p class="mb-1 fw-semibold">{{ $details['head'] ?? 'Department Head' }}</p>
                    <p class="text-muted mb-0">{{ $details['head_title'] ?? 'Chief Specialist' }}</p>
                </div>

                <div class="row g-4 mb-4">
                    <div class="col-md-3">
                        <div class="d-flex gap-2">
                            <i class="bi bi-geo-alt-fill text-primary"></i>
                            <div>
                                <div class="fw-semibold">Location</div>
                                <div class="text-muted">{{ $details['location'] ?? 'Main Building' }}</div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="d-flex gap-2">
                            <i class="bi bi-telephone-fill text-primary"></i>
                            <div>
                                <div class="fw-semibold">Phone</div>
                                <div class="text-muted">{{ $details['phone'] ?? '(555) 000-0000' }}</div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="d-flex gap-2">
                            <i class="bi bi-envelope-fill text-primary"></i>
                            <div>
                                <div class="fw-semibold">Email</div>
                                <div class="text-muted">{{ $details['email'] ?? 'support@healthcareplus.com' }}</div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="d-flex gap-2">
                            <i class="bi bi-people-fill text-primary"></i>
                            <div>
                                <div class="fw-semibold">Doctors</div>
                                <div class="text-muted">{{ $details['doctors_count'] ?? '3 Specialists' }}</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="border rounded-3 p-4">
                    <h5 class="fw-bold mb-3">Department Hours</h5>
                    <p class="text-muted mb-0">{{ $details['hours'] ?? 'Monday - Friday: 9:00 AM - 5:00 PM' }}</p>
                </div>
            </div>
        </div>

        <!-- Specializations -->
        <div class="service-card mb-4">
            <div class="p-4 p-md-5">
                <h4 class="fw-bold mb-4">Our Specializations</h4>

                <div class="row g-3">
                    @foreach(($details['specializations'] ?? []) as $specialization)
                        <div class="col-md-4">
                            <div class="border rounded-3 p-3 fw-semibold bg-white text-center h-100">
                                {{ $specialization }}
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <!-- Services Offered -->
        <div class="service-card mb-4">
            <div class="p-4 p-md-5">
                <h4 class="fw-bold mb-4">Services Offered</h4>

                <div class="row g-4">
                    @foreach(($details['services'] ?? []) as $service)
                        <div class="col-md-6">
                            <div class="border rounded-3 p-4 h-100 bg-white">
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <h5 class="fw-bold mb-0">{{ $service['name'] }}</h5>
                                    <span class="badge bg-light text-dark border">{{ $service['time'] }}</span>
                                </div>
                                <p class="text-muted mb-0">{{ $service['desc'] }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <!-- Doctors -->
        <div class="service-card mb-4">
            <div class="p-4 p-md-5">
                <h4 class="fw-bold mb-4">Our Doctors</h4>

                <div class="row g-4">
                    @foreach(($details['doctors'] ?? []) as $doctor)
                        <div class="col-md-6">
                            <div class="border rounded-3 p-4 bg-white h-100">
                                <div class="d-flex align-items-center gap-3">
                                    <img
                                        src="{{ asset('images/doctors/' . $doctor['image']) }}"
                                        alt="{{ $doctor['name'] }}"
                                        class="rounded-3 border"
                                        style="width:70px;height:70px;object-fit:cover;"
                                    >
                                    <div>
                                        <h5 class="fw-semibold mb-1">{{ $doctor['name'] }}</h5>
                                        <p class="text-muted mb-2">{{ $doctor['specialty'] }}</p>
                                        <a href="{{ route('find-doctor') }}" class="btn btn-dark btn-sm px-3">View Profile</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <!-- Buttons -->
        <div class="d-flex gap-3 flex-wrap">
            <a href="{{ url('/book-appointment') }}" class="btn btn-primary px-4">
                Book Appointment
            </a>
            <a href="{{ route('services') }}" class="btn btn-dark px-4">
                Book Services
            </a>
        </div>

    </div>
</section>

@endsection