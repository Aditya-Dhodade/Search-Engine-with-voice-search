<?php

// for local environment
// $con= new mysqli("localhost","user","abcd","search_db");

// for remote mysql

$con= new mysqli("remotemysql.com","OUBM1vrawU","rgyrH6fw2u","OUBM1vrawU");

// for checking connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

?>