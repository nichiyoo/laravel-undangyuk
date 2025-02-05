@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="text-center mb-4">
      <h1 class="fs-1 fw-bold text-center">Detail Kontak</h1>
      <p>
        lihat detail form kontak, dan temukan solusi undangan digital terbaik untuk pernikahan Anda.
      </p>
    </div>

    <div class="row justify-content-center">
      <form class="col-md-8 d-flex flex-column gap-3" action="{{ route('contact.store') }}" method="POST">
        @csrf

        <div class="row">
          <div class="col-md-12 mb-3">
            <label for="name" class="form-label">{{ __('Name') }}</label>
            <input id="name" type="text" class="form-control bg-light" name="name" value="{{ $message->name }}"
              disabled>
          </div>
        </div>

        <div class="row mb-3">
          <div class="col-md-6">
            <label for="email" class="form-label">{{ __('Email Address') }}</label>
            <input id="email" type="email" class="form-control bg-light" name="email"
              value="{{ $message->email }}" disabled>
          </div>
          <div class="col-md-6">
            <label for="whatsapp" class="form-label">{{ __('WhatsApp') }}</label>
            <input id="whatsapp" type="tel" class="form-control bg-light" name="whatsapp"
              value="{{ $message->whatsapp }}" disabled>
          </div>
        </div>

        <div class="mb-3">
          <label for="message" class="form-label">{{ __('Message') }}</label>
          <textarea id="message" class="form-control bg-light" name="message" rows="5" disabled>{{ $message->message }}</textarea>
          @error('message')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
          @enderror
        </div>
      </form>
    </div>
  </div>
@endsection
