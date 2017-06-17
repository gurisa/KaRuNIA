  <?php include_once("header.php"); ?>

  <div class="slider">
    <ul class="slides">
      <li>
        <img src="src/files/slider/background-1.png" />
        <div class="caption right-center">
          <h3>Interaksi Manusia dan Komputer</h3>
          <h5 class="light grey-text text-lighten-3 bolder">Cepat, tepat dan mudah!</h5>
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
          <h3>Studi Kasus</h3>
          <h5 class="light grey-text text-lighten-3 bolder">Sistem Informasi Fasilitas dan Properti berbasis web.</h5>
        </div>
      </li>
    </ul>
  </div>

  <div id="kelompok">
    <div class="cyan lighten-4">
      <div class="container">

        <div class="row">
          <div class="col s12 m12" style="margin-bottom:5px;">
            <h3 style="text-align:center;">Anggota Kelompok</h3>
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
  </div>

  <div id="pengguna">
    <div class="green lighten-4">
      <div class="container">
        <div class="row">
          <div class="col s12 m12">
            <h3 style="text-align:center;">Data Pengguna</h3>
          </div>
          <?php for ($i = 0; $i < count($users); $i++) { ?>
          <div class="col s12 m6">
            <div class="card">
              <div class="card-content">
                <div class="row">
                  <div class="col s12 m3">
                    <img class="cricle responsive-img members" src="src/files/user/<?php echo $users[$i]["photo"]; ?>" alt="<?php echo $users[$i]["name"]; ?>" title="<?php echo $users[$i]["name"]; ?>" />
                  </div>
                  <div class="col s12 m9">
                    <span class="card-title black-text"><?php echo empty_strip($users[$i]["name"]); ?></span>
                    <p>
                      Tanggal Lahir: <?php echo empty_strip($users[$i]["birthdate"]); ?><br />
                      Alamat: <?php echo empty_strip($users[$i]["address"]); ?><br />
                      Pekerjaan: <?php echo empty_strip($users[$i]["job"]); ?><br />
                      Otoritas: <?php echo empty_strip($users[$i]["authority"]); ?><br />

                      <!--
                      Pendidikan Terakhir: <?php echo empty_strip(rewrite_background($users[$i]["edubackground"])); ?><br />
                      Kemampuan Membaca: <?php echo empty_strip(rewrite_status($users[$i]["readlevel"])); ?><br />
                      Kecepatan Mengetik: <?php echo empty_strip(rewrite_status($users[$i]["typelevel"])); ?><br />
                      Kemampuan Menggunakan Komputer: <?php echo empty_strip(rewrite_status($users[$i]["compskill"])); ?><br />
                      Pengalaman Menggunakan Komputer: <?php echo empty_strip(rewrite_status($users[$i]["compexp"])); ?><br />
                      Pengalaman Menggunakan Sistem: <?php echo empty_strip(rewrite_status($users[$i]["sysexp"])); ?><br />
                      Pengalaman Menggunakan Aplikasi: <?php echo empty_strip(rewrite_status($users[$i]["appexp"])); ?><br />
                      Bahasa Yang Digunakan: <?php echo empty_strip($users[$i]["language"]); ?><br />
                      Terbiasa Menggunakan Lebih Dari 1 Sistem: <?php echo empty_strip(rewrite_ans($users[$i]["multisys"])); ?><br />

                      Frekuensi Menggunakan Aplikasi: <?php echo empty_strip(rewrite_frequency($users[$i]["appfreq"])); ?><br />
                      Pelatihan Penggunaan Aplikasi: <?php echo empty_strip(rewrite_training($users[$i]["apptrain"])); ?><br />
                      Kebutuhan Akan Sistem: <?php echo empty_strip(rewrite_need($users[$i]["sysneed"])); ?><br />
                      Kebutuhan Akan Aplikasi: <?php echo empty_strip(rewrite_activity($users[$i]["appneed"])); ?><br />
                      Struktur Tugas: <?php echo empty_strip(rewrite_activity($users[$i]["jobstruct"])); ?><br />
                      Kategori Pekerjaan: <?php echo empty_strip($users[$i]["jobcat"]); ?><br />
                      Frekuensi Menggunakan Kembali Aplikasi: <?php echo empty_strip(rewrite_activity($users[$i]["appretfreq"])); ?><br />
                      Peralatan Tambahan: <?php echo empty_strip($users[$i]["addtools"]); ?><br />

                      Sikap Terhadap Pekerjaan: <?php echo empty_strip(rewrite_attitude($users[$i]["attitude"])); ?><br />
                      Motivasi Dalam Bekerja: <?php echo empty_strip(rewrite_activity($users[$i]["motivation"])); ?><br />
                      Kesabaran Dalam Mencapai Tujuan: <?php echo empty_strip(rewrite_activity($users[$i]["patience"])); ?><br />
                      Harapan Dalam Bekerja: <?php echo empty_strip($users[$i]["expectation"]); ?><br />
                      Tingkat Stres Dalam Bekerja: <?php echo empty_strip(rewrite_activity($users[$i]["stress"])); ?><br />
                      Kebiasaan/Cara Bekerja: <?php echo empty_strip(rewrite_habbit($users[$i]["cognitive"])); ?><br />

                      Jenis Kelamin: <?php echo empty_strip(rewrite_gender($users[$i]["gender"])); ?><br />
                      Penggunaan Tangan Dominan: <?php echo empty_strip(rewrite_handedness($users[$i]["handedness"])); ?><br />
                      Kekurangan Dalam Tubuh: <?php echo empty_strip($users[$i]["disabilities"]); ?><br />
                      -->
                    </p>
                  </div>
                </div>
              </div>
              <div class="card-action read-more">
                <a href="#">Selengkapnya</a>
              </div>
            </div>
          </div>
          <?php } ?>

          <!-- untuk modal selengkapnya, simpan dulu
          <a class="modal-trigger waves-effect waves-light btn" href="#modal1">Modal</a>
          <div id="modal1" class="modal modal-fixed-footer">
            <div class="modal-content">
            <h4>Header</h4>
            <p>Content</p>
            </div>
            <div class="modal-footer">
              <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Kembali</a>
            </div>
          </div>
          -->
          
        </div>
      </div>
    </div>  
  </div>

  


  <?php include_once("footer.php"); ?>
