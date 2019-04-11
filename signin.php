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
            <form action="signin.php">
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
</form>
</body>
</html>