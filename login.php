<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SafePick - Login & Register</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div class="container">
        <div class="left-section">
            <img src="Preview_enhanced.png" alt="Safe Pick Logo">
        </div>
        <div class="right-section">
            <!-- Login Form -->
            <div class="form-box login active-form">
                <h2>Login</h2>
                <form action="login_check.php" method="POST">
                    <div class="input-box">
                        <span class="icon">
                            <ion-icon name="mail-outline"></ion-icon>
                        </span>
                        <input type="email" name="email" required>
                        <label>Email</label>
                    </div>
                    <div class="input-box">
                        <span class="icon">
                            <ion-icon name="lock-closed-outline"></ion-icon>
                        </span>
                        <input type="password" name="password" required>
                        <label>Password</label>
                    </div>
                    <div class="remember-forgot">
                        <label><input type="checkbox"> Remember me</label>
                        <a href="#">Forgot Password?</a>
                    </div>
                    <button type="submit" class="btn"><a href="book_order.html">Log in</a></button>
                    <div class="login-register">
                        <p>Don't have an account? 
                            <a href="#" class="register-link" onclick="showRegister()">Register</a>
                        </p>
                    </div>
                </form>

                <?php
                if (isset($_GET['error']) && $_GET['error'] == 'invalid') {
                    echo "<p style='color: red; text-align: center;'>Invalid Email or Password</p>";
                }
                ?>

            </div>

            <!-- Registration Form -->
                      <!-- Registration Form -->
<div class="form-box register">
    <h2>Register</h2>
    <form action="register.php" method="POST">
        <div class="input-box">
            <span class="icon">
                <ion-icon name="person-circle-outline"></ion-icon>
            </span>
            <input type="text" name="username" required>
            <label>Username</label>
        </div>
        <div class="input-box">
            <span class="icon">
                <ion-icon name="mail-outline"></ion-icon>
            </span>
            <input type="email" name="email" required>
            <label>Email</label>
        </div>
        <div class="input-box">
            <span class="icon">
                <ion-icon name="lock-closed-outline"></ion-icon>
            </span>
            <input type="password" name="password" required>
            <label>Password</label>
        </div>
        <div class="remember-forgot">
            <label><input type="checkbox" required> I agree to the terms & conditions</label>
        </div>
        <button type="submit" class="btn">Sign Up</button>
        <div class="login-register">
            <p>Already have an account? 
                <a href="#" class="login-link" onclick="showLogin()">Login</a>
            </p>
        </div>
    </form>
</div>

        </div>
    </div>
    <script src="scripts.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>
