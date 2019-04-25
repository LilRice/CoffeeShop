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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
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
    </div>

    <form action="#" method="post">
        <div class="register">
            <h1>Register</h1>
            <p>Please fill in this form to create an account.</p>
            <hr>

            <label for="email"><b>Email</b></label>
            <input type="text" placeholder="Enter Email" name="email" required
                value="<?php echo isset($_POST['email']) ? $_POST['email'] : '' ?>">

            <label for="psw"><b>Password</b></label>
            <input id="psw" type="password" placeholder="Enter Password" name="psw" required>

            <label for="psw-repeat"><b>Repeat Password</b></label>
            <input id="pswrepeat" type="password" placeholder="Repeat Password" name="pswrepeat" required>
            <hr>

            <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
            <button type="submit" class="registerbtn">Register</button>
        </div>

        <div class="container signin">
            <p>Already have an account? <a href="signin.php">Sign in</a>.</p>
        </div>
    </form>

    <?php
//Ta emot data och lagra den i tabellen från formuläret
if (isset($_POST['email'], $_POST['psw'], $_POST['pswrepeat'])) {
//Skydda mot script och andra farligheter
    $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_STRING);
    $psw = filter_input(INPUT_POST, "psw", FILTER_SANITIZE_STRING);
    $pswrepeat = filter_input(INPUT_POST, "pswrepeat", FILTER_SANITIZE_STRING);
    // Trimmar bort mellan slag.
    $email = trim($email);
//Logga in på databasen
    $conn = new mysqli($hostname, $user, $password, $database);

    //Kolla om databasen funkar
    if ($conn->connect_error) {
        die("Kunde inte ansluta till databasen: " . $conn->connect_error);
    }
//Räkna ut hash på lösenord 
$hash = password_hash($psw, PASSWORD_DEFAULT);

// Lägg till och lagra ny användare 

$sql = "INSERT INTO admin (email, hash) VALUES ('$email', '$hash')";
$result = $conn->query($sql);

if (!$result) {
    die("Något blev fel med SQL- satsen: " . $conn->error);
}else {
    echo "Användare registrerad.";
}

$conn->close(); // @todo Kom ihåg att idk...
} 



?>



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
<script src="./js/js.js"></script>
</body>

</html>