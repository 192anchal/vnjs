<?php
$pro_name=$_POST['pro_name'];
//echo $pro_name;
$file=$_FILES['file']['name'];
//echo $pic;
$size=$_FILES['file']['size'];
//echo $size;
$type=$_FILES['file']['type'];
//echo $type;
$tmp_name=$_FILES['file']['tmp_name'];
//echo $tmp_name;
$unit=$_POST['unit'];
//echo $unit;
$c_price=$_POST['cp'];
$cat=$_POST['cat'];
//echo $c_price;
$s_price=$_POST['sp'];
//echo $s_price;
$expirydate=$_POST['expirydate'];
//echo $expirydate;
$description=$_POST['des'];
//echo $description;

$location="product/";
include("connection.php");
$query="insert into tbl_product(pro_name,cat_id,file,unit,c_price,s_price,expirydate,des,date)
values('$pro_name','$cat','$file','$unit','$c_price','$s_price','$expirydate','$description',now())";
mysqli_query($con,$query);

move_uploaded_file($tmp_name,$location.$file);
header("location:product.php");
?>