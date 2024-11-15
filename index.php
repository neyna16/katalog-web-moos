<?php include 'admin\config.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Katalog Moos Originals</title>

  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link rel="icon" href="assets/img/logo.png" type="image/png">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">
</head>

<body>

  <header id="header" class="header d-flex align-items-center">

    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
      <a href="#" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img src="assets/img/logo.png" alt="" style="width: 70px; height: 70px;">
      </a>
      <nav id="navbar" class="navbar">
        <!-- <div class="bg-nav"> -->
          <ul class="bg-nav">
            <li><a href="#hero">Home</a></li>
            <li><a href="#kategori">Kategori</a></li>
            <li><a href="#gallery">Galeri</a></li>
          </ul>
        <!-- </div> -->
      </nav><!-- .navbar -->

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>


    </div>
  </header><!-- End Header -->
  <!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero">
    <div class="container position-relative">
      <div class="row gy-5" data-aos="fade-in">
        <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column 
  justify-content-center text-center text-lg-start">
          <h2>MOOS ORIGINALS</h2>
          <p><b> Selamat Datang di MOOS Originals, <br>
              Kami menghadirkan produk-produk berkualitas tinggi dengan sentuhan orisinalitas dan inovasi.
              Temukan berbagai koleksi eksklusif yang dirancang khusus untuk memenuhi gaya hidup modern Anda.
              Jelajahi lebih jauh dan temukan inspirasi baru di setiap sudut MOOS Originals.</b></p>
        </div>

      </div>
    </div>
    <div id="kategori" class="icon-boxes position-relative">
      <div class="container position-relative">
        <div class="row gy-4 mt-5">
          <?php $data = mysqli_query($con, "SELECT * FROM kategori");
          foreach ($data as $row) : ?>
            <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
              <div class="icon-box">
                <h4 class="title"><a href="detail_kategori.php?id_kategori=<?= $row['id_kategori'] ?>" class="stretched-link">
                    <td><?= $row['kategori'] ?></td>
                  </a></h4>
              </div>
            </div>
          <?php endforeach; ?> <!--End Icon Box -->
        </div>
      </div>
    </div>
  </section>



  </div>
  </div>
  </div>

  </div>

  </section>
  <!-- End Hero Section -->

  <main id="main">
    <section id="gallery" class="services sections-bg">
      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h2>Galeri Moos Original</h2>
          <p></p>
        </div>
        <div class="row gy-4" data-aos="fade-up" data-aos-delay="100">
          <?php $data = mysqli_query($con, "SELECT * FROM gallery");
          foreach ($data as $row) : ?>
            <div class="col-md-4 col-sm-6">
              <div class="gallery-item">
                <img src="<?= "admin/img_deskripsi/" . $row['gambar'] ?>" class="img-fluid" alt="Gambar Deskripsi">
                <h3><?= $row['keterangan'] ?></h3>
              </div>
            </div><!-- End Artikel Item -->
          <?php endforeach; ?>
        </div>
      </div>
    </section>

    <style>
      .gallery-item {
        text-align: center;
      }

      .gallery-item img {
        width: 100%;
        /* Gambar akan mengambil lebar penuh kolom */
        height: auto;
        /* Memastikan rasio aspek gambar tetap terjaga */
      }

      .gallery-item h3 {
        margin-top: 10px;
        font-size: 1.2em;
      }
    </style>
    <!-- End Our Artikel Section -->
  </main><!-- End #main -->




  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <?php include 'footer.php'; ?>

</body>

</html>