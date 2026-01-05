@section('content')
<div class="container my-5">

<div class="d-flex justify-content-between align-items-center mb-2">
    <h3 class="fw-bold mb-0">Featured Products</h3>
    <a href="{{ route('allproducts') }}"><button class="filter-btn active" data-category="all">View All</button></a>
</div>
<p class="text-white mb-4">Handpicked items just for you</p>


    <div class="row g-4">

        {{-- Product Card 1 --}}
      <div class="col-md-3 product-card" data-name="Wireless Headphones">
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
                      <button href="#"class="btn btn-light w-100 mt-3 btn-cart"><i class="bi bi-cart"></i> Add to Cart</button>
                </div>
            </div>
        </div>

        {{-- Product Card 2 --}}
        <div class="col-md-3 product-card" data-name="Smart Watch">
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
                    <button href="#"class="btn btn-light w-100 mt-3 btn-cart"><i class="bi bi-cart"></i> Add to Cart</button>
                </div>
            </div>
        </div>

        {{-- Product Card 3 --}}
        <div class="col-md-3 product-card" data-name="Designer Backpack">
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
                    <button href="#"class="btn btn-light w-100 mt-3 btn-cart"><i class="bi bi-cart"></i> Add to Cart</button>
                </div>
            </div>
        </div>

        {{-- Product Card 4 --}}
        <div class="col-md-3 product-card" data-name="Running Shoes">
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
                <button href="#"class="btn btn-light w-100 mt-3 btn-cart"><i class="bi bi-cart"></i> Add to Cart</button>
                </div>
            </div>
        </div>

    </div>
    <p id="noProductsMsg" class="text-center mt-4" style="display: none;">
        No products found.
    </p>
</div>
@endsection

<style>
    .filter-btn {
    background: rgba(255,255,255,0.05);
    border: 1px solid rgba(255,255,255,0.15);
    color: #fff;
    padding: 6px 16px;
    border-radius: 10px;
    font-size: 14px;
    transition: .25s;
}
.filter-btn:hover { background: rgba(255,255,255,.15); }
.filter-btn.active {
    background: #fff;
    color: #000;
    font-weight: 600;
}
</style>


