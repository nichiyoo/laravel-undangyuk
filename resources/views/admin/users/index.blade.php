@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="mb-4">
      <h1 class="fs-1 fw-bold">Data Pengguna</h1>
      <p>
        Kelola pengguna pada sistem, Anda dapat mengakses semua halaman yang ada di situs ini dengan
        menggunakan akun admin.
      </p>
    </div>

    @if (session('success'))
      <div class="alert alert-success">
        {{ session('success') }}
      </div>
    @endif

    <div class="rounded-4 overflow-hidden border border-bottom-0 mb-4">
      <table class="table mb-0">
        <thead class="table-dark">
          <tr>
            <th class="fw-medium px-4 py-3">Name</th>
            <th class="fw-medium px-4 py-3">Email</th>
            <th class="fw-medium px-4 py-3">Role</th>
            <th class="fw-medium px-4 py-3">Tanggal Bergabung</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($users as $user)
            <tr>
              <td class="px-4 py-3">{{ $user->name }}</td>
              <td class="px-4 py-3">{{ $user->email }}</td>
              <td class="px-4 py-3">{{ $user->role }}</td>
              <td class="px-4 py-3">{{ $user->created_at->format('D, d M Y') }}</td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>

    {{ $users->links() }}
  </div>
@endsection
