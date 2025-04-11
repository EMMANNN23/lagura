@extends('layouts.app')

@section('content')
<style>
    body, html {
        height: 100%;
        margin: 0;
        font-family: 'Poppins', sans-serif;
        background: linear-gradient(to bottom right, #d2b48c, #f5f5dc); /* Light brown gradient */
    }

    .login-wrapper {
        height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .glass-card {
        background: rgba(255, 255, 255, 0.85);
        border-radius: 20px;
        padding: 40px 30px;
        width: 100%;
        max-width: 400px;
        backdrop-filter: blur(15px);
        box-shadow: 0 8px 32px rgba(0, 0, 0, 0.15);
        color: #000;
    }

    .glass-card h3 {
        font-weight: 600;
        text-align: center;
        margin-bottom: 30px;
        color: #333;
    }

    .form-label {
        font-weight: 500;
        margin-bottom: 6px;
        color: #111;
    }

    .form-control {
        border-radius: 10px;
        background: #fff;
        border: 1px solid #ccc;
        color: #000;
        padding: 10px 15px;
    }

    .form-control::placeholder {
        color: rgba(0, 0, 0, 0.5);
    }

    .form-control:focus {
        border-color: #a0522d; /* Saddle brown for contrast */
        box-shadow: none;
    }

    .form-check-label {
        color: #000;
        font-size: 0.95rem;
    }

    .btn-primary {
        border-radius: 10px;
        padding: 10px;
        font-weight: 600;
        font-size: 1rem;
        background-color: #a0522d; /* A rich brown */
        border: none;
        color: #fff;
        transition: background 0.3s ease;
    }

    .btn-primary:hover {
        background-color: #8b4513; /* Darker brown on hover */
    }

    .btn-link {
        color: #a0522d;
        font-size: 0.9rem;
        text-decoration: none;
    }

    .btn-link:hover {
        text-decoration: underline;
        color: #8b4513;
    }

    .invalid-feedback {
        font-size: 0.875rem;
        color: red;
    }
</style>

<div class="login-wrapper">
    <div class="glass-card">
        <h3>{{ __('Login') }}</h3>

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="form-group mb-3">
                <label for="email" class="form-label">{{ __('Email Address') }}</label>
                <input id="email" type="email"
                       class="form-control @error('email') is-invalid @enderror"
                       name="email" value="{{ old('email') }}"
                       required autocomplete="email" autofocus
                       placeholder="you@example.com">
                @error('email')
                <div class="invalid-feedback d-block">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="form-group mb-3">
                <label for="password" class="form-label">{{ __('Password') }}</label>
                <input id="password" type="password"
                       class="form-control @error('password') is-invalid @enderror"
                       name="password" required
                       placeholder="Enter your password">
                @error('password')
                <div class="invalid-feedback d-block">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="form-check mb-3">
                <input class="form-check-input" type="checkbox" name="remember" id="remember"
                       {{ old('remember') ? 'checked' : '' }}>
                <label class="form-check-label" for="remember">
                    {{ __('Remember Me') }}
                </label>
            </div>

            <div class="d-grid gap-2 mb-3">
                <button type="submit" class="btn btn-primary">
                    {{ __('Login') }}
                </button>
            </div>

            @if (Route::has('password.request'))
                <div class="text-center">
                    <a class="btn-link" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                </div>
            @endif
        </form>
    </div>
</div>
@endsection
