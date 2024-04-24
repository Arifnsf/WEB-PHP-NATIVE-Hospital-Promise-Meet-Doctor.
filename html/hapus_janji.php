<?php
// Mengimpor file koneksi database untuk menggunakan $conn
include 'koneksidatabase.php';

// Memeriksa apakah metode request yang digunakan adalah GET
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    // Mengambil nilai 'id' dari parameter URL
    $id = $_GET['id'];

    // Membuat query SQL DELETE untuk menghapus data berdasarkan id
    $query = "DELETE FROM tb_tambahjanji WHERE id='$id'";

    // Menjalankan query dan memeriksa apakah berhasil dijalankan
    if ($conn->query($query) === TRUE) {
        // Jika query berhasil dijalankan, redirect ke halaman crudadmin.php
        header('Location: crudadmin.php');
        exit();
    } else {
        // Jika terjadi error saat menjalankan query, tampilkan pesan error
        echo "Error: " . $query . "<br>" . $koneksi->error;
    }
}
