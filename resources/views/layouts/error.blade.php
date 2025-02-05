<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Title & Favicon -->
  <title>{{ config('app.name', 'Laravel') }}</title>
  <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.bunny.net">
  <link href="https://fonts.bunny.net/css?family=bricolage-grotesque:400,500,600,700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
    integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- Meta Tags -->
  <meta name="author" content="Hari-H" />
  <meta name="description"
    content="Rencanakan acara Anda dengan sempurna menggunakan undangan digital dari Hari-H. Dengan desain yang elegan dan fitur interaktif, buat momen istimewa Anda lebih berkesan. Mulailah perayaan Anda dengan undangan yang mengagumkan, praktis, dan ramah lingkungan. Temukan kemudahan dalam perencanaan acara Anda bersama Hari-H!" />

  <meta itemprop="name" content="{{ config('app.name') }}" />
  <meta itemprop="image" content="{{ asset('icon.webp') }}" />
  <meta itemprop="description"
    content="Rencanakan acara Anda dengan sempurna menggunakan undangan digital dari Hari-H. Dengan desain yang elegan dan fitur interaktif, buat momen istimewa Anda lebih berkesan. Mulailah perayaan Anda dengan undangan yang mengagumkan, praktis, dan ramah lingkungan. Temukan kemudahan dalam perencanaan acara Anda bersama Hari-H!" />

  <meta property="og:type" content="website" />
  <meta property="og:url" content="{{ config('app.url') }}" />
  <meta property="og:title" content="{{ config('app.name') }}" />
  <meta property="og:image" content="{{ asset('icon.webp') }}" />
  <meta property="og:description"
    content="Rencanakan acara Anda dengan sempurna menggunakan undangan digital dari Hari-H. Dengan desain yang elegan dan fitur interaktif, buat momen istimewa Anda lebih berkesan. Mulailah perayaan Anda dengan undangan yang mengagumkan, praktis, dan ramah lingkungan. Temukan kemudahan dalam perencanaan acara Anda bersama Hari-H!" />

  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:title" content="{{ config('app.name') }}" />
  <meta name="twitter:image" content="{{ asset('icon.webp') }}" />
  <meta name="twitter:description"
    content="Rencanakan acara Anda dengan sempurna menggunakan undangan digital dari Hari-H. Dengan desain yang elegan dan fitur interaktif, buat momen istimewa Anda lebih berkesan. Mulailah perayaan Anda dengan undangan yang mengagumkan, praktis, dan ramah lingkungan. Temukan kemudahan dalam perencanaan acara Anda bersama Hari-H!" />

  <!-- Stylesheets -->
  <link rel="stylesheet" href="{{ asset('dist/css/bootstrap.min.css') }}" />
  <link rel="stylesheet" href="{{ asset('dist/css/jquery.toast.min.css') }}" />
  <link rel="stylesheet" href="{{ asset('dist/css/global.css') }}" />
  <link rel="stylesheet" href="{{ asset('dist/css/style.css') }}" />
</head>

<body>
  <div class="container d-flex align-items-center justify-content-center">
    <main class="row" style="min-height: 100vh;">
      <div class="d-flex flex-column justify-content-center align-items-center text-center">
        @yield('content')
      </div>
    </main>
  </div>


  <!-- JavaScripts -->
  <script src="{{ asset('dist/js/jquery.min.js') }}"></script>
  <script src="{{ asset('dist/js/jquery.toast.min.js') }}"></script>
  <script src="{{ asset('dist/js/bootstrap.bundle.min.js') }}"></script>
  @stack('scripts')
</body>

</html>
