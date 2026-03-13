@extends('layouts.site')

@section('title', 'My Appointments')

@section('content')

  <section class="py-5" style="background:#f4f8fb;">
    <div class="container">

      <div class="d-flex align-items-center justify-content-between flex-wrap gap-3 mb-4">
        <div>
          <h2 class="fw-bold section-title mb-2">My Appointments</h2>
          <p class="text-muted mb-0">View and manage your appointments.</p>
        </div>

        <a href="{{ route('book-appointment') }}" class="btn btn-hero-primary px-4">
          Book Appointment
        </a>
      </div>

      @if(session('success'))
        <div class="alert alert-success rounded-4 shadow-sm border-0">
          {{ session('success') }}
        </div>
      @endif

      @if(session('error'))
        <div class="alert alert-danger rounded-4 shadow-sm border-0">
          {{ session('error') }}
        </div>
      @endif

      <div class="service-card">
        <div class="p-4">
          <div class="table-responsive">
            <table class="table align-middle mb-0">
              <thead class="table-light">
                <tr>
                  <th>Date</th>
                  <th>Time</th>
                  <th>Doctor</th>
                  <th>Status</th>
                  <th class="text-end">Action</th>
                </tr>
              </thead>

              <tbody>
                @forelse($appointments ?? [] as $appointment)
                  <tr>
                    <td>{{ \Carbon\Carbon::parse($appointment->appointment_date)->format('M d, Y') }}</td>
                    <td>{{ $appointment->time_slot }}</td>
                    <td>{{ $appointment->doctor }}</td>
                    <td>{{ $appointment->status }}</td>
                    <td class="text-end">
                      @if($appointment->status !== 'Completed' && $appointment->status !== 'Cancelled')
                        <div class="d-inline-flex gap-2">
                          <a href="{{ route('patient.appointments.edit', $appointment->id) }}"
                            class="btn btn-outline-dark btn-sm">
                            Reschedule
                          </a>

                          <form action="{{ route('patient.appointments.cancel', $appointment->id) }}" method="POST"
                            class="d-inline">
                            @csrf
                            <button type="submit" class="btn btn-outline-danger btn-sm">Cancel</button>
                          </form>
                        </div>
                      @else
                        <span class="text-muted">-</span>
                      @endif
                    </td>
                  </tr>
                @empty
                  <tr>
                    <td colspan="5" class="text-center text-muted py-4">
                      No appointments found.
                    </td>
                  </tr>
                @endforelse
              </tbody>
            </table>
          </div>
        </div>
      </div>

    </div>
  </section>

@endsection