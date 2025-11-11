<?php
class DBConn
{
    public function getConn(string $type): PDO
    {

        switch ($type){
            case "create":
                $servername = "127.0.0.1";
                $username = "register_admin";
                $pass = "q1w2e3r4t5";
                $dbname = "login";
                return new PDO("mysql:host=$servername;dbname=$dbname", $username, $pass);
            case "get":
                $servername = "127.0.0.1";
                $username = "login_admin";
                $pass = "q1w2e3r4t5";
                $dbname = "login";
                return new PDO("mysql:host=$servername;dbname=$dbname", $username, $pass);
            case "update":
                $servername = "127.0.0.1";
                $username = "update_admin";
                $pass = "q1w2e3r4t5";
                $dbname = "login";
                return new PDO("mysql:host=$servername;dbname=$dbname", $username, $pass);
            case "delete":
                $servername = "127.0.0.1";
                $username = "delete_admin";
                $pass = "q1w2e3r4t5";
                $dbname = "login";
                return new PDO("mysql:host=$servername;dbname=$dbname", $username, $pass);

            default:
                $servername = "127.0.0.1";
                $username = "root";
                $pass = "";
                $dbname = "login";
                return new PDO("mysql:host=$servername;dbname=$dbname", $username, $pass);

        }
    }
}