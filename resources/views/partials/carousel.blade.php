<div id="carouselExampleDark" class="carousel carousel-white slide mt-3" data-bs-ride="carousel">

  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2"></button>
  </div>

  <div class="carousel-inner">

    <div class="carousel-item active" data-bs-interval="10000">
      <img src="{{ asset('img/headset.jpg') }}" class="d-block w-100">
      <div class="carousel-caption d-none d-md-block">
        <h5>HEADSET</h5>
        <p><i>HEAR EVERY DETAIL. FEEL EVERY BEAT.</i></p>
      </div>
    </div>

    <div class="carousel-item" data-bs-interval="2000">
      <img src="{{ asset('img/bag.jpg') }}" class="d-block w-100">
      <div class="carousel-caption d-none d-md-block">
        <h5>SHOULDER BAG</h5>
        <p><i>STYLISH AND SPACIOUS.</i></p>
      </div>
    </div>

    <div class="carousel-item">
      <img src="{{ asset('img/jacket.jpg') }}" class="d-block w-100">
      <div class="carousel-caption d-none d-md-block">
        <h5>JACKET</h5>
        <p><i>WARM AND COZY.</i></p>
      </div>
    </div>

  </div>

  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </button>

  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
  </button>

</div>
