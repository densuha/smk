<?php
// Koneksi ke database
include 'koneksi.php';

$query = "SELECT * FROM about";
$result = mysqli_query($koneksi, $query);
$aboutPerHalaman = 4;
$totalabout = mysqli_num_rows($result);
$totalHalaman = ceil($totalabout / $aboutPerHalaman);
$halamanAktif = isset($_GET['page']) ? $_GET['page'] : 1;
$batasAwal = ($halamanAktif - 1) * $aboutPerHalaman;
$query = "SELECT * FROM about LIMIT $batasAwal, $aboutPerHalaman";
$result = mysqli_query($koneksi, $query);

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
   ?>
<!--//END HEADER -->
<!--//END ABOUT IMAGE -->
<!--============================= WELCOME TITLE =============================-->
<section class="welcome_about">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
         
            <h2>Kata Sambutan</h2>
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
                <img src="./admin/kepala/gambar/<?php echo $gambarkepala; ?>" class="img-fluid about-img" alt="#" style="  height: 550px;">
                </div>
            </div>
        </div>
    </section>
    <!--//END WELCOME TITLE -->
    <!--============================= WELCOME TITLE =============================-->
<section class="welcome_about">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                

<h2>VISI</h2><p>
<p>Menghasilkan lulusan yang Jujur, Unggul, Amanah, Ramah, Agamis (JUARA).  </p>

<h2>MISI</h2><p>
1.	Mewujudkan Sumber Daya Manusia yang Profesional, Dedikasi tinggi, berkarakter Unggul, 
Kreatif, dan Inovatif, mandiri, serta berakhlak mulia, peduli terhadap lingkungan, dan 
berakar pada budaya bangsa <p>
2.	Mewujudkan kemitraan yang bermakna dengan Dunia Kerja <p>
3.	Melaksanakan pembelajaran berbasis kompetensi dunia kerja dan berkebhinekaan global<p> 
4.	Mewujudkan sarana prasarana standar industri 4.0<p> 
5.	Mewujudkan manajemen sekolah yang mandiri dalam melakukan pelayanan prima<p> 
                </p>
                </div>
                <div class="col-md-5">
                    <img src="css/images/logo_smk.png" class="img-fluid" alt="#" style="  height: 550px;">
                </div>
            </div>
        </div>
    </section>
    <!--//END WELCOME TITLE -->

    <!--============================= TESTIMONIAL =============================-->
    <section class="our-teachers">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="mb-5">ALUMNI SMKN 1 BUAHDUA</h2>
                </div>
            </div>
            <div class="row">
            <?php
        mysqli_data_seek($result, 0);
        while ($row = mysqli_fetch_assoc($result)) {
          $aboutNama = $row['judul'];
          $aboutisi = $row['isi'];
          $aboutgambar = $row['gambar'];
        ?>
          <div class="col-md-3">
            <div class="card mb-4">
            <img width="100" height="300" src="./admin/about/gambar/<?php echo $aboutgambar; ?>" class="card-img-top" alt="<?php echo $aboutNama; ?>">
              <div class="card-body">
                <h5 class="card-title"><?php echo $aboutNama; ?></h5>
                <h5 class="card-title"><?php echo $aboutisi; ?></h5>
              </div>
            </div>
          </div>
        <?php
        }
        ?>
      </div>
        </div>
    </section>
    <!--//END TESTIMONIAL -->
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
