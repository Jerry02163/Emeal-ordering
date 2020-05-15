<?php 
	session_start();
?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="register.css">

<title>Registration form</title>
	
	<body>
	<div class="registerbox">
	<img src="avatar.png" class="ravtar">
	<h2>Register</h2>
	<form action="insert2.php" method="POST">
	<p>FullName</p>
	<input type="text" name="FullName" placeholder="Enter Name" required>
	<p>Email</p>
	<input type="text" name="Email" placeholder="Enter Email" required>
	<p>MobileNo.</p>
	<input type="number" name="phone" placeholder="Enter Mobile No."  required>
	<p>Address</p>
	<input type="text" name="Address" placeholder="enter Address" required>
	<p>CreatePassword</p>
	<input type="Password" name="CreatePassword" placeholder="Enter Password" required>
	<p>ConfirmPassword</p>
	<input type="password" name="ConfirmPassword" placeholder="Confirm Password"required>
	<input type="Submit" value="Register"/>	
	<a href="login.php"> Already Exist Account</a><br>
	</form>
	
	</body>
	</head>
	</html>
	