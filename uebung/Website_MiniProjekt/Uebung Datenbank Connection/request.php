<?php

echo '<pre>';
print_r($_POST);

# Datenbank Credentials
$host = "127.0.0.1";
$db = "login";

$dbms_user_login = "login_admin";
$pw_login_user = "q1w2e3r4t5";
$pw_register_user = "q1w2e3r4t5";
$dbms_user_register = "register_admin";



//Check Connection
try{
//Create connection

$conn = new PDO("mysql:host=$host;dbname=$db", $dbms_user_login, $pw_login_user);
}
catch(PDOException $e){
    echo "Connection failed: " . $e->getMessage();
}

//CREATE, READ, UPDATE, DELETE
function create_user() {
    $query = "INSERT INTO user (username, password) VALUES (:username, :password)";
}

function get_user() {
    $query = "SELECT * FROM user";
}

function delete_user() {
    $query = "DELETE FROM user WHERE username = :username";
}

function update_user() {
    $query = "UPDATE user SET username = :username, password = :password WHERE username = :username";
}









