<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>All Products</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- Bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

<style>
body {
    background: #22282b;
}

/* FILTER BUTTONS */
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

/* PRODUCT CARD */
.product-card {
    background: #fff;
    border-radius: 18px;
    overflow: hidden;
    box-shadow: 0 18px 40px rgba(0,0,0,.35);
    transition: .35s;
}
.product-card:hover { transform: translateY(-8px); }

/* IMAGE */
.product-image {
    height: 320px;
    overflow: hidden;
    position: relative;
}
.product-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: .45s;
}
.product-card:hover img { transform: scale(1.1); }

/* BADGE */
.product-badge {
    position: absolute;
    top: 16px;
    right: 16px;
    padding: 6px 14px;
    border-radius: 20px;
    font-size: 13px;
    font-weight: 600;
}

/* CONTENT */
.product-body { padding: 18px; }
.product-title { font-weight: 700; }
.product-desc { font-size: 14px; color: #6c757d; }
.rating { color: #f4b400; font-size: 14px; }
.price { font-size: 20px; font-weight: 700; }
.btn-cart { border-radius: 10px; border: 1px solid #ddd; }
</style>
</head>

<body>

<div class="container py-5">

<h4 class="text-white fw-bold mb-4">All Products</h4>

<!-- FILTER -->
<div class="mb-3 d-flex gap-2 flex-wrap">
    <button class="filter-btn active" data-category="all">All</button>
    <button class="filter-btn" data-category="electronics">Electronics</button>
    <button class="filter-btn" data-category="fashion">Fashion</button>
    <button class="filter-btn" data-category="sports">Sports</button>
    <button class="filter-btn" data-category="home">Home</button>
</div>

<p class="text-info mb-4"><span id="count">Showing 8 products</span></p>

<!-- PRODUCTS -->
<div class="row g-4">

<!-- ELECTRONICS -->
<div class="col-lg-3 col-md-6 product-item" data-category="electronics">
<div class="product-card">
<div class="product-image">
<img src="img/products/headphone.jpg">
<span class="badge bg-primary product-badge">Electronics</span>
</div>
<div class="product-body">
<div class="product-title">Wireless Headphones</div>
<div class="product-desc">Noise-cancelling headphones</div>
<div class="rating">★ 4.5 (128)</div>
<div class="price">$299.99</div>
<button class="btn btn-light w-100 mt-3 btn-cart"><i class="bi bi-cart"></i> Add to Cart</button>
</div>
</div>
</div>

<div class="col-lg-3 col-md-6 product-item" data-category="electronics">
<div class="product-card">
<div class="product-image">
<img src="img/products/watch.jpg">
<span class="badge bg-primary product-badge">Electronics</span>
</div>
<div class="product-body">
<div class="product-title">Smart Watch</div>
<div class="product-desc">Fitness tracking smartwatch</div>
<div class="rating">★ 4.8 (256)</div>
<div class="price">$399.99</div>
<button class="btn btn-light w-100 mt-3 btn-cart"><i class="bi bi-cart"></i> Add to Cart</button>
</div>
</div>
</div>

<!-- FASHION -->
<div class="col-lg-3 col-md-6 product-item" data-category="fashion">
<div class="product-card">
<div class="product-image">
<img src="img/products/backpack.jpg">
<span class="badge bg-info product-badge">Fashion</span>
</div>
<div class="product-body">
<div class="product-title">Backpack</div>
<div class="product-desc">Durable laptop backpack</div>
<div class="rating">★ 4.3 (89)</div>
<div class="price">$89.99</div>
<button class="btn btn-light w-100 mt-3 btn-cart"><i class="bi bi-cart"></i> Add to Cart</button>
</div>
</div>
</div>

<div class="col-lg-3 col-md-6 product-item" data-category="fashion">
<div class="product-card">
<div class="product-image">
<img src="img/products/jacket1.jpg">
<span class="badge bg-info product-badge">Fashion</span>
</div>
<div class="product-body">
<div class="product-title">Leather Jacket</div>
<div class="product-desc">Classic leather jacket</div>
<div class="rating">★ 4.7 (210)</div>
<div class="price">$199.99</div>
<button class="btn btn-light w-100 mt-3 btn-cart"><i class="bi bi-cart"></i> Add to Cart</button>
</div>
</div>
</div>

<!-- SPORTS -->
<div class="col-lg-3 col-md-6 product-item" data-category="sports">
<div class="product-card">
<div class="product-image">
<img src="img/products/shoes.jpg">
<span class="badge bg-success product-badge">Sports</span>
</div>
<div class="product-body">
<div class="product-title">Running Shoes</div>
<div class="product-desc">Lightweight running shoes</div>
<div class="rating">★ 4.6 (342)</div>
<div class="price">$129.99</div>
<button class="btn btn-light w-100 mt-3 btn-cart"><i class="bi bi-cart"></i> Add to Cart</button>
</div>
</div>
</div>

<div class="col-lg-3 col-md-6 product-item" data-category="sports">
<div class="product-card">
<div class="product-image">
<img src="img/products/basketball.jpg">
<span class="badge bg-success product-badge">Sports</span>
</div>
<div class="product-body">
<div class="product-title">Basketball</div>
<div class="product-desc">Official size basketball</div>
<div class="rating">★ 4.6 (140)</div>
<div class="price">$59.99</div>
<button class="btn btn-light w-100 mt-3 btn-cart"><i class="bi bi-cart"></i> Add to Cart</button>
</div>
</div>
</div>

<!-- HOME -->
<div class="col-lg-3 col-md-6 product-item" data-category="home">
<div class="product-card">
<div class="product-image">
<img src="img/products/coffee.jpg">
<span class="badge bg-warning text-dark product-badge">Home</span>
</div>
<div class="product-body">
<div class="product-title">Coffee Maker</div>
<div class="product-desc">Brew perfect coffee</div>
<div class="rating">★ 4.6 (98)</div>
<div class="price">$89.99</div>
<button class="btn btn-light w-100 mt-3 btn-cart"><i class="bi bi-cart"></i> Add to Cart</button>
</div>
</div>
</div>

<div class="col-lg-3 col-md-6 product-item" data-category="home">
<div class="product-card">
<div class="product-image">
<img src="img/products/sofa.jpg">
<span class="badge bg-warning text-dark product-badge">Home</span>
</div>
<div class="product-body">
<div class="product-title">Sofa Set</div>
<div class="product-desc">Comfortable sofa</div>
<div class="rating">★ 4.5 (54)</div>
<div class="price">$499.99</div>
<button class="btn btn-light w-100 mt-3 btn-cart"><i class="bi bi-cart"></i> Add to Cart</button>
</div>
</div>
</div>

</div>
</div>

<!-- JS -->
<script>
const buttons = document.querySelectorAll('.filter-btn');
const products = document.querySelectorAll('.product-item');
const count = document.getElementById('count');

buttons.forEach(btn => {
btn.addEventListener('click', () => {
buttons.forEach(b => b.classList.remove('active'));
btn.classList.add('active');

let cat = btn.dataset.category;
let visible = 0;

products.forEach(p => {
if (cat === 'all' || p.dataset.category === cat) {
p.style.display = 'block';
visible++;
} else {
p.style.display = 'none';
}
});
count.textContent = `Showing ${visible} products`;
});
});
</script>

</body>
</html>
