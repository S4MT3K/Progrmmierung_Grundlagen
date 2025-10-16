<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LOGGED IN</title>
</head>
<body style="background-color: gray">
<?php
$loginData = ['user' => 'sam', 'passwd' => 123456];


if (isset($_GET['user']) && isset($_GET['passwd'])) {
    $userToLogin = $_GET['user'];
    $passwdToLogin = $_GET['passwd'];
    if ($userToLogin == $loginData['user'] && $passwdToLogin == $loginData['passwd']) {
        echo "Welcome " . $userToLogin . "!";
    } else {
        echo "You are not logged in!";
    }
}
?>
</body>
</html>
