<?php
// Menggunakan pernyataan 'include' untuk menyisipkan file koneksi database
include "koneksidatabase.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Pengaturan karakter dan viewport halaman web -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Informasi kompatibilitas dengan Internet Explorer -->
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <!-- Judul halaman web -->
  <title>ARS Hospital</title>

  <!-- Penyisipan file-file CSS eksternal -->
  <link rel="stylesheet" href="../assets/css/maicons.css">
  <link rel="stylesheet" href="../assets/css/bootstrap.css">
  <link rel="stylesheet" href="../assets/vendor/owl-carousel/css/owl.carousel.css">
  <link rel="stylesheet" href="../assets/vendor/animate/animate.css">
  <link rel="stylesheet" href="../assets/css/theme.css">
</head>

<body>

  <!-- Tombol kembali ke atas -->
  <div class="back-to-top"></div>

  <!-- Bagian header halaman -->
  <header>
    <!-- Bagian atas header -->
    <div class="topbar">
      <!-- Kontainer untuk informasi kontak -->
      <div class="container">
        <div class="row">
          <!-- Kolom untuk menampilkan informasi kontak -->
          <div class="col-sm-8 text-sm">
            <div class="site-info">
              <!-- Link dan ikon untuk nomor telepon -->
              <a href="#"><span class="mai-call text-primary"></span> 087850805285</a>
              <span class="divider">|</span>
              <!-- Link dan ikon untuk alamat email -->
              <a href="https://mail.google.com/mail/u/0/"><span class="mai-mail text-primary"></span>arshospital@gmail.com</a>
            </div>
          </div>
        </div> <!-- .row -->
      </div> <!-- .container -->
    </div> <!-- .topbar -->

    <!-- Navigasi utama menggunakan Bootstrap Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
      <!-- Kontainer navigasi -->
      <div class="container">
        <!-- Brand/logo website -->
        <a class="navbar-brand" href="#"><span class="text-primary">ARS</span>-Hospital</a>
        <!-- Tombol toggle untuk tampilan responsif pada layar kecil -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport" aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Daftar menu navigasi -->
        <div class="collapse navbar-collapse" id="navbarSupport">
          <ul class="navbar-nav ml-auto">
            <!-- Setiap item menu navigasi -->
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.php">Tentang Kami</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="dokterawal.php">Dokter</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="blogawal.php">Berita</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.php">Kontak</a>
            </li>
            <li class="nav-item">
              <!-- Tombol untuk menuju halaman login -->
              <a class="btn btn-primary ml-lg-3" href="login.php">Masuk</a>
            </li>
          </ul>
        </div> <!-- .navbar-collapse -->
      </div> <!-- .container -->
    </nav>
  </header>

  <!-- Bagian hero atau header halaman -->
  <div class="page-hero bg-image overlay-dark" style="background-image: url(../assets/img/bg_image_1.jpg);">
    <!-- Bagian hero-section dengan teks dan tombol konsultasi -->
    <div class="hero-section">
      <div class="container text-center wow zoomIn">
        <span class="subhead">Selamat Datang</span>
        <h1 class="display-6">Di Rumah Sakit ARS</h1>
        <a href="login.php" class="btn btn-primary">Konsultasi Sekarang</a>
      </div>
    </div>
  </div>

  <!-- Bagian konten utama halaman -->
  <div class="page-section pb-0">
    <!-- Kontainer untuk konten utama -->
    <div class="container">
      <!-- Baris dengan kolom-kolom yang berisi teks dan gambar -->
      <div class="row align-items-center">
        <!-- Kolom untuk teks dan tombol -->
        <div class="col-lg-6 py-3 wow fadeInUp">
          <h1>Selamat Datang Di Pusat Kesehatan Kami</h1>
          <p class="text-grey mb-4">Rumah Sakit ARS, sejak tahun 2023, menawarkan layanan kesehatan berkualitas dengan pengalaman panjang. Awalnya dengan 30 tempat tidur, kami terus berkembang seiring perkembangan teknologi dan kebutuhan masyarakat. Komitmen pada inovasi, fokus pada pasien, dan pelatihan staf medis adalah inti dari visi kami. Selain perawatan medis, kami berpartisipasi aktif dalam kegiatan sosial dan kemanusiaan, seperti program kesehatan masyarakat dan penyuluhan. Penghargaan dan akreditasi kami menegaskan dedikasi kami pada kualitas dan keamanan pasien. Rumah Sakit ARS berencana terus berkembang, membawa inovasi dalam layanan kesehatan, dan menjadi mitra kesehatan terpercaya dengan perawatan holistik, terjangkau, dan berkelanjutan. Terima kasih telah memilih kami. Hubungi kami untuk informasi lebih lanjut atau membuat janji temu dengan dokter.</p>
          <!-- Tombol untuk menuju halaman login -->
          <a href="login.php" class="btn btn-primary">Masuk</a>
        </div>
        <!-- Kolom untuk menampilkan gambar -->
        <div class="col-lg-6 wow fadeInRight" data-wow-delay="400ms">
          <div class="img-place custom-img-1">
            <!-- Gambar yang ditampilkan -->
            <img src="../assets/img/alpi.png" alt="">
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Bagian footer atau kaki halaman -->
  <footer class="page-footer">
    <!-- Kontainer untuk bagian footer -->
    <div class="container">
      <!-- Baris dengan kolom-kolom yang berisi menu dan informasi kontak -->
      <div class="row px-md-3">
        <!-- Kolom dengan menu perusahaan -->
        <div class="col-sm-6 col-lg-3 py-3">
          <h5>Company</h5>
          <ul class="footer-menu">
            <li><a href="about.php">About Us</a></li>
            <li><a>Career</a></li>
            <li><a>Appointment</a></li>
            <li><a>Protection</a></li>
          </ul>
        </div>
        <!-- Kolom dengan menu tambahan -->
        <div class="col-sm-6 col-lg-3 py-3">
          <h5>More</h5>
          <ul class="footer-menu">
            <li><a>Terms & Condition</a></li>
            <li><a>Privacy</a></li>
            <li><a>Advertise</a></li>
            <li><a href="login.php">Join as Doctors</a></li>
          </ul>
        </div>
        <!-- Kolom dengan informasi kontak -->
        <div class="col-sm-6 col-lg-3 py-3">
          <h5>Contact</h5>
          <!-- Alamat dan nomor kontak -->
          <p class="footer-link">Antapani, Jl. Terusan Sekolah No.1-2, Cicaheum, Kec. Kiaracondong, Kota Bandung, Jawa Barat 40282</p>
          <a class="footer-link">087850805285 arshospital@gmail.com</a>
        </div>
      </div>
      <!-- Garis pemisah -->
      <hr>
    </div>
  </footer>

  <!-- Penyisipan script JavaScript -->
  <script src="../assets/js/jquery-3.5.1.min.js"></script>
  <script src="../assets/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>
  <script src="../assets/vendor/wow/wow.min.js"></script>
  <script src="../assets/js/theme.js"></script>

</body>

</html>