<?php
// Mulai sesi PHP
session_start();

// Sertakan file koneksi database
include "koneksidatabase.php";

// Ambil nilai dari formulir login
$user = mysqli_real_escape_string($conn, $_POST['username']);
$pass = md5(mysqli_real_escape_string($conn, $_POST['password']));

// Buat query SQL untuk memeriksa keberadaan pengguna dengan username dan password yang sesuai
$query = "SELECT * FROM tb_regist WHERE username='$user' AND password='$pass' LIMIT 1";

// Eksekusi query menggunakan koneksi ke database
$eksekusi = mysqli_query($conn, $query);

// Ambil hasil query dalam bentuk array asosiatif dan menyimpannya dalam variabel $ada
$ada = mysqli_fetch_assoc($eksekusi);

// Periksa apakah pengguna ditemukan
if ($ada) {
  // Buat session login dan username berdasarkan level pengguna
  $_SESSION['username'] = $user;
  $_SESSION['role'] = $ada['role'];

  // Alihkan ke halaman dashboard sesuai dengan level pengguna
  if ($ada['role'] == "admin") {
    echo "<script> 
                // Tampilkan pesan selamat datang untuk admin
                alert('Halo admin, anda akan diarahkan ke halaman utama');
                // Alihkan ke halaman admin
                window.location='crudadmin.php';
              </script>";
  } else if ($ada['role'] == "public") {
    echo "<script> 
                // Tampilkan pesan untuk pengguna biasa
                alert('Anda akan diarahkan ke halaman utama');
                // Alihkan ke halaman utama pengguna biasa
                window.location='berandaakhir.php';
              </script>";
  }
} else {
  // Jika username atau password tidak cocok, alihkan kembali ke halaman login
  echo "<script> 
            // Tampilkan pesan kesalahan
            alert('Username dan Password salah, Coba lagi ya :)');
            // Alihkan ke halaman login
            window.location='login.php';
          </script>";
}
