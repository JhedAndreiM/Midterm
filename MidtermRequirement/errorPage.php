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
    <link rel="stylesheet" href="styleError.css?v=1.1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Syne:wght@400..800&display=swap" rel="stylesheet">
    <title>Login</title>
</head>
<body>

    
    <div class="mainContainer">
        <div class="divForm">
            <h1 class="syne-h1">YOU NEED TO LOGIN</h1>
            <h3 class="syne-h1">To properly use the feature of this site</h5>
            <form action="index.php">
            <button class="syne-h1">go back to login page</button>
            </form>
            
        </div>
        <?php
                    // Display error message only if it exists
                    if (isset($_SESSION["error_login"]) && isset($_SESSION["error_login"]["EmailWrong"])) {
                        echo '<p class="error">' . htmlspecialchars($_SESSION["error_login"]["EmailWrong"]) . '</p>';
                        unset($_SESSION["error_login"]); // Clear error after displaying
                    }
                ?><?php
                // Display error message only if it exists
                if (isset($_SESSION["error_login"]) && isset($_SESSION["error_login"]["EmailWrong"])) {
                    echo '<p class="error">' . htmlspecialchars($_SESSION["error_login"]["EmailWrong"]) . '</p>';
                    unset($_SESSION["error_login"]); // Clear error after displaying
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