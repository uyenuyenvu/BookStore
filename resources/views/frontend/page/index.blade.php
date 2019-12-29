@extends('frontend.layouts.master')

@section('title')
    Book Shop
@endsection

@section('content')
    @include('frontend.include.slide')
    @include('frontend.include.banner')
    <!-- Shop Area Start -->
    <div class="shopping-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-3 col-xs-12">
                    <div class="shop-widget">
                        <div class="shop-widget-top">
                            <aside class="widget widget-categories">
                                <h2 class="sidebar-title text-center">CATEGORY</h2>
                                <ul class="sidebar-menu">
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-angle-double-right"></i>
                                            LEARNING
                                            <span>(5)</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-angle-double-right"></i>
                                            LIGHTING
                                            <span>(8)</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-angle-double-right"></i>
                                            LIVING ROOMS
                                            <span>(4)</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-angle-double-right"></i>
                                            LAMP
                                            <span>(7)</span>
                                        </a>
                                    </li>
                                </ul>
                            </aside>
                            <aside class="widget shop-filter">
                                <h2 class="sidebar-title text-center">PRICE SLIDER</h2>
                                <div class="info-widget">
                                    <div class="price-filter">
                                        <div id="slider-range"></div>
                                        <div class="price-slider-amount">
                                            <input type="text" id="amount" name="price"  placeholder="Add Your Price" />
                                            <div class="widget-buttom">
                                                <input type="submit"  value="Filter"/>
                                                <input type="reset" value="CLEAR" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </aside>
                        </div>
                        <div class="shop-widget-bottom">
                            <aside class="widget widget-tag">
                                <h2 class="sidebar-title">POPULAR TAG</h2>
                                <ul class="tag-list">
                                    <li>
                                        <a href="#">e-book</a>
                                    </li>
                                    <li>
                                        <a href="#">writer</a>
                                    </li>
                                    <li>
                                        <a href="#">book’s</a>
                                    </li>
                                    <li>
                                        <a href="#">eassy</a>
                                    </li>
                                    <li>
                                        <a href="#">nice</a>
                                    </li>
                                    <li>
                                        <a href="#">author</a>
                                    </li>
                                </ul>
                            </aside>
                            <aside class="widget widget-seller">
                                <h2 class="sidebar-title">TOP SELLERS</h2>
                                <div class="single-seller">
                                    <div class="seller-img">
                                        <img src="{{asset('/frontend/img/shop/1.jpg')}}" alt="" />
                                    </div>
                                    <div class="seller-details">
                                        <a href="shop.html"><h5>Cold mountain</h5></a>
                                        <h5>$ 50.00</h5>
                                        <ul>
                                            <li><i class="fa fa-star icolor"></i></li>
                                            <li><i class="fa fa-star icolor"></i></li>
                                            <li><i class="fa fa-star icolor"></i></li>
                                            <li><i class="fa fa-star icolor"></i></li>
                                            <li><i class="fa fa-star icolor"></i></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="single-seller">
                                    <div class="seller-img">
                                        <img src="{{asset('/frontend/img/shop/2.jpg')}}" alt="" />
                                    </div>
                                    <div class="seller-details">
                                        <a href=""><h5>The historian</h5></a>
                                        <h5>$ 50.00</h5>
                                        <ul>
                                            <li><i class="fa fa-star icolor"></i></li>
                                            <li><i class="fa fa-star icolor"></i></li>
                                            <li><i class="fa fa-star icolor"></i></li>
                                            <li><i class="fa fa-star icolor"></i></li>
                                            <li><i class="fa fa-star icolor"></i></li>
                                        </ul>
                                    </div>
                                </div>
                            </aside>
                        </div>
                    </div>
                </div>
                <div class="col-md-9 col-sm-9 col-xs-12">
                    <div class="shop-tab-area">
                        <div class="shop-tab-list">
                            <div class="shop-tab-pill pull-left">
                                <ul>
                                    <li class="active" id="left"><a data-toggle="pill" href="#home"><i class="fa fa-th"></i><span>Grid</span></a></li>
                                    <li><a data-toggle="pill" href="#menu1"><i class="fa fa-th-list"></i><span>List</span></a></li>
                                </ul>
                            </div>
                            <div class="shop-tab-pill pull-right">
                                <ul>
                                    <li class="product-size-deatils">
                                        <div class="show-label">
                                            <label>Show : </label>
                                            <select>
                                                <option value="10" selected="selected">10</option>
                                                <option value="09">09</option>
                                                <option value="08">08</option>
                                                <option value="07">07</option>
                                                <option value="06">06</option>
                                            </select>
                                        </div>
                                    </li>
                                    <li class="product-size-deatils">
                                        <div class="show-label">
                                            <label><i class="fa fa-sort-amount-asc"></i>Sort by : </label>
                                            <select>
                                                <option value="position" selected="selected">Position</option>
                                                <option value="Name">Name</option>
                                                <option value="Price">Price</option>
                                            </select>
                                        </div>
                                    </li>
                                    <li class="shop-pagination"><a href="#">1</a></li>
                                    <li class="shop-pagination"><a href="#">2</a></li>
                                    <li class="shop-pagination"><a href="#"><i class="fa fa-caret-right"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="tab-content">
                            <div class="row tab-pane fade in active" id="home">
                                <div class="shop-single-product-area">
                                    @for($i=1;$i<30;$i++)
                                    <div class="col-md-4 col-sm-6">
                                        <div class="single-banner">
                                            <div class="product-wrapper">
                                                <a href="#" class="single-banner-image-wrapper">
                                                    <img alt="" src="{{asset('/frontend/img/featured/1.jpg')}}">
                                                    <div class="price"><span>$</span>160</div>
                                                </a>
                                                <div class="product-description">
                                                    <div class="functional-buttons">
                                                        <a href="#" title="Add to Cart">
                                                            <i class="fa fa-shopping-cart"></i>
                                                        </a>
                                                        <a href="#" title="Add to Wishlist">
                                                            <i class="fa fa-heart-o"></i>
                                                        </a>
                                                        <a href="#" title="Quick view" data-toggle="modal" data-target="#productModal">
                                                            <i class="fa fa-compress"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="banner-bottom text-center">
                                                <div class="banner-bottom-title">
                                                    <a href="#">East of eden</a>
                                                </div>
                                                <div class="rating-icon">
                                                    <i class="fa fa-star icolor"></i>
                                                    <i class="fa fa-star icolor"></i>
                                                    <i class="fa fa-star icolor"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endfor


                                </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        </div>
    </div>

            @include('frontend.include.laster_blog')
        @include('frontend.include.comment_client')
        @include('frontend.include.counter')
        @include('frontend.include.shop_infor')
        @include('frontend.include.letter')
        
    <!-- Shop Area End -->
    @endsection
