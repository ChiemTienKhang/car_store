<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="{{('public/backend/img/logo/logo.png')}}" rel="icon">
    <title>TRANG ADMIN</title>
    <link href="{{('public/backend/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{('public/backend/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{('public/backend/css/ruang-admin.min.css')}}" rel="stylesheet">
</head>

<body id="page-top">
    <div id="wrapper">
        <!-- Sidebar -->
        <ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{URL::to('/dashboard')}}">
                <div class="sidebar-brand-icon">
                    <img src="{{('public/backend/img/logo/logo.png')}}">
                </div>
                <div class="sidebar-brand-text mx-3">ADMIN</div>
            </a>
            <hr class="sidebar-divider my-0">
            <li class="nav-item active">
                <a class="nav-link" href="{{URL::to('/dashboard')}}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Trang chủ</span></a>
            </li>
            <hr class="sidebar-divider">
            <div class="sidebar-heading">
                Tính năng
            </div>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBootstrap"
                    aria-expanded="true" aria-controls="collapseBootstrap">
                    <i class="far fa-fw fa-window-maximize"></i>
                    <span>Quản lý hãng xe</span>
                </a>
                <div id="collapseBootstrap" class="collapse" aria-labelledby="headingBootstrap"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Quản lý hãng xe</h6>
                        <a class="collapse-item" href="{{URL::to('/add-brand')}}">Thêm hãng xe</a>
                        <a class="collapse-item" href="{{URL::to('/all-brand')}}">Liệu kê hãng xe</a>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseForm"
                    aria-expanded="true" aria-controls="collapseForm">
                    <i class="fab fa-fw fa-wpforms"></i>
                    <span>Quản lý xe bán</span>
                </a>
                <div id="collapseForm" class="collapse" aria-labelledby="headingForm" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Quản lý xe bán</h6>
                        <a class="collapse-item" href="{{URL::to('/add-car')}}">Thêm xe mới</a>
                        <a class="collapse-item" href="{{URL::to('/all-car')}}">Liệt kê các xe</a>
                    </div>
                </div>
            </li>
        </ul>
        <!-- Sidebar -->
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                <!-- TopBar -->
                <nav class="navbar navbar-expand navbar-light bg-navbar topbar mb-4 static-top">
                    <button id="sidebarToggleTop" class="btn btn-link rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>
                    <ul class="navbar-nav ml-auto">
                        <div class="topbar-divider d-none d-sm-block"></div>
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="img-profile rounded-circle" src="{{('public/backend/img/boy.png')}}"
                                    style="max-width: 60px">
                                <span class="ml-2 d-none d-lg-inline text-white small">
                                    <?php
                    $name = Session::get('admin_name');
                    if($name){
                      echo 'Xin chào, ',$name;
                    }
                    ?>
                                </span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="{{URL::to('/logout')}}">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Đăng xuất
                                </a>
                            </div>
                        </li>
                    </ul>
                </nav>
                <!-- Topbar -->
                @yield('admin_content')
                <!-- Footer -->
                <footer class="sticky-footer bg-white">
                    <div class="container my-auto">
                        <div class="copyright text-center my-auto">
                            <span>copyright &copy; <script>
                                    document.write(new Date().getFullYear());

                                </script> - developed by
                                <b>KQ</a></b>
                            </span>
                        </div>
                    </div>
                </footer>
                <!-- Footer -->
            </div>
        </div>

        <!-- Scroll to top -->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>

        <script src="{{('public/backend/vendor/jquery/jquery.min.js')}}"></script>
        <script src="{{('public/backend/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{('public/backend/vendor/jquery-easing/jquery.easing.min.js')}}"></script>
        <script src="{{('public/backend/js/ruang-admin.min.js')}}"></script>
        <script src="{{('public/backend/vendor/chart.js/Chart.min.js')}}"></script>
        <script src="{{('public/backend/js/demo/chart-area-demo.js')}}"></script>
</body>

</html>
