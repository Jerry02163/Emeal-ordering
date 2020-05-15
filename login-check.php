<?php
    $username = $_POST['username'];
    $password = $_POST['password'];

    session_start();

    if(isset($_SESSION['username'])){
        header('location: order2.php');
    }

    else {
        $conn = new mysqli('localhost','root','','order');
        $query = "select Email and CreatePassword from register where Email='$username' and CreatePassword='$password'";
        $result = mysqli_query($conn,$query);
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        $count = mysqli_num_rows($result);

        if($count == 1){
            header('location: menu.php');
        }
        else{
            echo "NOT LOGGED IN";
        }
    }

?>
