<?php
$servername = "localhost";
$username = "root";  // Tumhara MySQL username (default: root)
$password = "";      // Tumhara MySQL password (default: blank)
$dbname = "hello_db"; // Tumhara database name

$conn = new mysqli($servername, $username, $password, $dbname);

// Connection check
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

