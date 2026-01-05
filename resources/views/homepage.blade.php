<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ShopHub</title>

  <link rel="icon" type="image/png" href="{{ asset('img/cart.png') }}" sizes="32x32">
  <link rel="apple-touch-icon" href="{{ asset('img/cart.png') }}">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body class="bg-light text-dark">

  {{-- NAVBAR --}}
   <nav class="navbar navbar-expand-lg navbar-light bg-body-tertiary sticky-top shadow-sm">
    <div class="container-fluid">

      <a class="navbar-brand d-flex align-items-center" href="/">
        <img src="{{ asset('img/cart.png') }}" alt="ShopHub Logo" width="50" height="50" class="me-2">
        <span class="fw-bold fs-4">ShopHub</span>
      </a>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">

{{-- SEARCH BUTTON --}}
    <form class="d-flex mx-auto" role="search">
  <div class="input-group" style="width: 250px;">
    <span class="input-group-text bg-white border-end-0">
      <i class="bi bi-search"></i>
    </span>
    <input id="searchInput" type="search" class="form-control border-start-0" placeholder="Search products..." aria-label="Search">
  </div>
</form>




        <ul class="navbar-nav ms-auto mb-2 mb-lg-0 align-items-center">

          <li class="nav-item">
            <a class="nav-link" href="#">Products</a>
          </li>

       {{-- LOGIN PAGE --}}
<li class="nav-item">
    <a class="nav-link btn btn-outline-primary fw-bold d-flex align-items-center px-3 py-2 rounded"
       href="{{ route('login') }}">
        <i class="bi bi-box-arrow-in-right me-2"></i> Login
    </a>
</li>


          {{-- THEME SWITCHER --}}
          <li class="nav-item dropdown ms-3">
            <a class="nav-link dropdown-toggle" href="#" id="themeDropdown" role="button" data-bs-toggle="dropdown">
              <i id="themeIcon" class="bi bi-sun-fill fs-5"></i>
            </a>

            <ul class="dropdown-menu dropdown-menu-end">
              <li><button class="dropdown-item" data-theme="light"><i class="bi bi-sun-fill me-2"></i>Light</button></li>
              <li><button class="dropdown-item" data-theme="dark"><i class="bi bi-moon-fill me-2"></i>Dark</button></li>
            </ul>
          </li>

        </ul>

      </div>
    </div>
  </nav>

  {{-- CAROUSEL --}}
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

  {{-- FEATURED PRODUCTS --}}
 <div class="container my-5">

 <div class="d-flex justify-content-between align-items-center mb-2">
    <h3 class="fw-bold mb-0">Featured Products</h3>
    <a href="{{ route('allproducts') }}" class="fw-bold text-primary text-decoration-none">View All →</a>
</div>
<p class="text-muted mb-4">Handpicked items just for you</p>


    <div class="row g-4">

    {{-- Product 1 --}}
<div class="col-md-3 product-card" data-name="Wireless Headphones">
  <div class="card shadow-sm border-0 rounded-4 overflow-hidden">
    <div class="position-relative">
      <img src="{{ asset('img/products/headphone.jpg') }}" class="card-img-top">
      <span class="badge bg-primary position-absolute top-0 end-0 m-3 rounded-3 px-3 py-2">Electronics</span>
    </div>
    <div class="card-body">
      <h5 class="card-title fw-bold">Wireless Headphones</h5>
      <p class="card-text text-muted">Premium noise-cancelling wireless headphones...</p>
      <div class="mb-2"><span class="text-warning">★</span> <b>4.5</b> <span class="text-muted">(128)</span></div>
    </div>
  </div>
</div>

{{-- Product 2 --}}
<div class="col-md-3 product-card" data-name="Smart Watch">
  <div class="card shadow-sm border-0 rounded-4 overflow-hidden">
    <div class="position-relative">
      <img src="{{ asset('img/products/watch.jpg') }}" class="card-img-top">
      <span class="badge bg-primary position-absolute top-0 end-0 m-3 rounded-3 px-3 py-2">Electronics</span>
    </div>
    <div class="card-body">
      <h5 class="card-title fw-bold">Smart Watch</h5>
      <p class="card-text text-muted">Advanced fitness tracking smartwatch...</p>
      <div class="mb-2"><span class="text-warning">★</span> <b>4.8</b> <span class="text-muted">(256)</span></div>
    </div>
  </div>
</div>

{{-- Product 3 --}}
<div class="col-md-3 product-card" data-name="Backpack">
  <div class="card shadow-sm border-0 rounded-4 overflow-hidden">
    <div class="position-relative">
      <img src="{{ asset('img/products/backpack.jpg') }}" class="card-img-top">
      <span class="badge bg-info position-absolute top-0 end-0 m-3 rounded-3 px-3 py-2">Fashion</span>
    </div>
    <div class="card-body">
      <h5 class="card-title fw-bold">Backpack</h5>
      <p class="card-text text-muted">Stylish and durable backpack...</p>
      <div class="mb-2"><span class="text-warning">★</span> <b>4.3</b> <span class="text-muted">(89)</span></div>
    </div>
  </div>
</div>

{{-- Product 4 --}}
<div class="col-md-3 product-card" data-name="Running Shoes">
  <div class="card shadow-sm border-0 rounded-4 overflow-hidden">
    <div class="position-relative">
      <img src="{{ asset('img/products/shoes.jpg') }}" class="card-img-top">
      <span class="badge bg-success position-absolute top-0 end-0 m-3 rounded-3 px-3 py-2">Sports</span>
    </div>
    <div class="card-body">
      <h5 class="card-title fw-bold">Running Shoes</h5>
      <p class="card-text text-muted">Lightweight running shoes...</p>
      <div class="mb-2"><span class="text-warning">★</span> <b>4.6</b> <span class="text-muted">(342)</span></div>
    </div>
  </div>
</div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
  <script src="{{ asset('js/style.js') }}"></script>


</body>

</html>
