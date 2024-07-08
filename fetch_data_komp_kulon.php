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
    $sql = "SELECT SUM(sisa_makanan) as total_sisa_makanan,
                   SUM(kayu_ranting) as total_kayu_ranting,
                   SUM(kertas_karton) as total_kertas_karton,
                   SUM(plastik) as total_plastik,
                   SUM(logam) as total_logam,
                   SUM(kain) as total_kain,
                   SUM(karet_kulit) as total_karet_kulit,
                   SUM(kaca) as total_kaca,
                   SUM(lainnya) as total_lainnya
            FROM komposisi_jenis_sampah_kulonprogo";
} else {
    $sql = "SELECT tahun,
                   SUM(sisa_makanan) as total_sisa_makanan,
                   SUM(kayu_ranting) as total_kayu_ranting,
                   SUM(kertas_karton) as total_kertas_karton,
                   SUM(plastik) as total_plastik,
                   SUM(logam) as total_logam,
                   SUM(kain) as total_kain,
                   SUM(karet_kulit) as total_karet_kulit,
                   SUM(kaca) as total_kaca,
                   SUM(lainnya) as total_lainnya
            FROM komposisi_jenis_sampah_kulonprogo
            WHERE tahun = '$tahun'
            GROUP BY tahun";
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
