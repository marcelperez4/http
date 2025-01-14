<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$servername = "localhost";
$username = "admin";
$password = "12345";
$database = "estadistics";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Error en connectar a MySQL: " . $conn->connect_error);
    exit();
}

$ip = $_SERVER['REMOTE_ADDR'];
$sql = "INSERT INTO registre(ip) VALUES ('$ip')";
$conn->query($sql);

$resultat = $conn->query("SELECT COUNT(*) FROM registre");
$row = mysqli_fetch_array($resultat);

echo $row[0];

$conn->close();
?>
