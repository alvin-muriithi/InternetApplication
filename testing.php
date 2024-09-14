<?php
$conn = new mysqli('localhost:3307', 'root', 'Alvinmuriithi!8', 'internetapplication');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>