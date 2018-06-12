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
              <li class="nav-item active">
                <a class="nav-link" href="../staff/listproduct.php">Product Menu</a>
                <ul class="navbar-nav ml-auto">
                  <li  class="nav-item active"><a class="nav-link" href="../staff/listproduct.php"> &nbsp;  &nbsp;  &nbsp;  &nbsp;List Product</a></li>
                  <li  class="nav-item"><a class="nav-link" href="../staff/addproduct.php"> &nbsp;  &nbsp;  &nbsp;  &nbsp;Add Product</a></li>
                </ul>
              </li>
              <li class="nav-item ">
                <a class="nav-link" href="../staff/listpromotion.php">Promotion Menu</a>
                <ul class="navbar-nav ml-auto">
                  <li  class="nav-item"><a class="nav-link" href="../staff/listpromotion.php"> &nbsp;  &nbsp;  &nbsp;  &nbsp;List Promotion</a></li>
                  <li  class="nav-item"><a class="nav-link" href="../staff/addpromotion.php"> &nbsp;  &nbsp;  &nbsp;  &nbsp;Add Promotion</a></li>
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
          <div class="col-lg-3"><a href="../staff/staffhome.php"><-Back Home</a></div><div class="col-lg-9"><h4>List Of Product</h4></div><div class="col-lg-3" style="text-align:right"><!-- <button type="button" class="btn btn-warning"  data-toggle="modal" data-target="#myModal">Add Staff</button> --></div>
       
        </div>
        <br>

            <table class="table table-bordered">
            <thead>
              <tr>
                <th>Product ID</th>
                <th>Name</th>
                <th>Image</th>
                <th>Quantity</th>
                <th>Detail</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              
                       <?php

                 $sql="SELECT * FROM product";
                 $result=mysqli_query($conn,$sql);

                 while ($row=mysqli_fetch_assoc($result)) {                

                ?>
                <tr>
                <td><?php echo $row['productid'] ?></td>                 
                <td><?php echo $row['productname']   ?></td>
                <td><img src="../uploads/<?php echo $row['image'] ?>" height="120" width="120"></td>
                <td><?php echo $row['quantity']   ?></td>
                <td><?php echo $row['detail']   ?></td>
                <td><button  onclick="myFunction()" type="button" class="btn btn-warning">update</button></td>
                </tr>
                <?php
              }
                ?>
              
            </tbody>
          </table>

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
