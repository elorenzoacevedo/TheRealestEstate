<?php
    session_start();
    if(isset($_GET["logout"]) && $_GET["logout"] == true){
        session_destroy();
    }
?>

<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link href="./mt4.css" rel="stylesheet">
</head>

<body>
    <div class="topnav">
        <a href="register.php">Register</a>
    </div>
    <br>

    <div class="rectangle">
        <div class="loginInfo">
            <h2>Login</h2>

            <?php if (isset($_GET["register"]) && $_GET["register"] === "TRUE") : ?>

                <div>
                    <h3>---REGISTRATION SUCCESSFUL---</h3>
                </div>

            <?php endif; ?>

            <?php if (isset($_GET["register"]) && $_GET["register"] === "FALSE") : ?>

                <div>
                    <h3>---REGISTRATION ERROR---</h3>
                </div>

            <?php endif; ?>

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

            <form action="./login-submit.php" method="post">
                <div>
                    <label for="username">Username: </label>
                    <input type="text" name="username" id="username" maxlength="20">
                </div>
                <div>
                    <label for="password">Password:&nbsp </label>
                    <input type="password" name="password" id="password" maxlength="30">
                </div>
                <input type="submit" value="Login">
                <br>
                <br>
                <a href="register.php"> Click here if you are a new user</a>
            </form>
        </div>
    </div>
</body>

</html>