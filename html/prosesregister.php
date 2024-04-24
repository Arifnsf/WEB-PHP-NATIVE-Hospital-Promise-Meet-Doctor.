<?php
include 'koneksidatabase.php';

$nama_lengkap = $_POST["nama_lengkap"];
$no_telepon = $_POST["no_telepon"];
$alamat = $_POST["alamat"];
$username = $_POST["username"];
$password = md5($_POST['password']);

$query_sql = "INSERT INTO tb_regist (nama_lengkap, no_telepon, alamat, username, password)
            VALUES ('$nama_lengkap', '$no_telepon', '$alamat', '$username', '$password')";

if (mysqli_query($conn, $query_sql)) {
    header("location: login.php");
} else {
    echo "Pendaftaran Gagal:" . mysqli_error($conn);
}
