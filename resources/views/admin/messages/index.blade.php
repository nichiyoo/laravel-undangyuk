@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="mb-4">
      <h1 class="fs-1 fw-bold">Data Pesan</h1>
      <p>
        Kelola pesanan pada sistem, Anda dapat mengakses semua halaman yang ada di situs ini dengan
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
            <th class="fw-medium px-4 py-3">Name</th>
            <th class="fw-medium px-4 py-3">Email</th>
            <th class="fw-medium px-4 py-3">WhatsApp</th>
            <th class="fw-medium px-4 py-3">Actions</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($messages as $message)
            <tr>
              <td class="px-4 py-3">{{ $message->name }}</td>
              <td class="px-4 py-3">{{ $message->email }}</td>
              <td class="px-4 py-3">{{ $message->whatsapp }}</td>
              <td class="px-4 py-3 d-flex justify-items-center gap-2">
                <a href="{{ route('admin.messages.show', $message) }}" class="btn rounded-pill btn-light">View</a>
                <form action="{{ route('admin.messages.destroy', $message) }}" method="POST" class="d-inline">
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

    {{ $messages->links() }}
  </div>
@endsection
