<?php require 'dashboard/includes/init.php';?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Welcome to WALHAS Investment</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/logo.png" rel="icon">
  <link href="assets/img/logo.png" rel="apple-touch-icon">

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

<style>
  
</style>
</head>

<body>

  <!-- ======= Header ======= -->
  <section id="topbar" class="topbar d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:contact@example.com">contact@example.com</a></i>
        <i class="bi bi-phone d-flex align-items-center ms-4"><span>+234 9139093772</span></i>
      </div>
      <div class="social-links d-none d-md-flex align-items-center">
         <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>
    </div>
  </section><!-- End Top Bar -->

  <header id="header" class="header d-flex align-items-center">

    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
      <a href="index.php" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
      <img src="assets/img/logo.png" alt=""> 
        <h1>Walhas<span>.</span></h1>
      </a>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="index.php">Home</a></li>
          
          <li class="dropdown"><a href="#"><span>log in</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="dashboard/login.php">Investor</a></li>
              
              <li><a href="dashboard/admin/login.php">Administrator</a></li>

            </ul>
          </li>
          <li><a href="#contact">Contact</a></li>
        </ul>
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
        <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center text-center text-lg-start">
          <h2>Walhas <span>Investment</span></h2>
          <p>Welcome to your world of financial freedom, invest with us today  and become financially free when you invest in mineral resources. Choose from our mineral investment </p>
          <div class="d-flex justify-content-center justify-content-lg-start">
            <a class="btn-get-started" href="dashboard/register.php">Create an Account</a>
            <a href="#" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Know More</span></a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2">
          <img src="assets/img/banner.png" class="img-fluid" alt="" data-aos="zoom-out" data-aos-delay="100">
        </div>
      </div>
    </div>

    <div class="icon-boxes position-relative">
      <div class="container position-relative">
        <div class="row gy-4 mt-5">
          <h2>Our Investment in minerals</h2>


          <div class="col-xl-3 col-6" data-aos="fade-up" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-gem"></i></div>
              <h4 class="title"><a href="" class="stretched-link">Columbite</a></h4>
              <p><b>&#8358;                             <?php

// SQL query to get the latest price for Monazite
$sql = "SELECT stock_name, price, date_recorded
FROM stock_prices
WHERE (stock_name, date_recorded) IN (
    SELECT stock_name, MAX(date_recorded)
    FROM stock_prices
    WHERE stock_name IN ('Columbite')
    GROUP BY stock_name
)";
$result = $conn->query($sql);

// Check if we have a result
if ($result->num_rows > 0) {
    // Fetch the latest price for Monazite
    $row = $result->fetch_assoc();
    $price_per_unit = $row['price'];
    $date_recorded = $row['date_recorded'];

    // Conversion logic - assuming the price is per ton, and we want to convert it to per kilogram
    $price_per_kilo_mona = $price_per_unit; // Convert price from per ton to per kilogram

 
    echo number_format($price_per_kilo_mona);
    
} else {
    echo "----";
}

?></b><br><span>(per kg as of today)</span></p>
             <button class="btn btn-danger col-12 "><a href="dashboard/register.php"><b class="text-white">Invest</b></a></button>
            </div>
          </div><!--End Icon Box -->


          <div class="col-xl-3 col-6" data-aos="fade-up" data-aos-delay="400">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-gem"></i></div>
              <h4 class="title"><a href="" class="stretched-link">Monozite</a></h4>
              <p><b>&#8358;                             <?php

// SQL query to get the latest price for Monazite
$sql = "SELECT stock_name, price, date_recorded
FROM stock_prices
WHERE (stock_name, date_recorded) IN (
    SELECT stock_name, MAX(date_recorded)
    FROM stock_prices
    WHERE stock_name IN ('Monazite')
    GROUP BY stock_name
)";
$result = $conn->query($sql);

// Check if we have a result
if ($result->num_rows > 0) {
    // Fetch the latest price for Monazite
    $row = $result->fetch_assoc();
    $price_per_unit = $row['price'];
    $date_recorded = $row['date_recorded'];

    // Conversion logic - assuming the price is per ton, and we want to convert it to per kilogram
    $price_per_kilo_mona = $price_per_unit; // Convert price from per ton to per kilogram

 
    echo number_format($price_per_kilo_mona);
    
} else {
    echo "----";
}

?></b><br><span>(per kg as of today)</span></p>
              <button class="btn btn-danger col-12 "><a href="dashboard/register.php"><b class="text-white">Invest</b></a></button>
            </div>
          </div><!--End Icon Box -->


          <div class="col-xl-3 col-6" data-aos="fade-up" data-aos-delay="600">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-gem"></i></div>
              <h4 class="title"><a href="" class="stretched-link">Tantalite</a></h4>
              <p><b>&#8358;                             <?php

