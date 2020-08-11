<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Laravel</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="shortcut icon" href="{{asset('assets/images/favicon.ico')}}">

    <!-- jvectormap -->
    <link href="{{ asset('assets/plugins/jvectormap/jquery-jvectormap-2.0.2.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/plugins/fullcalendar/vanillaCalendar.css')}}" rel="stylesheet" type="text/css"  />

    <link href="{{ asset('assets/plugins/morris/morris.css')}}" rel="stylesheet">

    <link href="{{ asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/icons.css')}}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/style.css')}}" rel="stylesheet" type="text/css">
    
</head>
<body class="fixed-left">
<div id="preloader"><div id="status"><div class="spinner"></div></div></div>
<div id="wrapper">
    @include('partials.header')

    <div class="content-page">
                <!-- Start content -->
                <div class="content">
                     <!-- Top Bar Start -->
                     <div class="topbar">

                        <nav class="navbar-custom">

                            <ul class="list-inline float-right mb-0 logoutUl">
                                
                                <li class="list-inline-item dropdown notification-list">
                                    <span class="menu-title"> {{ Auth::user()->nom }} {{ Auth::user()->prenom }}</span>
                                </li>
                                
                                <li class="logoutButton btn-danger"> <a class="" href="{{ route('logout') }}" style="color:white"><i class="mdi mdi-logout m-r-5" style="color:white"></i>Logout</a> </li>
                                
                            </ul>

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

                        <div class="page-content-wrapper">
                            @yield('content')
                        </div>
                </div>

                <footer class="footer">
                    © 2019 Zoter by Mannatthemes.
                </footer>

    </div>

    

</div>


</body>

 <!-- jQuery  -->
        <script src="{{ asset('assets/js/jquery.min.js')}}"></script>
        <script src="{{ asset('assets/js/popper.min.js')}}"></script>
        <script src="{{ asset('assets/js/bootstrap.min.js')}}"></script>
        <script src="{{ asset('assets/js/modernizr.min.js')}}"></script>
        <script src="{{ asset('assets/js/detect.js')}}"></script>
        <script src="{{ asset('assets/js/fastclick.js')}}"></script>
        <script src="{{ asset('assets/js/jquery.blockUI.js')}}"></script>
        <script src="{{ asset('assets/js/waves.js')}}"></script>
        <script src="{{ asset('assets/js/jquery.nicescroll.js')}}"></script>

         <!-- KNOB JS -->
         <script src="{{ asset('assets/plugins/jquery-knob/excanvas.js')}}"></script>
         <script src="{{ asset('assets/plugins/jquery-knob/jquery.knob.js')}}"></script> 

        

        <!-- App js -->
        <script src="{{ asset('assets/js/app.js')}}"></script>
        <script>
            $(function() {
                $(".knob").knob();
            });
        </script>

</html>
