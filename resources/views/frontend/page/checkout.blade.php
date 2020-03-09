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
                <div class="col-md-8" style="float:left; ">
                    <div class="wishlist-table-area table-responsive">
                        <form action="{{route('backend.oder.store')}}" method="post">
                            @csrf
                        <table style="text-align: left">
                            <tr>
                                <td  style="padding: 10px" colspan="2">
                                    Địa chỉ nhận hàng
                                </td>
                            </tr>
                            <tr>
                                <td  style="padding: 10px">
                                    Họ tên người nhận
                                </td>
                                <td  style="padding: 10px">
                                    <input type="text" class="form-control" id="exampleInputEmail1" value="{{$user_login->name}}" name="customer_name">
                                    <small id="emailHelp" class="form-text text-muted">Vui lòng nhập họ tên thật của bạn trước khi tiến hành đặt hàng</small>
                                </td>
                            </tr>
                            <tr>
                                <td  style="padding: 10px">
                                    Số điện thoại
                                </td>
                                <td  style="padding: 10px">
                                    <input type="tel" class="form-control" id="exampleInputEmail1" value="{{$user_login->phone}}" name="customer_phone">
{{--                                    <small id="emailHelp" class="form-text text-muted">Vui lòng nhập họ tên thật của bạn trước khi tiến hành đặt hàng</small>--}}
                                </td>
                            </tr>
                            <tr>
                                <td  style="padding: 10px">
                                   Địa chỉ nhận hàng
                                </td>
                                <td  style="padding: 10px">
                                    <input type="text" class="form-control" id="exampleInputEmail1" value="{{$user_login->address}}" name="customer_address">
                                    <small id="emailHelp" class="form-text text-muted">Vui lòng nhập đầy đủ địa chỉ: số nhà - đường - thị trấn/xã - quận/huyện -thành phố/tỉnh</small>
                                </td>
                            </tr>
                            <tr>
                                <td  style="padding: 10px">
                                    Ghi chú
                                </td>
                                <td  style="padding: 10px">
                                    <textarea name="mess" id="" rows="5" style="width: 100%" name="mess"></textarea>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2" style="text-align: right; padding: 10px; border: none">
                                    <button type="submit" class="btn btn-info">Tiến hành đặt hàng</button>
                                </td>
                            </tr>
                        </table>
                        </form>
                    </div>
            </div>
                        <div class="col-md-4 col-sm-4 discount-area" style="float: right;">
                                    <div class="subtotal-main-area" style=" padding: 10px">
                                        @foreach($cart as $book_cart)
                                            @php($bookk=\App\Models\Book::find($book_cart->id))
                                        <div class="subtotal-area" style="height: 120px; border-bottom: 1px solid #c7c7c7">
                                            <img src="{{asset('backend/dist/img/'.$bookk->avatar)}}" style="width: 100px; height: 100px; float: left">
                                            <div class="right" style="float: right; width: 60%">
                                                <p>x {{$book_cart->qty}}</p>
                                                <a href="{{route('backend.product.show',$bookk->id)}}"><h3>{{$book_cart->name}}</h3></a>
                                                <p>{{number_format($book_cart->price*$book_cart->qty)}} VNĐ</p>
                                            </div>
                                        </div>
                                        @endforeach

                                    <div class="subtotal-area">
                                            <h2>Thành tiền<span>{{\Gloudemans\Shoppingcart\Facades\Cart::total()}}VNĐ</span></h2>
                                    </div>

                                    </div>
                        </div>
                    </div>
                </div>



    <!-- Cart Area End -->
    <!-- Discount Area Start -->

    <!-- Discount Area End -->
@endsection
