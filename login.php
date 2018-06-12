<?php

session_start();

if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 

   $myusername = $_POST['username'];
   $mypassword = $_POST['password']; 

   if ($myusername === "") {
      ?><script>alert("Please insert your Username")</script>
      <?php
   }elseif ($mypassword ==="") {
      ?><script>alert("Please insert your password")</script>
      <?php
   }else{

   $sql = "SELECT * FROM user WHERE userid = '$myusername' and password = '$mypassword'";
   $result = mysqli_query($conn,$sql);
   $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
   $active = $row['active'];

   $count = mysqli_num_rows($result);

      // If result matched $myusername and $mypassword, table row must be 1 row
   $position = $row['position'];

   if($count == 1) {
      if ($position === 'manager') {
// Store Session Data
   $_SESSION['id'] = $row['userid'];
         header("location: manager/managerhome.php");

      }else{
         header("location: staff/staffhome.php");
            $_SESSION['id'] = $row['userid'];

      }

   }else {
      ?><script>alert("Login fail!! please check your username or password")</script>
      <?php
   }}
}
?>