<?php
include '../connect/dbconfig.php';

include '../session/manager_session.php';


?>
<?php
 

if(isset($_POST['update']))
{
  $var_value = $_GET['varname'];

  $name = $_POST['name'];
  $address = $_POST['addr'];
  $notel = $_POST['notel'];
  $email = $_POST['email'];



  $sql = "UPDATE user SET name='$name',address = '$address' , notel = '$notel' , email = '$email' WHERE userid='".$var_value."'";

  if ($conn->query($sql) === TRUE) {
    ?>
    <script type="text/javascript">
      alert("Data has been Update");
window.Location = "updatestaff.php?varname=s002";
    </script>

    <?php
  } else {
    ?>
    <script type="text/javascript">
      alert("Error");
    </script>
    <?php
  }
}
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

  <?php

  include 'addstaff.php';

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
              <li class="nav-item ">
                <a class="nav-link" href="../manager/viewreport.php">View Report</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="#">Staff Menu</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../manager/appointment.php">Appointment</a>
              </li>
            </ul>
          </div>
        </nav>
      </div>

      <div class="col-10" style="background-color: white; text-align: center;">
        <div class="container">
          <br><br>
          <div class="row col-lg-12">
            <div class="col-lg-3"><a href="../manager/staffmenu.php"><-Back</a></div><div class="col-lg-6"><h4>Information Of Staff</h4></div><div class="col-lg-3" style="text-align:right"></div><!-- <button type="button" class="btn btn-warning"  data-toggle="modal" data-target="#myModal">Add Staff</button> --></div>

          </div>
          <br>

          <form class="form-horizontal" method="post">        
            <?php
            $var_value = $_GET['varname'];

            $sql1="SELECT * FROM user WHERE userid= '".$var_value."'";
            $result1=mysqli_query($conn,$sql1);

            while ($row=mysqli_fetch_assoc($result1)) {
              ?>
              <div class="row">

                <div class="col-md-2"></div>
                <div class="col-md-8">
                  <input id="iduser" name="iduser" type="text" placeholder="ID USER" value="<?php echo $row['userid']; ?>" class="form-control input-md" disabled>
                </div>
                <div class="col-md-2"></div>
              </div>

              <div class="row"><br></div>

              <div class="row">

                <div class="col-md-2"></div>
                <div class="col-md-8">
                  <input id="username" name="name" type="text" placeholder="USER NAME" value="<?php echo $row['name']; ?>" class="form-control input-md">
                </div>
                <div class="col-md-2"></div>
              </div>

              <div class="row"><br></div>

              <div class="row">

                <div class="col-md-2"></div>
                <div class="col-md-8">
                  <input id="address" name="addr" type="text" placeholder="ADDRESS" value="<?php echo $row['address']; ?>" class="form-control input-md">
                </div>
                <div class="col-md-2"></div>
              </div>

              <div class="row"><br></div>

              <div class="row">

                <div class="col-md-2"></div>
                <div class="col-md-8">
                  <input id="notel" name="notel" type="text" placeholder="No - TEL" value="<?php echo $row['notel']; ?>" class="form-control input-md">
                </div>
                <div class="col-md-2"></div>
              </div>

              <div class="row"><br></div>

              <div class="row">

                <div class="col-md-2"></div>
                <div class="col-md-8">
                  <input id="email" name="email" type="text" placeholder="EMAil" value="<?php echo $row['email']; }?>" class="form-control input-md">
                </div>
                <div class="col-md-2"></div>
              </div>

              <div class="row"><br></div>

              <div class="row">

                <div class="col-md-4"></div>
                <div class="col-md-4">
                <button name="update" class="btn btn-warning" type="submit" >Update </button>
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

    </body>

    </html>



