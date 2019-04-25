<?php
/*
* PHP version 7
* @category   Lånekalkylator
* @author     Karim Ryde <karye.webb@gmail.com>
* @license    PHP CC
*/
include_once "../configscoffee/config-db.inc.php" ;

session_start();
if (!isset($_SESSION['loggedin'])){
    $_SESSION['loggedin'] = false;
}
?>
<!DOCTYPE html>
<html lang="sv">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="container">
        <header>
            <img src="./images/coffee-house-cafe-logo-1.png" id="logo">
            <nav>
                <a href="index.php">Home</a>
                <a href="coffeeshop.php">Coffee Shop</a>
                <a href="about.php">About</a>
                <a href="contact.php">Contact</a>
                <?php
                if (!$_SESSION['loggedin']) {
                   echo "<a href=\"login.php\">Login</a>";
                } else {
                    echo "<a href=\"logout.php\">Log Out</a>";
                }
                
                ?>
            </nav>
        </header>
        <img src="./images/How-Can-You-Possibly-Perform-At-Your-Peak.png" class="slider">
        <button class="yellowbutton">Search for coffee shop</button>

        <div class="imagenav">
            <div class="career"> <a href=""><button class="imagebutton-menu">Careers</button></a></div>

            <div class="about-us"><button class="imagebutton-menu">About Us</button></div>
            
            <div class="coffee-shops"><a href=""><button class="imagebutton-menu">Coffee Shops</button></a></div>
            
            <div class="contacts"> <a href=""><button class="imagebutton-menu">Contact Us</button></a></div>
        </div>

        <footer>
            <p>Vägenvägen 1 <br>
                123 45 <br>
                071234567
            </p>
            <div class="media-icons">
                <a href="https://www.instagram.com/"><img src="./images/instagram.png" alt=""></a>
                <a href="https://www.instagram.com/"><img src="./images/33702.png" alt=""></a>
                <a href="https://www.instagram.com/"><img src="./images/asset-7.png" alt=""></a>
            </div>


        </footer>

</body>

</html>