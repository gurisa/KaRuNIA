<!DOCTYPE html>
<html lang="en">

<head>
  <?php include_once("src/niceadmin/headmeta.php"); ?>
    <title>Administrator - KaRuNIA</title>
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
            <h3 class="page-header"><i class="icon_genius"></i> Administrator</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="dashboard.php">Beranda</a></li>
              <li><i class="icon_genius"></i>Administrator</li>

          </div>
        </div>

        <div class="row">
          <div class="col-md-3">
            <header class="panel-heading">Menu</header>
            <div class="list-group">
              <a class="list-group-item" href="javascript:;">
                <h4 class="list-group-item-heading">Umum</h4>
                <p class="list-group-item-text">Kelola Pengaturan Aplikasi</p>
              </a>
              <a class="list-group-item active" href="javascript:;">
                <h4 class="list-group-item-heading">Pengguna</h4>
                <p class="list-group-item-text">Kelola Data Pengguna</p>
              </a>
            </div>
          </div>
          <div class="col-md-9">
            <section class="panel">
              <header class="panel-heading">Data Pengguna</header>
              <table class="table table-striped table-advance table-hover">
                <tbody>
                  <tr>
                    <th><i class="icon_mobile"></i> Foto</th>
                    <th><i class="icon_profile"></i> Nama</th>
                    <th><i class="icon_calendar"></i> Tanggal Lahir</th>
                    <th><i class="icon_mail_alt"></i> Pekerjaan</th>
                    <th><i class="icon_pin_alt"></i> Alamat</th>
                    <th><i class="icon_cogs"></i> Operasi</th>
                  </tr>
                  <?php for ($i=0; $i<count($users);$i++) { ?>
                  <tr>
                    <td><img src="src/files/user/<?php echo $users[$i]["photo"]; ?>" width="50px" height="50px" /></td>
                    <td><?php echo $users[$i]["name"]; ?></td>
                    <td><?php echo $users[$i]["birthdate"]; ?></td>
                    <td><?php echo $users[$i]["job"]; ?></td>
                    <td><?php echo $users[$i]["address"]; ?></td>
                    <td>
                      <div class="btn-group">
                        <a class="btn btn-primary" href="#"><i class="icon_plus_alt2"></i></a>
                        <a class="btn btn-danger" href="#"><i class="icon_close_alt2"></i></a>
                      </div>
                    </td>
                  </tr>
                  <?php } ?>
                </tbody>
              </table>
              <button type="button" class="btn btn-primary btn-lg btn-block"><i class="icon_plus_alt2"></i> Tambah Data Pengguna</button>
            </section>
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
  <!-- container section end -->

  <?php include_once("src/niceadmin/footermeta.php"); ?>
  <script>$(".knob").knob();</script>
</body>
</html>
