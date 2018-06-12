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
                  <li  class="nav-item"><a class="nav-link" href="../staff/listproduct.php"> &nbsp;  &nbsp;  &nbsp;  &nbsp;List Product</a></li>
                  <li  class="nav-item active"><a class="nav-link" href="../staff/addproduct.php"> &nbsp;  &nbsp;  &nbsp;  &nbsp;Add Product</a></li>
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
            <div class="col-lg-3"><a href="../staff/staffhome.php"><-Back Home</a></div><div class="col-lg-9"><h4>Add Product</h4></div><div class="col-lg-3" style="text-align:right"><!-- <button type="button" class="btn btn-warning"  data-toggle="modal" data-target="#myModal">Add Staff</button> --></div>

          </div>
          <br>

          <form class="form-horizontal" method="post" enctype="multipart/form-data">    
            <!-- Text input-->
            <div class="row">


              <div class="col-md-2"></div>
              <div class="col-md-8">
                <input id="proid" name="proid" type="text" placeholder="PRODUCT ID" class="form-control input-md">
              </div>
              <div class="col-md-2"></div>
            </div>

            <div class="row"><br></div>

            <div class="row">

              <div class="col-md-2"></div>
              <div class="col-md-8">
                <input id="proname" name="proname" type="text" placeholder="PRODUCT NAME" class="form-control input-md">
              </div>
              <div class="col-md-2"></div>
            </div>

            <div class="row"><br></div>

            <div class="row">

              <div class="col-md-2"></div>
              <div class="col-md-8">IMAGE
                <input id="fileToUpload" name="fileToUpload" type="file" placeholder="IMAGE" class="form-control input-md">
              </div>
              <div class="col-md-2"></div>
            </div>

            <div class="row"><br></div>

            <div class="row">

              <div class="col-md-2"></div>
              <div class="col-md-8">
                <input id="proquantity" name="proquantity" type="text" placeholder="QUANTITY" class="form-control input-md">
              </div>
              <div class="col-md-2"></div>
            </div>

            <div class="row"><br></div>

            <div class="row">

              <div class="col-md-2"></div>
              <div class="col-md-8">
              <input id="proquantity" name="price" type="text" placeholder="PRICE" class="form-control input-md">
              </div>
              <div class="col-md-2"></div>
            </div>

            <div class="row"><br></div>

            <div class="row">

              <div class="col-md-2"></div>
              <div class="col-md-8">
                <input id="prodetail" name="prodetail" type="text" placeholder="DETAIL" class="form-control input-md">
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
  $proid = $_POST['proid'];
  $proname = $_POST['proname'];
  $proquantity = $_POST['proquantity'];
  $prodetail = $_POST['prodetail'];
  $price = $_POST['price'];

  $target_dir = "../uploads/";
  $imagesname = basename($_FILES["fileToUpload"]["name"]);
  $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
  $uploadOk = 1;
  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
        //echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
        //echo "File is not an image.";
    $uploadOk = 0;
  }

// if (file_exists($target_file)) {
//     //echo "a";
//     $uploadOk = 0;
// }
// Check file size
// if ($_FILES["fileToUpload"]["size"] > 500000) {
//     echo "saiz more than 500000";
//     $uploadOk = 0;
// }
// Allow certain file formats
  if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
  } else {
    echo "Sorry, there was an error uploading your file.";
    echo $target_file;
  }
}



if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}


$sql = "INSERT INTO product (`productid`, `productname`, `image`, `quantity`, `price`, `detail`)
VALUES ('".$proid."', '".$proname."', '".$imagesname."', '".$proquantity."','".$price."', '".$prodetail."')";

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