<?php

$con = mysqli_connect("localhost:8080","root","","week10");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error(); //returns the error description from the last connection error, if any.
  }
?>