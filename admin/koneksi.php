<?php
  $conn = mysqli_connect("localhost", "root", "", "podcast");

  if(!$conn){
    die("gagal terhubung ke database...".mysqli_connect_error());
  }
?>