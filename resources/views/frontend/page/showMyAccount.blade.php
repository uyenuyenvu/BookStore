@extends('frontend.layouts.master')

@section('title')
    My Account
@endsection

@section('content')
{{--    @include('frontend.include.slide')--}}
<div class="online-banner-area">
    <div class="container">
        <div class="banner-title text-center">
            <h2>ONLINE <span>BOOK STORE</span></h2>
            <p>The Online Books Guide is the biggest big store and the biggest books library in the world that has alot of the popular and the most top category books presented here. Top Authors are here just subscribe your email address and get updated with us.</p>
        </div>
    </div>
</div>
    <div class="wrapper" style="padding: 50px; border: 1px solid gray">
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <!-- Content Header -->

                <!-- Content -->
                <div class="container-fluid">
                    <!-- Main row -->
                    <div class="row" style="text-align: center;">
                        <div class="col-6 col-md-6 col-sm-6" style="padding: 30px; border: 1px solid grey; float: left">
                            <img src="{{asset('backend/dist/img/'.$user->avatar)}}" alt="" style="width: 100px; height: 100px; border-radius: 50%">
                            <h2>{{$user->name}}</h2>
                            <div style="text-align: left">
                                <p>ID: <b>{{$user->id}}</b></p>
                                <p>Email: <b>{{$user->email}}</b></p>
                                <p>SDT: <b>{{$user->phone}}</b></p>
                                <p>Địa chỉ: <b>{{$user->address}}</b></p>
                            </div>
                        </div>
                        <div class="col-6" style="text-align: center">
                            <a href="{{route('backend.oder.showOders',$user->id)}}">
                                <button class="btn btn-success" style="margin-bottom: 30px"><i class="fa fa-shopping-cart" style="font-size: 20px"></i> LỊCH SỬ MUA HÀNG</button>
                            </a><br>
                            <a href="{{route('backend.user.edit',$user->id)}}">
                                <button class="btn btn-success" style="margin-bottom: 30px"><i class="fa fa-edit" style="font-size: 20px"></i> CẬP NHẬT TÀI KHOẢN</button>
                            </a><br>
                            <a href="{{route('backend.user.formUpgrade',$user->id)}}">
                                <button class="btn btn-success" style="margin-bottom: 30px"><i class="fa fa-upload" style="font-size: 20px"></i> NÂNG CẤP TÀI KHOẢN</button>
                            </a>
                        </div>

                    </div>
                    <!-- /.row (main row) -->
                </div><!-- /.container-fluid -->
            </div>
        </div>    </div>
    @endsection
