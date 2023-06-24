<?php
include'dashboard/inc/koneksi.php';
 $sql_cek = "SELECT * FROM tb_profil WHERE id_sekolah=1";
        $query_cek = mysqli_query($koneksi, $sql_cek);
        $data_cek = mysqli_fetch_array($query_cek,MYSQLI_BOTH);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>KEGIATAN - <?php echo $data_cek['nama_sekolah']?></title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/logoo.png" rel="icon">
  <link href="assets/img/logoo.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Muli:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Flattern - v4.10.0
  * Template URL: https://bootstrapmade.com/flattern-multipurpose-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope d-flex align-items-center"><a href="#"><?php echo $data_cek['email_sekolah']?></a></i>
        <i class="bi bi-phone d-flex align-items-center ms-4"><span><?php echo $data_cek['no_telepon']?></span></i>
      </div>
      <div class="social-links d-none d-md-flex align-items-center">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
      </div>
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex justify-content-between">

      <div class="logo">
        <h1 class="text-light"><img src="assets/img/logoo.png" class="img-fluid mb-2 pe-lg-2"><a href="index.php"><?php echo $data_cek['nama_sekolah']?></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="index.php">Beranda</a></li>
           <li class="dropdown"><a href="#"><span>Profil</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="sejarah.php">Sejarah</a></li>
              <li><a href="visimisi.php">Visi dan Misi</a></li>
            </ul>
          </li>
          <li><a href="guru.php">Tenaga Pendidik</a></li>
          <li><a href="fasilitas.php">Fasilitas</a></li>
          <li><a href="ekstrakurikuler.php">Ekstrakurikuler</a></li>
          <li class="dropdown"><a href="#"><span>Berita</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="berita.php">Berita Sekolah</a></li>
              <!-- <li><a href="pengumuman.php">Pengumuman</a></li> -->
            </ul>
          </li>
          <li><a class="active" href="kegiatan.php">Kegiatan</a></li>
          <li><a href="kalendar.php">Agenda</a></li>
          <li><a href="kontak.php">Kontak</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Kegiatan</h2>
          <ol>
            <li><a href="index.php">Beranda</a></li>
            <li>Kegiatan</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container">
        <div class="section-title" data-aos="fade-up">
              <h2><span style="color: #fd5c28;">KEGIATAN</span> SEKOLAH</h2>
          </div>

        <div class="row portfolio-container" data-aos="fade-up">
          <?php 
        $no = 1;
        $sql = $koneksi->query("SELECT * FROM tb_kegiatan");
              while ($data= $sql->fetch_assoc()) {
            ?>
          <div class="col-lg-4 col-md-6 portfolio-item">
            <img src="<?php echo 'dashboard/admin/gambar/kegiatan/' . $data['gambar_kegiatan']; ?>" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4><?php echo $data['judul_kegiatan']; ?></h4>
              <a href="<?php echo 'dashboard/admin/gambar/kegiatan/' . $data['gambar_kegiatan']; ?>" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="<?php echo $data['judul_kegiatan']; ?>"><i class="bx bx-plus"></i></a>
              <a href="kegiatan-details.php?kode=<?php echo $data['id_kegiatan']; ?>" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>
    <?php
              }
            ?>
        </div>

      </div>
    </section><!-- End Portfolio Section -->

  </main><!-- End #main -->

   <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4><?php echo $data_cek['nama_sekolah']?></h4>
            <p><?php echo $data_cek['visi_sekolah']?></p>
          </div>

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>HUBUNGI KAMI</h4>
            <p>
              <?php echo $data_cek['alamat_sekolah']?><br>
              <?php echo $data_cek['kel_sekolah']?>, <?php echo $data_cek['kec_sekolah']?>,<br>
              <?php echo $data_cek['kab_sekolah']?>,<br>
              <?php echo $data_cek['prov_sekolah']?><br><br>
              <strong>Telepon:</strong> <?php echo $data_cek['no_telepon']?><br>
              <strong>Email:</strong> <?php echo $data_cek['email_sekolah']?><br>
            </p>
          </div>

           <div class="col-lg-3 col-md-6 footer-links">
            <h4>IKUTI KAMI</h4>
               <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>NAVIGASI</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="index.php">Beranda</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="sejarah.php">Sejarah</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="visimisi.php">Visi & Misi</a></li>
            </ul>
          </div>

        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
          Copyright  &copy; 2023 Developer - <strong><span><a href="">Ervanto Andreas</a></span></strong> - . All Rights Reserved
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>