// SQL query to get the latest price for Monazite
$sql = "SELECT stock_name, price, date_recorded
FROM stock_prices
WHERE (stock_name, date_recorded) IN (
    SELECT stock_name, MAX(date_recorded)
    FROM stock_prices
    WHERE stock_name IN ('Tantalite')
    GROUP BY stock_name
)";
$result = $conn->query($sql);

// Check if we have a result
if ($result->num_rows > 0) {
    // Fetch the latest price for Monazite
    $row = $result->fetch_assoc();
    $price_per_unit = $row['price'];
    $date_recorded = $row['date_recorded'];

    // Conversion logic - assuming the price is per ton, and we want to convert it to per kilogram
    $price_per_kilo_mona = $price_per_unit; // Convert price from per ton to per kilogram

 
    echo number_format($price_per_kilo_mona);
    
} else {
    echo "----";
}

?></b><br><span>(per kg as of today)</span></p>
             <button class="btn btn-danger col-12 "><a href="dashboard/register.php"><b class="text-white">Invest</b></a></button>
            </div>
          </div><!--End Icon Box -->


          <div class="col-xl-3 col-6" data-aos="fade-up" data-aos-delay="800">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-gem"></i></div>
              <h4 class="title"><a href="" class="stretched-link">Tin</a></h4>
              <p><b>&#8358;                             <?php

// SQL query to get the latest price for Monazite
$sql = "SELECT stock_name, price, date_recorded
FROM stock_prices
WHERE (stock_name, date_recorded) IN (
    SELECT stock_name, MAX(date_recorded)
    FROM stock_prices
    WHERE stock_name IN ('Tin')
    GROUP BY stock_name
)";
$result = $conn->query($sql);

// Check if we have a result
if ($result->num_rows > 0) {
    // Fetch the latest price for Monazite
    $row = $result->fetch_assoc();
    $price_per_unit = $row['price'];
    $date_recorded = $row['date_recorded'];

    // Conversion logic - assuming the price is per ton, and we want to convert it to per kilogram
    $price_per_kilo_mona = $price_per_unit; // Convert price from per ton to per kilogram

 
    echo number_format($price_per_kilo_mona);
    
} else {
    echo "----";
}

?></b><br><span>(per kg as of today)</span></p>
              <a href="dashboard/register.php"><button class="btn btn-danger col-12 "><b class="text-white">Invest</b></button></a>
            </div>
          </div><!--End Icon Box -->
           <h2 class="d-flex">About us</h2>
           <p>We are a company who have been involved in the minning sector for over a deacade, with experiences in </p>
            <li>Exploration</li>
            <li>Mineral processing </li>
          <p>  and many other sectors in the mining business </p>
           <h3 ><b>Check <a href="http://walhas.com.ng" class="text-white">walhas.com.ng</a></b></h3>
        </div>
      </div>
    </div>

    </div>
    
          
  </section>
  <!-- End Hero Section -->
  

  <main id="main">

  </main><!-- End #main -->
 
<!-- ======= Footer ======= -->
<footer id="footer" class="footer">

  <div class="container">
    <div class="row gy-4">
      <div class="col-lg-5 col-md-12 footer-info">
        <a href="index.html" class="logo d-flex align-items-center">
          <span>Walhas</span><br><h5>Investment</h5>
          
        </a>
        <p>A subsidary of Walhas mining company. </p>
        <div class="social-links d-flex mt-4">
          <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
          <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
          <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
          
        </div>
      </div>
  
      <div class="col-lg-2 col-6 footer-links">
        <h4>Useful Links</h4>
        <ul>
          <li><a href="#">Home</a></li>
          <li><a href="#">About us</a></li>
          <li><a href="#">Services</a></li>
          <li><a href="#">Terms of service</a></li>
          <li><a href="#">Privacy policy</a></li>
        </ul>
      </div>
  
      <div class="col-lg-2 col-6 footer-links">
        <h4>Our Services</h4>
        <ul>
          <li><a href="#">Investment</a></li>
          <li><a href="#">Exploration</a></li>
          <li><a href="#">Mineral processing</a></li>
      
          
        </ul>
      </div>
  
      <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
        <h4>Contact Us</h4>
        <p>
          Mass transit park,<br>
          Along bank road,<br>
          Tafawa balewa, Bauchi, Nigeria<br><br>
          <strong>Phone:</strong> +234 9139093772<br>
          <strong>Email:</strong> info@example.com<br>
        </p>
  
      </div>
  
    </div>
  </div>
  
  <div class="container mt-4">
    <div class="copyright">
      &copy; Copyright <strong><span>Walhas Investment</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/impact-bootstrap-business-website-template/ -->
     
    </div>
  </div>
  
  </footer><!-- End Footer -->
  <!-- End Footer -->
  
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