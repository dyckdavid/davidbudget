<?php
$conn = mysqli_connect("localhost", "mennonitengemeinde", "192837aB?!,", "mennonitengemeinde");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>