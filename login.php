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
                <a href="login.php">Login</a>
            </nav>
            </div>
            
    <form action="login.php">
        <div class="register">
    <h1>Register</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <label for="psw-repeat"><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="psw-repeat" required>
    <hr>

    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
    <button type="submit" class="registerbtn">Register</button>
  </div>

  <div class="container signin">
    <p>Already have an account? <a href="signin.php">Sign in</a>.</p>
  </div>
</form>



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