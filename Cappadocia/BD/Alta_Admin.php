<?php
//Conexion
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Cappadocia";
//Varibales que vienen en el formulario Alta Users.html
$admin_nombre = $_POST['admin_nombre'];
$admin_apellido = $_POST['admin_apellido'];
$admin_correo = $_POST['admin_correo'];
$admin_contraseña = $_POST['admin_contraseña'];
//Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
//Check connection
if ($conn->connect_error) {
	die("Connection failed: ". $conn->connect_error);
}
//Insertar el registro con los datos del formulario
$sql = "INSERT INTO administrador (firstname, lastname, email, password)
VALUES('".$admin_nombre."', '".$admin_apellido."','".$admin_correo."', '".$admin_contraseña."')";
if ($conn->query($sql) === TRUE) {
	echo "New Record created successfully<br>";
} else{
	echo "Error: ". $sql . "<br>" . $conn->error;
}
$conn -> close();
?>