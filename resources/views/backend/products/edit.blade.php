@extends('backend.layouts.master')

@section('title')
    edit product
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
                            <h1 class="m-0 text-dark">Sửa sản phẩm</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">Sản phẩm</a></li>
                                <li class="breadcrumb-item active">Sửa sản phẩm</li>
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
                                    <h3 class="card-title">Sửa sản phẩm</h3>
                                </div>
                                <!-- /.card-header -->
                                <!-- form start -->
                                <form role="form" method="post" action="{{route('backend.product.update',$book->id)}}">
                                    @csrf

                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Tên sách</label>
                                            <input type="text" value="{{$book->name}}" class="form-control" id="" placeholder="Điền tên sách " name="name">
                                            @error('name')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label>Danh mục sản phẩm</label>
                                            <select class="form-control select2" style="width: 100%;" name="category_id">
                                                <option>--Chọn danh mục---</option>
                                                @foreach($categories as $cate)
                                                    <option value="{{$cate->id}}" @if($cate->id==$book->category_id) selected @endif>{{$cate->name}}</option>
                                                @endforeach

                                            </select>
                                            @error('category_id')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label>Nhà xuất bản</label>
                                            <input type="text" value="{{$book->publisher}}" class="form-control" id="" placeholder="Điền tên NXB" name="publisher">
                                            @error('publisher')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror

                                        </div>
                                        <div class="form-group">
                                            <label>tác giả</label>
                                            <input type="text" value="{{$book->author}}" class="form-control" id="" placeholder="Điền tên tác giả" name="author">
                                            @error('author')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror

                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label>Giá khuyến mại</label>
                                                    <input type="text" value="{{$book->sale_price}}" class="form-control" placeholder="Điền giá khuyến mại" name="sale_price">
                                                </div>
                                                @error('sale_price')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label>Giá bán</label>
                                                    <input type="text" value="{{$book->origin_price}}" class="form-control" placeholder="Điền giá gốc" name="origin_price">
                                                </div>
                                                @error('origin_price')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Mô tả sản phẩm</label>
                                            <textarea class="textarea"  placeholder="Place some text here"
                                                      style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" name="content">{{$book->content}}</textarea>
                                            @error('content')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputFile">Hình ảnh sản phẩm</label>
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" id="exampleInputFile">
                                                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                                </div>
                                                <div class="input-group-append">
                                                    <span class="input-group-text" id="">Upload</span>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <!-- /.card-body -->

                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-default">Huỷ bỏ</button>
                                        <button type="submit" class="btn btn-sucess">update</button>
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
