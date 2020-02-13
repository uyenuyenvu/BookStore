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
                    <div class="row">

                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">


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
                                        <tr style="height: 70px">
                                            <th>ID</th>
                                            <th>{{$user->id}}</th>
                                        </tr>
                                        <tr style="height: 70px">
                                            <th>tên</th>
                                            <th>{{$user->name}}</th>
                                        </tr>
                                        <tr style="height: 70px">
                                            <th>sdt</th>
                                            <th>{{$user->phone}}</th>
                                        </tr>
                                        <tr style="height: 70px">
                                            <th>email</th>
                                            <th>{{$user->email}}</th>
                                        </tr>
                                        <tr style="height: 70px">
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
