<?php
// Koneksi ke database
$conn = new mysqli("localhost", "root", "", "psi_db"); // Sesuaikan dengan konfigurasi Anda
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Ambil ID dari parameter GET
$id = isset($_GET['id']) ? intval($_GET['id']) : 0;

// Update status menjadi sudah ditangani
$update_sql = "UPDATE users_new SET status = 1 WHERE id = $id";
if ($conn->query($update_sql) === TRUE) {
    echo "success";
} else {
    echo "error";
}

$conn->close();
?>