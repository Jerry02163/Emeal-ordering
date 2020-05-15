<?php
$FullName = $_POST['FullName'];
$Email = $_POST['Email'];
$phone= $_POST['phone'];
$Address = $_POST['Address'];
$CreatePassword =$_POST['CreatePassword'];
$ConfirmPassword = $_POST['ConfirmPassword'];

	$conn = new mysqli('localhost', 'root','', 'order');
	if ($conn->connect_error) {
		die('connection failed: '. $conn->connect_error);
	}
	else {
	$query = "insert into register (FullName, Email, phone, Address , Createpassword, confirmPassword)
	 values ('$FullName','$Email','$phone','$Address','$CreatePassword','$ConfirmPassword')";
	 if ($conn->query($query) === TRUE) {
		header("Location: login2.php");
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
	}

 ?>
