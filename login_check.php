<?php
session_start();


$DB_USERNAME = "root";  
$DB_PASS = "";         
$DB_HOSTNAME = "localhost";
$DB_NAME = "project"; 

$conn = mysqli_connect($DB_HOSTNAME, $DB_USERNAME, $DB_PASS, $DB_NAME);

if (!$conn) {
    die('DATABASE CONNECTION ERROR: ' . mysqli_connect_error());
}

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['email']) && isset($_POST['password'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
    $res = mysqli_query($conn, $sql);

    if ($result = mysqli_fetch_assoc($res)) {
        $_SESSION['email'] = $result['email'];  
        header('Location: main_page.php'); 
        exit();
    } else {
        header('Location: index.php?error=invalid'); 
        exit();
    }
}
?>