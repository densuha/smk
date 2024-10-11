 <!-- Main content -->
 <div class="content">
     <div class="container-fluid">
         <?php
            if (isset($_GET['page'])) {
                $page = $_GET['page'];
                switch ($page) {
                    case 'menu':
                        include "smk/menu/index.php";
                        break;
                    case 'utama':
                        include "smk/utama/index.php";
                        break;
                    case 'kepala':
                        include "smk/kepala/index.php";
                        break;
                    case 'guru':
                        include "smk/guru/index.php";
                        break;        
                    case 'pengumuman':
                        include "smk/pengumuman/index.php";
                        break;
                    case 'social':
                        include "smk/social/index.php";
                        break;
                    case 'about':
                        include "smk/about/index.php";
                        break;
                    case 'galery':
                        include "smk/galery/index.php";
                        break;
                    case 'inbox':
                        include "smk/inbox/index.php";
                        break;
                    case 'logout':
                        include "smk/admin/logout.php";
                        break;
                    default:
                        echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
                        break;
                }
            } else {
                include "/menu/index.php";
            }

            ?>
     </div><!-- /.container-fluid -->
 </div>
 <!-- /.content -->