<?php
$servername = "localhost";
$username = "root";
$password = "";
$conn = new mysqli($servername, $username, $password);
//Check connection
if (!$conn) {
	die("Connection failed: ". mysqli_connect_error());
}
//Create database
$sql = "CREATE DATABASE Cappadocia";
if(mysqli_query($conn, $sql)){
	echo "Database created Succesfully";
} else {
	echo "Error creating Database: " . mysqli_error($conn);
}
mysqli_close($conn);
?>