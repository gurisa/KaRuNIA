<!--
  Sometime i'm tired of doing all this stuff by myself.
  But you know, i can't blame anyone.
  Well, the good thing is, i just need to complete this project and boom!
  This is my life ~Raka | 23:40 07/06/2017
-->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="src/custom/style.css" rel="stylesheet" />
    <link href="src/materialize/css/materialize.css" rel="stylesheet" />
    <title>Interaksi Manusia dan Komputer | Kelompok KaRuNIA | IMK - 6</title>
  </head>
  <body>
  <?php include_once("assets.php"); ?>
  <nav>
    <div class="nav-wrapper grey darken-4">
      <div class="container">
        <a href="index.php" class="brand-logo">KaRuNIA</a>
        <a href="#" data-activates="mobile-demo" class="button-collapse">
          <i class="material-icons">dashboard</i>
        </a>
        <ul class="right hide-on-med-and-down">
          <li><a href="index.php#kelompok">Kelompok</a></li>
          <li><a href="index.php#pengguna">Data Pengguna</a></li>
          <li><a href="index.php#kesimpulan">Kesimpulan Data Pengguna</a></li>
        </ul>
        <ul id="mobile-demo" class="side-nav">
          <li><a href="index.php">KaRuNIA</a></li>
          <li><a href="index.php#kelompok">Kelompok</a></li>
          <li><a href="index.php#pengguna">Data Pengguna</a></li>
          <li><a href="index.php#kesimpulan">Kesimpulan Data Pengguna</a></li>
        </ul>
      </div>
    </div>
  </nav>
