<?php
$servername = "localhost";
$username = "glamour";
$password = "juanano";
$dbname = "glamour_glow";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

echo "Conectado a la base de datos";
?>