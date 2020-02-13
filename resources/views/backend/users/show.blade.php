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
                    <div class="row">

                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Trang cá nhân</h3>

                                    <div class="card-tools">
                                        <div class="input-group input-group-sm" style="width: 150px;">
                                            <a href="{{route('backend.user.edit',$user->id)}}">Cập nhật</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body table-responsive p-0">
                                    <table class="table table-hover">
                                        <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>{{$user->id}}</th>
                                        </tr>
                                        <tr>
                                            <th>tên</th>
                                            <th>{{$user->name}}</th>
                                        </tr>
                                        <tr>
                                            <th>sdt</th>
                                            <th>{{$user->phone}}</th>
                                        </tr>
                                        <tr>
                                            <th>email</th>
                                            <th>{{$user->email}}</th>
                                        </tr>
                                        <tr>
                                            <th>địa chỉ</th>
                                            <th>{{$user->address}}</th>
                                        </tr>
                                        </thead>

                                    </table>
                                    {{--                                    {!! $category->links() !!}--}}
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

