<?php
$servername = "localhost";
$username = "root"; // Change this if necessary
$password = "";
$database = "agro_marketplace"; // Use your actual database name

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
