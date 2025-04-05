<?php
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
session_start();
if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] == true){
    header("Location: admin.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css?v=1.2">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Syne:wght@400..800&display=swap" rel="stylesheet">
    <title>Login</title>
</head>
<body>

    <div class="navBar">
        <div class="navDiv">
            <li class="admin syne-h1"><a href="admin.php">ADMIN PAGE</a></li>
            <li class="PD syne-h1"><a href="project-desc.php">PROJECT DESCRIPTION</a></li>
            <li class="member syne-h1"><a href="members.php">MEMBERS</a></li>
            <li class="logout syne-h1"><a href="includes/logout.php">LOGOUT</a></li>
        </div>
    </div>
    <div class="mainContainer">
        <div class="divForm">
            <h1 class="syne-h1">WELCOME!</h1>
            <form action="includes/login.php" method="POST">
                <input class="syne-h1" name="username" id="username"type="text" placeholder="username">
                <input class="syne-h1" name="password" id="password"type="password" placeholder="password">
                <div class="buttons">
                    <button class="butReset syne-h1" type="reset">reset</button>
                    <button class="butSub syne-h1" type="submit">submit</button>
                </div>
                
            </form>
            
        </div>
        <?php
                    
                    if (isset($_SESSION["error_login"]) && isset($_SESSION["error_login"]["EmailWrong"])) {
                        echo '<p class="error syne-h1">' . htmlspecialchars($_SESSION["error_login"]["EmailWrong"]) . '</p>';
                        unset($_SESSION["error_login"]); 
                    }
                ?><?php
                
                if (isset($_SESSION["error_login"]) && isset($_SESSION["error_login"]["EmailWrong"])) {
                    echo '<p class="error">' . htmlspecialchars($_SESSION["error_login"]["EmailWrong"]) . '</p>';
                    unset($_SESSION["error_login"]); 
                }
            ?>
        <div class="divCard">
            
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