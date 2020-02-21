@extends('backend.layouts.master')
@section('title')
    list oder
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
                            <h1 class="m-0 text-dark">Danh sách đơn đang giao hàng</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                                <li class="breadcrumb-item"><a href="#">đơn hàng</a></li>
                                <li class="breadcrumb-item active">đang giao</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
                <!-- Content -->
                <div class="container-fluid">
                    <!-- Main row -->
                    <div class="row">

                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Các đơn hàng đang giao</h3>

                                    <div class="card-tools">
                                        <div class="input-group input-group-sm" style="width: 150px;">
                                            <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                                            <div class="input-group-append">
                                                <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.card-header -->
                                <div id="accordion">
                                    @foreach($list as $key)
                                        <div class="card">
                                            <div class="card-header" id="heading{{$key->id}}">
                                                <h5 class="mb-0">
                                                    <button class="btn btn-link" data-toggle="collapse" data-target="#collapse{{$key->id}}" aria-expanded="true" aria-controls="collapse{{$key->id}}">
                                                        {{$key->id}}
                                                    </button>
                                                </h5>
                                            </div>

                                            <div id="collapse{{$key->id}}" class="collapse show" aria-labelledby="heading{{$key->id}}" data-parent="#accordion">
                                                <div class="card-body" >
                                                    <div class="customer col-5 col-md-5 col-sm-5 card" style="float: left">
                                                        <div class="card-header">
                                                            Thông tin người mua
                                                        </div>
                                                        <div class="card-body">

                                                            <p>Họ và tên: {{$key->customer_name}}</p>
                                                            <p>Số điện thoại: {{$key->customer_phone}}</p>
                                                            <p>Địa chỉ nhận hàng: {{$key->customer_address}}</p>
                                                            <p>Thanh toán: {{$key->total}}.000VNĐ</p>
                                                            @if($key->mess!=null)
                                                                <p>Ghi chú:{{$key->mess}}</p>
                                                            @endif
                                                        </div>


                                                    </div>
                                                    <div class="col-4 col-md-4 col-sm-4 card" style="float: left">
                                                        <div class="card-header">Chi tiết đơn hàng</div>
                                                        <ul class="list-group list-group-flush">
                                                            @php($book_oder=\App\Models\Detail_oder::where('oder_id',$key->id)->get())
                                                            {{--                                                            @dd($book_oder)--}}
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
                                                    <div style="padding: 0 30px">
                                                        <a href="{{route('backend.oder.finish',$key->id)}}">
                                                            <button class="btn btn-success">Hoàn thành</button></a>
                                                        <a><button class="btn btn-danger">Xóa đơn hàng</button></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>


                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                    </div>
                    <!-- /.row (main row) -->
                </div><!-- /.container-fluid -->
            </div>
        </div>    </div>

@endsection
