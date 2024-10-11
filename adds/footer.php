<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="foot-logo">
                    <a href="#">
                        <img src="./css/images/logo-dark.png" class="img-fluid" alt="footer_logo">
                    </a>
                    <p><?php echo date('Y');?> © copyright by SMKN 1 BUAHDUA</a> <br>All rights reserved.</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="sitemap">
                        <h3>Menu Utama</h3>
                        <ul>
                            <li><a href="<?= $base_url ?>index.php?categori=1" class="nav-link  <?php if ($page == 'categori=1') { ?>active<?php } ?>" class="nav-link" >Home</a></li>
                            <li><a href="<?= $base_url ?>index.php?categori=8" class="nav-link  <?php if ($page == 'categori=8') { ?>active<?php } ?>" class="nav-link">About</a> </li>
                            <li><a href="<?= $base_url ?>index.php?categori=1" class="nav-link  <?php if ($page == 'categori=7') { ?>active<?php } ?>" class="nav-link" >Gallery</a></li>
                            <li><a href="<?= $base_url ?>index.php?categori=1" class="nav-link  <?php if ($page == 'categori=9') { ?>active<?php } ?>" class="nav-link" >Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3">
                  <div class="sitemap">
                      <h3>Akademik</h3>
                      <ul>
                          <li><a href="<?= $base_url ?>index.php?categori=2" class="nav-link  <?php if ($page == 'categori=2') { ?>active<?php } ?>" class="nav-link" >Guru</a></li>
                          <li><a href="<?= $base_url ?>index.php?categori=10" class="nav-link  <?php if ($page == 'categori=10') { ?>active<?php } ?>" class="nav-link" >Siswa </a></li>
                          <li><a href="<?= $base_url ?>index.php?categori=3" class="nav-link  <?php if ($page == 'categori=3') { ?>active<?php } ?>" class="nav-link" >Pengumuman</a></li>
                      </ul>
                  </div>
                </div>
                <div class="col-md-3">
                    <div class="address">
                        <h3>Hubungi Kami</h3>
                        <p><span>Alamat: </span> Jln.Raya, Bojongloa, Kec. Buahdua, Kabupaten Sumedang, Jawa Barat </p>
                        <p>Email : info@smkn1buahdua.sch.id
                            <br> Phone : +6280000000 </p>
                            <ul class="footer-social-icons">
                                        <li><a href="https://www.facebook.com/smknegeribuahdua/"><i class="fa fa-facebook fa-fb" aria-hidden="true"></i></a></li>
                                        <li><a href="https://www.instagram.com/sabda_smkn1buahdua/"><i class="fa fa-instagram fa-in" aria-hidden="true"></i></a></li>
                                        <li><a href="https://www.youtube.com/channel/UCcEDH5YygxNcE3CXB0covgg"><i class="fa fa-youtube fa-tw" aria-hidden="true"></i></a></li>
                                    </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>