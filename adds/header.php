<?php
$base_url = "http://localhost/smk/";
$page  = isset($_GET['page']) ? $_GET['page'] : ''; // Cek apakah 'page' ada
?>

<div class="header-topbar">
        <div class="container">
            <div class="row">
                <div class="col-xs-6 col-sm-8 ">
                    <div class="header-top_address">
                        <div class="header-top_list">
                            <span class="icon-phone"></span>000000000000
                        </div>
                        <div class="header-top_list">
                            <span class="icon-envelope-open"></span>smkn1buahdua@gmail.com
                        </div>
                        <div class="header-top_list">
                            <span class="icon-location-pin"></span>Jln.Raya, Bojongloa, Kec.Buahdua
                        </div>
                    </div>
                    <div class="header-top_login2">
                        <a href="#">Hubungi Kami</a>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-4 col-md-3">
                    <div class="header-top_login mr-sm-3">
                        <a href="#">Hubungi Kami</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

<div data-toggle="affix">
    <div class="container-fluid nav-menu2" > <!-- Mengganti container dengan container-fluid -->
        <div class="row">
            <div class="col-12">
                <nav class="navbar navbar-expand-lg navbar-light bg-faded" >
                    
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation"style="
    margin-top: 90px;">
                        <span class="navbar-toggler-icon"></span>
                        
                    </button>

                    <div class="collapse navbar-collapse justify-content-center" id="navbarNavDropdown">
                        <ul class="navbar-nav col-xs-6 col-sm-8 col-sm-9 ">
                            <li>
                            <a href="#" class="navbar-brand nav-brand2">
                        <img class="img img-responsive" width="200px;" src="./css/images/logo-white.png" alt="Logo SMK">
                    </a>
                            </li>
                            <!-- Non-Dropdown Item: Home -->
                            <li class="nav-item">
                                <a href="<?= $base_url ?>index.php?categori=1" class="nav-link <?php if ($page == 'categori=1') { ?>active<?php } ?>">Home</a>
                            </li>

                            <!-- Dropdown 1: Akademik -->
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle <?php if ($page == 'akademik') { ?>active<?php } ?>" href="#" id="akademikDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Akademik
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="akademikDropdown">
                                    <li><a class="dropdown-item" href="<?= $base_url ?>guru.php?categori=2">Guru Dan Staff</a></li>
                                    <li><a class="dropdown-item" href="<?= $base_url ?>jurusan.php?categori=3">Program Keahlian</a></li>
                                    <li><a class="dropdown-item" href="<?= $base_url ?>pengumuman.php?categori=0">#</a></li>
                                </ul>
                            </li>

                            <!-- Dropdown 2: Pengumuman -->
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle <?php if ($page == 'pengumuman') { ?>active<?php } ?>" href="#" id="pengumumanDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Pengumuman
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="pengumumanDropdown">
                                    <li><a class="dropdown-item" href="<?= $base_url ?>pengumuman.php?categori=4">Pengumuman</a></li>
                                    <li><a class="dropdown-item" href="<?= $base_url ?>galery.php?categori=6">Gallery</a></li>
                                    <li><a class="dropdown-item" href="<?= $base_url ?>postingan.php?categori=5">#</a></li>
                                </ul>
                            </li>

                            <!-- Dropdown 3: About -->
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle <?php if ($page == 'about') { ?>active<?php } ?>" href="#" id="aboutDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    About
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="aboutDropdown">
                                    <li><a class="dropdown-item" href="<?= $base_url ?>about.php?categori=7">About</a></li>
                                    <li><a class="dropdown-item" href="<?= $base_url ?>kontak.php?categori=8">Contact</a></li>
                                    <li><a class="dropdown-item" href="<?= $base_url ?>social.php?categori=8">Social</a></li>
                                </ul>
                            </li>

                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</div>
