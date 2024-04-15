<?php
session_start();
if($_SESSION['user']=="")
{
    header('location:sign_in.php');
}
else
{
$pro_id=$_REQUEST['pro_id'];
//echo $pro_id;

$cate_id=$_REQUEST['cate_id'];
//echo $cate_id;

$user=$_SESSION['user'];
//echo $user;

include('admin/connection.php');
$query1="select * from tbl_user where email='$user'";
$res1=mysqli_query($con,$query1);
$row1=mysqli_fetch_array($res1);
$user_id=$row1['user_id'];
//echo $user_id;

 $query2="insert into tbl_cart (user_id,cate_id,pro_id,status,date)values('$user_id','$cate_id','$pro_id','Y',curdate())";

if(mysqli_query($con,$query2)){
header("location:index.php");
}


}

?>