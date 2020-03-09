{{--@dd($cart)--}}
@extends('frontend.layouts.master')

@section('title')
    Chi tiết hóa đơn
@endsection

@section('content')
    <!-- Cart Area Start -->
    <div class="shopping-cart-area section-padding">
        <div class="container">
            <div id="accordion">

            @foreach($all_oder as $oder)
                <div class="row">
                <div class="card">
                    <div class="card-header" id="heading{{$oder->id}}">
                        <h5 class="mb-0">
                            <button class="btn btn-success" data-toggle="collapse" data-target="#collapse{{$oder->id}}" aria-expanded="true" aria-controls="collapse{{$oder->id}}">
                                {{date_format($oder->created_at,'d/m/Y')}}
                            </button>
                        </h5>
                    </div>
                    <div id="collapse{{$oder->id}}" class="collapse show" aria-labelledby="heading{{$oder->id}}" data-parent="#accordion">
                        <div class="row">

                            <div class="col-md-4 col-sm-4 discount-area" style="float: left;">
                                <div class="subtotal-main-area" style=" padding: 10px">
                                    @php($detail=\App\Models\Detail_oder::where('oder_id',$oder->id)->get())
{{--                                    @dd($detail)--}}
                                    @foreach($detail as $bookOder)
                                        @php($bookk=\App\Models\Book::find($bookOder->book_id))
                                        <div class="subtotal-area" style="height: 120px; border-bottom: 1px solid #c7c7c7">
                                            <img src="{{asset('backend/dist/img/'.$bookk->avatar)}}" style="width: 100px; height: 100px; float: left">
                                            <div class="right" style="float: right; width: 60%">
                                                <p>x {{$bookOder->quantity}}</p>
                                                <a href="{{route('backend.product.show',$bookk->id)}}"><h3>{{$bookk->name}}</h3></a>
                                                <p>{{number_format($bookOder->price*$bookOder->quantity)}} VNĐ</p>
                                            </div>
                                        </div>
                                    @endforeach

                                    <div class="subtotal-area" style="border-bottom: none!important;">
                                        <h2>Thành tiền<span>{{$oder->total}}VNĐ</span></h2>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4" style="float:right;float: left; font-weight: bold">
                                <div class="wishlist-table-area table-responsive">
                                    <table>
                                        <tr>
                                            <td colspan="2" style="padding: 10px;">Người nhận</td>
                                        </tr>
                                        <tr>
                                            <td style="padding: 10px;">Họ và tên:</td>
                                            <td style="padding: 10px;">{{$oder->customer_name}}</td>
                                        </tr>
                                        <tr>
                                            <td style="padding: 10px; ">Sđt: </td>
                                            <td style="padding: 10px;">{{$oder->customer_phone}}</td>
                                        </tr>
                                        <tr>
                                            <td style="padding: 10px; ">Địa chỉ: </td>
                                            <td style="padding: 10px;">{{$oder->customer_address}}</td>
                                        </tr>
                                        @if($oder->mess!=null)
                                            <tr>
                                                <td style="padding: 10px;">Ghi chú: </td>
                                                <td style="padding: 10px;">{{$oder->mess}}</td>
                                            </tr>
                                        @else
                                            <tr>
                                                <td colspan="2" style="padding: 10px; "> Không có ghi chú</td>
                                            </tr>
                                        @endif
                                    </table>

                                </div>
                            </div>

                            <div class="col-md-4" style="float: right;">
                                <table>
                                    <tr>
                                        <td style="padding: 10px">Tình trạng đơn hàng</td>
                                    </tr>
                                    <tr>
                                        <td style="padding: 10px">
                                            <i class="fa fa-check-circle" style="color: #00b44e; margin-right: 10px; font-size: 30px;"></i>
                                            đã tạo đơn hàng
                                        </td>
                                    </tr>
                                    @if($oder->status>0)
                                        <tr>
                                            <td style="padding: 10px">
                                                <i class="fa fa-check-circle" style="color: #00b44e; margin-right: 10px; font-size: 30px;"></i>
                                                Đã duyệt đơn
                                            </td>
                                        </tr>

                                    @else
                                        <tr>
                                            <td style="padding: 10px">
                                                <i class="fa fa-list-ul" style="color: grey; margin-right: 10px; font-size: 30px;"></i>
                                                Đang chờ duyệt đơn
                                            </td>
                                        </tr>
                                    @endif
                                    @if($oder->status>1)
                                        <tr>
                                            <td style="padding: 10px">
                                                <i class="fa fa-check-circle" style="color: #00b44e; margin-right: 10px; font-size: 30px;"></i>
                                                Đơn hàng đã được gửi đi
                                            </td>
                                        </tr>
                                    @else
                                        <tr>
                                            <td style="padding: 10px">
                                                <i class="fa fa-truck" style="color: grey; margin-right: 10px; font-size: 30px;"></i>
                                                Đơn hàng chưa được gửi đi
                                            </td>
                                        </tr>
                                    @endif
                                    @if($oder->status>2)
                                        <tr>
                                            <td style="padding: 10px">
                                                <i class="fa fa-check-circle" style="color: #00b44e; margin-right: 10px; font-size: 30px;"></i>
                                                Đã giao hàng
                                            </td>
                                        </tr>
                                    @else
                                        <tr>
                                            <td style="padding: 10px">
                                                <i class="fa fa-gift" style="color: grey; margin-right: 10px; font-size: 30px;"></i>
                                                Đang chờ nhận hàng
                                            </td>
                                        </tr>
                                    @endif


                                </table>

                            </div>
                        </div>
                    </div>


                </div>
                </div>
            @endforeach

        </div>
        </div>



        <!-- Cart Area End -->
        <!-- Discount Area Start -->

        <!-- Discount Area End -->
@endsection
