<!DOCTYPE html>
<html lang="en">
<?php
include 'koneksi.php';
include 'wisata.php';

$mesinPencarianGunung = new MesinPencarianTabel($conn, "gunung"); //buat objek mesin pencarian gunung
$gunungList = $mesinPencarianGunung->cariSemua(); // da panggil method dari objek diatas berdasarkan tabel yang di tentukan

$mesinPencarianPantai = new MesinPencarianTabel($conn, "pantai");
$pantaiList = $mesinPencarianPantai->cariSemua();

$mesinPencarianTempatBersejarah = new MesinPencarianTabel($conn, "tempat_bersejarah");
$tempatBersejarahList = $mesinPencarianTempatBersejarah->cariSemua();

$mesinPencarianWarisanBudaya = new MesinPencarianTabel($conn, "warisan_budaya");
$warisanBudayaList = $mesinPencarianWarisanBudaya->cariSemua();

$mesinPencarianResort = new MesinPencarianTabel($conn, "resort");
$resortList = $mesinPencarianResort->cariSemua();


$gunungRenderer = new ResultRenderer($gunungList); //buat objek gunungrenderer dari class ResultRenderer di wisata.php
$pantaiRenderer = new ResultRenderer($pantaiList);
$resortRenderer = new ResultRenderer($resortList);
$tempatBersejarahRenderer = new ResultRenderer($tempatBersejarahList);
$warisanBudayaRenderer = new ResultRenderer($warisanBudayaList);


$wisataPremium = new WisataPremium("Wisata Premium", "Lokasi Premium", "Deskripsi Premium", "Fasilitas Premium", "$100000", "Aktivitas Premium", "gambar_premium.jpg");



?>

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>Aplikasi Parawisata Kelompok 7</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-plot-listing.css">
    <link rel="stylesheet" href="assets/css/animated.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <!--

TemplateMo 564 Plot Listing

https://templatemo.com/tm-564-plot-listing

-->
</head>

