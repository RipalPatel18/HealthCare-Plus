@extends('layouts.site')

@section('content')

<section class="py-5">
    <div class="container">

        <div class="mb-4">
            <h2 class="fw-bold section-title mb-2">Health Records</h2>
            <p class="text-muted mb-0">View your medical reports and history.</p>
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
                                <th>Record Type</th>
                                <th>Doctor</th>
                                <th>Date</th>
                                <th>Notes</th>
                                <th class="text-end">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($records ?? [] as $record)
                                <tr>
                                    <td class="fw-semibold">{{ $record->record_type }}</td>
                                    <td>{{ $record->doctor }}</td>
                                    <td>{{ \Carbon\Carbon::parse($record->record_date)->format('M d, Y') }}</td>
                                    <td>{{ $record->notes }}</td>
                                    <td class="text-end">
                                        <a href="#" class="btn btn-outline-dark btn-sm">View</a>
                                        <a href="#" class="btn btn-outline-primary btn-sm ms-1">Download</a>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5" class="text-center text-muted py-4">No health records found.</td>
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