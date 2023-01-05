<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>Monitoring Tandon</title>
        <meta content="Responsive admin theme build on top of Bootstrap 4" name="description" />
        <meta content="Themesdesign" name="author" />
        <link rel="shortcut icon" href="{{asset('stexo/dark/assets/images/favicon.ico')}}">

        <link href="{{asset('stexo/dark/assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('stexo/dark/assets/css/metismenu.min.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('stexo/dark/assets/css/icons.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('stexo/dark/assets/css/style.css')}}" rel="stylesheet" type="text/css">

    </head>

    <body>

        <!-- Begin page -->
        <div class="accountbg"></div>
        <div class="home-btn d-none d-sm-block">
                <a href="/" class="text-white"><i class="fas fa-home h2"></i></a>
            </div>
        <div class="wrapper-page">
                <div class="card card-pages shadow-none">

                    <div class="card-body">
                        <div class="text-center m-t-0 m-b-15">
                                <a href="/" class="logo logo-admin"><img src="{{asset('stexo/dark/assets/images/logo-light.png')}}" alt="" height="24"></a>
                        </div>
                        <h5 class="font-18 text-center">Sign in</h5>

                        <form class="form-horizontal m-t-30" action="/proses_login" method="POST">
                            @csrf
                            <div class="form-group">
                                <div class="col-12">
                                        <label>Email</label>
                                    <input class="form-control" name="email" type="email" required="" placeholder="Email">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-12">
                                        <label>Password</label>
                                    <input class="form-control" name="password" type="password" required="" placeholder="Password">
                                </div>
                            </div>

                            <div class="form-group text-center m-t-20">
                                <div class="col-12">
                                    <button class="btn btn-primary btn-block btn-lg waves-effect waves-light" type="submit">Log In</button>
                                </div>
                            </div>

                            <div class="form-group row m-t-30 m-b-0">
                                <div class="col-sm-5 text-right">
                                    <a href="/register" class="text-muted">Create an account</a>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        <!-- END wrapper -->

        <!-- jQuery  -->
        <script src="{{asset('stexo/dark/assets/js/jquery.min.js')}}"></script>
        <script src="{{asset('stexo/dark/assets/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('stexo/dark/assets/js/metismenu.min.js')}}"></script>
        <script src="{{asset('stexo/dark/assets/js/jquery.slimscroll.js')}}"></script>
        <script src="{{asset('stexo/dark/assets/js/waves.min.js')}}"></script>

        <!-- App js -->
        <script src="{{asset('stexo/dark/assets/js/app.js')}}"></script>

    </body>

</html>
