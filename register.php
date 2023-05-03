<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <title>Register</title>
    <link rel="stylesheet" href="./login.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link href="./mt4.css" rel="stylesheet">
</head>

<body>
    <div class="topnav">
        <a href="login.php">Log in</a>
    </div>
    <br>
    <div class="rectangle">
        <h2>Register</h2>

        <?php
        //Check for errors in the session
        if (isset($_SESSION["status"]) && $_SESSION["status"] == "error") :
        ?>

            <div>
                <ul>
                    <?php
                    //Print errors
                    foreach ($_SESSION["errors"] as $error) :
                    ?>
                        <li><?= $error ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        <?php endif; ?>

        <form action="./register-submit.php" method="post">
            <div>
                <span><label for="fname">First Name: </label></span>
                <input type="text" name="fname" id="fname">
            </div>
            <div>
                <span><label for="lname">Last Name: </label></span>
                <input type="text" name="lname" id="lname">
            </div>
            <div>
                <span><label for="username">Username: </label></span>
                <input type="text" name="username" id="username" maxlength="20">
            </div>
            <div>
                <span><label for="email">Email: </label></span>
                <input type="text" name="email" id="email" maxlength="30">
            </div>
            <div>
                <span><label for="utype">User Type: </label></span>
                <select name="user_type" id="utype">
                    <option value="">(Select user type)</option>
                    <option value="buyer">Buyer</option>
                    <option value="seller">Seller</option>
                </select>
            </div>
            <div>
                <span><label for="password">Password: </label></span>
                <input type="password" name="password" id="password" maxlength="30">
            </div>
            <div>
                <span><label for="cpassword">Confirm Password: </label></span>
                <input type="password" name="cpassword" id="cpassword" maxlength="30">
            </div>
            <input type="submit" value="Register">
        </form>
    </div>
</body>

</html>