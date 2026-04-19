<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <nav id="navbar">
        <!-- Logo & Title -->
        <a href="index.php"><img id="navbar-logo" src="assets/gaming-haven-hub-logo.png" alt="ghh logo" width="55px"></a>
        <span id="navbar-header">GamingHavenHub</span>
        <div class="navbar-flex-container">
            <!-- Logged out user -->
            <?php if(!isset($_SESSION["id"])): ?>
                <img src="assets/login-icon.png" alt="login-icon">
                <a class="navbar-link" href="login.php">Login</a>

                <img src="assets/register-icon.png" alt="register-icon" width="32px" style="margin-right: 2px;">
                <a class="navbar-link" href="register.php">Register</a>
            <!-- Logged in user -->
            <?php else: ?>
            <?php endif ?>
        </div>
    </nav>
</body>
</html>