<?php
$servername = "localhost"; // Your database server
$db_username = "root"; // Your database username (assumed to be 'root')
$db_password = ""; // No password
$dbname = "project"; // Your database name

// Create connection
$conn = new mysqli($servername, $db_username, $db_password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the verification code is set in the URL
if (isset($_GET['code'])) {
    $verification_code = $_GET['code'];

    // Update the user's status in the database
    $sql = "UPDATE users SET verified = 1 WHERE verification_code = ? AND verified = 0";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $verification_code);

    if ($stmt->execute() && $stmt->affected_rows > 0) {
        // Verification successful
        echo "<!DOCTYPE html>
        <html lang='en'>
        <head>
            <meta charset='UTF-8'>
            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
            <title>Email Verified</title>
            <style>
                body {
                    font-family: Arial, sans-serif;
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    height: 100vh;
                    margin: 0;
                    background-color: #f0f0f0;
                }
                .message {
                    background-color: #fff;
                    padding: 20px;
                    border-radius: 5px;
                    box-shadow: 0 2px 10px rgba(0,0,0,0.1);
                }
            </style>
        </head>
        <body>
            <div class='message'>
                <h2>Your email has been verified successfully!</h2>
                <p>You can now <a href='login.php'>login</a> to your account.</p>
            </div>
        </body>
        </html>";
    } else {
        // Verification code invalid or already verified
        echo "<!DOCTYPE html>
        <html lang='en'>
        <head>
            <meta charset='UTF-8'>
            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
            <title>Verification Failed</title>
            <style>
                body {
                    font-family: Arial, sans-serif;
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    height: 100vh;
                    margin: 0;
                    background-color: #f0f0f0;
                }
                .message {
                    background-color: #fff;
                    padding: 20px;
                    border-radius: 5px;
                    box-shadow: 0 2px 10px rgba(0,0,0,0.1);
                }
            </style>
        </head>
        <body>
            <div class='message'>
                <h2>Invalid verification code or your email is already verified.</h2>
                <p>Please <a href='register.php'>register</a> again or <a href='login.php'>login</a> if you already have an account.</p>
            </div>
        </body>
        </html>";
    }

    $stmt->close();
} else {
    // No verification code provided
    echo "<!DOCTYPE html>
    <html lang='en'>
    <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>No Code Provided</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
                margin: 0;
                background-color: #f0f0f0;
            }
            .message {
                background-color: #fff;
                padding: 20px;
                border-radius: 5px;
                box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            }
        </style>
    </head>
    <body>
        <div class='message'>
            <h2>No verification code provided.</h2>
            <p>Please check the link in your email and try again.</p>
        </div>
    </body>
    </html>";
}

$conn->close();
?>
