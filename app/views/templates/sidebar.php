      <!-- Main Sidebar Container -->
      <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="#" class="brand-link">
          <img src="<?= base_url;?>/assets/dist/img/logo.png" alt="Logo" class="brand-image img-circle elevation-3" style="opacity: 0.8" />
          <span class="brand-text font-weight-light"><b>PERPUSTAKAAN</b></span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
          <!-- Sidebar user panel (optional) -->
          <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
              <img src="<?= base_url;?>/assets/dist/img/my-foto.png" class="img-circle elevation-2" alt="User Image" />
            </div>
            <div class="info">
              <a href="#" class="d-block"><?= $_SESSION['nama_admin'] ?></a>
            </div>
          </div>

          <!-- Sidebar Menu -->
          <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
              <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
              <li class="nav-item">
                <a href="<?= base_url; ?>/home" class="nav-link <?php if($data['title'] == 'Dashboard') echo'active' ?>">
                  <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>Dashboard</p>
                </a>
              </li>
              <li class="nav-header">DATA MASTER</li>
              <li class="nav-item">
                <a href="<?= base_url; ?>/anggota" class="nav-link <?php if($data['title'] == 'Anggota') echo'active' ?>">
                  <i class="nav-icon fas fa-users"></i>
                  <p>Data Anggota</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url; ?>/buku" class="nav-link <?php if($data['title'] == 'Buku') echo'active' ?>">
                  <i class="nav-icon fas fa-book"></i>
                  <p>Data Buku</p>
                </a>
              </li>
              <li class="nav-header">DATA TRANSAKSI</li>
              <li class="nav-item">
                <a href="<?= base_url; ?>/transaksi" class="nav-link <?php if($data['title'] == 'Transaksi') echo'active' ?>">
                  <i class="nav-icon fas fa-people-arrows"></i>
                  <p>Transaksi</p>
                </a>
              </li>
              <li class="nav-header">LAPORAN TRANSAKSI</li>
              <li class="nav-item">
                <a href="<?= base_url; ?>/transaksi/laporan" class="nav-link <?php if($data['title'] == 'Laporan') echo'active' ?>" class="nav-link">
                  <i class="nav-icon fas fa-file-alt"></i>
                  <p>Laporan Transaksi</p>
                </a>
              </li>
            </ul>
          </nav>
          <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
      </aside>