<body>

    <!-- ***** Preloader Start ***** -->
    <div id="js-preloader" class="js-preloader">
        <div class="preloader-inner">
            <span class="dot"></span>
            <div class="dots">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->

    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="index.php" class="logo"></a>
                        <form class="nav" action="search.php#kesini" method="post">
                            <input type="text" name="search" id="search" placeholder="Cari Tempat Wisata">
                            <input type="submit" value="Search">
                        </form>
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                        <!-- Form for search -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <div class="main-banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="top-text header-text">
                        <h2>Cari Tempat Wisata Yang Anda Mau</h2>
                    </div>
                </div>

                <div class="col-lg-10 offset-lg-1">
                    <ul class="categories">
                        <li><a href="category.php?category=Gunung#kesini"><span class="icon"><img src="assets/images/mountain-svgrepo-com.svg" alt="Home"></span> Gunung</a></li>
                        <li><a href="category.php?category=Pantai#kesini"><span class="icon"><img src="assets/images/beach-lounge-svgrepo-com.svg" alt="Food"></span> Pantai &amp; Pulau</a></li>
                        <li><a href="category.php?category=tempat_bersejarah#kesini"><span class="icon"><img src="assets/images/old-monument-svgrepo-com.svg" alt="Vehicle"></span> Kota Bersejarah</a></li>
                        <li><a href="category.php?category=warisan_budaya#kesini"><span class="icon"><img src="assets/images/city-buildings-svgrepo-com.svg" alt="Shopping"></span>Warisan budaya</a></li>
                        <li><a href="category.php?category=resort#kesini"><span class="icon"><img src="assets/images/resort-svgrepo-com.svg" alt="Travel"></span> Resort &amp; Spa</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="popular-categories">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading">
                        <h2>Popular Categories</h2>
                        <h6>Check Them Out</h6>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="naccs">
                        <div class="grid">
                            <div class="row">
                                <div class="col-lg-3">
                                    <div class="menu">
                                        <div class="first-thumb active">
                                            <div class="thumb">
                                                <span class="icon"><img src="assets/images/mountain-svgrepo-com.svg" alt=""></span>
                                                Gunung
                                            </div>
                                        </div>
                                        <div>
                                            <div class="thumb">
                                                <span class="icon"><img src="assets/images/beach-lounge-svgrepo-com.svg" alt=""></span>
                                                Pantai &amp; Pulau
                                            </div>
                                        </div>
                                        <div>
                                            <div class="thumb">
                                                <span class="icon"><img src="assets/images/old-monument-svgrepo-com.svg" alt=""></span>
                                                Kota Bersejarah
                                            </div>
                                        </div>
                                        <div>
                                            <div class="thumb">
                                                <span class="icon"><img src="assets/images/city-buildings-svgrepo-com.svg" alt=""></span>
                                                Warisan Budaya
                                            </div>
                                        </div>
                                        <div class="last-thumb">
                                            <div class="thumb">
                                                <span class="icon"><img src="assets/images/resort-svgrepo-com.svg" alt=""></span>
                                                Resort &amp; Spa
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-9 align-self-center">
                                    <ul class="nacc">
                                        <li class="active">
                                            <div>
                                                <div class="thumb">
                                                    <div class="row">
                                                        <div class="col-lg-5 align-self-center">
                                                            <div class="left-text">
                                                                <h4>Salah Satu Gunung dengan Jumlah Pariwisata Terbanyak
                                                                    Saat Ini!</h4>
                                                                <p>Di Indonesia, beberapa gunung memiliki pariwisata
                                                                    yang sangat populer dan banyak dikunjungi oleh
                                                                    wisatawan. Salah satu gunung yang memiliki
                                                                    pariwisata yang sangat ramai adalah Gunung Bromo di
                                                                    Jawa Timur.</p>
                                                                <div class="main-white-button"><a href="#"><i class="fa fa-eye"></i> Discover More</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-7 align-self-center">
                                                            <div class="right-image">
                                                                <img src="assets/images/bromo1.jpeg" alt="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div>
                                                <div class="thumb">
                                                    <div class="row">
                                                        <div class="col-lg-5 align-self-center">
                                                            <div class="left-text">
                                                                <h4>Salah Satu Pantai yang Terkenal Di Indonesia </h4>
                                                                <p>Di Indonesia, banyak pantai yang menjadi tujuan
                                                                    pariwisata populer. Salah satu pantai yang sangat
                                                                    terkenal dan menjadi destinasi pariwisata utama
                                                                    adalah Pantai Kuta, Bali</p>
                                                                <div class="main-white-button"><a href="#"><i class="fa fa-eye"></i> Explore More</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-7 align-self-center">
                                                            <div class="right-image">
                                                                <img src="assets/images/banner-bg.jpeg" alt="Foods on the table">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div>
                                                <div class="thumb">
                                                    <div class="row">
                                                        <div class="col-lg-5 align-self-center">
                                                            <div class="left-text">
                                                                <h4>Salah Satu Kota Bersejarah yang Terkenal Di
                                                                    Indonesia </h4>
                                                                <p>Di Indonesia, terdapat banyak tempat bersejarah yang
                                                                    populer dan memiliki nilai historis yang tinggi
                                                                    salah satunya Candi Borobudur, Jawa Tengah </p>
                                                                <div class="main-white-button"><a href="listing.html"><i class="fa fa-eye"></i> More Listing</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-7 align-self-center">
                                                            <div class="right-image">
                                                                <img src="assets/images/candi-borobudur-1_169.jpeg" alt="cars in the city">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div>
                                                <div class="thumb">
                                                    <div class="row">
                                                        <div class="col-lg-5 align-self-center">
                                                            <div class="left-text">
                                                                <h4>Salah Satu Tempat Warisan Budaya yang populer Di
                                                                    Indonesia</h4>
                                                                <p>Indonesia memiliki banyak tempat warisan budaya yang
                                                                    populer, mencakup situs-situs bersejarah, bangunan
                                                                    berarsitektur klasik, dan kebudayaan tradisional
                                                                    yang kaya salah satunya adalah Monumen Nasional</p>
                                                                <div class="main-white-button"><a href="#"><i class="fa fa-eye"></i> Discover More</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-7 align-self-center">
                                                            <div class="right-image">
                                                                <img src="assets/images/monas.jpeg" alt="Shopping Girl">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div>
                                                <div class="thumb">
                                                    <div class="row">
                                                        <div class="col-lg-5 align-self-center">
                                                            <div class="left-text">
                                                                <h4>Salah Satu Tempat resort dan spa yang populer Di
                                                                    Indonesia</h4>
                                                                <p>Beberapa resort dan spa populer di Indonesia mencakup
                                                                    berbagai destinasi, mulai dari pulau-pulau tropis
                                                                    hingga daerah pegunungan salah satunya adalah
                                                                    Amandara,Bali</p>
                                                                <div class="main-white-button"><a rel="nofollow" href="https://templatemo.com/contact"><i class="fa fa-eye"></i> Read More</a></div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-7 align-self-center">
                                                            <div class="right-image">
                                                                <img src="assets/images/amandara.jpeg" alt="Traveling Beach">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="recent-listing">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading">
                        <h2>Tempat Wisata paling banyak di cari bulan ini</h2>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="owl-carousel owl-listing">
                        <div class="item">
                            <div class="row">
                                <?php
                                $gunungRenderer->render();//da panggil method render()
                                ?>
                            </div>
                        </div>
                        <div class="item">
                            <div class="row">
                                <?php
                                $pantaiRenderer->render();
                                ?>
                            </div>
                        </div>
                        <div class="item">
                            <div class="row">
                                <?php
                                $resortRenderer->render();
                                ?>
                            </div>
                        </div>
                        <div class="item">
                            <div class="row">
                                <?php
                                $tempatBersejarahRenderer->render();
                                ?>
                            </div>
                        </div>
                        <div class="item">
                            <div class="row">
                                <?php
                                $warisanBudayaRenderer->render();
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="recent-listing">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading">
                        <h2>Tempat Wisata Premium</h2>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="owl-carousel owl-listing">
                        <div class="item">
                            <div class="row">
                                <?php
                                // Render WisataPremium
                                $wisataPremiumRenderer = new ResultRenderer([$wisataPremium]);
                                $wisataPremiumRenderer->render();
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="recent-listing">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading">
                        <h2>Informasi Wisata</h2>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="owl-carousel owl-listing">
                        <div class="item">
                            <div class="row">
                                <?php
                                $wisataPremium->tampilkanInfo(); // Menampilkan informasi untuk WisataPremium
                                echo "<br>";
                                $wisataBiasa->tampilkanInfo();   // Menampilkan informasi untuk WisataBiasa
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="about">
                        <div class="logo">
                            <img src="assets/images/black-logo.png" alt="Plot Listing">
                        </div>
                        <p>If you consider that <a rel="nofollow" href="https://templatemo.com/tm-564-plot-listing" target="_parent">Plot Listing template</a> is useful for your website, please <a rel="nofollow" href="https://www.paypal.me/templatemo" target="_blank">support us</a> a
                            little via PayPal.</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="helpful-links">
                        <h4>Helpful Links</h4>
                        <div class="row">
                            <div class="col-lg-6 col-sm-6">
                                <ul>
                                    <li><a href="#">Categories</a></li>
                                    <li><a href="#">Reviews</a></li>
                                    <li><a href="#">Listing</a></li>
                                    <li><a href="#">Contact Us</a></li>
                                </ul>
                            </div>
                            <div class="col-lg-6">
                                <ul>
                                    <li><a href="#">About Us</a></li>
                                    <li><a href="#">Awards</a></li>
                                    <li><a href="#">Useful Sites</a></li>
                                    <li><a href="#">Privacy Policy</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="contact-us">
                        <h4>Contact Us</h4>
                        <p>27th Street of New Town, Digital Villa</p>
                        <div class="row">
                            <div class="col-lg-6">
                                <a href="#">010-020-0340</a>
                            </div>
                            <div class="col-lg-6">
                                <a href="#">090-080-0777</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="sub-footer">
                        <p>Copyright © 2021 Plot Listing Co., Ltd. All Rights Reserved.
                            <br>
                            Design: <a rel="nofollow" href="https://templatemo.com" title="CSS Templates">TemplateMo</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>


    <!-- Scripts -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/animation.js"></script>
    <script src="assets/js/imagesloaded.js"></script>
    <script src="assets/js/custom.js"></script>

</body>

</html>