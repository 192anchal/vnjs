<?php
$not_id=$_REQUEST['id'];
//echo $not_id;
include("connection.php");
 $query="delete from tbl_notification where not_id='$not_id'";
mysqli_query($con,$query);
header("location:notification.php");





?>