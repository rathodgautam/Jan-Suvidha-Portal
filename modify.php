
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Modify</title>
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

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Techie - v4.9.0
  * Template URL: https://bootstrapmade.com/techie-free-skin-bootstrap-3/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->

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
        <li><a class="nav-link scrollto " href="index3.php">Home</a></li>
          <li><a class="nav-link scrollto " href="analysis.php">Analysis</a></li>
          <li class="dropdown active"><a href="#"><span>Schemes</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="edit_scheme.php">Modify or Delete</a></li>     
              <li><a href="add_scheme.php">Add new scheme</a></li>
            </ul>
          </li>
         
          <li><a class="nav-link scrollto" href="logout.php">Logout</a></li>
          <li><img src="assets/img/Azadi-Ka-Amrit-Mahotsav-Logo-PNG@zeevector.png" alt="SSIP" style="height: 60px ;width:60 px;"></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
     

        <div class="d-flex justify-content-between align-items-center" style="padding-top: 25px;padding-left: 80px;padding-right: 80px;">
          <h2>Modify Scheme</h2>
          <ol>
            <li><a href="admin_index.html">Schemes</a></li>
            <li>Modify Schemes</li>
          </ol>
       

      </div>
    </section><!-- End Breadcrumbs -->



<?php
// Connect to the database
$dbservername="localhost";
$dbuser="root";
$dbpass="";
$dbname="epiz_33250869_portal";

// Create connection
$conn = mysqli_connect($dbservername,$dbuser,$dbpass,$dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if the id has been passed through the URL
if (isset($_GET['id'])) {
  $id = $_GET['id'];

  // SQL query to fetch the record to be modified
  $sql = "SELECT * FROM schemelist WHERE schemeid=$id";
  $result = mysqli_query($conn, $sql);

  // If the result is not empty, fetch the record
  if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
  }
}

// Check if the form has been submitted
if (isset($_POST['submit'])) {
  $id = $_POST['id'];
  $name = $_POST['name'];
  $description = $_POST['description'];

  // SQL query to update the record
  $sql = "UPDATE schemelist SET name='$name', description='$description' WHERE schemeid=$id";

  if (mysqli_query($conn, $sql)) {
      echo " ";
  } else {
      echo "Error updating record: " . mysqli_error($conn);
  }
}

// Close connection
mysqli_close($conn);
?>


<!-- HTML form to modify the record -->
<form action="" method="post">
  <br>
  <h3 style="margin-left:80px;"><?php echo "Modify:",$row['name']; ?></h3>
  <input type="hidden" name="id" value="<?php echo $row['schemeid']; ?>">
  <div class="form-group" style="margin-left:80px;">
    <br>
    <label for="name">Name:</label>
    <br>
    <input type="text" style=" width: 500px;" class="form-control" name="name" value="<?php echo $row['name']; ?>">
  </div>
  <br>
  <div class="form-group" style="margin-left: 80px;">
    <label for="description">Description:</label>
    <br>
    <textarea class="form-control" name="description" style="height: 200px; width: 500px;"><?php echo $row['description']; ?></textarea>
  </div>
  <br>
  <input type="submit" class="btn btn-primary" name="submit" value="Submit" style="margin-left:80px;">
</form> 

  </main><!-- End #main -->
  <br>


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
  <script>
  const q1= document.querySelector('card-sl')
  q1.addEventListener('click',()=>{})

  
  </script>

</body>

</html>


