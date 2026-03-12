@extends('layouts.site')

@section('content')

<section class="py-5">
    <div class="container">

        <div class="mb-4">
            <h2 class="fw-bold section-title mb-2">Patient Dashboard</h2>
            <p class="text-muted mb-0">Quick access to your upcoming appointment.</p>
        </div>

        @if(session('success'))
            <div class="alert alert-success rounded-4 shadow-sm border-0">
                {{ session('success') }}
            </div>
        @endif

        <div class="feature-card">
            <div class="d-flex align-items-center justify-content-between flex-wrap gap-2 mb-3">
                <h4 class="fw-bold mb-0">Upcoming Appointment</h4>
                <a href="{{ route('patient.appointments') }}" class="btn btn-primary px-4">View All</a>
            </div>

            <div class="table-responsive">
                <table class="table align-middle mb-0">
                    <thead class="table-light">
                        <tr>
                            <th>Date</th>
                            <th>Time</th>
                            <th>Doctor</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($upcomingAppointments ?? [] as $appointment)
                            <tr>
                                <td>{{ \Carbon\Carbon::parse($appointment->appointment_date)->format('M d, Y') }}</td>
                                <td>{{ $appointment->time_slot }}</td>
                                <td class="fw-semibold">{{ $appointment->doctor }}</td>
                                <td>{{ $appointment->status }}</td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4" class="text-center text-muted py-4">
                                    No upcoming appointment found.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</section>

@endsection