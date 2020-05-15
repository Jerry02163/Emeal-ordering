<?php
$pnr = $_POST['pnr'];
$station = $_POST['station'];
$seat = $_POST['seat'];

$conn = new mysqli('localhost','root', '', 'order');
	if ($conn->connect_error) {
		die('connection failed: '.$conn->connect_error);
} else {
	$query = "insert into orders(pnr, station, seat) values ('$pnr','$station','$seat')";
	if ($conn->query($query) === TRUE) {
		echo "New record created successfully";
	} else {
		echo "Error: " . $query . "<br>" . $conn->error;
	}
}
 ?>
