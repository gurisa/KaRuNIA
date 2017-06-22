<?php include_once("header.php"); ?>

  <!-- Our Story -->
  <section class="our-story section-space-padding pattern-bg">
    <div class="container">
        <!-- Carousel Two (Services) Start -->
        <div class="row">
          <div class="col-md-10 col-sm-8 col-xs-12 col-sm-offset-1">
            <div class="section-title margin-top-50 margin-bottom-50">
              <h2>Fasilitas dan <span class="section-title-style">Properti</span></h2>
              <i class="icon-energy icon-style color-5"></i>
              <div class="row">

                <?php for ($i=0; $i<count($property);$i++) { ?>
                <div class="col-sm-6">
                  <div class="our-services">
                    <p><img src="src/files/gallery/<?php echo $property[$i]["path"]; ?>" width="100%" height="200px" /></p>
                    <h3><?php echo $property[$i]["name"]; ?></h3>
                    <p><?php echo $property[$i]["description"]; ?></p>
                  </div>
                </div>
                <?php } ?>

              </div>
            </div>
          </div>
        </div>
        <!-- Carousel Two (Services) End -->

        <!-- Carousel One (About Us and Statistics) Start -->
        <div class="row">
          <!-- About Us Start -->
          <div class="col-md-10 col-sm-8 col-xs-12 col-sm-offset-1">
            <div class="section-title margin-top-50">
              <h2>Tentang <span class="section-title-style"> Kami</span></h2>
              <i class="icon-organization icon-style color-1"></i>
              <p>Trans Studio Mall Bandung atau disingkat TSM (dahulu Bandung Supermal (BSM)) merupakan pusat pembelanjaan terbesar di Bandung yang upacara diresmikan hingga upacara pembukaan sejak pada tanggal 25 Oktober 2001 dengan nama Bandung Supermal,
                dengan lokasi yang strategis di Jalan Jenderal Gatot Subroto. Mal ini terdiri dari 5 lantai dengan penyewa-penyewa yang sudah terkenal sebagai perusahaan besar baik skala nasional maupun internasional antara lain Metro Department Store,
                Gramedia, TSM XXI, Trans Studio Bandung, Hero Supermarket, dan masih banyak lagi. Mal ini adalah bagian dari CT Corp, milik konglomerat Chairul Tanjung.</p>
            </div>
          </div>
          <!-- About Us End -->
        </div>
        <!-- Carousel One (About Us and Statistics) End -->

        <!-- Carousel Four (Contact Us) Start -->
        <div class="row">
          <div class="col-md-10 col-sm-8 col-xs-12 col-sm-offset-1">

            <div class="section-title margin-top-50 margin-bottom-50">
              <h2>Kontak <span class="section-title-style">Kami</span></h2>
              <a class="map-popup" href="https://maps.google.com/maps?"><i class="icon-location-pin icon-style map-icon bounce color-4"></i></a>

              <!-- Contact Detail Start -->
              <div class="text-center margin-top-50 margin-bottom-40">
                <div class="row">

                  <div class="col-md-4 col-sm-4">
                    <div class="contact-us-detail">
                      <i class="icon-screen-smartphone color-6"></i>
                      <p><a href="#">+622xxxxxxxx</a></p>
                    </div>
                  </div>

                  <div class="col-md-4 col-sm-4">
                    <div class="contact-us-detail">
                      <i class="icon-envelope-letter color-5"></i>
                      <p><a href="#">tsm@tsm.com</a></p>
                    </div>
                  </div>

                  <div class="col-md-4 col-sm-4">
                    <div class="contact-us-detail">
                      <i class="icon-clock color-3"></i>
                      <p>Senin-Jumat, 09:00-18:00</p>
                    </div>
                  </div>

                </div>
              </div>
              <!-- Contact Detail End -->

              <!-- Contact Form Start -->
              <div class="row">
                <div class="col-md-12">
                  <form>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <input type="text" id="name" class="form-control" placeholder="Nama Anda">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <input type="email" id="email" class="form-control" placeholder="Email Anda">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <input type="text" id="website" class="form-control" placeholder="Website Anda">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <input type="text" id="address" class="form-control" placeholder="Alamat Anda">
                      </div>
                    </div>
                    <div class="col-sm-12">
                      <select id="subject" class="form-group form-control">
                        <option value="" selected disabled>Subjek</option>
                        <option>Kunjungan Kerja</option>
                        <option>Pemesanan Properti</option>
                        <option>Pesan Pribadi</option>
                        <option>Lainnya</option>
                      </select>
                    </div>
                    <div class="col-sm-12">
                      <div class="textarea-message form-group">
                        <textarea id="message" class="textarea-message form-control" placeholder="Pesan anda" rows="5"></textarea>
                      </div>
                    </div>
                    <div class="text-center">
                      <button type="submit" class="button button-style">Kirim</button>
                    </div>
                  </form>

                </div>

              </div>
              <!-- Contact Form End -->

            </div>
          </div>
        </div>
        <!-- Carousel Four (Contact Us) End -->

    </div>
  </section>
  <!-- Our Story End -->

  <?php include_once("footer.php"); ?>
