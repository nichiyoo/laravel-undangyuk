@extends('layouts.auth')

@section('content')
  <h1 class="fs-2 fw-bold mb-4">Register</h1>

  <form class="d-flex flex-column gap-2 mb-4" action="{{ route('register') }}" method="POST">
    @csrf

    <div class="mb-2">
      <label for="name" class="form-label">{{ __('Name') }}</label>
      <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name"
        value="{{ old('name') }}" required autocomplete="name" autofocus>

      @error('name')
        <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
        </span>
      @enderror
    </div>

    <div class="mb-2">
      <label for="email" class="form-label">{{ __('Email Address') }}</label>
      <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
        value="{{ old('email') }}" required autocomplete="email">

      @error('email')
        <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
        </span>
      @enderror
    </div>

    <div class="mb-2">
      <label for="password" class="form-label">{{ __('Password') }}</label>
      <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password"
        required autocomplete="new-password">

      @error('password')
        <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
        </span>
      @enderror
    </div>

    <div class="mb-2">
      <label for="password-confirm" class="form-label">{{ __('Confirm Password') }}</label>
      <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required
        autocomplete="new-password">
    </div>

    <button type="submit" class="submit rounded-pill fw-medium">Register</button>
  </form>

  <p class="text-center mb-0">
    Sudah memiliki akun? <a class="text-primary-dark" href="{{ route('login') }}">Login</a>
  </p>
@endsection
