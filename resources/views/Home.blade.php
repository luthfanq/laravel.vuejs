<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
    @include('template.head')
    <title>upanskuy</title>
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper" id="app">

  <!-- Navbar -->
  @include('template.navbar');
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  @include('template.left-sidebar'); 

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
  
      <router-view></router-view> 

    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
 @include('template.footer');
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

 @include('template.script');
  
</body>
</html>
