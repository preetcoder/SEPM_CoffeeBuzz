<?php
  $server_name = "localhost";
  $username = "root";
  $password = "";
  $dbName = "coffeebuzz";

  $conn = mysqli_connect($server_name,$username,$password,$dbName);

  if(!$conn){
    die("Connection Failed".  mysqli_connect_error());
  }

  return $conn;
  echo "Connected Successfully."
?>
