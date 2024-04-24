<!-- Dokumen HTML dengan atribut bahasa Inggris -->
<!DOCTYPE html>
<html lang="en">

<!-- Seksi untuk mengatur karakter set dan tampilan perangkat -->

<head>
  <!-- Mendefinisikan karakter set dokumen sebagai UTF-8 -->
  <meta charset="UTF-8">
  <!-- Menyesuaikan tampilan halaman dengan perangkat yang digunakan -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Membuat tag meta untuk kompatibilitas dengan Internet Explorer -->
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <!-- Menentukan judul halaman -->
  <title>ARS Hospital</title>

  <!-- Menambahkan stylesheet eksternal untuk ikon -->
  <link rel="stylesheet" href="../assets/css/maicons.css">

  <!-- Menambahkan stylesheet eksternal untuk komponen Bootstrap -->
  <link rel="stylesheet" href="../assets/css/bootstrap.css">

  <!-- Menambahkan stylesheet eksternal untuk slider (Owl Carousel) -->
  <link rel="stylesheet" href="../assets/vendor/owl-carousel/css/owl.carousel.css">

  <!-- Menambahkan stylesheet eksternal untuk animasi (Animate.css) -->
  <link rel="stylesheet" href="../assets/vendor/animate/animate.css">

  <!-- Menambahkan stylesheet eksternal untuk tata letak dan tema halaman -->
  <link rel="stylesheet" href="../assets/css/theme.css">
</head>

<body>

  <!-- Tombol kembali ke atas -->
  <div class="back-to-top"></div>

  <!-- Bagian header -->
  <header>
    <!-- Bagian topbar (baris paling atas) -->
    <div class="topbar">
      <!-- Container untuk menahan elemen-elemen dalam baris -->
      <div class="container">
        <!-- Baris untuk menyusun elemen-elemen -->
        <div class="row">
          <!-- Kolom lebar-sm-8 (lebar 8 dari 12 kolom pada perangkat kecil ke atas) -->
          <div class="col-sm-8 text-sm">
            <!-- Container untuk informasi situs -->
          </div>
        </div> <!-- Penutup tag untuk elemen div dengan kelas "row" -->
      </div> <!-- Penutup tag untuk elemen div dengan kelas "container" -->
    </div> <!-- Penutup tag untuk elemen div dengan kelas "topbar" -->


    <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
      <div class="container">
        <a class="navbar-brand" href="#"><span class="text-primary">ARS</span>-Hospital</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport" aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupport">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
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
            <li class="nav-item active">
              <a class="nav-link" href="contact.php">Kontak</a>
            </li>
            <li class="nav-item">
              <a class="btn btn-primary ml-lg-3" href="login.php">Masuk</a>
            </li>
          </ul>
        </div> <!-- .navbar-collapse -->
      </div> <!-- .container -->
    </nav>
  </header>

  <div class="page-banner overlay-dark bg-image" style="background-image: url(../assets/img/bg_image_1.jpg);">
    <div class="banner-section">
      <div class="container text-center wow fadeInUp">
        <nav aria-label="Breadcrumb">
          <ol class="breadcrumb breadcrumb-dark bg-transparent justify-content-center py-0 mb-2">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Kontak</li>
          </ol>
        </nav>
        <h1 class="font-weight-normal">Kontak Kami</h1>
      </div> <!-- .container -->
    </div> <!-- .banner-section -->
  </div> <!-- .page-banner -->

  <div class="page-section">
    <div class="container">
      <h1 class="text-center wow fadeInUp">Hubungi Kami</h1>
      <div class="site-info">
        <a><span class="mai-call text-primary"></span> 087850805285 | ARSHospital@gmail.com</a>
        <style>
          .page-section {
            text-align: center;
          }

          .container {
            display: flex;
            flex-direction: column;
          }

          .site-info {
            display: flex;
            flex-direction: column;
          }

          .site-info a {
            margin: 10px;
            text-decoration: none;
            font-size: 18px;
          }
        </style>
      </div>
    </div>
  </div>

  <!-- .banner-home -->

  <footer class="page-footer">
    <div class="container">
      <div class="row px-md-3">
        <div class="col-sm-6 col-lg-3 py-3">
          <h5>Company</h5>
          <ul class="footer-menu">
            <li><a href="about.php">About Us</a></li>
            <li><a>Career</a></li>
            <li><a href="login.php">Appointment</a></li>
            <li><a>Protection</a></li>
          </ul>
        </div>
        <div class="col-sm-6 col-lg-3 py-3">
          <h5>More</h5>
          <ul class="footer-menu">
            <li><a>Terms & Condition</a></li>
            <li><a>Privacy</a></li>
            <li><a>Advertise</a></li>
            <li><a href="login.php">Join as Doctors</a></li>
          </ul>
        </div>

        <div class="col-sm-6 col-lg-3 py-3">
          <h5>Contact</h5>
          <p class="footer-link">Antapani, Jl. Terusan Sekolah No.1-2, Cicaheum, Kec. Kiaracondong, Kota Bandung, Jawa Barat 40282</p>
          <a class="footer-link">087850805285 ARSHospital@gmail.com</a>

        </div>
      </div>
      <hr>
    </div>
  </footer>

  <script src="../assets/js/jquery-3.5.1.min.js"></script>

  <script src="../assets/js/bootstrap.bundle.min.js"></script>

  <script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

  <script src="../assets/vendor/wow/wow.min.js"></script>

  <script src="../assets/js/google-maps.js"></script>

  <script src="../assets/js/theme.js"></script>

</body>

</html>