<?php
    include("./common.php");
    session_start();

    $status = "";
    $errors = [];

    if(!isset($_POST["username"]) || $_POST["username"] == ""){
        $status = "error";
        $errors[] = "Please provide a username.";
    }

    if(!isset($_POST["password"]) || $_POST["password"] == ""){
        $status = "error";
        $errors[] = "Please provide a password.";
    }

    if($status == "error"){
        $_SESSION["status"] = $status;
        $_SESSION["errors"] = $errors;
        header("Location: ./login.php");
    }
    else {

        $username = $_POST["username"];
        $password = $_POST["password"];

        if(authenticate_user($username, $password)){
            
            $conn = connectToDatabase();
            $query = "SELECT user_type FROM USERS WHERE username = '$username'";
            $user_type = "";
            $result = $conn->query($query);
            while($row = $result->fetch_array()){
                $user_type = $row["user_type"];
            }
            $_SESSION["user"] = $username;
            header("Location: ./mt4.php?user_type='$user_type'");
        }
        else {
            if(isset($_SESSION["status"])){
                unset($_SESSION["status"]);
                unset($_SESSION["errors"]);
            }
            $_SESSION["status"] = "error";
            $_SESSION["errors"][] = "Credentials were not found.";
            header("Location: ./login.php");
        }

    }
?>