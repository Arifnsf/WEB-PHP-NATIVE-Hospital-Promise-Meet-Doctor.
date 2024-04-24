<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Pengaturan karakter set dan viewport untuk responsif -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Menetapkan kompatibilitas IE -->
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <!-- Judul halaman web -->
  <title>ARS Hospital</title>

  <!-- Menghubungkan gaya ikon khusus -->
  <link rel="stylesheet" href="../assets/css/maicons.css">

  <!-- Menghubungkan gaya Bootstrap untuk tata letak dan komponen UI -->
  <link rel="stylesheet" href="../assets/css/bootstrap.css">

  <!-- Menghubungkan gaya untuk plugin Owl Carousel -->
  <link rel="stylesheet" href="../assets/vendor/owl-carousel/css/owl.carousel.css">

  <!-- Menghubungkan gaya animasi untuk efek animasi -->
  <link rel="stylesheet" href="../assets/vendor/animate/animate.css">

  <!-- Menghubungkan gaya tema utama -->
  <link rel="stylesheet" href="../assets/css/theme.css">
</head>

<body>


  <!-- Back to top button -->
  <div class="back-to-top"></div>

  <!-- Bagian Header -->
  <header>
    <!-- Bagian Topbar (bilah atas) -->
    <div class="topbar">
      <!-- Kontainer untuk mengatur elemen dalam baris dan kolom -->
      <div class="container">
        <!-- Baris dalam topbar -->
        <div class="row">
          <!-- Kolom untuk informasi kontak -->
          <div class="col-sm-8 text-sm">
            <!-- Informasi Situs -->
            <div class="site-info">
              <!-- Link untuk nomor telepon -->
              <a href="#"><span class="mai-call text-primary"></span> 087850805285</a>
              <!-- Pemisah antar informasi -->
              <span class="divider">|</span>
              <!-- Link untuk alamat email -->
              <a href="https://mail.google.com/mail/u/0/"><span class="mai-mail text-primary"></span> arshospital@gmail.com</a>
            </div>
          </div>
        </div> <!-- .row -->
      </div> <!-- .container -->
    </div> <!-- .topbar -->
  </header>


  <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
    <!-- Container untuk mengatur elemen dalam navbar -->
    <div class="container">
      <!-- Merek atau logo situs -->
      <a class="navbar-brand" href="#"><span class="text-primary">ARS</span>-Hospital</a>

      <!-- Tombol toggle untuk perangkat kecil -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport" aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>


      <div class="collapse navbar-collapse" id="navbarSupport">
        <!-- Daftar navigasi dengan opsi penyebaran di sebelah kanan (ml-auto) -->
        <ul class="navbar-nav ml-auto">
          <!-- Item navigasi untuk halaman utama -->
          <li class="nav-item">
            <a class="nav-link" href="index.php">Home</a>
          </li>
          <!-- Item navigasi aktif untuk halaman tentang kami -->
          <li class="nav-item active">
            <a class="nav-link" href="about.php">Tentang Kami</a>
          </li>
          <!-- Item navigasi untuk halaman dokter -->
          <li class="nav-item">
            <a class="nav-link" href="dokterawal.php">Dokter</a>
          </li>
          <!-- Item navigasi untuk halaman berita -->
          <li class="nav-item">
            <a class="nav-link" href="blogawal.php">Berita</a>
          </li>
          <!-- Item navigasi untuk halaman kontak -->
          <li class="nav-item">
            <a class="nav-link" href="contact.php">Kontak</a>
          </li>
          <!-- Tombol navigasi untuk masuk ke sistem (login) -->
          <li class="nav-item">
            <a class="btn btn-primary ml-lg-3" href="login.php">Masuk</a>
          </li>
        </ul>
      </div> <!-- .navbar-collapse -->
    </div> <!-- .container -->
  </nav>
  </header>


  <div class="page-banner overlay-dark bg-image" style="background-image: url(../assets/img/bg_image_1.jpg);">
    <!-- Bagian overlay dan gambar latar belakang -->
    <div class="banner-section">
      <!-- Kontainer untuk mengatur elemen di dalam banner -->
      <div class="container text-center wow fadeInUp">
        <!-- Navigasi breadcrumb untuk memberikan jalur navigasi -->
        <nav aria-label="Breadcrumb">
          <!-- Daftar breadcrumb dengan latar belakang gelap dan transparan -->
          <ol class="breadcrumb breadcrumb-dark bg-transparent justify-content-center py-0 mb-2">
            <!-- Item breadcrumb untuk halaman utama -->
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <!-- Item breadcrumb aktif untuk halaman tentang -->
            <li class="breadcrumb-item active" aria-current="page">Tentang</li>
          </ol>
        </nav>
        <!-- Judul halaman -->
        <h1 class="font-weight-normal">Tentang Kami</h1>
      </div> <!-- .container -->
    </div> <!-- .banner-section -->
  </div> <!-- .page-banner -->



  <div class="page-section">
    <!-- Bagian utama halaman -->
    <div class="container">
      <!-- Kontainer untuk mengatur elemen dalam halaman -->
      <div class="row justify-content-center">
        <!-- Baris dengan penyebaran konten di tengah -->
        <div class="col-lg-8 wow fadeInUp">
          <!-- Kolom lebar layar medium (large) yang muncul dengan efek fadeInUp -->
          <h1 class="text-center mb-3">Selamat Datang Di Pusat Kesehatan Kami</h1>
          <!-- Judul utama dengan efek fadeInUp -->
          <div class="text-lg">
            <!-- Paragraf teks dengan ukuran besar (text-lg) -->
            <p>Rumah Sakit ARS, sejak tahun 2023, menawarkan layanan kesehatan berkualitas dengan pengalaman panjang. Awalnya dengan 30 tempat tidur, kami terus berkembang seiring perkembangan teknologi dan kebutuhan masyarakat. Komitmen pada inovasi, fokus pada pasien, dan pelatihan staf medis adalah inti dari visi kami. Selain perawatan medis, kami berpartisipasi aktif dalam kegiatan sosial dan kemanusiaan, seperti program kesehatan masyarakat dan penyuluhan. Penghargaan dan akreditasi kami menegaskan dedikasi kami pada kualitas dan keamanan pasien. Rumah Sakit ARS berencana terus berkembang, membawa inovasi dalam layanan kesehatan, dan menjadi mitra kesehatan terpercaya dengan perawatan holistik, terjangkau, dan berkelanjutan. Terima kasih telah memilih kami. Hubungi kami untuk informasi lebih lanjut atau membuat janji temu dengan dokter.</p>
          </div>
        </div>

        <!-- Kolom lebar layar besar (large) yang muncul dengan efek fadeInUp -->
        <div class="col-lg-10 mt-5">
          <h1 class="text-center mb-5 wow fadeInUp">Daftar Dokter</h1>
          <!-- Judul daftar dokter dengan efek fadeInUp -->
          <div class="row justify-content-center">
            <!-- Baris dengan penyebaran konten di tengah -->
            <!-- Kartu dokter pertama dengan efek zoomIn -->
            <div class="col-md-6 col-lg-4 wow zoomIn">
              <div class="card-doctor">
                <!-- Header kartu dokter dengan gambar -->
                <div class="header">
                  <img src="../assets/img/doctors/arifin.jpeg" alt="">
                  <div class="meta">
                  </div>
                </div>
                <!-- Badan kartu dokter dengan nama dan spesialisasi -->
                <div class="body">
                  <p class="text-xl mb-0">Dr. Arifin Yusuf Permana.S.Kom</p>
                  <span class="text-sm text-grey">Kesehatan Umum</span>
                </div>
              </div>
            </div>

            <!-- Kartu dokter kedua dengan efek zoomIn -->
            <div class="col-md-6 col-lg-4 wow zoomIn">
              <div class="card-doctor">
                <!-- Header kartu dokter dengan gambar -->
                <div class="header">
                  <img src="../assets/img/doctors/alpi.jpeg" alt="">
                  <div class="meta">
                  </div>
                </div>
                <!-- Badan kartu dokter dengan nama dan spesialisasi -->
                <div class="body">
                  <p class="text-xl mb-0">Dr. Alpi Parhan.S.Kom</p>
                  <span class="text-sm text-grey">Kebidanan/Kandungan & Poli Anak</span>
                </div>
              </div>
            </div>

            <!-- Kartu dokter ketiga dengan efek zoomIn -->
            <div class="col-md-6 col-lg-4 wow zoomIn">
              <div class="card-doctor">
                <!-- Header kartu dokter dengan gambar -->
                <div class="header">
                  <img src="../assets/img/doctors/candra.jpeg" alt="">
                  <div class="meta">
                  </div>
                </div>
                <!-- Badan kartu dokter dengan nama dan spesialisasi -->
                <div class="body">
                  <p class="text-xl mb-0">Dr. Candra Edmond Safra. S.Kom.M.H</p>
                  <span class="text-sm text-grey">Spesialis Bedah & Gizi</span>
                </div>
              </div>
            </div>
          </div>
        </div>
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
          <a class="footer-link">087850805285 arshospital@gmail.com</a>

        </div>
      </div>
      <hr>
    </div>
  </footer>
  <!-- Penutup Footer -->

  <!-- Script untuk memuat file JavaScript -->
  <script src="../assets/js/jquery-3.5.1.min.js"></script>
  <!-- Menghubungkan jQuery versi 3.5.1 -->
  <script src="../assets/js/bootstrap.bundle.min.js"></script>
  <!-- Menghubungkan file Bootstrap.bundle.min.js -->
  <script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>
  <!-- Menghubungkan file owl.carousel.min.js dari plugin Owl Carousel -->
  <script src="../assets/vendor/wow/wow.min.js"></script>
  <!-- Menghubungkan file wow.min.js dari plugin Wow.js -->
  <script src="../assets/js/theme.js"></script>
  <!-- Menghubungkan file theme.js untuk skrip JavaScript tema -->

</body>

</html>