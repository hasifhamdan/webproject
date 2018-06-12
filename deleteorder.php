<?php
include 'connect/dbconfig.php';

$id = $_GET['id'];
$name = $_GET['nameuser'];

$sql = "DELETE FROM `orderlist` WHERE id='$id'";

if (mysqli_query($conn, $sql)) {
header("Location: order2.php?id=$name");
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}

mysqli_close($conn)

?>