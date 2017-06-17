  <?php include_once("header.php"); ?>

  <?php if ($_SERVER["REQUEST_METHOD"] == "GET" && !isset($_GET["user"])) { ?>
  <div class="slider">
    <ul class="slides">
      <li>
        <img src="src/files/slider/background-1.png" />
        <div class="caption right-center">
          <h3 class="grey-text text-darken-4 bolder">Interaksi Manusia dan Komputer</h3>
          <h5 class="grey-text text-darken-4 bolder">Cepat, tepat dan mudah!</h5>
        </div>
      </li>
      <li>
        <img src="src/files/slider/background-2.png" />
        <div class="caption right-align">
          <h3>Trans Studio Mall - Bandung</h3>
          <h5 class="light grey-text text-lighten-3 bolder">Observasi divisi properti.</h5>
        </div>
      </li>
      <li>
        <img src="src/files/slider/background-3.png" />
        <div class="caption left-align">
          <h3 class="grey-text text-darken-4 bolder">Studi Kasus</h3>
          <h5 class="grey-text text-darken-4 bolder">Sistem Informasi Monitoring Fasilitas dan Properti berbasis web.</h5>
          <h6 class="grey-text text-darken-4 bolder">(pengurus, penulis, karyawan)</h6>
        </div>
      </li>
    </ul>
  </div>

  <div id="kelompok">
    <div class="container">
      <div class="row">
        <div class="col s12 m12" style="margin-top:5px;margin-bottom:5px;">
          <h3 style="text-align:center;">Kelompok KaRuNIA</h3>
        </div>
        <?php for ($i = 0; $i < count($members); $i++) { ?>
        <div class="col s12 m6 <?php if ($i % 2 == 0) { echo "offset-m6"; } ?>">
          <div class="row member-card">
            <?php if ($i % 2 == 1) { ?>
            <div class="col s12 m4">
              <img class="circle responsive-img member-img" src="src/files/member/<?php echo $members[$i]["photo"]; ?>" alt="<?php echo $members[$i]["name"]; ?>" title="<?php echo $members[$i]["name"]; ?>" width="80px" height="80px" />
            </div>
            <?php } ?>
            <div class="col s12 m8">
              <span class="card-title black-text"><?php echo $members[$i]["name"]; ?></span>
              <p>
                NIM: <?php echo $members[$i]["id"]; ?>
                <br />
                Nama: <?php echo $members[$i]["name"]; ?>
              </p>
            </div>
            <?php if ($i % 2 == 0) { ?>
            <div class="col s12 m4">
              <img class="circle responsive-img member-img" src="src/files/member/<?php echo $members[$i]["photo"]; ?>" alt="<?php echo $members[$i]["name"]; ?>" title="<?php echo $members[$i]["name"]; ?>" width="80px" height="80px" />
            </div>
            <?php } ?>
          </div>
        </div>
        <?php } ?>
      </div>
    </div>
  </div>
  <?php } ?>

  <div id="pengguna">
    <div class="container">
      <div class="row">
        <div class="col s12 m12" style="margin-top:5px;margin-bottom:5px;">
          <?php if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["user"])) { ?>
          <?php $id = intval(clean_string($_GET["user"]));?>
          <?php if (between_range($id, 0, count($users))) { ?>
            <h3 style="text-align:center;">Peta Empati <br /><span><?php echo $users[$id]["name"]; ?></span></h3>
          <?php } else { redirect("index.php"); } } else { ?>
            <h3 style="text-align:center;">Data Pengguna</h3>
          <?php } ?>
        </div>

        <?php if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["user"])) { ?>
        <?php if (between_range($id, 0, count($users))) { ?>
        <div id="empathy-map-background" class="col s12 m12" style="margin-top:5px;margin-bottom:5px;">
          <div class="row">
            <div class="col s12 m6 offset-m3" style="margin-top:5px;">
              <h5 style="text-align:center;">Think and Feel</h5>
              <p style="text-align:justify">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
              </p>
            </div>
          </div>
          <div class="row">
            <div class="col s12 m4" style="margin-top:5px;">
              <h5 style="text-align:center;">Listen (Hear)</h5>
              <p style="text-align:justify">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
              </p>
            </div>
            <div class="col s12 m4" style="margin-top:5px;">
              <div id="middle-member-photo">
                <img class="member-img-sized-180 responsive-img member-img" src="src/files/user/<?php echo $users[$id]["photo"]; ?>" alt="<?php echo $users[$id]["name"]; ?>" title="<?php echo $users[$id]["name"]; ?>" />
                <br />
                <span style="font-size:18px; text-align:center; padding:5px;" class="bold uppercase text-wrap"><?php echo $users[$id]["name"]; ?></span>
              </div>
            </div>
            <div class="col s12 m4" style="margin-top:5px;">
              <h5 style="text-align:center;">See</h5>
              <p style="text-align:justify">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
              </p>
            </div>
          </div>
          <div class="row">
            <div class="col s12 m6 offset-m3" style="margin-top:5px;">
              <h5 style="text-align:center;">Speak (Say) and Do</h5>
              <p style="text-align:justify">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
              </p>
            </div>
          </div>
          <div class="row">
            <div class="col s12 m6" style="margin-top:5px;">
              <h5 style="text-align:center;">Pain</h5>
              <p style="text-align:justify">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
              </p>
            </div>
            <div class="col s12 m6" style="margin-top:5px;">
              <h5 style="text-align:center;">Gain</h5>
              <p style="text-align:justify">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
              </p>
            </div>
          </div>
          <div class="row">
            <div class="col s12 m5 offset-m1 " style="margin-top:5px; margin-bottom:5px;">
              <div class="empathy-more">
                <a href="index.php" class="link-empathy-more orange-text darken-4">Lihat Seluruh Pengguna <br />(Halaman Awal)</a>
              </div>
            </div>
            <div class="col s12 m5" style="margin-top:5px; margin-bottom:5px;">
              <div class="empathy-more">
                <a href="#observasi-<?php echo $id; ?>" class="link-empathy-more orange-text darken-4">Informasi Selengkapnya <br />(Hasil Observasi)</a>
              </div>
            </div>
          </div>
        </div>
        <?php } else { redirect("index.php"); } } else { ?>
          <?php for ($i = 0; $i < count($users); $i++) { ?>
          <div class="col s12 m6">
            <div class="card">
              <div class="card-content">
                <div class="row">
                  <div class="col s12 m3">
                    <img class="circle responsive-img member-img" src="src/files/user/<?php echo $users[$i]["photo"]; ?>" alt="<?php echo $users[$i]["name"]; ?>" title="<?php echo $users[$i]["name"]; ?>" />
                  </div>
                  <div class="col s12 m9">
                    <span class="card-title black-text"><?php echo empty_strip($users[$i]["name"]); ?></span>
                    <p>
                      Tanggal Lahir: <?php echo empty_strip($users[$i]["birthdate"]); ?><br />
                      Alamat: <?php echo empty_strip($users[$i]["address"]); ?><br />
                      Pekerjaan: <?php echo empty_strip($users[$i]["job"]); ?><br />
                      Otoritas: <?php echo empty_strip(rewrite_authority($users[$i]["authority"])); ?><br />
                    </p>
                  </div>
                </div>
              </div>
              <div class="card-action read-more">
                <a href="#observasi-<?php echo $i; ?>">Hasil Observasi</a>
                <a href="?user=<?php echo $i; ?>">Peta Empati</a>
              </div>
            </div>
          </div>
          <?php } ?>
        <?php } ?>
      </div>
    </div>
  </div>

  <?php for ($i = 0; $i < count($users); $i++) { ?>
  <div id="observasi-<?php echo $i; ?>" class="modal modal-fixed-footer">
    <div class="modal-content">
    <h5>Identitas Pengguna</h5>
    <div class="row">
      <div class="col s12 m6">
        Nama: <?php echo empty_strip($users[$i]["name"]); ?><br />
        Tanggal Lahir: <?php echo empty_strip($users[$i]["birthdate"]) . " (" . age_year($users[$i]["birthdate"]) . " Tahun)"; ?><br />
        Alamat: <?php echo empty_strip($users[$i]["address"]); ?><br />
      </div>
      <div class="col s12 m6">
        Pekerjaan: <?php echo empty_strip($users[$i]["job"]); ?><br />
        Otoritas: <?php echo empty_strip(rewrite_authority($users[$i]["authority"])); ?><br />
        Foto: (tidak berkenan difoto)<br />
      </div>
    </div>

    <h5>Karakteristik Kebutuhan, Tugas dan Pekerjaan Pengguna</h5>
    <div class="row">
      <div class="col s12 m6">
        Pendidikan Terakhir: <?php echo empty_strip(rewrite_background($users[$i]["edubackground"])); ?><br />
        Kemampuan Membaca: <?php echo empty_strip(rewrite_status($users[$i]["readlevel"])); ?><br />
        Kecepatan Mengetik: <?php echo empty_strip(rewrite_status($users[$i]["typelevel"])); ?><br />
        Kemampuan Menggunakan Komputer: <?php echo empty_strip(rewrite_status($users[$i]["compskill"])); ?><br />
        Pengalaman Menggunakan Komputer: <?php echo empty_strip(rewrite_status($users[$i]["compexp"])); ?><br />
      </div>
      <div class="col s12 m6">
        Pengalaman Menggunakan Sistem: <?php echo empty_strip(rewrite_status($users[$i]["sysexp"])); ?><br />
        Pengalaman Menggunakan Aplikasi: <?php echo empty_strip(rewrite_status($users[$i]["appexp"])); ?><br />
        Bahasa Yang Digunakan: <?php echo empty_strip($users[$i]["language"]); ?><br />
        Terbiasa Menggunakan Lebih Dari 1 Sistem: <?php echo empty_strip(rewrite_ans($users[$i]["multisys"])); ?><br />
      </div>
    </div>

    <h5>Karakteristik Kebutuhan, Tugas dan Pekerjaan Pengguna</h5>
    <div class="row">
      <div class="col s12 m6">
        Frekuensi Menggunakan Aplikasi: <?php echo empty_strip(rewrite_frequency($users[$i]["appfreq"])); ?><br />
        Pelatihan Penggunaan Aplikasi: <?php echo empty_strip(rewrite_training($users[$i]["apptrain"])); ?><br />
        Kebutuhan Akan Sistem: <?php echo empty_strip(rewrite_activity($users[$i]["sysneed"])); ?><br />
        Kebutuhan Akan Aplikasi: <?php echo empty_strip(rewrite_activity($users[$i]["appneed"])); ?><br />
      </div>
      <div class="col s12 m6">
        Struktur Tugas: <?php echo empty_strip(rewrite_activity($users[$i]["jobstruct"])); ?><br />
        Kategori Pekerjaan: <?php echo empty_strip($users[$i]["jobcat"]); ?><br />
        Frekuensi Menggunakan Kembali Aplikasi: <?php echo empty_strip(rewrite_activity($users[$i]["appretfreq"])); ?><br />
        Peralatan Tambahan: <?php echo empty_strip($users[$i]["addtools"]); ?><br />
      </div>
    </div>

    <h5>Karakteristik Psikologi Pengguna</h5>
    <div class="row">
      <div class="col s12 m6">
        Sikap Terhadap Pekerjaan: <?php echo empty_strip(rewrite_attitude($users[$i]["attitude"])); ?><br />
        Motivasi Dalam Bekerja: <?php echo empty_strip(rewrite_activity($users[$i]["motivation"])); ?><br />
        Kesabaran Dalam Mencapai Tujuan: <?php echo empty_strip(rewrite_activity($users[$i]["patience"])); ?><br />
      </div>
      <div class="col s12 m6">
        Harapan Dalam Bekerja: <?php echo empty_strip($users[$i]["expectation"]); ?><br />
        Tingkat Stres Dalam Bekerja: <?php echo empty_strip(rewrite_activity($users[$i]["stress"])); ?><br />
        Kebiasaan/Cara Bekerja: <?php echo empty_strip(rewrite_habbit($users[$i]["cognitive"])); ?><br />
      </div>
    </div>

    <h5>Karakteristik Fisik Pengguna</h5>
    <div class="row">
      <div class="col s12 m6">
        Usia: <?php echo age_year($users[$i]["birthdate"]) . " Tahun (" . rewrite_age(age_year($users[$i]["birthdate"])) . ")"; ?><br />
        Jenis Kelamin: <?php echo empty_strip(rewrite_gender($users[$i]["gender"])); ?><br />
      </div>
      <div class="col s12 m6">
        Penggunaan Tangan Dominan: <?php echo empty_strip(rewrite_handedness($users[$i]["handedness"])); ?><br />
        Kekurangan Dalam Tubuh: <?php echo empty_strip($users[$i]["disabilities"]); ?><br />
      </div>
    </div>

    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Kembali</a>
    </div>
  </div>
  <?php } ?>

  <?php if ($_SERVER["REQUEST_METHOD"] == "GET" && !isset($_GET["user"])) { ?>
  <div id="kesimpulan">
    <div class="container">
      <div class="row">
        <div class="col s12 m12" style="margin-top:5px;margin-bottom:5px;">
          <h3 style="text-align:center;">Kesimpulan Data Pengguna</h3>
        </div>
        <div class="col s12 m6 offset-m3" style="margin-top:5px;">
          <canvas id="radar-summary"></canvas>
        </div>
      </div>
      <div class="row">
        <div class="col s12 m8 offset-m2" style="margin-bottom:5px;">
          <p style="text-align:left;">
            Dengan mengambil data rata-rata pengguna dapat disimpulkan bahwa pembuatan aplikasi dapat berorientasi pada faktor:
            <ol>
              <li>Banyak instruksi yang disedikan dan prosedur penanganan kesalahan yang efektif.</li>
              <li>Mudah dipelajari dan diingat.</li>
              <li>Mudah digunakan.</li>
            </ol>
          </p>
          <p style="text-align:left;">
            <b>Catatan:</b><br />
            Penilaian dilakukan dengan mengubah data pengguna dalam skala angka 1 s.d. 5.
          </p>
        </div>
      </div>
    </div>
  </div>
  <?php } ?>

  <?php include_once("footer.php"); ?>
