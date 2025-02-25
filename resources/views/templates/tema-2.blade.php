<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Title & Favicon -->
  <title>{{ config('app.name', 'Laravel') }}</title>
  <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&family=Kurale&family=Lora:ital,wght@0,400..700;1,400..700&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
    integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

  @php
    $name = 'Pernikahan ' . $invitation->bride_name . ' & ' . $invitation->groom_name;
  @endphp

  <meta itemprop="name" content="{{ $name }} - Hari-H Invitation" />
  <meta itemprop="description" content="{{ $invitation->date->format('d F Y') }}" />
  <meta itemprop="image" content="{{ asset('icon.webp') }}" />

  <meta property="og:type" content="website" />
  <meta property="og:url" content="{{ config('app.url') }}" />
  <meta property="og:title" content="{{ $name }} - Hari-H Invitation" />
  <meta property="og:description" content="{{ $invitation->date->format('d F Y') }}" />
  <meta property="og:image" content="{{ asset('icon.webp') }}" />

  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:title" content="{{ $name }} - Hari-H Invitation" />
  <meta name="twitter:description" content="{{ $invitation->date->format('d F Y') }}" />
  <meta name="twitter:image" content="{{ asset('icon.webp') }}" />

  <!-- Stylesheets -->
  <link rel="stylesheet" href="{{ asset('templates/tema-2/css/style.css') }}" />
  <link rel="stylesheet" href="{{ asset('dist/css/bootstrap.min.css') }}" />
  <link rel="stylesheet" href="{{ asset('dist/css/jquery.toast.min.css') }}" />
  <link rel="stylesheet" href="{{ asset('dist/css/baguette-box.min.css') }}" />
</head>

