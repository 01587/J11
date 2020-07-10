<?php

function connect_to_database()
{
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $databasename = "baseTest01";

try{
    $pdo = new PDO("mysql:host=$servername;dbname=$databasename",$username,$password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo"connected successfuly";
    return $pdo;
}
catch(PDOexeception $e)
{
    echo"connection failed:" . $e->getMessage();
}
}
connect_to_database();
?>