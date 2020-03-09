<div class="header-area" style="-moz-box-shadow: 3px 3px 5px 0px #666;
    -webkit-box-shadow: 3px 3px 5px 0px #666;
    box-shadow: 0px 6px 5px 0px #b8b894;">
    <div class="container">
        <div class="row">
            <div class="col-md-2 col-sm-6 col-xs-6">
                <div class="header-logo">
                    <a href="{{route('frontend.home.index')}}">
                        <img src="{{asset('/frontend/img/logo.png')}}" alt="">
                    </a>
                </div>
            </div>
            <div class="col-md-1 col-sm-6 visible-sm  col-xs-6">
                <div class="header-right">
                    <ul>
                        <li>login
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
                                            <img src="{{asset('/frontend/img/shop/1.jpg')}}" alt="">
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
                                            <img src="{{asset('/frontend/img/shop/1.jpg')}}" alt="">
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
                            <li><a href="#">DANH MỤC</a>
                                <ul  class="sub-menu" >
                                    @foreach($header_categories as $category)
                                        @if($category->depth===1)
                                            <li class="li"><a href="{{route('frontend.home.showBooksByCategory',$category->slug)}}">{{$category->name}}</a>
                                                @php($cates=\App\Models\Category::where('parent_id',$category->id)->get())
                                                @if($cates!=null)
                                                    <ul class="sub-menu sub-menu2">
                                                    @foreach($cates as $cate)
                                                        <li><a href="#">{{$cate->name}}</a></li>
                                                    @endforeach
                                                    </ul>
                                                    @endif
                                            </li>
                                        @endif
                                    @endforeach

                                </ul>
                            </li>
                            <li><a href="/home?sold=max">ĐẶC SẮC</a></li>

{{--                            <li><a href="about.html">TÁC GIẢ</a></li>--}}
                            <li><a href="#">CÁC TRANG</a>
                                <ul class="sub-menu">
                                    <li><a href="{{asset('/home/about')}}">About Us</a></li>
                                    <li><a href="{{asset('/home/showCart')}}">Cart Page</a></li>
{{--                                    <li><a href="checkout.html">Check Out</a></li>--}}
                                    <li><a href="{{asset('/home/contact')}}">Contact</a></li>
{{--                                    <li><a href="login.html">Login</a></li>--}}
{{--                                    <li><a href="my-account.html">My Account</a></li>--}}
{{--                                    <li><a href="shop.html">Shopping Page</a></li>--}}
{{--                                    <li><a href="single-product.html">Single Shop Page</a></li>--}}
{{--                                    <li><a href="wishlist.html">Wishlist Page</a></li>--}}
{{--                                    <li><a href="404.html">404 Page</a></li>--}}
                                </ul>
                            </li>
                            <li><a href="{{route('frontend.home.contact')}}">LIÊN HỆ</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="col-md-1 hidden-sm" style="padding-right: 0 !important;">
                <div class="header-right">
                    <ul>
                        <li class="shoping-cart" >
                            @if (Route::has('login'))
                                <div class="top-right links">
                                    @auth

                                        <div class="dropdown" style="margin-left: -50px !important;">
                                            <span class="dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="cursor: pointer; font-size: 18px;">
                                                {{ Auth::user()->name }}
                                            </span>
                                            <div class="add-to-cart-product" style="width: 150px; ">

                                                <a class="dropdown-item" href="{{ route('logout') }}"
                                                                                                   onclick="event.preventDefault();
                                                                                                                     document.getElementById('logout-form').submit();" style="font-size: 16px !important; padding: 10px">
                                                                                                    {{ __('Logout') }}
                                                                                                </a>

                                                <form id="logout-form" class="dropdown-item" action="{{ route('logout') }}" method="POST" >
                                                    @csrf
                                                </form>

                                                <a class="dropdown-item" href="{{route('backend.oder.showOders',Auth::user()->id)}}" style="font-size: 16px; padding: 10px">Giỏ hàng</a>
                                                <a class="dropdown-item" href="{{route('frontend.home.showAccount',Auth::user()->id)}}" style="font-size: 16px; padding: 10px">My Account</a>
                                            </div>
                                            </div>
                                        </div>

                                    @else
                                        <a href="{{route('showFormLogin')}}"><i class="fa fa-sign-in"></i></a>
                                    @endauth


                            @endif
                        </li>
                        <li class="shoping-cart">
                            <a href="{{route('frontend.home.showCart')}}">
                                <i class="flaticon-shop"></i>
                                <span>{{ \Gloudemans\Shoppingcart\Facades\Cart::count() }}</span>
                            </a>

                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="owl-carousel owl-theme header-menu-carousel row" style="display: block">
            @foreach($header_categories as $category)
            <div class="">
                <a href="{{route('frontend.home.showBooksByCategory',$category->slug)}}"> {{$category->name}}</a>

            </div>
                @endforeach
        </div>
    </div>
</div>
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
