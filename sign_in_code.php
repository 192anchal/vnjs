<?php
session_start();
$email=$_POST["email"];
//echo $email;
$password=$_POST["password"];
//echo $password;
include("admin/connection.php");
$query="select * from tbl_user where email='$email' and password='$password'";
$res=mysqli_query($con,$query);
if($row=mysqli_fetch_array($res))
{   
    $_SESSION['uid']=$row['user_id'];
    $_SESSION['user']=$email;
    //echo "$email";
    header("location:profile.php?id=$uid");
}
else
{
 header("location:sign_in.php");	
}

?>