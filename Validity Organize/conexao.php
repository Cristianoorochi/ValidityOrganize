<?php
$servername = "localhost";
$username = "id1460089_cris_produtos";
$password = "133113";
$dbname = "id1460089_validity";

$conn = new mysqli($servername, $username, $password,$dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
?>