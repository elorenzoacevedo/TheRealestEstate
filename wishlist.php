<?php
    include("./common.php");
    session_start();

    $user = $_SESSION["user"];
    $wishlist = "";
    $conn = connectToDatabase();

    $query = "SELECT wishlist FROM USERS WHERE username = '$user'";
    $result = $conn->query($query);
    while($row = $result->fetch_array()){
        $wishlist = $row["wishlist"];
    }

    $wishlist = explode(",", $wishlist);
    $dbresults = [];
    foreach($wishlist as $wish){
        if($wish != ""){
            $dbresults[] = getPropertyInfo($wish);
        }
    }
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./bootstrap.css" rel="stylesheet">
    <link href="./mt4.css" rel="stylesheet">
    <script src="./mt4.js"></script>
    <title>TheRealestEstate</title>
</head>

<body>
    <div class="topnav">
        <a class="active" href="./mt4.php">Home</a>
        <a href="./wishlist.php">Wishlist</a>
        <a href="./login.php?logout=true">Log Out</a>
    </div>
    <br>

    <div class="row">

        <?php
            foreach($dbresults as $result):
                while($row = $result->fetch_array()):
        ?>

            <div class="card" style="width:400px">
                <img class="card-img-top" src="<?=$row["img_url"]?>" alt="Card image" style="width: 400px;">
                <div class="card-body">
                    <h4 class="card-title"><?=$row["title"]?></h4>
                    <p class="card-text"><?=$row["description_"]?></p>
                    <a href="<?=$row["url_"]?>" class="btn btn-primary">See details</a>
                    <a href="./wishlist-item.php?id=1"><button>Add to Wishlist</button></a>
                </div>
            </div>
        <?php endwhile; endforeach; ?>

    </div>
</body>

</html>