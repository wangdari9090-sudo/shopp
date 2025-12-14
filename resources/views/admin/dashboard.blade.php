@extends('admin.maindesign')

@section('dashboard')

<div class="container my-4">

    <!-- Dashboard Summary Cards -->
    <div class="row g-4 mb-4 justify-content-center">
    <div class="col-12 col-md-6 col-lg-3">
        <div class="card text-white bg-warning shadow-sm">
            <div class="card-body d-flex justify-content-between align-items-center">
                <div>
                    <h5 class="card-title">Orders</h5>
                    <h3>{{ $ordersCount ?? 0 }}</h3>
                </div>
                <i class="bi bi-cart fs-1"></i>
            </div>
        </div>
    </div>

    <div class="col-12 col-md-6 col-lg-3">
        <div class="card text-white bg-success shadow-sm">
            <div class="card-body d-flex justify-content-between align-items-center">
                <div>
                    <h5 class="card-title">Products</h5>
                    <h3>{{ $productsCount ?? 0 }}</h3>
                </div>
                <i class="bi bi-box-seam fs-1"></i>
            </div>
        </div>
    </div>
    
    <div class="col-12 col-md-6 col-lg-3">
        <div class="card text-white bg-info shadow-sm">
            <div class="card-body d-flex justify-content-between align-items-center">
                <div>
                    <h5 class="card-title">Users</h5>
                    <h3>{{ $usersCount ?? 0 }}</h3>
                </div>
                <i class="bi bi-people fs-1"></i>
            </div>
        </div>
    </div>
    <div class="col-12 col-md-6 col-lg-3">
        <div class="card text-white bg-primary shadow-sm">
            <div class="card-body d-flex justify-content-between align-items-center">
                <div>
                    <h5 class="card-title">Categories</h5>
                    <h3>{{ $categoriesCount ?? 0 }}</h3>
                </div>
                <i class="bi bi-tags fs-1"></i>
            </div>
        </div>
    </div>

</div>

</div>

@endsection
