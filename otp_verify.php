<?php
session_start();
if($_SERVER["REQUEST_METHOD"] == "POST"){
    if($_SESSION['otp'] == $_POST['otp']){
        $_SESSION['otp'] = '';
        $login = true;
        $_SESSION['loggedin'] = true;
        echo "<script>window.location.href = './index.php';</script>";
    } else {
        echo "<script>alert('Wrong OTP')</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>OTP Verification</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <link href="assets/css/style.css" rel="stylesheet">


  <style>
    a {
            text-decoration: none;
        }

        /* Card Styles */

        .card-sl {
            border-radius: 8px;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        }

        .card-image img {
            max-height: 100%;
            max-width: 100%;
            border-radius: 8px 8px 0px 0;
        }

        .card-action {
            position: relative;
            float: right;
            margin-top: -25px;
            margin-right: 20px;
            z-index: 2;
            color: #E26D5C;
            background: #fff;
            border-radius: 100%;
            padding: 15px;
            font-size: 15px;
            box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.2), 0 1px 2px 0 rgba(0, 0, 0, 0.19);
        }

        .card-action:hover {
            color: #fff;
            background: #E26D5C;
            -webkit-animation: pulse 1.5s infinite;
        }

        .card-heading {
            font-size: 18px;
            font-weight: bold;
            background: #fff;
            padding: 10px 15px;
        }

        .card-text {
            padding: 10px 15px;
            background: #fff;
            font-size: 14px;
            color: #636262;
        }

        .card-button {
            display: flex;
            justify-content: center;
            padding: 10px 0;
            width: 100%;
            background-color:#5846f9;
            color: #fff;
            border-radius: 0 0 8px 8px;
        }

        .card-button:hover {
            text-decoration: none;
            background-color: #1D3461;
            color: #fff;

        }


        @-webkit-keyframes pulse {
            0% {
                -moz-transform: scale(0.9);
                -ms-transform: scale(0.9);
                -webkit-transform: scale(0.9);
                transform: scale(0.9);
            }

            70% {
                -moz-transform: scale(1);
                -ms-transform: scale(1);
                -webkit-transform: scale(1);
                transform: scale(1);
                box-shadow: 0 0 0 50px rgba(90, 153, 212, 0);
            }

            100% {
                -moz-transform: scale(0.9);
                -ms-transform: scale(0.9);
                -webkit-transform: scale(0.9);
                transform: scale(0.9);
                box-shadow: 0 0 0 0 rgba(90, 153, 212, 0);
            }
        }
        .ticker-wrap {
        
        left: 0;
        width: 100%;
        overflow: hidden;
        height: 2rem;
        background-color: orange;
        box-sizing: content-box;
    }
    .ticker-wrap .ticker {
        display: inline-block;
        height: 4rem;
        line-height: 2rem;
        white-space: nowrap;
        padding-right: 100%;
        box-sizing: content-box;
        -webkit-animation-iteration-count: infinite;
        animation-iteration-count: infinite;
        -webkit-animation-timing-function: linear;
        animation-timing-function: linear;
        -webkit-animation-name: ticker;
        animation-name: ticker;
        -webkit-animation-duration: 30s;
        animation-duration: 30s;
    }
    .ticker-wrap .ticker__item {
        display: inline-block;
        padding: 0 2rem;
        font-size: 1rem;
        color: white;
    }
    @-webkit-keyframes ticker {
        0% {
        -webkit-transform: translate3d(0, 0, 0);
        transform: translate3d(0, 0, 0);
        visibility: visible;
        }
        100% {
        -webkit-transform: translate3d(-100%, 0, 0);
        transform: translate3d(-100%, 0, 0);
        }
    }
    @keyframes ticker {
        0% {
        -webkit-transform: translate3d(0, 0, 0);
        transform: translate3d(0, 0, 0);
        visibility: visible;
        }
        100% {
        -webkit-transform: translate3d(-100%, 0, 0);
        transform: translate3d(-100%, 0, 0);
        }

    }
        .divider:after,
        .divider:before {
        content: "";
        flex: 1;
        height: 1px;
        background: #eee;
        }
        .h-custom {
        height: calc(100% - 73px);
        }
        @media (max-width: 450px) {
        .h-custom {
        height: 100%;
        }
        }
  </style>  
</head>
<body>
<!-- ======= Header ======= -->
<header id="header" class="fixed-top header-inner-pages">
    <div class="container d-flex align-items-center justify-content-between">
      <h1 class="logo"><a href="index.html">JAN SUVIDHA PORTAL</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

    
      <nav id="navbar" class="navbar">
        <ul>
        <li><a class="nav-link scrollto " href="index.php">Home</a></li>
          <li><a class="nav-link scrollto" href="login.php">Login</a></li>
          <li><img src="assets/img/Azadi-Ka-Amrit-Mahotsav-Logo-PNG@zeevector.png" alt="SSIP" style="height: 60px ;width:60 px;"></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
    </div>
  </header><!-- End Header -->

  <main id="main">
    <br>
    <div>
    <section class="vh-100">
  <div class="container-fluid h-custom">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-md-9 col-lg-6 col-xl-5">
        <img src="assets/img/hero-img.png"
          class="img-fluid" alt="Sample image">
      </div>
      <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
        <form action="otp_verify.php" method="POST" class="form email-form">

          <!-- Email input -->
          <div class="form-outline mb-4">
            <input type="text" id="otp" name="otp" class="form-control form-control-lg"
              placeholder="Enter OTP" />
            <label class="form-label" for="otp">Verify OTP</label>
          </div>

          <div class="text-center text-lg-start mt-4 pt-2">
            <button type="submit" class="btn btn-primary btn-lg"
              style="padding-left: 2.5rem; padding-right: 2.5rem;">Log me In</button>
            <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? <a href="signup.php"
                class="link-danger">Register</a></p>
          </div>

        </form>
      </div>
    </div>
  </div>
</section>
    </div>
            
  
   

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>Jan suvidha portal</h3>
            <p>
              Azadi ka amrit mahotsav <br>
              SSIP<br>
              Education department <br>
              Government Of Gujarat<br><br>
              <strong>Phone:</strong> +91 70436 76714<br>
              <strong>Email:</strong><br>
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Top Government Schemes</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">PM-CARE</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">PM-avaash yojna</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">PM-Jay</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">MYSY</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Digital Gujarat</a></li>
            </ul>
          </div>

          

        </div>
      </div>
    </div>

    <div class="container">

      <div class="copyright-wrap d-md-flex py-4">
        <div class="me-md-auto text-center text-md-start">
          <div class="copyright">
            &copy; Copyright <strong><span>Jan Suvidha Portal</span></strong>. All Rights Reserved
          </div>
          <div class="credits">
            Designed by Team Technocrats
          </div>
        </div>
        <div class="social-links text-center text-md-right pt-3 pt-md-0">
          <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
          <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
          <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        </div>
      </div>

    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <div id="preloader"></div>

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