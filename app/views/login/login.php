<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="icon" href="<?= base_url; ?>/assets/dist/img/favicon.png" type="image/x-icon"/>
  <title>Perpustakaan | Login</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url; ?>/assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?= base_url; ?>/assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url; ?>/assets/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition login-page" style="background-image: url('<?= base_url; ?>/assets/dist/img/background-1.jpg');">
<div class="login-box">
  <!-- <div class="login-logo">
    <b>ADMIN PERPUSTAKAAN</b>
  </div> -->
  <!-- /.login-logo -->
  <div class="row">
    <div class="col-sm-12">
      <?php
        Flasher::Message();
      ?>
    </div>
  </div>
  <div class="card">
    <div class="card-header text-center">
      <h3><b>ADMIN PERPUSTAKAAN</b></h3>
    </div>
    <div class="card-body login-card-body">
      <p class="login-box-msg">Silahkan login terlebih dahulu.</p>
      <form action="<?= base_url; ?>/login/prosesLogin" method="POST">
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="ketikkan username.." name="username" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="ketikkan password.." name="password" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <!-- /.col -->
          <div class="col-12">
            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="<?= base_url; ?>/assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?= base_url; ?>/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url; ?>/assets/dist/js/adminlte.min.js"></script>


</body>
</html>
