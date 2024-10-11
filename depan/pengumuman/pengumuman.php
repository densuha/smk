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
                <i class="fa fa-whatsapp"></i> Whatsapp Kami
            </button>
        </a>
    </div>

    <!--============================= HEADER =============================-->
    <?php
    include "./adds/header.php";
    ?>
    <!--//END HEADER -->
    <!--============================= EVENTS =============================-->
    <section class="events">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h2 class="event-title">Pengumuman</h2>
                </div>
                <div class="col-md-8">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item nav-tab1">
                            <a class="nav-link tab-list active" data-toggle="tab" href="#upcoming-events" role="tab">Pengumuman Terbaru</a>
                        </li>
                    </ul>
                </div>
            </div>
            <br>
            <div class="row">
                <!-- Tab panes -->
                <div class="tab-content">
                    <div class="tab-pane active" id="upcoming-events" role="tabpanel">
                        <div class="col-md-12">
                            <div class="row">

                                <!-- PHP: Koneksi dan Query Database -->
                                <?php
                                include './koneksi.php';

                                // Query untuk mengambil data pengumuman
                                $query = "SELECT * FROM pengumuman ORDER BY pengumuman_tanggal DESC";
                                $result = mysqli_query($koneksi, $query);

                                // Cek apakah query berhasil dan ada data
                                if ($result && mysqli_num_rows($result) > 0) {
                                    // Looping data hasil query
                                    while ($row = mysqli_fetch_object($result)) {
                                ?>
                                        <div class="col-md-2">
                                            <div class="event-date">
                                                <h4><?php echo date("d", strtotime($row->pengumuman_tanggal)); ?></h4>
                                            </div>
                                            <span class="event-time"><?php echo date("M Y", strtotime($row->pengumuman_tanggal)); ?></span>
                                        </div>
                                        <div class="col-md-10">
                                            <div class="event-heading">
                                                <a href="isi_pengumuman.php">
                                                <h3><?php echo $row->judul; ?></h3>
                                                <p><?php echo $row->isi; ?></p>
                                            </div>
                                        </div>
                                        <hr class="event-underline">
                                    <?php
                                    }
                                } else {
                                    // Jika tidak ada data pengumuman
                                    ?>
                                    <div class="col-md-12">
                                        <p>Tidak ada pengumuman yang tersedia.</p>
                                    </div>
                                <?php
                                }
                                ?>
                        <div class="col-md-12 text-center">
                            <?php echo $page; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--//END EVENTS -->
    <!--============================= FOOTER =============================-->
    <?php
    include "./adds/footer.php";
    ?>
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
