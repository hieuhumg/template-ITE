<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="images/favicon.ico" type="image/ico" />

    <title>Gentelella Alela! | </title>

    <!-- Bootstrap -->
    <link href="{{asset('gentelella/vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{asset('gentelella/vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{asset('gentelella/vendors/nprogress/nprogress.css')}}" rel="stylesheet">
    <!-- iCheck -->
    <link href="{{asset('gentelella/vendors/iCheck/skins/flat/green.css')}}" rel="stylesheet">

    <!-- bootstrap-progressbar -->
    <link href="{{asset('gentelella/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css')}}"
        rel="stylesheet">
    <!-- JQVMap -->
    <link href="{{asset('gentelella/vendors/jqvmap/dist/jqvmap.min.css')}}" rel="stylesheet" />
    <!-- bootstrap-daterangepicker -->
    <link href="{{asset('gentelella/vendors/bootstrap-daterangepicker/daterangepicker.css')}}" rel="stylesheet">
    <link href="{{asset('gentelella/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('gentelella/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css')}}"
        rel="stylesheet">
    <link href="{{asset('gentelella/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css')}}"
        rel="stylesheet">
    <link href="{{asset('gentelella/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css')}}"
        rel="stylesheet">
    <link href="{{asset('gentelella/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css')}}"
        rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Custom Theme Style -->
    <link href="{{asset('gentelella/build/css/custom.min.css')}}" rel="stylesheet">
    <link href="{{asset('gentelella/build/css/style-privated.css')}}" rel="stylesheet">

    <base href="{{asset('')}}">
</head>

<body class="nav-md">
    <div class="container body">
        <div class="main_container">
            <div class="col-md-3 left_col">
                @include('admin.layouts.contents.left_col')
            </div>

            <!-- top navigation -->
            <div class="top_nav">
                @include('admin.layouts.contents.nav_menu')
            </div>
            <!-- /top navigation -->

            <!-- page content -->
            <div class="right_col" role="main">
                <!-- top tiles -->
                @yield('content')
            </div>
            <!-- /page content -->

            <!-- footer content -->
            <footer>
                <div class="clearfix"></div>
            </footer>
            <!-- /footer content -->
        </div>
    </div>

    <!-- jQuery -->
    <script src="{{asset('gentelella/vendors/jquery/dist/jquery.min.js')}}"></script>
    <!-- Bootstrap -->
    <script src="{{asset('gentelella/vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <!-- FastClick -->
    <script src="{{asset('gentelella/vendors/fastclick/lib/fastclick.js')}}"></script>
    <!-- NProgress -->
    <script src="{{asset('gentelella/vendors/nprogress/nprogress.js')}}"></script>
    <!-- Chart.js -->
    <script src="{{asset('gentelella/vendors/Chart.js/dist/Chart.min.js')}}"></script>
    <!-- gauge.js -->
    <script src="{{asset('gentelella/vendors/gauge.js/dist/gauge.min.js')}}"></script>
    <!-- bootstrap-progressbar -->
    <script src="{{asset('gentelella/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js')}}"></script>
    <!-- iCheck -->
    <script src="{{asset('gentelella/vendors/iCheck/icheck.min.js')}}"></script>
    <!-- Skycons -->
    <script src="{{asset('gentelella/vendors/skycons/skycons.js')}}"></script>
    <!-- Flot -->
    <script src="{{asset('gentelella/vendors/Flot/jquery.flot.js')}}"></script>
    <script src="{{asset('gentelella/vendors/Flot/jquery.flot.pie.js')}}"></script>
    <script src="{{asset('gentelella/vendors/Flot/jquery.flot.time.js')}}"></script>
    <script src="{{asset('gentelella/vendors/Flot/jquery.flot.stack.js')}}"></script>
    <script src="{{asset('gentelella/vendors/Flot/jquery.flot.resize.js')}}"></script>
    <!-- Flot plugins -->
    <script src="{{asset('gentelella/vendors/flot.orderbars/js/jquery.flot.orderBars.js')}}"></script>
    <script src="{{asset('gentelella/vendors/flot-spline/js/jquery.flot.spline.min.js')}}"></script>
    <script src="{{asset('gentelella/vendors/flot.curvedlines/curvedLines.js')}}"></script>
    <!-- DateJS -->
    <script src="{{asset('gentelella/vendors/DateJS/build/date.js')}}"></script>
    <!-- JQVMap -->
    <script src="{{asset('gentelella/vendors/jqvmap/dist/jquery.vmap.js')}}"></script>
    <script src="{{asset('gentelella/vendors/jqvmap/dist/maps/jquery.vmap.world.js')}}"></script>
    <script src="{{asset('gentelella/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js')}}"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="{{asset('gentelella/vendors/moment/min/moment.min.js')}}"></script>
    <script src="{{asset('gentelella/vendors/bootstrap-daterangepicker/daterangepicker.js')}}"></script>

    <!-- Custom Theme Scripts -->
    <script src="{{asset('gentelella/build/js/custom.min.js')}}"></script>
    <link rel="stylesheet prefetch"
        href="http://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.css">
    <script src="http://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>
    <script src="{{asset('gentelella/build/js/custom-privated.js')}}"></script>
    <script src="{{asset('gentelella/vendors/datatables.net/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('gentelella/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
    <script src="{{asset('gentelella/vendors/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('gentelella/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js')}}"></script>
    <script src="{{asset('gentelella/vendors/datatables.net-buttons/js/buttons.flash.min.js')}}"></script>
    <script src="{{asset('gentelella/vendors/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
    <script src="{{asset('gentelella/vendors/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
    <script src="{{asset('gentelella/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js')}}"></script>
    <script src="{{asset('gentelella/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js')}}"></script>
    <script src="{{asset('gentelella/vendors/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('gentelella/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js')}}"></script>
    <script src="{{asset('gentelella/vendors/datatables.net-scroller/js/dataTables.scroller.min.js')}}"></script>
    <script src="{{asset('gentelella/vendors/jszip/dist/jszip.min.js')}}"></script>
    <script src="{{asset('gentelella/vendors/pdfmake/build/pdfmake.min.js')}}"></script>
    <script src="{{asset('gentelella/vendors/pdfmake/build/vfs_fonts.js')}}"></script>

</body>

</html>
