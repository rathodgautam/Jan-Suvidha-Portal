<?php
session_start();
require 'dbconn.php';
$scheme = $_SESSION['schemeid'];

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Application</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <link rel="stylesheet" href="//cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
  integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">


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
          <li><a class="nav-link scrollto " href="admin_index.php">Home</a></li>
          
          <li><a class="nav-link scrollto active" href="Submitted applications.html">Applications</a></li>
          
          <li><a class="nav-link scrollto" href="logout.php">LogOut</a></li>
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
          <h2>Submitted Applications</h2>
          <ol>
            <li><a href="index.html">About</a></li>
            <li>Applications</li>
          </ol>
       

      </div>
    </section><!-- End Breadcrumbs -->

    <table class="table table-hover"  id="myTable">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Actions</th>
            <th scope="col">More Info</th>

          </tr>
        </thead>
        <tbody>

          <?php
          $sql = "SELECT * FROM applied WHERE schemeid = '$scheme' ";
          $result = mysqli_query($conn, $sql);
          $sno = 0;
          while($row = mysqli_fetch_assoc($result)){
            $sno = $sno + 1;
            echo "<tr>
            <th scope='row'>". $sno . "</th>
            <td>". $row['name'] . "</td>
            <td>". $row['email'] . "</td>";
            if($row['statu'] == 2){
              echo "  <td>
              <form>
              <button type='button' class='btn btn-success'>Accepted</button>
              </form>";
            } elseif($row['statu'] == 0){
              echo "  <td>
              <form>
              <button type='button' class='btn btn-danger ' width='100%'>Rejected</button>
              </form>";
            } elseif($row['statu'] == 3){
              echo "  <td>
              <form>
              <button type='button' class='btn btn-warning ' width='100%'>Reverted</button>
              </form>";
            }else{
              echo "
              <td>
              <table style='width:100%;padding:50px';>
              <tr>
                  <form action = 'accept.php' method='post'>
                  <input type = 'hidden' value = '".$row['email']."' name='vinulal' >";
              echo "<input type='submit' name='schemebtn' value='Accept' class='btn btn-primary'>";
              echo "</form>
              </tr>
              <form action = 'revert.php' method='post'>  
              <input type = 'hidden' value = '".$row['email']."' name='vinulal'>
              <input type='submit' name='schemebtn' value='Revert' class='btn btn-warning'>

              </form>
              <tr>
              <form action = 'reject.php' method='post'>
                  <input type = 'hidden' value = '".$row['email']."' name='vinulal' >";
              echo "<input type='submit' name='schemebtn' value='Reject' class='btn btn-danger'>";
              echo "</form>
              </tr>
              </table>
              </td>    ";
            }

            echo "<td>
              <form action = 'seemore.php' method='post'>
              <input type = 'hidden' value = '".$row['email']."' name='vinulal' >
              <input type='submit' name='schemebtn' value='See More' class='btn btn-info'>

              </form>
            </td>";
            
            echo "
            </tr>";

            }
          ?>
        </tbody>
      </table>


      <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
    crossorigin="anonymous"></script>
  <script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
  <script>
    $(document).ready(function () {
      $('#myTable').DataTable();

    });
  </script>       
              


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
  <script>
  const q1= document.querySelector('card-sl')
  q1.addEventListener('click',()=>{})

  
  </script>

</body>

</html>