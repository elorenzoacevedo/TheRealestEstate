<?php
    define('ENCRYPTION_KEY', '__^%&Q@$&*!@#$%^&*^__');
    
    function getPropertyInfo($id){
        $id = intval($id);
        $conn = connectToDatabase();
        $query = "SELECT title, description_, img_url, url_ FROM PROPERTIES WHERE id = $id";
        $result = $conn->query($query);
        $conn->close();
        return $result;
    }

    function connectToDatabase(){
        $host = "localhost";
        $user = "elorenzoacevedo1";
        $pass = "elorenzoacevedo1";
        $dbname = "elorenzoacevedo1";

        //create connection
        $conn = new mysqli($host, $user, $pass, $dbname);
        //check connection
        if($conn->connect_error){
            echo "Could not connect to server\n";
            die("Connection failed: " . $conn->connect_error);
        }

        return $conn;
    }
    function authenticate_user($username, $password){

        //create connection
        $conn = connectToDatabase();

        $query = "SELECT pword FROM USERS WHERE username = '$username'";
        $result = $conn->query($query);
        $truepword = "";
        while($row = $result->fetch_array()){
            $truepword = $row["pword"];
        }

        $truepword = decrypt($truepword, ENCRYPTION_KEY);

        $conn->close();

        return $truepword == $password;
    }

    function encrypt($data, $key){
        $encrypted = base64_encode($data ^ $key);
        return $encrypted;
    }
    
    function decrypt($data, $key){
        $decrypted = base64_decode($data) ^ $key;
        return $decrypted;
    }
?>