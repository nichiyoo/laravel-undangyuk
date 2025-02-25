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
      <form class="col-md-8 d-flex flex-column gap-3" action="{{ route('admin.invitations.update', $invitation) }}"
        method="POST" enctype="multipart/form-data">
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
            <label for="bride_fullname" class="form-label">Bride Fullname</label>
            <input type="text" class="form-control @error('bride_fullname') is-invalid @enderror" id="bride_fullname"
              name="bride_fullname" value="{{ old('bride_fullname', $invitation->bride_fullname) }}" required>
            @error('bride_fullname')
              <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>

          <div class="col-md-6">
            <label for="groom_fullname" class="form-label">Groom Fullname</label>
            <input type="text" class="form-control @error('groom_fullname') is-invalid @enderror" id="groom_fullname"
              name="groom_fullname" value="{{ old('groom_fullname', $invitation->groom_fullname) }}" required>
            @error('groom_fullname')
              <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>
        </div>

        <div class="row mb-3">
          <div class="col-md-6">
            <label for="bride_parent" class="form-label">Bride's Parent Name</label>
            <input type="text" class="form-control @error('bride_parent') is-invalid @enderror" id="bride_parent"
              name="bride_parent" value="{{ old('bride_parent', $invitation->bride_parent) }}" required>
            @error('bride_parent')
              <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>

          <div class="col-md-6">
            <label for="groom_parent" class="form-label">Groom's Parent Name</label>
            <input type="text" class="form-control @error('groom_parent') is-invalid @enderror" id="groom_parent"
              name="groom_parent" value="{{ old('groom_parent', $invitation->groom_parent) }}" required>
            @error('groom_parent')
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
          <label for="address" class="form-label">Address</label>
          <input type="text" class="form-control @error('address') is-invalid @enderror" id="address"
            name="address" value="{{ old('address', $invitation->address) }}" required>
          @error('address')
            <div class="invalid-feedback">{{ $message }}</div>
          @enderror
        </div>

        <div class="mb-3">
          <label for="video" class="form-label">Video</label>
          <input type="text" class="form-control @error('video') is-invalid @enderror" id="video"
            name="video" value="{{ old('video', $invitation->video) }}" required>
          @error('video')
            <div class="invalid-feedback">{{ $message }}</div>
          @enderror
        </div>

        <div class="mb-3">
          <label for="theme" class="form-label">Theme</label>
          <select class="form-select @error('theme') is-invalid @enderror" id="theme" name="theme" required>
            <option value="tema-1" @if ($invitation->theme == 'tema-1') selected @endif>Tema 1</option>
            <option value="tema-2" @if ($invitation->theme == 'tema-2') selected @endif>Tema 2</option>
          </select>
          @error('theme')
            <div class="invalid-feedback">{{ $message }}</div>
          @enderror
        </div>

        <div class="mb-3">
          <label for="bride_photo" class="form-label">Foto Bride</label>
          <input type="file" class="form-control @error('bride_photo') is-invalid @enderror" id="bride_photo"
            name="bride_photo" accept="image/*">
          @error('bride_photo')
            <div class="invalid-feedback">{{ $message }}</div>
          @enderror
        </div>

        <div class="mb-3">
          <label for="groom_photo" class="form-label">Foto Groom</label>
          <input type="file" class="form-control @error('groom_photo') is-invalid @enderror" id="groom_photo"
            name="groom_photo" accept="image/*">
          @error('groom_photo')
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
