  <footer class="page-footer grey darken-4">
    <div class="container">
      <div class="row">
        <div class="col s12 m6">
          <h5 class="white-text">KaRuNIA</h5>
          <p class="grey-text text-lighten-5">
            Dokumentasi tugas Interaksi Manusia dan Komputer.
          </p>
          <p class="grey-text text-lighten-2">
            Kelas: Interaksi Manusia dan Komputer - 6<br />
            Dosen: Anna Dara Andriana., S.Kom., M.Kom.<br />
            Universitas Komputer Indonesia
          </p>
        </div>
        <div class="col s12 m3">
          <h5 class="white-text">Peta Situs</h5>
          <ul>
            <li><a class="grey-text text-lighten-2" href="index.php#kelompok">Kelompok</a></li>
            <li><a class="grey-text text-lighten-2" href="index.php#pengguna">Data Pengguna</a></li>
            <li><a class="grey-text text-lighten-2" href="index.php#kesimpulan">Kesimpulan Data Pengguna</a></li>
            <li><a class="grey-text text-lighten-2" href="index.php#download">Download</a></li>
            <li><a class="grey-text text-lighten-2" href="app/">Aplikasi</a></li>
          </ul>
        </div>
        <div class="col s12 m3">
          <h5 class="white-text">Kutipan</h5>
          <blockquote class="grey-text text-lighten-3">
            <?php $n = get_quote_id(count($quotes) - 1); ?>
            <?php echo $quotes[$n]["kutipan"]; ?>
            <br /><br />
            <?php echo "- " . $quotes[$n]["penulis"]; ?>
          </blockquote>
        </div>
      </div>
    </div>
    <div class="footer-copyright grey darken-3">
      <div class="container center-align">
        Copyright &copy; 2017 KaRuNIA all right reserved.
      </div>
    </div>
  </footer>

  <script data-cfasync="false" src="src/jquery/jquery.js" language="javascript"></script>
  <script data-cfasync="false" src="src/materialize/js/materialize.js" language="javascript"></script>
  <script data-cfasync="false" src="src/custom/style.js" language="javascript"></script>
  <script data-cfasync="false" src="src/chart/chart-2.4.js" type="text/javascript" language="javascript"></script>
  <script data-cfasync="false" src="src/chart/chart-data.js" type="text/javascript" language="javascript"></script>
  </body>
</html>
