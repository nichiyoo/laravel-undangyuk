@extends('layouts.error')

@section('content')
  <div class="d-flex flex-column justify-content-center align-items-center text-center">
    <div class="d-flex justify-content-center align-items-center mb-4">
      <a href="{{ route('landing') }}">
        <img src="{{ asset('logo.svg') }}" style="width: 180px">
      </a>
    </div>

    <h1 class="fw-bold" style="font-size: 5rem;">Success</h1>
    <h2 class="fs-5 fw-semibold"> Undangan Berhasil Dibuat</h2>
    <p class="mb-4">Selamat kamu telah berhasil membuat undangan! Berikut linknya </p>


    <a href="{{ route('user.invitations.show', $invitation) }}" class="w-full mb-4">
      <button class="link-primary-nav w-full">
        Link Undangan Anda!
      </button>
    </a>

    <span class="mb-2">Atau salin link dibawah</span>
    <a href="{{ route('user.invitations.show', $invitation) }}" class="w-full text-primary">
      {{ route('user.invitations.show', $invitation) }}
    </a>
  @endsection
