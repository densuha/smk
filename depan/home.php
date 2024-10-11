<?php
// Koneksi ke database
include 'koneksi.php';

$query = "SELECT * FROM galery";
$result = mysqli_query($koneksi, $query);
$galeryPerHalaman = 4;
$totalgalery = mysqli_num_rows($result);
$totalHalaman = ceil($totalgalery / $galeryPerHalaman);
$halamanAktif = isset($_GET['page']) ? $_GET['page'] : 1;
$batasAwal = ($halamanAktif - 1) * $galeryPerHalaman;
$query = "SELECT * FROM galery LIMIT $batasAwal, $galeryPerHalaman";
$result = mysqli_query($koneksi, $query);

// Query untuk mengambil sambutan
$querySambutan = "SELECT nama, sambutan, gambar FROM kepala LIMIT 1"; // Sesuaikan nama kolom dan tabel sesuai dengan yang ada di database
$resultSambutan = mysqli_query($koneksi, $querySambutan);
$sambutanData = mysqli_fetch_assoc($resultSambutan);
$sambutan = $sambutanData['sambutan'];
$gambarkepala = $sambutanData['gambar'];
$namakepala = $sambutanData['nama'];

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
   include"./adds/slider.php";
   ?>
<!--//END HEADER -->
<!--============================= ABOUT =============================-->
<section class="clearfix about about-style2">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
               <h2>Selamat Datang</h2>
               <p>Perkembangan teknologi saat ini menuntut tersedianya tenaga kerja yang kompeten dan handal 
di berbagai bidang agar sebuah negara mampu bertahan dan berperan dalam era yang penuh 
persaingan dan sekaligus membuka dan memanfaatkan setiap peluang. Untuk meningkatkan 
pertumbuhan ekonomi suatu negara, strategi yang dianggap efektif adalah dengan melakukan 
industrialisasi. </p>
                <p> Industrialisasi, pada derajat tertentu akan mengimplikasikan pergeseran proses 
produksi dari labouring menjadi manufacturing dalam arti tenaga kerja manusia tergantikan 
oleh hard technology. Ini berarti industrialisasi membutuhkan tenaga kerja terampil yang tidak 
hanya mampu mengoperasikan teknologi tersebut, melainkan juga memeliharanya. </p>
                <p>Industrialisasi juga berpotensi menciptakan pengangguran jika pergeseran proses produksi 
tersebut tidak dibarengi dengan perubahan orientasi pendidikan dari akademis menjadi 
vokasional. Kondisi di atas menuntut dunia pendidikan dan pasar kerja dirancang secara 
terintegrasi dengan memperhatikan tujuan dan kebutuhan Dunia Kerja.<p>
               <p><?php echo $namakepala; ?></p>

            </div>
            <div class="col-md-4">
                <img src="./admin/kepala/gambar/<?php echo $gambarkepala; ?>" class="img-fluid about-img" alt="#">
            </div>
        </div>
    </div>
</section>
<!--//END ABOUT -->
<!--============================= OUR COURSES =============================-->
<section id="programs" class="container">
  <h2 class="text-center mb-4">Jurusan</h2>
  <div class="row">
    <div class="col-md-3 mb-3">
      <div class="card shadow">
        <!-- Gambar untuk Teknik Ototronik -->
        <img src="./css/images/tot.png" class="card-img-top" alt="Teknik Ototronik">
        <div class="card-body">
          <h5 class="card-title">Teknik Ototronik</h5>
          <p class="card-text">Program Keahlian Teknik Otomotif di SMKN 1 BUAHDUA lebih 
          terkonsentrasi ke perawatan Kendaraan Ringan Otomotif dan Ototronik.</p>
        </div>
      </div>
    </div>

    <div class="col-md-3 mb-3">
      <div class="card shadow">
        <!-- Gambar untuk Teknik Kendaraan Ringan Otomotif -->
        <img src="./css/images/tkro.png" class="card-img-top" alt="TKRO">
        <div class="card-body">
          <h5 class="card-title">Program Keahlian Teknik Otomotif </h5>
          <p class="card-text">Program Keahlian Teknik Otomotif di SMKN 1 BUAHDUA lebih 
terkonsentrasi ke perawatan Kendaraan Ringan Otomotif dan Ototronik.</p>
        </div>
      </div>
    </div>

    <div class="col-md-3 mb-3">
      <div class="card shadow">
        <!-- Gambar untuk Teknik Komputer dan Jaringan -->
        <img src="./css/images/tkj.png" class="card-img-top" alt="TKJ">
        <div class="card-body">
          <h5 class="card-title">Program Keahlian Teknik Jaringan Komputer dan Telekomunikasi. </h5>
          <p class="card-text">Program Keahlian Teknik Jaringan Komputer dan Telekomunikasi di SMKN 1 BUAHDUA lebih terkonsentrasi Komputer jaringan. </p>
        </div>
      </div>
    </div>

    <div class="col-md-3 mb-3">
      <div class="card shadow">
        <!-- Gambar untuk Akuntansi dan Keuangan Lembaga -->
        <img src="./css/images/AKL.png" class="card-img-top" alt="AKL">
        <div class="card-body">
          <h5 class="card-title">Program Keahlian Akuntansi dan Keuangan Lembaga.</h5>
          <p class="card-text">Program keahlian Akuntansi dan Keuangan Lembaga di SMKN 1 BUAHDUA lebih terkonsentasi Akuntansi Keuangan.</p>
        </div>
      </div>
    </div>
    <div class="col-md-3 mb-3">
      <div class="card shadow">
        <!-- Gambar untuk Bisnis Daring dan Pemasaran -->
        <img src="./css/images/BDPM.png" class="card-img-top" alt="BDPM">
        <div class="card-body">
          <h5 class="card-title">Program Keahlian Pemasaran.</h5>
          <p class="card-text"> Program Keahlian Pemasaran di SMKN 1 BUAHDUA lebih terkonsentrasi ke 
Bisnis Daring dan Pemasaran . </p>
        </div>
      </div>
    </div>
  </div>
</section>
<!--//END OUR COURSES -->

<!--============================= DETAILED CHART =============================-->
<?php 
include "./adds/chart.php";
?>
<!--//END DETAILED CHART -->
<!--============================= FOOTER =============================-->
<?php 
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