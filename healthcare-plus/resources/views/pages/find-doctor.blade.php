@extends('layouts.site')

@section('content')

    <section class="py-5">
        <div class="container">

            <div class="text-center mb-5">
                <h1 class="fw-bold section-title">Find a Doctor</h1>
                <p class="text-muted">Search doctors by specialty or location</p>
            </div>

            <!-- SEARCH -->
            <div class="service-card mb-5">
                <div class="p-4">

                    <form method="GET" class="row g-3">

                        <div class="col-md-4">
                            <label class="form-label">Specialty</label>

                            <select name="specialty" class="form-select">

                                <option value="">All Specialties</option>

                                @foreach($departments as $department)

                                    <option value="{{ $department->id }}">
                                        {{ $department->name }}
                                    </option>

                                @endforeach

                            </select>

                        </div>

                        <div class="col-md-4">
                            <label class="form-label">Location</label>

                            <input type="text" name="location" class="form-control" placeholder="Toronto">

                        </div>

                        <div class="col-md-4 d-grid">
                            <button class="btn btn-primary">
                                Search Doctors
                            </button>
                        </div>

                    </form>

                </div>
            </div>

            <!-- DOCTOR LIST -->

            @foreach($doctors as $doctor)

                <div class="service-card mb-4">

                    <div class="p-4 d-flex align-items-center">

                        <div class="me-3">
                            <div class="bg-light border rounded" style="width:80px;height:80px;"></div>
                        </div>

                        <div class="flex-grow-1">

                            <h5 class="fw-semibold mb-1">
                                {{ $doctor->name }}
                            </h5>

                            <p class="text-muted small mb-0">

                                {{ $doctor->department->name }}

                            </p>

                        </div>

                        <a href="#" class="btn btn-primary btn-sm">
                            Book Appointment
                        </a>

                    </div>

                </div>

            @endforeach

        </div>
    </section>

@endsection