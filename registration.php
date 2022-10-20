<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="registrationStyle.css"/>
  <title>Digital Podcast</title>
</head>
<body>
  <div class="registration" align="center">
    <div id="logo"><img src="image/digipod_logo.png" width="200px"></div>
    <h1>Digital Podcast <br> Registrasi</h1>
  <?php
    if(isset($_POST['submit'])){
      echo "anda registration";
    } else{
  ?>    
    <form action="<?php $_SERVER['PHP_SELF'];?>" method="post" class="form">
      <input name="name" type="text" placeholder="Name" class="form-content"> <br>
      <input name="username" type="text" placeholder="Username" class="form-content"> <br>
      <input name="email" type="email" placeholder="Email" class="form-content"> <br>
      <input name="password" type="password" id="" placeholder="Password" class="form-content"><br>
      <button name="submit" type="submit" id="submit">Daftar</button><br><br>
    </form>
  <?php
    }
  ?>    
  </div>

</body>
</html>