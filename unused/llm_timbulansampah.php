<?php
use LucianoTonet\GroqPHP\Groq;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil nilai input dari form
    $kabupaten = $_POST['kabupaten'];

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
    $sql = "SELECT kabupaten, timbulan_sampah_tahunan FROM timbulan_sampah ";

    $result = $conn->query($sql);

    $data = array();
    if ($result->num_rows > 0) {
        // Mengumpulkan hasil query ke dalam array asosiatif
        while($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
    }

    // Menutup koneksi ke database
    $conn->close();

    // Proses data lebih lanjut, misalnya untuk digunakan dalam GroqPHP
    if (!empty($data)) {
        foreach ($data as $item) {
            $itemkabupaten = $item['kabupaten'];
            $timbulan_sampah_tahunan = $item['timbulan_sampah_tahunan'];
        }
        
        $groq = new Groq(getenv('GROQ_API_KEY'));
        
        $chatCompletion = $groq->chat()->completions()->create([
          'model'    => 'llama3-8b-8192',
          'messages' => [
            [
              'role'    => 'system',
              'content' => ''
            ],
            [
                'role'    => 'user',
                'content' => ''
            ]
          ]
        ]);
        
        echo $chatCompletion['choices'][0]['message']['content'];
       

        // Contoh sederhana tanpa GroqPHP, hanya menampilkan kembali data dari database
        $output = "Data untuk kabupaten $kabupaten:<br>";
        

        // Tampilkan output di halaman web
        echo "<h2>Output dari LLM</h2>";
        echo "<p>$output</p>";
    } else {
        echo "<h2>Output dari LLM</h2>";
        echo "<p>Data untuk kabupaten $kabupaten tidak ditemukan.</p>";
    }
}
?>
