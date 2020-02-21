@extends('frontend.layouts.master')

@section('title')
    Book Shop
@endsection

@section('content')
    @include('frontend.include.slide')
    @include('frontend.include.banner')
{{--    @dd($cart)--}}
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

                                </ul>
                            </div>
                        </div>
                        <div class="tab-content">
                            <div class="row tab-pane fade in active" id="home">
                                <div class="shop-single-product-area">
                                    @foreach($books as $book)
                                    <div class="col-md-4 col-sm-6">
                                        <div class="single-banner">
                                            <div class="product-wrapper">
                                                <a href="{{route('frontend.home.showBook',$book->slug)}}" class="single-banner-image-wrapper">
                                                    <img alt="" src="{{asset('/frontend/img/featured/1.jpg')}}">
                                                </a>
                                                <div class="product-description">
                                                    <div class="functional-buttons">
                                                        <a href="{{route('frontend.home.addToCart',$book->id)}}" title="Add to Cart">
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
                                                    <a href="#"><b>{{$book->name}}</b></a>
                                                </div>
                                               <div style="text-align: left; padding: 10px;">
                                                   @if($book->sale_price<$book->origin_price)
                                                       <strike style="font-size: 12px">{{number_format($book->origin_price)}} VNĐ</strike>
                                                       <b style="color: red">{{number_format($book->sale_price)}} VNĐ</b>

                                                       @else
                                                   @endif
                                               </div>
                                                <div style="text-align: left; padding: 10px">
                                                    <span>Tác giả: {{$book->author}}</span>
                                                </div>
                                                <div class="sold" style="text-align: right; padding:10px; font-size: 12px">
                                                    <span>Đã bán: {{$book->number_sold}}</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                        <!--Quickview Product Start -->
                                        <div id="quickview-wrapper">
                                            <!-- Modal -->
                                            <div class="modal fade" id="productModal" tabindex="-1" role="dialog">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="modal-product">
                                                                <div class="product-images">
                                                                    <div class="main-image images">
                                                                        <img alt="" src="{{asset('/frontend/img/quick-view.jpg')}}">
                                                                    </div>
                                                                </div>
                                                                <div class="product-info">
                                                                    <h1>{{$book->name}}</h1>
                                                                    <div class="price-box">
                                                                        <p class="s-price"><span class="special-price"><span class="amount">$280.00</span></span></p>
                                                                    </div>
                                                                    <a href="product-details.html" class="see-all">See all features</a>
                                                                    <div class="quick-add-to-cart">
                                                                        <form method="post" class="cart">
                                                                            <div class="numbers-row">
                                                                                <input type="number" id="french-hens" value="3">
                                                                            </div>
                                                                            <button class="single_add_to_cart_button" type="submit">Add to cart</button>
                                                                        </form>
                                                                    </div>
                                                                    <div class="quick-desc">
                                                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor. Donec non est at libero vulputate rutrum. Morbi ornare lectus quis justo gravida semper. Nulla tellus mi, vulputate adipiscing cursus eu, suscipit id nulla.
                                                                    </div>
                                                                    <div class="social-sharing">
                                                                        <div class="widget widget_socialsharing_widget">
                                                                            <h3 class="widget-title-modal">Share this product</h3>
                                                                            <ul class="social-icons">
                                                                                <li><a target="_blank" title="Facebook" href="#" class="facebook social-icon"><i class="fa fa-facebook"></i></a></li>
                                                                                <li><a target="_blank" title="Twitter" href="#" class="twitter social-icon"><i class="fa fa-twitter"></i></a></li>
                                                                                <li><a target="_blank" title="Pinterest" href="#" class="pinterest social-icon"><i class="fa fa-pinterest"></i></a></li>
                                                                                <li><a target="_blank" title="Google +" href="#" class="gplus social-icon"><i class="fa fa-google-plus"></i></a></li>
                                                                                <li><a target="_blank" title="LinkedIn" href="#" class="linkedin social-icon"><i class="fa fa-linkedin"></i></a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div><!-- .product-info -->
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach



                                </div>
                            </div>
                                {!! $books->links() !!}

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
