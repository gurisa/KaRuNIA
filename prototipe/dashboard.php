<!DOCTYPE html>
<html>

<head>
  <?php include_once("src/niceadmin/headmeta.php"); ?>
  <title>Beranda - KaRuNIA</title>
</head>

<body>
  <!-- container section start -->
  <section id="container" class="">
    <?php include_once("src/niceadmin/navbar.php"); ?>
    <?php include_once("src/niceadmin/sidebar.php"); ?>

    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <!--overview start-->
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-laptop"></i> Beranda</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-laptop"></i>Beranda</li>
            </ol>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <div class="info-box blue-bg">
              <i class="fa fa-cloud-download"></i>
              <div class="count">6.674</div>
              <div class="title">Dilihat</div>
            </div>
            <!--/.info-box-->
          </div>
          <!--/.col-->

          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <div class="info-box dark-bg">
              <i class="fa fa-thumbs-o-up"></i>
              <div class="count">4.362</div>
              <div class="title">Dipesan</div>
            </div>
            <!--/.info-box-->
          </div>
          <!--/.col-->

          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <div class="info-box brown-bg">
              <i class="fa fa-shopping-cart"></i>
              <div class="count">7.538</div>
              <div class="title">Terjual</div>
            </div>
            <!--/.info-box-->
          </div>
          <!--/.col-->

          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <div class="info-box green-bg">
              <i class="fa fa-cubes"></i>
              <div class="count">1.426</div>
              <div class="title">Tersedia</div>
            </div>
            <!--/.info-box-->
          </div>
          <!--/.col-->

        </div>
        <!--/.row-->

        <div class="row">

          <div class="col-lg-6 col-md-12">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h2><i class="fa fa-flag-o red"></i><strong>Fasilitas</strong></h2>
                <div class="panel-actions">
                  <a href="#" class="btn-setting"><i class="fa fa-rotate-right"></i></a>
                  <a href="#" class="btn-minimize"><i class="fa fa-chevron-up"></i></a>
                  <a href="#" class="btn-close"><i class="fa fa-times"></i></a>
                </div>
              </div>
              <div class="panel-body">
                <table class="table bootstrap-datatable countries">
                  <thead>
                    <tr>
                      <th>Nama</th>
                      <th>Lokasi</th>
                      <th>Kondisi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Toilet Pria</td>
                      <td>Gedung A1</td>
                      <td>
                        <div class="progress thin">
                          <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="86" aria-valuemin="0" aria-valuemax="100" style="width: 86%">
                          </div>
                          <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="14" aria-valuemin="0" aria-valuemax="100" style="width: 14%">
                          </div>
                        </div>
                        <span class="sr-only">86%</span>
                      </td>
                    </tr>
                    <tr>
                      <td>Panggung Utama</td>
                      <td>Gedung C3</td>
                      <td>
                        <div class="progress thin">
                          <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="93" aria-valuemin="0" aria-valuemax="100" style="width: 93%">
                          </div>
                          <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="7" aria-valuemin="0" aria-valuemax="100" style="width: 7%">
                          </div>
                        </div>
                        <span class="sr-only">93%</span>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>

            </div>

          </div>
          <!--/col-->

          <div class="col-lg-6 col-md-12">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h2><i class="fa fa-flag-o red"></i><strong>Properti</strong></h2>
                <div class="panel-actions">
                  <a href="#" class="btn-setting"><i class="fa fa-rotate-right"></i></a>
                  <a href="#" class="btn-minimize"><i class="fa fa-chevron-up"></i></a>
                  <a href="#" class="btn-close"><i class="fa fa-times"></i></a>
                </div>
              </div>
              <div class="panel-body">
                <table class="table bootstrap-datatable countries">
                  <thead>
                    <tr>
                      <th>Nama</th>
                      <th>Jenis</th>
                      <th>Jumlah</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Lampu Sorot</td>
                      <td>Peralatan Panggung</td>
                      <td>25</span>
                      </td>
                    </tr>
                    <tr>
                      <td>Sound System</td>
                      <td>Peralatan Panggung</td>
                      <td>10</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <!--/col-->

        </div>
        <!-- statics end -->

        <div class="row">

          <div class="col-md-4 portlets">
            <div class="panel panel-default">
              <div class="panel-heading">
                <div class="pull-left">Obrolan</div>
                <div class="widget-icons pull-right">
                  <a href="#" class="wminimize"><i class="fa fa-chevron-up"></i></a>
                  <a href="#" class="wclose"><i class="fa fa-times"></i></a>
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
                      <input type="text" class="form-control" placeholder="Ketikan pesan..">
                    </div> &nbsp;
                    <button type="submit" class="btn btn-info">Kirim</button>
                  </form>
                </div>
              </div>

            </div>
          </div>

          <div class="col-lg-8">
            <section class="panel">
              <div class="panel-body progress-panel">
                <div class="row">
                  <div class="col-lg-8 task-progress pull-left">
                    <h1>Aktivitas terakhir</h1>
                  </div>
                  <div class="col-lg-4">
                    <span class="profile-ava pull-right">
                    <img alt="" class="simple" src="src/files/user/wulan.jpg" width="35px" height="35px">Wulan Anita</span>
                  </div>
                </div>
              </div>
              <table class="table table-hover personal-task">
                <tbody>
                  <tr>
                    <td>Hari ini</td>
                    <td>Data stok barang baru.</td>
                    <td><span class="badge bg-important">Unggah</span></td>
                    <td>
                      <span class="profile-ava">
                      <img alt="" class="simple" src="src/files/user/wulan.jpg" width="35px" height="35px">
                      </span>
                    </td>
                  </tr>
                  <tr>
                    <td>Kemarin</td>
                    <td>Lihat laporan</td>
                    <td><span class="badge bg-success">Lihat</span></td>
                    <td><div id="work-progress2"></div>
                    </td>
                  </tr>
                  <tr>
                    <td>21-06-17</td>
                    <td>Lihat laporan</td>
                    <td><span class="badge bg-success">Lihat</span></td>
                    <td><div id="work-progress3"></div></td>
                  </tr>
                  <tr>
                    <td>22-06-17</td>
                    <td>Cetak dokumen pengguna</td>
                    <td><span class="badge bg-primary">Cetak</span></td>
                    <td>
                      <span class="profile-ava">
                      <img alt="" class="simple" src="src/files/user/wulan.jpg" width="35px" height="35px">
                      </span>
                    </td>
                  </tr>
                </tbody>
              </table>
            </section>
          </div>
        </div>

      </section>
      <div class="text-right">
        <div class="credits">
          <?php include_once("src/niceadmin/footer.php"); ?>
        </div>
      </div>
    </section>
    <!--main content end-->
  </section>
  <!-- container section start -->

  <?php include_once("src/niceadmin/footermeta.php"); ?>
  <!-- custom script for this page-->
  <script src="src/niceadmin/js/sparkline-chart.js"></script>
  <script src="src/niceadmin/js/easy-pie-chart.js"></script>
  <script src="src/niceadmin/js/jquery-jvectormap-1.2.2.min.js"></script>
  <script src="src/niceadmin/js/jquery-jvectormap-world-mill-en.js"></script>
  <script src="src/niceadmin/js/xcharts.min.js"></script>
  <script src="src/niceadmin/js/jquery.autosize.min.js"></script>
  <script src="src/niceadmin/js/jquery.placeholder.min.js"></script>
  <script src="src/niceadmin/js/gdp-data.js"></script>
  <script src="src/niceadmin/js/morris.min.js"></script>
  <script src="src/niceadmin/js/sparklines.js"></script>
  <script src="src/niceadmin/js/charts.js"></script>
  <script src="src/niceadmin/js/jquery.slimscroll.min.js"></script>
  <script>
    //knob
    $(function() {
      $(".knob").knob({
        'draw': function() {
          $(this.i).val(this.cv + '%')
        }
      })
    });

    //carousel
    $(document).ready(function() {
      $("#owl-slider").owlCarousel({
        navigation: true,
        slideSpeed: 300,
        paginationSpeed: 400,
        singleItem: true

      });
    });

    //custom select box

    $(function() {
      $('select.styled').customSelect();
    });

    /* ---------- Map ---------- */
    $(function() {
      $('#map').vectorMap({
        map: 'world_mill_en',
        series: {
          regions: [{
            values: gdpData,
            scale: ['#000', '#000'],
            normalizeFunction: 'polynomial'
          }]
        },
        backgroundColor: '#eef3f7',
        onLabelShow: function(e, el, code) {
          el.php(el.php() + ' (GDP - ' + gdpData[code] + ')');
        }
      });
    });
  </script>

</body>

</html>
