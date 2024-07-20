<?php
$server = "127.0.0.1";
$password = "";
$user = "root";
$database = "project";

$conn = new mysqli($server, $user, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>