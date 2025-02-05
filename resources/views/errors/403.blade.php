@extends('layouts.error')

@section('content')
  <div class="d-flex flex-column justify-content-center align-items-center text-center">
    <img src="{{ asset('logo.svg') }}" alt="" width="200px" class="mb-4">
    <div class="mb-5">
      <x-translate />
    </div>

    <h1 class="fw-bold" style="font-size: 5rem;">403</h1>
    <h2 class="fs-5 fw-semibold"> Anda tidak memiliki akses ke halaman ini</h2>
    <p class="w-50 mb-5">
      Maaf, anda tidak memiliki akses ke halaman ini. Silakan hubungi administrator untuk meminta akses,
      atau kembali ke halaman utama.
    </p>

    <a href="{{ route('landing') }}">
      <button class="link-primary-nav">
        Kembali ke halaman utama
      </button>
    </a>
  @endsection
