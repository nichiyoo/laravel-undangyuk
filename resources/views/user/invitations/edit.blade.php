@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="text-center mb-4">
      <h1 class="fs-1 fw-bold text-center">Edit Undangan</h1>
      <p>
        Isi formulir di bawah untuk mengedit undangan, dan temukan solusi undangan digital terbaik untuk pernikahan Anda.
      </p>
    </div>

    @if (session('success'))
      <div class="alert alert-success">
        {{ session('success') }}
      </div>
    @endif

    <div class="row justify-content-center">
      <form class="col-md-8 d-flex flex-column gap-3" action="{{ route('user.invitations.update', $invitation) }}"
        method="POST">
        @csrf
        @method('PUT')

        <div class="row mb-3">
          <div class="col-md-6">
            <label for="bride_name" class="form-label">Bride Name</label>
            <input type="text" class="form-control @error('bride_name') is-invalid @enderror" id="bride_name"
              name="bride_name" value="{{ old('bride_name', $invitation->bride_name) }}" required>
            @error('bride_name')
              <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>

          <div class="col-md-6">
            <label for="groom_name" class="form-label">Groom Name</label>
            <input type="text" class="form-control @error('groom_name') is-invalid @enderror" id="groom_name"
              name="groom_name" value="{{ old('groom_name', $invitation->groom_name) }}" required>
            @error('groom_name')
              <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>
        </div>

        <div class="row mb-3">
          <div class="col-md-6">
            <label for="bride_parent_name" class="form-label">Bride's Parent Name</label>
            <input type="text" class="form-control @error('bride_parent_name') is-invalid @enderror"
              id="bride_parent_name" name="bride_parent_name"
              value="{{ old('bride_parent_name', $invitation->bride_parent_name) }}" required>
            @error('bride_parent_name')
              <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>

          <div class="col-md-6">
            <label for="groom_parent_name" class="form-label">Groom's Parent Name</label>
            <input type="text" class="form-control @error('groom_parent_name') is-invalid @enderror"
              id="groom_parent_name" name="groom_parent_name"
              value="{{ old('groom_parent_name', $invitation->groom_parent_name) }}" required>
            @error('groom_parent_name')
              <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>
        </div>

        <div class="row mb-3">
          <div class="col-md-4">
            <label for="date" class="form-label">Date</label>
            <input type="date" class="form-control @error('date') is-invalid @enderror" id="date" name="date"
              value="{{ old('date', $invitation->date->format('Y-m-d')) }}" required
              min="{{ date('Y-m-d', strtotime('+1 day')) }}">
            @error('date')
              <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>

          <div class="col-md-4">
            <label for="location" class="form-label">Location</label>
            <input type="text" class="form-control @error('location') is-invalid @enderror" id="location"
              name="location" value="{{ old('location', $invitation->location) }}" required>
            @error('location')
              <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>

          <div class="col-md-4">
            <label for="time" class="form-label">Time</label>
            <input type="text" class="form-control @error('time') is-invalid @enderror" id="time" name="time"
              value="{{ old('time', $invitation->time) }}" required>
            @error('time')
              <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>
        </div>

        <div class="mb-3">
          <label for="theme" class="form-label">Theme</label>
          <input type="text" class="form-control @error('theme') is-invalid @enderror" id="theme" name="theme"
            value="{{ old('theme', $invitation->theme) }}" required>
          @error('theme')
            <div class="invalid-feedback">{{ $message }}</div>
          @enderror
        </div>

        <div class="d-grid">
          <button type="submit" class="submit rounded-pill fw-medium">Update undangan</button>
        </div>
      </form>
    </div>
  </div>
@endsection
