<?php
$user=$_POST['user'];
$pro=$_POST['pro'];
$cat=$_POST['cat'];
$unit=$_POST['unit'];
$amount=$_POST['amount'];
include('admin/connection.php');
$query="insert into tbl_order (user_id,cate_id,pro_id,quantity,amount,order_date)values('$user','$cat','$pro','$unit','$amount',now())";

if(mysqli_query($con,$query)){
$query2="update tbl_product set unit=unit-$unit where pro_id='$pro'";
mysqli_query($con,$query2);
header('location:index.php');

}


?>