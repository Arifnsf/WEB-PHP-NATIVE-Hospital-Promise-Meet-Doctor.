<?php
// Memulai sesi PHP
session_start();

// Menghapus semua data yang terkait dengan sesi saat ini
session_unset();

// Menghancurkan (menutup) sesi saat ini
session_destroy();

// Mengarahkan pengguna kembali ke halaman utama (index.php) setelah sesi dihapus
header("Location: index.php");

// Keluar dari skrip PHP untuk memastikan tidak ada kode tambahan yang dijalankan setelah pengalihan header
exit();
