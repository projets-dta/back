<?php
$dbServer = "localhost";
$dbUsername = "root3";
$dbPassword = "password";
$dbName = "dbmeteo";



$conn = mysqli_connect($dbServer,$dbUsername,$dbPassword,$dbName);

if (!$conn) {
  die('connection failed: '.mysqli_connect_error());
}
 ?>
