<?php
$username = "vibhor";
$password = "vibhor123";
$host = "85.10.205.173:3306";
$dbname = "studentrecord";

$conn = new mysqli($host, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}