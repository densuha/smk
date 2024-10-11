<?php
//load koneksi database
include './koneksi.php';

//query untuk menghitung jumlah data
$query = mysqli_query($koneksi, "SELECT COUNT(*) AS total_guru FROM guru");
$data = mysqli_fetch_assoc($query);
$total_guru = $data['total_guru']; // Jumlah total pengumuman

//query untuk menghitung jumlah data dari tabel galeri
$query_galeri = mysqli_query($koneksi, "SELECT COUNT(*) AS total_galeri FROM galery");
$data_galeri = mysqli_fetch_assoc($query_galeri);
$total_galeri = $data_galeri['total_galeri'];

//query untuk menghitung jumlah data dari tabel pengumuman
$query_pengumuman = mysqli_query($koneksi, "SELECT COUNT(*) AS total_pengumuman FROM pengumuman");
$data_pengumuman = mysqli_fetch_assoc($query_pengumuman);
$total_pengumuman = $data_pengumuman['total_pengumuman'];

//query untuk menghitung jumlah data dari tabel social
$query_social = mysqli_query($koneksi, "SELECT COUNT(*) AS total_social FROM social");
$data_social = mysqli_fetch_assoc($query_social);
$total_social = $data_social['total_social'];

?>

<div class="detailed_chart">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-3 chart_bottom">
                <div class="chart-img">
                    <img src="./css/images/chart-icon_1.png" class="img-fluid" alt="chart_icon">
                </div>
                <div class="chart-text">
                    <p><span class="counter"><?php echo $total_guru; ?></span> Guru
                    </p>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3 chart_bottom chart_top">
                <div class="chart-img">
                    <img src="./css/images/chart-icon_2.png" class="img-fluid" alt="chart_icon">
                </div>
                <div class="chart-text">
                    <p><span class="counter"><?php echo $total_galeri; ?></span> galeri
                    </p>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3 chart_top">
                <div class="chart-img">
                    <img src="./css/images/chart-icon_3.png" class="img-fluid" alt="chart_icon">
                </div>
                <div class="chart-text">
                    <p><span class="counter"><?php echo $total_pengumuman; ?></span> Pengumuman
                    </p>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3">
                <div class="chart-img">
                    <img src="./css/images/chart-icon_4.png" class="img-fluid" alt="chart_icon">
                </div>
                <div class="chart-text">
                    <p><span class="counter"><?php echo $total_pengumuman; ?></span> Social Media</p>
                </div>
            </div>
        </div>
    </div>
</div>