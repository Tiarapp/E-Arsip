<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>E-Arsip</title>
        <meta content="Admin Dashboard" name="description" />
        <meta content="Mannatthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <link rel="shortcut icon" href="{{asset('/template/assets/images/favicon.ico')}}">

        <link href="{{asset('/template/assets/plugins/animate/animate.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('/template/assets/css/bootstrap-material-design.min.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('/template/assets/css/icons.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('/template/assets/css/style.css')}}" rel="stylesheet" type="text/css">

        @yield('css')

    </head>


    <body class="fixed-left">

        <!-- Loader -->
        <div id="preloader"><div id="status"><div class="spinner"></div></div></div>

        <!-- Begin page -->
        <div id="wrapper">

            <!-- ========== Left Sidebar Start ========== -->
            <div class="left side-menu">
                <button type="button" class="button-menu-mobile button-menu-mobile-topbar open-left waves-effect">
                    <i class="mdi mdi-close"></i>
                </button>

                <!-- LOGO -->
                <div class="topbar-left">
                    <div class="text-center">
                        <!--<a href="index.html" class="logo"><i class="mdi mdi-assistant"></i> Urora</a>-->
                        <a href="index.html" class="logo">
                            <img src="{{asset('/template/assets/images/logo-lg.png')}}" alt="" class="logo-large">
                        </a>
                    </div>
                </div>

                <div class="sidebar-inner slimscrollleft" id="sidebar-main">

                    <div id="sidebar-menu">
                        @if (empty(@Auth::user()->level))
                        <ul>
                            <li>
                                <a href="index" class="waves-effect">
                                    <i class="mdi mdi-animation"></i>
                                    <span> Data Klien</span>
                                </a>
                            </li>
                        </ul>
                        @else
                            <ul>

                                <li>
                                    <a href="index" class="waves-effect">
                                        <i class="mdi mdi-home"></i>
                                        <span> Home</span>
                                    </a>
                                </li>

                                <li class="menu-title">Data Master</li>

                                <li>
                                    <a href="jenis_dokumen" class="waves-effect">
                                        <i class="mdi mdi-file-document"></i>
                                        <span> Jenis Dokumen</span>
                                    </a>
                                </li>

                                <li class="menu-title">Data </li>

                                <li>
                                    <a href="dokumen" class="waves-effect">
                                        <i class="mdi mdi-animation"></i>
                                        <span> Dokumen</span>
                                    </a>
                                </li>

                                <li>
                                    <a href="klien" class="waves-effect">
                                        <i class="mdi mdi-animation"></i>
                                        <span> Data Klien</span>
                                    </a>
                                </li>

                            </ul>
                        @endif
                    </div>
                    <div class="clearfix"></div>
                </div> <!-- end sidebarinner -->
            </div>
            <!-- Left Sidebar End -->

            <!-- Start right Content here -->

            <div class="content-page">
                <!-- Start content -->
                <div class="content">

                    <!-- Top Bar Start -->
                    <div class="topbar">

                        <nav class="navbar-custom">
                            <div class="dropdown notification-list nav-pro-img">
                                <div class="list-inline-item hide-phone app-search">
                                    <form role="search" class="">
                                        <div class="form-group pt-1">
                                            <input type="text" class="form-control" placeholder="Search..">
                                            <a href=""><i class="fa fa-search"></i></a>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            @if (empty(@Auth::user()->name))
                                <ul class="list-inline float-right mb-0 mr-3">

                                    <li class="list-inline-item dropdown notification-list">
                                        <a class="nav-link dropdown-toggle arrow-none waves-effect nav-user" style="color: rgb(255, 255, 255)" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                            <img src="{{asset('/template/assets/images/users/avatar-1.jpg')}}" alt="user" class="rounded-circle img-thumbnail">
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                                            <!-- item-->
                                            <div class="dropdown-item noti-title">
                                                <h5>Welcome</h5>
                                            </div>
                                            <a class="dropdown-item" href="#"><i class="mdi mdi-account-circle m-r-5 text-muted"></i> Profile</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#"><i class="mdi mdi-logout m-r-5 text-muted"></i> Logout</a>
                                        </div>
                                    </li>
                                </ul>
                            @else
                                <ul class="list-inline float-right mb-0 mr-3">

                                    <li class="list-inline-item dropdown notification-list">
                                        <a class="nav-link dropdown-toggle arrow-none waves-effect nav-user" style="color: rgb(255, 255, 255)" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                            <img src="{{asset('/template/assets/images/users/avatar-1.jpg')}}" alt="user" class="rounded-circle img-thumbnail"> {{Auth::user()->name}}
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                                            <!-- item-->
                                            <div class="dropdown-item noti-title">
                                                <h5>Welcome</h5>
                                            </div>
                                            <a class="dropdown-item" href="#"><i class="mdi mdi-account-circle m-r-5 text-muted"></i> Profile</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#"><i class="mdi mdi-logout m-r-5 text-muted"></i> Logout</a>
                                        </div>
                                    </li>
                                </ul>
                            @endif

                            <ul class="list-inline menu-left mb-0">
                                <li class="float-left">
                                    <button class="button-menu-mobile open-left waves-light waves-effect">
                                        <i class="mdi mdi-menu"></i>
                                    </button>
                                </li>
                            </ul>

                            <div class="clearfix"></div>

                        </nav>

                    </div>
                    <!-- Top Bar End -->

                    <div class="page-content-wrapper ">

                        <div class="container-fluid">

                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="page-title-box">
                                        <div class="btn-group float-right">
                                            <ol class="breadcrumb hide-phone p-0 m-0">

                                                <li class="breadcrumb-item">@yield('page_awal')</li>
                                                <li class="breadcrumb-item active">@yield('page_aktif')</li>
                                            </ol>
                                        </div>
                                        <h4 class="page-title">@yield('page_title')</h4>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <!-- end page title end breadcrumb -->

                            @yield('conten')

                        </div><!-- container -->

                    </div> <!-- Page content Wrapper -->

                </div> <!-- content -->

                <footer class="footer">
                    © 2022 UPT PSTW PASURUAN
                </footer>

            </div>
            <!-- End Right content here -->

        </div>
        <!-- END wrapper -->


        <!-- jQuery  -->
        <script src="{{asset('/template/assets/js/jquery.min.js')}}"></script>
        <script src="{{asset('/template/assets/js/popper.min.js')}}"></script>
        <script src="{{asset('/template/assets/js/bootstrap-material-design.js')}}"></script>
        <script src="{{asset('/template/assets/js/modernizr.min.js')}}"></script>
        <script src="{{asset('/template/assets/js/detect.js')}}"></script>
        <script src="{{asset('/template/assets/js/fastclick.js')}}"></script>
        <script src="{{asset('/template/assets/js/jquery.slimscroll.js')}}"></script>
        <script src="{{asset('/template/assets/js/jquery.blockUI.js')}}"></script>
        <script src="{{asset('/template/assets/js/waves.js')}}"></script>
        <script src="{{asset('/template/assets/js/jquery.nicescroll.js')}}"></script>
        <script src="{{asset('/template/assets/js/jquery.scrollTo.min.js')}}"></script>

        <!-- App js -->
        <script src="{{asset('/template/assets/js/app.js')}}"></script>

        @yield('javascript')

    </body>
</html>
