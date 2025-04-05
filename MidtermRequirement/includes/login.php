<?php
session_start();
if($_SERVER["REQUEST_METHOD"]==="POST"){
    $username=$_POST["username"];
    $pwd=$_POST["password"];
    
    try {
        require_once 'connection.php';

        $query="SELECT * FROM users WHERE username=:username;";
        $stmt=$pdo->prepare($query);
        $stmt->bindParam(":username", $username);
        $stmt->execute();
        
        $result=$stmt->fetch(PDO::FETCH_ASSOC);

       
        $errors=[];

        if($result){
            echo "1";
            if(($pwd==$result['password'])){
                header("Location: ../admin.php");
                $_SESSION["loggedin"] = true;
            }
            else{
                $errors["EmailWrong"]="Incorrect Username or Password";
            }
        }else {
            $errors["EmailWrong"]="Incorrect Username or Password";
        }

        if($errors){
            $_SESSION["error_login"]=$errors;
            header("Location: ../index.php");
            die();
        }
    } catch (PDOException $e) {
        die( "Query failed: " . $e->getMessage());
    }
}else{
    header("Location: ../index.php");
    die();
}