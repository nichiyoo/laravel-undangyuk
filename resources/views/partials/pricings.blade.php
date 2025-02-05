@php
  use App\Lib\Helper;

  $pricings = array_map(
      function ($item) {
          return Helper::to_object($item);
      },
      [
          [
              'name' => 'Sakinah',
              'sale' => false,
              'best' => false,
              'price' => 'FREE',
              'discounted' => '',
              'href' =>
                  'https://wa.me/6285179756268?text=Halo%2C+kak+saya+ingin+memesan+undangannya+untuk+paket+*Sakinah*.',
              'packages' => [
                  'Undangan dengan Animasi (Tanpa Foto)',
                  'Aktif 3 Hari',
                  'Request Text Bebas',
                  'Amplop Digital',
                  'Hitung Mundur',
                  'Quotes',
                  'Background Music (Bebas Request)',
                  'Google Maps',
                  'Responsive Mobile Friendly',
                  'Fitur RSVP (Konfirmasi Kehadiran Tamu)',
                  'Cerita Cinta (Timeline Text)',
              ],
          ],
          [
              'name' => 'Mawaddah',
              'sale' => true,
              'best' => false,
              'price' => '70K',
              'discounted' => '35K',
              'href' =>
                  'https://wa.me/6285179756268?text=Halo%2C+kak+saya+ingin+memesan+undangannya+untuk+paket+*Mawaddah*.',
              'packages' => [
                  'Undangan dengan Animasi (Tanpa Foto)',
                  'Aktif 3 Bulan',
                  'Request Text Bebas',
                  'Amplop Digital',
                  'Hitung Mundur',
                  'Quotes',
                  'Background Music (Bebas Request)',
                  'Google Maps',
                  'Responsive Mobile Friendly',
                  'Fitur RSVP (Konfirmasi Kehadiran Tamu)',
                  'Cerita Cinta (Timeline Text)',
              ],
          ],
          [
              'name' => 'Warahmah',
              'sale' => true,
              'best' => true,
              'price' => '70K',
              'discounted' => '35K',
              'href' =>
                  'https://wa.me/6285179756268?text=Halo%2C+kak+saya+ingin+memesan+undangannya+untuk+paket+*Warahmah*.',
              'packages' => [
                  'Undangan dengan Foto',
                  'Aktif Unlimited*',
                  'Request Text Bebas',
                  'Amplop Digital',
                  'Hitung Mundur',
                  'Quotes',
                  'Background Music (Bebas Request)',
                  'Google Maps',
                  'Responsive Mobile Friendly',
                  'Fitur RSVP (Konfirmasi Kehadiran Tamu)',
                  'Galeri Foto (Max 12 Foto)',
                  'Live Streaming (Opsional)',
                  'Embed Video (YouTube)',
                  'Cerita Cinta (Timeline Thumbnail Foto + Text)',
              ],
          ],
      ],
  );
@endphp


<section class="main section" id="price">
  <div class="container">
    <div class="row">
      <div class="col-12" style="margin-bottom: 48px">
        <div class="section-head text-center mb-5">
          <h2 class="section-title text-primary-dark">Paket Harga</h2>
          <p class="section-desc">
            Temukan paket yang sesuai dengan kebutuhan Anda dengan harga terbaik dan fitur terlengkap kami!
          </p>
        </div>
      </div>

      <div class="col-12 col-md-12 m-auto">
        <div class="row d-flex flex-row align-items-start">
          @foreach ($pricings as $pricing)
            <div class="col-12 col-lg-4 h-100 card-margin">
              @if (!$pricing->best)
                <div style="height:38px"></div>
              @endif

              <div class="card">
                @if ($pricing->best)
                  <div class="best-seller-label" translate="no">
                    <i class="fas fa-tag" style="margin-right: 8px"></i>Best Seller
                  </div>
                @endif

                <div class="card-body @if ($pricing->best) best-seller @endif">
                  <h5 class="package-name" translate="no">
                    {{ $pricing->name }}
                  </h5>

                  <div class="price-section">
                    @if ($pricing->sale)
                      <span class="package-price2 me-2" style="color:gray !important;">
                        <s>{{ $pricing->price }}</s>
                      </span>

                      <span class="package-price">
                        {{ $pricing->discounted }}
                      </span>
                    @else
                      <span class="package-price">
                        {{ $pricing->price }}
                      </span>
                    @endif
                  </div>

                  <div>
                    <a href="{{ $pricing->href }}"
                      class="@if ($pricing->best) choose-package-primary @else choose-package @endif"
                      target="_blank">
                      Pilih Paket
                    </a>
                  </div>

                  <div>
                    <ul class="package-list">
                      @foreach ($pricing->packages as $package)
                        <li>
                          <div class="d-flex align-items-start">
                            <div class="package-list-image">
                              <img src="{{ asset('check.webp') }}" alt="check">
                            </div>
                            <div class="package-list-text">
                              {{ $package }}
                            </div>
                          </div>
                        </li>
                      @endforeach
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          @endforeach
        </div>
      </div>
    </div>
  </div>
</section>
