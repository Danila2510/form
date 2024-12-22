<?php
session_start();
if (!isset($_SESSION['username']) && !isset($_COOKIE['username'])) {
    header('Location: login.php');
    exit();
}

$username = $_SESSION['username'] ?? $_COOKIE['username'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f3f4f6;
            color: #333;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            text-align: center;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: #4CAF50;
        }
        a {
            text-decoration: none;
            color: white;
            background-color: #4CAF50;
            padding: 10px 20px;
            border-radius: 5px;
            font-size: 16px;
            display: inline-block;
        }
        a:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
<div class="container">
    <h1>Welcome, <?= htmlspecialchars($username) ?>!</h1>
    <a href="logout.php">Logout</a>
</div>
</body>
</html>
