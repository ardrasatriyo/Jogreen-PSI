<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Report History</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .table th, .table td {
            vertical-align: middle;
        }
        .table-img {
            max-width: 100px;
            height: auto;
        }
        .search-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }
        .search-container form {
            display: flex;
            align-items: center;
        }
        .search-container form .input-group {
            margin-right: 10px;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <h2 class="text-center mb-4">User Report History</h2>
                <div class="search-container">
                    <form method="GET" action="">
                        <div class="input-group">
                            <input type="text" name="search" class="form-control" placeholder="Search by name" value="<?php echo isset($_GET['search']) ? htmlspecialchars($_GET['search']) : ''; ?>">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="submit">Search</button>
                            </div>
                        </div>
                        <a href="?" class="btn btn-secondary">Reset</a>
                    </form>
                </div>
                <table class="table table-striped table-bordered">
                    <thead class="thead-dark">
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Image</th>
                            <th>Report Date</th>
                            <th>Place</th>
                            <th>Address</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        // Koneksi ke database
                        $conn = new mysqli("localhost", "root", "", "psi_db"); // Sesuaikan dengan konfigurasi Anda
                        if ($conn->connect_error) {
                            die("Connection failed: " . $conn->connect_error);
                        }

                        $search = isset($_GET['search']) ? mysqli_real_escape_string($conn, $_GET['search']) : '';

                        $sql = "SELECT * FROM users_new";
                        if ($search) {
                            $sql .= " WHERE name LIKE '%$search%'";
                        }

                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                            $count = 1;
                            while($row = $result->fetch_assoc()) {
                                echo "<tr>";
                                echo "<td>" . $count . "</td>";
                                echo "<td>" . htmlspecialchars($row["name"]) . "</td>";
                                echo "<td><img src='uploads/" . htmlspecialchars($row["gambar"]) . "' class='table-img'></td>";
                                echo "<td>" . htmlspecialchars($row["tanggal_pelaporan"]) . "</td>";
                                echo "<td>" . htmlspecialchars($row["tempat"]) . "</td>";
                                echo "<td>" . htmlspecialchars($row["alamat"]) . "</td>";
                                // Status
                                echo "<td>";
                                if ($row["status"]) {
                                    echo "Sudah ditangani";
                                } else {
                                    echo "Belum ditangani";
                                }
                                echo "</td>";
                                // Action untuk mengubah status
                                echo "<td>";
                                if (!$row["status"]) {
                                    echo "<button class='btn btn-sm btn-success' onclick='updateStatus(" . $row['id'] . ")'>Tandai Sudah Ditangani</button>";
                                }
                                echo "</td>";
                                echo "</tr>";
                                $count++;
                            }
                        } else {
                            echo "<tr><td colspan='8' class='text-center'>Tidak ada data pelaporan.</td></tr>";
                        }

                        $conn->close();
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script>
        function updateStatus(id) {
            // Kirim request AJAX ke server untuk mengupdate status
            var xhr = new XMLHttpRequest();
            xhr.open("GET", "update_status.php?id=" + id, true);
            xhr.onreadystatechange = function() {
                if (xhr.readyState === 4 && xhr.status === 200) {
                    // Response dari server
                    var response = xhr.responseText;
                    if (response.trim() === 'success') {
                        // Update tampilan tanpa refresh halaman
                        var statusCell = document.querySelector("tr[data-id='" + id + "'] td.status");
                        if (statusCell) {
                            statusCell.textContent = "Sudah ditangani";
                        }
                    } else {
                        alert("Gagal memperbarui status.");
                    }
                }
            };
            xhr.send();
        }
    </script>
</body>
</html>