<?php
// Conexão usando MySQLi orientado a objetos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "foodsaver";
$conn = new mysqli($servername, $username, $password, $dbname);
$ligacao = mysqli_connect($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully with MySQLi OOP";


echo "<br>";

if (!$ligacao) {
    die("Connection failed: " . mysqli_connect_error());
}
//echo "Connected successfully with MySQLi Procedural";
echo "<br>";

?>