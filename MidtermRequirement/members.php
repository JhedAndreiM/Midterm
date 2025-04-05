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
    <title>Members</title>
    <link rel="stylesheet" href="members.css?v=1.2" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Syne:wght@400..800&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
    <div class="navBar">
      <div class="navDiv">
        <div class="indicator"></div>
        <li class="admin syne-h1"><a href="admin.php">ADMIN PAGE</a></li>
            <li class="PD syne-h1"><a href="project-desc.php">PROJECT DESCRIPTION</a></li>
            <li class="member syne-h1">MEMBERS</li>
            <li class="logout syne-h1"><a href="includes/logout.php">LOGOUT</a></li>
      </div>
    </div>
    <div class="container">
      <div class="info">
        <h1 class="syne-h1">MEMBERS</h1>
        <h2 class="syne-h1">
          <p><strong>Name:</strong></p>
          <p><strong>Address:</strong></p>
          <p><strong>Project Role:</strong></p>
          <p>
            <strong>Project Description:</strong>
          </p>
          <p><strong>Fun Fact:</strong></p>
        </h2>
      </div>
    </div>
    <div class="divCard">
      <div class="card"></div>
      <div class="card"></div>
      <div class="card"></div>
      <div class="card"></div>
    </div>
    <script src="members.js"></script>
    <div class="glow">
        <img src="img/Glow.png" alt="">
    </div>
  </body>
</html>
