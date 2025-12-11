@extends('masterdesign')
@section('index')
<!-- Categories -->
    <h2 class="fw-bold text-center mb-4">Shop by Category</h2>

    <div class="row g-4 justify-content-center">

        <div class="col-6 col-md-4 col-lg-3">
            <div class="category-box">
                <i class="bi bi-bag-heart fs-1"></i>
                <h5 class="fw-semibold mt-2">Women Fashion</h5>
            </div>
        </div>

        <div class="col-6 col-md-4 col-lg-3">
            <div class="category-box">
                <i class="bi bi-person-standing fs-1"></i>
                <h5 class="fw-semibold mt-2">Men Fashion</h5>
            </div>
        </div>

        <div class="col-6 col-md-4 col-lg-3">
            <div class="category-box">
                <i class="bi bi-emoji-smile fs-1"></i>
                <h5 class="fw-semibold mt-2">Kids & Baby</h5>
            </div>
        </div>

        <div class="col-6 col-md-4 col-lg-3">
            <div class="category-box">
                <i class="bi bi-phone fs-1"></i>
                <h5 class="fw-semibold mt-2">Electronics</h5>
            </div>
        </div>

        <div class="col-6 col-md-4 col-lg-3">
            <div class="category-box">
                <i class="bi bi-house-door fs-1"></i>
                <h5 class="fw-semibold mt-2">Home & Living</h5>
            </div>
        </div>

        <div class="col-6 col-md-4 col-lg-3">
            <div class="category-box">
                <i class="bi bi-gem fs-1"></i>
                <h5 class="fw-semibold mt-2">Jewelry</h5>
            </div>
        </div>

    </div>
    <!-- Featured Products Section -->
<section class="container my-5">
    <h2 class="fw-bold text-center mb-4">Featured Products</h2>

    <div class="row g-4">

        @foreach($products ?? [] as $product)
        <div class="col-6 col-md-4 col-lg-3">
            <div class="product-card">
                <img src="{{ asset('storage/products/'.$product->product_image) }}" class="product-img w-100" alt="Product">

                <div class="p-3">
                    <h6 class="fw-semibold">{{ $product->product_title }}</h6>
                    <p class="text-primary fw-bold">${{ $product->product_price }}</p>

                    <a href="{{ route('productdetails', $product->id) }}" class="btn btn-outline-dark w-100 rounded-pill">View Details</a>
                </div>
            </div>
        </div>
        @endforeach

    </div>
</section>
<!-- Top Collections -->
<section class="container my-5">
    <h2 class="fw-bold text-center mb-4">Top Collections</h2>

<div class="row g-4">

    @foreach($collections as $product)
    <div class="col-12 col-md-6 col-lg-4">

        <div class="collection-card position-relative rounded-4 overflow-hidden shadow-sm">

            <!-- Big collection image -->
            <img src="{{ asset('storage/products/'.$product->product_image) }}"
                 class="w-100"
                 style="height: 300px; object-fit: cover;">

            <!-- Dark overlay -->
            <div class="position-absolute top-0 start-0 w-100 h-100"
                 style="background: linear-gradient(to bottom, rgba(0,0,0,0.1), rgba(0,0,0,0.7));">
            </div>

            <!-- Text inside image -->
            <div class="position-absolute bottom-0 start-0 p-4 text-white">

                <h3 class="fw-bold mb-1">{{ $product->product_title }}</h3>

                <a href="{{ route('productdetails', $product->id) }}"
                   class="btn btn-light rounded-pill px-4 mt-2">
                    Shop Now
                </a>

            </div>
        </div>

    </div>
    @endforeach

</div>

</section>

@endsection
