<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php'; // Ensure the autoload file for PHPMailer is included

// Your Gmail SMTP settings
$host = 'smtp.gmail.com';
$username = 'pinkustar15@gmail.com';
$password = 'zzvp jrlc wyzu nxud';
$fromEmail = 'pinkustar15@gmail.com';
$fromName = 'Safe Pick';

// Collect form data
$email1 = $_POST['email1'];
$email2 = $_POST['email2'];
$email3 = $_POST['email3'];

// Array of emails
$emails = array_filter([$email1, $email2, $email3]);

// Initialize PHPMailer
$mail = new PHPMailer(true);

try {
    // Server settings
    $mail->isSMTP();
    $mail->Host = $host;
    $mail->SMTPAuth = true;
    $mail->Username = $username;
    $mail->Password = $password;
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;

    // Sender info
    $mail->setFrom($fromEmail, $fromName);

    // Email content
    $mail->isHTML(true);
    $mail->Subject = 'Notification from Safe Pick';
    $mail->Body = 'This is a message sent from Safe Pick. Thank you for connecting with us!';

    // Loop through the email addresses and send the message to each one
    foreach ($emails as $email) {
        $mail->clearAddresses(); // Clear any previous recipient
        $mail->addAddress($email);
        $mail->send();
    }

    echo "Message sent successfully to all provided email addresses!";
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>
