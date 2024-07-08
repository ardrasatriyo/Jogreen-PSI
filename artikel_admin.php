<?php
include 'config.php';

// Handle form submission for adding and editing articles
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $judul = $_POST['judul'];
    $gambar = $_POST['gambar'];
    $link = $_POST['link'];
    $id = isset($_POST['id']) ? $_POST['id'] : 0;

    if ($id > 0) {
        // Update article
        $sql = "UPDATE artikel_sampah SET judul='$judul', gambar='$gambar', link='$link' WHERE id=$id";
    } else {
        // Add new article
        $sql = "INSERT INTO artikel_sampah (judul, gambar, link) VALUES ('$judul', '$gambar', '$link')";
    }

    if ($conn->query($sql) === TRUE) {
        echo "Berhasil Update!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Handle article deletion
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $sql = "DELETE FROM artikel_sampah WHERE id=$id";
    if ($conn->query($sql) === TRUE) {
        echo "Berhasil dihapus!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Fetch all articles
$sql = "SELECT * FROM artikel_sampah";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Halaman Tambah Artikel</title>
    <link rel="stylesheet" href="tampilan.css">
</head>
<body>
    <h1>Tambahkan Artikel</h1>
    <form action="index.php" method="post">
        <input type="hidden" name="id" id="id" value="0">
        <label for="judul">Judul:</label><br>
        <input type="text" id="judul" name="judul"><br>
        <label for="gambar">Link Gambar:</label><br>
        <input type="text" id="gambar" name="gambar"><br>
        <label for="link">Link Website:</label><br>
        <input type="text" id="link" name="link"><br>
        <input type="submit" value="Submit">
    </form>

    <h2>Daftar Artikel</h2>
    <table border="1">
        <tr>
            <th>Judul</th>
            <th>Link Gambar</th>
            <th>Link Website</th>
            <th>Actions</th>
        </tr>
        <?php
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row['judul'] . "</td>";
                echo "<td>" . $row['gambar'] . "</td>";
                echo "<td>" . $row['link'] . "</td>";
                echo "<td>";
                echo "<a href='?edit=" . $row['id'] . "'>Edit</a> | ";
                echo "<a href='?delete=" . $row['id'] . "'>Delete</a>";
                echo "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='4'>No articles found</td></tr>";
        }
        ?>
    </table>

    <?php
    // Populate form with existing data for editing
    if (isset($_GET['edit'])) {
        $id = $_GET['edit'];
        $sql = "SELECT * FROM artikel_sampah WHERE id=$id";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            echo "<script>
                document.getElementById('id').value = '" . $row['id'] . "';
                document.getElementById('judul').value = '" . $row['judul'] . "';
                document.getElementById('gambar').value = '" . $row['gambar'] . "';
                document.getElementById('link').value = '" . $row['link'] . "';
            </script>";
        }
    }
    ?>

</body>
</html>
