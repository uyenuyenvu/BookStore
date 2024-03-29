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
                    <form role="form" method="post" action="{{route('backend.product.store')}}" enctype="multipart/form-data">
                        @csrf

                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Tên sách</label>
                                <input type="text" class="form-control" id="" placeholder="Điền tên sách " name="name">
                                @error('name')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Danh mục sản phẩm</label>
                                <select class="form-control select2" style="width: 100%;" name="category_id">
                                    <option>--Chọn danh mục---</option>
                                    @foreach($categories as $category)
                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                        @endforeach

                                </select>
                                @error('category_id')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Nhà xuất bản</label>
                                <input type="text" class="form-control" id="" placeholder="Điền tên NXB" name="publisher">
                                @error('publisher')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror

                            </div>
                            <div class="form-group">
                                <label>tác giả</label>
                                <input type="text" class="form-control" id="" placeholder="Điền tên tác giả" name="author">
                                @error('author')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror

                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label>Giá khuyến mại</label>
                                        <input type="text" class="form-control" placeholder="Điền giá khuyến mại" name="sale_price">
                                    </div>
                                    @error('sale_price')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label>Giá bán</label>
                                        <input type="text" class="form-control" placeholder="Điền giá gốc" name="origin_price">
                                    </div>
                                    @error('origin_price')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row">
                            <div class="form-group">
                                <label>Số lần tái bản</label>
                                <input type="text" class="form-control" id="" placeholder="Điền tên NXB" name="number_publish">
                                @error('number_publisher')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror

                            </div>
                            <div class="form-group">
                                <label>Kích thước</label>
                                <input type="text" class="form-control" id="" placeholder="Điền tên NXB" name="size">
                                @error('size')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror

                            </div>
                            <div class="form-group">
                                <label>Loại bìa</label>
                                <select class="form-control select2" style="width: 100%;" name="cover_type">
                                    <option>--Chọn loại bìa---</option>

                                        <option value="Cứng">Cứng</option>
                                    <option value="Mềm">Mềm</option>

                                    <option value="Lụa">Lụa</option>



                                </select>
                                @error('cover_type')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror

                            </div>
                            <div class="form-group">
                                <label>Số trang</label>
                                <input type="text" class="form-control" id="" placeholder="Điền tên NXB" name="number_pages">
                                @error('number_pages')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror

                            </div>
                            </div>
                            <div class="form-group">
                                <label>Nhà cung cấp</label>
                                <input type="text" class="form-control" id="" placeholder="Điền tên NXB" name="supplier">
                                @error('supplier')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror

                            </div>
                            <div class="form-group">
                                <label>Số lượng nhập vào</label>
                                <input type="text" class="form-control" id="" placeholder="Điền tên NXB" name="number_import">
                                @error('number_import')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror

                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Mô tả sản phẩm</label>
                                <textarea class="textarea" name="content" placeholder="Place some text here"
                                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                                @error('content')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleInputFile">Hình ảnh đại diện sản phẩm</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" name="avatar" class="custom-file-input" id="exampleInputFile" value="">
                                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                    </div>
                                    <div class="input-group-append">
                                        <span class="input-group-text" id="">Upload</span>
                                    </div>
                                </div>
                                @error('avatar')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleInputFile">Hình ảnh sản phẩm</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="exampleInputFile" name="images[]" multiple>
                                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                    </div>
                                    <div class="input-group-append">
                                        <span class="input-group-text" id="">Upload</span>
                                    </div>
                                </div>
                            </div>
{{--                            <div class="form-group">--}}
{{--                                <label>Trạng thái sản phẩm</label>--}}
{{--                                <select class="form-control select2" style="width: 100%;">--}}
{{--                                    <option>--Chọn trạng thái---</option>--}}
{{--                                    <option>Đang nhập</option>--}}
{{--                                    <option>Mở bán</option>--}}
{{--                                    <option>Hết hàng</option>--}}
{{--                                </select>--}}
{{--                            </div>--}}
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" class="btn btn-default">Huỷ bỏ</button>
                            <button type="submit" class="btn btn-sucess">Tạo mới</button>
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
