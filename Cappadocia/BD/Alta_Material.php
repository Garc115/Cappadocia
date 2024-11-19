<?php
//Conexion
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Cappadocia";
//Varibales que vienen en el formulario Alta Users.html
$mat_nombre = $_POST['mat_nombre'];
$mat_cantidad = $_POST['mat_cantidad'];
//Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
//Check connection
if ($conn->connect_error) {
	die("Connection failed: ". $conn->connect_error);
}
//Insertar el registro con los datos del formulario
$sql = "INSERT INTO administrador (nombre, cantidad)
VALUES('".$mat_nombre."', '".$mat_cantidad."')";
if ($conn->query($sql) === TRUE) {
	echo "New Record created successfully<br>";
} else{
	echo "Error: ". $sql . "<br>" . $conn->error;
}
$conn -> close();
?>