@props(['href' => '#', 'name' => '', 'image' => ''])

<div class="col-12 col-md-6 col-lg-4 margin-card-category">
  <div class="card card-hover-floating h-100">
    <a href="{{ $href }}" target="_blank">
      <img src="{{ $image }}" class="card-img-top" alt="{{ $name }}">
    </a>
    <div class="card-body">
      <div class="d-flex justify-content-between align-items-center">
        <h6>{{ $name }}</h6>
        <a href="{{ $href }}" target="_blank" class="link-primary-nav">
          Lihat Tema
        </a>
      </div>
    </div>
  </div>
</div>
