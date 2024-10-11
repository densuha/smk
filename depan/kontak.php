
<?php
// Koneksi ke database
include 'koneksi.php'; // Pastikan file koneksi.php sudah benar

// Tangani form submit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari form
    $nama = $_POST['xnama'];
    $email = $_POST['xemail'];
    $phone = $_POST['xphone'];
    $message = $_POST['xmessage'];
    $tanggal = date('Y-m-d H:i:s'); // Ambil tanggal saat ini

    // Query untuk menyimpan data ke dalam tabel inbox
    $query = "INSERT INTO inbox (inbox_nama, inbox_email, inbox_kontak, inbox_pesan, inbox_tanggal) VALUES (?, ?, ?, ?, ?)";
    
    // Persiapkan dan eksekusi statement
    $stmt = mysqli_prepare($koneksi, $query);
    mysqli_stmt_bind_param($stmt, "sssss", $nama, $email, $phone, $message, $tanggal);
    
    if (mysqli_stmt_execute($stmt)) {
        echo "<script>alert('Pesan berhasil dikirim!');</script>";
    } else {
        echo "<script>alert('Terjadi kesalahan, pesan tidak dapat dikirim.');</script>";
    }
    
    mysqli_stmt_close($stmt);
}

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
                        <h2>Hubungi Kami</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="contact-form">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-6 contact-option">
                                <div class="contact-option_rsp">
                                    <h3>Tinggalkan Pesan</h3>
                                    <form action="" method="post">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Name" name="xnama" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="email" class="form-control" placeholder="Email" name="xemail" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Phone" name="xphone" required>
                                        </div>
                                        <div class="form-group">
                                            <textarea placeholder="Message" class="form-control" name="xmessage" required rows="5"></textarea>
                                        </div>
                                        <button type="submit" class="btn btn-default btn-submit">SUBMIT</button>
                                    </form>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-6">
                                <div class="contact-address">
                                    <h3>Lokasi</h3>
                                    <div class="contact-details">
                                        <i class="fa fa-user" aria-hidden="true"></i>
                                        <h6>Alamat</h6>
                                        <p>Jl. Raya Buahdua Km.3 
                                            <br> Dusun Sumber Desa Bojongloa,
                                            <br> Sumedang, Jawa Barat</p>
                                    </div>
                                    <br>
                                    <div class="contact-details">
                                        <i class="fa fa-envelope-o" aria-hidden="true"></i>
                                        <h6>Email</h6>
                                        <p>smkn1buahdua@yahoo.co.id 
                                            <br> www.smkn1buahdua.sch.id
                                        </p>
                                    </div>
                                    <br>
                                    <div class="contact-details">
                                        <i class="fa fa-phone" aria-hidden="true"></i>
                                        <h6>Phone</h6>
                                        <p>+6280000</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <p class="contact-center">OR</p>
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
