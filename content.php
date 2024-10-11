 <!-- Main content -->
 <div class="content">
     <div class="container-fluid">
         <?php
            if (isset($_GET['page'])) {
                $page = $_GET['page'];
                switch ($page) {
                    case 'home':
                        include "";
                        break;
                    case 'guru':
                        include "./guru.php";
                        break;
                    case 'pengumuman':
                        include "./pengumuman.php";
                        break;
                    case 'galery':
                        include "./galery.php";
                        break;
                    case 'postingan':
                        include "./postingan.php";
                        break;
                    case 'about':
                        include "./about.php";
                        break;
                    default:
                    case 'kontak':
                        include "./kontak.php";
                        break;
                        default:
                        case 'perbaikan':
                            include "./adds/perbaikan.php";
                            break;
                    default:
                        echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
                        break;
                }
            } else {
                include "../index.php";
            }

            ?>
     </div><!-- /.container-fluid -->
 </div>
 <!-- /.content -->