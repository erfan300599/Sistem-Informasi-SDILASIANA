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

  <title><?php echo $data_cek['nama_sekolah']?></title>
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
        <i class="bi bi-envelope d-flex align-items-center"><a href="#"><?php echo $data_cek['email_sekolah']; ?></a></i>
        <i class="bi bi-phone d-flex align-items-center ms-4"><span><?php echo $data_cek['no_telepon']; ?></span></i>
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
        <!-- <img src="assets/img/logoo.png" class="img-fluid"> -->
        <h1 class="text-light"><img src="assets/img/logoo.png" class="img-fluid mb-2 pe-lg-2"><a href="index.php"><?php echo $data_cek['nama_sekolah']?></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="active" href="index.php">Beranda</a></li>
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
          <li><a href="kegiatan.php">Kegiatan</a></li>
          <li><a href="kalendar.php">Agenda</a></li>
          <li><a href="kontak.php">Kontak</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

      <div class="carousel-inner" role="listbox">

        <!-- Slide 1 -->
        <div class="carousel-item active" style="background-image: url(assets/img/slide/sekolah-2.jpg);">
          <div class="carousel-container">
            <div class="carousel-content animate__animated animate__fadeInUp">
              <h2>Penerimaan Peserta Didik Baru TA 2023/2024 Belum Dibuka!</h2>
              <p>Silahkan Anda mengakses <a href="" data-bs-toggle="modal" data-bs-target="#modallink">ppdb.sdinpreslasiana.sch.id</a> untuk
              mendapatkan semua informasi terkait pendaftaran PPDB tahun ajaran 2023/2024
              SD INPRES LASIANA KUPANG</p>
              <div class="text-center"><a href="" class="btn-get-started data" data-bs-toggle="modal" data-bs-target="#modal">DAFTAR PPDB</a></div>
            </div>
          </div>
        </div>

 <!-- Modal -->
  <div class="modal fade" id="modal" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header bg-secondary">
          <h3 class="modal-title text text-white text-center">Pemberitahuan</h3>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body" style="text-align: justify;text-justify: inter-word;">
          <p>Mohon Maaf Pendaftaran Peserta Didik Baru Tahun Ajaran 2023/2024 Belum Dibuka. Untuk Informasi Lebih Lanjut Silahkan Hubungi Pihak Sekolah. Terima Kasih.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
        </div>
      </div>

    </div>
  </div>

    <div class="modal fade" id="modallink" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header bg-secondary">
          <h3 class="modal-title text text-white text-center">Pemberitahuan</h3>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body" style="text-align: justify;text-justify: inter-word;">
          <p>Mohon Maaf <b class="text-primary">ppdb.sdinpreslasiana.sch.id</b> belum bisa diakses. Untuk Informasi Lebih Lanjut Silahkan Hubungi Pihak Sekolah. Terima Kasih.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
        </div>
      </div>

    </div>
  </div>

        <!-- Slide 2 -->
<!--         <div class="carousel-item" style="background-image: url(assets/img/slide/slide-2.jpg);">
          <div class="carousel-container">
            <div class="carousel-content animate__animated animate__fadeInUp">
              <h2>Lorem Ipsum Dolor</h2>
              <p>Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>
              <div class="text-center"><a href="" class="btn-get-started">Read More</a></div>
            </div>
          </div>
        </div> -->

        <!-- Slide 3 -->
