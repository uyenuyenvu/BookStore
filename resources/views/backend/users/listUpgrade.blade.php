@extends('backend.layouts.master')

@section('title')
    Yêu cầu nâng cấp
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
                            <h1 class="m-0 text-dark">Danh sách yêu cầu</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">Người dùng</a></li>
                                <li class="breadcrumb-item active">nâng cấp</li>
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
                                    <h3 class="card-title">Danh sách người dùng yêu cầu nâng cấp</h3>

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
                                <div class="card-body table-responsive p-0">
                                    <table class="table table-hover">
                                        <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>SDT</th>
                                            <th>Tên</th>
                                            <th>Thành Phố</th>

                                            <th>#</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($list as $userr)
                                            <tr>
                                                <td>{{$userr->id}}</td>
                                                <td>{{$userr->phone}}</td>
                                                <td>{{$userr->name}}</td>
                                                <td>{{$userr->country}}</td>

                                                <td>
                                                    <a href="{{route('backend.user.upgrade',$userr->id)}}" class="btn btn-success">Nâng cấp</a>
                                                    @can('delete',$userr->id)
                                                        <a href="{{route('backend.user.destroy',$userr->id)}}" class="btn btn-success">xóa</a>
                                                    @endcan
                                                    @can('edit',$userr->id)
                                                        <a href="{{route('backend.user.edit',$userr->id)}}" class="btn btn-success">sửa</a>
                                                    @endcan
                                                    <a href="{{route('backend.user.show',$userr->id)}}" class="btn btn-success">xem</a>
                                                </td>


                                            </tr>
                                        @endforeach


                                        </tbody>
                                    </table>
{{--                                    {!! $users->links() !!}--}}

                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                    </div>
                    <!-- /.row (main row) -->
                </div><!-- /.container-fluid -->
            </div>
        </div>
    </div>
@endsection
