<?php
include 'connect/dbconfig.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Cik Muda</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/shop-homepage.css" rel="stylesheet">

</head>

<body>

  <?php

  include 'modal_login.php';

  ?>


  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">LS CIK MUDA</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="index.php">Home
            </a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="#">About<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="products.php">Products</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="modal" data-target="#myModal">login</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Content -->
  <br><h2 align="center">About LS CIK MUDA FROZEN</h2>

  <div style="background-color:#DCD7D8;">
    <div class="container">
      <hr>
      <div class="row">


        <!-- /.col-lg-3 -->

        <div class="col-lg-6" >
        <div class="col-lg-12" style="font-family: Times new Roman; font-weight: bold; background-color:#C71225; color:white;">

          <p style="back">LS CIK MUDA FROZEN.Sdn.Bhd</p>
          <p>Batang Melaka, Selandar , Melaka</p>
          <p>SKMM No : 4521</p>
          <p>Manager : Muhammad Hasif Bin Hamdan</p>
          <p>No Tel : 013-310 9454</p>
          <p>Email : mhhasif026@gmail.com</p>
          </div>
          <div style="color:#C71225; font-size: 32px;">
          <p style="text-align:left;">~ FEELING OHSEM WITH THE TASTE ~</p>
          </div>
        </div>
        <div class="col-lg-6" style="right: 0px;">
          <iframe
          width="100%"
          height="100%"
          frameborder="0" style="border:0"
          src="https://www.google.com/maps/embed/v1/place?key=AIzaSyDQ8UpCEMxDLweDAl8144TJ0mpRG7LOJ74
          &q=melaka+batangmelaka+JalanBungaRaya2" allowfullscreen>
        </iframe>
      </div>
      <!-- /.col-lg-9 -->

    </div>
    <!-- /.row -->
    <br><br></div></div>


<div class="col-lg-12"><p><br><br></p>
  </div>

  <div class="row">
    <div class="col-lg-2"></div>
    <div class="col-lg-8">
     <div class="row">
     <p><br></p>

      <?php
      $files = glob("imgshop/*.*");
      for ($i=0; $i<count($files); $i++)
        {?>
      <div class="col-lg-3"><div class="card h-100"><?php
        $image = $files[$i];
        $supported_file = array(
          'gif',
          'jpg',
          'jpeg',
          'png'
          );

        $ext = strtolower(pathinfo($image, PATHINFO_EXTENSION));
        if (in_array($ext, $supported_file)) {
         echo '<img class="card-img-top" src="'.$image .'" alt="Random image" />';
       } else {
        continue;
      }
      ?> </div></div><?php
    }
    ?>





  </div> <br><br><br></div>
  <div class="col-lg-2">
  </div>
</div>
<!-- Footer -->
<footer class="py-5 bg-dark">
  <div class="container">
    <p class="m-0 text-center text-white">Copyright &copy; LS CIK MUDA FROZEN website</p>
  </div>
  <!-- /.container -->
</footer>

<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/popper/popper.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>

</body>

</html>
