<!DOCTYPE html>
<html lang="en">

<head>
  <?php include_once("src/niceadmin/headmeta.php"); ?>
    <title>Pesan - KaRuNIA</title>
</head>

<body>
  <!-- container section start -->
  <section id="container" class="">
    <?php include_once("src/niceadmin/navbar.php"); ?>
      <?php include_once("src/niceadmin/sidebar.php"); ?>

        <!--main content start-->
        <section id="main-content">
          <section class="wrapper">
            <div class="row">
              <div class="col-lg-12">
                <h3 class="page-header"><i class="icon_mail_alt"></i> Pesan</h3>
                <ol class="breadcrumb">
                  <li><i class="fa fa-home"></i><a href="dashboard.php">Beranda</a></li>
                  <li><i class="icon_mail_alt"></i>Pesan</li>
                </ol>
              </div>
            </div>

            <div class="row">
              <div class="col-md-12 portlets">
                <div class="panel panel-default">
                  <div class="panel-body">

                    <div class="row">
                      <div class="col-md-5 portlets">
                        <div class="panel panel-default">
                          <div class="panel-heading">
                            <div class="pull-left">Pesan</div>
                            <div class="clearfix"></div>
                          </div>
                          <div class="panel-body">
                            <ul class="chats">
                              <li class="by-me" style="padding:10px;">
                                <div class="avatar pull-left">
                                  <img src="src/files/user/panji.jpg" width="50px" height="50px" alt="" />
                                </div>
                                <div class="">
                                  <div class="chat-meta">Panji <span class="pull-right">1 menit</span></div>
                                  Bu, tolong kirim data stok.
                                  <div class="clearfix"></div>
                                </div>
                              </li>
                              <li class="by-me" style="padding:10px;">
                                <div class="avatar pull-left">
                                  <img src="src/files/user/employee_woman-info.png" width="50px" height="50px" alt="" />
                                </div>
                                <div class="">
                                  <div class="chat-meta">Dwi Septiani <span class="pull-right">15 menit</span></div>
                                  Wulan, besok kita belanja yuk?
                                  <div class="clearfix"></div>
                                </div>
                              </li>
                              <li class="by-me" style="background-color:#f6f6f6; padding:10px;">
                                <div class="avatar pull-left">
                                  <img src="src/files/user/andri.jpg" width="50px" height="50px" alt="" />
                                </div>
                                <div class="">
                                  <div class="chat-meta">Andri A. H. <span class="pull-right">3 jam lalu</span></div>
                                  Data barang baru sudah stok opname?
                                  <div class="clearfix"></div>
                                </div>
                              </li>
                            </ul>

                          </div>
                        </div>
                      </div>

                      <div class="col-md-7 portlets">
                        <div class="panel panel-default">
                          <div class="panel-heading">
                            <div class="pull-left">Obrolan</div>
                            <div class="widget-icons pull-right">
                            </div>
                            <div class="clearfix"></div>
                          </div>

                          <div class="panel-body">
                            <div class="padd sscroll">

                              <ul class="chats">
                                <li class="by-me">
                                  <div class="avatar pull-left">
                                    <img src="src/files/user/andri.jpg" width="50px" height="50px" alt="" />
                                  </div>

                                  <div class="chat-content">
                                    <div class="chat-meta">Andri A. H. <span class="pull-right">3 jam lalu</span></div>
                                    Data barang baru sudah stok opname?
                                    <div class="clearfix"></div>
                                  </div>
                                </li>

                                <li class="by-other">
                                  <div class="avatar pull-right">
                                    <img src="src/files/user/wulan.jpg" width="50px" height="50px" alt="" />
                                  </div>

                                  <div class="chat-content">
                                    <div class="chat-meta">3 hours ago <span class="pull-right">Wulan Anita</span></div>
                                    Iya sudah pak.
                                    <div class="clearfix"></div>
                                  </div>
                                </li>
                              </ul>

                            </div>
                            <div class="widget-foot">
                              <form class="form-inline">
                                <div class="form-group">
                                  <input type="text" class="form-control" placeholder="Ketikan pesan.." >
                                </div>
                                &nbsp;
                                <div class="form-group">
                                  <button type="submit" class="btn btn-info">Kirim</button>
                                </div>
                              </form>
                            </div>
                          </div>

                        </div>
                      </div>

                    </div>

                  </div>
                </div>
              </div>

            </div>

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
