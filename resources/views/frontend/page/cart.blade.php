{{--@dd($cart)--}}
@extends('frontend.layouts.master')

@section('title')
    Cart
@endsection

@section('content')
    <!-- Cart Area Start -->
    <div class="shopping-cart-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="wishlist-table-area table-responsive">
                        <table>
                            <thead>
                            <tr>
                                <th class="product-remove">xóa</th>
                                <th class="t-product-name">Tên sản phẩm</th>
                                <th class="product-unit-price">Đơn giá</th>
                                <th class="product-quantity">Số lượng</th>
                                <th class="product-subtotal">Thành tiền</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($cart as $book)
                            <tr>
                                <td class="product-remove">
                                    <a href="{{route('frontend.home.remove',$book->rowId)}}">
                                        <i class="flaticon-delete"></i>
                                    </a>
                                </td>
                                <td class="t-product-name">
                                    <h3>
                                        <a href="#">{{$book->name}}</a>
                                    </h3>
                                </td>
                                <td class="product-unit-price">
                                    <p>
                                        {{number_format($book->price)}}
                                    </p>
                                </td>
                                <td class="product-quantity product-cart-details">
                                    <a href="{{route('frontend.home.dec',$book->rowId)}}"><i class="fa fa-minus" style="margin: 5px"></i></a>

                                    {{$book->qty}}
                                    <a href="{{route('frontend.home.inc',$book->rowId)}}"><i class="fa fa-plus-square" style="margin: 5px"></i></a>


                                </td>
                                <td class="product-quantity">
                                    <p>{{number_format($book->price*$book->qty)}}</p>
                                </td>
                            </tr>
                            @endforeach

                            </tbody>
                        </table>
                    </div>
                    <div class="shopingcart-bottom-area">
                        <a class="left-shoping-cart" href="{{route('frontend.home.index')}}">Tiếp tục mua</a>
                        <div class="shopingcart-bottom-area pull-right">
                            <a class="right-shoping-cart" href="#">Xóa toàn bộ giỏ hàng</a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Cart Area End -->
    <!-- Discount Area Start -->
    <div class="discount-area">
        <div class="container">
            <div class="row" >
                <div class="col-md-6 col-sm-6" style="float: right">
                    <div class="subtotal-main-area">
                        <div class="subtotal-area">
                            <h2>Tạm tính<span>{{\Gloudemans\Shoppingcart\Facades\Cart::total()}}VNĐ</span></h2>
                        </div>
                        <div class="subtotal-area">
                            <h2>Thành tiền<span>{{\Gloudemans\Shoppingcart\Facades\Cart::total()}}VNĐ</span></h2>
                        </div>
                        <a href="{{route('backend.oder.checkout')}}">Đặt hàng</a>
                        <p>Checkout With Multiple Addresses</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Discount Area End -->
@endsection
