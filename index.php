<?php
?>
<!DOCTYPE html>
<html lang="en">
     
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>HALAMAN AWAL | BERANDA</title>

    <style>
    .bg-main {
      background-image: url('photo1.png'); /* Pastikan path gambar sesuai */
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
      height: 100vh; /* Tinggi halaman sesuai kebutuhan */
      display: flex;
      justify-content: center;
      align-items: center;
      text-align: center;
      color: white; /* Warna teks */
    }
    .overlay {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(0, 0, 0, 0.5); /* Opacity overlay */
    }
  </style>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="admin/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="admin/dist/css/adminlte.min.css">
</head>

<body class="hold-transition layout-top-nav">
    <div class="wrapper">

        <!-- Content Wrapper. Contains page content -->
<body>
  <nav class="navbar navbar-expand-md bg-black sticky-top border-bottom" data-bs-theme="black"></nav>
  <main class="bg-main position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center">
    <div class="overlay"></div> <!-- Overlay untuk efek gelap -->
    <div class="col-md-6 p-lg-5 mx-auto my-5">
      <h1 class="display-4 fw-bold">
        <b>SELAMAT DATANG</b>
      </h1>
      <h2 class="fw-normal text-white mb-3">
        Di Website SPPD Kampung Utaurano
      </h2>
      <div class="d-grid gap-2 d-sm-flex justify-content-sm-center mb-5">
    <!--Koneksi-->
      <ul class="navbar-nav">
        <li class="nav-item">
        <a href="admin/_login.php" class="btn btn-outline-secondary text-white btn-lg px-3"><b>MASUK</a>
        </li>
      </ul>
    <!--/Koneksi-->
      </div>
    </div>
  </main>
</body>
        <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->

    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    <script src="admin/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="admin/dist/js/adminlte.min.js"></script>
</body>

</html>