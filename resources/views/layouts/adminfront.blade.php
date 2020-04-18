<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{ env('APP_NAME') }} - @yield('title')</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="robots" content="noindex, nofollow">
    <meta name="description" content="Proyecto de compras en Laravel"/>
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/mdb.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/we.css')}}" rel="stylesheet">
    <link href="{{asset('iconfont/material-icons.css')}}" rel="stylesheet">
    <!--     Fonts and icons     -->
    <link href="{{asset('css/all.min.css')}}" rel="stylesheet" />
    <link href="{{asset('css/material/google-roboto-300-700.css')}}" rel="stylesheet" />
    <link href="iconfont/material-icons.css" rel="stylesheet">
    @stack('styles')
  </head>

  <body class="hold-transition login-page" id="body">
    
    @yield('content')
 

        <!-- REQUIRED JS SCRIPTS -->
    <!--   Core JS Files   -->
    <script type="text/javascript" src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/popper.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/mdb.min.js')}}"></script>
    <script src="{{asset('js/material/perfect-scrollbar.jquery.min.js')}}" type="text/javascript"></script>
    <!-- Forms Validations Plugin -->
    <script src="{{asset('js/material/jquery.validate.min.js')}}"></script>
    <!--  Plugin for Date Time Picker and Full Calendar Plugin-->
    <script src="{{asset('js/material/moment.min.js')}}"></script>
    <!--  Charts Plugin -->
    <script src="{{asset('js/material/chartist.min.js')}}"></script>
    <!--  Plugin for the Wizard -->
    <script src="{{asset('js/material/jquery.bootstrap-wizard.js')}}"></script>
    <!--  Notifications Plugin    -->
    <script src="{{asset('js/material/bootstrap-notify.js')}}"></script>
    <!--   Sharrre Library    -->
    <script src="{{asset('js/material/jquery.sharrre.js')}}"></script>
    <!-- DateTimePicker Plugin -->
    <script src="{{asset('js/material/bootstrap-datetimepicker.js')}}"></script>
    <!-- Vector Map plugin -->
    <script src="{{asset('js/material/jquery-jvectormap.js')}}"></script>
    <!-- Sliders Plugin -->
    <script src="{{asset('js/material/nouislider.min.js')}}"></script>
    <!--  Google Maps Plugin    -->
    <!--<script src="https://maps.googleapis.com/maps/api/js"></script>-->
    <!-- Select Plugin -->
    <script src="{{asset('js/material/jquery.select-bootstrap.js')}}"></script>
    <!--  DataTables.net Plugin    -->
    <script src="{{asset('js/material/jquery.datatables.js')}}"></script>
    
    <script src="{{asset('js/material/jasny-bootstrap.min.js')}}"></script>
    <!--  Full Calendar Plugin    -->
    <script src="{{asset('js/material/fullcalendar.min.js')}}"></script>
    <!-- TagsInput Plugin -->
    <script src="{{asset('js/material/jquery.tagsinput.js')}}"></script>
    <!-- Material Dashboard javascript methods -->
    <script src="{{asset('js/material/material-dashboard.js')}}"></script>
    @stack('scripts')


  </body>
</html>
