@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="mb-4">
      <h1 class="fs-1 fw-bold">Data Pesanan</h1>
      <p>
        Kelola data pesanan undangan pada sistem, Anda dapat mengakses semua halaman yang ada di situs ini dengan
        menggunakan akun admin.
      </p>
    </div>

    @if (session('success'))
      <div class="alert alert-success">
        {{ session('success') }}
      </div>
    @endif

    <div class="rounded-4 overflow-hidden border border-bottom-0 mb-4">
      <table class="table mb-0 align-middle">
        <thead class="table-dark">
          <tr>
            <th class="fw-medium px-4 py-3">ID</th>
            <th class="fw-medium px-4 py-3">Bride</th>
            <th class="fw-medium px-4 py-3">Groom</th>
            <th class="fw-medium px-4 py-3">Date</th>
            <th class="fw-medium px-4 py-3">Location</th>
            <th class="fw-medium px-4 py-3">Theme</th>
            <th class="fw-medium px-4 py-3">Status</th>
            <th class="fw-medium px-4 py-3">Actions</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($invitations as $invitation)
            <tr>
              <td class="px-4 py-3">{{ $invitation->id }}</td>
              <td class="px-4 py-3">{{ $invitation->bride_name }}</td>
              <td class="px-4 py-3">{{ $invitation->groom_name }}</td>
              <td class="px-4 py-3">{{ $invitation->date->format('F d, Y') }}</td>
              <td class="px-4 py-3">{{ $invitation->location }}</td>
              <td class="px-4 py-3">{{ $invitation->theme }}</td>
              <td class="px-4 py-3">
                <span class="badge text-uppercase @if ($invitation->status === 'cancelled') bg-danger @else bg-success @endif">
                  {{ $invitation->status }}
                </span>
              </td>
              <td class="px-4 py-3 d-flex justify-items-center gap-2">
                <a href="{{ route('user.invitations.show', $invitation) }}" class="btn rounded-pill btn-light">View</a>
                <a href="{{ route('user.invitations.edit', $invitation) }}" class="btn rounded-pill btn-light">Edit</a>
                <form action="{{ route('user.invitations.destroy', $invitation) }}" method="POST" class="d-inline">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn rounded-pill btn-danger"
                    onclick="return confirm('Are you sure?')">Delete</button>
                </form>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>

    {{ $invitations->links() }}
  </div>
@endsection
