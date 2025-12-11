<div class="container py-5">
    <h3 class="text-center text-light mb-4">Shop by Category</h3>

    <div class="row g-4 justify-content-center">

        @php
            $categories = [
                ['name' => 'Electronics', 'img' => 'https://images.pexels.com/photos/871053/pexels-photo-871053.jpeg'],
                ['name' => 'Fashion', 'img' => 'https://images.pexels.com/photos/2983464/pexels-photo-2983464.jpeg'],
                ['name' => 'Sports', 'img' => 'https://images.pexels.com/photos/260447/pexels-photo-260447.jpeg'],
                ['name' => 'Home', 'img' => 'https://images.pexels.com/photos/1571460/pexels-photo-1571460.jpeg'],
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
