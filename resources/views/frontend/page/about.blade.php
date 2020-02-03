@extends('frontend.layouts.master')

@section('title')
    About
@endsection

@section('content')
    <div class="header-area">
        <div class="container">
            <div class="row">
                <div class="col-md-2 col-sm-6 col-xs-6">
                    <div class="header-logo">
                        <a href="index.html">
                            <img src="img/logo.png" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-md-1 col-sm-6 visible-sm  col-xs-6">
                    <div class="header-right">
                        <ul>
                            <li>
                                <a href="account.html"><i class="flaticon-people"></i></a>
                            </li>
                            <li class="shoping-cart">
                                <a href="#">
                                    <i class="flaticon-shop"></i>
                                    <span>2</span>
                                </a>
                                <div class="add-to-cart-product">
                                    <div class="cart-product">
                                        <div class="cart-product-image">
                                            <a href="single-product.html">
                                                <img src="img/shop/1.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="cart-product-info">
                                            <p>
                                                <span>1</span>
                                                x
                                                <a href="single-product.html">East of eden</a>
                                            </p>
                                            <a href="single-product.html">S, Orange</a>
                                            <span class="cart-price">$ 140.00</span>
                                        </div>
                                        <div class="cart-product-remove">
                                            <i class="fa fa-times"></i>
                                        </div>
                                    </div>
                                    <div class="cart-product">
                                        <div class="cart-product-image">
                                            <a href="single-product.html">
                                                <img src="img/shop/1.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="cart-product-info">
                                            <p>
                                                <span>1</span>
                                                x
                                                <a href="single-product.html">East of eden</a>
                                            </p>
                                            <a href="single-product.html">S, Orange</a>
                                            <span class="cart-price">$ 140.00</span>
                                        </div>
                                        <div class="cart-product-remove">
                                            <i class="fa fa-times"></i>
                                        </div>
                                    </div>
                                    <div class="total-cart-price">
                                        <div class="cart-product-line fast-line">
                                            <span>Shipping</span>
                                            <span class="free-shiping">$10.50</span>
                                        </div>
                                        <div class="cart-product-line">
                                            <span>Total</span>
                                            <span class="total">$ 140.00</span>
                                        </div>
                                    </div>
                                    <div class="cart-checkout">
                                        <a href="checkout.html">
                                            Check out
                                            <i class="fa fa-chevron-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-9 col-sm-12 hidden-xs">
                    <div class="mainmenu text-center">
                        <nav>
                            <ul id="nav">
                                <li><a href="index.html">HOME</a></li>
                                <li><a href="shop.html">FEATURED</a></li>
                                <li><a href="shop.html">REVIEW BOOK</a></li>
                                <li><a href="about.html">ABOUT AUTHOR</a></li>
                                <li><a href="#">pages</a>
                                    <ul class="sub-menu">
                                        <li><a href="about.html">About Us</a></li>
                                        <li><a href="cart.html">Cart Page</a></li>
                                        <li><a href="checkout.html">Check Out</a></li>
                                        <li><a href="contact.html">Contact</a></li>
                                        <li><a href="login.html">Login</a></li>
                                        <li><a href="my-account.html">My Account</a></li>
                                        <li><a href="shop.html">Shopping Page</a></li>
                                        <li><a href="single-product.html">Single Shop Page</a></li>
                                        <li><a href="wishlist.html">Wishlist Page</a></li>
                                        <li><a href="404.html">404 Page</a></li>
                                    </ul>
                                </li>
                                <li><a href="contact.html">CONTACT</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-md-1 hidden-sm">
                    <div class="header-right">
                        <ul>
                            <li>
                                <a href="account.html"><i class="flaticon-people"></i></a>
                            </li>
                            <li class="shoping-cart">
                                <a href="#">
                                    <i class="flaticon-shop"></i>
                                    <span>2</span>
                                </a>
                                <div class="add-to-cart-product">
                                    <div class="cart-product">
                                        <div class="cart-product-image">
                                            <a href="single-product.html">
                                                <img src="img/shop/1.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="cart-product-info">
                                            <p>
                                                <span>1</span>
                                                x
                                                <a href="single-product.html">East of eden</a>
                                            </p>
                                            <a href="single-product.html">S, Orange</a>
                                            <span class="cart-price">$ 140.00</span>
                                        </div>
                                        <div class="cart-product-remove">
                                            <i class="fa fa-times"></i>
                                        </div>
                                    </div>
                                    <div class="cart-product">
                                        <div class="cart-product-image">
                                            <a href="single-product.html">
                                                <img src="img/shop/1.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="cart-product-info">
                                            <p>
                                                <span>1</span>
                                                x
                                                <a href="single-product.html">East of eden</a>
                                            </p>
                                            <a href="single-product.html">S, Orange</a>
                                            <span class="cart-price">$ 140.00</span>
                                        </div>
                                        <div class="cart-product-remove">
                                            <i class="fa fa-times"></i>
                                        </div>
                                    </div>
                                    <div class="total-cart-price">
                                        <div class="cart-product-line fast-line">
                                            <span>Shipping</span>
                                            <span class="free-shiping">$10.50</span>
                                        </div>
                                        <div class="cart-product-line">
                                            <span>Total</span>
                                            <span class="total">$ 140.00</span>
                                        </div>
                                    </div>
                                    <div class="cart-checkout">
                                        <a href="checkout.html">
                                            Check out
                                            <i class="fa fa-chevron-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Header Area End-->
    <!-- Mobile Menu Start -->
    <div class="mobile-menu-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="mobile-menu">
                        <nav id="dropdown">
                            <ul>
                                <li><a href="index.html">HOME</a></li>
                                <li><a href="shop.html">FEATURED</a></li>
                                <li><a href="shop.html">REVIEW BOOK</a></li>
                                <li><a href="about.html">ABOUT AUTHOR</a></li>
                                <li><a href="#">pages</a>
                                    <ul>
                                        <li><a href="about.html">About Us</a></li>
                                        <li><a href="cart.html">Cart Page</a></li>
                                        <li><a href="checkout.html">Check Out</a></li>
                                        <li><a href="contact.html">Contact</a></li>
                                        <li><a href="login.html">Login</a></li>
                                        <li><a href="my-account.html">My Account</a></li>
                                        <li><a href="shop.html">Shopping Page</a></li>
                                        <li><a href="single-product.html">Single Shop Page</a></li>
                                        <li><a href="wishlist.html">Wishlist Page</a></li>
                                        <li><a href="404.html">404 Page</a></li>
                                    </ul>
                                </li>
                                <li><a href="contact.html">CONTACT</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Mobile Menu End -->
    <!-- Breadcrumbs Area Start -->
    <div class="breadcrumbs-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumbs">
                        <h2>About Us</h2>
                        <ul class="breadcrumbs-list">
                            <li>
                                <a title="Return to Home" href="index.html">Home</a>
                            </li>
                            <li>About Us</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumbs Area Start -->
    <!-- About Us Area Start -->
    <div class="about-us-area section-padding">
        <div class="container">
            <div class="row">
                <div class="about-top-inner">
                    <div class="col-md-6">
                        <div class="about-inner">
                            <div class="about-title">
                                <h2>Our Story</h2>
                            </div>
                            <div class="about-content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elitss ed do eiusmod tempor incididunt ut labore et dolore mag na aliqua. Utes enim ad minim veniam, quis nostrud exerck itation ullam co laboris nisi ut aliquip ex ea commodo coes nsequat. Duis aute irure dolor in reprehenderit in.</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elitss ed do eiusmod tempor incididunt ut labore et dolore mag na aliqua. Utes enim ad minimLorem ipsum dolor sit amet, consectetur adipisicing elitss ed do eiusmod tempor incididunt ut labore et dolore mag na aliqua. Utes enim ad minim veniam, quis nostrud exerck itation ullam co laboris nisi ut aliquip ex ea commodo coes nsequat. Duis aute irure dolor in reprehenderit in. </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="about-image">
                            <img src="img/about/1.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="about-bottom-inner">
                    <div class="col-md-6">
                        <div class="about-image">
                            <img src="img/about/2.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="about-inner">
                            <div class="about-title">
                                <h2>Mission and Vission</h2>
                            </div>
                            <div class="about-content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elitss ed do eiusmod tempor incididunt ut labore et dolore mag na aliqua. Utes enim ad minim veniam, quis nostrud exerck itation ullam co laboris nisi ut aliquip ex ea commodo coes nsequat. Duis aute irure dolor in reprehenderit in.</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elitss ed do eiusmod tempor incididunt ut labore et dolore mag na aliqua. Utes enim ad minimLorem ipsum dolor sit amet, consectetur adipisicing elitss ed do eiusmod tempor incididunt ut labore et dolore mag na aliqua. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About Us Area End -->
    <!-- Our Team Area Start -->
    <div class="our-team-area">
        <h2 class="section-title">OUR WRITER</h2>
        <div class="container">
            <div class="row">
                <div class="team-list indicator-style">
                    <div class="col-md-3">
                        <div class="single-team-member">
                            <a href="#">
                                <img src="img/about/team/1.jpg" alt="">
                            </a>
                            <div class="member-info">
                                <a href="#">rokan tech</a>
                                <p>WRITER</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="single-team-member">
                            <a href="#">
                                <img src="img/about/team/2.jpg" alt="">
                            </a>
                            <div class="member-info">
                                <a href="#">mirinda</a>
                                <p>AUTHOR</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="single-team-member">
                            <a href="#">
                                <img src="img/about/team/3.jpg" alt="">
                            </a>
                            <div class="member-info">
                                <a href="#">jone doe</a>
                                <p>WRITER</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="single-team-member">
                            <a href="#">
                                <img src="img/about/team/4.jpg" alt="">
                            </a>
                            <div class="member-info">
                                <a href="#">nick kon</a>
                                <p>WRITER</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="single-team-member">
                            <a href="#">
                                <img src="img/about/team/2.jpg" alt="">
                            </a>
                            <div class="member-info">
                                <a href="#">mirinda</a>
                                <p>AUTHOR</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="single-team-member">
                            <a href="#">
                                <img src="img/about/team/1.jpg" alt="">
                            </a>
                            <div class="member-info">
                                <a href="#">rokan tech</a>
                                <p>WRITER</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Our Team Area End -->
@endsection
