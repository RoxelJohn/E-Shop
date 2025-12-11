@section('content')
<div class="container my-5">

    <h3 class="fw-bold mb-1">Featured Products</h3>
    <p class="text-muted mb-4">Handpicked items just for you</p>

    <div class="row g-4">

        {{-- Product Card 1 --}}
        <div class="col-md-3">
            <div class="card shadow-sm border-0 rounded-4 overflow-hidden">
                <div class="position-relative">
                    <img src="{{ asset('img/products/headphone.jpg') }}" class="card-img-top" alt="Wireless Headphones">
                    <span class="badge bg-primary position-absolute top-0 end-0 m-3 rounded-3 px-3 py-2">
                        Electronics
                    </span>
                </div>
                <div class="card-body">
                    <h5 class="card-title fw-bold">Wireless Headphones</h5>
                    <p class="card-text text-muted">
                        Premium noise-cancelling wireless headphones with 30-hour battery...
                    </p>
                    <div class="mb-2">
                        <span class="text-warning">★</span>
                        <span class="fw-bold">4.5</span>
                        <span class="text-muted">(128)</span>
                    </div>
                    <div class="fw-bold fs-5 mb-3">$299.99</div>
                    <a href="#" class="btn btn-light w-100 border rounded-3 add-to-cart-btn">🛒 Add to Cart</a>
                </div>
            </div>
        </div>

        {{-- Product Card 2 --}}
        <div class="col-md-3">
            <div class="card shadow-sm border-0 rounded-4 overflow-hidden">
                <div class="position-relative">
                    <img src="{{ asset('img/products/watch.jpg') }}" class="card-img-top" alt="Smart Watch">
                    <span class="badge bg-primary position-absolute top-0 end-0 m-3 rounded-3 px-3 py-2">
                        Electronics
                    </span>
                </div>
                <div class="card-body">
                    <h5 class="card-title fw-bold">Smart Watch</h5>
                    <p class="card-text text-muted">
                        Advanced fitness tracking smartwatch with heart rate monitor...
                    </p>
                    <div class="mb-2">
                        <span class="text-warning">★</span>
                        <span class="fw-bold">4.8</span>
                        <span class="text-muted">(256)</span>
                    </div>
                    <div class="fw-bold fs-5 mb-3">$399.99</div>
                    <a href="#" class="btn btn-light w-100 border rounded-3 add-to-cart-btn">🛒 Add to Cart</a>
                </div>
            </div>
        </div>

        {{-- Product Card 3 --}}
        <div class="col-md-3">
            <div class="card shadow-sm border-0 rounded-4 overflow-hidden">
                <div class="position-relative">
                    <img src="{{ asset('img/products/backpack.jpg') }}" class="card-img-top" alt="Designer Backpack">
                    <span class="badge bg-info position-absolute top-0 end-0 m-3 rounded-3 px-3 py-2">
                        Fashion
                    </span>
                </div>
                <div class="card-body">
                    <h5 class="card-title fw-bold">Backpack</h5>
                    <p class="card-text text-muted">
                        Stylish and durable backpack with laptop compartment...
                    </p>
                    <div class="mb-2">
                        <span class="text-warning">★</span>
                        <span class="fw-bold">4.3</span>
                        <span class="text-muted">(89)</span>
                    </div>
                    <div class="fw-bold fs-5 mb-3">$89.99</div>
                    <a href="#" class="btn btn-light w-100 border rounded-3 add-to-cart-btn">🛒 Add to Cart</a>
                </div>
            </div>
        </div>

        {{-- Product Card 4 --}}
        <div class="col-md-3">
            <div class="card shadow-sm border-0 rounded-4 overflow-hidden">
                <div class="position-relative">
                    <img src="{{ asset('img/products/shoes.jpg') }}" class="card-img-top" alt="Running Shoes">
                    <span class="badge bg-success position-absolute top-0 end-0 m-3 rounded-3 px-3 py-2">
                        Sports
                    </span>
                </div>
                <div class="card-body">
                    <h5 class="card-title fw-bold">Running Shoes</h5>
                    <p class="card-text text-muted">
                        Lightweight running shoes with cushioned sole...
                    </p>
                    <div class="mb-2">
                        <span class="text-warning">★</span>
                        <span class="fw-bold">4.6</span>
                        <span class="text-muted">(342)</span>
                    </div>
                    <div class="fw-bold fs-5 mb-3">$129.99</div>
                    <a href="#" class="btn btn-light w-100 border rounded-3 add-to-cart-btn">🛒 Add to Cart</a>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection




