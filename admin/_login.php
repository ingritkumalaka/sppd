
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Masuk</title>

  <?php include('_part/_referensi.php'); ?>
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo btn btn-success btn-block">
    <b>SPPD UTAURANO</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="btn btn-light btn-block">
        <b>
          SILAKAN LOGIN
        </b>
      </p>

      <form action="_login_proses.php" method="POST">
        <div class="input-group mb-3">
          <input type="text" name="akun" class="form-control" placeholder="Akun">
        </div>
        <div class="input-group mb-3">
          <input type="password" name="sandi" class="form-control" placeholder="Sandi">
        </div>
        <div class="row">
          <div class="col-8">
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-success btn-block">Login</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <div class="social-auth-links text-center mb-3">
        <p>ATAU</p>
        <a href="index.php" class="btn btn-block btn-warning">
          Ke Halaman Awal
        </a>
        <a href="../index.php" class="btn btn-block btn-success">
          Ke Tampilan Beranda
        </a>
      </div>
      <!-- /.social-auth-links -->

    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<?php include('_part/_script.php'); ?>
</body>
</html>
