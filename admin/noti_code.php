<?php
$mess=$_POST['noti'];
//echo $n1;
include("connection.php");
$query="insert into tbl_notification(message,date)values('$mess',now())";
mysqli_query($con,$query);
header("location:notification.php");

?>