@extends('layouts.doctor')

@section('title', 'Doctor Availability')

@section('content')
<div class="container py-5">

  <div class="d-flex align-items-center justify-content-between flex-wrap gap-2 mb-4">
    <div>
      <h2 class="fw-bold mb-1">Manage Availability</h2>
      <p class="text-muted mb-0">Set your available time slots.</p>
    </div>
  </div>

  <div class="card border-0 shadow-sm rounded-4">
    <div class="card-body">

      <form>
        <div class="row g-4">

          <div class="col-md-4">
            <label class="form-label fw-semibold">Day</label>
            <select class="form-select">
              <option>Monday</option>
              <option>Tuesday</option>
              <option>Wednesday</option>
              <option>Thursday</option>
              <option>Friday</option>
            </select>
          </div>

          <div class="col-md-4">
            <label class="form-label fw-semibold">Start Time</label>
            <input type="time" class="form-control">
          </div>

          <div class="col-md-4">
            <label class="form-label fw-semibold">End Time</label>
            <input type="time" class="form-control">
          </div>

        </div>

        <div class="mt-4">
          <button class="btn btn-primary px-4">Save Availability</button>
        </div>

      </form>

    </div>
  </div>

</div>
@endsection