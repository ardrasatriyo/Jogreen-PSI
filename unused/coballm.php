<?php
require __DIR__ . '/vendor/autoload.php';

use LucianoTonet\GroqPHP\Groq;
use Dotenv\Dotenv;

$dotenv = Dotenv::createUnsafeImmutable(__DIR__);
$dotenv->load();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil nilai input dari form
    $user_question = $_POST['question'];

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
    $sql = "SELECT kabupaten, timbulan_sampah_tahunan FROM timbulan_sampah";

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
        $system_content = "Anda adalah AI yang hanya menjawab pertanyaa seputar sampah , permasalahannya dan solusinya ";
        foreach ($data as $item) {
            $system_content .= "Kabupaten: " . $item['kabupaten'] . ", Timbulan Sampah Tahunan: " . $item['timbulan_sampah_tahunan'] . "; ";
        }

        $groq = new Groq(getenv('GROQ_API_KEY'));

        $chatCompletion = $groq->chat()->completions()->create([
            'model'    => 'llama3-8b-8192',
            'messages' => [
                [
                    'role'    => 'system',
                    'content' => $system_content
                ],
                [
                    'role'    => 'user',
                    'content' => $user_question
                ]
            ]
        ]);

        $output = $chatCompletion['choices'][0]['message']['content'];
        
        // Tampilkan output di halaman web
        echo "<h2>Output dari LLM</h2>";
        echo "<p>$output</p>";
    } else {
        echo "<h2>Output dari LLM</h2>";
        echo "<p>Data tidak ditemukan.</p>";
    }
}
?>
