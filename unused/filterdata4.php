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

// Mendapatkan nilai kabupaten dan tahun dari frontend
$kabupaten = $_GET['kabupaten'] ?? 'all';
$tahun = $_GET['tahun'] ?? 'all';

if ($kabupaten === 'all') {
    $sql = "SELECT 
                   SUM(rumah_tangga) as total_rumah_tangga,
                   SUM(perkantoran) as total_perkantoran,
                   SUM(pasar) as total_pasar,
                   SUM(perniagaan) as total_perniagaan,
                   SUM(fasilitas_publik) as total_fasilitas_publik,
                   SUM(kawasan) as total_kawasan,
                   SUM(lain) as total_lain,
            FROM sumber_sampah";

    if ($tahun !== 'all') {
        $sql .= " WHERE tahun = '$tahun'";
    }
} else {
    $sql = "SELECT 
                   SUM(rumah_tangga) as total_rumah_tangga,
                   SUM(perkantoran) as total_perkantoran,
                   SUM(pasar) as total_pasar,
                   SUM(perniagaan) as total_perniagaan,
                   SUM(fasilitas_publik) as total_fasilitas_publik,
                   SUM(kawasan) as total_kawasan,
                   SUM(lain) as total_lain,
            FROM sumber_sampah
            WHERE kabupaten = '$kabupaten'";

    if ($tahun !== 'all') {
        $sql .= " AND tahun = '$tahun'  ";
    } 
    
}

$result = $conn->query($sql);

$data = array();
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
}

$conn->close();

echo json_encode($data);
?>
