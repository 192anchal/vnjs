<?php
session_start();
if(!isset($_SESSION['user'])){
    header("location:sign_in.php");
}
$email=$_SESSION['user'];
//echo "$email";
$uid=$_SESSION['uid'];
include("admin/connection.php");
$query="select * from tbl_user where user_id='$uid'";
$res=mysqli_query($con,$query);
$row=mysqli_fetch_array($res);
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
    <style>  
body{
    background-color:pink;
} 
.profilcard{
    height:400px;
}

    </style>
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
                                      <a class="nav-link active" aria-current="page" href="profile.php">My profile</a>
                                      <a class="nav-link" href="products.php">My order</a>
                                      <a class="nav-link" href="changepass.php" >Change Password</a>
                                      <a class="nav-link" href="cart.php"><i class="fa-solid fa-cart-arrow-down" aria-hidden="true"></i>My cart</a>
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
            
            <div class="col-sm-12">
               <h2><center>WELCOME TO USER</center></h2> 
                <div class="row pb-0">
                    <h4 align="center">PROFILE</h4>
                    <div class="col-sm-12 text-end">
                    
                    </div>
                </div>
                <!--card start-->

                <div class="row profilecard pt-3">
            
                <div class="col-sm-3"></div>
                <div class="col-sm-6">
                        <div class="card">
                            <div class="card-body text-center bg-info">
                                <img src="assets/images/dummy-user.png" alt="" style="border:1px solid grey;border-radius:50%;background:rgb(93, 93, 229);">
                                <h5 class="card-title mt-3"><b><?php echo $row['name']; ?></b></h5>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="container">
                                            <div class="row">
                                            <div class="col-sm-6">
                                                <b>Email : </b><?php echo $row['email']; ?>
                                            </div>
                                            <div class="col-sm-6">
                                            <b>Mobile : </b><?php echo $row['mobile']; ?>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="container">
                                            <div class="row">
                                            <div class="col-sm-6">
                                                <b>City : </b><?php echo $row['city']; ?>
                                            </div>
                                            <div class="col-sm-6">
                                            <b>Address : </b><?php echo $row['address']; ?>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3"></div>       

                </div>
            
            </div>

        
    </div>
</body>

</html>