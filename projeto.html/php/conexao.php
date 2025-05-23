<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gameverse"; // Altere para o nome do seu banco

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}
?>