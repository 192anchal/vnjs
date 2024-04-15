<?php
$id=$_POST['id'];
//echo $id;
$name=$_POST['name'];
//echo $name;
 include('connection.php');
$query="update tbl_category set name='$name' where cat_id='$id'";
 
 mysqli_query($con,$query);
 header('location:category.php');



?>