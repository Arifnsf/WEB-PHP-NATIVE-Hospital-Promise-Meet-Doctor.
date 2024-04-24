<?php
// Menggunakan pernyataan 'include' untuk menyertakan file 'koneksidatabase.php'
include "koneksidatabase.php";
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Set karakter set UTF-8 untuk mendukung karakter internasional -->
  <meta charset="UTF-8">
  <!-- Menyesuaikan tampilan halaman sesuai dengan lebar perangkat -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Menentukan versi Internet Explorer yang kompatibel -->
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <!-- Judul halaman web -->
  <title>One Health - Medical Center HTML5 Template</title>

  <!-- Menambahkan gaya ikon menggunakan file maicons.css -->
  <link rel="stylesheet" href="../assets/css/maicons.css">

  <!-- Menambahkan gaya dasar dari Bootstrap CSS framework -->
  <link rel="stylesheet" href="../assets/css/bootstrap.css">

  <!-- Menambahkan gaya dari Owl Carousel, digunakan mungkin untuk galeri gambar atau elemen yang bisa digulir -->
  <link rel="stylesheet" href="../assets/vendor/owl-carousel/css/owl.carousel.css">

  <!-- Menambahkan animasi menggunakan file animate.css -->
  <link rel="stylesheet" href="../assets/vendor/animate/animate.css">

  <!-- Menambahkan gaya templat dari theme.css -->
  <link rel="stylesheet" href="../assets/css/theme.css">
</head>

