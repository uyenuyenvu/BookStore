@extends('frontend.layouts.master')

@section('title')

@endsection

@section("content")
{{--    <div class="header-area">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-md-2 col-sm-6 col-xs-6">--}}
{{--                    <div class="header-logo">--}}
{{--                        <a href="index.html">--}}
{{--                            <img src="img/logo.png" alt="">--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-md-1 col-sm-6 visible-sm  col-xs-6">--}}
{{--                    <div class="header-right">--}}
{{--                        <ul>--}}
{{--                            <li>--}}
{{--                                <a href="account.html"><i class="flaticon-people"></i></a>--}}
{{--                            </li>--}}
{{--                            <li class="shoping-cart">--}}
{{--                                <a href="#">--}}
{{--                                    <i class="flaticon-shop"></i>--}}
{{--                                    <span>2</span>--}}
{{--                                </a>--}}
{{--                                <div class="add-to-cart-product">--}}
{{--                                    <div class="cart-product">--}}
{{--                                        <div class="cart-product-image">--}}
{{--                                            <a href="single-product.html">--}}
{{--                                                <img src="img/shop/1.jpg" alt="">--}}
{{--                                            </a>--}}
{{--                                        </div>--}}
{{--                                        <div class="cart-product-info">--}}
{{--                                            <p>--}}
{{--                                                <span>1</span>--}}
{{--                                                x--}}
{{--                                                <a href="single-product.html">East of eden</a>--}}
{{--                                            </p>--}}
{{--                                            <a href="single-product.html">S, Orange</a>--}}
{{--                                            <span class="cart-price">$ 140.00</span>--}}
{{--                                        </div>--}}
{{--                                        <div class="cart-product-remove">--}}
{{--                                            <i class="fa fa-times"></i>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="cart-product">--}}
{{--                                        <div class="cart-product-image">--}}
{{--                                            <a href="single-product.html">--}}
{{--                                                <img src="img/shop/1.jpg" alt="">--}}
{{--                                            </a>--}}
{{--                                        </div>--}}
{{--                                        <div class="cart-product-info">--}}
{{--                                            <p>--}}
{{--                                                <span>1</span>--}}
{{--                                                x--}}
{{--                                                <a href="single-product.html">East of eden</a>--}}
{{--                                            </p>--}}
{{--                                            <a href="single-product.html">S, Orange</a>--}}
{{--                                            <span class="cart-price">$ 140.00</span>--}}
{{--                                        </div>--}}
{{--                                        <div class="cart-product-remove">--}}
{{--                                            <i class="fa fa-times"></i>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="total-cart-price">--}}
{{--                                        <div class="cart-product-line fast-line">--}}
{{--                                            <span>Shipping</span>--}}
{{--                                            <span class="free-shiping">$10.50</span>--}}
{{--                                        </div>--}}
{{--                                        <div class="cart-product-line">--}}
{{--                                            <span>Total</span>--}}
{{--                                            <span class="total">$ 140.00</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="cart-checkout">--}}
{{--                                        <a href="checkout.html">--}}
{{--                                            Check out--}}
{{--                                            <i class="fa fa-chevron-right"></i>--}}
{{--                                        </a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-md-9 col-sm-12 hidden-xs">--}}
{{--                    <div class="mainmenu text-center">--}}
{{--                        <nav>--}}
{{--                            <ul id="nav">--}}
{{--                                <li><a href="index.html">HOME</a></li>--}}
{{--                                <li><a href="shop.html">FEATURED</a></li>--}}
{{--                                <li><a href="shop.html">REVIEW BOOK</a></li>--}}
{{--                                <li><a href="about.html">ABOUT AUTHOR</a></li>--}}
{{--                                <li><a href="#">pages</a>--}}
{{--                                    <ul class="sub-menu">--}}
{{--                                        <li><a href="about.html">About Us</a></li>--}}
{{--                                        <li><a href="cart.html">Cart Page</a></li>--}}
{{--                                        <li><a href="checkout.html">Check Out</a></li>--}}
{{--                                        <li><a href="contact.html">Contact</a></li>--}}
{{--                                        <li><a href="login.html">Login</a></li>--}}
{{--                                        <li><a href="my-account.html">My Account</a></li>--}}
{{--                                        <li><a href="shop.html">Shopping Page</a></li>--}}
{{--                                        <li><a href="single-product.html">Single Shop Page</a></li>--}}
{{--                                        <li><a href="wishlist.html">Wishlist Page</a></li>--}}
{{--                                        <li><a href="404.html">404 Page</a></li>--}}
{{--                                    </ul>--}}
{{--                                </li>--}}
{{--                                <li><a href="contact.html">CONTACT</a></li>--}}
{{--                            </ul>--}}
{{--                        </nav>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-md-1 hidden-sm">--}}
{{--                    <div class="header-right">--}}
{{--                        <ul>--}}
{{--                            <li>--}}
{{--                                <a href="account.html"><i class="flaticon-people"></i></a>--}}
{{--                            </li>--}}
{{--                            <li class="shoping-cart">--}}
{{--                                <a href="#">--}}
{{--                                    <i class="flaticon-shop"></i>--}}
{{--                                    <span>2</span>--}}
{{--                                </a>--}}
{{--                                <div class="add-to-cart-product">--}}
{{--                                    <div class="cart-product">--}}
{{--                                        <div class="cart-product-image">--}}
{{--                                            <a href="single-product.html">--}}
{{--                                                <img src="img/shop/1.jpg" alt="">--}}
{{--                                            </a>--}}
{{--                                        </div>--}}
{{--                                        <div class="cart-product-info">--}}
{{--                                            <p>--}}
{{--                                                <span>1</span>--}}
{{--                                                x--}}
{{--                                                <a href="single-product.html">East of eden</a>--}}
{{--                                            </p>--}}
{{--                                            <a href="single-product.html">S, Orange</a>--}}
{{--                                            <span class="cart-price">$ 140.00</span>--}}
{{--                                        </div>--}}
{{--                                        <div class="cart-product-remove">--}}
{{--                                            <i class="fa fa-times"></i>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="cart-product">--}}
{{--                                        <div class="cart-product-image">--}}
{{--                                            <a href="single-product.html">--}}
{{--                                                <img src="img/shop/1.jpg" alt="">--}}
{{--                                            </a>--}}
{{--                                        </div>--}}
{{--                                        <div class="cart-product-info">--}}
{{--                                            <p>--}}
{{--                                                <span>1</span>--}}
{{--                                                x--}}
{{--                                                <a href="single-product.html">East of eden</a>--}}
{{--                                            </p>--}}
{{--                                            <a href="single-product.html">S, Orange</a>--}}
{{--                                            <span class="cart-price">$ 140.00</span>--}}
{{--                                        </div>--}}
{{--                                        <div class="cart-product-remove">--}}
{{--                                            <i class="fa fa-times"></i>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="total-cart-price">--}}
{{--                                        <div class="cart-product-line fast-line">--}}
{{--                                            <span>Shipping</span>--}}
{{--                                            <span class="free-shiping">$10.50</span>--}}
{{--                                        </div>--}}
{{--                                        <div class="cart-product-line">--}}
{{--                                            <span>Total</span>--}}
{{--                                            <span class="total">$ 140.00</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="cart-checkout">--}}
{{--                                        <a href="checkout.html">--}}
{{--                                            Check out--}}
{{--                                            <i class="fa fa-chevron-right"></i>--}}
{{--                                        </a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
@endsection

