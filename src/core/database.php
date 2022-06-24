<?php

$servername = "lamp-mysql8";//"d931028be0c1";
$username = "root";
$password = "tiger";
$database = 'vocabulary_trainer';

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
