<?php
session_start();

if (!isset($_SESSION['login'])) {
  header("location: _login.php");
  exit();
}

//Konfigurasi Halaman
$_halaman_judul_tab = 'HALAMAN AWAL SPPD UTAURANO';
$_halaman_judul_card = 'HALAMAN AWAL';
$_halaman_footer_card = 'SURAT PERINTAH PERJALANAN DINAS (SPPD) KAMPUNG UTAURANO | KEC. TABUKAN UTARA | KAB. KEPULAUAN SANGIHE';


?>

<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php echo $_halaman_judul_tab; ?></title>
  <?php include('_part/_referensi.php'); ?>
</head>

<body class="hold-transition sidebar-mini">
  <!-- Site wrapper -->
  <div class="wrapper">
    <!-- Navbar -->
    <?php include('_part/_navbar.php'); ?>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <?php include('_part/_sidebar.php'); ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
            
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>

      <!-- Main content -->
      <section class="content">

        <!-- Default box -->
        <div class="card">
          <div class="card-header">
            <h1 class="card-title"><b><?php echo $_halaman_judul_card; ?></b></h1>
          </div>
          <div class="card-body">

            <!-- ISI KONTEN -->

<svg xmlns="http://www.w3.org/2000/svg" class="d-none">
  <symbol id="arrow-right-circle" viewBox="0 0 16 16">
    <path d="M8 0a8 8 0 1 1 0 16A8 8 0 0 1 8 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z"/>
  </symbol>
</svg>

<div class="col-lg-20 mx-auto p-4 py-md-20">

  <main>
    <img src="../admin/dist/img/utaurano/Logo Sangihe.jpeg" alt="" width="80" height="75">
    <h1 class="text-body-emphasis">WEBSITE SPPD KAMPUNG UTAURANO</h1>
    <p class="fs-5 col-md-8">
      Selamat Datang Di Website Surat Perintah Perjalanan Dinas Kampung Utaurano !
    </p>

    <hr class="col-5 col-md-10 mb-10">

  <div class="container col-xxl-8 px-1 py-10">
    <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
      <div class="col-10 col-sm-8 col-lg-6">
        <img src="../admin/dist/img/utaurano/ikan3.jpg" class="d-block mx-lg-auto img-fluid" alt="Utaurano" width="400" height="200" loading="lazy">
      </div>
      <div class="col-lg-6">
        <h1 class="text-body-emphasis">SEJARAH SINGKAT TERBENTUKNYA KAMPUNG UTAURANO</h1>
        <p class="fs-5 col-md-20">
        Kira-kira abad ke-18 dataran rendah yang diapit oleh Sungai Manemba dan sekarang disebut juga Sungai Utaurano, dengan sungai Kaengbatu. Di tempat pertemuan kedua sungai itu, tertumpuk batu-batuan, pasir, serta lumpur yang dibawah kedua sungai itu, merupakan sebuah pagar atau empang yang tebal dan tinggi. Akibatnya air ditempat itu tergenang dan lama kelamaan membentuk sebuah danau. Bagian udik dari danau itu dinamakan Utaurano, dan bagian hilir dimana empang itu dinamai Tolendano, dan bagian yang kering disekitar Tolendano disebut Moade.
        </p>
        <p class="fs-5 col-md-20">
        Kata Utaurano terdiri dari dua kata, yaitu kata Uta yang artinya bagian atas (dalam bahasa sangir Uta, sedangkan bahasa indonesia disebut rambut), dan kata Rano yang berarti Danau. Jadi Utaurano dapat diartikan sebagai bagian atas danau.
        </p>
      </div>
    </div>
  </div>
    <div>
      <hr class="col-3 col-md-7 mb-1">
      <div class="px-3 pt-4 my-4 text-center">
      <h1 class="text-body-emphasis">ADMINISTRASI SURAT</h1>
    </div>
    <div class="row g-5">
      <div class="col-md-6">
        <h2 class="text-body-emphasis">Surat Perintah Perjalanan Dinas</h2>
        <p>Surat Perintah Perjalanan Dinas atau SPPD merupakan surat perintah kepada Pejabat Negara, Pegawai Negeri, Pegawai Tidak Tetap serta Pihak Lain untuk melaksanakan Perjalanan Dinas.</p>
        <p>Data yang diperlukan setelah melakukan perjalanan dinas :</p>
        <ul class="list-unstyled ps-0">
          <li>
              <svg class="bi" width="16" height="16"><use xlink:href="#arrow-right-circle"/></svg>
              Laporan Kegiatan Perjalanan Dinas
          </li>
        </ul>
      </div>

      <div class="col-md-6">
        <h2 class="text-body-emphasis">Surat Perintah Tugas</h2>
        <p>Surat Perintah Tugas atau SPT merupakan naskah dinas dari atasan yang di tujukan kepada bawahan yang berisi perintah untuk melaksanakan pekerjaan sesuai dengan tugas dan fungsinya.</p>
        <ul class="list-unstyled ps-0">
        </ul>
      </div>
    </div>
  </main>
            <!-- /*ISI KONTEN -->
          </div>
          <!-- /.card-body -->
          <div class="card-footer ">
            <b><?php echo $_halaman_footer_card; ?></b>
          </div>
          <!-- /.card-footer-->
        </div>
        <!-- /.card -->

      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <?php include('_part/_footer.php'); ?>

  </div>
  <!-- ./wrapper -->

  <?php include('_part/_script.php'); ?>
</body>

</html>