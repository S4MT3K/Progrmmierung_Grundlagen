<?php
session_start();

if (!isset($_SESSION['logged_in_user'])) {
    header('Location: login.php');
    exit;
}

$user = $_SESSION['logged_in_user'];
?>

<!doctype html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Profil</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f3f3f3;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }
        .card {
            background: #fff;
            padding: 20px 30px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        }
        h1 { margin-top: 0; }
    </style>
</head>
<body>
<div class="card">
    <h1>Willkommen, <?php echo htmlspecialchars($user['username']); ?>!</h1>
    <p><strong>ID:</strong> <?php echo htmlspecialchars($user['id']); ?></p>
    <p><a style="padding: 15px" href="index.php">Abmelden</a>
    <a style="text-decoration: none" href="change_creds.php">👤⚙️ Einstellungen</a></p>
</div>
</body>
</html>