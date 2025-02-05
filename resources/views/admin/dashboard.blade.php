@extends('layouts.app')

@php
  use App\Lib\Helper;

  $menus = array_map(
      function ($item) {
          return Helper::to_object($item);
      },
      [
          [
              'name' => 'Dashboard',
              'href' => route('admin.dashboard'),
              'icon' => 'fa-outline fa-tachometer-alt',
              'description' => 'Dashboard admin',
          ],
          [
              'name' => 'Kontak',
              'href' => route('admin.messages.index'),
              'icon' => 'fa-outline fa-envelope',
          ],
          [
              'name' => 'Pesanan Undangan',
              'href' => route('admin.invitations.index'),
              'icon' => 'fa-outline fa-envelope',
          ],
      ],
  );
@endphp

@section('content')
  <div class="container">
    <div class="mb-4">
      <h1 class="fs-1 fw-bold">Admin Dashboard</h1>
      <p>
        Selamat datang di Dashboard Admin, Anda dapat mengakses semua halaman yang ada di situs ini dengan menggunakan
        akun admin.
      </p>
    </div>

    <div class="row mb-4">
      @foreach ($counts as $count)
        <a href="{{ $count->route }}" class="col-md-4 mb-4">
          <div class="card">
            <div class="card-body">
              <h5 class="fw-semibold">{{ $count->name }}</h5>
              <span class="text-primary-dark">{{ $count->count }} {{ $count->unit }}</span>
            </div>
          </div>
        </a>
      @endforeach
    </div>

    <div class="row">
      <div class="col-12 col-lg-6 mb-4">
        <div class="card">
          <div class="card-body p-0">
            <h5 class="card-title px-3 py-2 pt-3">Pesan Terakhir</h5>
            <div class="card-body p-0 mt-0">
              <table class="table table-borderless mb-0">
                <thead class="table-secondary">
                  <tr class="border-top">
                    <th class="px-3 fw-medium">Name</th>
                    <th class="px-3 fw-medium">Email</th>
                    <th class="px-3 fw-medium">Date</th>
                  </tr>
                </thead>
                <tbody>
                  @forelse ($messages as $message)
                    <tr>
                      <td class="px-3">{{ $message->name }}</td>
                      <td class="px-3">{{ $message->email }}</td>
                      <td class="px-3">{{ $message->created_at->format('Y-m-d') }}</td>
                    </tr>
                  @empty
                    <tr>
                      <td colspan="3" class="py-5 text-center">Tidak ada pesanan yang ditemukan</td>
                    </tr>
                  @endforelse
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>

      <div class="col-12 col-lg-6 mb-4">
        <div class="card">
          <div class="card-body p-0">
            <h5 class="card-title px-3 py-2 pt-3">Pesanan Undangan Terakhir</h5>
            <div class="card-body p-0 mt-0">
              <table class="table table-borderless mb-0">
                <thead class="table-secondary">
                  <tr class="border-top">
                    <th class="px-3 fw-medium">Bride</th>
                    <th class="px-3 fw-medium">Groom</th>
                    <th class="px-3 fw-medium">Date</th>
                    <th class="px-3 fw-medium">Theme</th>
                  </tr>
                </thead>
                <tbody>
                  @forelse ($latest_invitation as $invitation)
                    <tr class="border-top">
                      <td class="px-3">{{ $invitation->bride_name }}</td>
                      <td class="px-3">{{ $invitation->groom_name }}</td>
                      <td class="px-3">{{ $invitation->date->format('Y-m-d') }}</td>
                      <td class="px-3">{{ $invitation->theme }}</td>
                    </tr>
                  @empty
                    <tr>
                      <td colspan="3" class="py-5 text-center">Tidak ada pesanan yang ditemukan</td>
                    </tr>
                  @endforelse
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
