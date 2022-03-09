<?php 

require "connection.php";
$fname = $_POST["fname"];
$lname = $_POST["lname"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$password = md5($_POST["password"]);


// echo $fname;


$sql = "INSERT INTO `user_detail`(fname, lname, email, phone, password) VALUES ('{$fname}','{$lname}','{$email}','{$phone}','{$password}')";


if(mysqli_query($con, $sql)){
    echo 1;
}
else{
    echo 0;
}

?>
