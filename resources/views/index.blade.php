<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>E-Shop</title>

  <link rel="icon" type="image/png" href="{{ asset('img/cart.png') }}" sizes="32x32">
  <link rel="apple-touch-icon" href="{{ asset('img/cart.png') }}" >

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <style>

    .carousel-item img {
      height: 450px;
      object-fit: cover;
    }

    @media (max-width: 768px) {
      .carousel-item img {
        height: 250px;
      }
    }
  </style>
</head>
<body class="bg-light text-dark">


<nav class="navbar navbar-expand-lg navbar-light bg-body-tertiary">
  <div class="container-fluid">

    <a class="navbar-brand d-flex align-items-center" href="#">
      <img src="{{ asset('img/cart.png') }}" alt="E-shop Logo" width="50" height="50" class="me-2">
    </a>

    <button class="navbar-toggler" type="button" data-b s-toggle="collapse" data-bs-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <form class="d-flex me-3" role="search">
        <input class="form-control me-2" type="search" placeholder="Search products..." aria-label="Search" style="width: 250px;">
        <button class="btn btn-outline-info" type="submit">Search</button>
      </form>


      <ul class="navbar-nav ms-auto mb-2 mb-lg-0 align-items-center">
        <li class="nav-item"><a class="nav-link" href="#">Shop</a></li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Categories
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Electronics</a></li>
            <li><a class="dropdown-item" href="#">Clothing</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">More</a></li>
          </ul>
        </li>
        <li class="nav-item">
  <a class="nav-link" href="#">
    <i class="bi bi-cart fs-5"></i>
  </a>
</li>

        <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Login</a></li>


        <li class="nav-item dropdown ms-3">
          <a class="nav-link dropdown-toggle" href="#" id="themeDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <i id="themeIcon" class="bi bi-sun-fill fs-5"></i>
          </a>
          <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="themeDropdown">
            <li><button class="dropdown-item" data-theme="light"><i class="bi bi-sun-fill me-2"></i>Light</button></li>
            <li><button class="dropdown-item" data-theme="dark"><i class="bi bi-moon-fill me-2"></i>Dark</button></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>


<div id="carouselExampleDark" class="carousel carousel-white slide mt-3" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="10000">
      <img src="{{ asset('img/headset.jpg') }}" class="d-block w-100" alt="First Slide">
      <div class="carousel-caption d-none d-md-block">
        <h5>HEADSET</h5>
        <p><i>HEAR EVERY DETAIL. FELL EVERY BEAT.</i></p>
      </div>
    </div>
    <div class="carousel-item" data-bs-interval="2000">
      <img src="{{ asset('img/bag.jpg') }}" class="d-block w-100" alt="Second Slide">
      <div class="carousel-caption d-none d-md-block">
        <h5>SHOULDER BAG</h5>
        <p><i>STYLISH AND SPACIOUS.</i></p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="{{ asset('img/jacket.jpg') }}" class="d-block w-100" alt="Third Slide">
      <div class="carousel-caption d-none d-md-block">
        <h5>JACKET</h5>
        <p><i>WARM AND COZY.</i></p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>


<script>
  const themeItems = document.querySelectorAll('.dropdown-item[data-theme]');
  const body = document.body;
  const navbar = document.querySelector('.navbar');
  const themeIcon = document.getElementById('themeIcon');


  const savedTheme = localStorage.getItem('theme') || 'light';
  applyTheme(savedTheme);

  themeItems.forEach(item => {
    item.addEventListener('click', (e) => {
      e.preventDefault();
      const selectedTheme = item.getAttribute('data-theme');
      applyTheme(selectedTheme);
      localStorage.setItem('theme', selectedTheme);
    });
  });

  function applyTheme(theme) {
    if(theme === 'dark') {
      body.classList.replace('bg-light', 'bg-dark');
      body.classList.replace('text-dark', 'text-light');
      navbar.classList.replace('navbar-light', 'navbar-dark');
      navbar.classList.replace('bg-body-tertiary', 'bg-dark');
      themeIcon.className = 'bi bi-moon-fill fs-5';
    } else {
      body.classList.replace('bg-dark', 'bg-light');
      body.classList.replace('text-light', 'text-dark');
      navbar.classList.replace('navbar-dark', 'navbar-light');
      navbar.classList.replace('bg-dark', 'bg-body-tertiary');
      themeIcon.className = 'bi bi-sun-fill fs-5';
    }
  }
</script>
</body>
</html>
