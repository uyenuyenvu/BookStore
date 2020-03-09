{{--@dd($books)--}}
@extends('backend.layouts.master')
@section('title')
    show my account
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
                            <h1 class="m-0 text-dark">Trang cá nhân</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                                <li class="breadcrumb-item"><a href="#">Danh mục</a></li>
                                <li class="breadcrumb-item active">Trang cá nhân</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
                <!-- Content -->
                <div class="container-fluid">
                    <!-- Main row -->
                    <div class="row" style="text-align: center;">
                        <div class="col-6 col-md-6 col-sm-6" style="padding: 30px; border: 1px solid grey; float: left">
                            <img src="{{asset('backend/dist/img/'.$userr->avatar)}}" alt="" style="width: 100px; height: 100px; border-radius: 50%">
                            <h2>{{$userr->name}}</h2>
                            <div style="text-align: left">
                                <p>ID: <b>{{$userr->id}}</b></p>
                                <p>Email: <b>{{$userr->email}}</b></p>
                                @if($shop)
                                    <p>SDT: <b>{{$shop->phone}}</b></p>
                                    <p>Địa chỉ: <b>{{$shop->address}}</b></p>
                                    @else
                                    <p>SDT: <b>{{$userr->phone}}</b></p>
                                    <p>Địa chỉ: <b>{{$userr->address}}</b></p>
                                    @endif
                                @if($userr->role>1 )

                                     <p>Là tài khoản bán hàng</p>
                                @else

                                    <p>LÀ tài khoản mua hàng</p>
                            @endif
                                <a href="{{route('backend.user.edit',$userr->id)}}" class="btn btn-success">sửa</a>
                                <a href="{{route('backend.user.destroy',$userr->id)}}" class="btn btn-danger">xóa</a>

                            </div>
                        </div>


                    </div>
                    <!-- /.row (main row) -->
                </div><!-- /.container-fluid -->
            </div>
        </div>    </div>

@endsection

