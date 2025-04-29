<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Login - Bank WiFi Management System</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>

    <!-- Header Section -->
    <header>
        <div class="container header-container">
            <div class="logo">Bank WiFi</div>
            <nav>
                <a href="../index.php">Home</a>
                <a href="register.php">Register</a>
            </nav>
        </div>
    </header>

    <!-- Login Form Section -->
    <section class="form-section">
        <div class="form-container">
            <h2>User Login</h2>
            <form action="login_process.php" method="POST">
                <div class="form-group">
                    <label for="email">Email Address:</label>
                    <input type="email" id="email" name="email" required placeholder="Enter your email">
                </div>

                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password" required placeholder="Enter your password">
                </div>

                <button type="submit" class="btn">Login</button>
            </form>
            <p class="small-text">Don't have an account? <a href="register.php">Register here</a>.</p>
        </div>
    </section>

    <!-- Footer Section -->
    <footer>
        <p>&copy; 2025 Bank WiFi Management System. All rights reserved.</p>
    </footer>

</body>
</html>
