<?php
include 'connect/dbconfig.php';

$name = $_GET['varname'];
$price = $_GET['price'];
$id = $_GET['id'];
$username = $_GET['username'];

?>
<?php

if(isset($_POST['order']))
{
  $quantity = $_POST['quantity'];
  $totalprice = $price * $quantity;

  $sqlorder = "INSERT INTO `orderlist` (`orderid`, `name`, `productname`, `quantity`,`price`) VALUES ('".$id."', '".$username."', '".$name."', '".$quantity."', '".$totalprice."')";

  if ($conn->query($sqlorder) === TRUE) {
header("Location: order2.php?id=$username");

    ?>
    <script type="text/javascript">
      alert("order Success");
    </script>

    <?php
  } else {
    ?>
    <script type="text/javascript">
      alert("<?php  echo $sqlorder ?>");
    </script>
    <?php
  }

  mysqli_close($conn);

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
    <link href="vendor/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/shop-homepage.css" rel="stylesheet">



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
          <ul class="navbar-nav ml-auto">
            <li class="nav-item ">
              <a class="nav-link" href="index.php">Home
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.php">About<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="#">Product<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="modal" data-target="#myModal">login</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
    <div class="container" style="background-color:white;"><div class="col-lg-12">

      <form class="form-horizontal" method="post">
        <p><br></p>
        <fieldset>

          <!-- Form Name -->
          <legend style="text-align:center;">Form Order</legend>
          <div class="col-md-12 row">
            <div class="col-md-3"></div>
          </div>

          <!-- Text input-->
          <div class="container form-group row">
            <div class="col-md-3"></div>
            <label class="col-md-3 control-label" for="textinput">Name :</label>  
            <div class="col-md-6">
              <input id="textinput" name="name" type="text" placeholder="" class="form-control input-md" value="<?php echo $name;?>" disabled>
            </div>
          </div>

          <div class="container form-group row">
            <div class="col-md-3"></div>
            <label class="col-md-3 control-label" for="textinput">Price :</label>  
            <div class="col-md-6">
              <input id="textinput" name="price" type="text" placeholder="" class="form-control input-md" value="Rm <?php echo $price;?>" disabled>
            </div>
          </div>

            <div class="container form-group row">
            <div class="col-md-3"></div>
            <label class="col-md-3 control-label" for="textinput">Quantity :</label>  
            <div class="col-md-6">
              <input id="textinput" name="quantity" type="number" placeholder="" class="form-control input-md">
            </div>
          </div>

          <!-- Text input-->
      
          <p><br><br></p>
          <div class="container col-lg-12 row">
          <div class="col-lg-7"></div>
          <button name="add" class="btn btn-warning" type="submit" >Cancel </button>&nbsp;
          <button name="order" class="btn btn-warning" type="submit" >Order </button>
        </div>
          <p><br><br></p>

          <p><br><br><br></p>


        </fieldset>
      </form>

       
    </div></div>
    <!-- /.container -->
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

