<nav class="navbar navbar-expand-lg navbar-light bg-body-tertiary sticky-top shadow-sm">
  <div class="container-fluid">

    <a class="navbar-brand d-flex align-items-center" href="app">
      <img src="{{ asset('img/cart.png') }}" alt="ShopHub Logo" width="50" height="50" class="me-2">
      <span class="fw-bold fs-4">ShopHub</span>
    </a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">

      <form class="d-flex mx-auto" role="search">
        <input class="form-control me-2" type="search" placeholder="Search products..." aria-label="Search" style="width: 250px;">
        <button class="btn btn-outline-info" type="submit">Search</button>
      </form>

      <ul class="navbar-nav ms-auto mb-2 mb-lg-0 align-items-center">

        {{-- PRODUCTS PAGE --}}
        <li class="nav-item">
          <a class="nav-link" href="#">Products</a>
        </li>

{{-- CART ICON --}}
<li class="nav-item position-relative">
  <a class="nav-link" href="#">
    <i class="bi bi-cart fs-5"></i>
    <span id="cartBadge" class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-primary px-2 py-1">
    </span>
  </a>
</li>


{{-- USER AUTH MENU --}}
@auth
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle fw-bold" href="#" id="userDropdown" role="button" data-bs-toggle="dropdown">
            <i class="bi bi-person-circle me-1"></i>

        </a>

        <ul class="dropdown-menu dropdown-menu-end">
            <li>
                <a class="dropdown-item" href="#">
                    <i class="bi bi-person me-2"></i><small class="text-muted">{{ Auth::user()->name }}</small> {{-- ← Name of logged in user --}}
                </a>
            </li>

            <li><hr class="dropdown-divider"></li>

            <li>
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button class="dropdown-item text-danger">
                        <i class="bi bi-box-arrow-right me-2"></i>Logout
                    </button>
                </form>
            </li>

        </ul>
    </li>
    @else
    <li class="nav-item">
        <a class="nav-link" href="{{ route('login') }}">Login</a>
    </li>
@endauth


        {{-- THEME SWITCHER --}}
        <li class="nav-item dropdown ms-3">
          <a class="nav-link dropdown-toggle" href="#" id="themeDropdown" role="button" data-bs-toggle="dropdown">
            <i id="themeIcon" class="bi bi-sun-fill fs-5"></i>
          </a>

          <ul class="dropdown-menu dropdown-menu-end">
            <li>
              <button class="dropdown-item" data-theme="light">
                <i class="bi bi-sun-fill me-2"></i>Light
              </button>
            </li>

            <li>
              <button class="dropdown-item" data-theme="dark">
                <i class="bi bi-moon-fill me-2"></i>Dark
              </button>
            </li>
          </ul>
        </li>

      </ul>

    </div>
  </div>
</nav>
