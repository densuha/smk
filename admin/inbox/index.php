<?php
// Jika halaman inbox diakses, update semua status pesan menjadi '0'
include '../koneksi.php'; // Pastikan file koneksi sudah terhubung

// Update status semua pesan yang masih memiliki status '1'
mysqli_query($koneksi, "UPDATE inbox SET inbox_status='0' WHERE inbox_status='1'");

// Setelah update, tampilkan pesan
$query_inbox = mysqli_query($koneksi, "SELECT * FROM inbox ORDER BY id DESC");
while ($inbox = mysqli_fetch_assoc($query_inbox)) {
    // Tampilkan data pesan di sini
}
?>

<!DOCTYPE html>
<html lang="en" <html>

<head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <title>data inbox </title>
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

      <?php include '../navbar.php'; ?>

      <?php include '../sidebar.php'; ?>
      <div class="content-wrapper">
         <div class="content-header">
            <div class="container-fluid">
               <div class="row mb-2">
                  <div class="col-sm-6">
                     <h1 class="m-0">inbox </h1>
                  </div><!-- /.col -->
                  <div class="col-sm-6">
                     <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active">Data
                           inbox </li>
                     </ol>
                  </div>
               </div>
            </div>
         </div>
         <!-- MAIN CONTENT -->
         <section class="content">
            <div class="card">
               
               <!-- /.card-header -->
               <div class="card-body">
                  <table class="table table-bordered">
                     <thead>
                        <tr>
                           <th style="width: 10px">No</th>
                           <th>Nama</th>
                           <th>Email</th>
                           <th>Kontak</th>
                           <th>Pesan</th>
                           <th>Tanggal</th>
                           <th>Aksi</th>
                        </tr>
                     </thead>
                     <tbody>
                        <?php
                        include '../../koneksi.php';
                        $no = 1;
                        $query = mysqli_query($koneksi, "SELECT * FROM inbox");
                        while ($data =
                           mysqli_fetch_array($query)
                        ) {
                        ?>
                           <tr>
                              <td><?= $no++; ?></td>
                              <td><?= $data['inbox_nama']; ?></td>
                              <td><?= $data['inbox_email']; ?></td>
                              <td><?= $data['inbox_kontak']; ?></td>
                              <td><?= $data['inbox_pesan']; ?></td>
                              <td><?= $data['inbox_tanggal']; ?></td>
                              <td class="text-center">
                                 <a href="proses_hapus.php?id=<?=$data['id']; ?>&page=inbox" class="btn btndanger">Hapus</a>
                              </td>
                           </tr>
                        <?php }

                        ?>
                     </tbody>
                  </table>
               </div>
               <!-- /.card-body -->
               <div class="card-footer clearfix">
               </div>
            </div>
         </section>
         <!-- MAIN CONTENT -->
      </div>
      <footer class="main-footer">
         <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
         All rights reserved.
         <div class="float-right d-none d-sm-inline-block">
            <b>Version</b> 3.2.0
         </div>
      </footer>
      <aside class="control-sidebar control-sidebar-dark">
      </aside>
   </div>
   <!-- jQuery -->
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
</body>

</html>