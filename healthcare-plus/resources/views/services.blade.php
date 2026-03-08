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

            <!-- Department Description Map -->
            @php
                $desc = [
                    'Cardiology' => 'Heart care & cardiovascular treatment.',
                    'Dermatology' => 'Skin care and dermatology services.',
                    'General Medicine' => 'Primary healthcare and consultation.',
                    'Orthopedics' => 'Bone, joint and muscle treatment.',
                    'Pediatrics' => 'Healthcare services for children.'
                ];
            @endphp


            <!-- Departments -->
            <div class="d-flex align-items-center justify-content-between flex-wrap gap-2 mb-3">
                <h3 class="fw-bold mb-0">Our Departments</h3>
            </div>

            <div class="row g-4 mb-5">

                @foreach($departments as $department)

                    <div class="col-md-6 col-lg-3">

                        <div class="service-card h-100">

                            <div class="p-4">

                                <h5 class="fw-semibold mb-1">
                                    {{ $department->name }}
                                </h5>

                                <p class="text-muted small mb-3">
                                    {{ $desc[$department->name] ?? 'Healthcare services and treatment.' }}
                                </p>

                                <a href="{{ route('department.show', $department->id) }}"
                                    class="btn btn-primary btn-sm px-4">View Department</a>

                            </div>

                        </div>

                    </div>

                @endforeach

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

                        @forelse($services as $service)

                            <tr>

                                <td class="fw-semibold">
                                    {{ $service->name }}
                                </td>

                                <td>
                                    {{ $service->department->name ?? 'General' }}
                                </td>

                                <td class="text-center">
                                    <a href="{{ route('service.show', $service->id) }}" class="btn btn-dark btn-sm px-3">Learn
                                        More</a>
                                </td>

                            </tr>

                        @empty

                            <tr>

                                <td colspan="3" class="text-center py-4 text-muted">
                                    No services found.
                                </td>

                            </tr>

                        @endforelse

                    </tbody>

                </table>

            </div>

        </div>

    </section>

@endsection