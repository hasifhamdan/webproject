<?php
include 'connect/dbconfig.php';
?>
<?php
$id = $_GET['id'];
$sql = "SELECT * FROM `order` WHERE name='$id'";
$result=mysqli_query($conn,$sql);

$row=mysqli_fetch_assoc($result); 
$orderid = $row['orderid'];
$name = $row['name'];

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

  <style>
.aaa {
    background-color: #19F8F1;
    border: none;
    color: black;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}
</style>


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
    <div class="container" style="background-color:white;">
    <div class="container col-lg-12">

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

          <!-- Text input-->
          <div class="container form-group row">
            <div class="col-md-3"></div>
            <label class="col-md-3 control-label" for="textinput">Order Id :</label>  
            <div class="col-md-6">
              <input id="textinput" name="addr" type="text" placeholder="" class="form-control input-md" value="<?php echo $orderid;?>" disabled>
            </div>
          </div>

          <p><br><br></p>

        </fieldset>
      </form> <h1>Your Cart</h1>

       <table class="table table-bordered" style="background-color:#F5F3F5;">
            <thead style="background-color:cyan;">
              <tr>
                <th>Product</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              
                       <?php

                 $sql2="SELECT * FROM orderlist WHERE orderid = '$orderid' AND name='$name'";
                 $result2=mysqli_query($conn,$sql2);

                 while ($row2=mysqli_fetch_assoc($result2)) {   
                 $idorderlist = $row2['id'];     

                ?>
                <tr>
                <td><?php echo $row2['productname']   ?></td>
                <td><?php echo $row2['quantity'] ?></td>
                <td>Rm <?php echo $row2['price']   ?></td>
                <td><a type="button" class="btn btn-warning" href="deleteorder.php?id=<?php echo $idorderlist ?>&nameuser=<?php echo $name ?>">Delete</a></td>
                </tr>
               
                <?php
              }
                ?>
              
            </tbody>
          </table>
           <div class="col-lg-12 col-md-12 mb-12">
                <a type="button" class="btn aaa btn-block" href="print.php?id=<?php echo $id ?>">Done</a><br></div>

              </div>
          <p><br><br></p>
      <h1>Our Product</h1>

       <table class="table table-bordered" style="background-color:#F5F3F5;">
            <thead style="background-color:cyan;">
              <tr>
                <th>Name</th>
                <th>Image</th>
                <th>Price</th>
                <th>Detail</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              
                       <?php

                 $sql1="SELECT * FROM product";
                 $result1=mysqli_query($conn,$sql1);

                 while ($row1=mysqli_fetch_assoc($result1)) {                 

                ?>
                <tr>
                <td><?php echo $row1['productname']   ?></td>
                <td><img src="uploads/<?php echo $row1['image'] ?>" height="120" width="120"></td>
                <td>Rm <?php echo $row1['price']   ?></td>
                <td><?php echo $row1['detail']   ?></td>
                <td><a type="button" class="btn btn-warning" href="ordershow.php?varname=<?php echo $row1['productname'] ?>&price=<?php echo $row1['price'] ?>&username=<?php echo $name ?>&id=<?php echo $orderid          ?>">Cart</a></td>
                </tr>
               
                <?php
              }
                ?>
              
            </tbody>
          </table>

    </div>
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

