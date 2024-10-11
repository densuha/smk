  <!-- Content Header (Page header) -->
  <div class="content-header">
      <div class="container-fluid">
          <?php
            if (isset($_GET['page'])) {
                $page = $_GET['page'];

                switch ($page) {
                    case 'users':
                        include "users/content-header.php";
                        break;
                    case 'artikel':
                        include "artikel/content-header.php";
                        break;
                    case 'kategori':
                        include "kategori/content-header.php";
                        break;
                    case 'menu':
                        include "menu/content-header.php";
                        break;
                    case 'home':
                        include "home/content-header.php";
                        break;
                    case 'agenda':
                            include "agenda/content-header.php";
                            break;
                    default:
                        echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
                        break;
                }
            } else {
                include "/home.php";
            }

            ?>

      </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->