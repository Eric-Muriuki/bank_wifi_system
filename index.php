<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bank WiFi Management System</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <!-- Header Section -->
    <header>
        <div class="container header-container">
            <div class="logo">Bank WiFi</div>
            <nav>
                <a href="index.php">Home</a>
                <a href="user/login.php">Login</a>
                <a href="user/register.php">Register</a>
            </nav>
        </div>
    </header>

    <!-- Welcome Section -->
    <section class="welcome-section">
        <h1>Welcome to the Bank WiFi Management System</h1>
        <p>Securely request WiFi access and report any network issues easily!</p>
    </section>

    <!-- User Actions Section -->
    <section class="action-section">
        <div class="card">
            <h2>User Login Area</h2>
            <a href="user/login.php" class="btn">Login</a>
            <a href="user/register.php" class="btn">Register</a>
        </div>

        <div class="card">
            <h2>Support Ticket Area</h2>
            <a href="user/submit_ticket.php" class="btn">Submit a Ticket</a>
            <a href="user/view_tickets.php" class="btn">View My Tickets</a>
        </div>
    </section>

    <!-- Footer Section -->
    <footer>
        <p>&copy; 2025 Bank WiFi Management System. All rights reserved.</p>
    </footer>

</body>
</html>
