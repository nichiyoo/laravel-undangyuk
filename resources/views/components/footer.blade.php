@php
  use App\Lib\Helper;

  $menus = array_map(
      function ($item) {
          return Helper::to_object($item);
      },
      [
          [
              'submenu' => [
                  [
                      'name' => 'Langkah Pembuatan',
                      'href' => route('landing') . '#step',
                  ],
                  [
                      'name' => 'Fitur Kami',
                      'href' => route('landing') . '#feature',
                  ],
                  [
                      'name' => 'Syarat Ketentuan',
                      'href' => route('landing') . '#syarat-ketentuan',
                  ],
              ],
          ],
          [
              'submenu' => [
                  [
                      'name' => 'Pilihan Tema',
                      'href' => route('landing') . '#theme',
                  ],
                  [
                      'name' => 'Paket Harga',
                      'href' => route('landing') . '#price',
                  ],
              ],
          ],
      ],
  );
@endphp


<footer class="section-footer">
  <div class="container">
    <div class="row footer-top">
      <div class="col-12 col-lg-8">
        <img src="{{ asset('logo-white.svg') }}" class="logo-horizontal-footer" alt="">
        <div>
          <ul>
            <li>
              <a href="https://wa.me/+6281234567890" target="_blank">
                <img src="{{ asset('images/icons/whatsapp.svg') }}" class="icon-footer" alt="">
                +62 812-3456-7890
              </a>
            </li>
            <li>
              <a href="mailto:info@hari-h.com" target="_blank">
                <img src="{{ asset('images/icons/email.svg') }}" class="icon-footer" alt="">
                techdawn@gmail.com
              </a>
            </li>
          </ul>
        </div>
      </div>
      <div class="col-12 col-lg-4">
        <span class="footer-title">
          Menu
        </span>
        <div class="row">
          @foreach ($menus as $menu)
            <div class="col-12 col-lg-6">
              <ul>
                @foreach ($menu->submenu as $submenu)
                  <li>
                    <a href="{{ $submenu->href }}">
                      {{ $submenu->name }}
                    </a>
                  </li>
                @endforeach
              </ul>
            </div>
          @endforeach
        </div>
      </div>
    </div>
    <div class="row footer-bottom">
      <div class="col-12 col-lg-6 footer-text">
        <div class="d-flex justify-content-center align-items-center gap-4">
          <x-translate />
          <span>PT. TechDawn © 2024 All Rights Reserved</span>
        </div>
      </div>

      <div class="col-12 col-lg-6 footer-linktree">
        <a href="https://wa.me/+6281234567890" target="_blank">
          <img src="{{ asset('images/icons/email.svg') }}" alt="" class="image-linktree">
        </a>
        <a href="mailto:info@hari-h.com" target="_blank">
          <img src="{{ asset('images/icons/whatsapp.svg') }}" alt="" class="image-linktree">
        </a>
      </div>
    </div>
  </div>
</footer>
