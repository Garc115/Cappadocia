<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Cappadocia";
//Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
//Check connection
if ($conn->connect_error) {
  die("Connection failed: ". $conn->connect_error);
}
$sql = "SELECT id, nombre, cantidad FROM material";
$result = $conn->query($sql);
if($result->num_rows>0) {
  echo "<table border=1>";
  echo "<tr>";
  echo "<td>ID</td>";
  echo "<td>Nombre</td>";
  echo "<td>Cantidad</td>";
  echo "</tr>";
  while ($row = $result->fetch_assoc()) {
      echo "<tr>";
      echo "<td>".$row["id"]."</td>";
      echo "<td>".$row["nombre"]."</td>";
      echo "<td>".$row["cantidad"]."</td>";
      echo "</tr>";
  }
  echo "</table>";
}
else {
    echo "0 results";
}
$conn->close();
?>   