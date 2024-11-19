<?php
//Conexion
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Cappadocia";
//Varibales que vienen en el formulario Alta Users.html
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$correo = $_POST['correo'];
$contraseña = $_POST['contraseña'];
//Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
//Check connection
if ($conn->connect_error) {
	die("Connection failed: ". $conn->connect_error);
}
//Insertar el registro con los datos del formulario
$sql = "INSERT INTO usuario (firstname, lastname, email, password)
VALUES('".$nombre."', '".$apellido."','".$correo."', '".$contraseña."')";
if ($conn->query($sql) === TRUE) {
	echo "New Record created successfully<br>";
} else{
	echo "Error: ". $sql . "<br>" . $conn->error;
}
$conn -> close();
?>