<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cappadocia";
//Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
//Check connection
if ($conn->connect_error) {
	die("Connection failed: ". $conn->connect_error);
}
//Create Table
$sql = "CREATE TABLE Usuario (
	id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	nombre VARCHAR(50) NOT NULL,
	apellido VARCHAR(50) NOT NULL,
	email VARCHAR(50),
	reg_date TIMESTAMP
)";
if($conn->query($sql)===TRUE){
	echo "Table Usuario created successfully";
} else {
	echo "Error creating table: " . $conn->error;
}
$conn -> close();
?>