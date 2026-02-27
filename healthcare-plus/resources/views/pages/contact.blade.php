@extends('layouts.site')

@section('content')
<div class="container py-5">
  <h2 class="fw-bold mb-2">Contact Us</h2>
  <p class="text-muted">We’ll reply within 24 hours.</p>

  <div class="row g-4 mt-3">
    <div class="col-md-6">
      <div class="border rounded-4 p-4">
        <div class="mb-3">
          <label class="form-label">Name</label>
          <input class="form-control" placeholder="Enter your name">
        </div>
        <div class="mb-3">
          <label class="form-label">Email</label>
          <input class="form-control" placeholder="Enter your email">
        </div>
        <div class="mb-3">
          <label class="form-label">Message</label>
          <textarea class="form-control" rows="4" placeholder="Write your message..."></textarea>
        </div>
        <button class="btn btn-dark">Send</button>
      </div>
    </div>

    <div class="col-md-6">
      <div class="border rounded-4 p-4 h-100">
        <h6 class="fw-semibold">Support</h6>
        <p class="text-muted mb-1"><i class="bi bi-telephone me-2"></i> +1 (647) - 1234</p>
        <p class="text-muted mb-1"><i class="bi bi-envelope me-2"></i> support@healthcareplus.com</p>
        <p class="text-muted mb-0"><i class="bi bi-geo-alt me-2"></i> Toronto, ON, Canada</p>
      </div>
    </div>
  </div>
</div>
@endsection