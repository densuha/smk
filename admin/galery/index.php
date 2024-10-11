<!DOCTYPE html>
<html lang="en" <html>

<head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <title>data Galery</title>
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
               <!-- /.sidebar -->
      <?php include '../sidebar.php'; ?>
               <!-- /.sidebar -->
      <div class="content-wrapper">
         <div class="content-header">
            <div class="container-fluid">
               <div class="row mb-2">
                  <div class="col-sm-6">
                     <h1 class="m-0">Galery</h1>
                  </div><!-- /.col -->
                  <div class="col-sm-6">
                     <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active">Data
                           Galery</li>
                     </ol>
                  </div>
               </div>
            </div>
         </div>
         <!-- MAIN CONTENT -->
         <section class="content">
            <div class="card">
               <div class="card-header">
                  <h3 class="card-title">Tabel Galery</h3>
                  <a href="tambah.php?page=galery" class="btn btn-primary 
float-right">Tambah Data</a>
               </div>
               <!-- /.card-header -->
               <div class="card-body">
                  <table class="table table-bordered">
                     <thead>
                        <tr>
                           <th style="width: 10px">No</th>
                           <th>Nama Gambar</th>
                           <th>Gambar</th>
                           <th>Aksi</th>
                        </tr>
                     </thead>
                     <tbody>
                        <?php
                        include '../../koneksi.php';
                        $no = 1;
                        $query = mysqli_query($koneksi, "SELECT * FROM galery");
                        while ($data = mysqli_fetch_array($query)) {
                        ?>
                           <tr>
                              <td><?= $no++; ?></td>
                              <td><?= $data['nama_gambar']; ?></td>
                              <td class="text-center"><img width="100" src="gambar/<?= $data['gambar']; ?>" width="100px"></td>
                              <td class="text-center">
                                 <a href="edit.php?id=<?=
                                                      $data['id']; ?>&page=galery" class="btn btn-warning">Edit</a>
                                 <a href="proses_hapus.php?id=<?=
                                                               $data['id']; ?>&page=galery" class="btn btndanger">Hapus</a>
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
   <script src="../../assets/dist/js/adminlte.js"></script>
</body>

</html>