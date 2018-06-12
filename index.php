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
          <li class="nav-item active">
            <a class="nav-link" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.php">About<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="products.php">Product</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="modal" data-target="#myModal">login</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Content -->
  <div class="container">

    <div class="row">


      <!-- /.col-lg-3 -->

      <div class="col-lg-12">

        <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
              <img class="d-block img-fluid" src="imgheader/1.jpg" alt="First slide">
            </div>

            <?php
            $files = glob("imgheader/h*.*");
            for ($i=0; $i<count($files); $i++)
            {
             echo'<div class="carousel-item">';
             $image = $files[$i];
             $supported_file = array(
              'gif',
              'jpg',
              'jpeg',
              'png'
              );

             $ext = strtolower(pathinfo($image, PATHINFO_EXTENSION));
             if (in_array($ext, $supported_file)) {
              echo '<img class="d-block img-fluid" src="'.$image .'" alt="Second slide">';
            } else {
              continue;
            }
            echo "</div>";
          }
          ?>


        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>

      <div class="row">
        <hr>


        <div class="row">
         <div class="col-lg-12 col-md-12 mb-12">
           <h3> Picture of Today </h3><br></div>
           <?php
           $files = glob("img/*.*");
           for ($i=0; $i<count($files); $i++)
            {?>
          <div class="col-lg-3 col-md-4 mb-2"><div class="card h-100"><?php
            $image = $files[$i];
            $supported_file = array(
              'gif',
              'jpg',
              'jpeg',
              'png'
              );

            $ext = strtolower(pathinfo($image, PATHINFO_EXTENSION));
            if (in_array($ext, $supported_file)) {
             // show only image name if you want to show full path then use this code // echo $image."<br />";
              echo '<img id="myImg'.$i.'" OnClick="selecImg(this.id)" class="card-img-top" src="'.$image .'" alt="'.basename($image).'" />';
             
            } else {
              continue;
            }
            ?> </div></div><?php
          }
          ?>





        </div>
        
</div>

      
      <!-- /.row -->

    </div>
    <!-- /.col-lg-9 -->

  </div>
  <!-- /.row -->

</div>
<!-- /.container -->
<?php

include 'imgmodal.php';

?>
<!-- Footer -->


<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/popper/popper.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
</div></div>
<footer class="py-5 bg-dark">
  <div class="container">
    <p class="m-0 text-center text-white">Copyright &copy; LS CIK MUDA FROZEN website</p>
  </div>
  <!-- /.container -->
</footer>
</body>

</html>


