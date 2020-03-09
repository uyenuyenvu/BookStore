@extends('backend.layouts.master')
@section('title')
    list category
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
                            <h1 class="m-0 text-dark">Danh sách danh mục</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">Danh mục</a></li>
                                <li class="breadcrumb-item active">Danh sách</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
                @if(session()->has('success'))
                    <div style="display:none;" class="success">{{session()->pull('success')}}</div>
                @endif

                @if(session()->has('error'))
                    <div style="display:none;" class="error">{{session()->pull('error')}}</div>
            @endif
                <!-- Content -->
                <div class="container-fluid">
                    <!-- Main row -->
                    <div class="row">

                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">All category</h3>

                                    <div class="card-tools">
                                        <div class="input-group input-group-sm" style="width: 150px;">
                                            <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                                            <div class="input-group-append">
                                                <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.card-header -->
                                <div id="accordion">
                                    @foreach($category as $key)
                                    <div class="card">
                                        <div class="card-header" id="heading{{$key->id}}">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link" data-toggle="collapse" data-target="#collapse{{$key->id}}" aria-expanded="true" aria-controls="collapse{{$key->id}}">
                                                    {{$key->name}}
                                                </button>
                                                <div class="right" style="text-align: right">
                                                <a href="{{route('backend.category.show',$key->id)}}" class="btn btn-success">Xem</a>
                                                <a href="{{route('backend.category.edit',$key->id)}}" class="btn btn-warning">sửa</a>
                                                <a href="{{route('backend.category.destroy',$key->id)}}" class="btn btn-danger">xóa</a>

                                                </div>
                                            </h5>
                                        </div>

                                        <div id="collapse{{$key->id}}" class="collapse " aria-labelledby="heading{{$key->id}}" data-parent="#accordion">
                                            <div class="card-body">
                                                <p>ID: <b>{{$key->id}}</b></p>
                                                <p>Tên danh mục: <b>{{$key->name}}</b></p>
                                                <p>Mô tả: <b>{{$key->description}}</b></p>
                                                @if($key->depth>1)
                                                    <p>Thuộc danh mục: <b>{{\App\Models\Category::find($key->parent_id)->name}}</b></p>

                                                @endif
                                                <img src="{{asset('backend/dist/img/'.$key->thumbnail)}}" alt="">

                                            </div>
                                        </div>
                                    </div>
                                        @endforeach
                                </div>
                                {!! $category->links() !!}

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
