@extends('layouts.admin')

@section('title', 'Manage Departments')

@section('content')
    <div class="container py-5">

        <div class="d-flex align-items-center justify-content-between flex-wrap gap-2 mb-4">
            <div>
                <h2 class="fw-bold mb-1">Manage Departments</h2>
                <p class="text-muted mb-0">View and manage all hospital departments.</p>
            </div>

            <button type="button" class="btn btn-primary px-4" data-bs-toggle="modal" data-bs-target="#addDepartmentModal">
                <i class="bi bi-plus-lg me-1"></i> Add Department
            </button>
        </div>

        <!-- Success / Error Messages -->
        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show rounded-3" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif

        @if(session('error'))
            <div class="alert alert-danger alert-dismissible fade show rounded-3" role="alert">
                {{ session('error') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif

        <div class="card border-0 shadow-sm rounded-4">
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-bordered align-middle mb-0">
                        <thead class="table-light">
                            <tr>
                                <th class="py-3 ps-4">#</th>
                                <th class="py-3">Department Name</th>
                                <th class="py-3">Description</th>
                                <th class="py-3">Doctors</th>
                                <th class="py-3 text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($departments as $index => $department)
                                <tr>
                                    <td class="ps-4 text-muted">{{ $index + 1 }}</td>
                                    <td class="fw-semibold">{{ $department->name }}</td>
                                    <td class="text-muted">{{ Str::limit($department->description, 60, '...') ?? '—' }}</td>
                                    <td>
                                        <span class="badge bg-primary-subtle text-primary rounded-pill px-3 py-1">
                                            {{ $department->doctors_count }} doctor(s)
                                        </span>
                                    </td>
                                    <td class="text-center">
                                        <button class="btn btn-success btn-sm" data-bs-toggle="modal"
                                            data-bs-target="#editDepartmentModal{{ $department->id }}">
                                            Edit
                                        </button>

                                        <form method="POST"
                                            action="{{ route('admin.manage-departments.delete', $department->id) }}"
                                            class="d-inline" onsubmit="return confirm('Delete this department?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm ms-1">
                                                Delete
                                            </button>
                                        </form>
                                    </td>
                                </tr>

                                <!-- Edit Department Modal -->
                                <div class="modal fade" id="editDepartmentModal{{ $department->id }}" tabindex="-1">
                                    <div class="modal-dialog">
                                        <div class="modal-content rounded-4 border-0">
                                            <div class="modal-header border-0">
                                                <h5 class="modal-title fw-semibold">Edit Department</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                            </div>
                                            <div class="modal-body p-4">
                                                <form method="POST"
                                                    action="{{ route('admin.manage-departments.update', $department->id) }}">
                                                    @csrf
                                                    @method('PATCH')

                                                    <div class="mb-3">
                                                        <label class="form-label fw-semibold">Department Name</label>
                                                        <input type="text" name="name" class="form-control"
                                                            value="{{ $department->name }}" required>
                                                    </div>

                                                    <div class="mb-3">
                                                        <label class="form-label fw-semibold">Description</label>
                                                        <textarea name="description" class="form-control"
                                                            rows="2">{{ $department->description }}</textarea>
                                                    </div>

                                                    <div class="d-flex gap-2">
                                                        <button type="submit" class="btn btn-primary px-4">Update
                                                            Department</button>
                                                        <button type="button" class="btn btn-outline-secondary px-4"
                                                            data-bs-dismiss="modal">Cancel</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            @empty
                                <tr>
                                    <td colspan="5" class="text-center py-5 text-muted">
                                        <i class="bi bi-building fs-1 d-block mb-3"></i>
                                        No departments found. Add one to get started.
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>

    <!-- Add Department Modal  -->
    <div class="modal fade" id="addDepartmentModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content rounded-4 border-0">
                <div class="modal-header border-0">
                    <h5 class="modal-title fw-semibold">Add New Department</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body p-4">
                    <form method="POST" action="{{ route('admin.manage-departments.create') }}">
                        @csrf

                        <div class="mb-3">
                            <label class="form-label fw-semibold">Department Name</label>
                            <input type="text" name="name" class="form-control" placeholder="e.g., Cardiology" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-semibold">Description</label>
                            <textarea name="description" class="form-control" rows="2"
                                placeholder="Short description..."></textarea>
                        </div>

                        <div class="d-flex gap-2">
                            <button type="submit" class="btn btn-primary px-4">Add Department</button>
                            <button type="button" class="btn btn-outline-secondary px-4"
                                data-bs-dismiss="modal">Cancel</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection