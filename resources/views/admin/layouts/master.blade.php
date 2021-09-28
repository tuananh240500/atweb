<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>DarkSoul | @yield('title')</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="/vendor/plugins/fontawesome-free/css/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="/vendor/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/vendor/dist/css/adminlte.min.css">

  <link rel="stylesheet" href="/admin/css/style.css">
  @yield('css')

</head>
<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
  <div class="wrapper">

    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
      <img class="animation__wobble" src="/vendor/dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
    </div>

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-dark">
      @include('admin.partials.header')
    </nav>

    <!-- Sidebar -->
    @include('admin.partials.sidebar')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      @yield('content')
    </div>

    <!-- Footer -->
    @include('admin.partials.footer')
    
    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>

    <!-- Main Footer -->
    <footer class="main-footer"> </footer>
  </div>
  <!-- ./wrapper -->

  <!-- REQUIRED SCRIPTS -->
  <!-- jQuery -->
  <script src="/vendor/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap -->
  <script src="/vendor/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- overlayScrollbars -->
  <script src="/vendor/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
  <!-- AdminLTE App -->
  <script src="/vendor/dist/js/adminlte.js"></script>

  <!-- PAGE PLUGINS -->
  <!-- jQuery Mapael -->
  <script src="/vendor/plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
  <script src="/vendor/plugins/raphael/raphael.min.js"></script>
  <script src="/vendor/plugins/jquery-mapael/jquery.mapael.min.js"></script>
  <script src="/vendor/plugins/jquery-mapael/maps/usa_states.min.js"></script>
  <!-- ChartJS -->
  <script src="/vendor/plugins/chart.js/Chart.min.js"></script>

  <!-- AdminLTE for demo purposes -->
  <script src="/vendor/dist/js/demo.js"></script>
  <script charset="utf-8" src="/admin/js/main.js"></script>
  <!-- Summernote -->
  <script src="/vendor/plugins/summernote/summernote-bs4.min.js"></script>
  <script>
    $(document).ready(function() {
        $('#summernote').summernote();
    });
  </script>
  <!-- Bootstrap -->
  <script src="/vendor/dist/js/bootstrap.bundle.min.js"></script>
  

  @yield('modal')
  
  @yield('js')
  </body>
</html>
