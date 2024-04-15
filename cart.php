<?php
session_start();
if(!isset($_SESSION['user'])){
    header("location:sign_in.php");
}
else{
    $user=$_SESSION['user'];
include('admin/connection.php');
$query1="select * from tbl_user where email='$user'";
$res1=mysqli_query($con,$query1);
$row1=mysqli_fetch_array($res1);
$user_id=$row1['user_id'];
//echo $user_id;

$query2= "select * from tbl_cart where user_id='$user_id'";
$res2=mysqli_query($con,$query2);


?>

<?php

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Vinegar and Jaggery Store</title>
    <link href="assets/css/bootstrap.css" type="text/css" rel="stylesheet" />
    <link href="assets/css/style.css" type="text/css" rel="stylesheet" />
    <link href="assets/images/fav_icon.png" rel="icon" />
    <script src="assets/js/bootstrap.bundle.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    
</head>
<body>
  <div class="container-fluid">
        <!-- Header start -->
        <header>
            
                            <a href="changepass.php"><nav class="navbar navbar-expand-lg navbar-light bg-warning">
                                <div class="container-fluid">
                                    <div class="col-sm-12 text-end">
                <nav class="navbar navbar-expand-lg bg-warning">

                    <div class="container-fluid">

                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                                <li class="nav-link">
                                    <img src="assets/images/1.png" alt="" height="60px" />
                                </li>

                                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                                    <div class="navbar-nav">
                                        <a class="nav-link" aria-current="page" href="index.php">Home</a>
                                        <a class="nav-link" href="about.php">About</a>
                                        <a class="nav-link" href="products.php">Product </a>
                                      <a class="nav-link" aria-current="page" href="profile.php">My profile</a>
                                      <a class="nav-link" href="products.php">My order</a>
                                      <a class="nav-link" href="changepass.php" >Change Password</a>
                                      <a class="nav-link active" href="cart.php"><i class="fa-solid fa-cart-arrow-down" aria-hidden="true"></i>My cart</a>
                                    </div>
                                  </div>



                            </ul>
                            <div class="headphones">
                                <i class="fa-solid fa-headphones"></i>
                            </div>
                            <div class=contact>
                                <a class="nav-link" href="contact.php">CONTACT US</a>
                                <a href="tel:+91 7457000870">+91 7457000870</a>
                            </div>

                            <form class="d-flex" role="search" action="sign_in.php" method="post">
                                <input class="form-control me-1" type="search" placeholder="Search" aria-label="Search"  style="max-height: 40px;">
                                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                    <li class="nav-item"><?php
                                        if(!isset($_SESSION['user'])){
                                            echo '<b> <a class="nav-link reg" href="registration.php">Registration</a></b>';
                                        }
                                        else{
                                            echo '<b> <a  class="btn btn-outline-success indexsign" href="logout.php"   style="max-height: 40px;">LOG_OUT</a></b>';
                                        }
                                        ?>
                                    
                                          
                                    </li>
                                </ul><?php
                                if(!isset($_SESSION['user'])){
                                    echo '<input class="btn btn-outline-success indexsign" type="submit" value="Sign in"  style="max-height: 40px;"/>';
                                }
                                ?>
                            </form>
                        </div>
                    </div>
                </nav>           
                                 </div>
                                </div>
                              </nav>
        </header>
            
<div class="container">
<?php
while($row2=mysqli_fetch_array($res2)){
$pro_id=$row2['pro_id'];

 $query3="select * from tbl_product where pro_id='$pro_id'";

$res3=mysqli_query($con,$query3);
$row3=mysqli_fetch_array($res3);



?>

    <div class="row">
        <div class="col-sm-12">

        <div class="card mb-3">
  <div class="row g-0">
    <div class="col-md-2">
      <img src="admin/product/<?php echo $row3['file']; ?>" class="img-fluid rounded-start w-100 h-100" alt="...">
    </div>
    <div class="col-md-10">
      <div class="card-body">
        <h5 class="card-title"><?php echo $row3['pro_name']; ?></h5>
        <small>Rs.<?php echo $row3['s_price']; ?>/-</small>
        <p class="card-text"><?php echo $row3['des']; ?></p>
        <p class="card-text"><small class="text-muted">Last updated 5 mins ago</small></p>
        
        <div class="mt-2">
                                    <a href="single.php?pro_id=<?php echo $row2['pro_id']; ?>" class="btn btn-primary float-end">Buy now</a>
                                </div>
      </div>
    </div>
  </div>
</div>

        </div>
    </div>

<?php
}
?>
</div>
  </div>
</body>
</html>

<?php
}
?>