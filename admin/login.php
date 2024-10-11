<?php
session_start();
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

if (isset($_SESSION['username'])) {
  header('location: login.php');
}

if (isset($_POST['submit'])) {
  include("koneksi.php");

  $username = $_POST['username'];
  $password = md5($_POST['password']);

  $sql = "SELECT * FROM login WHERE username = '$username' AND password = '$password'";
  $result = mysqli_query($koneksi, $sql);

  if ($result->num_rows > 0) {
    $row = mysqli_fetch_array($result);
    $_SESSION['username'] = $row['username'];
    $_SESSION['id'] = $row['id'];

    header('location: menu/index.php?page=home');
    exit();
  } else {
    echo "<script>alert('Username salah')</script>";
  }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>ADMIN | PANEL</title>

  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
   <!-- Google Font: Source Sans Pro -->
   <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
   <!-- Font Awesome Icons -->
   <link rel="stylesheet" href="../assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
   <link rel="stylesheet" href="../assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
   <link rel="stylesheet" href="../assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
   <link rel="stylesheet" href="../assets/plugins/fontawesome-free/css/all.min.css">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

   <!-- Theme style -->
   <link rel="stylesheet" href="../assets/dist/css/adminlte.min.css">
</head>

<body class="hold-transition login-page">
  
<div class="preloader flex-column justify-content-center align-items-center">
         <img class="animation__shake" src="../assets/dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
      </div>
  <div class="login-box">
  <p class="login-box-msg"> <img width="100px;" src="./menu/logo_smk.png"></p>
    <div class="login-logo">
      <a href="index2.html"><b>Admin Panel</b></a>
    </div>
    <!-- /.login-logo -->
    <div class="card">
      <div class="card-body login-card-body">
        <p class="login-box-msg">Silahkan Sign Terlebih Dahulu</p>

        <form action="login.php" method="post">
          <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Username" name="username" />
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-user"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="password" class="form-control" placeholder="Password" name="password" />
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-8">
              <div class="icheck-primary">
                <input type="checkbox" id="remember" />
                <label for="remember"> Remember Me </label>
              </div>
            </div>
            <!-- /.col -->
            <div class="col-4">
              <button type="submit" class="btn btn-primary btn-block" name="submit">
                Masuk
              </button>
            </div>
            <!-- /.col -->
          </div>
        </form>
      </div>
      <!-- /.social-auth-links -->
    
    <p><center>Copyright <?php echo date('Y');?> SMKN 1 BUAHDUA <br/> All Right Reserved</center></p>
  </div>
    </div>
    <!-- /.login-card-body -->
  </div>
  <!-- /.login-box -->
   <!-- jQuery -->
   <script src="../assets/plugins/jquery/jquery.min.js"></script>
   <script src="../assets/plugins/datatables/jquery.dataTables.min.js"></script>
   <script src="../assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
   <script src="../assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
   <script src="../assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
   <script src="../assets/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
   <script src="../assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
   <script src="../assets/plugins/jszip/jszip.min.js"></script>
   <script src="../assets/plugins/pdfmake/pdfmake.min.js"></script>
   <script src="../assets/plugins/pdfmake/vfs_fonts.js"></script>
   <script src="../assets/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
   <script src="../assets/plugins/datatables-buttons/js/buttons.print.min.js"></script>
   <script src="../assets/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
   <!-- Bootstrap 4 -->
   <script src="../assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
   <!-- AdminLTE App -->
   <script src="../assets/dist/js/adminlte.min.js"></script>
</body>

</html>