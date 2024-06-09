<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foodio - Home 1</title>
    <link rel="icon" href="assets-landing/img/logo-icon.png">
    <!-- CSS only -->
    <link rel="stylesheet" type="text/css" href="assets-landing/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets-landing/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets-landing/css/owl.theme.default.min.css">
    <!-- fancybox -->
    <link rel="stylesheet" href="assets-landing/css/jquery.fancybox.min.css">
    <!-- Font Awesome 6 -->
    <link rel="stylesheet" href="assets-landing/css/fontawesome.min.css">
    <!-- style -->
    <link rel="stylesheet" href="assets-landing/css/style.css">
    <!-- responsive -->
    <link rel="stylesheet" href="assets-landing/css/responsive.css">
    <!-- color -->
    <link rel="stylesheet" href="assets-landing/css/color.css">
    <!-- jQuery -->
    <script src="assets-landing/js/jquery-3.6.0.min.js"></script>
    <script src="assets-landing/js/preloader.js"></script>
</head>

<body>
    <!-- preloader -->

    <!-- end preloader -->
    <header class="one">

        <div class="bottom-bar ">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-3">
                        <div class="d-flex align-items-center justify-content-between">
                            <div class="logo">
                                <a href="index.html">
                                    <img alt="logo" src="assets-landing/img/logo.png">
                                </a>
                            </div>
                            <div class="d-flex cart-checkout">
                                <a href="cart-checkout.html">
                                    <i>
                                        <svg enable-background="new 0 0 512 512" viewBox="0 0 512 512"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <g>
                                                <path
                                                    d="m452 120h-60.946c-7.945-67.478-65.477-120-135.054-120s-127.109 52.522-135.054 120h-60.946c-11.046 0-20 8.954-20 20v352c0 11.046 8.954 20 20 20h392c11.046 0 20-8.954 20-20v-352c0-11.046-8.954-20-20-20zm-196-80c47.484 0 87.019 34.655 94.659 80h-189.318c7.64-45.345 47.175-80 94.659-80zm176 432h-352v-312h40v60c0 11.046 8.954 20 20 20s20-8.954 20-20v-60h192v60c0 11.046 8.954 20 20 20s20-8.954 20-20v-60h40z">
                                                </path>
                                            </g>
                                        </svg>
                                    </i>
                                </a>
                                <div class="bar-menu">
                                    <i class="fa-solid fa-bars"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <nav class="navbar">
                            <ul class="navbar-links">
                                <li class="navbar-dropdown">
                                    <a href="#">home</a>
                                    {{-- <div class="dropdown">
                                        <a href="index.html">home 1</a>
                                        <a href="index-2.html">home 2</a>
                                        <a href="index-3.html">home 3</a>
                                    </div> --}}
                                </li>
                                <li class="navbar-dropdown">
                                    <a href="about.html">Menu</a>
                                    {{-- <div class="dropdown">
                                        <a href="menu-1.html">All Menu</a>
                                        <a href="menu-2.html">Menu 2</a>
                                        <a href="menu-3.html">Menu 3</a>
                                    </div> --}}
                                </li>
                                @auth
                                    <li class="navbar-dropdown">
                                        <a href="#">Shop</a>
                                        <div class="dropdown">
                                            <a href="shop.html">My Order</a>
                                            <a href="product-details.html">History</a>
                                        </div>
                                    </li>
                                @endauth
                            </ul>
                        </nav>
                    </div>
                    <div class="col-lg-3">
                        <div class="hamburger-icon">
                            @auth
                                <div class="donation">
                                    <a href="JavaScript:void(0)" class="pr-cart">

                                        <svg id="Shoping-bags" enable-background="new 0 0 512 512" viewBox="0 0 512 512"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <g>
                                                <path
                                                    d="m452 120h-60.946c-7.945-67.478-65.477-120-135.054-120s-127.109 52.522-135.054 120h-60.946c-11.046 0-20 8.954-20 20v352c0 11.046 8.954 20 20 20h392c11.046 0 20-8.954 20-20v-352c0-11.046-8.954-20-20-20zm-196-80c47.484 0 87.019 34.655 94.659 80h-189.318c7.64-45.345 47.175-80 94.659-80zm176 432h-352v-312h40v60c0 11.046 8.954 20 20 20s20-8.954 20-20v-60h192v60c0 11.046 8.954 20 20 20s20-8.954 20-20v-60h40z">
                                                </path>
                                            </g>
                                        </svg>

                                    </a>
                                    <div class="cart-popup">

                                        <ul>

                                            <li class="d-flex align-items-center position-relative">

                                                <div class="p-img light-bg">

                                                    <img src="https://via.placeholder.com/75x75" alt="Product Image">

                                                </div>

                                                <div class="p-data">

                                                    <h3 class="font-semi-bold">Brown Sandwich</h3>

                                                    <p class="theme-clr font-semi-bold">1 x $10.50</p>

                                                </div>

                                                <a href="JavaScript:void(0)" id="crosss"></a>

                                            </li>

                                            <li class="d-flex align-items-center position-relative">

                                                <div class="p-img light-bg">

                                                    <img src="https://via.placeholder.com/75x75" alt="Product Image">

                                                </div>

                                                <div class="p-data">

                                                    <h3 class="font-semi-bold">Banana Leaves</h3>

                                                    <p class="theme-clr font-semi-bold">1 x $12.60</p>

                                                </div>

                                                <a href="JavaScript:void(0)" id="cross"></a>

                                            </li>

                                        </ul>

                                        <div class="cart-total d-flex align-items-center justify-content-between">

                                            <span class="font-semi-bold">Total:</span>

                                            <span class="font-semi-bold">$23.10</span>

                                        </div>

                                        <div class="cart-btns d-flex align-items-center justify-content-between">

                                            <a class="font-bold" href="shop-cart.html">View Cart</a>

                                            <a class="font-bold theme-bg-clr text-white checkout"
                                                href="cart-checkout.html">Checkout</a>

                                        </div>

                                    </div>
                                </div>
                            @endauth
                            @if (!Auth::user())
                                <a href="{{route('login')}}" class="button">Get Started</a>
                            @else
                                <a href="{{route('login')}}" class="button">Welcome</a>

                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mobile-nav hmburger-menu" id="mobile-nav" style="display:block;">
            <div class="res-log">
                <a href="index.html">
                    <img src="assets-landing/img/logo.png" alt="Responsive Logo" class="white-logo">
                </a>
            </div>
            <ul>

                <li class="menu-item-has-children"><a href="JavaScript:void(0)">Home</a>
                    {{-- <ul class="sub-menu">

                        <li><a href="index.html">home page 1</a></li>
                        <li><a href="index-2.html">home page 2</a></li>
                        <li><a href="index-3.html">home page 3</a></li>
                    </ul> --}}
                </li>
                <li class="menu-item-has-children"><a href="JavaScript:void(0)">Menu</a>
                    {{-- <ul class="sub-menu">
                        <li><a href="menu-1.html">menu 1</a></li>
                        <li><a href="menu-2.html">menu 2</a></li>
                        <li><a href="menu-3.html">menu 3</a></li>
                    </ul> --}}
                </li>


                @auth
                    <li class="menu-item-has-children"><a href="JavaScript:void(0)">Shop</a>
                        <ul class="sub-menu">
                            <li><a href="shop.html">My Order</a></li>
                            <li><a href="product-details.html">History</a></li>
                        </ul>
                    </li>
                @endauth


                <a href="JavaScript:void(0)" id="res-cross"></a>
        </div>
    </header>
    <section class="slider-hero">
        <div class="slider-home-1 owl-carousel owl-theme">
            <div class="hero-section item" style="background-image: url(https://via.placeholder.com/1920x709)">
                <div class="container">
                    <div class="row align-items-end">
                        <div class="col-xl-6">
                            <div class="featured-area">
                                <h2>The Perfect Space to Enjoy Fantastic Food</h2>
                                <h5>Festive dining at Farthings where we are strong believers in using the very best
                                    produce</h5>
                                <div class="d-md-flex align-items-center">
                                    <a href="menu-1.html" class="button">See Our Menus</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <section class="gap">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="heading">
                        <span>About The Food Restaurant</span>
                        <h2>New Ground with Dishes to be Enjoyed</h2>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="about-text">
                        <p>Nisl quam nestibulum ac quam nec odio eleme aucan ligula. Orci varius nat oque pena tibus et
                            urient monte nascete ridiculus mus nellentesq um ac qu am nec odio rbine. Nisl quam nestibu
                            aucan ligula. </p>
                        <div class="mt-4 d-flex align-items-center">
                            <img alt="girl" src="https://via.placeholder.com/80x80">
                            <div>
                                <h4>Willimes James</h4>
                                <p>Owner & Founder</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-5 justify-content-center">
                <div class="col-xl-4 col-lg-6">
                    <div class="restaurant-card">
                        <img alt="Restaurant-img" class="w-100" src="https://via.placeholder.com/416x528">
                        <div class="restaurant-span">
                            <span>All Menu</span>
                        </div>
                        <div class="coctail-bar">
                            <h5>All Menu</h5>
                            <p>Nisl quam nestibulum ac quam nec aucan ligula. Orci varius natoque li um ac quam nec odio
                                rbine.</p>
                            <a href="contact.html">Get Started</a>
                        </div>
                    </div>
                </div>
                @auth
                    <div class="col-xl-4 col-lg-6">
                        <div class="restaurant-card coctail">
                            <img alt="Restaurant-img" class="w-100" src="https://via.placeholder.com/416x528">
                            <div class="restaurant-span">
                                <span>My Orders</span>
                            </div>
                            <div class="coctail-bar">
                                <h5>My Orders</h5>
                                <p>Nisl quam nestibulum ac quam nec aucan ligula. Orci varius natoque li um ac quam nec odio
                                    rbine.</p>
                                <a href="contact.html">Get Started</a>
                            </div>
                        </div>
                    </div>
                @endauth
                <div class="col-xl-4 col-lg-6">
                    <div class="restaurant-card">
                        <img alt="Restaurant-img" class="w-100" src="https://via.placeholder.com/416x528">
                        <div class="restaurant-span">
                            <span>Merchant</span>
                        </div>
                        <div class="coctail-bar">
                            <h5>Merchant</h5>
                            <p>Nisl quam nestibulum ac quam nec aucan ligula. Orci varius natoque li um ac quam nec odio
                                rbine.</p>
                            <a href="contact.html">Get Started</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- <section>
        <div class="container">
            <div style="background-image: url(assets-landing/img/patron.jpg)" class="reserve-table">
                <div class="row">
                    <div class="col-xl-4">
                        <div class="reserve-table-text">
                            <h3>reserve A table</h3>
                            <p>Discover our New Menu !</p>
                        </div>
                    </div>
                    <div class="col-xl-8">
                        <div class="best-food-restaurants">
                            <form role="form" id="reservation-form" method="post">
                                <div class="row">
                                    <div class="col-xl-6">
                                        <input type="text" name="complete_name" placeholder="Complete Name">
                                    </div>
                                    <div class="col-xl-6">
                                        <input type="email" name="email_address" placeholder="Email Address"
                                            required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-6">
                                        <input type="number" name="No of Guest" placeholder="No of Guest">
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="row">
                                            <div class="col-xl-6">
                                                <input type="date" name="day">
                                            </div>
                                            <div class="col-xl-6">
                                                <input type="time" name="time">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button class="button" type="submit">Reserve a Table</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <section class="gap section-featured" style="background-color: #f5f8fd;">
        <div class="container border">
            <div class="heading-two">
                <h2>Fresh Menu</h2>
                <div class="line"></div>
            </div>
            <div class="row dishes owl-carousel owl-theme">
                <div class="item col-xl-12">
                    <div class="featured-dishes">
                        <div class="featured-dishes-img">
                            <img alt="featured-dishes" src="https://via.placeholder.com/323x322">
                        </div>
                        <ul class="star">
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star"></i></li>
                        </ul>
                        <a href="product-details.html">
                            <h5>Brown Sandwich</h5>
                        </a>
                        <p><span>$</span>10.85</p>
                        <a href="cart-checkout.html">
                            <i><svg enable-background="new 0 0 512 512" viewBox="0 0 512 512"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g>
                                        <path
                                            d="m452 120h-60.946c-7.945-67.478-65.477-120-135.054-120s-127.109 52.522-135.054 120h-60.946c-11.046 0-20 8.954-20 20v352c0 11.046 8.954 20 20 20h392c11.046 0 20-8.954 20-20v-352c0-11.046-8.954-20-20-20zm-196-80c47.484 0 87.019 34.655 94.659 80h-189.318c7.64-45.345 47.175-80 94.659-80zm176 432h-352v-312h40v60c0 11.046 8.954 20 20 20s20-8.954 20-20v-60h192v60c0 11.046 8.954 20 20 20s20-8.954 20-20v-60h40z">
                                        </path>
                                    </g>
                                </svg></i></a>
                    </div>
                </div>
                <div class="item col-xl-12">
                    <div class="featured-dishes">
                        <div class="sale">
                            <h6>Sale</h6>
                        </div>
                        <div class="featured-dishes-img">
                            <img alt="featured-dishes" src="https://via.placeholder.com/323x322">
                        </div>
                        <ul class="star">
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star"></i></li>
                        </ul>
                        <a href="product-details.html">
                            <h5>Banana Leaves</h5>
                        </a>
                        <div class="d-flex">
                            <p><span>$</span>10.85</p>
                            <del>$14.5</del>
                        </div>
                        <a href="cart-checkout.html">
                            <i><svg enable-background="new 0 0 512 512" viewBox="0 0 512 512"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g>
                                        <path
                                            d="m452 120h-60.946c-7.945-67.478-65.477-120-135.054-120s-127.109 52.522-135.054 120h-60.946c-11.046 0-20 8.954-20 20v352c0 11.046 8.954 20 20 20h392c11.046 0 20-8.954 20-20v-352c0-11.046-8.954-20-20-20zm-196-80c47.484 0 87.019 34.655 94.659 80h-189.318c7.64-45.345 47.175-80 94.659-80zm176 432h-352v-312h40v60c0 11.046 8.954 20 20 20s20-8.954 20-20v-60h192v60c0 11.046 8.954 20 20 20s20-8.954 20-20v-60h40z">
                                        </path>
                                    </g>
                                </svg></i></a>
                    </div>
                </div>
                <div class="item col-xl-12">
                    <div class="featured-dishes">
                        <div class="featured-dishes-img">
                            <img alt="featured-dishes" src="https://via.placeholder.com/323x322">
                        </div>
                        <ul class="star">
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star"></i></li>
                        </ul>
                        <a href="product-details.html">
                            <h5>Parisian Hamburger</h5>
                        </a>
                        <p><span>$</span>10.85</p>
                        <a href="cart-checkout.html">
                            <i><svg enable-background="new 0 0 512 512" viewBox="0 0 512 512"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g>
                                        <path
                                            d="m452 120h-60.946c-7.945-67.478-65.477-120-135.054-120s-127.109 52.522-135.054 120h-60.946c-11.046 0-20 8.954-20 20v352c0 11.046 8.954 20 20 20h392c11.046 0 20-8.954 20-20v-352c0-11.046-8.954-20-20-20zm-196-80c47.484 0 87.019 34.655 94.659 80h-189.318c7.64-45.345 47.175-80 94.659-80zm176 432h-352v-312h40v60c0 11.046 8.954 20 20 20s20-8.954 20-20v-60h192v60c0 11.046 8.954 20 20 20s20-8.954 20-20v-60h40z">
                                        </path>
                                    </g>
                                </svg></i></a>
                    </div>
                </div>
                <div class="item col-xl-12">
                    <div class="featured-dishes">
                        <div class="featured-dishes-img">
                            <img alt="featured-dishes" src="https://via.placeholder.com/323x322">
                        </div>
                        <ul class="star">
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star"></i></li>
                        </ul>
                        <a href="product-details.html">
                            <h5>Parisian Hamburger</h5>
                        </a>
                        <p><span>$</span>10.85</p>
                        <a href="cart-checkout.html">
                            <i><svg enable-background="new 0 0 512 512" viewBox="0 0 512 512"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g>
                                        <path
                                            d="m452 120h-60.946c-7.945-67.478-65.477-120-135.054-120s-127.109 52.522-135.054 120h-60.946c-11.046 0-20 8.954-20 20v352c0 11.046 8.954 20 20 20h392c11.046 0 20-8.954 20-20v-352c0-11.046-8.954-20-20-20zm-196-80c47.484 0 87.019 34.655 94.659 80h-189.318c7.64-45.345 47.175-80 94.659-80zm176 432h-352v-312h40v60c0 11.046 8.954 20 20 20s20-8.954 20-20v-60h192v60c0 11.046 8.954 20 20 20s20-8.954 20-20v-60h40z">
                                        </path>
                                    </g>
                                </svg></i></a>
                    </div>
                </div>
            </div>
            <div>
                <a href="menu-1.html" class="button">See All Menus</a>

            </div>
        </div>
    </section>


    <footer style="background-color: #f5f8fd;">
        <div class="container">
            <div class="footer-bootem">
                <h6><span>© 2023 Foodio</span> | Restaurant and BBQ.</h6>
            </div>
        </div>
    </footer>
    <!-- progress -->
    <div id="progress">
        <span id="progress-value"><i class="fa-solid fa-arrow-up"></i></span>
    </div>

    <!-- Bootstrap Js -->
    <script src="assets-landing/js/bootstrap.min.js"></script>
    <script src="assets-landing/js/owl.carousel.min.js"></script>
    <!-- fancybox -->
    <script src="assets-landing/js/jquery.fancybox.min.js"></script>
    <script src="assets-landing/js/custom.js"></script>

    <!-- Form Script -->
    <script src="assets-landing/js/contact.js"></script>
    <script type="text/javascript" src="assets-landing/js/sweetalert.min.js"></script>
</body>
