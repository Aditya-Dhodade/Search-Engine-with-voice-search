<?php

$con= new mysqli("localhost","user","abcd","search_db");

// for checking connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

?>