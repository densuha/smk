<?php
include '../koneksi.php'; // Sambungkan ke database

// Query untuk mendapatkan jumlah pesan inbox dengan status '1'
$query_inbox = mysqli_query($koneksi, "SELECT count(*) as jml FROM inbox WHERE inbox_status='1'");
$row_inbox = mysqli_fetch_assoc($query_inbox);
$jum_pesan = $row_inbox['jml'];
?>

<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <!-- Navbar Search -->
        <li class="nav-item">
            <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                <i class="fas fa-search"></i>
            </a>
            <div class="navbar-search-block">
                <form class="form-inline">
                    <div class="input-group input-group-sm">
                        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-navbar" type="submit">
                                <i class="fas fa-search"></i>
                            </button>
                            <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </li>

        <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ms-auto">
                    <!-- Messages Dropdown -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fas fa-sms"></i>
                            <span class="badge bg-success"><?php echo $jum_pesan; ?></span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="messagesDropdown">
                            <li class="dropdown-header">Anda memiliki <?php echo $jum_pesan; ?> pesan</li>
                            <li>
                                <ul class="list-unstyled">
                                    <?php
                                        $inbox_query = mysqli_query($koneksi, "SELECT inbox.*,DATE_FORMAT(inbox_tanggal,'%d %M %Y') AS inbox_tanggal FROM inbox WHERE inbox_status='1' ORDER BY id DESC LIMIT 5");
                                        while ($in = mysqli_fetch_assoc($inbox_query)) {
                                            $inbox_nama = $in['inbox_nama'];
                                            $inbox_tgl = $in['inbox_tanggal'];
                                            $inbox_pesan = $in['inbox_pesan'];
                                    ?>
                                    <li class="dropdown-item">
                                        <a href="../inbox/index.php?page=inbox" class="nav-link  <?php if ($page == 'inbox') ?>">
                                            <div class="d-flex align-items-center">
                                                <img src="./images/user_blank.png" class="rounded-circle me-2" alt="User Image" style="width: 40px;">
                                                <div>
                                                    <h6 class="mb-0"><?php echo $inbox_nama; ?></h6>
                                                    <small><i class="fa fa-clock-o"></i> <?php echo $inbox_tgl; ?></small>
                                                    <br>
                                                    <p class="mb-0"><?php echo $inbox_pesan; ?></p>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <?php } ?>
                                </ul>
                            </li>
                            <p></p>
                            <p></p>
                            <li class="dropdown-footer"><a href="../inbox/index.php?page=inbox" class="nav-link  <?php if ($page == 'inbox') ?>">Lihat Semua Pesan</a></li>
                        </ul>
                    </li>
        <!-- Notifications Dropdown Menu -->

        <li class="nav-item">
            <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                <i class="fas fa-expand-arrows-alt"></i>
            </a>
        </li>
         <!-- Control Sidebar Toggle Button -->
         <li class="nav-item">
                        <a class="nav-link" href="#" target="_blank" title="Lihat Website"><i class="fa fa-globe"></i></a>
                    </li>
    </ul>
</nav>
<!-- /.navbar -->