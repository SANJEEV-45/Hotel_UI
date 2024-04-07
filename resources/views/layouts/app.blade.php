<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>HitCart</title>
    <!-- website icon -->
    <link rel="icon" href="{{ asset('images/logo.png') }}" />
    <!-- bootstrap icon -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <!-- icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
    <style>
        .dropdown-submenu{
            margin-top: -2.5rem;
        }
    </style>
</head>

<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-md" id="navbar">
        <!-- Brand -->
        <a class="navbar-brand" href="#" id="logo"><img src="{{ asset('images/logo.png') }}" alt=""
                width="30px" style="margin-bottom: 10px; margin-right: 10px" />HitCart</a>
        <!-- Toggler Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span><img src="{{ asset('images/menu.png') }}" alt="" width="20px" /></span>
        </button>

        <!-- Navbar links -->
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{route('dashboard')}}">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link drop" href="#" id="dropdownMenuButton" data-mdb-toggle="dropdown">
                        Categories
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Laptop</a></li>
                        <li><a class="dropdown-item" href="#">Accessories</a></li>
                        <li><a class="dropdown-item dropdown" data-mdb-toggle="dropdown" href="#">Men</a>
                            <ul class="dropdown-menu dropdown-submenu">
                                <li><a href="#" class="dropdown-item">Shirts</a></li>
                                <li><a href="#" class="dropdown-item">Pants</a></li>
                                <li><a href="{{route('product.category',['category_id'=>6])}}" class="dropdown-item">Hoodies</a></li>
                                <li><a href="{{route('product.category',['category_id'=>4])}}" class="dropdown-item">Shoes</a></li>
                            </ul>
                        </li>
                        <li><a class="dropdown-item dropdown" data-mdb-toggle="dropdown" href="#">Women</a>
                            <ul class="dropdown-menu dropdown-submenu">
                                <li><a href="#" class="dropdown-item">kurtis</a></li>
                                <li><a href="#" class="dropdown-item">Pants</a></li>
                                <li><a href="{{route('product.category',['category_id'=>6])}}" class="dropdown-item">Frocks</a></li>
                                <li><a href="#" class="dropdown-item">Shoes</a></li>
                            </ul>
                        </li>
                        <li><a class="dropdown-item" href="#">Toys</a></li>
                        <li><a class="dropdown-item" href="#">Smartwatches</a></li>
                        <li><a class="dropdown-item" href="#">Furnitures</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Shop</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact Us</a>
                </li>
            </ul>
        </div>
        <div class="icons dropdown">
            <img src="{{ asset('images/search.png') }}" alt="" width="16px" />
            <div class="dropdown">
                <img src="{{ asset('images/user.png') }}" alt="" width="20px" id="dropdownMenuButton"
                    data-mdb-toggle="dropdown" />
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Edit profile</a></li>
                    <li><a class="dropdown-item" href="{{route('logout')}}">Logout</a></li>
                    @php
                        $role = session('user_info.role');
                    @endphp
                    @if($role == 'Admin')
                     <li><a class="dropdown-item" href="">Admin Panel</a></li>
                    @endif
                </ul>
            </div>
            <div class="dropdown">
                <img src="{{ asset('images/shopping-cart (3).png') }}" alt="" width="20px"
                    id="dropdownMenuButton" data-mdb-toggle="dropdown" />
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Add Cart</a></li>
                    <li><a class="dropdown-item" href="#">View Orders</a></li>
                    <li><a class="dropdown-item" href="#">Wishlist</a></li>
                </ul>
            </div>
        </div>
    </nav>
    @yield('main')
    @yield('categoryView')
    @yield('productView')
    <!-- navbar -->
    <!-- footer -->
    <footer id="footer" style="margin-top: 50px;">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 footer-contact">
                        <a href="#"><img src="{{ asset('images/logo.png') }}" alt=""
                                width="32px">HitCart</a>
                        <p>
                            Karappakam<br>
                            Chennai <br>
                            Tamilnadu <br><br>
                            <strong>Phone:</strong> 8300048062 <br>
                            <strong>Email:</strong> info@HitCart.com <br>
                        </p>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><i class="bi bi-chevron-right"></i><a href="#">Home</a></li>
                            <li><i class="bi bi-chevron-right"></i><a href="#">About Us</a></li>
                            <li><i class="bi bi-chevron-right"></i><a href="#">Contact Us</a></li>
                            <li><i class="bi bi-chevron-right"></i><a href="#">Services</a></li>
                            <li><i class="bi bi-chevron-right"></i><a href="#">Privacy policy</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Our Services</h4>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptates, veritatis.</p>
                        <ul>
                            <li><i class="bi bi-chevron-right"></i><a href="#">Pants</a></li>
                            <li><i class="bi bi-chevron-right"></i><a href="#">Phone</a></li>
                            <li><i class="bi bi-chevron-right"></i><a href="#">Laptop</a></li>
                            <li><i class="bi bi-chevron-right"></i><a href="#">Dslr Camera</a></li>
                            <li><i class="bi bi-chevron-right"></i><a href="#">Tablets</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Our Social Network</h4>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptates, veritatis.</p>
                        <div class="social-links mt-3">
                            <a href="#" class="twitter-x"><i class="bi bi-twitter"></i></a>
                            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                            <a href="#" class="google-plus"><i class="bi bi-google"></i></a>
                            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container py-4">
            <div class="copyright">
                &copy; Copyright <strong><span>HitCart</span></strong>. All Rights Reserved
            </div>
        </div>
    </footer>
    <!-- footer end-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>
</html>
