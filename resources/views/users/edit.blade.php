@extends('backend.layouts.master')

@section('title')
    Dashboard
@endsection

@section('content')
    <!-- Content Header -->
    <div class="wrapper">
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0 text-dark">Sửa người dùng</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">Người dùng</a></li>
                                <li class="breadcrumb-item active">Chỉnh sửa</li>
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
                                    <h3 class="card-title">Tạo mới người dùng</h3>
                                </div>
                                <!-- /.card-header -->
                                <!-- form start -->
                                <form role="form">
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Tên</label>
                                            <input type="text" class="form-control" id="" placeholder="Tên người dùng">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Email</label>
                                            <input type="email" class="form-control" id="" placeholder="Email">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Mật khẩu</label>
                                            <input type="password" class="form-control" id="">
                                        </div>
                                        <div class="form-group">
                                            <label>Quyền</label>
                                            <select class="form-control select2" style="width: 100%;">
                                                <option>--Chọn quyền---</option>
                                                <option>Admin</option>
                                                <option>User</option>
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
