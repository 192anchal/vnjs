<?php
$cat_name=$_POST['category'];
//echo $cat_name;
include("connection.php");
$query="insert into tbl_category(name,date) values('$cat_name',now());";
mysqli_query($con,$query);
header("location:category.php");
?>