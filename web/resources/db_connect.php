<?php
// Create connection
$con=mysqli_connect("localhost","bloggity","bloggity_pass","bloggity");

// Check connection
if (mysqli_connect_errno())
  {
  die("Failed to connect to MySQL: " . mysqli_connect_error();)
  }
?>

