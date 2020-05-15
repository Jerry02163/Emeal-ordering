<?php
	session_start();
?>
<html>
<head>
<title>login Here</title>
	<link rel="stylesheet" type="text/css" href="login.css">
<body>

<header>
	<div class="row">
			<ul class="main-nav">
				<li><a link href="index.php">HOME </a></li>
				<li><a href="https://www.railyatri.in/pnr-status">PNR STATUS</a></li>
				<li><a href="menu.php">MENU</a></li>
				<li><a link href="contact us.html">CONTACT</a></li>
				<li><a href="">SERVICES</a></li>
			</ul>

				</header>


	<div class="loginbox">
	<img src="avatar.png" class="avatar">
	<h1>login</h1>
	<form action="login-check.php" method="POST">
	<p>username</p>
	<input type="text" name="username" placeholder="Enter Username">
	<p> password</p>
	<input type="Password" name="password" placeholder="Enter Password">

		HOME DELIVERY <input type="checkbox" href="ORDER2.html">
		STATION DELIVERY <input type="checkbox" href="orderform.html">

	<div class="button-awesome">
	<input type="Submit" value="Login"/>
	</div>
	<a href="#"> Lost your password?</a><br>
	<a href="#"> Don't have an Account?</a>
	<a link href="register.php" class="btn-half">Register Here</a>
	</form>


</body>
</head>



</html>
