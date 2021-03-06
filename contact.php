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
<div class="contact-form">
        <label for="">Name</label> <input type="text">
        <label for="">E-mail</label> <input type="text">
        <label for="">Message</label> <textarea name="" id="" cols="30" rows="10"></textarea>
        </div>


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