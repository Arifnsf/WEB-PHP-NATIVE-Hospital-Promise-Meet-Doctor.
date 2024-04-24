<?php
include 'koneksidatabase.php';

// Ambil data dari database
$query = "SELECT * FROM tb_tambahjanji";
$result = $conn->query($query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pasien</title>
    <!-- Tautan ke Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h2>Data Pasien</h2>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link btn btn-success" href="index.php">Logout</a>
                    </li>
                </ul>
            </div>
        </nav>

        <table class="table">
            <thead>
                <tr>
                    <th>Nama Lengkap</th>
                    <th>Alamat</th>
                    <th>Tanggal</th>
                    <th>Department</th>
                    <th>Nomor Telepon</th>
                    <th>Pesan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row['nama_lengkap'] . "</td>";
                    echo "<td>" . $row['alamat'] . "</td>";
                    echo "<td>" . $row['tanggal'] . "</td>";
                    echo "<td>" . $row['department'] . "</td>";
                    echo "<td>" . $row['nomor_telp'] . "</td>";
                    echo "<td>" . $row['pesan'] . "</td>";
                    echo "<td>
                             <a href='edit_janji.php?id=" . $row['id'] . "' class='btn btn-warning btn-sm'>Edit</a>
                             <a href='hapus_janji.php?id=" . $row['id'] . "' class='btn btn-danger btn-sm'>Hapus</a>
                         </td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>


    <!-- Tautan ke Bootstrap JS dan Popper.js (Diperlukan untuk beberapa fitur Bootstrap) -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>

</html>