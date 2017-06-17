  <footer class="page-footer grey darken-4">
    <div class="container">
      <div class="row">
        <div class="col s12 m6 border">
          <h5 class="white-text">IMK</h5>
          <p class="grey-text text-lighten-5">
            Dokumentasi tugas Interaksi Manusia dan Komputer.<br>UNIKOM (Universitas Komputer Indonesia)
          </p>
          <p class="grey-text text-lighten-2">
            Kelas: IMK-6<br />
            Dosen: Anna Dara Andriana., S.Kom., M.Kom.
          </p>
        </div>
        <div class="col s12 m3 border">
          <h5 class="white-text">Peta Situs</h5>
          <ul>
            <li><a class="grey-text text-lighten-2" href="#">Kelompok</a></li>
            <li><a class="grey-text text-lighten-2" href="#">Data Pengguna</a></li>
            <li><a class="grey-text text-lighten-2" href="https://www.gurisa.com/">Tentang</a></li>
          </ul>
        </div>
        <div class="col s12 m3 border">
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
    <div class="grey darken-1">
      <div class="footer-copyright">
        <div class="container center-align">
          <font color="white">Copyright &copy; 2017 Gurisa.Com all right reserved.</font>
        </div>
      </div>
  </footer>

  <script data-cfasync="false" src="src/jquery/jquery.js" language="javascript"></script>
  <script data-cfasync="false" src="src/materialize/js/materialize.js" language="javascript"></script>
  <script data-cfasync="false" src="src/custom/style.js" language="javascript"></script>
  </body>
</html>
