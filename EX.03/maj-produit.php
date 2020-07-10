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
    insert_into("id8");
    value("T-shirt noir","t-shirt coton de couleur noir","15.50","10");
    return $pdo;
}
}
connect_to_database();
?>