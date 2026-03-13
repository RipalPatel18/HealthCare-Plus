@extends('layouts.site')

@section('title', 'Reschedule Appointment')

@section('content')



<section class="py-5" style="background:#f4f8fb;">

    <div class="container">

        <div class="mb-4">
            <h2 class="fw-bold section-title mb-2">Reschedule Appointment</h2>

            <p class="text-muted mb-0">Update your appointment date and time.</p>
        </div>

        @if($errors->any())


            <div class="alert alert-danger rounded-4 shadow-sm border-0">


                <ul class="mb-0">

                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="service-card">


            <div class="p-4 p-md-5">


                <form method="POST" action="{{ route('patient.appointments.update', $appointment->id) }}">
                    @csrf

                    <div class="row g-4">



                        <div class="col-md-6">
                            <label class="form-label fw-semibold">Doctor</label>
                            <input type="text" class="form-control" value="{{ $appointment->doctor }}" readonly>
                        </div>

                        <div class="col-md-6">
                            <label class="form-label fw-semibold">Current Status</label>
                            <input type="text" class="form-control" value="{{ $appointment->status }}" readonly>
                        </div>



                        <div class="col-md-6">
                            <label class="form-label fw-semibold">Appointment Date</label>
                            <input type="date" name="appointment_date" class="form-control"
                                value="{{ old('appointment_date', $appointment->appointment_date) }}" required>
                        </div>


                        <div class="col-md-6">
                            <label class="form-label fw-semibold">Time Slot</label>
                            <select name="time_slot" class="form-select" required>
                                <option value="">Select Time</option>


                                <option value="09:00 AM" {{ old('time_slot', $appointment->time_slot) == '09:00 AM' ? 'selected' : '' }}>09:00 AM</option>
                                <option value="10:00 AM" {{ old('time_slot', $appointment->time_slot) == '10:00 AM' ? 'selected' : '' }}>10:00 AM</option>
                                <option value="11:30 AM" {{ old('time_slot', $appointment->time_slot) == '11:30 AM' ? 'selected' : '' }}>11:30 AM</option>
                                <option value="01:00 PM" {{ old('time_slot', $appointment->time_slot) == '01:00 PM' ? 'selected' : '' }}>01:00 PM</option>
                                <option value="02:30 PM" {{ old('time_slot', $appointment->time_slot) == '02:30 PM' ? 'selected' : '' }}>02:30 PM</option>
                                <option value="04:00 PM" {{ old('time_slot', $appointment->time_slot) == '04:00 PM' ? 'selected' : '' }}>04:00 PM</option>
                            </select>


                        </div>
                    </div>

                    <div class="mt-4 d-flex gap-2">




                        <button type="submit" class="btn btn-primary px-4">Update Appointment</button>
                        <a href="{{ route('patient.appointments') }}" class="btn btn-outline-dark px-4">Back</a>
                    </div>
                </form>

            </div>
        </div>


        
    </div>
</section>

@endsection