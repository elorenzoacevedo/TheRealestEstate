<?php
    session_start();
    if(isset($_SESSION["status"])){
        unset($_SESSION["status"]);
        unset($_SESSION["errors"]);
    }

    if(isset($_GET["user_type"]) && $_GET["user_type"] == "'admin'"){
        echo "ADMIN USER DASHBOARD <br> TODO: Not yet implemented.";
    }
    elseif(isset($_GET["user_type"]) && $_GET["user_type"] == "'seller'"){
        echo "SELLER USER DASHBOARD <br> TODO: Not yet implemented.";
    }
    else {
?>

<!DOCTYPE html>
<html lang="en">

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
    <form>
        <label for="searchInput">Search: </label>
        <input type="text" name="searchInput" id="searchInput">
    </form>
    <div class="row">
        <div class="col-sm-6">
            <div class="card" style="width:400px">
                <img class="card-img-top" src="./img/h1a.webp" alt="Card image" style="width: 400px;">
                <div class="card-body">
                    <h4 class="card-title">5 Bedroom house</h4>
                    <p class="card-text">Beautiful house with everything
                        <br> necessary for a whole family.
                        <br> Price: $420,000.
                    </p>
                    <a href="./links/h1l.html" class="btn btn-primary">See details</a>
                    <a href="./wishlist-item.php?id=1"><button>Add to Wishlist</button></a>
                </div>
            </div>
        </div>
        <div class="col-sm-6">

            <div class="card" style="width:400px">
                <img class="card-img-top" src="./img/h2a.webp" alt="Card image" style="width: 400px;">
                <div class="card-body">
                    <h4 class="card-title">3 Bedroom house</h4>
                    <p class="card-text">Affordable house with a
                        <br> big frontyard.
                        <br> Price: $335,000.
                    </p>
                    <a href="./links/h2l.html" class="btn btn-primary">See details</a>
                    <a href="./wishlist-item.php?id=2"><button>Add to Wishlist</button></a>
                </div>
            </div>
        </div>
        <div class="col-sm-6">

            <div class="card" style="width:400px">
                <img class="card-img-top" src="./img/h3a.webp" alt="Card image" style="width: 400px;">
                <div class="card-body">
                    <h4 class="card-title">2 Bedroom condo</h4>
                    <p class="card-text">Furnished condo
                        <br> with laundry room available.
                        <br> Price: $269,000.
                    </p>
                    <a href="./links/h3l.html" class="btn btn-primary">See details</a>
                    <a href="./wishlist-item.php?id=3"><button>Add to Wishlist</button></a>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card" style="width:400px">
                <img class="card-img-top" src="./img/h4a.webp" alt="Card image" style="width: 400px; height: 266px;">
                <div class="card-body">
                    <h4 class="card-title">1 Bedroom condo</h4>
                    <p class="card-text">Minimalist condo.
                        <br> Perfect for moving alone.
                        <br> Price: $165,000.
                    </p>
                    <a href="./links/h4l.html" class="btn btn-primary">See details</a>
                    <a href="./wishlist-item.php?id=4"><button>Add to Wishlist</button></a>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card" style="width:400px">
                <img class="card-img-top" src="./img/h5a.webp" alt="Card image" style="width: 400px;">
                <div class="card-body">
                    <h4 class="card-title">4 Bedroom house</h4>
                    <p class="card-text">Brick house
                        <br> with a huge backyard.
                        <br> Price: $289,000.
                    </p>
                    <a href="./links/h5l.html" class="btn btn-primary">See details</a>
                    <a href="./wishlist-item.php?id=5"><button>Add to Wishlist</button></a>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card" style="width:400px">
                <img class="card-img-top" src="./img/h6a.webp" alt="Card image" style="width: 400px; height: 266px;">
                <div class="card-body">
                    <h4 class="card-title">1 Bedroom condo</h4>
                    <p class="card-text">Industrial design condo.
                        <br> Unfurnished.
                        <br> Price: $194,800.
                    </p>
                    <a href="./links/h6l.html" class="btn btn-primary">See details</a>
                    <a href="./wishlist-item.php?id=6"><button>Add to Wishlist</button></a>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card" style="width:400px">
                <img class="card-img-top" src="./img/h7a.webp" alt="Card image" style="width: 400px;">
                <div class="card-body">
                    <h4 class="card-title">3 Bedroom house</h4>
                    <p class="card-text">Small on the outside
                        <br> big on the inside.
                        <br> Price: $325,000.
                    </p>
                    <a href="./links/h7l.html" class="btn btn-primary">See details</a>
                    <a href="./wishlist-item.php?id=7"><button>Add to Wishlist</button></a>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card" style="width:400px">
                <img class="card-img-top" src="./img/h8a.webp" alt="Card image" style="width: 400px; height: 300px;">
                <div class="card-body">
                    <h4 class="card-title">3 Bedroom house</h4>
                    <p class="card-text">Cheap house.
                        <br> You get what you paid for.
                        <br> Price: $139,000.
                    </p>
                    <a href="./links/h8l.html" class="btn btn-primary">See details</a>
                    <a href="./wishlist-item.php?id=8"><button>Add to Wishlist</button></a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

<?php
    }
?>