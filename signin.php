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
    <main> 
    <form action="signin.php" method="post">
        <div class="signin">
            <h1>Log in</h1>
            <hr>

            <label for="email"><b>Email</b></label>
            <input type="text" placeholder="Enter Email" name="email" required>

            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="psw" required>

            <hr>

            <button type="submit" class="registerbtn">Login</button>
        </div>
        
   
    <?php
//Ta emot data och lagra den i tabellen från formuläret
if (isset($_POST['email'], $_POST['psw'])) {
//Skydda mot script och andra farligheter
    $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_STRING);
    $psw = filter_input(INPUT_POST, "psw", FILTER_SANITIZE_STRING);
    // Trimmar bort mellan slag.
    $email = trim($email);
//Logga in på databasen
    $conn = new mysqli($hostname, $user, $password, $database);

    //Kolla om databasen funkar
    if ($conn->connect_error) {
        die("Kunde inte ansluta till databasen: " . $conn->connect_error);
    }

    //Anslutningen fungerar. Söker efter användaren
    $sql = "SELECT * FROM admin WHERE email = '$email'";
    $result = $conn->query($sql);

    //Kunde SQL- satsen köras'+ 
    if ($result->num_rows != 0) {
        $email = $result->fetch_assoc();

        //Nu ska vi jämföra lösen med hash
        if (password_verify($psw, $email['hash'])){
            $_SESSION['loggedin'] = true;
            $_SESSION['email'] = $user['email'];
            header("Location:index.php");
        }else {
            echo "<p class=\"animated rubberBand fel\">Password doesnt match. Try Again.</p>";
        }
    }else{
            echo "<p class=\"animated rubberBand fel\">Email doesnt match. Try Again.";
        }
$conn->close();
   
    }


?>
 </form>
</main>
</body>

</html>