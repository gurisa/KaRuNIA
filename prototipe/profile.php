<!DOCTYPE html>
<html>

<head>
  <?php include_once("src/niceadmin/headmeta.php"); ?>
    <title>Profil Wulan Anita - KaRuNIA</title>
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
                <h3 class="page-header"><i class="fa fa-user-md"></i> Profil</h3>
                <ol class="breadcrumb">
                  <li><i class="fa fa-home"></i><a href="dashboard.php">Beranda</a></li>
                  <li><i class="fa fa-user-md"></i>Profil</li>
                </ol>
              </div>
            </div>
            <div class="row">
              <div class="col-md-9">
                <div class="row">
                  <!-- profile-widget -->
                  <div class="col-lg-12">
                    <div class="profile-widget profile-widget-info">
                      <div class="panel-body">
                        <div class="col-lg-2 col-sm-2">
                          <h4>Wulan Anita</h4>
                          <div class="follow-ava">
                            <img src="src/files/user/wulan.jpg" width="60px" height="60px" alt="">
                          </div>
                          <h6>Administrator</h6>
                        </div>
                        <div class="col-lg-4 col-sm-4 follow-info">
                          <p>Asik, sebentar lagi lebaran \[^_^]/</p>
                          <h6>
                            <span><i class="icon_clock_alt"></i>11:05 AM</span>
                            <span><i class="icon_calendar"></i>25.06.17</span>
                            <span><i class="icon_pin_alt"></i>ID</span>
                          </h6>
                        </div>
                        <div class="col-lg-2 col-sm-6 follow-info weather-category">
                          <ul>
                            <li class="active">
                              <i class="fa fa-comments fa-2x"> </i>
                              <br> Mulai obrolan kamu dengan mengirimkan pesan.
                            </li>
                          </ul>
                        </div>
                        <div class="col-lg-2 col-sm-6 follow-info weather-category">
                          <ul>
                            <li class="active">
                              <i class="fa fa-bell fa-2x"> </i>
                              <br> Lihat seluruh informasi & pemberitahuan terbaru!
                            </li>
                          </ul>
                        </div>
                        <div class="col-lg-2 col-sm-6 follow-info weather-category">
                          <ul>
                            <li class="active">
                              <i class="fa fa-tachometer fa-2x"> </i>
                              <br> Akses data fasilitas dan properti cepat dan tepat!
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- page start-->
                <div class="row">
                  <div class="col-lg-12">
                    <section class="panel">
                      <header class="panel-heading tab-bg-info">
                        <ul class="nav nav-tabs">
                          <li class="active">
                            <a data-toggle="tab" href="#recent-activity">
                              <i class="icon-home"></i> Kegiatan
                            </a>
                          </li>
                          <li>
                            <a data-toggle="tab" href="#profile">
                              <i class="icon-user"></i> Profil
                            </a>
                          </li>
                          <li class="">
                            <a data-toggle="tab" href="#edit-profile">
                              <i class="icon-envelope"></i> Ubah Profil
                            </a>
                          </li>
                        </ul>
                      </header>
                      <div class="panel-body">
                        <div class="tab-content">
                          <div id="recent-activity" class="tab-pane active">
                            <div class="profile-activity">

                              <div class="act-time">
                                <div class="activity-body act-in">
                                  <span class="arrow"></span>
                                  <div class="text">
                                    <a href="#" class="activity-img"><img class="avatar" src="src/files/user/panji.jpg" alt=""></a>
                                    <p class="attribution"><a href="#">Panji</a> 25 Juni 2017, Pukul 11:23</p>
                                    <p>Bu, tolong periksa pesan, thx.</p>
                                  </div>
                                </div>
                              </div>
                              <div class="act-time">
                                <div class="activity-body act-in">
                                  <span class="arrow"></span>
                                  <div class="text">
                                    <a href="#" class="activity-img"><img class="avatar" src="src/files/user/andri.jpg" alt=""></a>
                                    <p class="attribution"><a href="#">Andri A.H. </a> 25 Juni 2017, Pukul 11:25</p>
                                    <p>Pengumuman, seluruh staf besok kita ada meeting ya. <br />Terima kasih.</p>
                                  </div>
                                </div>
                              </div>

                            </div>
                          </div>
                          <!-- profile -->
                          <div id="profile" class="tab-pane">
                            <section class="panel">
                              <div class="panel-body bio-graph-info">
                                <h1>Informasi Pengguna</h1>
                                <div class="row">
                                  <div class="bio-row">
                                    <p><span>Nama </span>: Wulan Anita </p>
                                  </div>
                                  <div class="bio-row">
                                    <p><span>Tanggal Lahir </span>: 29/09/1988</p>
                                  </div>
                                  <div class="bio-row">
                                    <p><span>Alamat </span>: Jl. Bojong Raya No. 26</p>
                                  </div>
                                  <div class="bio-row">
                                    <p><span>Email </span>:wulwul@gmail.com</p>
                                  </div>
                                  <div class="bio-row">
                                    <p><span>Telepon </span>: (+6282) 456789</p>
                                  </div>
                                </div>
                              </div>
                            </section>
                            <section>
                              <div class="row">
                              </div>
                            </section>
                          </div>
                          <!-- edit-profile -->
                          <div id="edit-profile" class="tab-pane">
                            <section class="panel">
                              <div class="panel-body bio-graph-info">
                                <h1> Informasi Pengguna</h1>
                                <form class="form-horizontal" role="form">
                                  <div class="form-group">
                                    <label class="col-lg-2 control-label">Nama</label>
                                    <div class="col-lg-6">
                                      <input type="text" class="form-control" id="f-name" placeholder=" ">
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label class="col-lg-2 control-label">Alamat</label>
                                    <div class="col-lg-6">
                                      <textarea class="form-control" id="c-name" placeholder=" " rows="5" cols="5"></textarea>
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label class="col-lg-2 control-label">Tanggal Lahir</label>
                                    <div class="col-lg-6">
                                      <input type="text" class="form-control" id="b-day" placeholder=" ">
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label class="col-lg-2 control-label">Email</label>
                                    <div class="col-lg-6">
                                      <input type="text" class="form-control" id="email" placeholder=" ">
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label class="col-lg-2 control-label">Telepon</label>
                                    <div class="col-lg-6">
                                      <input type="text" class="form-control" id="mobile" placeholder=" ">
                                    </div>
                                  </div>

                                  <div class="form-group">
                                    <div class="col-lg-offset-2 col-lg-10">
                                      <button type="submit" class="btn btn-primary">Simpan</button>
                                      <button type="button" class="btn btn-danger">Batalkan</button>
                                    </div>
                                  </div>
                                </form>
                              </div>
                            </section>
                          </div>
                        </div>
                      </div>
                    </section>
                  </div>
                </div>
              </div>
              <div class="col-md-3">

            <div class="panel panel-default">
              <div class="panel-heading">
                <h2><strong>Petunjuk</strong></h2>
              </div>
              <div class="panel-body">
                <ol>
                  <li>Anda dapat pindah ke laman atau menu lainnya melalui navigasi dan menu yang sudah tersedia di sebelah kiri dan pojok kanan atas anda.</li>
                  <li>Anda dapat melihat pesan yang anda atau kolega anda kirim melalui tab sub-menu kegiatan.</li>
                  <li>Anda dapat melihat informasi profil anda melalui tab sub-menu profil.</li>
                  <li>Anda dapat mengubah informasi profil anda melalui tab sub-menu ubah profil.</li>
                </ol>
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
  <!-- container section end -->

  <?php include_once("src/niceadmin/footermeta.php"); ?>
  <script>$(".knob").knob();</script>
</body>

</html>
