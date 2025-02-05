@php
  use App\Lib\Helper;

  $steps = array_map(
      function ($item) {
          return Helper::to_object($item);
      },
      [
          [
              'name' => 'Step 1',
              'status' => 'completed',
              'text' => 'Lihat Tema Undangan Pernikahan Digital',
              'description' =>
                  'Memilih tema undangan pernikahan digital yang sesuai dengan kebutuhan dan konsep pernikahan Anda. Anda dapat memilih tema yang tersedia.',
          ],
          [
              'name' => 'Step 2',
              'status' => 'active',
              'text' => 'Masukan Informasi Mengenai Acara Anda',
              'description' =>
                  'Hubungi kami, dan kami akan mengirim formulir mengenai informasi seperti nama, tanggal, lokasi, foto, video dan informasi lain mengenai acara Anda.',
          ],
          [
              'name' => 'Step 3',
              'status' => '',
              'text' => 'Bagikan Undangan Digital Anda',
              'description' =>
                  'Setelah mengisi informasi dan melakukan pembayaran, saatnya Anda mendaftarkan tamu undangan & membagikan undangan digital anda ke keluarga, teman, saudara, dan semua tamu undangan Anda.',
          ],
      ],
  );
@endphp

<section class="section" style="background-color: #f3f4f6;" id="step">
  <div class="container">
    <div class="row">
      <div class="section-content">
        <div class="col-12 col-lg-10 m-auto">
          <div class="row">
            <div class="col-12 col-lg-8">
              <h2 class="title-step">Langkah Membuat<br>Undangan Digital</h2>

              <div>
                @foreach ($steps as $step)
                  <div class="step {{ $step->status }}">
                    <div class="v-stepper">
                      <div class="circle"></div>
                      <div class="line"></div>
                    </div>

                    <div class="content-stepper">
                      <h6 class="fw-bold">{{ $step->name }}</h6>
                      <h6>{{ $step->text }}</h6>
                      <span>
                        {{ $step->description }}
                      </span>
                    </div>
                  </div>
                @endforeach
              </div>
            </div>

            <div class="col-12 col-lg-4 d-flex align-items-center justify-content-center">
              <img src="{{ asset('images/mockup.webp') }}" alt="" style="width: 100%">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
