<!-- resources/views/user/dashboard.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Welcome to Your Dashboard, {{ $user->name }}</h1>

        <!-- User Information -->
        <div class="card mb-4">
            <div class="card-header">
                Your Information
            </div>
            <div class="card-body">
                <p><strong>Name:</strong> {{ $user->name }}</p>
                <p><strong>Email:</strong> {{ $user->email }}</p>
                <p><strong>Role:</strong> {{ $user->role_id == 1 ? 'Admin' : 'User' }}</p>
            </div>
        </div>

        <!-- Edit Profile Link -->
        

        <!-- Action Buttons -->
        <form action="{{ route('logout') }}" method="POST" style="display: inline;">
    @csrf
    <button type="submit" class="btn btn-danger">Logout</button>
</form>
    </div>
@endsection
