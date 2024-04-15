<?php
$name=$_POST["name"];
//echo $name;
$email=$_POST["email"];
//echo $email;
$mobile=$_POST["mobile"];
//echo $mobile;
$password=$_POST["password"];
//echo $password;
$city=$_POST["city"];
//echo $city;
$address=$_POST["address"];
//echo $address;
include("admin/connection.php");
$query="insert into tbl_user(name,email,mobile,password,city,address,dor)values('$name','$email','$mobile','$password','$city','$address',now())";

mysqli_query($con,$query);

header("location:index.php");
?>