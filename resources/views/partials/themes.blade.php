@php
  use App\Lib\Helper;

  $themes = array_map(
      function ($item) {
          return Helper::to_object($item);
      },
      [
          [
              'name' => 'Tema 1',
              'href' => 'https://tema.hari-h.com/1',
              'image' => asset('images/templates/template-1.webp'),
          ],
          [
              'name' => 'Tema 2',
              'href' => 'https://tema.hari-h.com/2',
              'image' => asset('images/templates/template-2.webp'),
          ],
          [
              'name' => 'Tema 3',
              'href' => 'https://tema.hari-h.com/3',
              'image' => asset('images/templates/template-3.webp'),
          ],
          [
              'name' => 'Tema 4',
              'href' => 'https://tema.hari-h.com/4',
              'image' => asset('images/templates/template-4.webp'),
          ],
          [
              'name' => 'Tema 5',
              'href' => 'https://tema.hari-h.com/5',
              'image' => asset('images/templates/template-5.webp'),
          ],
          [
              'name' => 'Tema 6',
              'href' => 'https://tema.hari-h.com/6',
              'image' => asset('images/templates/template-6.webp'),
          ],
      ],
  );
@endphp

<section class="section" style="background-color: #f3f4f6;" id="theme">
  <div class="container">
    <div class="row">
      <div class="section-head">
        <div class="col-12">
          <div class="section-head text-center mb-5">
            <h2 class="section-title text-primary-dark">Pilihan Tema</h2>
            <p class="section-desc">
              Pilihlah tema yang cocok dengan kepribadianmu, dari yang klasik hingga yang paling modern. Tanpa harus
              repot, tanpa harus menunggu lama, kamu bisa langsung merasakan suasana yang baru dan segar!
            </p>
          </div>
        </div>
      </div>
      <div class="section-content">
        <div class="col-12">
          <div class="row">
            @foreach ($themes as $theme)
              <x-theme-card href="{{ $theme->href }}" name="{{ $theme->name }}" image="{{ $theme->image }}" />
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
