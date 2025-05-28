@extends('layouts.app')

@section('content')
<div class="container py-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h3 fw-bold">Admin Dashboard</h1>

        <!-- Logout Form -->
        <form action="{{ route('logout') }}" method="POST" class="ms-3">
            @csrf
            <button type="submit" class="btn btn-outline-danger">
                <i class="bi bi-box-arrow-right me-1"></i> Logout
            </button>
        </form>
    </div>

    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="card shadow-sm border-0">
    <div class="card-header bg-warning text-dark">
        <h5 class="mb-0">User List</h5>
    </div>
    <div class="card-body p-0">
        <div class="table-responsive">
            <table class="table table-hover align-middle mb-0">
                <thead class="table-light">
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Role</th>
                        <th scope="col" class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($users as $user)
                    <tr>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>
                            <span class="badge {{ $user->role_id == 1 ? 'bg-warning text-dark' : 'bg-secondary' }}">
                                {{ $user->role_id == 1 ? 'Admin' : 'User' }}
                            </span>
                        </td>
                        <td class="text-center">
                            <button class="btn btn-sm btn-outline-primary" disabled>Manage</button>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="4" class="text-center text-muted py-4">No users found.</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
