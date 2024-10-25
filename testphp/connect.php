<?php
$server = "localhost";
$database = "db_kieu_thu_hong";
$username = "root";
$password = "";
$conn = new mysqli($server, $username, $password, $database);

if ($conn->connect_error) {
    die('Connect failed: ' . $conn->connect_error);
}
?>