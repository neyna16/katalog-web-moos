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
            <a href="index.php" class="logo d-flex align-items-center">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <img src="assets/img/logo.png" alt="" style="width: 70px; height: 70px;">

            </a>
            <nav id="navbar" class="navbar">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="index.php#kategori">Kategori</a></li>
                </ul>
            </nav><!-- .navbar -->
            <i class="mobile-nav-toggle mobile-nav-show bi bi-list" style="background-color: #000; color: #fff; padding: 10px; border-radius: 5px;"></i>
            <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x" style="background-color: #000; color: #fff; padding: 10px; border-radius: 5px;"></i>
        </div>
    </header><!-- End Header -->
    <!-- End Header -->
    <main id="main">
        <!-- ======= Our Services Section ======= -->
        <section id="kategori" class="services sections-bg">
            <div class="container" data-aos="fade-up">
                <div class="section-header">
                    <h2>Detail Kategori</h2>
                </div>
                <div class="row gy-4" data-aos="fade-up" data-aos-delay="100">
                    <?php
                    $id_kategori = $_GET['id_kategori'];
                    $data = mysqli_query($con, "SELECT * FROM deskripsi 
where id_kategori=$id_kategori");
                    foreach ($data as $row) : ?>
                        <div class="col-lg-4 col-md-6">
                            <div class="service-item position-relative">
                                <p><img src="<?= "admin/img_deskripsi/" .
                                                    $row['gambar'] ?>" width="270" height="200"></p>
                                <h3><?= $row['nama_barang'] ?></h3>
                                <p><?= $row['tanggal'] ?></p>
                                <p><?= substr($row['deskripsi'], 0, 50) .
                                        '...' ?></p>
                                <a href="detail_deskripsi.php?id_deskripsi=<?= $row['id_deskripsi'] ?>" class="readmore stretched-link">Read more <i class="bi bi-arrowright"></i></a>
                            </div>
                        </div><!-- End Service Item -->
                    <?php endforeach; ?>
                </div>
            </div>
        </section><!-- End Our Services Section -->
    </main><!-- End #main -->
    <?php include 'footer.php'; ?>
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
</body>

</html>