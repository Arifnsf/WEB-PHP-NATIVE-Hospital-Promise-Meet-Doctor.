<?php
$host = "localhost"; // Ganti sesuai dengan host Anda
$user = "root"; // Ganti dengan username MySQL Anda
$password = ""; // Ganti dengan password MySQL Anda
$database = "db_uasweb"; // Ganti dengan nama database Anda

// Membuat koneksi baru menggunakan objek mysqli
$conn = new mysqli($host, $user, $password, $database);

// Memeriksa apakah koneksi berhasil dilakukan
if ($conn->connect_error) {
    die("Koneksi Gagal: " . $koneksi->connect_error); // Menampilkan pesan error jika koneksi gagal
}
