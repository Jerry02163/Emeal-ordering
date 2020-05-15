<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="register2.css">
    <title>Login</title>
</head>
<body>
    <div class="header" id="top" style="width: 100% !important;">
        <span class="logo"><a href="welcome.php"><img src="rai34.jpg" alt=""></a></span>
        <ul class="links">
            <li><a href="welcome.php"><i class="fa fa-home"></i>&nbsp;&nbsp;Home</a></li>
            <li><a href="https://www.railyatri.in/pnr-status">PNR Status</a></li>
            <li><a href="menu.php">Menu</a></li>
            <li><a href="contact us.html">Contact</a></li>
            <li><a href="#">Services</a></li>
        </ul>
    </div>
    <div class="container">
        <h2>REGISTER HERE</h2>
        <div class="form">
            <form action="insert2.php" method="POST">
                <label for="name"><i class="fa fa-user" style="color:grey;"></i></label><input name="FullName" type="text" id="name" placeholder="Enter your Full Name" required><br>
                <label for="email"><i class="fa fa-envelope" style="color:grey;"></i></label><input name="Email" type="email" id="email" placeholder="Enter your Email" required><br>
                <label for="phone"><i class="fa fa-phone" style="color:grey;"></i></label><input name="phone" type="number" id="phone" placeholder="Mobile Number" required><br>
                <label for="add"><i class="fa fa-home" style="color:grey;"></i></label><input type="text" name="Address" id="add" placeholder="Enter your Address" required><br>
                <label for="pass"><i class="fa fa-lock" style="color:grey;"></i></label><input type="password" name="CreatePassword" id="pass" placeholder="Enter Password" required><br>
                <label for="cpass"><i class="fa fa-lock" style="color:grey;"></i></label><input type="password" id="cpass" name="ConfirmPassword" placeholder="Confirm Password" required><br>
                <button type="submit">Count me In</button><br><br>
            </form>
            <a href="login2.php">Already have an account?</a>
        </div>
        <br><br><br>
    </div>
</body>
</html>
