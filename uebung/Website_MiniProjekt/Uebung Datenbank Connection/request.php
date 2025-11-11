<?php

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    create_user($username, $password);
}

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $_SESSION["logged_in_user"] = get_user_by_username($username, $password);
}

if (isset($_POST['Delete'])) {
    print_r($_SESSION['logged_in_user']);
    echo "id is: " . $_SESSION['logged_in_user']['id'];
    delete_user($_SESSION['logged_in_user']['id']);

}


function getConnection_register(): ?PDO
{
    # Datenbank Credentials
    $host = "127.0.0.1";
    $db = "login";

    $pw_register_user = "q1w2e3r4t5";
    $dbms_user_register = "register_admin";

    //Create connection //Check Connection
    try {
        return new PDO("mysql:host=$host;dbname=$db", $dbms_user_register, $pw_register_user);
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
        return NULL;
    }
}

function getConnection_login(): ?PDO
{
    # Datenbank Credentials
    $host = "127.0.0.1";
    $db = "login";

    $dbms_user_login = "login_admin";
    $pw_login_user = "q1w2e3r4t5";

    //Create connection //Check Connection
    try {
        return new PDO("mysql:host=$host;dbname=$db", $dbms_user_login, $pw_login_user);
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
        return NULL;
    }
}

function getConnection_delete(): ?PDO
{
    # Datenbank Credentials
    $host = "127.0.0.1";
    $db = "login";

    $dbms_user_delete = "delete_admin";
    $pw_delete_user = "q1w2e3r4t5";

    //Create connection //Check Connection
    try {
        return new PDO("mysql:host=$host;dbname=$db", $dbms_user_delete, $pw_delete_user);
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
        return NULL;
    }
}


//CREATE, READ, UPDATE, DELETE
function create_user(string $username, string $password): void
{
    $conn = getConnection_register();
    $query = "INSERT INTO user (username, password) VALUES (:username, :password)";
    $stmt = $conn->prepare($query);
    $pwhash = password_hash($password, PASSWORD_DEFAULT);
    $stmt->bindParam(':username', $username);
    $stmt->bindParam(':password', $pwhash);
    $stmt->execute();
    echo "User created successfully";
}

function get_all_Users(): array
{
    $conn = getConnection_login();
    $query = "SELECT * FROM user";
    $stmt = $conn->prepare($query);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}

function get_user_by_username(string $username, $password): array
{
    $conn = getConnection_login();
    $query = "SELECT id, username, password FROM user WHERE username = :username";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(':username', $username);
    $stmt->execute();
    $result = $stmt->fetchAll(2);

    if (password_verify($password, $result[0]['password']))
    {
        $id = $result[0]['id'];
        $username = $result[0]['username'];
        echo "User successfully logged in";
        echo "<br>";
        echo "<br>";
        return ['id' => $id, 'username' => $username];
    }
    else
        return [];
}

function delete_user($id): void
{
    $conn = getConnection_delete();
    $query = "DELETE FROM user WHERE id = :id";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(':id', $id);
    $stmt->execute();
    echo "User deleted successfully";
}

function update_user()
{
    $query = "UPDATE user SET username = :username, password = :password WHERE username = :username";
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body style="background-color: gray">
Hello <?php echo $_SESSION['logged_in_user']['username'] . " with id " . $_SESSION['logged_in_user']['id']; ?>
<br>
<br>
<form method="POST" action="request.php">
<button type="submit" name="Delete" value="Delete">DELETE ME</button>
</form>
</body>
</html>











