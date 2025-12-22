@extends('masterdesign')

@section('user_dashboard')

<h2 class="mb-4">👋 Welcome, {{ $user->name }}</h2>

<div class="row g-4">

    <!-- Profile Card -->
    <div class="col-md-4">
        <div class="card shadow">
            <div class="card-body text-center">
                <h5 class="card-title">My Profile</h5>
                <p>Email: {{ $user->email }}</p>
                <a href="#" class="btn btn-primary btn-sm">Edit Profile</a>
            </div>
        </div>
    </div>

    <!-- Orders -->
    <div class="col-md-4">
        <div class="card shadow">
            <div class="card-body text-center">
                <h5 class="card-title">My Orders</h5>
                <p>View your order history</p>
                <a href="#" class="btn btn-success btn-sm">View Orders</a>
            </div>
        </div>
    </div>

    <!-- Cart -->
    <div class="col-md-4">
        <div class="card shadow">
            <div class="card-body text-center">
                <h5 class="card-title">My Cart</h5>
                <p>Check items in your cart</p>
                <a href="#" class="btn btn-warning btn-sm">Go to Cart</a>
            </div>
        </div>
    </div>

</div>

@endsection
