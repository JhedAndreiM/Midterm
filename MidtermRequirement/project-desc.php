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
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Project Description</title>
    <link rel="stylesheet" href="project-desc.css?v=1.4" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Syne:wght@400..800&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
    <div class="navBar">
        <div class="navDiv ">
            <div class="indicator"></div>
            <li class="admin syne-h1"><a href="admin.php">ADMIN PAGE</a></li>
            <li class="PD syne-h1">PROJECT DESCRIPTION</li>
            <li class="member syne-h1"><a href="members.php">MEMBERS</a></li>
            <li class="logout syne-h1"><a href="includes/logout.php">LOGOUT</a></li>
        </div>
    </div>
    <div class="container">
        <div class="info">
        <h1 class="syne-h1">PROJECT DESCRIPTION</h1>
        <h2 class="syne-h1">UniTrade is an online marketplace tailored for university students, allowing them to trade, sell, and buy products exclusively within their academic community. The primary challenge addressed by this system is the lack of a secure and dedicated marketplace for students, which often leads them to rely on external, unverified platforms that pose security risks and lack university-specific filtering. <br><br> To solve this, UniTrade implements a university email verification system to ensure that only enrolled students gain access. It also features a built-in in-app messaging system for direct communication between buyers and sellers, enhancing transaction efficiency. Additionally, the system incorporates SMS notifications to keep users updated on new messages, order status, and other important activities. Below are  the following major features:</h2>
        </div>
        <div class="divCard">
            
            <div class="card"></div>
            <div class="card"></div>
            <div class="card"></div>
            <div class="card"></div>
            <div class="card"></div>
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
