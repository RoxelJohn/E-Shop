{{-- resources/views/layouts/app.blade.php --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'ShopHub')</title>

    <link rel="icon" type="image/png" href="{{ asset('img/cart.png') }}" sizes="32x32">
    <link rel="apple-touch-icon" href="{{ asset('img/cart.png') }}">

    {{-- Bootstrap CSS --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    {{-- Custom CSS --}}
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body class="bg-light text-dark">

    {{-- Navbar --}}
    @include('partials.navbar')

    {{-- Carousel --}}
    @include('partials.carousel')

    {{-- Products --}}
    @include('partials.products')

    {{-- Optional page-specific content --}}
    <div class="container my-5">
        @yield('content')
    </div>

    {{-- Categories --}}
    @include('partials.category')

    {{-- Scripts --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('js/style.js') }}"></script>
</body>
</html>
