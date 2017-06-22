<!DOCTYPE html>
<html>

<head>
  <!-- Meta Tag -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="apple-touch-icon" sizes="144x144" type="image/x-icon" href="src/wesoon/images/favicon/apple-touch-icon.png">
  <link rel="stylesheet" type="text/css" href="src/wesoon/css/plugin.css">
  <link rel="stylesheet" type="text/css" href="src/wesoon/css/style.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:400,300,500,600,700">
  <title>Prototipe | Kelompok KaRuNIA | IMK - 6</title>
</head>
<body>
  <?php include_once("assets.php"); ?>
  <!-- Preloader Start -->
  <div class="preloader">
    <i class="icon-clock fa-spin"></i>
  </div>
  <!-- Preloader End -->

  <!-- Home Section Start -->
  <section class="home-section-background padding-bottom-0">
    <div class="container">
      <!-- Logo Start -->
      <div class="text-center">
        <img src="src/wesoon/images/logo/logo.png" width="200px" height="300px">
      </div>
      <!-- Logo End -->
      <div class="row">
        <div class="col-md-12">
          <!-- Home Section Heading Start -->
          <div class="header-section margin-top-40 margin-bottom-40">
            <h2>PROTOTIPE</h2>
            <p>Sistem Informasi Monitoring Fasilitas dan Properti Berbasis Web</p>
            <div class="text-center">
              <a class="button button-style" data-toggle="" data-target="" href="signin.php">Mari Berkarya</a>
            </div>
          </div>
          <!-- Home Section Heading End -->

        </div>
      </div>
    </div>
  </section>
  <!-- Home Section End -->

  <!-- Subscribe Modal Start -->
  <div class="modal fade subscribe padding-top-120" id="berkaryamodal" role="dialog">
    <div class="modal-dialog">

      <div class="modal-content pattern-bg">
        <div class="modal-body">
          <div class="row">
            <div class="col-sm-12">
              <div class="section-title">
                <button type="button" class="btn pull-right" data-dismiss="modal"><i class="fa fa-close"></i></button>
                <h2>Mari <span class="section-title-style">Bergabung</span></h2>
                <i class="icon-paper-plane icon-style color-6"></i>

                <div class="margin-top-80">
                  <form id="mc-form" method="post" action="">
                    <div class="subscribe-form">
                      <input id="mc-email" type="email" placeholder="Alamat Email" class="text-input">
                      <button class="submit-btn" type="button">Kirim</button>
                    </div>
                    <label for="mc-email" class="mc-label"></label>
                  </form>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Subscribe Modal End -->
