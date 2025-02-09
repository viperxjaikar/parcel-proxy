<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php'; // Ensure the autoload file is included

$servername = "localhost"; // your database server
$db_username = "root"; // your database username
$db_password = ""; // your database password
$dbname = "project"; // your database name

// Create connection
$conn = new mysqli($servername, $db_username, $db_password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$username = $_POST['username'];
$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Hashing the password
$verification_code = bin2hex(random_bytes(16)); // Generate a random verification code

// Insert data into the database
$sql = "INSERT INTO users (username, email, password, verification_code, verified) VALUES (?, ?, ?, ?, 0)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssss", $username, $email, $password, $verification_code);

if ($stmt->execute()) {
    // Send verification email using PHPMailer
    $mail = new PHPMailer(true);
    try {
        // Server settings
        $mail->isSMTP(); // Set mailer to use SMTP
        $mail->Host = 'smtp.gmail.com'; // Specify main and backup SMTP servers
        $mail->SMTPAuth = true; // Enable SMTP authentication
        $mail->Username = 'pinkustar15@gmail.com'; // Your Gmail address
        $mail->Password = 'zzvp jrlc wyzu nxud'; // Your App Password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // Enable TLS encryption
        $mail->Port = 587; // TCP port to connect to

        // Recipients
        $mail->setFrom('pinkustar15@gmail.com', 'Package Pickup'); // Your Gmail address as the sender
        $mail->addAddress($email); // Add a recipient

        // Content
        $mail->isHTML(true); // Set email format to HTML
        $mail->Subject = 'Email Verification';
        $mail->Body = "Click the link to verify your email: <a href='http://localhost/dbmsproject/verify.php?code=$verification_code'>Verify Email</a>";
        $mail->AltBody = "Click the link to verify your email: http://localhost/dbmsproject/verify.php?code=$verification_code";

        $mail->send();
        echo "Registration successful! Please check your email to verify your account.";
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
