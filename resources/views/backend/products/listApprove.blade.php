@extends('backend.layouts.master')

@section('title')
    Sản phẩm đợi duyệt
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
                            <h1 class="m-0 text-dark">Danh sách sản phẩm</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">Sản phẩm</a></li>
                                <li class="breadcrumb-item active">Danh sách đợi duyệt</li>
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
                                    <h3 class="card-title">Sản phẩm chưa duyệt</h3>

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
                                @if(session()->has('succes'))
                                    <h1>
                                        {{session()->get('succes')}}
                                    </h1>
                                @endif
                                <div class="card-body table-responsive p-0">
                                    <table class="table table-hover">
                                        <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Tên sản phẩm</th>
                                            <th>giá cũ</th>
                                            <th>giá sale</th>
                                            <th>#</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($listApprove as $key)
                                            {{--                                {{dd($key)}}--}}
                                            <tr>
                                                <td>{{ $key->id  }}</td>
                                                <td>{{ $key->name  }}</td>

                                                <td>{{ $key->origin_price  }}</td>
                                                <td>{{ $key->sale_price  }}</td>
                                                <td>
                                                    <a href="{{route('backend.product.show',$key->id)}}" class="btn btn-light">xem</a>
                                                    @can("edit",$key)
                                                        <a href="{{route('backend.product.edit',$key)}}" class="btn btn-warning">sửa</a>

                                                        <a href="{{route('backend.product.destroy',$key->id)}}" class="btn btn-danger">xóa</a>
                                                        <a href="{{route('backend.product.approved',$key->id)}}" class="btn btn-success">duyệt</a>



                                                    @endcan
                                                </td>
                                            </tr>

                                        @endforeach

                                        </tbody>
                                    </table>
                                    {!! $listApprove->links() !!}
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
