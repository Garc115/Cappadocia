<?php
// validar.php

// Configuración de la conexión a la base de datos
$servername = "localhost"; // Cambia si es necesario
$username = "root"; // Tu usuario de MySQL
$password = ""; // Tu contraseña de MySQL
$dbname = "capadoccia"; // Nombre de tu base de datos

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Verificar si el formulario fue enviado
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Recoger datos del formulario
    $email = $_POST['email'];       // Campo Correo
    $password = $_POST['password']; // Campo Contraseña

    // Consulta SQL para validar el login
    $sql = "SELECT * FROM usuarios WHERE correo = ? AND contrasena = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $email, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    // Si el usuario existe, se redirige a una página (por ejemplo, dashboard)
    if ($result->num_rows > 0) {
        echo "<script>alert('Login exitoso'); window.location.href = 'dashboard.html';</script>";
    } else {
        echo "<script>alert('Credenciales incorrectas'); window.location.href = 'login.html';</script>";
    }

    $stmt->close();
}
$conn->close();
?>