@extends('layouts.error')

@section('content')
  <div class="d-flex flex-column justify-content-center align-items-center text-center">
    <div class="d-flex justify-content-center align-items-center mb-4">
      <a href="{{ route('landing') }}">
        <img src="{{ asset('logo.svg') }}" style="width: 180px">
      </a>
    </div>

    <h1 class="fw-bold" style="font-size: 5rem;">Pending</h1>
    <h2 class="fs-5 fw-semibold"> Undangan menunggu pembayaran</h2>
    <p class="mb-4">
      Selamat kamu telah berhasil membuat undangan! silahkan selesaikan pembayaran untuk dapat melihat
      undangan anda
    </p>

    <a href="{{ route('user.invitations.payment', $invitation) }}">
      <button class="link-primary-nav w-full">
        Selesaikan Pembayaran
      </button>
    </a>
  @endsection
