<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
include("../koneksi.php");
$base_url = "http://localhost/smk/admin";
$page  = $_GET['page'];

$kategori = mysqli_query($koneksi, 'SELECT count(*) jml FROM kategori');
$row_kategori = mysqli_fetch_assoc($kategori);
$galery = mysqli_query($koneksi, 'SELECT count(*) jml FROM galery');
$row_galery = mysqli_fetch_assoc($galery);
$social = mysqli_query($koneksi, 'SELECT count(*) jml FROM social');
$row_social = mysqli_fetch_assoc($social);
$about = mysqli_query($koneksi, 'SELECT count(*) jml FROM about');
$row_about = mysqli_fetch_assoc($about);
?>

<!DOCTYPE html>
<html lang="en" <html>

<head>
   <meta charset="utf-8">
   <link rel="shorcut icon" type="text/css" href="./assets/images/icon.png">
   <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
   <title>Admin Panel</title>
   <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
   <!-- Google Font: Source Sans Pro -->
   <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
   <!-- Font Awesome Icons -->
   <link rel="stylesheet" href="../../assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
   <link rel="stylesheet" href="../../assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
   <link rel="stylesheet" href="../../assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
   <link rel="stylesheet" href="../../assets/plugins/fontawesome-free/css/all.min.css">

   <!-- Theme style -->
   <link rel="stylesheet" href="../../assets/dist/css/adminlte.min.css">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
   <div class="wrapper">

      <div class="preloader flex-column justify-content-center align-items-center">
         <img class="animation__shake" src="../../assets/dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
      </div>
<!-- Navbar -->
      <?php include '../navbar.php'; ?>
      <?php include '../sidebar.php'; ?>
      <!-- /.col -->
      <div class="content-wrapper">
      <!-- MAIN CONTENT -->
      <?php include 'content.php'; ?>

      <?php include 'grafik.php'; ?>
      </div>
      </section>
      <!-- MAIN CONTENT -->
      <?php include '../footer.php'; ?>
      <aside class="control-sidebar control-sidebar-dark">
      </aside>
   </div>
   <!-- jQuery -->
   <script src="../../assets/plugins/jquery/jquery.min.js"></script>
   <script src="../../assets/plugins/datatables/jquery.dataTables.min.js"></script>
   <script src="../../assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
   <script src="../../assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
   <script src="../../assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
   <script src="../../assets/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
   <script src="../../assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
   <script src="../../assets/plugins/jszip/jszip.min.js"></script>
   <script src="../../assets/plugins/pdfmake/pdfmake.min.js"></script>
   <script src="../../assets/plugins/pdfmake/vfs_fonts.js"></script>
   <script src="../../assets/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
   <script src="../../assets/plugins/datatables-buttons/js/buttons.print.min.js"></script>
   <script src="../../assets/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
   <!-- Bootstrap 4 -->
   <script src="../../assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
   <!-- AdminLTE App -->
   <script src="../../assets/dist/js/adminlte.min.js"></script>
   <script>
      function confirmDelete() {
         if (confirm('Anda yakin menghapus data?')) {
            //action confirmed
            alert('Data berhasil dihapus');
         } else {
            //action cancelled
            alert('Data batal di hapus');
            return false;

         }
      }
   </script>
   <script>
      $(function() {
         $("#tabel").DataTable({
            "responsive": true,
            "lengthChange": false,
            "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
         }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');

         $('#tabel-simpel').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
         });
      });
   </script>

</body>

</html>