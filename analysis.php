<?php


function getDataFromMySQL() {
  $dbservername="localhost";
  $dbuser="root";
  $dbpass="";
  $dbname="epiz_33250869_portal";
  $conn=mysqli_connect($dbservername,$dbuser,$dbpass,$dbname);


  $sql = "SELECT COUNT(*) as count FROM users WHERE gender = 'M'";
  $result = $conn->query($sql);
  $maleCount = 0;
  if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $maleCount = $row['count'];
  }

  $sql = "SELECT COUNT(*) as count FROM users WHERE gender = 'F'";
  $result = $conn->query($sql);
  $femaleCount = 0;
  if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $femaleCount = $row['count'];
  }

  $conn->close();

  return [$maleCount, $femaleCount];
}
?>



<html>
  <head>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.3/dist/Chart.min.js"></script>
    <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Schemes</title>
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
    html, body, #container {
  width: 100%;
  height: 100%;
  margin: 0;
  padding: 0;
}

  table, th, td {
      border: 1px solid black;
      border-collapse: collapse;
    }
    th, td {
      padding: 5px;
    }

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

  .col-md-3{
    padding-left: 4%;
    /* padding: auto; */
    
  }
   </style> 


</head>
  <body>
     <!-- ======= Header ======= -->
  <header id="header" class="fixed-top header-inner-pages">
    <div class="container d-flex align-items-center justify-content-between">
      <h1 class="logo"><a href="index.php">JAN SUVIDHA PORTAL</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

    
      <nav id="navbar" class="navbar">
        <ul>
        <li><a class="nav-link scrollto " href="index3.php">Home</a></li>
          <li><a class="nav-link scrollto active" href="analysis.php">Analysis</a></li>
          <li class="dropdown"><a href="#"><span>Schemes</span> <i class="bi bi-chevron-down"></i></a>
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

     <!-- ======= Breadcrumbs ======= -->
     <section class="breadcrumbs">
     

     <div style="padding-top: 25px;padding-left: 80px;padding-right: 80px;">
       <h2>Dashboard <a href="converter.php"><abbr title="Download data in excel file"><img src="assets\img\logo2.png" style="height:30px; width: 45px;"></abbr></a></h2>
       
       <ol>
         <li><a href="index.html">About</a></li>
         <li>Home</li>
       </ol>
   </div>
 </section><!-- End Breadcrumbs -->

 <br>
 <center>
  <div>
  <div style="width: 300px; height: 200px;">
        <canvas id="myChart" width="100%" height="100%"></canvas>
    </div>
  </div>
 </center>
 

   <br>
   <div>


   

   
    <script>
      var ctx = document.getElementById('myChart').getContext('2d');
      var chart = new Chart(ctx, {
        type: 'bar',
        data: {
          labels: ['Male', 'Female'],
          datasets: [{
            label: 'Number of Males and Females',
            data: <?php echo json_encode(getDataFromMySQL()); ?>,
            backgroundColor: [
              'rgba(255, 99, 132, 0.2)',
              'rgba(54, 162, 235, 0.2)'
            ],
            borderColor: [
              'rgba(255, 99, 132, 1)',
              'rgba(54, 162, 235, 1)'
            ],
            borderWidth: 1
          }]
        },
        options: {
          scales: {
            yAxes: [{
              ticks: {
                beginAtZero: true
              }
            }]
          }
        }
      });
 </script>

<div class='col-md-3'>

   
        <?php

        require 'dbconn.php';
        $sql = "SELECT * FROM users WHERE cast = 'General'";
        $result = mysqli_query($conn, $sql);
        $gen = mysqli_num_rows($result);
        $sqla = "SELECT * FROM users WHERE cast = 'OBC'";
        $result = mysqli_query($conn, $sqla);
        $obc = mysqli_num_rows($result);
        $sqlq = "SELECT * FROM users WHERE cast = 'SC'";
        $result = mysqli_query($conn, $sqlq);
        $sc = mysqli_num_rows($result);
        $sqlz = "SELECT * FROM users WHERE cast = 'ST'";
        $result = mysqli_query($conn, $sqlz);
        $st = mysqli_num_rows($result);

        $total = $gen + $obc + $sc + $st;
        $gen = ($gen/$total)*(100);
        $obc = ($obc/$total)*(100);
        $sc = ($sc/$total)*(100);
        $st = ($st/$total)*(100);
        
        ?>



<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<script type="text/javascript">
// Load google charts
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

// Draw the chart and set the chart values
function drawChart() {
  var data = google.visualization.arrayToDataTable([
  ['Task', 'Hours per Day'],
  ['General', <?php echo"$gen"?>],
  ['OBC', <?php echo"$obc"?>],
  ['SC', <?php echo"$sc"?>],
  ['ST', <?php echo"$st"?>]
]);

  // Optional; add a title and set the width and height of the chart
  var options = {'title':'Caste Distribution', 'width':480, 'height':480};

  // Display the chart inside the <div> element with id="piechart"
  var chart = new google.visualization.PieChart(document.getElementById('piechart'));
  chart.draw(data, options);
}
</script>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>

</div>
<div class='col-md-3'>
<?php


$sql2 = "SELECT * FROM users WHERE district = 'abd'";
$result2 = mysqli_query($conn, $sql2);
$gen2 = mysqli_num_rows($result2);
$sqla2 = "SELECT * FROM users WHERE district = 'surat'";
$result2 = mysqli_query($conn, $sqla2);
$obc2 = mysqli_num_rows($result2);
$sqlq2 = "SELECT * FROM users WHERE district = 'vadodara'";
$result2 = mysqli_query($conn, $sqlq2);
$sc2 = mysqli_num_rows($result2);
$sqlz2 = "SELECT * FROM users WHERE district = 'rajkot'";
$result2 = mysqli_query($conn, $sqlz2);
$st2 = mysqli_num_rows($result2);

$total2 = $gen2 + $obc2 + $sc2 + $st2;
$gen2 = ($gen2/$total2)*(100);
$obc2 = ($obc2/$total2)*(100);
$sc2 = ($sc2/$total2)*(100);
$st2 = ($st2/$total2)*(100);

?>




<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<script type="text/javascript">
// Load google charts
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart2);

// Draw the chart and set the chart values
function drawChart2() {
var data = google.visualization.arrayToDataTable([
['Task', 'Hours per Day'],
['ahmedabad', <?php echo"$gen2"?>],
['surat', <?php echo"$obc2"?>],
['vadodara', <?php echo"$sc2"?>],
['rajkot', <?php echo"$st2"?>]
]);

// Optional; add a title and set the width and height of the chart
var options = {'title':'applicants city vise', 'width':480, 'height':480};

// Display the chart inside the <div> element with id="piechart"
var chart = new google.visualization.PieChart(document.getElementById('piechart2'));
chart.draw(data, options);
}
</script>
</div>
</div>
<div>
<center>
  <div>
  <div id="piechart2"></div>
  </div>
</center>
<center>
  <div>
  <div id="piechart"></div>
  </div>
</center>
</div>


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




