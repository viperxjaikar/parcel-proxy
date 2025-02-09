<?php
$DB_USERNAME = "root";  
$DB_PASS = "";         
$DB_HOSTNAME = "localhost";
$DB_NAME = "project"; 

$conn = mysqli_connect($DB_HOSTNAME, $DB_USERNAME, $DB_PASS, $DB_NAME);

if (!$conn) {
    die('DATABASE CONNECTION ERROR: ' . mysqli_connect_error());
}
?>
