@extends('layouts.site')

@section('title', 'Health Record Details')

@section('content')

    <section class="py-5" style="background:#f4f8fb;">
        <div class="container">

            <div class="mb-4">
                <h2 class="fw-bold section-title mb-2">Health Record Details</h2>
                <p class="text-muted mb-0">View your health record information.</p>
            </div>

            <div class="service-card">
                <div class="p-4 p-md-5">

                    <div class="row g-4">
                        <div class="col-md-6">
                            <label class="form-label fw-semibold">Record Type</label>
                            <input type="text" class="form-control" value="{{ $record->record_type }}" readonly>
                        </div>

                        <div class="col-md-6">
                            <label class="form-label fw-semibold">Doctor</label>
                            <input type="text" class="form-control" value="{{ $record->doctor->name ?? 'Doctor' }}"
                                readonly>
                        </div>

                        <div class="col-md-6">
                            <label class="form-label fw-semibold">Record Date</label>
                            <input type="text" class="form-control"
                                value="{{ \Carbon\Carbon::parse($record->record_date)->format('M d, Y') }}" readonly>
                        </div>

                        <div class="col-md-6">
                            <label class="form-label fw-semibold">Diagnosis</label>
                            <input type="text" class="form-control" value="{{ $record->diagnosis }}" readonly>
                        </div>

                        <div class="col-12">
                            <label class="form-label fw-semibold">Details</label>
                            <textarea class="form-control" rows="5" readonly>{{ $record->details }}</textarea>
                        </div>
                    </div>

                    <div class="mt-4">
                        <a href="{{ route('patient.records') }}" class="btn btn-outline-dark px-4">Back to Records</a>
                    </div>

                </div>
            </div>

        </div>
    </section>

@endsection