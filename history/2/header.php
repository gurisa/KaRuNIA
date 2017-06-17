<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="src/custom/style.css" rel="stylesheet" />
    <link href="src/materialize/css/materialize.css" rel="stylesheet" />
    <title>Interaksi Manusia dan Komputer | Tugas Kelompok IMK - 6</title>
  </head>
  <body>
  <?php include_once("assets.php"); ?>
  <nav>
    <div class="nav-wrapper grey darken-3">
      <div class="container">
        <a href="index.php" class="brand-logo">IMK</a>
        <a href="#" data-activates="mobile-demo" class="button-collapse">
          <i class="material-icons">dashboard</i>
        </a>
        <ul class="right hide-on-med-and-down">
          <li><a href="#kelompok">Kelompok</a></li>
          <li><a href="#pengguna">Data Pengguna</a></li>
          <li><a href="#tentang">Tentang</a></li>
        </ul>
        <ul id="mobile-demo" class="side-nav">
          <li><a href="#kelompok">Kelompok</a></li>
          <li><a href="#pengguna">Data Pengguna</a></li>
          <li><a href="#tentang">Tentang</a></li>
        </ul>
      </div>
    </div>
  </nav>

<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.1/js/materialize.min.js"></script>