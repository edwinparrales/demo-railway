<?php

$host = $_ENV['MYSQLHOST'];
$userName = $_ENV['MYSQLUSER'];
$password = $_ENV['MYSQLPASSWORD'];
$dbName = $_ENV['MYSQLDATABASE'];
$port = $_ENV['MYSQLPORT'];





$conn = new mysqli($host, $userName, $password, $dbName, $port);
if ($conn->connect_error) {
    echo "Connection failed: " . $conn->connect_error;
}

$result = mysqli_query($conn,"Select * from categorias");

print_r($result);