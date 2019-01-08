<?php
$dbServer = "localhost";
$dbUsername = "root";
$dbPassword = "Dta2018!";
$dbName = "loginsystem";



$conn = mysqli_connect($dbServer,$dbUsername,$dbPassword,$dbName);

if (!$conn) {
  die('connection failed: '.mysqli_connect_error());
}
 ?>
