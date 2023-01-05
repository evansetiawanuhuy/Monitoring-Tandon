<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>@yield('title')</title>
    <meta content="Responsive admin theme build on top of Bootstrap 4" name="description" />
    <meta content="Themesdesign" name="author" />
    <link rel="shortcut icon" href="{{asset('stexo/dark/assets/images/favicon.ico')}}">

    <!--Chartist Chart CSS -->
    <link rel="stylesheet" href="{{asset('stexo/plugins/chartist/css/chartist.min.css')}}">

    <!-- DataTables -->
    <link href="{{asset('stexo/plugins/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('stexo/plugins/datatables/buttons.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />

    <!-- Responsive datatable examples -->
    <link href="{{asset('stexo/plugins/datatables/responsive.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />

    <link href="{{asset('stexo/dark/assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('stexo/dark/assets/css/metismenu.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('stexo/dark/assets/css/icons.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('stexo/dark/assets/css/style.css')}}" rel="stylesheet" type="text/css">

</head>

<body>

    <!-- Begin page -->
    <div id="wrapper">

        <!-- Top Bar Start -->
        <div class="topbar">

            <!-- LOGO -->
            <div class="topbar-left">
                <a href="index.html" class="logo">
                    <span class="logo-light">
                            <i class="mdi mdi-camera-control"></i> MONITORING
                        </span>
                    <span class="logo-sm">
                            <i class="mdi mdi-camera-control"></i>
                        </span>
                </a>
            </div>

            <nav class="navbar-custom">
                <ul class="navbar-right list-inline float-right mb-0">

                    <!-- full screen -->
                    <li class="dropdown notification-list list-inline-item d-none d-md-inline-block">
                        <a class="nav-link waves-effect" href="#" id="btn-fullscreen">
                            <i class="mdi mdi-arrow-expand-all noti-icon"></i>
                        </a>
                    </li>

                    <!-- notification -->
                    {{-- <li class="dropdown notification-list list-inline-item">
                        <a class="nav-link dropdown-toggle arrow-none waves-effect" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            <i class="mdi mdi-bell-outline noti-icon"></i>
                            <span class="badge badge-pill badge-danger noti-icon-badge">3</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated dropdown-menu-lg px-1">
                            <!-- item-->
                            <h6 class="dropdown-item-text">
                                    Notifications
                                </h6>
                            <div class="slimscroll notification-item-list">
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item active">
                                    <div class="notify-icon bg-success"><i class="mdi mdi-cart-outline"></i></div>
                                    <p class="notify-details"><b>Your order is placed</b><span class="text-muted">Dummy text of the printing and typesetting industry.</span></p>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-danger"><i class="mdi mdi-message-text-outline"></i></div>
                                    <p class="notify-details"><b>New Message received</b><span class="text-muted">You have 87 unread messages</span></p>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-info"><i class="mdi mdi-filter-outline"></i></div>
                                    <p class="notify-details"><b>Your item is shipped</b><span class="text-muted">It is a long established fact that a reader will</span></p>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-success"><i class="mdi mdi-message-text-outline"></i></div>
                                    <p class="notify-details"><b>New Message received</b><span class="text-muted">You have 87 unread messages</span></p>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-warning"><i class="mdi mdi-cart-outline"></i></div>
                                    <p class="notify-details"><b>Your order is placed</b><span class="text-muted">Dummy text of the printing and typesetting industry.</span></p>
                                </a>

                            </div>
                            <!-- All-->
                            <a href="javascript:void(0);" class="dropdown-item text-center notify-all text-primary">
                                    View all <i class="fi-arrow-right"></i>
                                </a>
                        </div>
                    </li> --}}

                    <li class="dropdown notification-list list-inline-item">
                        <div class="dropdown notification-list nav-pro-img">
                            <a class="dropdown-toggle nav-link arrow-none nav-user" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <img src="{{asset('stexo/dark/assets/images/users/user-4.jpg')}}" alt="user" class="rounded-circle">
                            </a>
                            <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                                <!-- item-->
                                <a class="dropdown-item d-block" href="#"><i class="mdi mdi-account-circle"></i>Hello, {{Auth::user()->name}}!</a>
                                {{-- <a class="dropdown-item d-block" href="#"><span class="badge badge-success float-right">11</span><i class="mdi mdi-settings"></i> Settings</a> --}}
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item text-danger" href="{{url('/logout')}}"><i class="mdi mdi-power text-danger"></i> Logout</a>
                            </div>
                        </div>
                    </li>

                </ul>

                <ul class="list-inline menu-left mb-0">
                    <li class="float-left">
                        <button class="button-menu-mobile open-left waves-effect">
                            <i class="mdi mdi-menu"></i>
                        </button>
                    </li>
                    <li class="d-none d-md-inline-block">
                        <form role="search" class="app-search">
                            <div class="form-group mb-0">
                                <input type="text" class="form-control" placeholder="Search..">
                                <button type="submit"><i class="fa fa-search"></i></button>
                            </div>
                        </form>
                    </li>
                </ul>

            </nav>

        </div>
        <!-- Top Bar End -->

        <!-- ========== Left Sidebar Start ========== -->
        <div class="left side-menu">
            <div class="slimscroll-menu" id="remove-scroll">

                <!--- Sidemenu -->
                <div id="sidebar-menu">
                    <!-- Left Menu Start -->
                    <ul class="metismenu" id="side-menu">
                        <li class="menu-title">Menu</li>
                        <li>
                            <a href="{{url('admin')}}" class="waves-effect">
                                <i class="icon-accelerator"></i> <span> Dashboard </span>
                            </a>
                        </li>
                        <li>
                            <a href="{{url('/tandon')}}" class="waves-effect">
                                <i class="icon-smartphone"></i> <span> Tandon </span>
                            </a>
                        </li>
                        <li>
                            <a href="{{url('data')}}" class="waves-effect">
                                <i class="icon-rotate"></i> <span> Data Log </span>
                            </a>
                        </li>
                        {{-- <li>
                            <a href="{{url('chart-data')}}" class="waves-effect">
                                <i class="icon-graph"></i> <span> Chart Data Log </span>
                            </a>
                        </li> --}}
                        <li>
                            <a href="{{url('user')}}" class="waves-effect">
                                <i class="icon-profile"></i> <span> Data User </span>
                            </a>
                        </li>

                    </ul>

                </div>
                <!-- Sidebar -->
                <div class="clearfix"></div>

            </div>
            <!-- Sidebar -left -->

        </div>
        <!-- Left Sidebar End -->

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="content-page">
            <!-- Start content -->
            @yield('content')

            <footer class="footer">
                © 2022 Monitoring Tandon <span class="d-none d-sm-inline-block"> - Modified with <i class="mdi mdi-heart text-danger"></i> by TMJ 2020</span>.
            </footer>

        </div>
        <!-- ============================================================== -->
        <!-- End Right content here -->
        <!-- ============================================================== -->

    </div>
    <!-- END wrapper -->

    <!-- jQuery  -->
    <script src="{{asset('stexo/dark/assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('stexo/dark/assets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('stexo/dark/assets/js/metismenu.min.js')}}"></script>
    <script src="{{asset('stexo/dark/assets/js/jquery.slimscroll.js')}}"></script>
    <script src="{{asset('stexo/dark/assets/js/waves.min.js')}}"></script>

    <!--Chartist Chart-->
    <script src="{{asset('stexo/plugins/chartist/js/chartist.min.js')}}"></script>
    <script src="{{asset('stexo/plugins/chartist/js/chartist-plugin-tooltip.min.js')}}"></script>
    {{-- <script src="{{asset('stexo/dark/assets/pages/chartist.init.js')}}"></script> --}}

    <script>
        setInterval(function(){
            $(document).ready(function(){
            $.ajax("/log", {
                success:function(response) {
                    // console.log(response.log2);
                    // console.log(response.log3);
                    var data1 = response.log1;
                    console.log(response.log1);
                    var data2 = response.log2;
                    var data3 = response.log3;
                    new Chartist.Line("#simple-line-chart", {
                            labels: {!!$time!!},
                            series: [
                                data1,
                                data2,
                                data3,
                            ]
                        }, {
                            fullWidth: true,
                            chartPadding: {
                                right: 40
                            },
                            plugins: [
                                Chartist.plugins.tooltip()
                            ]
                        });
                    }
                });
            });
        }, 2000);
    </script>

    <!-- Required datatable js -->
    <script src="{{asset('stexo/plugins/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('stexo/plugins/datatables/dataTables.bootstrap4.min.js')}}"></script>

    <!-- Buttons examples -->
    <script src="{{asset('stexo/plugins/datatables/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('stexo/plugins/datatables/buttons.bootstrap4.min.js')}}"></script>
    <script src="{{asset('stexo/plugins/datatables/jszip.min.js')}}"></script>
    <script src="{{asset('stexo/plugins/datatables/pdfmake.min.js')}}"></script>
    <script src="{{asset('stexo/plugins/datatables/vfs_fonts.js')}}"></script>
    <script src="{{asset('stexo/plugins/datatables/buttons.html5.min.js')}}"></script>
    <script src="{{asset('stexo/plugins/datatables/buttons.print.min.js')}}"></script>
    <script src="{{asset('stexo/plugins/datatables/buttons.colVis.min.js')}}"></script>

    <!-- Responsive examples -->
    <script src="{{asset('stexo/plugins/datatables/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('stexo/plugins/datatables/responsive.bootstrap4.min.js')}}"></script>

    <!-- Datatable init js -->
    <script src="{{asset('stexo/dark/assets/pages/datatables.init.js')}}"></script>

    <!-- App js -->
    <script src="{{asset('stexo/dark/assets/js/app.js')}}"></script>

</body>

</html>
