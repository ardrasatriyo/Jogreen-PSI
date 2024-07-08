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

// Mendapatkan nilai kabupaten yang dipilih dari frontend
$kabupaten = isset($_GET['kabupaten']) ? $_GET['kabupaten'] : 'all';

// SQL untuk mendapatkan data untuk kabupaten tertentu atau semua kabupaten
if ($kabupaten === 'all') {
    $sql = "SELECT kabupaten, tahun, SUM(timbulan_sampah_tahunan) as total_sampah 
            FROM timbulan_sampah 
            GROUP BY kabupaten, tahun";
} else {
    $sql = "SELECT kabupaten, tahun, SUM(timbulan_sampah_tahunan) as total_sampah 
            FROM timbulan_sampah 
            WHERE kabupaten = '$kabupaten'
            GROUP BY kabupaten, tahun";
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
