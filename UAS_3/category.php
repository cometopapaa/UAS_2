<?php
include 'koneksi.php';
include 'wisata.php';
// Ambil nilai kategori dari URL
$category = $_GET['category'];

// Fetch data based on the category from the database
$sql = "SELECT * FROM $category";
$result = $conn->query($sql);

// Inisialisasi $wisataList
$wisataList = [];

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $wisataList[] = new Wisata($row['nama'], $row['lokasi'], $row['deskripsi'], $row['fasilitas'], $row['harga'], $row['aktivitas'], $row['gambar']);
    }
}
$categoryRender = new ResultRenderer($wisataList);
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <title>Aplikasi Parawisata Kelompok 5</title>

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
                        <h2>Cari Tempat Wisata Yang Kamu Mau</h2>
                    </div>
                </div>
                <div class="col-lg-10 offset-lg-1">
                    <ul class="categories">
                        <li><a href="category.php?category=Gunung#kesini"><span class="icon"><img
                                        src="assets/images/mountain-svgrepo-com.svg" alt="Home"></span> Gunung</a></li>
                        <li><a href="category.php?category=Pantai#kesini"><span class="icon"><img
                                        src="assets/images/beach-lounge-svgrepo-com.svg" alt="Food"></span> Pantai &amp;
                                Pulau</a></li>
                        <li><a href="category.php?category=tempat_bersejarah#kesini"><span class="icon"><img
                                        src="assets/images/old-monument-svgrepo-com.svg" alt="Vehicle"></span> Kota
                                Bersejarah</a></li>
                        <li><a href="category.php?category=warisan_budaya#kesini"><span class="icon"><img
                                        src="assets/images/city-buildings-svgrepo-com.svg" alt="Shopping"></span>Warisan
                                budaya</a></li>
                        <li><a href="category.php?category=resort#kesini"><span class="icon"><img
                                        src="assets/images/resort-svgrepo-com.svg" alt="Travel"></span> Resort &amp;
                                Spa</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


    <div class="recent-listing" id="kesini">
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
                                // Tampilkan hasil pencarian Gunung
                                $categoryRender->render();
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
                        <p>If you consider that <a rel="nofollow" href="https://templatemo.com/tm-564-plot-listing"
                                target="_parent">Plot Listing template</a> is useful for your website, please <a
                                rel="nofollow" href="https://www.paypal.me/templatemo" target="_blank">support us</a> a
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
                                <a href="#">090-080-0760</a>
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