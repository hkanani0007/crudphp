<?php
include "hedar.php";
include "db.php";

$id = $_GET['ids'];
$sql = "DELETE FROM cru WHERE id = '$id'";

mysqli_query($conn,$sql);
header("location:index.php");
?>