<div id="bannerCarousel" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#bannerCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#bannerCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#bannerCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>

  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{ asset('images/banner1.jpg') }}" class="d-block w-100" alt="Banner 1">
      <div class="carousel-caption d-none d-md-block">
        <h5>Título do Banner 1</h5>
        <p>Descrição opcional.</p>
      </div>
    </div>

    <div class="carousel-item">
      <img src="{{ asset('images/banner2.jpg') }}" class="d-block w-100" alt="Banner 2">
      <div class="carousel-caption d-none d-md-block">
        <h5>Título do Banner 2</h5>
        <p>Descrição opcional.</p>
      </div>
    </div>

    <div class="carousel-item">
      <img src="{{ asset('images/banner3.jpg') }}" class="d-block w-100" alt="Banner 3">
      <div class="carousel-caption d-none d-md-block">
        <h5>Título do Banner 3</h5>
        <p>Descrição opcional.</p>
      </div>
    </div>
  </div>

  <button class="carousel-control-prev" type="button" data-bs-target="#bannerCarousel" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Anterior</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#bannerCarousel" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Próximo</span>
  </button>
</div>