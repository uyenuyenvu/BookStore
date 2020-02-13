{{--@dd($books)--}}
@extends('backend.layouts.master')
@section('title')
    {{$book->name}}
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
                                <li class="breadcrumb-item"><a href="#">Sản phẩm</a></li>
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
                                            <th>{{$book->id}}</th>
                                        </tr>
                                        <tr>
                                            <th>Tên sách</th>
                                            <th>{{$book->name}}</th>
                                        </tr>
                                        <tr>
                                            <th>Tác giả</th>
                                            <th>{{$book->author}}</th>
                                        </tr>
                                        <tr>
                                            <th>Nhà xuất bản</th>
                                            <th>{{$book->publisher}}</th>
                                        </tr>
                                        <tr>
                                            <th>Giá gốc</th>
                                            <th>{{number_format($book->origin_price)}} VNĐ</th>
                                        </tr>
                                        <tr>
                                            <th>Giá sale</th>
                                            <th>{{number_format($book->sale_price)}} VNĐ</th>
                                        </tr>
                                        <tr>
                                            <th>Danh mục</th>
                                            <th>{{$category->name}}</th>
                                        </tr>
                                        <tr>
                                            <th>Tên shop</th>
                                            <th>{{$seller->name}}</th>
                                        </tr>
                                        <tr>
                                            <td>
                                                @foreach($images as $image)
                                                    <img src="{{'/'.$image->folder.'/'.$image->name}}" alt="" style="width: 100px; height: 100px">
                                                    @endforeach
                                            </td>
                                        </tr>
                                        @can('edit',$book)
                                            <tr>
                                                <td><a class="btn btn-light" href="{{route('backend.product.edit',$book)}}">Cập nhật</a></td>
                                            </tr>
                                            @endcan
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

