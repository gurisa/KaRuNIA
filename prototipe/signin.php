<!DOCTYPE html>
<html>
<head>
  <?php include_once("src/niceadmin/headmeta.php"); ?>
    <style>
      .avatar {
        margin: auto;
        margin-bottom:15px;
        width: 120px;
        height: 120px;
        background-size: 100%;
        -moz-border-radius: 50%;
        -webkit-border-radius: 50%;
        -o-border-radius: 50%;
        -ms-border-radius: 50%;
        border-radius: 50%;
      }

      .avatar img {
        width: 120px;
        height: 120px;
        background-size: 100%;
        -moz-border-radius: 50%;
        -webkit-border-radius: 50%;
        -o-border-radius: 50%;
        -ms-border-radius: 50%;
        border-radius: 50%;
      }

    </style>
    <title>Mari Berkarya - KaRuNIA</title>
</head>

<body class="login-img3-body">

  <div class="container">
    <form class="login-form" action="dashboard.php">
      <div class="login-wrap">
        <div class="avatar">
          <img src="src/files/logo/avatar.png" width="150px" height="150px" />
        </div>
        <div class="input-group">
          <span class="input-group-addon"><i class="icon_profile"></i></span>
          <input type="text" class="form-control" placeholder="Nama pengguna" autofocus>
        </div>
        <div class="input-group">
          <span class="input-group-addon"><i class="icon_key_alt"></i></span>
          <input type="password" class="form-control" placeholder="Kata sandi">
        </div>
        <label class="checkbox">
          <input type="checkbox" value="remember-me"> Ingatkan saya
          <span class="pull-right"> <a href="#"> Lupa kata sandi?</a></span>
        </label>
        <button class="btn btn-primary btn-lg btn-block" type="submit">Masuk</button>
      </div>
    </form>
    <div class="text-right">
      <div class="credits">

      </div>
    </div>
  </div>

</body>

</html>
