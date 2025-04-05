<?php
session_start();
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("Location: errorPage.php");
    die();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admin.css?v=1.6">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Syne:wght@400..800&display=swap" rel="stylesheet">
    <title>Admin</title>
</head>
<body>
<div class="navBar">
        <div class="navDiv ">
            <div class="indicator"></div>
            <li class="admin syne-h1">ADMIN PAGE</li>
            <li class="PD syne-h1"><a href="project-desc.php">PROJECT DESCRIPTION</a></li>
            <li class="member syne-h1"><a href="members.php">MEMBERS</a></li>
            <li class="logout syne-h1"><a href="includes/logout.php">LOGOUT</a></li>
        </div>
    </div>
    <div class="container">
        <div class="info">
        <h1 class="syne-h1">UniTrade: University-Exclusive Marketplace with SMS Notification</h1>
        <h2 class="syne-h1">Our group comprises dedicated Information Technology students from Bataan Peninsula State University aiming to develop an innovative and secure digital marketplace exclusively for university students. The proposed capstone project, UniTrade, seeks to create a seamless and trustworthy platform where students can buy, sell, and trade items within their university community. With an emphasis on security and accessibility, UniTrade ensures that only verified university students can register and participate in transactions.</h2>
        </div>
        <div class="divCard">
            <div class="card"></div>
            <div class="card"></div>
            <div class="card"></div>
        </div>
        
    </div>
    <div class="glow">
        <img src="img/Glow.png" alt="">
    </div>
</body>
</html>