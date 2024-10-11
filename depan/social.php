<?php
// Koneksi ke database
include 'koneksi.php';

$query = "SELECT * FROM social";
$result = mysqli_query($koneksi, $query);
$socialPerHalaman = 4;
$totalsocial = mysqli_num_rows($result);
$totalHalaman = ceil($totalsocial / $socialPerHalaman);
$halamanAktif = isset($_GET['page']) ? $_GET['page'] : 1;
$batasAwal = ($halamanAktif - 1) * $socialPerHalaman;
$query = "SELECT * FROM social LIMIT $batasAwal, $socialPerHalaman";
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
    <script type="text/JavaScript" src="assets_front/js/slimbox2.js"></script>
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
  <section class="destination-section py-5">
    <div class="container">
    <div class="row">
            <div class="col-md-12">
                <div class="contact-title">
                    <h2>Social SMKN 1 BUAHDUA</h2>
                </div>
            </div>
        </div>
        <?php
        mysqli_data_seek($result, 0);
        while ($row = mysqli_fetch_assoc($result)) {
          $socialNama = $row['nama_sosmed'];
          $link = $row['link'];
          $socialgambar = $row['gambar'];
        ?>
          <div class="col-md-3">
            <div class="card mb-4">
              <img width="100" height="200" src="./admin/social/gambar/<?php echo $socialgambar; ?>" class="card-img-top" alt="<?php echo $socialNama; ?>" alt="<?php echo $link; ?>">
              <div class="card-body">
                <h5 class="card-title"><?php echo $socialNama; ?></h5>
                <p class="card-text"></p>
                <a href="<?php echo $link; ?>" class="btn btn-primary" style="width: 10;" >klik untuk Melihat Instagram</a>
              </div>

            </div>
          </div>
        <?php
        }
        ?>
      </div>

      <!-- Pagination -->
      <nav>
        <ul class="pagination justify-content-center">
          <?php if ($halamanAktif > 1) : ?>
            <li class="page-item">
              <a class="page-link" href="?page=<?php echo ($halamanAktif - 1); ?>" aria-label="Previous">
                <span aria-hidden="true">&laquo;</span>
                <span class="sr-only">Previous</span>
              </a>
            </li>
          <?php endif; ?>

          <?php for ($i = 1; $i <= $totalHalaman; $i++) : ?>
            <?php if ($i == $halamanAktif) : ?>
              <li class="page-item active"><a class="page-link" href="?page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
            <?php else : ?>
              <li class="page-item"><a class="page-link" href="?page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
            <?php endif; ?>
          <?php endfor; ?>

          <?php if ($halamanAktif < $totalHalaman) : ?>
            <li class="page-item">
              <a class="page-link" href="?page=<?php echo ($halamanAktif + 1); ?>" aria-label="Next">
                <span aria-hidden="true">&raquo;</span>
                <span class="sr-only">Next</span>
              </a>
            </li>
          <?php endif; ?>
        </ul>
      </nav>
    </div>
  </section>
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