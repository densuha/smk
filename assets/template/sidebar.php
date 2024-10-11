<?php
$base_url = "http://localhost/uts_pabw/admin";
$page  = $_GET['page']; ?>
<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="./artikel/admin/dashboard.php?page=beranda" class="brand-link">
    <span class="brand-text font-weight-light">Halaman Admin</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="info">
        <a href="#" class="d-block"><?= isset($_SESSION['username']) ? $_SESSION['username'] : 'GUEST'; ?></a>
      </div>
    </div>


    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
        <li class="nav-item">
          <a href="<?= $base_url ?>/dashboard.php?page=home" class="nav-link  <?php if ($page == 'home') { ?>active<?php } ?>">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Beranda
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?= $base_url ?>/dashboard.php?page=users" class="nav-link <?php if ($page == 'users') { ?>active<?php } ?>">
            <i class="nav-icon fas fa-users"></i>
            <p>
              Users
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?= $base_url ?>/dashboard.php?page=artikel" class="nav-link  <?php if ($page == 'artikel') { ?>active<?php } ?>">
            <i class="nav-icon fas fa-pen"></i>
            <p>
              Artikel
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?= $base_url ?>/dashboard.php?page=kategori" class="nav-link  <?php if ($page == 'kategori') { ?>active<?php } ?>">
            <i class="nav-icon fas fa-tags"></i>
            <p>
              Kategori
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?= $base_url ?>/dashboard.php?page=menu" class="nav-link  <?php if ($page == 'menu') { ?>active<?php } ?>">
            <i class="nav-icon fas fa-th"></i>
            <p>
              Menu
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?= $base_url ?>/dashboard.php?page=agenda" class="nav-link  <?php if ($page == 'agenda') { ?>active<?php } ?>">
            <i class="nav-icon fas fa-th"></i>
            Agenda
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?= $base_url ?>/signout.php" class="nav-link">
            <i class="nav-icon fas fa-power-off"></i>
            <p>
              Keluar
            </p>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>