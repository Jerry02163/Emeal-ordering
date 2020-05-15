<?php
	session_start();
?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="order.css">

<title>ORDERS FORM</title>
	<body>
	<div class="orderbox">
	<img src="rai34.jpg" class="ravtar">
	<?php
		if(isset($_SESSION['username'])):
	?>
	<h2> Hi,<?php echo $_SESSION['username'];?> ORDER FOOd</h2>
	<?php endif ?>

	<form action="orderins.php" method="POST">
	<p>PNR NUMBER</p>
	<input type="number" name="pnr" placeholder="Enter PNR NO." required>
	<p>STATION NAME</p>
	<input type="text" name="station" placeholder="Enter STATION" required>
	<p> SEAT NUMBER</p>
	<input type="number" name="seat" placeholder="Enter SEAT NO." required>
	<div class="button-awesome">
	<input type="submit" value="Order Now">
	</div>
</form>
	<a href="logout.php" type="button">Logout</a>
	</body>
	</head>
	</html>
