<?php
$dbconn = mysqli_connect("localhost","root","","online_therapy");
date_default_timezone_set('Africa/Addis_Ababa'); 
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>
