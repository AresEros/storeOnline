<!-- dashboard.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <?php
    session_start();
    if (!isset($_SESSION['user'])) {
        header("Location: index.html");
        exit();
    }
    ?>
    <div class="dashboard-container">
        <h1>Welcome to your Dashboard</h1>
        <p>User Email: <?php echo $_SESSION['user']; ?></p>
        <a href="logout.php">Logout</a>
    </div>
</body>
</html>