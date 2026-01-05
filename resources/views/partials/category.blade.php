<div class="container py-5">
    <h3 class="text-center text-light mb-4">Shop by Category</h3>

    <div class="row g-4 justify-content-center">

   @php
    $categories = [
        ['name' => 'Electronics', 'img' => asset('img/categories/electronics.jpg')],
        ['name' => 'Fashion', 'img' => asset('img/categories/fashion.jpg')],
        ['name' => 'Sports', 'img' => asset('img/categories/sports.jpg')],
        ['name' => 'Home', 'img' => asset('img/categories/home.jpg')],
    ];
@endphp


        @foreach($categories as $category)
        <div class="col-md-3 col-sm-6">
            <div class="card category-card" style="width: 100%; height: 240px;">
                <img src="{{ $category['img'] }}" class="card-img-top h-100 object-fit-cover" alt="{{ $category['name'] }}">
                <div class="category-overlay"></div>
                <div class="category-title">
                    {{ $category['name'] }}
                </div>
                <div class="card-body p-0"></div>
            </div>
        </div>
        @endforeach

    </div>
</div>
