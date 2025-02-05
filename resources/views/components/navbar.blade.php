@php
  use App\Lib\Helper;

  $menus = array_map(
      function ($item) {
          return Helper::to_object($item);
      },
      [
          [
              'name' => 'Home',
              'href' => route('landing') . '#',
          ],
          [
              'name' => 'Langkah',
              'href' => route('landing') . '#step',
          ],
          [
              'name' => 'Fitur',
              'href' => route('landing') . '#feature',
          ],
          [
              'name' => 'Tema',
              'href' => route('landing') . '#theme',
          ],
          [
              'name' => 'Harga',
              'href' => route('landing') . '#price',
          ],
          [
              'name' => 'Kontak',
              'href' => route('contact.create'),
          ],
      ],
  );

@endphp

<nav class="navbar navbar-expand-lg navbar-light bg-light p-3 fixed-top">
  <div class="container">
    <a class="navbar-brand" href="{{ route('landing') }}">
      <img src="{{ asset('logo.svg') }}" class="logo-horizontal" />
    </a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav m-auto">
        @foreach ($menus as $menu)
          <li class="nav-item">
            <a class="nav-link rounded-pill" aria-current="page" href="{{ $menu->href }}">{{ $menu->name }}</a>
          </li>
        @endforeach
      </ul>

      <div class="d-flex align-items-center gap-2">
        <a href="{{ route('user.invitations.create') }}" class="link-primary-nav">
          Buat Undangan
        </a>

        @guest
          <a href="{{ route('login') }}" class="link-primary-nav">
            Login
          </a>
        @else
          <a href="{{ route('login') }}" style="font-size: 14px;">
            <img
              src="{{ 'https://ui-avatars.com/api/?name=' . Auth::user()->name . '&background=3b4b9e&color=fff&size=48' }}"
              alt="" width="48px" height="48px" class="rounded-pill">
          </a>

          <a href="#" class="link-primary-nav bg-secondary border-secondary"
            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            Logout
          </a>

          <form id="logout-form" action="{{ route('logout') }}" method="POST">
            @csrf
          </form>
        @endguest
      </div>
    </div>
  </div>
</nav>
