<?php
$pro_id=$_REQUEST['id'];
//echo $pro_id;
include("connection.php");
$query="select * from tbl_product where pro_id='$pro_id'";
$res=mysqli_query($con,$query);
if($row=mysqli_fetch_array($res))
{
$filename=$row['file'];
}
$location="product/";
$query2="delete from tbl_product where pro_id='$pro_id'";
mysqli_query($con,$query2);
unlink($location.$filename);
header("location:view.php");
?>