@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="text-center mb-4">
      <h1 class="fs-1 fw-bold text-center">Kontak</h1>
      <p>
        Isi formulir di bawah untuk mendapatkan konsultasi gratis dari tim ahli TechDawn, dan temukan solusi undangan
        digital terbaik untuk pernikahan Anda.
      </p>
    </div>

    @if (session('success'))
      <div class="alert alert-success">
        {{ session('success') }}
      </div>
    @endif

    <div class="row justify-content-center">
      <form class="col-md-8 d-flex flex-column gap-3" action="{{ route('contact.store') }}" method="POST">
        @csrf

        <div class="row">
          <div class="col-md-12 mb-3">
            <label for="name" class="form-label">{{ __('Name') }}</label>
            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name"
              value="{{ old('name') }}" required autofocus>
            @error('name')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
            @enderror
          </div>
        </div>

        <div class="row mb-3">
          <div class="col-md-6">
            <label for="email" class="form-label">{{ __('Email Address') }}</label>
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
              value="{{ old('email') }}" required>
            @error('email')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
            @enderror
          </div>
          <div class="col-md-6">
            <label for="whatsapp" class="form-label">{{ __('WhatsApp') }}</label>
            <input id="whatsapp" type="tel" class="form-control @error('whatsapp') is-invalid @enderror"
              name="whatsapp" value="{{ old('whatsapp') }}" required>
            @error('whatsapp')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
            @enderror
          </div>
        </div>

        <div class="mb-3">
          <label for="message" class="form-label">{{ __('Message') }}</label>
          <textarea id="message" class="form-control @error('message') is-invalid @enderror" name="message" rows="5"
            required>{{ old('message') }}</textarea>
          @error('message')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
          @enderror
        </div>

        <div class="d-grid">
          <button type="submit" class="submit rounded-pill fw-medium">Send Message</button>
        </div>
      </form>
    </div>
  </div>
@endsection
