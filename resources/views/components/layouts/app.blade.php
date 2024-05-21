<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? 'Carenderya' }}</title>

        <!-- Google Font: Source Sans Pro -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
        <!-- Font Awesome Icons -->
        <link rel="stylesheet" href="{{asset("plugins/fontawesome-free/css/all.min.css")}}">
        <!-- Theme style -->
        <link rel="stylesheet" href="{{asset("dist/css/adminlte.min.css")}}">
    </head>
    <body class="hold-transition layout-top-nav">
        <div class="wrapper">
          @include('components.layouts.navbar')

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                {{ $slot }}
            </div>

            <!-- Control Sidebar -->
            <aside class="control-sidebar control-sidebar-dark">
                <!-- Control sidebar content goes here -->
            </aside>
            <!-- /.control-sidebar -->

            <!-- Main Footer -->
            <footer class="main-footer">
                <!-- To the right -->
                <div class="float-right d-none d-sm-inline">
                    Anything you want
                </div>
                <!-- Default to the left -->
                <strong>Copyright &copy; <?php echo date("Y")?>.</strong> All rights reserved.
            </footer>
        </div>
        <!-- ./wrapper -->

        <!-- REQUIRED SCRIPTS -->

        <!-- jQuery -->
        <script src="{{asset("plugins/jquery/jquery.min.js")}}"></script>
        <!-- Bootstrap 4 -->
        <script src="{{asset("plugins/bootstrap/js/bootstrap.bundle.min.js")}}"></script>
        <!-- AdminLTE App -->
        <script src="{{asset("dist/js/adminlte.min.js")}}"></script>
    </body>
</html>
