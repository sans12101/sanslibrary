
<?php 
include "koneksi.php";
if(!isset ($_SESSION['user'])){
  header('location:form-1/login.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Vesperr Bootstrap Template - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Vesperr
  * Updated: Jan 29 2024 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/vesperr-free-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <h1><a href="index.php">Library</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.php"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li class="dropdown"><a href="#"><span>Buku <i class="bi bi-chevron-down"></i></a>
        <ul>
          <li class="#"><a href="buku.php">Daftar Buku</a></li>
          <?php
            if($_SESSION['level'] !='pengguna'){
          ?>
          <li class="dropdown"><a href="form-1/tambah_buku.php"><span>Tambah Buku</a></li>
          <?php
          }?>
          <?php
            if($_SESSION['level'] =='pengguna'){
          ?>
          <li class="dropdown"><a href="form-1/pinjam.php"><span>Pinjam Buku</a></li>
          <?php 
          }?>
          <li class="dropdown"><a href="form-1/kategori.php"><span>Kategori</a></li> 
          <?php
            if($_SESSION['level'] !='pengguna'){
          ?>
          <li class="dropdown"><a href="form-1/peminjaman_buku.php"><span>Kembalikan Buku</a></li>
          <?php
          }?>
          <?php
            if($_SESSION['level'] =='admin'){
          ?>
          <li class="dropdown"><a href="form-1/laporan.php"><span>Cetak Laporan</a></li>
          <?php
          }?>

          <li class="dropdown"><a href="form-1/tampilan_ulasan.php"><span>Tampilan Ulasan</a></li>

          
        </ul>
          </li>
          <li><a class="nav-link scrollto " href="#services">services</a></li>
          <li><a class="nav-link scrollto " href="#portfolio">Populer</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
          <li><a class="getstarted scrollto" href="form-1/logout.php">logout</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
          <h1 data-aos="fade-up">Online Library For Study</h1>
          <h2 data-aos="fade-up" data-aos-delay="400">Belajar Efektif Untuk Generi Muda </h2>
          <div data-aos="fade-up" data-aos-delay="800">
            <a href="#about" class="btn-get-started scrollto">Get Started</a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="fade-left" data-aos-delay="200">
          <img src="pp.jpg" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Clients Section ======= -->


    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>About Us</h2>
        </div>

        <div class="row content">
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="150">
            <p>
              Perpustakaan Digital adalah platform inovatif yang menyajikan kemudahan akses terhadap kekayaan pengetahuan dan literatur melalui medium 
              elektronik. Dengan menggabungkan teknologi canggih dan kekayaan konten digital, perpustakaan ini membuka pintu kepada
              pengguna untuk menjelajahi dunia literatur, riset, dan informasi tanpa batas.
                          </p>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-up" data-aos-delay="300">
            <p>
            Keunggulan perpustakaan digital tidak hanya terletak pada akses cepat dan mudah, tetapi juga dalam kemampuannya untuk 
            menyediakan sumber daya interaktif. Fitur seperti anotasi digital, diskusi online, dan bookmarking memungkinkan pengguna 
            untuk berpartisipasi aktif dalam proses pembelajaran dan penelitian.
            </p>
            <a href="#" class="btn-learn-more">Learn More</a>
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Services</h2>
          <p>Layanan Yang Kami Sediakan</p>
        </div>

        <div class="row">
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class="ri-book-line"></i></div>
              <h4 class="title"><a href="buku.php">Daftar Buku</a></h4>
              <p class="description">Daftar Buku Untuk Melihat Daftar Buku Yang Tersedia Di Perpustakaan Digital</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4 class="title"><a href="#about">informasi</a></h4>
              <p class="description">Memberikan Sarana Informasi Untuk Pengguna Terhadap Buku</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
              <div class="icon"><i class="ri-school-line"></i></div>
              <h4 class="title"><a href="#portfolio">Rekomendasi Buku</a></h4>
              <p class="description">Memberikan sarana rekomendasi populer buku yang ada di perpustakaan digital</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
              <div class="icon"><i class="ri-star-line"></i></div>
              <h4 class="title"><a href="form-1/kategori.php">kategori</a></h4>
              <p class="description">Memeberikan Sarana Informasi Tentang Kategori Buku</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= More Services Section ======= -->
    <section id="more-services" class="more-services">
      <div class="container">
            
        <div class="row">
          <div class="col-md-6 d-flex align-items-stretch">
            <div class="card" style='background-image: url("aaa.jpg");' data-aos="fade-up" data-aos-delay="100">
              <div class="card-body">
                <h5 class="card-title"><a href="">Library Deskripsi</a></h5>
                <p class="card-text">Perpustakaan digital adalah platform daring yang memberikan akses mudah dan cepat ke berbagai 
                  koleksi buku dan sumber informasi dalam format digital, memungkinkan pengguna untuk membaca dan belajar secara fleksibel 
                  dari mana saja dan kapan saja.
                </p>
                <div class="read-more"><a href="#about"><i class="bi bi-arrow-right"></i> Read More</a></div>
              </div>
            </div>
          </div>
          <div class="col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
            <div class="card" style='background-image: url("assets/san/aaa.jpg");' data-aos="fade-up" data-aos-delay="200">
              <div class="card-body">
                <h5 class="card-title"><a href=""></a>Library services</h5>
                <p class="card-text">Melayani Pelayana Peminjaman Sinopsi Pemberitahuan tetang Buku Dan Novel </p>
                <div class="read-more"><a href="#"><i class="bi bi-arrow-right"></i> Read More</a></div>
              </div>
            </div>

          </div>
          <div class="col-md-6 d-flex align-items-stretch mt-4">
            <div class="card" style='background-image: url("assets/san/aaaa.jpg");' data-aos="fade-up" data-aos-delay="100">
              <div class="card-body">
                <h5 class="card-title"><a href="">Membaca</a></h5>
                <p class="card-text">Membaca buku dapat membuat kamu lebih tenang dan nyaman</p>
                <div class="read-more"><a href="#"><i class="bi bi-arrow-right"></i> Read More</a></div>
              </div>
            </div>
          </div>
          <div class="col-md-6 d-flex align-items-stretch mt-4">
            <div class="card" style='background-image: url("assets/san/aaaaa.webp");' data-aos="fade-up" data-aos-delay="200">
              <div class="card-body">
                <h5 class="card-title"><a href="">Kategori</a></h5>
                <p class="card-text">Melihat dan membaca buku dengan berbagai kategori yang ada</p>
                <div class="read-more"><a href="#"><i class="bi bi-arrow-right"></i> Read More</a></div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End More Services Section -->


    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Populer</h2>
          <p>Daftar Buku Populer</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="200">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">Novel</li>
              <li data-filter=".filter-card">Komik</li>
              <li data-filter=".filter-web">Pelajaran</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="400">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="laskar_pelangi_sampul.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Novel 1</h4>
                <p>Novel</p>
                <div class="portfolio-links">
                  <a href="laskar.php" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/san/h.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Pelajaran 1</h4>
                <p>Pelajaran</p>
                <div class="portfolio-links">
                  <a href="atomic.php" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="cccc.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Novel 2</h4>
                <p>Novel</p>
                <div class="portfolio-links">
                  <a href="ayanokoji.php" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="aa.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Komik 1</h4>
                <p>Komik</p>
                <div class="portfolio-links">
                  <a href="naruto.php" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-5.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Pelajaran 2</h4>
                <p>Pelajaran</p>
                <div class="portfolio-links">
                  <a href="cosmos.php" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="h.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Novel 3</h4>
                <p>Novel</p>
                <div class="portfolio-links">
                  <a href="pother.php" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/san/ttt.webp" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Komik 2</h4>
                <p>Komik</p>
                <div class="portfolio-links">
                  <a href="arthur.php" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/san/ll.webp" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>komik 3</h4>
                <p>komik</p>
                <div class="portfolio-links">
                  <a href="lookism.php" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-9.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Web 3</h4>
                <p>Web</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-9.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.php" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Team Section ======= -->
   
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Contact Us</h2>
        </div>

        <div class="row">

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="contact-about">
              <h3>San Library</h3>
              <p></p>
              <div class="social-links">
                <a href="https://twitter.com/IhsanVenom80597" class="twitter"><i class="bi bi-twitter"></i></a>
                <a href="https://www.facebook.com/ihsanventom.ihsanventom/" class="facebook"><i class="bi bi-facebook"></i></a>
                <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="200">
            <div class="info">
              <div>
                <i class="ri-map-pin-line"></i>
                <p>Ihsan Agus<br>Batujajar</p>
              </div>

              <div>
                <i class="ri-mail-send-line"></i>
                <p>ihsanventom@gmail.com</p>
              </div>

              <div>
                <i class="ri-phone-line"></i>
                <p>+62 83804720555</p>
              </div>

            </div>
          </div>

          <div class="col-lg-5 col-md-12" data-aos="fade-up" data-aos-delay="300">
            <img src="pp.jpg" class="img-fluid animated" alt="">
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="row d-flex align-items-center">
        <div class="col-lg-6 text-lg-left text-center">
          <div class="copyright">
            &copy; Copyright <strong>Vesperr</strong>. All Rights Reserved
          </div>
          <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/vesperr-free-bootstrap-template/ -->
            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
          </div>
        </div>
        <div class="col-lg-6">
          <nav class="footer-links text-lg-right text-center pt-2 pt-lg-0">
            <a href="#intro" class="scrollto">Home</a>
            <a href="#about" class="scrollto">About</a>
            <a href="#">Privacy Policy</a>
            <a href="#">Terms of Use</a>
          </nav>
        </div>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>