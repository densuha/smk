<div class="content ">
  <div class="container-fluid" >
    <div class="row">
      <div class="col-lg-3 col-6">

        <div class="small-box bg-info">
          <div class="inner">
            <h3><?= $row_social['jml'] ?></h3>
            <p>Social</p>
          </div>
          <div class="icon">
            <i class="ion ion-person"></i>
          </div>
          <a href="<?= $base_url ?>/social/index.php?page=social" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <div class="col-lg-3 col-6">
        <div class="small-box bg-danger">
          <div class="inner">
            <h3>
              <?= $row_galery['jml'] ?>
            </h3>
            <p>Galery</p>
          </div>
          <div class="icon">
            <i class="fas fa-camera"></i>
          </div>
          <a href="<?= $base_url ?>/galery/index.php?page=kategori" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <div class="col-lg-3 col-6">
        <div class="small-box bg-danger">
          <div class="inner">
            <h3>
              <?= $row_about['jml'] ?>
            </h3>
            <p>About</p>
          </div>
          <div class="icon">
            <i class="fas fa-th"></i>
          </div>
          <a href="<?= $base_url ?>/about/index.php?page=about" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
    </div>
    <!-- /.card-header -->
    <!-- /.card-body -->
    <div class="card-footer clearfix">
    </div>
  </div>