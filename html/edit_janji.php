<?php
include 'koneksidatabase.php';

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    $id = $_GET['id'];

    $query = "SELECT * FROM tb_tambahjanji WHERE id='$id'";
    $result = $conn->query($query);
    $row = $result->fetch_assoc();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id           = $_POST['id'];
    $nama_lengkap = $_POST['nama_lengkap'];
    $alamat       = $_POST['alamat'];
    $tanggal      = $_POST['tanggal'];
    $department   = $_POST['department'];
    $nomor_telp   = $_POST['nomor_telp'];
    $pesan        = $_POST['pesan'];

    $query = "UPDATE tb_tambahjanji SET 
              nama_lengkap='$nama_lengkap', 
              alamat='$alamat', 
              tanggal='$tanggal', 
              department='$department', 
              nomor_telp='$nomor_telp', 
              pesan='$pesan' 
              WHERE id='$id'";

    if ($conn->query($query) === TRUE) {
        header('Location: crudadmin.php');
        exit();
    } else {
        echo "Error: " . $query . "<br>" . $koneksi->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data</title>
    <!-- Tautan ke Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h2>Edit Data</h2>
        <form method="POST" action="" class="mt-3">
            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">

            <div class="form-group">
                <label for="nama_lengkap">Nama Lengkap:</label>
                <input type="text" name="nama_lengkap" value="<?php echo $row['nama_lengkap']; ?>" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="alamat">Alamat:</label>
                <input type="text" name="alamat" value="<?php echo $row['alamat']; ?>" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="tanggal">Tanggal:</label>
                <input type="date" name="tanggal" value="<?php echo $row['tanggal']; ?>" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="department">Department:</label>
                <select name="department" class="form-control" required>
                    <option value="Kesehatan Umum" <?php echo ($row['department'] == 'Kesehatan Umum') ? 'selected' : ''; ?>>Kesehatan Umum</option>
                    <option value="Kebidanan & Kandungan" <?php echo ($row['department'] == 'Kebidanan & Kandungan') ? 'selected' : ''; ?>>Kebidanan & Kandungan</option>
                    <option value="Poli Anak" <?php echo ($row['department'] == 'Poli Anak') ? 'selected' : ''; ?>>Poli Anak</option>
                    <option value="Spesialis Bedah" <?php echo ($row['department'] == 'Spesialis Bedah') ? 'selected' : ''; ?>>Spesialis Bedah</option>
                    <option value="Spesialis Gizi" <?php echo ($row['department'] == 'Spesialis Gizi') ? 'selected' : ''; ?>>Spesialis Gizi</option>
                </select>
            </div>


            <div class="form-group">
                <label for="nomor_telp">Nomor Telepon:</label>
                <input type="text" name="nomor_telp" value="<?php echo $row['nomor_telp']; ?>" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="pesan">Pesan:</label>
                <textarea name="pesan" class="form-control" required><?php echo $row['pesan']; ?></textarea>
            </div>

            <input type="submit" value="Simpan" class="btn btn-primary">
        </form>
    </div>
    <!-- Tautan ke Bootstrap JS dan Popper.js (Diperlukan untuk beberapa fitur Bootstrap) -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>

</html>