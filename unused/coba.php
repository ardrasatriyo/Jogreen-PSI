<?php
// Koneksi ke database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "psi_db";

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Query SQL untuk mengambil data timbulan_sampah_tahunan dan kabupaten
$sql = "SELECT SUM(kertas_karton) as total_kertas_karton FROM komposisi_jenis_sampah";

$result = $conn->query($sql);

$data = array();
if ($result->num_rows > 0) {
    // Mengumpulkan hasil query ke dalam array asosiatif
    while($row = $result->fetch_assoc()) {
        $data[] = $row;
        echo  $row["total_kertas_karton"];
        
        
    }
}

// Menutup koneksi ke database
$conn->close();


?>