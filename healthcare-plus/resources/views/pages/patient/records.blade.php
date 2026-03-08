@extends('layouts.patient')

@section('content')
<div class="container py-5">

  <div class="d-flex align-items-center justify-content-between flex-wrap gap-2 mb-4">
    <div>
      <h2 class="fw-bold mb-1">Health Records</h2>
      <p class="text-muted mb-0">View your medical history.</p>
    </div>
  </div>

  <div class="row">
    <!-- Records Table -->
    <div class="col-12">
      <div class="card border-0 shadow-sm rounded-4">
        <div class="card-body p-0">
          <div class="table-responsive">
            <table class="table table-hover align-middle mb-0">
              <thead class="table-light">
                <tr>
                  <th class="py-3 ps-4">Record Type</th>
                  <th class="py-3">Doctor</th>
                  <th class="py-3">Date</th>
                  <th class="py-3">Diagnosis</th>
                  <th class="py-3 text-end pe-4">Action</th>
                </tr>
              </thead>

              <tbody>
                <tr>
                  <td class="ps-4 fw-semibold">Lab Report</td>
                  <td>Dr. Sarah Johnson</td>
                  <td>Feb 20, 2026</td>
                  <td class="text-muted">Routine blood test results</td>
                  <td class="text-end pe-4">
                    <a href="#" class="btn btn-outline-dark btn-sm">View</a>
                  </td>
                </tr>

                <tr>
                  <td class="ps-4 fw-semibold">Prescription</td>
                  <td>Dr. Amit Patel</td>
                  <td>Feb 12, 2026</td>
                  <td class="text-muted">Skin allergy treatment</td>
                  <td class="text-end pe-4">
                    <a href="#" class="btn btn-outline-dark btn-sm">View</a>
                  </td>
                </tr>

                <tr>
                  <td class="ps-4 fw-semibold">X-Ray</td>
                  <td>Dr. Emma Lee</td>
                  <td>Jan 30, 2026</td>
                  <td class="text-muted">Knee pain diagnosis</td>
                  <td class="text-end pe-4">
                    <a href="#" class="btn btn-outline-dark btn-sm">View</a>
                  </td>
                </tr>

              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>
@endsection