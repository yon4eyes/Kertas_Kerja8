<?php
$servername = "localhost";
$username = "root";
$password = "";//tiada penutup ;
$db = "farmasi";//nama database tidak diletak

// Create connection
$conn = mysqli_connect("localhost","root","");
$db = mysqli_select_db($conn,"farmasi");//tidak meletakkan syntax $conn
echo "databases not connected";
?>