<?php
session_start();
if(!isset($_SESSION['user']))
{
    header("location:sign_in.php");
}
$email=$_SESSION['user'];
/*echo $email;*/
include("admin/connection.php");
$query="select * from tbl_user where email='$email'";
$res=mysqli_query($con,$query);
if($row=mysqli_fetch_array($res))
{
	$pp=$row['password'];
}
$op=$_POST['op'];
//echo$op;
$np=$_POST['np'];
//echo$np;
$cnp=$_POST['cnp'];
//echo$cnp;

if($pp==$op){
	if($op==$np){
	 //echo"your old and new password is matched";
	 header("location:changepass.php");
	}
	else if($np==$cnp){
		$query2="update tbl_user set password='$np' where email='$email'";
		mysqli_query($con,$query2);
		session_destroy();
		header("location:sign_in.php");
	}
	else{
		//echo"Your NP and Confirm Password is not matched";
		header("location:changepass.php");
	}
}
else
{
	//echo "your old password and current password is not matched";
	header("location:changepass.php");
}
?>	