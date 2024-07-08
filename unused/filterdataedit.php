<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "psi_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

$kabupaten = isset($_GET['kabupaten']) ? $_GET['kabupaten'] : 'all';
$tahun = isset($_GET['tahun']) ? $_GET['tahun'] : 'all';

$sql = "SELECT kabupaten, tahun, 
        SUM(sisa_makanan) as total_sisa_makanan,
        SUM(kayu_ranting) as total_kayu_ranting,
        SUM(kertas_karton) as total_kertas_karton,
        SUM(plastik) as total_plastik,
        SUM(logam) as total_logam,
        SUM(kain) as total_kain,
        SUM(karet_kulit) as total_karet_kulit,
        SUM(kaca) as total_kaca,
        SUM(lainnya) as total_lainnya    
        FROM komposisi_jenis_sampah 
        WHERE ('$kabupaten' = 'all' OR kabupaten = '$kabupaten')
        AND ('$tahun' = 'all' OR tahun = '$tahun')
        GROUP BY kabupaten, tahun";

$result = $conn->query($sql);

$data = array();
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
}

$conn->close();

echo json_encode($data);
?>
