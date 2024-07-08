<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Memeriksa apakah file telah diunggah dengan benar
    if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
        // Mengambil data dari form
        $name = isset($_POST['name']) ? $_POST['name'] : '';
        $tanggalPelaporan = isset($_POST['tanggalPelaporan']) ? $_POST['tanggalPelaporan'] : '';
        $tempat = isset($_POST['tempat']) ? $_POST['tempat'] : '';
        $alamat = isset($_POST['alamat']) ? $_POST['alamat'] : '';
        $image = $_FILES['image'];

        // Pastikan variabel-variabel ini diinisialisasi dengan nilai yang benar
        $uploadDir = 'uploads/';
        $uploadFile = $uploadDir . basename($image['name']);

        // Buat direktori jika belum ada
        if (!file_exists($uploadDir)) {
            mkdir($uploadDir, 0777, true);
        }

        // Pindahkan file yang diunggah ke direktori yang ditentukan
        if (move_uploaded_file($image['tmp_name'], $uploadFile)) {
            // Menyimpan data ke database
            $servername = "localhost";
            $username = "root"; // Ganti dengan username MySQL Anda
            $password = ""; // Ganti dengan password MySQL Anda
            $dbname = "psi_db"; // Nama database yang telah Anda buat

            // Membuat koneksi
            $conn = new mysqli($servername, $username, $password, $dbname);

            // Memeriksa koneksi
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            // Menyimpan data ke database
            $sql = "INSERT INTO users_new (name, gambar, tanggal_pelaporan, tempat, alamat) VALUES ('$name', '" . basename($image['name']) . "', '$tanggalPelaporan', '$tempat', '$alamat')";

            if ($conn->query($sql) === TRUE) {
                echo "New record created successfully";
                // Redirect ke halaman history
                exit();
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }

            $conn->close();

            // Output informasi yang diunggah
            echo "<h2>Your Input:</h2>";
            echo "Name: " . htmlspecialchars($name) . "<br>";
            echo "Tanggal Pelaporan: " . htmlspecialchars($tanggalPelaporan) . "<br>";
            echo "Tempat: " . htmlspecialchars($tempat) . "<br>";
            echo "Alamat: " . htmlspecialchars($alamat) . "<br>";
            echo "Gambar: <img src='" . htmlspecialchars($uploadFile) . "' alt='uploaded image' width='100'><br>";
        } else {
            echo "File upload error: " . $_FILES['image']['error'];
        }
    } else {
        echo "File upload error or no file uploaded.";
    }
} else {
    echo "Invalid request method.";
}
?>
