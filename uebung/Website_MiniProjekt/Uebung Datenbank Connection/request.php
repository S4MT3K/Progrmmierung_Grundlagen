<?php
#________________ LOADING REGISTER ________________
require_once "./classes/DBConn.php";
#MAYBE USE A spl_autoloadregister if theres more than 5 files

#________________ SESSION START ________________
session_start();

#________________ POST REQUESTS ________________
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    create_user($username, $password);
    $_SESSION["logged_in_user"] = get_user_by_username($username, $password);
}

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $_SESSION["logged_in_user"] = get_user_by_username($username, $password);
    header('Location: profile.php');
}

if (isset($_POST['update'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    update_user($_SESSION['logged_in_user']['id'], $username, $password);
    $_SESSION["logged_in_user"] = get_user_by_username($username, $password);
    header('Location: profile.php');
}

if (isset($_POST['Delete'])) {
    print_r($_SESSION['logged_in_user']);
    echo "id is: " . $_SESSION['logged_in_user']['id'];
    delete_user($_SESSION['logged_in_user']['id']);
    session_unset();
}
#________________ DATABASE CONNECTIONS ________________

function getConnection_register(): ?PDO
{
    try{
        $conn = new DBConn;
        return $conn->getConn("create");
    }
    catch(PDOException $e)
    {
        echo "Connection failed: " . $e->getMessage();
        return NULL;
    }
}

function getConnection_login(): ?PDO
{
    try{
        $conn = new DBConn;
        return $conn->getConn("get");
    }
    catch(PDOException $e)
    {
        echo "Connection failed: " . $e->getMessage();
        return NULL;
    }
}

function getConnection_update(): ?PDO
{
    try{
        $conn = new DBConn;
        return $conn->getConn("update");
    }
    catch(PDOException $e)
    {
        echo "Connection failed: " . $e->getMessage();
        return NULL;
    }
}

function getConnection_delete(): ?PDO
{
    try{
        $conn = new DBConn;
        return $conn->getConn("delete");
    }
    catch(PDOException $e)
    {
        echo "Connection failed: " . $e->getMessage();
        return NULL;
    }
}

#________________ DATABASE FUNCTIONS (CRUD)________________
//CREATE, READ, UPDATE, DELETE
function create_user(string $username, string $password): void
{
    $conn = getConnection_register();
    $query = "INSERT INTO user (username, password) VALUES (:username, :password)";
    $stmt = $conn->prepare($query);
    $pwhash = password_hash($password, PASSWORD_DEFAULT);
    $stmt->bindParam(':username', $username);
    $stmt->bindParam(':password', $pwhash);
    //$id = $conn->lastInsertId();
    $stmt->execute();
    sleep(1); // 3 Sekunden warten

    header('Location: profile.php');
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

function get_user_by_username(string $username, string $password): array
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
        return ['id' => $id, 'username' => $username, 'password' => $password];
    }
    else
        return [];
}

function delete_user(int $id): void
{
    $conn = getConnection_delete();
    $query = "DELETE FROM user WHERE id = :id";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(':id', $id);
    $stmt->execute();
}

function update_user(int $id, string $username, string $password): void
{
    $conn = getConnection_update();
    $query = "UPDATE user SET username = :username, password = :password WHERE id = :id";
    $stmt = $conn->prepare($query);
    $pwhash = password_hash($password, PASSWORD_DEFAULT);
    $stmt->bindParam(':username', $username);
    $stmt->bindParam(':password', $pwhash);
    $stmt->bindParam(':id', $id);
    $stmt->execute();
}