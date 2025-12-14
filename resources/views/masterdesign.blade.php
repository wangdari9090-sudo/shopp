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
    @vite('resources/css/master.css')
    @vite('resources/css/hero.css')



</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-expand-md shadow-sm fixed-top">
    <div class="container">
        <a class="navbar-brand fw-bold fs-3" href="{{ route('index') }}">MyShop</a>

        <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse text-center" id="navbarNav">
            <ul class="navbar-nav ms-auto gap-lg-4">
                <li class="nav-item"><a class="nav-link fs-6" href="{{ route('index') }}">Home</a></li>
                {{-- <li class="nav-item"><a class="nav-link fs-6" href="#">Shop</a></li> --}}
                {{-- <li class="nav-item"><a class="nav-link fs-6" href="#">Categories</a></li> --}}
                <li class="nav-item"><a class="nav-link fs-6" href="{{ route('contact') }}">Contact</a></li>
                
                @if(Auth::check())
                    <li class="nav-item"><a class="nav-link" href="{{ route('dashboard') }}">Dashboard</a></li>
                @else
                    <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Login</a></li>
                    {{-- <li class="nav-item"><a class="nav-link btn btn-primary px-3 rounded-pill" href="{{ route('register') }}">Sign Up</a></li> --}}
                @endif
                <li class="nav-item position-relative">
                    <a href="{{ route('viewcart', 'id') }}" class="nav-link p-0 position-relative d-inline-block">

                        <!-- Cart Icon -->
                        <i class="bi bi-cart fs-4"></i>

                        <!-- Badge -->
                        @if(isset($count) && $count > 0)
                        <span class="cart-badge badge bg-danger rounded-pill">
                            {{ $count }}
                        </span>
                        @endif

                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
@yield('hero')
<main class="pt-5 pb-5">
    <section class="container my-5">
        @yield('index')
        @yield('product_details')
        @yield('view_cart')
        @yield('checkout')
        @yield('contact')
        @yield('category_products')
    </section>
</main>


<!-- Footer -->
<footer class="text-center text-white fixed-bottom bg-dark py-3 align-items-center p-4 mt-5">
    <p class="mb-1">&copy; 2025 MyShop. All Rights Reserved.</p>

    <div>
        <i class="bi bi-facebook"></i>
        <i class="bi bi-twitter"></i>
        <i class="bi bi-instagram"></i>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
<script>
    // Auto-hide alerts (Bootstrap)
    setTimeout(() => {
        document.querySelectorAll('.alert').forEach(alert => {
            let bsAlert = new bootstrap.Alert(alert);
            bsAlert.close();
        });
    }, 2000);
</script>

</body>
</html>
