<?php
// Koneksi ke database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "psi_db";

$conn = new mysqli($servername, $username, $password, $dbname);

// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Menangani parameter tahun jika ada
$tahun = $_GET['tahun'] ?? 'all';
if ($tahun === 'all') {
    $sql = "SELECT kabupaten, SUM(timbulan_sampah_tahunan) as total_sampah FROM timbulan_sampah GROUP BY kabupaten";
} else {
    $sql = "SELECT kabupaten, tahun, SUM(timbulan_sampah_tahunan) as total_sampah FROM timbulan_sampah WHERE tahun = '$tahun' GROUP BY kabupaten, tahun";
}

$result = $conn->query($sql);

$data = array();
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
}

$conn->close();

// Mengirim data sebagai JSON
echo json_encode($data);
?>
