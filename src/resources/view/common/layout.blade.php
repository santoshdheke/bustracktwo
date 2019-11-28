<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Ssgroup | Bus Tracking</title>

    <!-- Bootstrap -->
    <link href="{{ asset(config('bus.asset_path').'/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ asset(config('bus.asset_path').'/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{ asset(config('bus.asset_path').'/nprogress/nprogress.css') }}" rel="stylesheet">

@stack('css')

    <style>
        .has_input_error::placeholder{
            color: #a94442;
            opacity: 0.7;
        }
        .has_input_error{
            border-color: #a94442;
            color: #a94442;
        }
    </style>

<!-- Custom Theme Style -->
    <link href="{{ asset(config('bus.asset_path').'/build/css/custom.min.css') }}" rel="stylesheet">
</head>

<body class="nav-md">
<div class="container body">
    <div class="main_container">
        <div class="col-md-3 left_col">
            <div class="left_col scroll-view">
                <div class="navbar nav_title" style="border: 0;">
                    <a href="{{ url('/') }}" class="site_title"><i class="fa fa-paw"></i> <span>{{ config('app.project') }}</span></a>
                </div>

                <div class="clearfix"></div>

                <!-- menu profile quick info -->
                <div class="profile clearfix">
                    <div class="profile_pic">
                        <img class="img-circle profile_img"
                             src="{{ asset(config('image.dome')) }}"
                             alt="Avatar" title="Change the avatar">
                    </div>
                    <div class="profile_info">
                        <span>Welcome,</span>
                        {{-- <h2>{{ auth()->user()->name }}</h2> --}}
                    </div>
                    <div class="clearfix"></div>
                </div>
                <!-- /menu profile quick info -->

                <br/>

                <!-- sidebar menu -->
                <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                    <div class="menu_section">
                        <h3>General</h3>
                        <ul class="nav side-menu">
                            @include(config('app.app_sidebar') ?? 'bustracking::common.sidebar')
                        </ul>
                    </div>
                </div>
                <!-- /sidebar menu -->
            </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
            <div class="nav_menu">
                <nav>
                    <div class="nav toggle">
                        <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                    </div>

                    <ul class="nav navbar-nav navbar-right">
                        @include(config('app.app_top_bar') ?? 'bustracking::common.top_bar')
                    </ul>
                </nav>
            </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
            <div class="">
                @yield('content')
            </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
            <div class="pull-right">
                Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
            </div>
            <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
    </div>
</div>

<!-- jQuery -->
<script src="{{ asset(config('bus.asset_path').'/jquery/dist/jquery.min.js') }}"></script>
<!-- Bootstrap -->
<script src="{{ asset(config('bus.asset_path').'/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<!-- FastClick -->
<script src="{{ asset(config('bus.asset_path').'/fastclick/lib/fastclick.js') }}"></script>
<!-- NProgress -->
<script src="{{ asset(config('bus.asset_path').'/nprogress/nprogress.js') }}"></script>

@stack('js')
@include('bustracking::common.notify')
@include('bustracking::common.validation')

<script>
    $('.alert').fadeOut(7000);
</script>

<!-- Custom Theme Scripts -->
<script src="{{ asset(config('bus.asset_path').'/build/js/custom.min.js') }}"></script>
</body>
</html>
