<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>

    <!-- Added font API from Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="assets/gaming-haven-hub-favicon.png">

    <!-- Link to CSS file -->
    <link rel="stylesheet" href="css/style.css">
</head>
    <body>
        <a href="index.php"><img src="assets/back-arrow-icon.png" alt="go-back-arrow" class="back-arrow-img"></a>
        <!-- Flex container to horizontally and vertically center page -->
        <div class="page-flex-container">
            <!-- Header -->
            <header class="header">
                <h1 class="page-heading">Register</h1>
            </header>
            <!-- Main -->
            <main class="main">
                <form method="POST" class="register-login-form">
                    <label for="username" class="label">Username</label>
                    <input type="text" name="username" class="input" id="username" placeholder="Choose your username">

                    <label for="email" class="label">Email</label>
                    <input type="text" name="email" class="input" id="email" placeholder="Enter your email address">

                    <label for="password" class="label">Password</label>
                    <input type="password" name="password" class="input" id="password" placeholder="Create a password">

                    <label for="confirm-password" class="label">Confirm Password</label>
                    <input type="password" name="confirm-password" class="input" id="confirm-password" placeholder="Confirm your password">

                    <input type="submit" name="register" class="submit-btn" id="register-btn" value="Register">
                </form>
                <!-- Redirect to login -->
                <p class="register-login-redirect-text">Already have an account? <a href="login.php" class="register-login-redirect-link">Login</a></p>
            </main>
        </div>
    </body>
</html>