@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="text-center mb-4">
      <h1 class="fs-1 fw-bold text-center">Selesaikan Pembayaran Undangan</h1>
      <p>
        Isi formulir di bawah untuk menyelesaikan pembayaran undangan, dan temukan solusi undangan digital terbaik untuk
        pernikahan Anda.
      </p>
    </div>

    @if (session('success'))
      <div class="alert alert-success">
        {{ session('success') }}
      </div>
    @endif

    <div class="row justify-content-center">
      <form class="col-md-8 d-flex flex-column gap-3" action="{{ route('user.invitations.complete', $invitation) }}"
        method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
          <label for="receipt" class="form-label">Foto Groom</label>
          <input type="file" class="form-control @error('receipt') is-invalid @enderror" id="receipt" name="receipt"
            accept="image/*">
          @error('receipt')
            <div class="invalid-feedback">{{ $message }}</div>
          @enderror
        </div>

        <div class="d-grid">
          <button type="submit" class="submit rounded-pill fw-medium">Buat undangan</button>
        </div>
      </form>
    </div>
  </div>
@endsection
