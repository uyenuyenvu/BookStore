@extends('frontend.layouts.master')

@section('title')
    Detail Book
    @endsection

@section('content')


    <!-- Breadcrumbs Area Start -->
    <!-- Single Product Area Start -->
    <div class="single-product-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-7">
                    <div class="single-product-image-inner">
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="one">
                                <a class="venobox" href="{{asset('backend/dist/img/'.$book->avatar)}}" data-gall="gallery" title="">
                                    <img src="{{asset('backend/dist/img/'.$book->avatar)}}" alt="">
                                </a>
                            </div>
                        </div>
                        <!-- Nav tabs -->
                        <ul class="product-tabs" role="tablist">
                            @php($i=0)
                            @php(    $arr=['one','two','three','four','five']
)
                            @foreach($images as $image)
                            <li role="presentation" @if($i===0) class="active" @endif><a href="#{{$arr[$i]}}" aria-controls="{{$arr[$i]}}" role="tab" data-toggle="tab"><img src="{{asset($image->folder.'/'.$image->name)}}" alt="" style="width: 150px; height: 160px"></a></li>
                                @php($i++)
                           @endforeach

                        </ul>

                    </div>
                </div>
                <div class="col-md-6 col-sm-5">
                    <div class="single-product-details">

                        <h2>{{$book->name}}</h2>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </p>
                        <div class="single-product-price">
                            @if($book->sale_price<$book->origin_price)
                                <h2 style="color: red">{{number_format($book->sale_price)}} VNĐ</h2>
                                <p><strike style="font-size: 18px">{{number_format($book->origin_price)}} VNĐ</strike></p>

                            @else
                            @endif

                        </div>
                        <div class="product-attributes clearfix">

                            <span>
                                    <a class="cart-btn btn-default" href="{{route('frontend.home.addToCart',$book->id)}}">
                                        <i class="flaticon-shop"></i>
                                        Thêm vào giỏ hàng
                                    </a>
                               </span>
                        </div>

                        <div class="single-product-categories">
                            <label>Danh mục:</label>
                            <span><a href="{{route('frontend.home.showBooksByCategory',$category->slug)}}">{{$category->name}}</a></span>
                        </div>
                        <div class="single-product-categories">
                            <label>Tác giả:</label>
                            <span><a href="#">{{$book->author}}</a></span>
                        </div>
                        <div class="single-product-categories">
                            <label>Số lượng:</label>
                            <span><a href="#">{{$book->number_import}}</a></span>
                        </div>
                        <div class="single-product-categories">
                            <label>Đã bán:</label>
                            <span><a href="#">{{$book->number_sold}}</a></span>
                        </div>
                        <div class="social-share">
                            <label>Share: </label>
                            <ul class="social-share-icon">
                                <li><a href="#"><i class="flaticon-social"></i></a></li>
                                <li><a href="#"><i class="flaticon-social-1"></i></a></li>
                                <li><a href="#"><i class="flaticon-social-2"></i></a></li>
                            </ul>
                        </div>
                        <div id="product-comments-block-extra">
                            <ul class="comments-advices">
                                <li>
                                    <a href="#" class="open-comment-form">Write a review</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-9">
                    <div class="p-details-tab-content">
                        <div class="p-details-tab">
                            <ul class="p-details-nav-tab" role="tablist">
                                <li role="presentation"><a href="#more-info" aria-controls="more-info" role="tab" data-toggle="tab">Nội dung</a></li>
                                <li role="presentation" class="active"><a href="#data" aria-controls="data" role="tab" data-toggle="tab">Thông tin</a></li>
                                <li role="presentation"><a href="#reviews" aria-controls="reviews" role="tab" data-toggle="tab">Tab</a></li>
                            </ul>
                        </div>
                        <div class="clearfix"></div>
                        <div class="tab-content review">
                            <div role="tabpanel" class="tab-pane" id="more-info">
                                <p>{!!$book->description!!}</p>
                            </div>
                            <div role="tabpanel" class="tab-pane active" id="data">
                                <table class="table-data-sheet">
                                    <tbody>
                                    <tr class="odd">
                                        <td>Nhà xuất bản</td>
                                        <td>{{$book->publisher}}</td>
                                    </tr>
                                    <tr class="even">
                                        <td>kích thước</td>
                                        <td>{{$book->size}}</td>
                                    </tr>
                                    <tr class="odd">
                                        <td>Số trang</td>
                                        <td>{{$book->number_pages}}</td>
                                    </tr>
                                    <tr class="even">
                                        <td>Số lần tái bản</td>
                                        <td>{{$book->number_publish}}</td>
                                    </tr>
                                    <tr class="odd">
                                        <td>Loại bìa</td>
                                        <td>{{$book->cover_type}}</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="reviews">
                                <div id="product-comments-block-tab">
                                    <a href="#" class="comment-btn"><span>Be the first to write your review!</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="featured-product-area section-padding">
        <h2 class="section-title">Sản phẩm cùng danh mục</h2>
        <div class="container">
            <div class="row">
                <div class="product-list tab-content">
                    @foreach($books as $bookk)
                        <div class="col-md-3 col-sm-3">
                            <div class="single-banner card" style="width: 100%">
                                <div class="product-wrapper" style="height: 250px">
                                    <a href="{{route('frontend.home.showBook',$bookk->slug)}}" class="single-banner-image-wrapper">
                                        <img class="card-img" alt="" src="{{asset('/backend/dist/img/'.$bookk->avatar)}}" style="height: 250px">
                                    </a>
                                    <div class="product-description">
                                        <div class="functional-buttons">
                                            <a href="{{route('frontend.home.addToCart',$bookk->id)}}" title="Add to Cart">
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
                                        <a href="#"><b>{{$bookk->name}}</b></a>
                                    </div>
                                    <div style="text-align: left; padding: 10px;">
                                        @if($bookk->sale_price<$book->origin_price)
                                            <strike style="font-size: 12px">{{number_format($bookk->origin_price)}} VNĐ</strike>
                                            <b style="color: red">{{number_format($bookk->sale_price)}} VNĐ</b>

                                        @else
                                        @endif
                                    </div>
                                    <div style="text-align: left; padding: 10px">
                                        <span>Tác giả: {{$bookk->author}}</span>
                                    </div>
                                    <div class="sold" style="text-align: right; padding:10px; font-size: 12px">
                                        <span>Đã bán: {{$bookk->number_sold}}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Quickview Product Start -->
                    @endforeach

                </div>
            </div>
        </div>
    </div>
    @include('frontend.include.shop_infor')
    @endsection