<body>
  <audio id="music" loop>
    <source src="{{ asset('templates/tema-2/music/beautiful_white.mp3') }}" type="audio/mpeg" />
  </audio>

  <div id="display-start">
    <div class="section-header content" id="home">
      <div class="illustration1"></div>
      <div class="illustration2"></div>
      <div class="illustration3"></div>
      <div class="illustration4"></div>
      <div class="center-illustration">
        <div class="illustration5">
          <div class="section-text-illustration5">
            <div class="kurale-text text-center">Undangan Pernikahan</div>
            <div class="bridal-name">
              <span class="dancing-text-head man-name">{{ $invitation->groom_name }} </span>
              <span class="dancing-text">
                <span class="text-gold text-xl">&</span>
              </span>
              <span class="dancing-text-head woman-name">{{ $invitation->bride_name }} </span>
            </div>
            <div class="kurale-text text-center">
              {{ $invitation->date->format('l, d F Y') }}
            </div>
          </div>
        </div>

        <div class="center-content-subtitle mb-32">
          <div class="kurale-text text-center">
            Kepada Yth. Bapak/Ibu/Saudara/i
          </div>
          <div class="kurale-text text-center">{{ $recipient }}</div>
        </div>
        <div class="d-flex justify-content-center">
          <button type="button" class="btn-color-main" id="btn-invitation">
            Open Invitation
          </button>
        </div>
      </div>
    </div>
  </div>

  <div id="display-invitation" style="display: none">
    <div class="d-flex justify-content-center">
      <nav class="navigation-bar d-flex justify-content-center">
        <ul class="list-items">
          <li class="item active">
            <a class="link" href="#beranda">
              <div>
                <img src="{{ asset('templates/tema-2/images/icon/beranda.png') }}" id="img-beranda"
                  class="hidden img-default" />
                <img src="{{ asset('templates/tema-2/images/icon/beranda_gold.png') }}" id="img-beranda-gold"
                  class="img-active" />
              </div>
              <div class="menu-name">
                <span>Beranda</span>
              </div>
            </a>
          </li>
          <li class="item">
            <a class="link" href="#mempelai">
              <div>
                <img src="{{ asset('templates/tema-2/images/icon/mempelai.png') }}" id="img-mempelai"
                  class="img-default" />
                <img src="{{ asset('templates/tema-2/images/icon/mempelai_gold.png') }}" id="img-mempelai-gold"
                  class="hidden img-active" />
              </div>
              <div class="menu-name">
                <span>Mempelai</span>
              </div>
            </a>
          </li>
          <li class="item">
            <a class="link" href="#acara">
              <div>
                <img src="{{ asset('templates/tema-2/images/icon/acara.png') }}" id="img-acara"
                  class="img-default" />
                <img src="{{ asset('templates/tema-2/images/icon/acara_gold.png') }}" id="img-acara-gold"
                  class="hidden img-active" />
              </div>
              <div class="menu-name">
                <span>Acara</span>
              </div>
            </a>
          </li>
          <li class="item">
            <a class="link" href="#lokasi">
              <div>
                <img src="{{ asset('templates/tema-2/images/icon/lokasi.png') }}" id="img-lokasi"
                  class="img-default" />
                <img src="{{ asset('templates/tema-2/images/icon/lokasi_gold.png') }}" id="img-lokasi-gold"
                  class="hidden img-active" />
              </div>
              <div class="menu-name">
                <span>Lokasi</span>
              </div>
            </a>
          </li>
          <li class="item">
            <a class="link" href="#galeri">
              <div>
                <img src="{{ asset('templates/tema-2/images/icon/galeri.png') }}" id="img-galeri"
                  class="img-default" />
                <img src="{{ asset('templates/tema-2/images/icon/galeri_gold.png') }}" id="img-galeri-gold"
                  class="hidden img-active" />
              </div>
              <div class="menu-name">
                <span>Galeri</span>
              </div>
            </a>
          </li>
          <li class="item">
            <a class="link" href="#kisah">
              <div>
                <img src="{{ asset('templates/tema-2/images/icon/kisah.png') }}" id="img-kisah"
                  class="img-default" />
                <img src="{{ asset('templates/tema-2/images/icon/kisah_gold.png') }}" id="img-kisah-gold"
                  class="hidden img-active" />
              </div>
              <div class="menu-name">
                <span>Kisah</span>
              </div>
            </a>
          </li>
          <li class="item">
            <a class="link" href="#hadiah">
              <div>
                <img src="{{ asset('templates/tema-2/images/icon/hadiah.png') }}" id="img-hadiah"
                  class="img-default" />
                <img src="{{ asset('templates/tema-2/images/icon/hadiah_gold.png') }}" id="img-hadiah-gold"
                  class="hidden img-active" />
              </div>
              <div class="menu-name">
                <span>Hadiah</span>
              </div>
            </a>
          </li>
          <li class="item">
            <a class="link" href="#ucapan">
              <div>
                <img src="{{ asset('templates/tema-2/images/icon/ucapan.png') }}" id="img-ucapan"
                  class="img-default" />
                <img src="{{ asset('templates/tema-2/images/icon/ucapan_gold.png') }}" id="img-ucapan-gold"
                  class="hidden img-active" />
              </div>
              <div class="menu-name">
                <span>Ucapan</span>
              </div>
            </a>
          </li>
        </ul>
      </nav>
    </div>

    <div class="music-button">
      <img src="{{ asset('templates/tema-2/images/icon/pause.png') }}" width="20" height="20"
        class="pause-button" />
      <img src="{{ asset('templates/tema-2/images/icon/play.png') }}" width="20" height="20"
        class="play-button hidden" />
    </div>

    <div class="section-header content" id="beranda">
      <div class="illustration1"></div>
      <div class="illustration2"></div>
      <div class="illustration3"></div>
      <div class="illustration4"></div>
      <div class="center-illustration">
        <div class="illustration5">
          <div class="section-text-illustration5">
            <div class="kurale-text text-center">Undangan Pernikahan</div>
            <div class="bridal-name">
              <span class="dancing-text-head man-name">{{ $invitation->groom_name }} </span>
              <span class="dancing-text">
                <span class="text-gold text-xl">&</span>
              </span>
              <span class="dancing-text-head woman-name">{{ $invitation->bride_name }} </span>
            </div>
            <div class="kurale-text text-center">
              {{ $invitation->date->format('l, d F Y') }}
            </div>
          </div>
        </div>

        <div class="center-content-subtitle mb-32">
          <div class="kurale-text text-center">
            Kepada Yth. Bapak/Ibu/Saudara/i
          </div>
          <div class="kurale-text text-center">{{ $recipient }}</div>
        </div>
      </div>
    </div>

    <div class="section-bg2" id="mempelai">
      <div class="bg-opacity"></div>
      <div class="container content">
        <div class="d-flex justify-content-center title-white">
          بِسْمِ اللَّهِ الرَّحْمَنِ الرَّحِيْم
        </div>
        <div class="d-flex justify-content-center subtitle-white">
          Assalamu'alaikum Warahmatullahi Wabarakatuh
        </div>
        <div class="d-flex justify-content-center subtitle-white mb-32">
          Dalam nama Allah Yang Maha Pemurah, kami mengundang Anda untuk
          menjadi saksi atas perjalanan cinta kami.<br />Ya Allah,
          perkenankanlah kami membangun rumah tangga yang penuh cinta dan
          berkah, karena Kau-lah yang menciptakan rasa kasih sayang di antara
          kami.
        </div>
        <div class="row container-bridal">
          <div class="col section-bridal-left">
            <div class="vstack">
              <div class="illustration-bridal-left">
                <center>
                  <img src="{{ asset('templates/tema-2/images/bridal_photo/1.png') }}" class="bridal_photo"
                    alt="groom" />
                </center>
              </div>
              <div class="text-gold dancing-text heading-text-small mt-4" style="text-align: center">
                {{ $invitation->groom_name }}
              </div>
              <div class="dancing-text heading-text-small" style="text-align: center">
                {{ $invitation->groom_fullname }}
                <div class="subtitle-white">
                  Putra dari
                  <br />
                  Bapak {{ $invitation->groom_parent }}
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-auto section-bridal-center dancing-text-head">
            &
          </div>
          <div class="col section-bridal-right">
            <div class="vstack">
              <div class="illustration-bridal-right">
                <center>
                  <img src="{{ asset('templates/tema-2/images/bridal_photo/2.png') }}" class="bridal_photo"
                    alt="the bride" />
                </center>
              </div>
              <div class="text-gold dancing-text heading-text-small mt-4" style="text-align: center">
                {{ $invitation->bride_name }}
              </div>
              <div class="dancing-text heading-text-small" style="text-align: center">
                {{ $invitation->bride_fullname }}
                <div class="subtitle-white">
                  Putri dari
                  <br />
                  Bapak {{ $invitation->bride_parent }}
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <br />
      <br />
    </div>
    <div class="section-bg2" id="acara">
      <div class="bg-opacity"></div>
      <div class="container content">
        <div class="d-flex justify-content-center text-gold heading-text-lg dancing-text">
          Acara
        </div>
        <div class="d-flex justify-content-center subtitle-white mb-32">
          Kehadiran serta doa restu Anda adalah tanda kasih sayang yang tak
          ternilai bagaimana pun bentuknya
        </div>
        <div class="d-flex justify-content-center text-gold heading-text-lg dancing-text text-center">
          Akad Nikah
        </div>
        <div class="d-flex justify-content-center mb-2">
          <div>
            <img src="{{ asset('templates/tema-2/images/icon/calendar.png') }}" class="mr-2" alt="" />
            <span class="align-middle">{{ $invitation->date->format('l, d F Y') }}</span>
          </div>
        </div>
        <div class="d-flex justify-content-center mb-2">
          <div>
            <img src="{{ asset('templates/tema-2/images/icon/clock.png') }}" class="mr-2" alt="" />
            <span class="align-middle">{{ $invitation->time }}</span>
          </div>
        </div>
        <div class="d-flex justify-content-center mb-2">
          <div>
            <img src="{{ asset('templates/tema-2/images/icon/building.png') }}" class="mr-2" alt="" />
            <span class="align-middle">{{ $invitation->location }}</span>
          </div>
        </div>
        <div class="d-flex justify-content-center mb-32">
          <div class="fs-6 text-center">
            {{ $invitation->address }}
          </div>
        </div>
        <div class="row d-flex">
          <div class="col">
            <hr />
          </div>
          <div class="col col-md-auto d-flex justify-content-center dancing-text">
            &
          </div>
          <div class="col">
            <hr />
          </div>
        </div>
        <div class="d-flex justify-content-center text-gold heading-text-lg dancing-text text-center">
          Resepsi
        </div>
        <div class="d-flex justify-content-center mb-2">
          <div>
            <img src="{{ asset('templates/tema-2/images/icon/calendar.png') }}" class="mr-2" alt="" />
            <span class="align-middle">{{ $invitation->date->format('l, d F Y') }}</span>
          </div>
        </div>
        <div class="d-flex justify-content-center mb-2">
          <div>
            <img src="{{ asset('templates/tema-2/images/icon/clock.png') }}" class="mr-2" alt="" />
            <span class="align-middle">{{ $invitation->time }}</span>
          </div>
        </div>
        <div class="d-flex justify-content-center mb-2">
          <div>
            <img src="{{ asset('templates/tema-2/images/icon/building.png') }}" class="mr-2" alt="" />
            <span class="align-middle">{{ $invitation->location }}</span>
          </div>
        </div>
        <div class="d-flex justify-content-center mb-32">
          <div class="fs-6 text-center">
            {{ $invitation->address }}
          </div>
        </div>
      </div>
    </div>
    <div class="section-bg2" id="countdown">
      <div class="bg-opacity"></div>
      <div class="container content">
        <div class="d-flex justify-content-center text-gold heading-text-lg dancing-text">
          Countdown
        </div>
        <div class="d-flex justify-content-center subtitle-white mb-32">
          Hitung mundur menuju hari paling istimewa dalam hidup kami!
        </div>
        <div class="text-center space-bottom">
          <div class="container-countdown">
            <div class="card-countdown d-flex flex-column">
              <div class="d-flex justify-content-center header-countdown space-bottom" id="days">
                365
              </div>
              <div class="d-flex justify-content-center content-countdown">
                Hari
              </div>
            </div>
            <div class="card-countdown d-flex flex-column">
              <div class="d-flex justify-content-center header-countdown space-bottom" id="hours">
                24
              </div>
              <div class="d-flex justify-content-center content-countdown">
                Jam
              </div>
            </div>
            <div class="card-countdown d-flex flex-column">
              <div class="d-flex justify-content-center header-countdown space-bottom" id="minutes">
                60
              </div>
              <div class="d-flex justify-content-center content-countdown">
                Menit
              </div>
            </div>
            <div class="card-countdown d-flex flex-column">
              <div class="d-flex justify-content-center header-countdown space-bottom" id="seconds">
                60
              </div>
              <div class="d-flex justify-content-center content-countdown">
                Detik
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="section-bg2" id="lokasi">
      <div class="bg-opacity"></div>
      <div class="container content">
        <div class="d-flex justify-content-center text-gold heading-text-lg dancing-text space-bottom">
          Lokasi Acara
        </div>
        <div class="d-flex justify-content-center space-bottom">
          <div class="container-map d-flex justify-content-center">
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15812.313170412324!2d110.4087306!3d-7.7815236!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a59ef2e577697%3A0x47fac60081fb7e01!2sEastparc%20Hotel%20Yogyakarta!5e0!3m2!1sid!2sid!4v1707550520465!5m2!1sid!2sid"
              id="googleMap" class="content-google-map" allowfullscreen="" loading="lazy"
              referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </div>
        <div class="d-flex justify-content-center text-gold heading-text-small dancing-text text-center">
          {{ $invitation->location }}
        </div>
        <div class="d-flex justify-content-center space-bottom">
          <div class="text-normal text-center">
            {{ $invitation->address }}
          </div>
        </div>
        <div class="d-flex justify-content-center space-bottom">
          <button type="button" class="btn-gold">Open Maps Location</button>
        </div>
      </div>
    </div>
    <div class="section-bg3" id="galeri">
      <div class="container">
        <div class="d-flex justify-content-center text-gold heading-text-lg dancing-text mb-4">
          Galeri
        </div>
        <div class="d-flex justify-content-center space-bottom">
          <div class="text-normal text-center">
            Momen bermakna yang kami abadikan, merayakan kebersamaan yang tak
            terlupakan
          </div>
        </div>
        <div class="d-flex justify-content-center">
          <div class="container-galeri d-flex justify-content-center">
            <div class="row gallery">
              <div class="col-sm-6 col-md-4 col-lg-3">
                <a href="{{ asset('templates/tema-2/images/galeri/galeri_1.png') }}">
                  <img class="img-fluid" src="{{ asset('templates/tema-2/images/galeri/galeri_1.png') }}" />
                </a>
              </div>
              <div class="col-sm-6 col-md-4 col-lg-3">
                <a href="{{ asset('templates/tema-2/images/galeri/galeri_2.png') }}">
                  <img class="img-fluid" src="{{ asset('templates/tema-2/images/galeri/galeri_2.png') }}" />
                </a>
              </div>
              <div class="col-sm-6 col-md-4 col-lg-3">
                <a href="{{ asset('templates/tema-2/images/galeri/galeri_3.png') }}">
                  <img class="img-fluid" src="{{ asset('templates/tema-2/images/galeri/galeri_3.png') }}" />
                </a>
              </div>
              <div class="col-sm-6 col-md-4 col-lg-3">
                <a href="{{ asset('templates/tema-2/images/galeri/galeri_4.png') }}">
                  <img class="img-fluid" src="{{ asset('templates/tema-2/images/galeri/galeri_4.png') }}" />
                </a>
              </div>
              <div class="col-sm-6 col-md-4 col-lg-3">
                <a href="{{ asset('templates/tema-2/images/galeri/galeri_5.png') }}">
                  <img class="img-fluid" src="{{ asset('templates/tema-2/images/galeri/galeri_5.png') }}" />
                </a>
              </div>
              <div class="col-sm-6 col-md-4 col-lg-3">
                <a href="{{ asset('templates/tema-2/images/galeri/galeri_6.png') }}">
                  <img class="img-fluid" src="{{ asset('templates/tema-2/images/galeri/galeri_6.png') }}" />
                </a>
              </div>
              <div class="col-sm-6 col-md-4 col-lg-3">
                <a href="{{ asset('templates/tema-2/images/galeri/galeri_1.png') }}">
                  <img class="img-fluid" src="{{ asset('templates/tema-2/images/galeri/galeri_1.png') }}" />
                </a>
              </div>
              <div class="col-sm-6 col-md-4 col-lg-3">
                <a href="{{ asset('templates/tema-2/images/galeri/galeri_2.png') }}">
                  <img class="img-fluid" src="{{ asset('templates/tema-2/images/galeri/galeri_2.png') }}" />
                </a>
              </div>
              <div class="col-sm-6 col-md-4 col-lg-3">
                <a href="{{ asset('templates/tema-2/images/galeri/galeri_3.png') }}">
                  <img class="img-fluid" src="{{ asset('templates/tema-2/images/galeri/galeri_3.png') }}" />
                </a>
              </div>
              <div class="col-sm-6 col-md-4 col-lg-3">
                <a href="{{ asset('templates/tema-2/images/galeri/galeri_4.png') }}">
                  <img class="img-fluid" src="{{ asset('templates/tema-2/images/galeri/galeri_4.png') }}" />
                </a>
              </div>
              <div class="col-sm-6 col-md-4 col-lg-3">
                <a href="{{ asset('templates/tema-2/images/galeri/galeri_5.png') }}">
                  <img class="img-fluid" src="{{ asset('templates/tema-2/images/galeri/galeri_5.png') }}" />
                </a>
              </div>
              <div class="col-sm-6 col-md-4 col-lg-3">
                <a href="{{ asset('templates/tema-2/images/galeri/galeri_6.png') }}">
                  <img class="img-fluid" src="{{ asset('templates/tema-2/images/galeri/galeri_6.png') }}" />
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="d-flex justify-content-center text-gold heading-text-lg dancing-text mt-100">
          Video Kami
        </div>
        <div class="d-flex justify-content-center space-bottom">
          <div class="container-video d-flex justify-content-center">
            <iframe class="frame-video" src="https://www.youtube.com/embed/3hyVyhstJ7I" title="YouTube video player"
              frameborder="0"
              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
              allowfullscreen></iframe>
          </div>
        </div>
      </div>
    </div>

    <div class="section-bg4" id="kisah">
      <div class="bg-opacity"></div>
      <div class="container content">
        <div class="d-flex justify-content-center text-gold heading-text-lg dancing-text mb-4 text-center">
          Kisah Cinta Kami
        </div>
        <div class="d-flex justify-content-center mb-4">
          <div class="text-normal text-center">
            Sekilas perjalanan cinta kami sampai ke titik pernikahan
          </div>
        </div>
        <div class="d-flex justify-content-center space-bottom">
          <div class="container-story">
            <div class="row">
              <div class="col-12 col-sm-3">
                <div class="d-flex flex-column justify-content-center align-items-center">
                  <img src="{{ asset('templates/tema-2/images/galeri/1.png') }}" alt=""
                    style="width: 100%; aspect-ratio: 1/1; object-fit: cover" />
                  <center>
                    <div class="vl"></div>
                  </center>
                </div>
              </div>
              <div class="col-12 col-sm-9 d-flex flex-column justify-content-center align-items-start">
                <div class="dancing-text text-color-main heading-text-small mb-2">
                  Kenalan
                </div>
                <p class="text-normal">
                  Di sekolah yang penuh semangat, kami bertemu di lorong yang
                  ramai. Pertemuan kebetulan itu terjadi saat kami ditempatkan
                  dalam satu kelompok untuk proyek sekolah. Senyuman Siti
                  padaku menciptakan kecocokan yang tak terduga. Dari situlah,
                  benih persahabatan mereka tumbuh di antara buku-buku dan bel
                  kelas, menambah warna baru pada hari-hari mereka di sekolah.
                </p>
              </div>
              <div class="col-12 col-sm-3">
                <div class="d-flex flex-column justify-content-center align-items-center">
                  <img src="{{ asset('templates/tema-2/images/galeri/2.png') }}" alt=""
                    style="width: 100%; aspect-ratio: 1/1; object-fit: cover" />
                  <center>
                    <div class="vl"></div>
                  </center>
                </div>
              </div>
              <div class="col-12 col-sm-9 d-flex flex-column justify-content-center align-items-start">
                <div class="dancing-text text-color-main heading-text-small mb-2">
                  Berpacaran
                </div>
                <p class="text-normal">
                  Dalam memori sekolah yang penuh cerita, kebersamaan di
                  antara kami tumbuh menjadi ikatan yang kuat. Munculnya
                  keberanian membawa kami pada keputusan untuk memperdalam
                  hubungan. Kami memilih berbagi waktu bersama, menjalani
                  momen indah di sekolah sebagai bagian dari kisah cinta kami.
                </p>
              </div>
              <div class="col-12 col-sm-3">
                <div class="d-flex flex-column justify-content-center align-items-center">
                  <img src="{{ asset('templates/tema-2/images/galeri/3.png') }}" alt=""
                    style="width: 100%; aspect-ratio: 1/1; object-fit: cover" />
                </div>
              </div>
              <div class="col-12 col-sm-9 d-flex flex-column justify-content-center align-items-start">
                <div class="dancing-text text-color-main heading-text-small mb-2">
                  Menikah
                </div>
                <p class="text-normal">
                  Dalam perjalanan hidup yang penuh cerita, kami tumbuh
                  bersama melalui berbagai momen. Keinginan untuk melangkah
                  lebih jauh tumbuh begitu kuat, dan dengan penuh keyakinan,
                  kami memutuskan untuk menikah. Ini adalah langkah besar
                  menuju kehidupan bersama, diisi dengan cinta dan harapan.
                  Semoga perjalanan ini membawa berkah dan kebahagiaan dalam
                  pelukan-Nya.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="section-bg5" id="hadiah">
      <div class="container content">
        <div class="d-flex justify-content-center text-gold heading-text-lg dancing-text mb-4">
          Hadiah
        </div>
        <div class="d-flex justify-content-center mb-32">
          <div class="text-normal text-center">
            Ungkapkan kasih sayang dan doa terbaik pada momen pernikahan
            mereka dengan sentuhan elegan dan keindahan yang abadi.
          </div>
        </div>
        <div class="text-center space-bottom mt-8">
          <div class="row">
            <div class="col-md-12">
              <div class="row row-gift g-5">
                <div class="col-md-4 col-gift">
                  <div class="card-gift d-flex flex-column">
                    <div class="d-flex justify-content-center">
                      <img src="{{ asset('templates/tema-2/images/gift/vector.png') }}" class="image-gift"
                        alt="" />
                    </div>

                    <div class="d-flex justify-content-center text-md mb-4">
                      Alamat Pengiriman
                    </div>
                    <div class="d-flex justify-content-center text-normal mb-4" id="salin1">
                      {{ $invitation->address }}
                    </div>
                    <div class="d-flex justify-content-center text-md text-gold mt-auto"
                      onclick="copyToClipboard('#salin1')" style="cursor: pointer">
                      <img src="{{ asset('templates/tema-2/images/icon/icon_copy.png') }}" class="icon-text" />
                      Salin
                    </div>
                  </div>
                </div>
                <div class="col-md-4 col-gift">
                  <div class="card-gift d-flex flex-column">
                    <div class="d-flex justify-content-center">
                      <img src="{{ asset('templates/tema-2/images/gift/mandiri.png') }}" class="image-gift"
                        style="width: 80%" alt="" />
                    </div>
                    <div class="d-flex justify-content-center text-md mb-4">
                      Hari-H
                    </div>
                    <div class="d-flex justify-content-center text-normal mb-4" id="salin2">
                      54332 4567 778990
                    </div>
                    <div class="d-flex justify-content-center text-md text-gold mt-auto"
                      onclick="copyToClipboard('#salin2')" style="cursor: pointer">
                      <img src="{{ asset('templates/tema-2/images/icon/icon_copy.png') }}" class="icon-text" />
                      Salin
                    </div>
                  </div>
                </div>
                <div class="col-md-4 col-gift">
                  <div class="card-gift d-flex flex-column">
                    <div class="d-flex justify-content-center">
                      <img src="{{ asset('templates/tema-2/images/gift/bni.png') }}" class="image-gift"
                        style="width: 80%" alt="" />
                    </div>
                    <div class="d-flex justify-content-center text-md mb-4">
                      Hari-H
                    </div>
                    <div class="d-flex justify-content-center text-normal mb-4" id="salin3">
                      54332 4567 778990
                    </div>
                    <div class="d-flex justify-content-center text-md text-gold mt-auto"
                      onclick="copyToClipboard('#salin3')" style="cursor: pointer">
                      <img src="{{ asset('templates/tema-2/images/icon/icon_copy.png') }}" class="icon-text" />
                      Salin
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="section-bg5" id="ucapan">
      <div class="container content">
        <div class="d-flex justify-content-center text-gold heading-text-lg dancing-text mb-4">
          Ucapan
        </div>
        <div class="d-flex justify-content-center mb-32">
          <div class="text-normal text-center">
            Pesan dan harapan dari anda sangat berharga, doa terindah anda
            mengiringi perjalanan kebahagiaan kami
          </div>
        </div>
        <div class="space-bottom mt-8">
          <div class="row row-saying">
            <div class="col-md-6 mb-2">
              <div class="card card-saying h-100">
                <div class="card-body m-2">
                  <div class="row">
                    <div class="col-md-12 mb-4">
                      <label for="nama" class="form-label text-normal">Nama</label>
                      <input type="text" class="form-control form-control-lg form-disabled"
                        placeholder="Handoyo With Partner" disabled />
                    </div>
                    <div class="col-md-12 mb-4">
                      <label for="kehadiran" class="form-label text-normal">Kehadiran</label>
                      <select class="form-select form-select-lg" aria-label="Default select example">
                        <option selected>Pilih Kehadiran</option>
                        <option value="hadir">Hadir</option>
                        <option value="belum">Belum pasti</option>
                        <option value="tidak hadir">Tidak Hadir</option>
                      </select>
                    </div>
                    <div class="col-md-12">
                      <label for="pesan" class="form-label text-normal">Pesan</label>
                      <textarea class="form-control form-control-new" id="textarea-pesan" rows="8"
                        placeholder="Selamat ya semoga.."></textarea>
                    </div>
                  </div>
                </div>
                <div class="card-footer">
                  <div class="row">
                    <div class="col-md-12 mt-2 mb-2">
                      <button type="submit" class="btn-gold-full-width text-sm">
                        Kirim Pesan
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 mb-2">
              <div class="card card-saying h-100">
                <div class="card-header">
                  <div class="text-gold heading-text-small dancing-text m-2">
                    Doa & Harapan Dari Tamu Undangan
                  </div>
                </div>
                <div class="card-body m-2">
                  <div class="comment-widgets">
                    <div class="p-2 mb-4">
                      <div class="d-flex flex-row user-info">
                        <div id="profileImage1" class="profileImage"></div>
                        <div class="d-flex flex-column justify-content-start ml-10px">
                          <div>
                            <span class="font-weight-bold name text-sm" id="firstName">Karina</span>
                            <span class="font-weight-bold name text-sm" id="lastName">Aulia</span>
                          </div>
                          <div>
                            <span class="date">1 menit lalu</span><span
                              class="badge bg-success ml-10px">Hadir</span>
                          </div>
                        </div>
                      </div>
                      <div class="mt-4">
                        <p class="text-normal">
                          Lorem ipsum dolor sit amet, consectetur adipiscing
                          elit, sed do eiusmod tempor incididunt ut labore et
                          dolore magna aliqua. Ut enim ad minim veniam, quis
                          nostrud exercitation ullamco laboris nisi ut aliquip
                          ex ea commodo consequat.
                        </p>
                      </div>
                    </div>
                    <div class="p-2 mb-4">
                      <div class="d-flex flex-row user-info">
                        <div id="profileImage2" class="profileImage"></div>
                        <div class="d-flex flex-column justify-content-start ml-10px">
                          <div>
                            <span class="font-weight-bold name text-sm" id="firstName">Karina</span>
                            <span class="font-weight-bold name text-sm" id="lastName">Aulia</span>
                          </div>
                          <div>
                            <span class="date">1 menit lalu</span><span class="badge bg-warning ml-10px">Belum
                              Pasti</span>
                          </div>
                        </div>
                      </div>
                      <div class="mt-4">
                        <p class="text-normal">
                          Lorem ipsum dolor sit amet, consectetur adipiscing
                          elit, sed do eiusmod tempor incididunt ut labore et
                          dolore magna aliqua. Ut enim ad minim veniam, quis
                          nostrud exercitation ullamco laboris nisi ut aliquip
                          ex ea commodo consequat.
                        </p>
                      </div>
                    </div>
                    <div class="p-2 mb-4">
                      <div class="d-flex flex-row user-info">
                        <div id="profileImage3" class="profileImage"></div>
                        <div class="d-flex flex-column justify-content-start ml-10px">
                          <div>
                            <span class="font-weight-bold name text-sm" id="firstName">Karina</span>
                            <span class="font-weight-bold name text-sm" id="lastName">Aulia</span>
                          </div>
                          <div>
                            <span class="date">1 menit lalu</span><span class="badge bg-danger ml-10px">Tidak
                              Hadir</span>
                          </div>
                        </div>
                      </div>
                      <div class="mt-4">
                        <p class="text-normal">
                          Lorem ipsum dolor sit amet, consectetur adipiscing
                          elit, sed do eiusmod tempor incididunt ut labore et
                          dolore magna aliqua. Ut enim ad minim veniam, quis
                          nostrud exercitation ullamco laboris nisi ut aliquip
                          ex ea commodo consequat.
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="section-footer" id="ucapan">
      <div class="d-flex justify-content-center">
        <img src="{{ asset('templates/tema-2/images/background/footer-6.svg') }}" alt="" />
      </div>
      <div class="d-flex justify-content-center">
        Copyright &copy;
        <script>
          document.write(new Date().getFullYear());
        </script>
        by Hari-H
      </div>
    </div>
  </div>

  <script src="{{ asset('dist/js/jquery.min.js') }}"></script>
  <script src="{{ asset('dist/js/jquery.toast.min.js') }}"></script>
  <script src="{{ asset('dist/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('dist/js/baguette-box.min.js') }}"></script>

  <script>
    baguetteBox.run(".gallery", {
      animation: "slideIn",
    });

    $(document).ready(function() {
      var firstName = $("#firstName").text();
      var lastName = $("#lastName").text();
      var intials =
        $("#firstName").text().charAt(0) + $("#lastName").text().charAt(0);
      var profileImage = $("#profileImage1").text(intials);
      var profileImage = $("#profileImage2").text(intials);
      var profileImage = $("#profileImage3").text(intials);
    });

    $(".pause-button").click(function(e) {
      $(".play-button").removeClass("hidden");
      $(".pause-button").addClass("hidden");
      document.getElementById("music").pause();
    });
    $(".play-button").click(function(e) {
      $(".pause-button").removeClass("hidden");
      $(".play-button").addClass("hidden");
      document.getElementById("music").play();
    });
    $("ul li a").click(function(e) {
      $("ul li.active").removeClass("active");
      $(".img-default").removeClass("hidden");
      $(".img-active").addClass("hidden");

      var $parent = $(this).parent();
      const text = String(e.currentTarget.hash).split("#")[1].toLowerCase();
      const tagGold = `img-${text}_gold`;
      const tag = `img-${text}`;
      var gold = document.getElementById(tagGold);
      var test = document.getElementById(tag);
      $(gold).removeClass("hidden");
      $(test).addClass("hidden");
      $parent.addClass("active");
    });
    $("#btn-invitation").click(function(e) {
      document.getElementById("music").play();
      var start = document.getElementById("display-start");
      var invitation = document.getElementById("display-invitation");
      if (start.style.display === "none") {
        $(start).slideDown("slow");
      } else {
        $(start).slideUp("slow");
      }
      if (invitation.style.display === "none") {
        $(invitation).fadeIn("slow");
      } else {
        $(invitation).fadeOut("slow");
      }
    });
  </script>

  <script>
    var countDownDate = new Date("{{ $invitation->date }}").getTime();

    var x = setInterval(function() {
      var now = new Date().getTime();
      var distance = countDownDate - now;

      var days = Math.floor(distance / (1000 * 60 * 60 * 24));
      var hours = Math.floor(
        (distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)
      );
      var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
      var seconds = Math.floor((distance % (1000 * 60)) / 1000);

      document.getElementById("days").innerHTML = days;
      document.getElementById("hours").innerHTML = hours;
      document.getElementById("minutes").innerHTML = minutes;
      document.getElementById("seconds").innerHTML = seconds;

      if (distance < 0) {
        clearInterval(x);
        document.getElementById("demo").innerHTML = "EXPIRED";
      }
    }, 1000);
  </script>

  <script>
    function copyToClipboard(element) {
      var $temp = $("<input>");
      $("body").append($temp);
      $temp.val($(element).text().trim()).select();
      document.execCommand("copy");
      $temp.remove();

      $.toast({
        heading: "Copy Text",
        text: "text successfully copied",
        position: "bottom-right",
        stack: false,
      });
    }
  </script>
</body>

</html>