<!--         <div class="carousel-item" style="background-image: url(assets/img/slide/slide-3.jpg);">
          <div class="carousel-container">
            <div class="carousel-content animate__animated animate__fadeInUp">
              <h2>Sequi ea ut et est quaerat</h2>
              <p>Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>
              <div class="text-center"><a href="" class="btn-get-started">Read More</a></div>
            </div>
          </div>
        </div> -->
      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bx bx-left-arrow" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bx bx-right-arrow" aria-hidden="true"></span>
      </a>

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Us Section ======= -->
    <section id="about-us" class="about-us">
      <div class="container">

        <div class="row no-gutters">
          <div class="image col-xl-5 d-flex align-items-stretch justify-content-center justify-content-lg-start" data-aos="fade-right"></div>
          <div class="col-xl-7 ps-0 ps-lg-5 pe-lg-1 d-flex align-items-stretch">
            <div class="content d-flex flex-column justify-content-center">
               <div data-aos="fade-up">
              <h3>SEJARAH <span style="color: #fd5c28;">SEKOLAH</span></h3>
            </div>
            <div data-aos="fade-up">
              <p>
                <?php echo $data_cek['sejarah_singkat']; ?><a href="sejarah.php" class="btn-get-started">Read More</a>
              </p>
            </div>
            </div><!-- End .content-->
                
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->

    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container">
     <div class="section-title" data-aos="fade-up">
              <h2><span style="color: #fd5c28;">EKSTRAKURIKULER</span> SEKOLAH</h2>
            </div>
<div class="row row-cols-1 row-cols-md-3 g-4 text-center">
            <?php 
        $no = 1;
        $sql = $koneksi->query("SELECT * FROM tb_ekstrakurikuler LIMIT 0, 3");
              while ($data= $sql->fetch_assoc()) {

            ?>
  <div class="col" data-aos="fade-up">
    <div class="card h-100">
      <img src="<?php echo 'dashboard/admin/gambar/ekstrakurikuler/' . $data['gambar_ekstrakurikuler']; ?>" class="card-img-top" alt="...">
      <div class="card-body">
        <h3 class="card-title"><?php echo $data['nama_ekstrakurikuler']; ?></h3>
      </div>
    </div>
  </div>
            <?php
              }
            ?>
</div>
      </div>
    </section><!-- End Cta Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">
         <div class="section-title" data-aos="fade-up">
              <h2><span style="color: #fd5c28;">FASILITAS</span> SEKOLAH</h2>
            </div>
        <div class="row">
          <div class="col-lg-4 col-md-6">
            <div class="icon-box" data-aos="fade-up">
              <div class="icon"><i class="bi bi-briefcase"></i></div>
              <h4 class="title"><a href="">Ruang Belajar</a></h4>
              <p class="description">Ruang belajar berjumlah 25 ruangan yang masing-masing dilengkapi dengan fasilitas pendukung yang memadai</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
              <div class="icon"><i class="bi bi-bar-chart"></i></div>
              <h4 class="title"><a href="">Perpustakaan</a></h4>
                <p class="description">Ruang Perpustakaan berjumlah 1 ruangan yang menyediakan berbagai macam sumber buku dan fasilitas pendukung agar pembaca merasa nyaman saat membaca</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
              <div class="icon"><i class="bi bi-brightness-high"></i></div>
              <h4 class="title"><a href="">Laboratorium Komputer</a></h4>
              <p class="description">Ruang Laboratorium Komputer berjumlah 1 ruangan, dimana didalamnya dilengkapai fasilitas pendukung yang memadai</p>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Services Section -->

        <!-- ======= Our Team Section ======= -->
    <section id="team" class="team section-bg">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h3>TENAGA <span style="color: #fd5c28;">PENDIDIK</span></h3>
        </div>

        <div class="row">
            <?php 
        $no = 1;
        $sql = $koneksi->query("SELECT * FROM tb_guru LIMIT 0, 4");
              while ($data= $sql->fetch_assoc()) {

            ?>
          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up">
              <div class="member-img">
                <img src="<?php echo 'dashboard/admin/gambar/guru/' . $data['gambar_guru']; ?>" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4><?php echo $data['nama_guru']; ?></h4>
                <span><?php echo $data['bidang_guru']; ?></span>
              </div>
            </div>
          </div>
            <?php
              }
            ?>
        </div>

      </div>
    </section><!-- End Our Team Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container">
        <div class="section-title" data-aos="fade-up">
              <h2><span style="color: #fd5c28;">KEGIATAN</span> SEKOLAH</h2>
          </div>

        <div class="row portfolio-container" data-aos="fade-up">
          <?php 
        $no = 1;
        $sql = $koneksi->query("SELECT * FROM tb_kegiatan LIMIT 0, 10");
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