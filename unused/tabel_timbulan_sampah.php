<?php
// Replace with your database connection details
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "psi_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch data from the table
$sql = "SELECT * FROM timbulan_sampah";
$result = $conn->query($sql);

$conn->close();
?>
