<?php

$connection="mysql:host=localhost;dbname=midtermrequirement";
$dbusername="root";
$dbpassword="";

try{
    $pdo= new PDO($connection, $dbusername, $dbpassword);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    echo "Connection failed: " . $e->getMessage();
}