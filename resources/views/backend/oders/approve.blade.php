@extends('backend.layouts.master')

@section('title')
    approve
@endsection

@section('content')
    <div class="wrapper">
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <!-- Content Header -->
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0 text-dark">Duyệt đơn hàng</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">đơn hàng</a></li>
                                <li class="breadcrumb-item active">duyệt đơn hàng</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
                <!-- Content -->
                <div class="container-fluid">
                    <!-- Main row -->
                    <div class="row">
                        <div class="col-md-12">
                            <!-- general form elements -->
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Duyệt đơn hàng</h3>
                                </div>
                                <!-- /.card-header -->
                                <!-- form start -->
                                <div class="container">
                                    <div class="row">
                                        <div class="card col-3">
                                            <div class="card-header">
                                                Thông tin mặt hàng
                                            </div>
                                            <div class="card-body">
                                                <ul class="list-group list-group-flush">
                                                    @php($book_oder=\App\Models\Detail_oder::where('oder_id',$oder->id)->get())
                                                    @foreach($book_oder as $book)
                                                        <li class="list-group-item">
                                                            @php($bookk=\App\Models\Book::find($book->book_id))
                                                            <img src="{{asset('backend/dist/img/'.$bookk->avatar)}}" alt="" style="width: 100px; height: 100px; float: left ">
                                                            <div style="float: right; float: left">
                                                                <p>x {{$book->quantity}}</p>
                                                                <a href="{{route('backend.product.show',$bookk->id)}}"><p>{{$bookk->name}}</p></a>
                                                                <p>{{$book->price}}VNĐ</p>
                                                            </div>
                                                        </li>
                                                    @endforeach
                                                </ul>


                                            </div>
                                        </div>
                                        <div class="card col-4">
                                            <div class="card-header">Thông tin người mua</div>
                                            <div class="card-body">

                                                <p>Họ và tên: {{$oder->customer_name}}</p>
                                                <p>Số điện thoại: {{$oder->customer_phone}}</p>
                                                <p>Địa chỉ nhận hàng: {{$oder->customer_address}}</p>
                                                <p>Thanh toán: {{$oder->total}}.000VNĐ</p>
                                                @if($oder->mess!=null)
                                                    <p>Ghi chú:{{$key->mess}}</p>
                                                @endif

                                            </div>
                                        </div>
                                        <div class="card col-5">
                                            <div class="card-header">Thông tin shop</div>
                                            <div class="card-body">
                                                <form role="form" method="post" action="{{route('backend.oder.approved',$oder->id)}}"  enctype="multipart/form-data">
                                                    @csrf
                                                    <ul class="list-group list-group-flush">
                                                        <li class="list-group-item">
                                                            Tên shop:
                                                            <input type="text" class="form-control"   name="shop_name">

                                                        </li>
                                                        <li class="list-group-item">
                                                            Sđt: <input type="text" class="form-control"  name="shop_phone">
                                                        </li>
                                                        <li class="list-group-item">
                                                            Địa chỉ: <input type="text" class="form-control"  name="shop_address">
                                                        </li>
                                                    </ul>
                                                    <button type="submit" class="btn btn-success" style="float: right">Xác nhận</button>
                                                </form>


                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- /.row (main row) -->
                </div><!-- /.container-fluid -->
            </div>
        </div>
    </div>

@endsection
