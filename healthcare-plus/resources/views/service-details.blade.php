@extends('layouts.site')

@section('content')

    <section class="py-5" style="background: #f4f8fc;">
        <div class="container">

            <div class="mb-4">
                <small class="text-muted">
                    Home / Services / {{ $service->name }}
                </small>
            </div>

            <!-- Top Card -->
            <div class="service-card mb-4">
                <div class="p-4 p-md-5">
                    <h2 class="fw-bold mb-4">{{ $service->name }}</h2>

                    <p class="text-muted mb-0" style="line-height: 1.8;">
                        {{ $details['description'] }}
                    </p>
                </div>
            </div>

            <!-- What to Bring + What to Expect -->
            <div class="row g-4 mb-4">
                <div class="col-md-6">
                    <div class="service-card h-100">
                        <div class="p-4 p-md-5">
                            <h4 class="fw-bold mb-3">What to Bring</h4>
                            <ul class="mb-0">
                                @foreach($details['bring'] as $item)
                                    <li class="mb-2">{{ $item }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="service-card h-100">
                        <div class="p-4 p-md-5">
                            <h4 class="fw-bold mb-3">What to Expect</h4>
                            <ul class="mb-0">
                                @foreach($details['expect'] as $item)
                                    <li class="mb-2">{{ $item }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Pricing -->
            <div class="service-card mb-4">
                <div class="p-4 p-md-5">
                    <h4 class="fw-bold mb-4">Pricing Information</h4>

                    <p class="fs-4 mb-4">{{ $details['price'] }}</p>

                    <p class="fw-semibold mb-0">
                        * Prices may vary based on insurance coverage and specific requirements. Contact us for detailed
                        pricing.
                    </p>
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