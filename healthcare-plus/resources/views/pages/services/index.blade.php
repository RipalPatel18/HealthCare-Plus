@extends('layouts.site')

@section('content')
<h3 class="fw-bold mb-3">Services</h3>

<div class="row g-3">
    @foreach (['Dental Care','Cardiology','Dermatology','General Checkup','Orthopedics','Pediatrics'] as $service)
        <div class="col-md-6 col-lg-4">
            <div class="card shadow-sm h-100">
                <div class="card-body">
                    <h5 class="fw-bold">{{ $service }}</h5>
                    <p class="text-muted small mb-0">Short description based on your wireframe.</p>
                </div>
            </div>
        </div>
    @endforeach
</div>
@endsection