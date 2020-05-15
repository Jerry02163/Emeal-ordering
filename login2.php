<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="login2.css">
    <title>Login</title>
</head>
<body>
    <div class="header" id="top" style="width: 100% !important;">
        <span class="logo"><a href="index.php"><img src="rai34.jpg" alt=""></a></span>
        <ul class="links">
            <li><a href="welcome.php"><i class="fa fa-home"></i>&nbsp;&nbsp;Home</a></li>
            <li><a href="https://www.railyatri.in/pnr-status">PNR Status</a></li>
            <li><a href="menu.php">Menu</a></li>
            <li><a href="contact us.html">Contact</a></li>
            <li><a href="#">Services</a></li>
        </ul>
    </div>
    <div class="container">
        <h2>ACCOUNT LOGIN</h2>
        <div class="form">
            <form action="login-check.php" method="POST">
                <label for="email"><i class="fa fa-user" style="color:grey;"></i></label><input name="username" type="email" id="email" placeholder="Username" required><br>
                <label for="pass"><i class="fa fa-lock" style="color:grey;"></i></label><input name="password" type="password" id="pass" placeholder="Password" required><br>
                <button type="submit">LOGIN</button><br><br>
            </form>
            <a href="register2.php">Sign Up Here!</a>
        </div>
    </div>
</body>
</html>
