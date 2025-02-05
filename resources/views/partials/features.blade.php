@php
  use App\Lib\Helper;

  $feature = array_map(
      function ($item) {
          return Helper::to_object($item);
      },
      [
          [
              'icon' => 'fa-solid fa-pencil',
              'title' => 'Desain Kustomisasi',
              'desc' => 'Menyesuaikan dengan preferensi customer, seperti penulisan teks.',
          ],
          [
              'icon' => 'fa-solid fa-brush',
              'title' => 'Pemilihan Tema',
              'desc' =>
                  'Nikmati kemudahan dalam memilih dari beragam tema siap pakai, dapat diubah kapan saja tanpa batas.',
          ],
          [
              'icon' => 'fa-brands fa-itunes-note',
              'title' => 'Variasi Konten',
              'desc' => 'Teks, gambar, link, peta, musik, hingga video, membuat lebih menarik dan informatif.',
          ],
          [
              'icon' => 'fa-solid fa-user-group',
              'title' => 'Reservasi Tamu',
              'desc' => 'Fitur tamu memberikan ucapan, konfirmasi kehadiran, dan data terkelola dengan baik.',
          ],
          [
              'icon' => 'fa-solid fa-cart-shopping',
              'title' => 'Pembayaran',
              'desc' =>
                  'Bayar kapan saja dengan proses yang sederhana dan otomatis, didukung metode pembayaran yang lengkap.',
          ],
          [
              'icon' => 'fa-solid fa-quote-left',
              'title' => 'Story & Quotes',
              'desc' =>
                  'Jelajahi kisah dan deskripsi, menambahkan kutipan yang menginspirasi untuk para tamu undangan.',
          ],
          [
              'icon' => 'fa-solid fa-hourglass-start',
              'title' => 'Countdown',
              'desc' => 'Fitur countdown timer sebagai pengingat waktu untuk acara pernikahan Anda.',
          ],
          [
              'icon' => 'fa-solid fa-gift',
              'title' => 'Hadiah',
              'desc' => 'Kirim hadiah secara online langsung ke rekening atau alamat penerima melalui undangan Anda.',
          ],
      ],
  );
@endphp

<section class="section" id="feature">
  <div class="container">
    <div class="section-head text-center mb-5">
      <h2 class="section-title text-primary-dark">Fitur Terbaik Kami</h2>
      <p class="section-desc">
        Kami menawarkan beragam fitur unggulan untuk undangan online Anda, serta terus berinovasi untuk menyajikan
        fitur-fitur baru yang memukau.
      </p>
    </div>

    <div class="row">
      @foreach ($feature as $item)
        <div class="col-12 col-sm-6 col-lg-3 mb-4">
          <div class="feature-card text-center">
            <i class="{{ $item->icon }} ic-feature mb-3"></i>
            <h6 class="feature-title">{{ $item->title }}</h6>
            <p class="feature-desc">{{ $item->desc }}</p>
          </div>
        </div>
      @endforeach
    </div>
  </div>
</section>
