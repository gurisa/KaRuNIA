<!DOCTYPE html>
<html lang="en">

<head>
  <?php include_once("src/niceadmin/headmeta.php"); ?>
    <title>Galeri - KaRuNIA</title>
</head>

<body>
  <!-- container section start -->
  <section id="container" class="">
    <?php include_once("assets.php"); ?>
    <?php include_once("src/niceadmin/navbar.php"); ?>
    <?php include_once("src/niceadmin/sidebar.php"); ?>

    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="icon_desktop"></i> Galeri</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="dashboard.php">Beranda</a></li>
              <li><i class="icon_desktop"></i>Galeri</li>
            </ol>
          </div>
        </div>
        <!-- page start-->
        <div class="row">
          <div class="col-md-12">

            <div class="row">
              <?php for ($i=0;$i<count($property);$i++) {?>
              <div class="col-md-4">
                <div class="panel panel-default text-center">
                  <div class="panel-body popovers" data-original-title="<?php echo $property[$i]["name"]; ?>" data-content="<?php echo $property[$i]["description"]; ?>" data-placement="bottom" data-trigger="hover">
                    <div style="margin-bottom:5px;">
                      <img src="src/files/gallery/<?php echo $property[$i]["path"]; ?>" width="250px" height="170px" />
                    </div>
                    <div class="btn-group">
                      <a class="btn btn-primary" href="#"><i class="icon_plus_alt2"></i></a>
                      <a class="btn btn-danger" href="#"><i class="icon_close_alt2"></i></a>
                    </div>
                  </div>
                </div>
              </div>
              <?php } ?>
            </div>

            <div class="text-center">
                <ul class="pagination pagination-lg">
                    <li><a href="#">«</a></li>
                    <?php for ($i=1;$i<=10;$i++) {?>
                      <li><a href="#"><?php echo $i; ?></a></li>
                    <?php } ?>
                    <li><a href="#">»</a></li>
                </ul>
            </div>

          </div>
        </div>
        <!-- page end-->
      </section>
    </section>
    <!--main content end-->
    <div class="text-right">
      <div class="credits">
        <?php include_once("src/niceadmin/footer.php"); ?>
      </div>
    </div>
  </section>
  <?php include_once("src/niceadmin/footermeta.php"); ?>
</body>

</html>
