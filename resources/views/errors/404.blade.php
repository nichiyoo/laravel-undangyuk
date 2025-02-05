@extends('layouts.error')

@section('content')
  <div class="d-flex flex-column justify-content-center align-items-center text-center">
    <img src="{{ asset('logo.svg') }}" alt="" width="200px" class="mb-4">
    <div class="mb-5">
      <x-translate />
    </div>

    <h1 class="fw-bold" style="font-size: 5rem;">404</h1>
    <h2 class="fs-5 fw-semibold"> Halaman tidak ditemukan</h2>
    <p class="w-50 mb-5">
      Maaf, halaman yang Anda cari tidak dapat ditemukan. Kami mungkin sedang melakukan pembaruan atau
      perbaikan atau url yang ada tulis salah. Silakan coba lagi nanti atau kembali ke halaman sebelumnya.
    </p>

    <a href="{{ route('landing') }}">
      <button class="link-primary-nav">
        Kembali ke halaman utama
      </button>
    </a>
  @endsection
