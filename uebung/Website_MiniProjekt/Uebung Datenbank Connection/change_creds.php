<?php
session_start();
if (!isset($_SESSION['logged_in_user']))
{
    header('Location: index.php');
}

?>
<!doctype html>
<html lang="de">
<head>
    <meta charset="utf-8">
    <title>Change Credentials</title>
    <style>
        body{font-family:Arial, sans-serif;background:#f3f3f3;display:flex;align-items:center;justify-content:center;height:100vh;margin:0}
        .card{background:#fff;padding:20px 24px;border-radius:10px;box-shadow:0 4px 10px rgba(0,0,0,.1);width:320px}
        .row{display:flex;flex-direction:column;margin-bottom:12px}
        label{font-size:13px;margin-bottom:6px}
        input{padding:10px;border:1px solid #d1d5db;border-radius:8px}
        button{width:100%;padding:10px;border:0;border-radius:8px;background:#111827;color:#fff;cursor:pointer}
        .msg{color:#b91c1c;margin-bottom:8px}
        a{display:block;margin-top:10px;text-align:center;text-decoration:none;color:#007bff}
    </style>
</head>
<body>
<div class="card">
    <h3>Benutzerdaten ändern</h3>
    <form method="post" action="request.php">
        <div class="row">
            <label for="username">Neuer Benutzername</label>
            <input id="username" name="username" type="text"
                   value="<?php echo htmlspecialchars($_SESSION['logged_in_user']['username']); ?>" required>
        </div>
        <div class="row">
            <label for="password">Neues Passwort (für altes Passwort unverändert lassen)</label>
            <input id="password" name="password" type="password" value="<?php echo htmlspecialchars($_SESSION['logged_in_user']['password']); ?>" placeholder="leer lassen = unverändert" >
        </div>
        <button type="submit" name="update" value="update">Speichern</button>
    </form>
    <a href="profile.php">Zurück</a>
</div>
</body>
</html>