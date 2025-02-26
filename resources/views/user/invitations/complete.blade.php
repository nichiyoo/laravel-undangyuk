@extends('layouts.error')

@section('content')
  <div class="d-flex flex-column justify-content-center align-items-center text-center">
    <div class="d-flex justify-content-center align-items-center mb-4">
      <a href="{{ route('landing') }}">
        <img src="{{ asset('logo.svg') }}" style="width: 180px">
      </a>
    </div>

    <h1 class="fw-bold" style="font-size: 5rem;">Success</h1>
    <h2 class="fs-5 fw-semibold"> Undangan Berhasil Dibayar</h2>
    <p class="mb-4">
      Selamat kamu telah berhasil menyelesaikan pembayaran undangan! udangan anda akan dapat diakses
      setelah pembayaran diverifikasi admin
    </p>



    <div class="d-flex gap-2 justify-content-center">
      <a href="{{ route('user.invitations.index', $invitation) }}">
        <button class="link-primary-nav">
          Kembali ke daftar undangan
        </button>
      </a>
    </div>
  @endsection
