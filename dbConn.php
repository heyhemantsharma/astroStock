<?php
$server = "localhost";
$user = "root";
$pass = "";
$dbName = "astro_stock";

$conn = new mysqli($server, $user, $pass, $dbName);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

global $conn;
?>