<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="icon" href="<?= base_url; ?>/assets/dist/img/favicon.png" type="image/x-icon"/>
    <title>Perpustakaan | <?= $data['title']; ?></title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback" />
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="<?= base_url; ?>/assets/plugins/fontawesome-free/css/all.min.css" />
    <!-- DataTables -->
    <link rel="stylesheet" href="<?= base_url; ?>/assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="<?= base_url; ?>/assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="<?= base_url; ?>/assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <!-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.css"> -->
    <!-- Select2 -->
    <link rel="stylesheet" href="<?= base_url; ?>/assets/plugins/select2/css/select2.min.css">
    <link rel="stylesheet" href="<?= base_url; ?>/assets/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url; ?>/assets/dist/css/adminlte.min.css" />
    <!-- <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.min.css'> -->
  </head>
  <body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed" oncontextmenu="return false" onkeydown="return false;" onmousedown="return false;">
    <div class="wrapper">
      <!-- Preloader -->
      <!-- <div class="preloader flex-column justify-content-center align-items-center">
        <img class="animation__wobble" src="assets/dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60" />
      </div> -->

      <!-- Navbar -->
      <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
          </li>
          <li class="nav-item d-none d-sm-inline-block">
            <a href="<?= base_url; ?>/home" class="nav-link">Home</a>
          </li>
        </ul>

        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="#" data-toggle="modal" data-target="#logout"><i class="fas fa-sign-out-alt"></i> Logout</a>
          </li>
        </ul>
      </nav>
      <!-- /.navbar -->