@extends('backend.layouts.master')

@section('title')
    create product
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
                            <h1 class="m-0 text-dark">Tạo sản phẩm</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">Sản phẩm</a></li>
                                <li class="breadcrumb-item active">Tạo sản phẩm</li>
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
                                    <h3 class="card-title">Tạo sản phẩm</h3>
                                </div>
                                <!-- /.card-header -->
                                <!-- form start -->
                                <form role="form" method="post" action="{{route('backend.category.update',$category->id)}}" enctype="multipart/form-data">
                                    @csrf

                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Tên danh muc</label>
                                            <input type="text" class="form-control" id="" placeholder="Điền tên danh muc " name="name" value="{{$category->name}}">
                                            @error('name')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label>Danh mục cha</label>
                                            <select class="form-control select2" style="width: 100%;" name="parent_id">
                                                <option value="0">--Chọn danh mục---</option>

                                                @foreach($categories as $cate)
                                                    <option value="{{$cate->id}}">{{$cate->name}}</option>
                                                @endforeach

                                            </select>
                                            @error('category_id')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label>mo ta</label>
                                            <input type="text" value="{{$category->description}}" class="form-control" id="" placeholder="Mo ta danh muc" name="description">
                                            @error('description')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror

                                        </div>



                                        <div class="form-group">
                                            <label for="exampleInputFile">Hình ảnh mo ta</label>
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
