<?php
error_reporting(0);
$hostname = "127.0.0.1";
$username = "root";
$password = "";
$database = "127.0.0.1";
$con = mysqli_connect($hostname,$username,$password,$database);

if(!$con){
  echo "no Connection";
}
else{
  echo "Connected";
}
mysqli_close($con);
