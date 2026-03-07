@extends('layouts.site')

@section('content')

    <section class="py-5 bg-white">

        <div class="container">

            <!-- Page Header -->

            <div class="text-center mb-5 fade-in">
                <h1 class="fw-bold section-title mb-2">Services & Departments</h1>

                <p class="text-muted mb-0">

                    Browse departments and explore available services at HealthCare Plus.
                </p>
            </div>

            <!-- Departments -->

            <div class="d-flex align-items-center justify-content-between flex-wrap gap-2 mb-3">
                <h3 class="fw-bold mb-0">Our Departments</h3>


            </div>

            <div class="row g-4 mb-5">

                <!-- Cardiology -->

                <div class="col-md-6 col-lg-3">
                    <div class="service-card h-100">

                        <div class="p-4">
                            <h5 class="fw-semibold mb-1">Cardiology</h5>
                            <p class="text-muted small mb-3">Heart and cardiovascular care</p>
                            <a href="#" class="btn btn-primary btn-sm px-4">View Department</a>
                        </div>
                    </div>
                </div>

                <!-- Pediatrics -->

                <div class="col-md-6 col-lg-3">
                    <div class="service-card h-100">

                        <div class="p-4">
                            <h5 class="fw-semibold mb-1">Pediatrics</h5>
                            <p class="text-muted small mb-3">Healthcare for children</p>
                            <a href="#" class="btn btn-primary btn-sm px-3">View Department</a>
                        </div>
                    </div>
                </div>

                <!-- Orthopedics -->

                <div class="col-md-6 col-lg-3">
                    <div class="service-card h-100">

                        <div class="p-4">
                            <h5 class="fw-semibold mb-1">Orthopedics</h5>
                            <p class="text-muted small mb-3">Bone and joint treatment</p>
                            <a href="#" class="btn btn-primary btn-sm px-3">View Department</a>
                        </div>
                    </div>
                </div>

                <!-- Dermatology -->

                <div class="col-md-6 col-lg-3">
                    <div class="service-card h-100">
                        <div class="p-4">

                            <h5 class="fw-semibold mb-1">Dermatology</h5>
                            <p class="text-muted small mb-3">Skin care and treatment</p>
                            <a href="#" class="btn btn-primary btn-sm px-3">View Department</a>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Services Table -->

            <h3 class="fw-bold mb-3">Available Services</h3>

            <div class="table-responsive fade-in">

                <table class="table table-bordered align-middle bg-white">
                    <thead class="table-light">

                        <tr>
                            <th style="width:40%;">Service Name</th>
                            <th>Department</th>

                            <th class="text-center" style="width:160px;">Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td class="fw-semibold">General Consultation</td>
                            <td>General Medicine</td>
                            <td class="text-center">
                                <a href="#" class="btn btn-dark btn-sm px-3">Learn More</a>
                            </td>
                        </tr>

                        <tr>
                <td class="fw-semibold">Laboratory Tests</td>
                            <td>Diagnostics</td>
                            <td class="text-center">
                                <a href="#" class="btn btn-dark btn-sm px-3">Learn More</a>
                            </td>
                        </tr>

                        <tr>
                            <td class="fw-semibold">X-Ray Imaging</td>
                            <td>Radiology</td>

                            <td class="text-center">
                                <a href="#" class="btn btn-dark btn-sm px-3">Learn More</a>
                            </td>

                        </tr>

                        <tr>
                            <td class="fw-semibold">Vaccination</td>

                            <td>Preventive Care</td>
                            <td class="text-center">
                                <a href="#" class="btn btn-dark btn-sm px-3">Learn More</a>
                            </td>
                        </tr>

                        <tr>
                            <td class="fw-semibold">Health Screening</td>
                            <td>Preventive Care</td>
                            <td class="text-center">

                                <a href="#" class="btn btn-dark btn-sm px-3">Learn More</a>
                            </td>
                        </tr>

                        <tr>
                            <td class="fw-semibold">Physical Therapy</td>
                            <td>Rehabilitation</td>

                            <td class="text-center">
                                
                                <a href="#" class="btn btn-dark btn-sm px-3">Learn More</a>
                            </td>
                        </tr>
                    </tbody>
                </table>

            </div>

        </div>
    </section>

@endsection