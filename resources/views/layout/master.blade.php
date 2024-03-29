<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Dashboard</title>

  <style>
  tr > th {
    text-align: center;
    }

    td{
        text-align: center;
    }
    .main-sidebar{
      background:white !important;
    }
    .sidebar a{
      color: #5a5a5a !important;
    }
    .nav-item li {
      padding-left: 32px;
    }
    .img-circle{
        width: 3rem !important;
        height: 3rem !important;
        object-fit: cover !important;
    }
    .nav-link.active{
      color: white !important;
    }
    .border-r{
      border-right: 1px solid #e4e4e4;
    }
    .border-t{
      border-top: 1px solid #e4e4e4;
    }
    .nav-item i {
        font-size: 14px !important;
    }
    .nav-item {
        font-size: 14px;
    text-transform: lowercase;
    }
    .nav-treeview .nav-link.active{
      color: #5a5a5a !important;
      font-weight: bold;
    }
    .nav-item{
      text-transform: uppercase !important;
    }
    </style>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  {{-- <link rel="stylesheet" href="{{ asset('adminlte/plugins/fontawesome-free/css/all.min.css') }}"> --}}
  <link rel="stylesheet" href="https://kit-pro.fontawesome.com/releases/v5.12.1/css/pro.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{ asset('adminlte/https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css') }}">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="{{ asset('adminlte/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{ asset('adminlte/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{ asset('adminlte/plugins/jqvmap/jqvmap.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('adminlte/dist/css/adminlte.min.css') }}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{ asset('plugins/daterangepicker/daterangepicker.css') }}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{ asset('plugins/summernote/summernote-bs4.min.css') }}">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
      <!-- SweetAlert2 -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

    @yield('sidebar')
    @yield('wrap')
    @yield('content')
    @yield('endwarp')




<!-- jQuery -->
<script src="{{ asset('adminlte/plugins/jquery/jquery.min.js') }}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ asset('adminlte/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{ asset('adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- ChartJS -->
<script src="{{ asset('adminlte/plugins/chart.js/Chart.min.js') }}"></script>
<!-- Sparkline -->
<script src="{{ asset('adminlte/plugins/sparklines/sparkline.js') }}"></script>
<!-- JQVMap -->
<script src="{{ asset('adminlte/plugins/jqvmap/jquery.vmap.min.js') }}"></script>
<script src="{{ asset('adminlte/plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>
<!-- jQuery Knob Chart -->
<script src="{{ asset('adminlte/plugins/jquery-knob/jquery.knob.min.js') }}"></script>
<!-- daterangepicker -->
<script src="{{ asset('adminlte/plugins/moment/moment.min.js') }}"></script>
<script src="{{ asset('adminlte/plugins/daterangepicker/daterangepicker.js') }}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{ asset('adminlte/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
<!-- Summernote -->
<script src="{{ asset('adminlte/plugins/summernote/summernote-bs4.min.js') }}"></script>
<!-- overlayScrollbars -->
<script src="{{ asset('adminlte/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('adminlte/dist/js/adminlte.js') }}"></script>
<script>
    $('.delete-confirm').on('click', function (event) {
       event.preventDefault();
       const url = $(this).attr('href');
       swal({
           title: 'Kamu Yakin?',
           text: 'Data Ini akan dihapus',
           icon: 'warning',
           buttons: ["Cancel", "Yes!"],
           }).then(function(value) {
           if (value) {
           window.location.href = url;
         }
       });
      });
 </script>

<script>
    $('.logout-confirm').on('click', function (event) {
       event.preventDefault();
       const url = $(this).attr('href');
       swal({
           title: 'kamu yakin?',
           text: 'anda Akan Logout',
           icon: 'warning',
           buttons: ["Cancel", "Yes!"],
           }).then(function(value) {
           if (value) {
           window.location.href = url;
         }
       });
      });
 </script>

<!-- AdminLTE for demo purposes -->
{{-- <script src="{{ asset('adminlte/dist/js/demo.js') }}"></script> --}}
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
{{-- <script src="{{ asset('adminlte/dist/js/pages/dashboard.js') }}"></script> --}}
@include('sweetalert::alert')




</body>
</html>
