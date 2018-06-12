<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Cik Muda</title>

  <!-- Bootstrap core CSS -->
  <link href="../vendor/bootstrap/css/bootstrap.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="../css/shop-homepage.css" rel="stylesheet">

</head>

<body>

  <?php

  include '../modal_login.php';

  ?>


  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">LS CIK MUDA</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
      </div>
    </div>
  </nav>

  <!-- Page Content -->
  <div class="col-lg-12">

    <div class="row">

      <div class="col-2" style="background-color: gray; text-align: center; "> 

        <nav class="navbar-dark">
          <br><br>

          <img src="../icon/usericon.png" alt="Avatar" style="width:100px; background-color:white; border-radius: 50%;">

          <div id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active">
                <a class="nav-link" href="../manager/viewreport.php">View Report</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="../manager/staffmenu.php">Staff Menu</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="../manager/appointment.php">Appointment</a>
              </li>
            </ul>
          </div>
        </nav>
      </div>

      <div class="col-10" style="background-color: white; text-align: center;">

      <h4><br><br><br><br><br><br><br><br>~ Welcome Back Manager ~</h4><a type="button" class="btn btn-warning" href="../session/logout.php">Log Out </a><br><br><br><br><br><br><br><br>
      </div>

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
