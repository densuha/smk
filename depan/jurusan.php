
<?php
// Koneksi ke database
include 'koneksi.php'; // Pastikan file koneksi.php sudah benar
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title> JURUSAN SMKN 1 BUAHDUA</title>
    <link rel="shorcut icon" href="./css/css/images/icon.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <link rel="stylesheet" href="./css/css/bootstrap.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="./css/css/font-awesome.min.css">
    <!-- Simple Line Font -->
    <link rel="stylesheet" href="./css/css/simple-line-icons.css">
    <!-- Slider / Carousel -->
    <link rel="stylesheet" href="./css/css/slick.css">
    <link rel="stylesheet" href="./css/css/slick-theme.css">
    <link rel="stylesheet" href="./css/css/owl.carousel.min.css">
    <!-- Main CSS -->
    <link href="./css/css/style.css" rel="stylesheet">

</head>
<body>
    <div style="position:fixed;left:20px;bottom:20px;">
        <a href="https://api.whatsapp.com/send?phone=+6285100257920&text=Halo">
            <button style="background:#32C03C;vertical-align:center;height:36px;border-radius:5px">
                <img src="./css/images/favicon-wa.png"> Whatsapp Kami
            </button>
        </a>
    </div>
    <!-- Header -->
    <?php include "./adds/header.php"; ?>
    <!-- END HEADER -->
    <section class="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="contact-title">
                        <h2>JURUSAN SMKN 1 BUAHDUA</h2>
                    </div>
                </div>
            </div>
           
<div class="row">
    <div class="col-md-3 mb-3">
        <div class="card shadow">
            <!-- Gambar untuk Teknik Ototronik dengan tautan -->
            <a href="page-teknik-ototronik.html">
                <img src="./css/images/tot.png" class="card-img-top" alt="Teknik Ototronik">
            </a>
            <div class="card-body">
                <h5 class="card-title">Teknik Ototronik</h5>
                <p class="card-text">Program Keahlian Teknik Otomotif di SMKN 1 BUAHDUA lebih terkonsentrasi ke perawatan Kendaraan Ringan Otomotif dan Ototronik.</p>
            </div>
        </div>
    </div>

    <div class="col-md-3 mb-3">
        <div class="card shadow">
            <!-- Gambar untuk Teknik Kendaraan Ringan Otomotif dengan tautan -->
            <a href="page-tkro.html">
                <img src="./css/images/tkro.png" class="card-img-top" alt="TKRO">
            </a>
            <div class="card-body">
                <h5 class="card-title">Program Keahlian Teknik Otomotif</h5>
                <p class="card-text">Program Keahlian Teknik Otomotif di SMKN 1 BUAHDUA lebih terkonsentrasi ke perawatan Kendaraan Ringan Otomotif dan Ototronik.</p>
            </div>
        </div>
    </div>

    <div class="col-md-3 mb-3">
        <div class="card shadow">
            <!-- Gambar untuk Teknik Komputer dan Jaringan dengan tautan -->
            <a href="page-tkj.html">
                <img src="./css/images/tkj.png" class="card-img-top" alt="TKJ">
            </a>
            <div class="card-body">
                <h5 class="card-title">Program Keahlian Teknik Jaringan Komputer dan Telekomunikasi</h5>
                <p class="card-text">Program Keahlian Teknik Jaringan Komputer dan Telekomunikasi di SMKN 1 BUAHDUA lebih terkonsentrasi Komputer jaringan.</p>
            </div>
        </div>
    </div>

    <div class="col-md-3 mb-3">
        <div class="card shadow">
            <!-- Gambar untuk Akuntansi dan Keuangan Lembaga dengan tautan -->
            <a href="page-akl.html">
                <img src="./css/images/AKL.png" class="card-img-top" alt="AKL">
            </a>
            <div class="card-body">
                <h5 class="card-title">Program Keahlian Akuntansi dan Keuangan Lembaga</h5>
                <p class="card-text">Program keahlian Akuntansi dan Keuangan Lembaga di SMKN 1 BUAHDUA lebih terkonsentrasi Akuntansi Keuangan.</p>
            </div>
        </div>
    </div>

    <div class="col-md-3 mb-3">
        <div class="card shadow">
            <!-- Gambar untuk Bisnis Daring dan Pemasaran dengan tautan -->
            <a href="page-bdpm.html">
                <img src="./css/images/BDPM.png" class="card-img-top" alt="BDPM">
            </a>
            <div class="card-body">
                <h5 class="card-title">Program Keahlian Pemasaran</h5>
                <p class="card-text">Program Keahlian Pemasaran di SMKN 1 BUAHDUA lebih terkonsentrasi ke Bisnis Daring dan Pemasaran.</p>
            </div>
        </div>
    </div>
</div>

    </section>  
    <!--//END  ABOUT IMAGE -->
    
    <!-- Footer -->
    <?php 
    include "./adds/chart.php";
    include "./adds/footer.php";
    ?>
    <!--//END FOOTER -->
        <script src="./css/js/jquery.min.js"></script>
        <script src="./css/js/tether.min.js"></script>
        <script src="./css/js/bootstrap.min.js"></script>
        <!-- Plugins -->
        <script src="./css/js/slick.min.js"></script>
        <script src="./css/js/waypoints.min.js"></script>
        <script src="./css/js/counterup.min.js"></script>
        <script src="./css/js/owl.carousel.min.js"></script>
        <script src="./css/js/validate.js"></script>
        <script src="./css/js/tweetie.min.js"></script>
        <!-- Subscribe -->
        <script src="./css/js/subscribe.js"></script>
        <!-- Script JS -->
        <script src="./css/js/script.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
        </body>

        </html>
