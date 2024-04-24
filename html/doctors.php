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


  <!-- Tombol kembali ke atas -->
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

  <!-- Navigasi (Navbar) dengan tata letak responsif dan bayangan lembut -->
  <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
    <!-- Kontainer untuk mengatur elemen dalam navbar -->
    <div class="container">
      <!-- Merek atau logo situs -->
      <a class="navbar-brand" href="#"><span class="text-primary">ARS</span>-Hospital</a>

      <!-- Tombol toggle untuk perangkat kecil -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport" aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
        <!-- Ikon tombol toggle -->
        <span class="navbar-toggler-icon"></span>
      </button>


      <div class="collapse navbar-collapse" id="navbarSupport">
        <!-- Daftar navigasi dengan opsi penyebaran di sebelah kanan (ml-auto) -->
        <ul class="navbar-nav ml-auto">
          <!-- Item navigasi untuk halaman beranda -->
          <li class="nav-item">
            <a class="nav-link" href="berandaakhir.php">Home</a>
          </li>
          <!-- Item navigasi untuk halaman tentang kami -->
          <li class="nav-item">
            <a class="nav-link" href="aboutakhir.php">Tentang Kami</a>
          </li>
          <!-- Item navigasi aktif untuk halaman dokter -->
          <li class="nav-item active">
            <a class="nav-link" href="doctors.php">Dokter</a>
          </li>
          <!-- Item navigasi untuk halaman jadwal temu -->
          <li class="nav-item">
            <a class="nav-link" href="blog.php">Jadwal Temu</a>
          </li>
          <!-- Item navigasi untuk halaman kontak -->
          <li class="nav-item">
            <a class="nav-link" href="contactakhir.php">Kontak</a>
          </li>
          <!-- Tombol navigasi untuk keluar (logout) -->
          <li class="nav-item">
            <a class="btn btn-primary ml-lg-3" href="index.php">Logout</a>
          </li>
        </ul>
      </div> <!-- Penutup .navbar-collapse -->
    </div> <!-- Penutup .container -->
  </nav> <!-- Penutup Navigasi -->
  </header> <!-- Penutup Header -->


  <!-- Bagian Banner Halaman dengan lapisan gelap dan gambar latar belakang -->
  <div class="page-banner overlay-dark bg-image" style="background-image: url(../assets/img/bg_image_1.jpg);">
    <!-- Bagian Seksi Banner -->
    <div class="banner-section">
      <!-- Kontainer untuk mengatur elemen dalam banner -->
      <div class="container text-center wow fadeInUp">
        <!-- Navigasi breadcrumb untuk jejak navigasi -->
        <nav aria-label="Breadcrumb">
          <ol class="breadcrumb breadcrumb-dark bg-transparent justify-content-center py-0 mb-2">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Dokter</li>
          </ol>
        </nav>
        <!-- Judul halaman dokter -->
        <h1 class="font-weight-normal">Daftar Dokter</h1>
      </div> <!-- Penutup .container -->
    </div> <!-- Penutup .banner-section -->
  </div> <!-- Penutup .page-banner -->

  <!-- Bagian Seksi Halaman dengan latar belakang terang -->
  <div class="page-section bg-light">
    <!-- Kontainer untuk mengatur elemen dalam halaman -->
    <div class="container">
      <!-- Baris yang berpusat -->
      <div class="row justify-content-center">
        <!-- Kolom lebar layar besar (lg) dengan lebar 10 -->
        <div class="col-lg-10">
          <!-- Baris untuk daftar dokter -->
          <div class="row">

            <!-- Kolom untuk dokter pertama -->
            <div class="col-md-6 col-lg-4 py-3 wow zoomIn">
              <!-- Kartu dokter dengan gambar kepala dan ikon panggilan serta WhatsApp -->
              <div class="card-doctor">
                <!-- Bagian header kartu dokter -->
                <div class="header">
                  <!-- Gambar dokter -->
                  <img src="../assets/img/doctors/arifin.jpeg" alt="">
                  <!-- Bagian meta dengan ikon panggilan dan WhatsApp -->
                  <div class="meta">
                    <a href="tel:+6287850805274"><span class="mai-call"></span></a>
                    <a href="https://web.whatsapp.com/"><span class="mai-logo-whatsapp"></span></a>
                  </div>
                </div>
                <!-- Bagian body kartu dokter dengan nama dan spesialisasi -->
                <div class="body">
                  <p class="text-xl mb-0">Dr. Arifin Yusuf Permana.S.Kom</p>
                  <span class="text-sm text-grey">Kesehatan Umum</span>
                </div>
              </div>
            </div>

            <!-- Kolom untuk dokter kedua -->
            <div class="col-md-6 col-lg-4 py-3 wow zoomIn">
              <!-- Kartu dokter dengan gambar kepala dan ikon panggilan serta WhatsApp -->
              <div class="card-doctor">
                <!-- Bagian header kartu dokter -->
                <div class="header">
                  <!-- Gambar dokter -->
                  <img src="../assets/img/doctors/alpi.jpeg" alt="">
                  <!-- Bagian meta dengan ikon panggilan dan WhatsApp -->
                  <div class="meta">
                    <a href="tel:+6287850805274"><span class="mai-call"></span></a>
                    <a href="https://web.whatsapp.com/"><span class="mai-logo-whatsapp"></span></a>
                  </div>
                </div>
                <!-- Bagian body kartu dokter dengan nama dan spesialisasi -->
                <div class="body">
                  <p class="text-xl mb-0">Dr. Alpi Parhan.S.Kom</p>
                  <span class="text-sm text-grey">Kebidanan/Kandungan & Poli Anak</span>
                </div>
              </div>
            </div>

            <!-- Kolom untuk dokter ketiga -->
            <div class="col-md-6 col-lg-4 py-3 wow zoomIn">
              <!-- Kartu dokter dengan gambar kepala dan ikon panggilan serta WhatsApp -->
              <div class="card-doctor">
                <!-- Bagian header kartu dokter -->
                <div class="header">
                  <!-- Gambar dokter -->
                  <img src="../assets/img/doctors/candra.jpeg" alt="">
                  <!-- Bagian meta dengan ikon panggilan dan WhatsApp -->
                  <div class="meta">
                    <a href="tel:+6287850805274"><span class="mai-call"></span></a>
                    <a href="https://web.whatsapp.com/"><span class="mai-logo-whatsapp"></span></a>
                  </div>
                </div>
                <!-- Bagian body kartu dokter dengan nama dan spesialisasi -->
                <div class="body">
                  <p class="text-xl mb-0">Dr. Candra Edmond Safra. S.Kom.M.H</p>
                  <span class="text-sm text-grey">Spesialis Bedah & Gizi</span>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div> <!-- Penutup .container -->
  </div> <!-- Penutup .page-section -->

  <!-- Bagian Seksi Halaman -->
  <div class="page-section">

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      // Ambil data dari formulir
      $nama_lengkap = $_POST["nama_lengkap"];
      $alamat = $_POST["alamat"];
      $tanggal = $_POST["tanggal"];
      $departmen = $_POST["department"];
      $nomor_telp = $_POST["nomor_telp"];
      $pesan = $_POST["pesan"];

      // Lakukan validasi data jika diperlukan

      // Simpan data ke database
      $host = "localhost"; // Ganti sesuai dengan host Anda
      $user = "root"; // Ganti dengan username MySQL Anda
      $password = ""; // Ganti dengan password MySQL Anda
      $database = "db_uasweb"; // Ganti dengan nama database Anda

      // Buat koneksi
      $conn = new mysqli($host, $user, $password, $database);

      // Periksa koneksi
      if ($conn->connect_error) {
        die("Koneksi gagal: " . $conn->connect_error);
      }

      // Ambil data gambar
      $gambarPath = 'assets/img/doctors/' . $_POST["gambar"];
      $gambarData = file_get_contents($gambarPath);

      // Gunakan prepared statement untuk menghindari SQL Injection
      $stmt = $conn->prepare("INSERT INTO tb_tambahjanji (nama_lengkap, alamat, tanggal, department, nomor_telp, pesan, gambar) VALUES (?, ?, ?, ?, ?, ?, ?)");
      $stmt->bind_param("sssssss", $nama_lengkap, $alamat, $tanggal, $departmen, $nomor_telp, $pesan, $gambarData);

      // Eksekusi prepared statement
      if ($stmt->execute()) {
        echo "Data berhasil ditambahkan";
      } else {
        echo "Error: " . $stmt->error;
      }

      // Tutup prepared statement
      $stmt->close();

      // Tutup koneksi
      $conn->close();
    }
    ?>


    <div class="container">
      <h1 class="text-center wow fadeInUp">Buat Jadwal Temu</h1>

      <form class="main-form" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" enctype="multipart/form-data">
        <!-- Tambahkan atribut name pada setiap input untuk mempermudah pengambilan data -->
        <div class="row mt-5">
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
            <input type="text" class="form-control" placeholder="Nama Lengkap" name="nama_lengkap">
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInRight">
            <input type="text" class="form-control" placeholder="Alamat.." name="alamat">
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft" data-wow-delay="300ms">
            <input type="date" class="form-control" name="tanggal">
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInRight" data-wow-delay="300ms">
            <select name="department" id="department" class="custom-select">
              <option value="Kesehatan Umum">Kesehatan Umum</option>
              <option value="Kebidanan & Kandungan">Kebidanan & Kandungan</option>
              <option value="Poli Anak">Poli Anak</option>
              <option value="Spesialis Bedah">Spesialis Bedah</option>
              <option value="Spesialis Gizi">Spesialis Gizi</option>
            </select>
          </div>
          <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
            <input type="text" class="form-control" placeholder="No Telepon.." name="nomor_telp">
          </div>
          <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
            <textarea name="pesan" id="pesan" class="form-control" rows="6" placeholder="Ketikan Pesan.." name="pesan"></textarea>
          </div>
          <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
            <!-- Tambahkan elemen untuk menampilkan pilihan gambar dari folder 'img' di perangkat -->
            <label for="gambar">Pilih Dokter:</label>
            <select name="gambar" id="gambar" class="custom-select">
              <?php
              // Mendapatkan daftar file gambar dari folder 'img'
              $folderPath = 'assets/img/doctors/';
              $gambarOptions = scandir($folderPath);

              // Menampilkan file gambar sebagai pilihan
              foreach ($gambarOptions as $gambarOption) {
                // Hanya tampilkan file gambar (JPEG, PNG, GIF, dll.)
                if (in_array(pathinfo($gambarOption, PATHINFO_EXTENSION), ['jpg', 'jpeg', 'png', 'gif'])) {
                  echo "<option value='{$gambarOption}'>{$gambarOption}</option>";
                }
              }
              ?>
            </select>
          </div>

          <!-- Menampilkan gambar sesuai dengan pilihan -->
          <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
            <img id="previewGambar" src="" style="max-width: 50%; height: auto;">
          </div>
        </div>

        <button type="submit" class="btn btn-primary mt-3 wow zoomIn">Submit</button>
      </form>

      <script>
        // Menambahkan event listener untuk mengubah gambar saat pilihan berubah
        document.getElementById('gambar').addEventListener('change', function() {
          var selectedImage = this.value;
          document.getElementById('previewGambar').src = 'assets/img/doctors/' + selectedImage;
        });
      </script>
    </div>

    <!-- .container -->
  </div> <!-- .page-section -->


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

  <script src="../assets/js/jquery-3.5.1.min.js"></script>

  <script src="../assets/js/bootstrap.bundle.min.js"></script>

  <script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

  <script src="../assets/vendor/wow/wow.min.js"></script>

  <script src="../assets/js/theme.js"></script>

</body>

</html>