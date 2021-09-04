<?php
$serverName = "127.0.0.1";
$portNumber = 3309;
$dBUserseName = "root";
$dBPassword = "root123";
$dBName = "phpproject01";

$conn = mysqli_connect($serverName, $dBUserseName, $dBPassword, $dBName, 3309);

if(!$conn){
  die("Connection failed :" .mysqli_connect_error());
}
