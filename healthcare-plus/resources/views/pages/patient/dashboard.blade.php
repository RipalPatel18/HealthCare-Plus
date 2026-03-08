@extends('layouts.patient')

@section('content')
  <div class="container py-5">
    <h1 class="fw-bold">Patient Dashboard</h1>
    <p class="text-muted">Welcome, {{ auth()->user()->name ?? 'Patient' }}</p>

    <a href="{{ url('/patient/profile') }}" class="btn btn-primary mt-3">My Profile</a>
  </div>
@endsection