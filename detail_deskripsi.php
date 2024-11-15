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
                    <li><a href="index.php#services">Deskripsi Produk</a></li>
                </ul>
            </nav><!-- .navbar -->
            <i class="mobile-nav-toggle mobile-nav-show bi bi-list" style="background-color: #000; color: #fff; padding: 10px; border-radius: 5px;"></i>
            <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x" style="background-color: #000; color: #fff; padding: 10px; border-radius: 5px;"></i>
        </div>
    </header><!-- End Header -->

    <!-- JavaScript -->
    <script>
        document.getElementById('back-button').addEventListener('click', function() {
            window.history.back();
        });
    </script>
    <!-- End Header -->
    <main id="main">
        <!-- ======= Our Services Section ======= -->
        <section id="services" class="services sections-bg">
            <div class="container" data-aos="fade-up">
                <div class="section-header">
                </div>
                <div class="row gy-4" data-aos="fade-up" data-aos-delay="100">
                    <?php
                    $id_deskripsi = $_GET['id_deskripsi'];
                    $data = mysqli_query($con, "SELECT * FROM deskripsi WHERE id_deskripsi=$id_deskripsi");
                    foreach ($data as $row) : ?>
                        <div class="col-lg-12 col-md-6">
                            <div class="service-item position-relative" style="display: flex; align-items: flex-start;">
                                <div style="flex: 1; margin-right: 20px;">
                                    <img src="<?= "admin/img_deskripsi/" . $row['gambar'] ?>" width="500" height="300" style="max-width: 100%; height: auto;">
                                </div>
                                <div style="flex: 2;">
                                    <h3><?= $row['nama_barang'] ?></h3>
                                    <p style="text-align: left;"><?= $row['deskripsi'] ?></p>
                                </div>
                                <button type="button" class="btn btn-danger" onclick="history.go(-1)">
                                    <i class="bi bi-x-lg"></i>
                                </button>
                            </div>
                        </div>

                        <!-- Tombol untuk menuju Shopee, Tokopedia, Lazada, dan TikTok -->
                        <div class="button-group" align="center">
                            <a href="<?= $row['link_shopee'] ?>" class="btn" style="background-color: #E74B2E; color: white;" target="_blank">Shopee</a>
                            <a href="<?= $row['link_tokopedia'] ?>" class="btn" style="background-color: #00b14f; color: white;" target="_blank">Tokopedia</a>
                            <a href="<?= $row['link_lazada'] ?>" class="btn" style="background-color: #0056ff; color: white;" target="_blank">Lazada</a>
                            <a href="<?= $row['link_tiktok'] ?>" class="btn" style="background-color: black; color: white;" target="_blank">TikTok</a>
                        </div>
                </div><!-- End Service Item -->
            <?php endforeach; ?>
            </div>
            </div>
        </section><!-- End Our Services Section -->

        <?php include 'footer.php'; ?>

        <a href="#" class="scroll-top d-flex align-items-center justifycontent-center"><i class="bi bi-arrow-up-short"></i></a>
        <div id="preloader"></div>
        <!-- Vendor JS Files -->
        <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/vendor/aos/aos.js"></script>
        <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
        <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
        <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
        <script src="assets/vendor/isotopelayout/isotope.pkgd.min.js"></script>
        <script src="assets/vendor/php-email-form/validate.js"></script>
        <!-- Template Main JS File -->
        <script src="assets/js/main.js"></script>
</body>

</html>