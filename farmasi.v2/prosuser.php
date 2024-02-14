<?php include("config.php");

$name = $_POST['name'];//nama pada table salah
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

$sql = "INSERT INTO user VALUES ('','$name','$username','$email','$password','2')";//tiada tanda "" 
$result = mysqli_query($conn,$sql);//tidak lengkap


?>