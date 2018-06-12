<?php
include '../connect/dbconfig.php';

include '../session/staff_session.php';


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
  <link href="../vendor/bootstrap/css/bootstrap.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="../css/shop-homepage.css" rel="stylesheet">

</head>

<body>



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

      <div class="col-3" style="background-color: gray; "> 

        <nav class="navbar-dark">
          <br><br>
          <div style="text-align:center;">
            <img src="../icon/usericon.png" alt="Avatar" style="text-align:center; width:100px; background-color:white; border-radius: 50%;" align="middle">
          </div>
          <div id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item ">
                <a class="nav-link" href="../staff/appointment.php">Appointment Menu</a>
              </li>
              <li class="nav-item ">
                <a class="nav-link" href="../staff/listorder.php">Order Menu</a>
                <ul class="navbar-nav ml-auto">
                  <li  class="nav-item "><a class="nav-link" href="../staff/listorder.php"> &nbsp;  &nbsp;  &nbsp;  &nbsp;List Order</a></li>
                  <li  class="nav-item "><a class="nav-link" href="../staff/addorder.php"> &nbsp;  &nbsp;  &nbsp;  &nbsp;Add Order</a></li>
                </ul>
              </li>
              <li class="nav-item ">
                <a class="nav-link" href="../staff/listproduct.php">Product Menu</a>
                <ul class="navbar-nav ml-auto">
                  <li  class="nav-item"><a class="nav-link" href="../staff/listproduct.php"> &nbsp;  &nbsp;  &nbsp;  &nbsp;List Product</a></li>
                  <li  class="nav-item"><a class="nav-link" href="../staff/addproduct.php"> &nbsp;  &nbsp;  &nbsp;  &nbsp;Add Product</a></li>
                </ul>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="../staff/listpromotion.php">Promotion Menu</a>
                <ul class="navbar-nav ml-auto">
                  <li  class="nav-item"><a class="nav-link" href="../staff/listpromotion.php"> &nbsp;  &nbsp;  &nbsp;  &nbsp;List Promotion</a></li>
                  <li  class="nav-item active"><a class="nav-link" href="../staff/addpromotion.php"> &nbsp;  &nbsp;  &nbsp;  &nbsp;Add Promotion</a></li>
                  <br><br><br><br>
                </ul>
              </li>
            </ul>
          </div>
        </nav>
      </div>

      <div class="col-9" style="background-color: white; text-align: center;">
        <div class="container">
          <br><br>
          <div class="row col-lg-12">
            <div class="col-lg-3"><a href="../staff/staffhome.php"><-Back Home</a></div><div class="col-lg-9"><h4>Add Promotion</h4></div><div class="col-lg-3" style="text-align:right"><!-- <button type="button" class="btn btn-warning"  data-toggle="modal" data-target="#myModal">Add Staff</button> --></div>

          </div>
          <br>

          <form class="form-horizontal" method="post">            <!-- Text input-->

            <!-- Text input-->
            <div class="row">


              <div class="col-md-2"></div>
              <div class="col-md-8">
               <select name="proname" id="proname" class="form-control" >
                 <option selected>choose product</option>
                 <?php

                 $sql="SELECT productid,productname FROM product";
                 $result=mysqli_query($conn,$sql);

// Associative array
                 
                 while ($row=mysqli_fetch_assoc($result)) {
                  echo '<option value="'.$row['productid'].'">'.$row['productname'].'</option>';
                }
                ?>

              </select>
            </div>
            <div class="col-md-2"></div>
          </div>

          <div class="row"><br></div>

          <div class="row">

            <div class="col-md-2"></div>
            <div class="col-md-8">
              <input id="propercen" name="propercen" type="text" placeholder="% PROMOTION" class="form-control input-md">
            </div>
            <div class="col-md-2"></div>
          </div>

          <div class="row"><br></div>

          <div class="row">

            <div class="col-md-2"></div>
            <div class="col-md-8">START DATE
              <input id="strtdate" name="strtdate" type="date" placeholder="START DATE PROMOTION" class="form-control input-md">
            </div>
            <div class="col-md-2"></div>
          </div>

          <div class="row"><br></div>

          <div class="row">

            <div class="col-md-2"></div>
            <div class="col-md-8">END DATE
              <input id="enddate" name="enddate" type="date" placeholder="END DATE PROMOTION" class="form-control input-md">
            </div>
            <div class="col-md-2"></div>
          </div>

          <div class="row"><br></div>

          <div class="row">

            <div class="col-md-2"></div>
            <div class="col-md-8">
              <input id="detailprom" name="detailprom" type="text" placeholder="DETAIL" class="form-control input-md">
            </div>
            <div class="col-md-2"></div>
          </div>

          <div class="row"><br></div>

          <div class="row">

            <div class="col-md-4"></div>
            <div class="col-md-4">
              <button name="add" class="btn btn-warning" type="submit" >Add </button>
            </div>
            <div class="col-md-4"></div>
          </div>

        </form>

        <br><br><br><br><br><br>
      </div>
      <div class="container">
      </div>
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
<script src="../vendor/jquery/jquery.min.js"></script>
<script src="../vendor/popper/popper.min.js"></script>
<script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
<script>
  function myFunction() {
    alert("Update");
  }
</script>

</body>

</html>


<?php


if(isset($_POST['add']))
{
  $proname = $_POST['proname'];
  $propercen = $_POST['propercen'];
  $strtdate = $_POST['strtdate'];
  $enddate = $_POST['enddate'];
  $detailprom = $_POST['detailprom'];


  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }


  $sql = "INSERT INTO promotion (`productname`, `promper`, `strtdate`, `enddate`, `detail`)
  VALUES ('".$proname."', '".$propercen."', '".$strtdate."', '".$enddate."', '".$detailprom."')";

  if (mysqli_query($conn, $sql)) {
    ?>
    <script type="text/javascript">
      alert("Data has been added");
    </script>
    <?php
  } else {
    ?>
    <script type="text/javascript">
      alert("Error");
    </script>
    <?php
  }

  mysqli_close($conn);

}


?>