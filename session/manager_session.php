   <?php 


   session_start();
// Store Session Data
   $id = $_SESSION['id'];

   $sql = "SELECT * FROM user WHERE userid = '$id'";
   $result = mysqli_query($conn,$sql);
   $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
   $position = $row['position'];
   $count = mysqli_num_rows($result);


   if ($position == 'manager') {
   	$name = $row['name'];

   }elseif($count == 0){
      header("location: ../index.php");

   }else{
   	header("location: ../index.php");

   }


   ?>