<?php
include '../connect/dbconfig.php';

include '../session/manager_session.php';

$idapp = $_GET['varname'];
$sql="SELECT * FROM appointment WHERE id_app = '$idapp'" ;
$result=mysqli_query($conn,$sql);

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
              <li class="nav-item ">
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
        <div class="container">
          <br><br>
          <div class="row col-lg-12">
            <div class="col-lg-3"><a href="../manager/managerhome.php"><-Back Home</a></div><div class="col-lg-9"><h4>Appointment</h4></div><div class="col-lg-3" style="text-align:right"><!-- <button type="button" class="btn btn-warning"  data-toggle="modal" data-target="#myModal">Add Staff</button> --></div>

          </div>
          <br>

          <form class="form-horizontal" method="post">            <!-- Text input-->

            <?php 
            while ($row=mysqli_fetch_assoc($result)) {                

              ?> 
              <div class="row">

                <div class="col-md-2"></div>
                <div class="col-md-8">
                  <input id="name" name="name" type="text" placeholder="NAME" class="form-control input-md" value="<?php echo $row['name']; ?>" disabled>
                </div>
                <div class="col-md-2"></div>
              </div>
              <div class="row"><br></div>

              <div class="row">

                <div class="col-md-2"></div>
                <div class="col-md-8">
                  <input id="name" name="name" type="text" placeholder="NAME" class="form-control input-md" value="<?php echo $row['date']; ?>" disabled>
                </div>
                <div class="col-md-2"></div>
              </div>
              <div class="row"><br></div>

              <div class="row">

                <div class="col-md-2"></div>
                <div class="col-md-8">
                  <input id="name" name="name" type="text" placeholder="NAME" class="form-control input-md" value="<?php echo $row['time']; ?>" disabled>
                </div>
                <div class="col-md-2"></div>
              </div>

              <div class="row"><br></div>

              <div class="row">

                <div class="col-md-2"></div>
                <div class="col-md-8">
                  <textarea name="comment" rows="10" cols="60" style="overflow-y: scroll;">Comment . . . </textarea>
                </div>
                <div class="col-md-2"></div>
              </div>


              <div class="row"><br></div>
              <div class="row"><br></div>


              <?php
            }
            ?>

            <div class="row">

              <div class="col-md-4"></div>
              <div class="col-md-4">
                <button name="save" class="btn btn-warning" type="submit" >Save </button>
              </div>
              <div class="col-md-4"></div>
            </div>





          </form>

          <br><br>
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
      alert("Appointment is Done");
    }
  </script>

</body>

</html>

<?php

if(isset($_POST['save']))
{
$comment = $_POST['comment'];
$idapp = $_GET['varname'];

  $sqlupdate = "UPDATE appointment SET comment='$comment',status =0 WHERE id_app='$idapp'";

  if ($conn->query($sqlupdate) === TRUE) {
    ?>
    <script type="text/javascript">
   
      window.Location = "../manager/appointment.php"; 
      alert("Data has been save");
    </script>

    <?php
  } else {
    ?>
    <script type="text/javascript">
      alert("<?php echo $conn->error; ?>");

    </script>
    <?php
  }


}

?>