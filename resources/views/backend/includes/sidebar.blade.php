<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="/backend/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
             style="opacity: .8">
        <span class="brand-text font-weight-light">My shop</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{asset('backend/dist/img/'.$user->avatar)}}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="{{route('backend.user.show',$user->id)}}" class="d-block">{{$user->name}}</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-item has-treeview menu-open">
                    <a href="./index.html" class="nav-link active">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>

                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-shopping-basket"></i>
                        <p>
                            Quản lý sản phẩm
                            <i class="fas fa-angle-left right"></i>
                            <span class="badge badge-info right">6</span>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('backend.product.create')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Tạo mới</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('backend.product.index')  }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                @if(\Illuminate\Support\Facades\Auth::user()->role===3)
                                    <p>Tất cả sản phẩm</p>
                                @else
                                    <p>Sách của tôi</p>
                                @endif
                            </a>
                        </li>
                       @if(\Illuminate\Support\Facades\Auth::user()->role===3)
                        <li class="nav-item">
                            <a href="{{ route('backend.product.listApprove')  }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Sản phẩm đợi duyệt</p>
                            </a>
                        </li>
                        @endif
                        <li class="nav-item">
                            <a href="{{ route('backend.product.listDeleted')  }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Sách đã xóa</p>
                            </a>
                        </li>

                    </ul>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-chart-pie"></i>
                        <p>
                            Quản lý danh mục
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('backend.category.create')  }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Tạo mới</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('backend.category.index')  }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Danh sách</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-tree"></i>
                        <p>
                            Quản lý người dùng
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('backend.user.index')  }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Danh sách</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('backend.user.create')  }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>tạo mới người dùng</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('backend.user.listUpgrade')  }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Yêu cầu nâng cấp</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('backend.user.listShop')  }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Quản lí shop</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('backend.user.listDeletedShop')  }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>shop ngừng hoạt động</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-chart-pie"></i>
                        <p>
                            Quản lý đơn hàng
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('backend.oder.new')  }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Đơn hàng mới</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('backend.oder.shipping')  }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Đang giao hàng</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('backend.statistics.oder')  }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Lịch sử</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview">
                    <a href="/logout" class="nav-link">
                        Đăng xuất
                    </a>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-chart-pie"></i>
                        <p>
                            Quản lý thống kê
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">


                        <li class="nav-item">
                            <a href="{{ route('backend.statistics.oder')  }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Thống kê theo doanh thu</p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
