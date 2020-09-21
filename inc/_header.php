<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="description" oontent="A Login/Sign Up Form Example">
    <meta name=viewport content="width=device-width, initial-scale=1">
    <title>Sign Up Form Template</title>
    <link rel="stylesheet" type="text/css" href="">
</head>
<body>

    <header>
        <nav>
            <a href="#">
                <img src="images/xLogo.jpg" alt="logo">
            </a>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="#">Portfolio</a></li>
                <li><a href="#">About Me</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
            <div>
                <form action="inc/login.php" method="POST">
                    <input type="text" name="emailID" placeholder="Username/E-mail...">
                    <input type="password" name="password" placeholder="Password">
                    <button type="submit" name="loginButton">Login</button>
                </form>
                <a href="signup.php">Sign Up</a>
                <form action="inc/logout.php" method="POST">
                    <button type="submit" name="logoutButton">Logout</button>
                </form>
            </div>
        </nav>
    </header>