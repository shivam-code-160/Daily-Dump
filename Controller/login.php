<?php

include 'connection.php';
$email = $_POST['email'];
$password = md5($_POST['password']);

//echo $password; exit;
$sql = "SELECT * FROM user_detail WHERE email='$email' AND password='$password'";


$result = mysqli_query($con, $sql) or die("SQL Query Failed.");

    
    if (mysqli_num_rows($result) > 0) {
        echo "Login";
        exit;
    }else{
        echo "Something Went Wrong";
    }
?>