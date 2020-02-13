@extends('frontend.layouts.master')

@section('title')
    edit my account
@endsection

@section('content')
    <!-- Content Header -->
    <div class="online-banner-area">
        <div class="container">
            <div class="banner-title text-center">
                <h2>ONLINE <span>BOOK STORE</span></h2>
                <p>The Online Books Guide is the biggest big store and the biggest books library in the world that has alot of the popular and the most top category books presented here. Top Authors are here just subscribe your email address and get updated with us.</p>
            </div>
        </div>
    </div>
    <div class="wrapper">
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) --><!-- /.container-fluid -->
                <!-- Content -->
                <div class="container-fluid" style="padding: 0 100px 100px 100px;>
                    <!-- Main row -->
                    <div class="row">
                        <div class="col-md-10">
                            <!-- general form elements -->
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">sửa trang cá nhân</h3>
                                </div>
                                <!-- /.card-header -->
                                <!-- form start -->
                                <form role="form" action="{{route('backend.user.update',$user->id)}}" method="post">
                                    @csrf
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Tên</label>
                                            <input type="text" class="form-control" id="" value="{{$user->name}}" name="name">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Email</label>
                                            <input type="email" class="form-control" id="" value="{{$user->email}}" name="email">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Địa chỉ</label>
                                            <input type="text" class="form-control" id="" value="{{$user->address}}" name="address">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Số điện thoại</label>
                                            <input type="tel" class="form-control" id="" value="{{$user->phone}}" name="phone" pattern="[0-9]{10}">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Mật khẩu</label>
                                            <input type="password" class="form-control" id="" name="password">
                                        </div>
                                        <div class="form-group">
                                            <label>Quyền</label>
                                            <select class="form-control select2" style="width: 100%;" name="role">
                                                <option value="0">--Chọn quyền---</option>
                                                <option value="0" @if($user->role==0) selected @endif>mua sách</option>
                                                <option value="1" @if($user->role==1) selected @endif>Bán sách</option>
                                            </select>
                                        </div>
                                    </div>
                                    <!-- /.card-body -->

                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-default">Huỷ bỏ</button>
                                        <button type="submit" class="btn btn-sucess">Cập nhật</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- /.row (main row) -->
                </div><!-- /.container-fluid -->
            </div>
        </div>
    </div>
@endsection
