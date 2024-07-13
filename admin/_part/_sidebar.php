 <?php
    //Setting Awal
    $_sidebar_nama_apilkasi = 'ADMIN _ SPPD UTAURANO';

 ?>
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      
      <span class="brand-text font-weight-light"><b><?php echo $_sidebar_nama_apilkasi;?></b></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->

          <!--Mulai Menu-->
          <li class="nav-item">
            <a href="../index.php" class="nav-link">
              <i class="nav-icon fas fa-home"></i>
              <p>
                BERANDA
              </p>
            </a>
          </li>
          <!--Selesai Menu-->
          <!--Mulai Menu-->
          <?php
           if ($_SESSION['role'] == 'admin') {
            ?>
          <li class="nav-item">
            <a href="sppd.php" class="nav-link">
              <i class="nav-icon fas fa-briefcase"></i>
              <p>
                SPPD
              </p>
            </a>
          </li>
          <!--Selesai Menu-->
          <?php
          }
          ?>
          <!--Mulai Menu-->
          <?php
           if ($_SESSION['role'] == 'admin') {
            ?>
          <li class="nav-item">
            <a href="spt.php" class="nav-link">
              <i class="nav-icon fas fa-envelope"></i>
              <p>
                SPT
              </p>
            </a>
          </li>
          <!--Selesai Menu-->
          <?php
          }
          ?>
          <!--Mulai Menu-->
          <li class="nav-item">
            <a href="laporan.php" class="nav-link">
              <i class="nav-icon fas fa-clipboard"></i>
              <p>
                LAPORAN
              </p>
            </a>
          </li>
          <!--Selesai Menu-->
          <!--Mulai Menu-->
          <li class="nav-item">
            <a href="kegiatan.php" class="nav-link">
              <i class="nav-icon fas fa-tasks"></i>
              <p>
                KEGIATAN
              </p>
            </a>
          </li>
          <!--Selesai Menu-->
          <!--Mulai Menu-->
          <?php
          if ($_SESSION['role'] == 'admin') {
            ?>
          <li class="nav-item">
            <a href="akun.php" class="nav-link">
              <i class="nav-icon fas fa-cog"></i>
              <p>
                PENGATURAN AKUN
              </p>
            </a>
          </li>
          <!--Selesai Menu-->
          <?php
          }
          ?>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>