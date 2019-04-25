<?php
/*
* PHP version 7
* @category   Lånekalkylator
* @author     Karim Ryde <karye.webb@gmail.com>
* @license    PHP CC
*/

?>
<!DOCTYPE html>
<html lang="sv">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    
    <script src='https://api.tiles.mapbox.com/mapbox-gl-js/v0.51.0/mapbox-gl.js'></script>
    <link href='https://api.tiles.mapbox.com/mapbox-gl-js/v0.51.0/mapbox-gl.css' rel='stylesheet' />
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <div class="container">
        <header>
            <a href="index.php">
                <h1>CoffeeShop</h1>
            </a>
            <nav>
                <a href="index.php">Home</a>
                <a href="coffeeshop.php">Coffee Shop</a>
                <a href="about.php">About</a>
                <a href="contact.php">Contact</a>
                <?php
                if ($_SESSION['loggedin']) {
                   echo "<a class=\"active\" href=\"karta.php\">Map</a>";
                   echo "<a class=\"button\" href=\"logout.php\">Log Out</a>";
                } else {
                    echo "<a class=\"button\" href=\"login.php\">Log In</a>";
                }
                
                ?>
                <a class="button" href="login.php">Create Account</a>
        </header>
        <main>
            <div id="map"></div>
            <div class="box">
                <h1> Add Shops</h1>
                <form class="platser"></form>
                <button id="knapp">Save</button>
            </div>
        </main>
    </div>
    <script src="./js/mapbox.js"></script>

</body>

</html>