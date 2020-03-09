
@extends('frontend.layouts.master')

@section('title')
    Nâng cấp
@endsection

@section('content')
    {{--    @include('frontend.include.slide')--}}
    <div class="online-banner-area">
        <div class="container">
            <div class="banner-title text-center">
                <h2>ONLINE <span>BOOK STORE</span></h2>
                <p>Để nâng cấp tài khoản có thể bán sách, bạn vui lòng điền đầy đủ mọi thông tin và đồng ý với điều khoản sử dụng của chúng tôi</p>
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

                    <div class="row" style="text-align: center;">
                        <form role="form" method="post" action="{{route('backend.user.storeShop')}}">
                            @csrf

                        <div class="col-6 col-md-6 col-sm-6" style="padding: 30px; border: 1px solid grey; float: left">
                            <img src="{{asset('backend/dist/img/'.$user->avatar)}}" alt="" style="width: 100px; height: 100px; border-radius: 50%">

                            <div style="text-align: left">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tên chủ shop</label>
                                    <input type="text" class="form-control" id="" placeholder="Họ và tên" name="name" value="{{$user->name}}">
                                    @error('name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Số điện thoại</label>
                                    <input type="text" class="form-control" id="" placeholder="Số điện thoại " name="phone" value="{{$user->phone}}">
                                    @error('phone')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tỉnh/thành phố</label>
                                    <input type="text" class="form-control" id="" placeholder="Điền tên tỉnh/thành phô" name="country" >
                                    @error('country')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Địa chỉ cụ thể</label>
                                    <input type="text" class="form-control" id="" placeholder="số nhà-Đường-thị trấn/xã-quận/huyện-tỉnh/thành phố..." name="address" value="{{$user->address}}">
                                    @error('address')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nhà cung cấp</label>
                                    <input type="text" class="form-control" id="" placeholder="Điền tên nhà cung cấp" name="supplier">
                                    @error('supplier')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
<div class="policy col-6" style="padding: 30px;">
                        <div class="card" >
                            <div class="card-header">
                                <b >Điều khoản và chính sách</b>
                            </div>
                            <p >Chúng tôi có quyền từ chối hoặc hủy đơn hàng của quý khách vì bất kỳ lý do gì liên quan đến lỗi kỹ thuật, hệ thống một
                                cách khách quan vào bất kỳ lúc nào.

                                Ngoài ra, để đảm bảo tính công bằng cho khách hàng là người tiêu dùng cuối cùng của Tiki.vn, chúng tôi cũng sẽ từ chối các đơn hàng không nhằm mục đích sử dụng cho cá nhân, mua hàng số lượng nhiều hoặc với mục đích mua đi bán lại.

                                Chúng tôi cam kết sẽ cung cấp thông tin giá cả chính xác nhất cho người tiêu dùng.
                                Tuy nhiên, đôi lúc vẫn có sai sót xảy ra, ví dụ như trường hợp giá sản phẩm không hiển thị chính xác trên trang web hoặc sai giá, tùy theo từng trường hợp chúng tôi sẽ liên hệ hướng dẫn hoặc thông báo hủy đơn hàng đó cho quý khách. Chúng tôi cũng
                                có quyền từ chối hoặc hủy bỏ bất kỳ đơn hàng nào dù đơn hàng đó đã hay chưa được xác nhận hoặc đã thanh toán.</p>
                            <p>Khi quý khách hàng truy cập vào trang website của chúng tôi có nghĩa là quý khách đồng ý với các điều khoản này.
                                Trang web có quyền thay đổi, chỉnh sửa, thêm hoặc lược bỏ bất kỳ phần nào trong Điều khoản mua bán hàng hóa này,
                                vào bất cứ lúc nào. Các thay đổi có hiệu lực ngay khi được đăng trên trang web mà không cần thông báo trước.
                                Và khi quý khách tiếp tục sử dụng trang web, sau khi các thay đổi về Điều khoản này được đăng tải,
                                có nghĩa là quý khách chấp nhận với những thay đổi đó.</p>
                            <input type="checkbox" name="policy"> Tôi đồng ý với điều khoản và chính sách trên <br>

                                <button type="submit" class="btn btn-success" style="margin-bottom: 30px"> Xác nhận</button>

                        </div>
</div>
                        </form>

                    </div>
                    <!-- /.row (main row) -->
                </div><!-- /.container-fluid -->
            </div>
        </div>    </div>
@endsection
