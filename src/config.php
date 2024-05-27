<?php
print_r($_ENV);
$host = $_ENV['MYSQLHOST'];
$userName = $_ENV['MYSQLUSER'];
$password = $_ENV['MYSQLPASSWORD'];
$dbName = $_ENV['MYSQL_DATABASE'];
$port = $_ENV['MYSQLPORT'];



$conn = new mysqli($host, $userName, $password, $dbName, $port);
if ($conn->connect_error) {
    echo "Connection failed: " . $conn->connect_error;
}