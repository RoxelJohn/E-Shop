    <!DOCTYPE html>
    <html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'ShopHub')</title>

    <link rel="icon" type="image/png" href="{{ asset('img/cart.png') }}" sizes="32x32">
    <link rel="apple-touch-icon" href="{{ asset('img/cart.png') }}">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    </head>

    <body class="bg-light text-dark">

    {{-- NAVBAR --}}
    @include('partials.navbar')

    {{-- CAROUSEL --}}
    @include('partials.carousel')

    {{-- PRODUCTS --}}
    @include('partials.products')


    {{-- PAGE CONTENT --}}
    <div class="container my-5">
        @yield('content')
    </div>

        {{-- CATEGORIES --}}
    @include('partials.category')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('js/style.js') }}"></script>


    </body>
    </html>
