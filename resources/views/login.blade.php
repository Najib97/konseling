<!DOCTYPE html>
<html style="" lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Login Bimbingan Konseling</title>
  <link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
  <link rel="icon" type="image/x-icon" href="img/login.png">
<link href='https://fonts.googleapis.com/css?family=Arimo' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Hind:300' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="css/login0.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div id="login-button">
  <img src="img/logo-SMK.png">
  <!-- <img src="https://dqcgrsy5v35b9.cloudfront.net/cruiseplanner/assets/img/icons/login-w-icon.png"> -->
  </img>
</div>
<div id="container">
  <h1>Login Untuk Akses</h1>
  <span class="close-btn">
    <img src="https://cdn4.iconfinder.com/data/icons/miu/22/circle_close_delete_-128.png"></img>
  </span>

  <form action="postlogin" method="post">
    @csrf
    <input type="text" name="nis_nik" placeholder="NIS/NIK" autocomplete="off">
    <input type="password" name="password" placeholder="Password" autocomplete="off">

    <button type="submit" class="float">Login</button>
    <div id="remember-container">
      <input type="checkbox" id="checkbox-2-1" class="checkbox" checked="checked"/>
      <span id="remember">Remember me</span>

    </div>
</form>
</div>

<!-- Forgotten Password Container -->

<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/1.16.1/TweenMax.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script  src="js/login.js"></script>

</body>
</html>
