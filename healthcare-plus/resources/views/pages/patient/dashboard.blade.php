@extends('layouts.site')

@section('title', 'Patient Dashboard')

@section('content')

<section class="py-5" style="background:#f4f8fb; min-height:60vh;">
    <div class="container">

        <div class="service-card text-center">
            <div class="p-5">

                <h2 class="fw-bold text-primary mb-3">
                    Welcome, {{ auth()->user()->name }}
                </h2>

                <p class="text-muted mb-4">
                    This is your patient dashboard.
                </p>

              

            </div>
        </div>

    </div>
</section>

@endsection