@extends('layouts.site')

@section('content')

<section class="py-5 bg-white">

  <div class="container">

    <div class="text-center mb-5 fade-in">
      <h1 class="fw-bold section-title mb-2">Book Appointment</h1>

      <p class="text-muted mb-0">Fill in details to schedule your appointment.</p>
    </div>

    <div class="row justify-content-center">
      <div class="col-lg-8">


        <div class="service-card">
          <div class="p-4 p-md-5">

            <form method="POST" action="#">

              @csrf

              <div class="row g-4">

                <div class="col-md-6">

                  <label class="form-label fw-semibold">Patient Name</label>
                  <input type="text" class="form-control" placeholder="Enter your full name">
                </div>

                <div class="col-md-6">
                  <label class="form-label fw-semibold">Email</label>
                  <input type="email" class="form-control" placeholder="Enter email">
                </div>

                <div class="col-md-6">

                  <label class="form-label fw-semibold">Select Doctor</label>
                  <select class="form-select">
                    <option selected>Select Doctor</option>
                    <option>Dr. Sarah Johnson (Cardiology)</option>
                    <option>Dr. Amit Patel (Dermatology)</option>
                    <option>Dr. Emma Lee (Pediatrics)</option>
                  </select>
                </div>

                <div class="col-md-6">

                  <label class="form-label fw-semibold">Service</label>
                  <select class="form-select">
                    <option selected>Select Service</option>
                    <option>General Consultation</option>

                    <option>Dental Cleaning</option>
                    <option>Heart Checkup</option>
                    <option>Physical Therapy</option>
                  </select>
                </div>

                <div class="col-md-6">
                  <label class="form-label fw-semibold">Appointment Date</label>
                  <input type="date" class="form-control">
                </div>

                <div class="col-md-6">

                  <label class="form-label fw-semibold">Time Slot</label>
                  <select class="form-select">
                    <option selected>Select Time</option>
                    <option>10:00 AM</option>
                    <option>11:30 AM</option>
                    <option>2:00 PM</option>
                    <option>4:00 PM</option>

                  </select>
                </div>

                <div class="col-12">
                  <label class="form-label fw-semibold">Reason / Notes</label>
                  <textarea class="form-control" rows="4" placeholder="Enter reason for appointment"></textarea>
                </div>


              </div>

              <div class="d-flex justify-content-end mt-4">
                <button class="btn btn-hero-primary px-5 py-2">
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