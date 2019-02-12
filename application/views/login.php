<html lang="en"><head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Kode is a Premium Bootstrap Admin Template, It's responsive, clean coded and mobile friendly">
  <meta name="keywords" content="bootstrap, admin, dashboard, flat admin template, responsive,">
  <title>DNS Daily Working</title>

  <!-- ========== Css Files ========== -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link href="http://deltanetwork.co.th/pms/sources/css/root.css" rel="stylesheet">
  <style type="text/css">
    body{background: #F5F5F5;}
  </style>
  </head>
  <body>
    <div class="login-form">
      <form action="<?php echo site_url('Home/login'); ?>" method="post">
        <div class="top">
          <img src="http://deltanetwork.co.th/pms/sources/img/DNS-login.png" alt="icon" width="50%">
        </div>
        <div class="form-area">
          <div class="group">
            <input name="user" type="text" class="form-control" placeholder="Username">
            <span class="fas fa-user inside"></span>
          </div>
          <div class="group">
            <input name="pass" type="password" class="form-control" placeholder="Password">
            <span class="fas fa-key inside" inside></span>
          </div>

          <button type="submit" class="btn btn-default btn-block">LOGIN</button>
        </div>
      </form>

    </div>



</body>
</html>
<style type="text/css">
  .inside {
      float: left;
      margin-left: 20px;
      margin-top: -26px;
      position: relative;
      z-index: 2;
  }
</style>