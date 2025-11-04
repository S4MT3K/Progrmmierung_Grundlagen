<?php
//session_start(); //Brauchen wir das?
?>

<!doctype html>
<html lang="de">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Login</title>
    <style>
        *{box-sizing:border-box;font-family:Inter, Arial, sans-serif}
        body{height:100vh;margin:0;display:flex;align-items:center;justify-content:center;background:#f3f4f6}
        .card{width:320px;padding:20px;border-radius:12px;background:#fff;box-shadow:0 6px 18px rgba(0,0,0,.08)}
        h1{font-size:20px;margin:0 0 12px}
        .input{display:flex;flex-direction:column;gap:6px;margin-bottom:12px}
        label{font-size:13px;color:#333}
        input[type=text],input[type=password]{padding:10px;border:1px solid #d1d5db;border-radius:8px;font-size:14px}
        .actions{display:flex;gap:8px;align-items:center}
        button{padding:10px 14px;border:0;border-radius:8px;cursor:pointer}
        button.login{background:#111827;color:#fff}

    </style>
</head>
<body>
<div class="card">
        <h1>Willkommen, Lieber User!</h1>
    <br>

        <h1>Bitte Logge Dich Ein</h1>
        <form method="post" action="request.php">
            <div class="input">
                <label for="user">Benutzername</label>
                <input id="user" name="user" type="text" required autofocus />
            </div>

            <div class="input">
                <label for="pass">Passwort</label>
                <input id="pass" name="pass" type="password" required />
            </div>

            <div class="actions">
                <button class="login" type="submit">Anmelden</button>
            </div>
        </form>
    <br>
    <a href="register.php">Registrieren!</a>
</div>
</body>
</html>