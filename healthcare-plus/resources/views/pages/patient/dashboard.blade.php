@extends('layouts.site')

@section('title', 'Patient Dashboard')

@section('content')
    <div class="container py-5">

        <h2 class="fw-bold mb-4">Patient Dashboard</h2>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        @if(session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
        @endif

        {{-- Upcoming Appointment --}}
        <div class="card border-0 shadow-sm rounded-4 mb-4">
            <div class="card-body p-4">
                <h5 class="fw-semibold mb-3">Upcoming Appointment</h5>
                <div class="table-responsive">
                    <table class="table table-bordered align-middle mb-0">
                        <thead class="table-light">
                            <tr>
                                <th class="py-3 ps-4">Date</th>
                                <th class="py-3">Time</th>
                                <th class="py-3">Doctor</th>
                                <th class="py-3">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($upcomingAppointments as $appt)
                                <tr>
                                    <td class="ps-4">{{ \Carbon\Carbon::parse($appt->appointment_date)->format('M d, Y') }}</td>
                                    <td>{{ $appt->time_slot }}</td>
                                    <td>{{ $appt->doctor }}</td>
                                    <td>
                                        @php
                                            $badge = match (strtolower($appt->status)) {
                                                'confirmed' => 'success',
                                                'cancelled' => 'danger',
                                                'completed' => 'secondary',
                                                default => 'primary',
                                            };
                                        @endphp
                                        <span class="badge bg-{{ $badge }}-subtle text-{{ $badge }} rounded-pill px-3">
                                            {{ $appt->status }}
                                        </span>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4" class="text-center py-4 text-muted">No upcoming appointments.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        {{-- All Appointments --}}
        <div class="card border-0 shadow-sm rounded-4">
            <div class="card-body p-4">
                <h5 class="fw-semibold mb-3">All Appointments</h5>
                <div class="table-responsive">
                    <table class="table table-bordered align-middle mb-0">
                        <thead class="table-light">
                            <tr>
                                <th class="py-3 ps-4">Date</th>
                                <th class="py-3">Time</th>
                                <th class="py-3">Doctor</th>
                                <th class="py-3">Status</th>
                                <th class="py-3 text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($appointments as $appt)
                                <tr>
                                    <td class="ps-4">{{ \Carbon\Carbon::parse($appt->appointment_date)->format('M d, Y') }}</td>
                                    <td>{{ $appt->time_slot }}</td>
                                    <td>{{ $appt->doctor }}</td>
                                    <td>
                                        @php
                                            $badge = match (strtolower($appt->status)) {
                                                'confirmed' => 'success',
                                                'cancelled' => 'danger',
                                                'completed' => 'secondary',
                                                default => 'primary',
                                            };
                                        @endphp
                                        <span class="badge bg-{{ $badge }}-subtle text-{{ $badge }} rounded-pill px-3">
                                            {{ $appt->status }}
                                        </span>
                                    </td>
                                    <td class="text-center">
                                        @if(!in_array(strtolower($appt->status), ['cancelled', 'completed']))
                                            {{-- Reschedule Button --}}
                                            <button class="btn btn-warning btn-sm me-1" data-bs-toggle="modal"
                                                data-bs-target="#rescheduleModal" data-id="{{ $appt->id }}"
                                                data-date="{{ $appt->appointment_date }}" data-time="{{ $appt->time_slot }}">
                                                Reschedule
                                            </button>

                                            {{-- Cancel Form --}}
                                            <form method="POST" action="{{ route('patient.appointments.cancel', $appt->id) }}"
                                                class="d-inline" onsubmit="return confirm('Cancel this appointment?')">
                                                @csrf
                                                <button class="btn btn-danger btn-sm">Cancel</button>
                                            </form>
                                        @else
                                            <span class="text-muted small">—</span>
                                        @endif
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5" class="text-center py-4 text-muted">No appointments found.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="d-flex gap-3 mt-4">
            <a href="{{ url('/book-appointment') }}" class="btn btn-primary px-4">
                Book Appointment
            </a>
        </div>

    </div>

   <!-- Reschedule Modal -->
    <div class="modal fade" id="rescheduleModal" tabindex="-1" aria-labelledby="rescheduleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content rounded-4 border-0 shadow">
                <div class="modal-header border-0 pb-0">
                    <h5 class="modal-title fw-semibold" id="rescheduleModalLabel">Reschedule Appointment</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form id="rescheduleForm" method="POST" action="">
                    @csrf
                    @method('PATCH')
                    <div class="modal-body pt-3">
                        <div class="mb-3">
                            <label for="reschedule_date" class="form-label fw-medium">New Date</label>
                            <input type="date" class="form-control" id="reschedule_date" name="appointment_date" required
                                min="{{ now()->addDay()->toDateString() }}">
                        </div>
                        <div class="mb-3">
                            <label for="reschedule_time" class="form-label fw-medium">New Time Slot</label>
                            <select class="form-select" id="reschedule_time" name="time_slot" required>
                                <option value="">Select a time</option>
                                <option value="09:00 AM">09:00 AM</option>
                                <option value="10:00 AM">10:00 AM</option>
                                <option value="11:00 AM">11:00 AM</option>
                                <option value="01:00 PM">01:00 PM</option>
                                <option value="02:00 PM">02:00 PM</option>
                                <option value="03:00 PM">03:00 PM</option>
                                <option value="04:00 PM">04:00 PM</option>
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer border-0 pt-0">
                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-warning px-4">Confirm Reschedule</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        const rescheduleModal = document.getElementById('rescheduleModal');
        rescheduleModal.addEventListener('show.bs.modal', function (event) {
            const btn = event.relatedTarget;
            const id = btn.getAttribute('data-id');
            const date = btn.getAttribute('data-date');
            const time = btn.getAttribute('data-time');

            // Set form action dynamically
            document.getElementById('rescheduleForm').action = `/patient/appointments/${id}/reschedule`;

            // Pre-fill current values
            document.getElementById('reschedule_date').value = date;

            const timeSelect = document.getElementById('reschedule_time');
            [...timeSelect.options].forEach(opt => {
                opt.selected = opt.value === time;
            });
        });
    </script>

@endsection