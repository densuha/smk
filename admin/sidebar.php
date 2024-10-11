<?php
$base_url = "http://localhost/smk/admin";
$page  = $_GET['page'];
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <a href="../menu/index.php?page=home" class="brand-link">
    <img src="./logo_smk.png" alt="AdminLTE Logo" class="brand-image img-circle " >
    <span class="brand-text font-weight-light">SMKN 1 BUAHDUA</span>
  </a>
  <div class="sidebar">
    <nav class="user-panel mt-3 pb-3 mb-3 d-flex">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="true">
        <!-- MENU SIDEBAR / ASIDE -->

        <li class="nav-item ">
          <a href="../menu/index.php?page=home" class="nav-link  <?php if ($page == 'home') { ?>active<?php } ?>">
            <i class="nav-icon fas fa-home"></i>
            <p>
              Dashboard
            </p>
          </a>
        </li>

<li class="nav-item">
  <a class="nav-link d-flex justify-content-between align-items-center" data-bs-toggle="collapse" href="#nipCollapse" role="button" aria-expanded="false" aria-controls="nipCollapse">
    <i class="nav-icon fas fa-home"></i>
    <p>Halaman Utama</p>
    <i class="fas fa-chevron-down ms-auto"></i> <!-- Panah ke kanan -->
  </a>
  <!-- Elemen yang akan muncul saat klik -->
  <div class="collapse" id="nipCollapse">
    <ul class="list-group list-group-flush">
      <li class="list-group-item d-flex align-items-center">
        <i class="fas fa-id-badge me-2"></i> <!-- Icon di kiri -->
        <a href="../kepala/index.php?page=kepala" <?php if ($page == 'kepala') { ?>active<?php } ?>" class="stretched-link text-decoration-none">Kepala Sekolah</a>

    </ul>
  </div>
</li>

        <li class="nav-item">
          <a href="../guru/index.php?page=guru" class="nav-link  <?php if ($page == 'guru') { ?>active<?php } ?>">
            <i class="nav-icon fas fa-user-tie"></i>
            <p>
              Guru
            </p>
          </a>
        </li>
        
        <li class="nav-item">
          <a href="../pengumuman/index.php?page=pengumuman" class="nav-link  <?php if ($page == 'pengumuman') { ?>active<?php } ?>">
            <i class="nav-icon far fa-map"></i>
            <p>
              Pengumuman
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="../social/index.php?page=social" class="nav-link  <?php if ($page == 'social') { ?>active<?php } ?>">
            <i class="nav-icon fas fa-user-friends"></i>
            <p>
              Social
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="../about/index.php?page=about" class="nav-link  <?php if ($page == 'about') { ?>active<?php } ?>">
            <i class="nav-icon fas fa-calendar"></i>
            <p>
              Alumni Lulusan terbaik
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="../galery/index.php?page=galery" class="nav-link  <?php if ($page == 'galery') { ?>active<?php } ?>">
            <i class="nav-icon fas fa-camera"></i>
            <p>
              Galery
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="../inbox/index.php?page=inbox" class="nav-link  <?php if ($page == 'inbox') { ?>active<?php } ?>">
            <i class="nav-icon far fa-comments"></i>
            <p>
              Inbox
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="../logout.php?page=logout" class="nav-link  <?php if ($page == 'logout') { ?>active<?php } ?>">
            <i class="nav-icon fas fa-power-off"></i>
            <p>
              Keluar
            </p>
          </a>
        </li>
        <!-- SIDEBAR / ASIDE -->
      </ul>
    </nav>
  </div>
</aside>