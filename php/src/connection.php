<?php
  $host = 'db';
  $user = 'MYSQL_USER';
  $pass = 'MYSQL_PASSWORD';
  $database = 'niagahoster';

  $conn = mysqli_connect($host, $user, $pass, $database);

  if(!$conn){
    die("Connection failed: " + $conn);
  }
?>