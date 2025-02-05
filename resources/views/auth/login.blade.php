@extends('layouts.auth')

@section('content')
  <h1 class="fs-2 fw-bold mb-4">Login</h1>

  <form class="d-flex flex-column gap-2 mb-4" action="{{ route('login') }}" method="POST">
    @csrf

    <div class="mb-2">
      <label for="email" class="form-label">{{ __('Email Address') }}</label>
      <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
        value="{{ old('email') }}" required autocomplete="email" autofocus>

      @error('email')
        <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
        </span>
      @enderror
    </div>

    <div class="mb-2">
      <label for="password" class="form-label">{{ __('Password') }}</label>
      <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password"
        required autocomplete="current-password">

      @error('password')
        <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
        </span>
      @enderror
    </div>

    <button type="submit" class="submit rounded-pill fw-medium">Login</button>
  </form>

  <p class="text-center mb-0">
    Belum memiliki akun? <a class="text-primary-dark" href="{{ route('register') }}">Register</a>
  </p>
@endsection
