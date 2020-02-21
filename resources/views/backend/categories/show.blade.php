{{--@dd($books)--}}
@extends('backend.layouts.master')
@section('title')
    {{$category->name}}
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
                            <h1 class="m-0 text-dark">Xem chi tiết</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                                <li class="breadcrumb-item"><a href="#">Danh mục</a></li>
                                <li class="breadcrumb-item active">Xem chi tiết</li>
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
                                    <h3 class="card-title">Xem chi tiết</h3>

                                    <div class="card-tools">
                                        <div class="input-group input-group-sm" style="width: 150px;">
                                            {{--                                            <a href="{{route('backend.user.edit',$user->id)}}">Cập nhật</a>--}}
                                        </div>
                                    </div>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body table-responsive p-0">
                                    <table class="table table-hover">
                                        <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>{{$category->id}}</th>
                                        </tr>
                                        <tr>
                                            <th>Tên danh mục</th>
                                            <th>{{$category->name}}</th>
                                        </tr>
                                        @if(isset($category->parent_id))
                                        <tr>
                                            <th>Thuộc danh mục</th>
                                            <th>{{\App\Models\Category::find($category->parent_id)->name}}</th>
                                        </tr>
                                        @endif
                                        <tr>
                                            <th>Mô tả</th>
                                            <th>{{$category->description}}</th>
                                        </tr>
                                        <tr>
                                            <th>Ảnh mô tả</th>
                                            <th><img src="{{asset('backend/dist/img/'.$category->thumbnail)}}"></th>
                                        </tr>
                                        <tr>
                                            <a href="{{route('backend.category.showBooks',$category->id)}}"><button class="btn btn-light">Các sách</button></a>
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

