<?php
// Koneksi ke database
include 'koneksi.php';

$query = "SELECT * FROM guru";
$result = mysqli_query($koneksi, $query);
$guruPerHalaman = 4;
$totalguru = mysqli_num_rows($result);
$totalHalaman = ceil($totalguru / $guruPerHalaman);
$halamanAktif = isset($_GET['page']) ? $_GET['page'] : 1;
$batasAwal = ($halamanAktif - 1) * $guruPerHalaman;
$query = "SELECT * FROM guru LIMIT $batasAwal, $guruPerHalaman";
$result = mysqli_query($koneksi, $query);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>SMKN 1 BUAHDUA</title>
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
<img src="./css/images/favicon-wa.png"> Whatsapp Kami</button></a>
</div>
  <!--============================= HEADER =============================-->
  <?php 
   include "./adds/header.php";
   ?>
<!--//END HEADER -->

    <section class="our-teachers">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="mb-5">Guru Dan Staff</h2>
                </div>
            </div>
            <div class="row">
        <?php
        mysqli_data_seek($result, 0);
        while ($row = mysqli_fetch_assoc($result)) {
          $guruNama = $row['nama_guru'];
          $guruNip = $row['nip'];
          $guruPelajaran = $row['pelajaran'];
          $gurugambar = $row['gambar'];
          $idguru = $row['id'];
        ?>
          <div class="col-md-3 mb-3">
          <div class="card shadow">
              <img src="./admin/guru/gambar/<?php echo $gurugambar; ?>" class="card-img-top" alt="<?php echo $guruNama; ?>">
              <div class="card-body">
                <h5 class="card-title"><?php echo $guruNama; ?></h5>
                <h5 class="card-title"><?php echo $guruNip; ?></h5>
                <h5 class="card-title"><?php echo $guruPelajaran; ?></h5>  
              </div>
            </div>
          </div>
        <?php
        }
        ?>
      </div>
      <?php 
include "./adds/navigasi.php";
?>
        </div>
    </section>

    <!--//End Style 2 -->
 <!--============================= FOOTER =============================-->
 <?php 
include "./adds/footer.php";
?>
        <!--//END FOOTER -->
            <!-- jQuery, Bootstrap JS. -->
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
