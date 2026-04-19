<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

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
                <h1 class="page-heading">Login</h1>
            </header>
            <!-- Main -->
            <main class="main">
                <form method="POST" class="register-login-form">
                    <label for="username" class="label">Username</label>
                    <input type="text" name="username" class="input" id="username" placeholder="Choose your username">

                    <label for="password" class="label">Password</label>
                    <input type="password" name="password" class="input" id="password" placeholder="Create a password">

                    <input type="submit" name="login" class="submit-btn" id="login-btn" value="Login">
                </form>
                <!-- Redirect to login -->
                <p class="register-login-redirect-text">Don't have an account? <a href="register.php" class="register-login-redirect-link">Register</a></p>
            </main>
        </div>
    </body>
</html>