@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="text-center mb-4">
      <h1 class="fs-1 fw-bold text-center">Detail Undangan</h1>
      <p>
        lihat detail undangan yang telah dibuat, dan temukan solusi undangan digital terbaik untuk pernikahan Anda.
      </p>
    </div>

    <div class="row justify-content-center">
      <form class="col-md-8 d-flex flex-column gap-3">
        <div class="row mb-3">
          <div class="col-md-6">
            <label for="bride_name" class="form-label">Bride Name</label>
            <input type="text" class="form-control bg-light" id="bride_name" name="bride_name"
              value="{{ $invitation->bride_name }}" disabled>
          </div>

          <div class="col-md-6">
            <label for="groom_name" class="form-label">Groom Name</label>
            <input type="text" class="form-control bg-light" id="groom_name" name="groom_name"
              value="{{ $invitation->groom_name }}" disabled>
          </div>
        </div>

        <div class="row mb-3">
          <div class="col-md-6">
            <label for="bride_parent_name" class="form-label">Bride's Parent Name</label>
            <input type="text" class="form-control bg-light" id="bride_parent_name" name="bride_parent_name"
              value="{{ $invitation->bride_parent_name }}" disabled>
          </div>

          <div class="col-md-6">
            <label for="groom_parent_name" class="form-label">Groom's Parent Name</label>
            <input type="text" class="form-control bg-light" id="groom_parent_name" name="groom_parent_name"
              value="{{ $invitation->groom_parent_name }}" disabled>
          </div>
        </div>

        <div class="row mb-3">
          <div class="col-md-4">
            <label for="date" class="form-label">Date</label>
            <input type="date" class="form-control bg-light" id="date" name="date"
              value="{{ $invitation->date->format('Y-m-d') }}" disabled>
          </div>

          <div class="col-md-4">
            <label for="location" class="form-label">Location</label>
            <input type="text" class="form-control bg-light" id="location" name="location"
              value="{{ $invitation->location }}" disabled>
          </div>

          <div class="col-md-4">
            <label for="time" class="form-label">Time</label>
            <input type="text" class="form-control bg-light" id="time" name="time"
              value="{{ $invitation->time }}" disabled>
          </div>
        </div>

        <div class="mb-3">
          <label for="theme" class="form-label">Theme</label>
          <input type="text" class="form-control bg-light" id="theme" name="theme"
            value="{{ $invitation->theme }}" disabled>
        </div>
      </form>
    </div>
  </div>
@endsection
