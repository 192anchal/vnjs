<?php
session_start();
if(!isset($_SESSION['user']))
{
    header("location:sign_in.php");
}
else{
    $pro_id =$_REQUEST['pro_id'];
include('admin/connection.php');
$query="select * from tbl_product where pro_id='$pro_id'";
$res=mysqli_query($con,$query);
$row=mysqli_fetch_array($res);

$user=$_SESSION['user'];
//echo $user;
$query2="select * from tbl_user where email='$user'";
$res2=mysqli_query($con,$query2);
$row2=mysqli_fetch_array($res2);



?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Vinegar_and_Jaggery_Storef</title>
    <link rel="stylesheet" href=" assets/css/bootstrap.css" type="text/css"/>

  </head>
  <body>
   <div class="container-fluid">
<!--user row-->


    <div class="container">
    <div class="row">
        <div class="col-sm-12">

        <div class="card mb-3 mt-4" >
  <div class="row g-0">
    <div class="col-md-2">
      <img src="admin/product/<?php echo $row['file'];?>" class="img-fluid rounded-start w-100 h-100" alt="...">
    </div>
    <div class="col-md-10">
      <div class="card-body">
        <h5 class="card-title"><?php echo $row['pro_name'];?></h5>
        <p class="card-text"><?php echo $row['des'];?></p>
       <h4>Rs. <?php echo $row['s_price']; ?> /-</h4>
       <small>Sippining Address : - <?php echo $row2['address'];?>,<?php echo $row2['city'];?></small><br/><br/>
       <input type="radio" name="" id="" checked>  Chash on Delevery
      

       <form action="single_code.php" method="post">
        <input type="hidden" name="user" value="<?php echo $row2['user_id']?>"/>
        <input type="hidden" name="pro" value="<?php echo $row['pro_id'];?>" id=""/>
        <input type="hidden" name="cat" value="<?php echo $row['cat_id']?>"/>
        <input type="hidden" name="unit" value="1"/>
        <input type="hidden" name="amount" value="<?php echo $row['s_price']?>"/>
       <button  type="submit"class="btn btn-danger float-end">Place order</button>
       </form>
      </div>
    </div>
  </div>
</div>


        </div>
    </div>
    </div>
    
    <!--user row-->

   </div>
  </body>
</html>
<?php
}
?>