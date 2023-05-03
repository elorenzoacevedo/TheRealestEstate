<?php
    include("./common.php");
    session_start();
    $user = $_SESSION["user"];
    $id = $_GET["id"];
    $wishlist = "";

    $conn = connectToDatabase();

    $query = "SELECT wishlist FROM USERS WHERE username = '$user'";
    $result = $conn->query($query);
    while($row = $result->fetch_array()){
        $wishlist = $row["wishlist"];
    }
    
    if (strpos($wishlist, $id) == false) {
        $wishlist .= "$id,";
    }

    if($wishlist == null){
        $wishlist = $id . ",";
    }
    
    $query = "UPDATE USERS SET wishlist = '$wishlist' WHERE username = '$user'";
    if($conn->query($query) === TRUE){
        header("Location: ./mt4.php?user_type=%27buyer%27");
    }
    else {
        header("Location: ./mt4.php?user_type=%27buyer%27");
    }

    $conn->close();
?>