<body>


  <!-- Tombol "Back to Top" untuk kembali ke bagian atas halaman -->
  <div class="back-to-top"></div>

  <!-- Bagian Header dari halaman -->
  <header>
    <!-- Bagian Topbar untuk informasi kontak dan email -->
    <div class="topbar">
      <!-- Kontainer untuk menyusun elemen-elemen dalam baris -->
      <div class="container">
        <!-- Baris untuk menata elemen secara horizontal -->
        <div class="row">
          <!-- Kolom pada layar kecil (sm) dan lebih besar (sm), teks berukuran kecil (text-sm) -->
          <div class="col-sm-8 text-sm">
            <!-- Informasi situs, berisi nomor telepon dan email -->
            <div class="site-info">
              <!-- Tautan ke nomor telepon dengan ikon panggilan -->
              <a href="#"><span class="mai-call text-primary"></span> 087850805285</a>
              <!-- Pemisah tautan dengan garis vertikal -->
              <span class="divider">|</span>
              <!-- Tautan ke alamat email dengan ikon email -->
              <a href="#"><span class="mai-mail text-primary"></span> ARSHospital@gmail.com</a>
            </div>
          </div>
        </div> <!-- Penutup tag untuk baris -->
      </div> <!-- Penutup tag untuk kontainer -->
    </div> <!-- Penutup tag untuk topbar -->
  </header> <!-- Penutup tag untuk header -->


  <!-- Navigasi (Navbar) dengan tampilan responsif -->
  <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
    <!-- Kontainer untuk menata elemen navbar -->
    <div class="container">
      <!-- Merek atau nama situs sebagai navbar brand -->
      <a class="navbar-brand" href="#"><span class="text-primary">ARS</span>-Hospital</a>
      <!-- Tombol toggler untuk perangkat seluler dengan kelas CSS shadow-sm -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport" aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
        <!-- Ikon toggler (ikon hamburger) -->
        <span class="navbar-toggler-icon"></span>
      </button>


      <!-- Bagian yang akan di-collapse pada navbar saat layar kecil -->
      <div class="collapse navbar-collapse" id="navbarSupport">
        <!-- Daftar navigasi yang akan ditampilkan secara horizontal, dengan jarak ke kanan menggunakan ml-auto -->
        <ul class="navbar-nav ml-auto">
          <!-- Setiap elemen daftar navigasi memiliki kelas "nav-item" -->
          <li class="nav-item">
            <!-- Tautan ke halaman beranda -->
            <a class="nav-link" href="berandaakhir.php">Home</a>
          </li>
          <li class="nav-item">
            <!-- Tautan ke halaman tentang kami -->
            <a class="nav-link" href="aboutakhir.php">Tentang Kami</a>
          </li>
          <li class="nav-item">
            <!-- Tautan ke halaman dokter -->
            <a class="nav-link" href="doctors.php">Dokter</a>
          </li>
          <!-- Elemen daftar yang ditandai sebagai aktif (active) -->
          <li class="nav-item active">
            <!-- Tautan ke halaman jadwal temu -->
            <a class="nav-link" href="blog.php">Jadwal Temu</a>
          </li>
          <li class="nav-item">
            <!-- Tautan ke halaman kontak -->
            <a class="nav-link" href="contactakhir.php">Kontak</a>
          </li>
          <li class="nav-item">
            <!-- Tombol logout dengan kelas "btn btn-primary" -->
            <a class="btn btn-primary ml-lg-3" href="index.php">Logout</a>
          </li>
        </ul>
      </div> <!-- Penutup tag untuk .navbar-collapse -->

      <!-- Penutup tag untuk kontainer navbar -->
    </div>
  </nav> <!-- Penutup tag untuk .navbar -->
  </header> <!-- Penutup tag untuk header -->


  <!-- Bagian untuk banner halaman dengan lapisan gelap, gambar latar belakang, dan efek transparan -->
  <div class="page-banner overlay-dark bg-image" style="background-image: url(../assets/img/bg_image_1.jpg);">
    <!-- Bagian konten banner -->
    <div class="banner-section">
      <!-- Kontainer untuk mengatur posisi teks dan navigasi Breadcrumb -->
      <div class="container text-center wow fadeInUp">
        <!-- Navigasi Breadcrumb dengan latar belakang transparan -->
        <nav aria-label="Breadcrumb">
          <!-- Daftar breadcrumb dengan latar belakang transparan dan posisi di tengah -->
          <ol class="breadcrumb breadcrumb-dark bg-transparent justify-content-center py-0 mb-2">
            <!-- Setiap elemen breadcrumb dengan tautan ke halaman tertentu -->
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <!-- Elemen breadcrumb aktif yang menunjukkan halaman saat ini -->
            <li class="breadcrumb-item active" aria-current="page">Jadwal</li>
          </ol>
        </nav>
        <!-- Judul halaman dengan bobot huruf normal -->
        <h1 class="font-weight-normal">Jadwal Temu</h1>
      </div> <!-- Penutup tag untuk kontainer teks dan breadcrumb -->
    </div> <!-- Penutup tag untuk bagian banner -->
  </div> <!-- Penutup tag untuk elemen page-banner -->


  <?php
  $sql = "SELECT nama_lengkap, alamat, tanggal, department, nomor_telp, pesan, gambar FROM tb_tambahjanji";
  $result = $conn->query($sql);
  ?>

  <div class="page-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <div class="row">

            <?php
            // Output data dari setiap baris
            if ($result->num_rows > 0) {
              while ($row = $result->fetch_assoc()) {
                echo '<div class="col-sm-4 py-3">';
                echo '<div class="card-blog">';
                echo '<div class="header">';
                echo '<div class="post-category">';
                echo '<a href="#">' . $row["nama_lengkap"] . '</a>';
                echo '</div>';
                echo '<a href="" class="post-thumb">';
                // Hapus gambar, gunakan data dari database jika ada
                echo "<td class='container'><img class='gambar' src='data:image/jpeg;base64," . base64_encode($row['gambar']) . "' alt='image'></td>";
                echo '<img src="' . $row["alamat"] . '" alt="">';
                echo '</a>';
                echo '</div>';
                echo '<div class="body">';
                echo '<h5 class="post-title"><a href="">' . $row["tanggal"] . '</a></h5>';
                echo '<div class="site-info">';
                echo '<div class="avatar mr-2">';
                echo '<div class="avatar-img">';
                // Hapus gambar, gunakan data dari database jika ada
                echo "<td class='container'><img class='gambar' src='data:image/jpeg;base64," . base64_encode($row['gambar']) . "' alt='image'></td>";
                echo '<img src="' . $row["department"] . '" alt="">';
                echo '</div>';
                echo '<span>' . $row["nomor_telp"] . '</span>';
                echo '</div>';
                echo '<span class="mai-time"></span> ' . $row["pesan"];
                echo '</div>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
              }
            } else {
              echo "Tidak ada data.";
            }
            ?>

          </div> <!-- .row -->
        </div>
      </div> <!-- .row -->
    </div> <!-- .container -->
  </div> <!-- .page-section -->

  <?php
  // Tutup koneksi
  $conn->close();
  ?>


  </div> <!-- Penutup tag untuk elemen dengan kelas 'row' -->
  <!-- Penutup tag untuk elemen dengan kelas 'container' -->
  </div>
  <!-- Penutup tag untuk elemen dengan kelas 'page-section' -->
  </div>
  <!-- Penutup tag untuk elemen dengan kelas 'row' -->
  </div>
  <!-- Penutup tag untuk elemen dengan kelas 'container' -->
  </div>
  <!-- Penutup tag untuk elemen dengan kelas 'banner-home' -->

  <!-- Bagian footer halaman -->
  <footer class="page-footer">
    <!-- Kontainer untuk mengatur layout dan tata letak footer -->
    <div class="container">
      <!-- Baris (row) footer dengan padding vertikal sebanyak 3 unit -->
      <div class="row px-md-3">
        <!-- Kolom di footer, lebar pada tampilan kecil (sm) 6 dan lebar pada tampilan besar (lg) 3 -->
        <div class="col-sm-6 col-lg-3 py-3">
          <!-- Judul atau heading kolom -->
          <h5>Company</h5>
          <!-- Daftar menu footer dengan tautan ke halaman terkait -->
          <ul class="footer-menu">
            <li><a href="about.php">About Us</a></li>
            <li><a>Career</a></li>
            <li><a>Appointment</a></li>
            <li><a>Protection</a></li>
          </ul>
        </div>
        <!-- Kolom kedua di footer, lebar pada tampilan kecil (sm) 6 dan lebar pada tampilan besar (lg) 3 -->
        <div class="col-sm-6 col-lg-3 py-3">
          <!-- Judul atau heading kolom -->
          <h5>More</h5>
          <!-- Daftar menu footer dengan tautan ke halaman terkait -->
          <ul class="footer-menu">
            <li><a>Terms & Condition</a></li>
            <li><a>Privacy</a></li>
            <li><a>Advertise</a></li>
            <li><a href="login.php">Join as Doctors</a></li>
          </ul>
        </div>


        <div class="col-sm-6 col-lg-3 py-3">
          <!-- Judul atau heading kolom kontak -->
          <h5>Contact</h5>
          <!-- Alamat dan informasi kontak -->
          <p class="footer-link">Antapani, Jl. Terusan Sekolah No.1-2, Cicaheum, Kec. Kiaracondong, Kota Bandung, Jawa Barat 40282</p>
          <!-- Informasi nomor telepon dan alamat email -->
          <a class="footer-link">087850805285 ARSHospital@gmail.com</a>
        </div>
        <!-- Penutup tag untuk elemen dengan kelas 'row' -->
      </div>
      <!-- Penutup tag untuk elemen dengan kelas 'container' -->
  </footer>


  <script src="../assets/js/jquery-3.5.1.min.js"></script>

  <script src="../assets/js/bootstrap.bundle.min.js"></script>

  <script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

  <script src="../assets/vendor/wow/wow.min.js"></script>

  <script src="../assets/js/theme.js"></script>

</body>

</html>