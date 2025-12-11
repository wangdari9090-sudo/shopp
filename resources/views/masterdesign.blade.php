<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyShop - Home</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f5f7fa;
        }

        /* Navbar */
        .navbar {
            backdrop-filter: blur(10px);
            background: rgba(255,255,255,0.8);
        }

        /* Hero */
        .hero {
            height: 90vh;
            background: url('{{ asset('assets/img/hero-pc.jpg') }}') center/cover no-repeat;
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            text-align: center;
        }

        .hero::after {
            content: "";
            position: absolute;
            inset: 0;
            background: rgba(0, 0, 0, 0.55);
        }

        .hero-content {
            position: relative;
            z-index: 3;
            animation: fadeIn 1.2s ease-in-out;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px);}
            to { opacity: 1; transform: translateY(0);}
        }

        /* Category Boxes */
        .category-box {
            padding: 35px;
            border-radius: 20px;
            text-align: center;
            background: white;
            box-shadow: 0 8px 20px rgba(0,0,0,0.1);
            transition: 0.3s;
            cursor: pointer;
        }

        .category-box:hover {
            transform: translateY(-7px);
            box-shadow: 0 12px 25px rgba(0,0,0,0.15);
        }

        /* Product Cards */
        .product-card {
            background: rgba(255,255,255,0.7);
            border-radius: 15px;
            backdrop-filter: blur(8px);
            box-shadow: 0 8px 18px rgba(0,0,0,0.1);
            transition: 0.3s;
        }

        .product-card:hover {
            transform: translateY(-6px);
        }

        .product-img {
            height: 220px;
            object-fit: cover;
            border-radius: 15px 15px 0 0;
        }

        /* Footer */
        footer {
            background: #0d0d0d;
            padding: 30px 0;
        }

        footer i {
            font-size: 20px;
            margin: 0 10px;
        }
    </style>

</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg shadow-sm fixed-top">
    <div class="container">
        <a class="navbar-brand fw-bold fs-3" href="#">MyShop</a>

        <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse text-center" id="navbarNav">
            <ul class="navbar-nav ms-auto gap-lg-4">
                <li class="nav-item"><a class="nav-link fs-6" href="{{ route('index') }}">Home</a></li>
                <li class="nav-item"><a class="nav-link fs-6" href="#">Shop</a></li>
                <li class="nav-item"><a class="nav-link fs-6" href="#">Categories</a></li>
                <li class="nav-item"><a class="nav-link fs-6" href="#">Contact</a></li>

                @if(Auth::check())
                    <li class="nav-item"><a class="nav-link" href="{{ route('dashboard') }}">Dashboard</a></li>
                @else
                    <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Login</a></li>
                    <li class="nav-item"><a class="nav-link btn btn-primary text-white px-3 rounded-pill" href="{{ route('register') }}">Sign Up</a></li>
                @endif
            </ul>
        </div>
    </div>
</nav>

<section class="container my-5">
    @yield('index')
    @yield('product_details')
</section>

<!-- Footer -->
<footer class="text-center text-white">
    <p class="mb-1">&copy; 2025 MyShop. All Rights Reserved.</p>

    <div>
        <i class="bi bi-facebook"></i>
        <i class="bi bi-twitter"></i>
        <i class="bi bi-instagram"></i>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
