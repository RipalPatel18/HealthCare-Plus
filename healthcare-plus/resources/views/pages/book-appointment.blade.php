@extends('layouts.site')

@section('content')

  <section class="py-5" style="background: #f4f8fc;">
    <div class="container">

      <div class="text-center mb-5 fade-in">
        <h1 class="fw-bold section-title mb-2">Book Appointment</h1>
        <p class="text-muted mb-0">Fill in your details to schedule an appointment with a doctor.</p>
      </div>

      @if(session('success'))
        <div class="alert alert-success mb-4">
          {{ session('success') }}
        </div>
      @endif

      <div class="row justify-content-center">
        <div class="col-lg-8">

          <div class="service-card">
            <div class="p-4 p-md-5">

              <form method="POST" action="{{ route('book-appointment.store') }}">
                @csrf

                <div class="row g-4">

                  <div class="col-md-6">
                    <label class="form-label fw-semibold">Patient Name</label>
                    <input type="text" name="patient_name" class="form-control" placeholder="Enter your full name">
                  </div>

                  <div class="col-md-6">
                    <label class="form-label fw-semibold">Email Address</label>
                    <input type="email" name="email" class="form-control" placeholder="Enter your email">
                  </div>

                  <div class="col-md-6">
                    <label class="form-label fw-semibold">Select Doctor</label>
                    <select name="doctor" class="form-select">
                      <option selected disabled>Select Doctor</option>
                      <option>Dr. Daniel Kim (Cardiology)</option>
                      <option>Dr. Sophia Martinez (Pediatrics)</option>
                      <option>Dr. Michael Thompson (Orthopedics)</option>
                      <option>Dr. Emily Carter (Dermatology)</option>
                      <option>Dr. Olivia Bennett (General Medicine)</option>
                    </select>
                  </div>

                

                  <div class="col-md-6">
                    <label class="form-label fw-semibold">Appointment Date</label>
                    <input type="date" name="appointment_date" class="form-control">
                  </div>

                  <div class="col-md-6">
                    <label class="form-label fw-semibold">Time Slot</label>
                    <select name="time_slot" class="form-select">
                      <option selected disabled>Select Time</option>
                      <option>09:00 AM</option>
                      <option>10:00 AM</option>
                      <option>11:30 AM</option>
                      <option>01:00 PM</option>
                      <option>02:30 PM</option>
                      <option>04:00 PM</option>
                    </select>
                  </div>

                  <div class="col-md-6">
                    <label class="form-label fw-semibold">Phone Number</label>
                    <input type="text" name="phone" class="form-control" placeholder="Enter your phone number">
                  </div>

                  

                  <div class="col-12">
                    <label class="form-label fw-semibold">Reason / Notes</label>
                    <textarea name="notes" class="form-control" rows="4"
                      placeholder="Enter reason for appointment"></textarea>
                  </div>

                </div>

                <div class="d-flex justify-content-end mt-4">
                  <button type="submit" class="btn btn-hero-primary px-5 py-2">
                    Confirm Booking
                  </button>
                </div>

              </form>

            </div>
          </div>

        </div>
      </div>

    </div>
  </section>

@endsection