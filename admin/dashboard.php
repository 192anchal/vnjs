<?php
session_start();
if(!isset($_SESSION['admin']))
{
  header("location:index.php?msg=3");
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Vinegar and Jaggery Store</title>
    <link href="../assets/css/bootstrap.css" type="text/css" rel="stylesheet" />
    <link href="../assets/css/adminstyle.css" type="text/css" rel="stylesheet" />
    <link href="../assets/images/fav_icon.png" rel="icon" />
    <script src="../assets/js/bootstrap.bundle.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
.dashbody{
    color: hsl(245, 93%, 34%) ;
    
}
.dashbord{

    font-size: 26px;
}
.card-body{
    font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
    padding: 15px;
    border-radius:15px; 
    box-shadow: 5px 5px 50px red;
    background-color: rgb(255, 157, 0);
    border: 0px;

}
.dash_div{
    max-height:50px;
}



    </style>
</head>


 <body style="background:linear-gradient(90deg,rgb(255, 77, 0),rgb(255, 145, 0), rgb(255, 204, 0),rgb(255, 145, 0),rgb(255, 77, 0));" > <!--style="background:linear-gradient(90deg,rgb(255, 77, 0),rgb(255, 145, 0), rgb(255, 204, 0),rgb(255, 145, 0),rgb(255, 77, 0));" -->
    <div class="container-fluid">
        <!-- Hecader -->
        <div class="row">
            <div class="col-sm-2 dashboard bg-warning">  
                <center> 
            <img src="images (4).jpg" alt="" height="80px" width="80px" style="border-radius:60px;" >
            <br/>
                   <b> <h4>Welcome To Admin </h4></b>
                </center>
                <div class="dash_div">
                   <a href="../index.php"><button type="button" class="btn px-5">Home</button></a>
                
                    <ul>
                        <a href="dashboard.php" >
                            <button type="button" class="btn ">
                            <li>Dashboard</li>
                        </button>
                        </a>
                        <a href="category.php">
                            <button type="button" class="btn" >
                            <li>Add Category</li>
                        </button>
                        </a>
                        <a href="product.php">
                            <button type="button" class="btn ">
                            <li>Add product</li>
                        </button>
                        </a>
                        <a href="viewpro.php">
                            <button type="button" class="btn ">
                            <li>View product</li>
                        </button>
                        </a>
                        <a href="viewuser.php">
                            <button type="button" class="btn ">
                            <li>View Users</li>
                        </button>
                        </a>
                        <a href="notification.php">
                            <button type="button" class="btn ">
                            <li>Add Notification</li>
                        </button>
                        </a>
                        <a href="viewcart.php">
                            <button type="button" class="btn ">
                            <li>View Cart</li>
                        </button>
                        </a>
                        <a href="viewcontact.php">
                            <button type="button" class="btn ">
                            <li>View Contact</li>
                        </button>
                        </a>
                        <a href="viewsold.php">
                            <button type="button" class="btn ">
                            <li>View Sold Item</li>
                        </button>
                        </a>
                        <a href="#">
                            <button type="button" class="btn ">
                            <li>Generate Report</li>
                        </button>
                        </a>
                    </ul>
                </div>
            </div>
            <div class="col-sm-10 dashbody">
                <div class="row p-auto" style="background-color: hsl(240, 57%, 61%); ">
                <h4  class="col-sm-8 ms-auto pt-3"  style="text-align:center; color: black;"> DASHBOARD</h4>
                    <div class="col-sm-1 text-center ms-auto" >
                        <b><a href="logout.php" style="color:black ;">
                            <i class="fa-solid fa-user "></i> Log out</a></b>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-sm-4">
                        <div class="card bg-warning" style="width: 20rem; height:10rem;">
                            <div class="card-body">
                                <h5 class="card-title" > <a href="category.php ">Add Category</h5></a>
                                <h6 class="card-subtitle mb-2 text-muted">Category subtitle</h6>
                                <p class="card-text">Some quick example text to build on the Category title and make up the bulk of the card's content.</p>

                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="card bg-warning" style="width: 20rem;">
                            <div class="card-body">
                                <h5 class="card-title"><a href="product.php ">Add Product</h5></a>
                                <h6 class="card-subtitle mb-2 text-muted "  >Category subtitle</h6>
                                <p class="card-text">Some quick example text to build on the Category title and make up the bulk of the card's content.</p>

                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="card bg-warning" style="width: 20rem;">
                            <div class="card-body">
                                <h5 class="card-title"><a href="viewpro.php ">View Product</h5></a>
                                <h6 class="card-subtitle mb-2 text-muted">Category subtitle</h6>
                                <p class="card-text">Some quick example text to build on the Category title and make up the bulk of the card's content.</p>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-sm-4">
                        <div class="card bg-warning" style="width: 20rem;">
                            <div class="card-body">
                                <h5 class="card-title"><a href="viewuser.php ">View User</h5></a>
                                <h6 class="card-subtitle mb-2 text-muted">Category subtitle</h6>
                                <p class="card-text">Some quick example text to build on the Category title and make up the bulk of the card's content.</p>

                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="card bg-warning" style="width:20rem;">
                            <div class="card-body">
                                <h5 class="card-title"><a href="notification.php ">Add Notification</h5></a>
                                <h6 class="card-subtitle mb-2 text-muted">Category subtitle</h6>
                                <p class="card-text">Some quick example text to build on the Category title and make up the bulk of the card's content.</p>

                            </div>
                        </div>

                    </div>
                    <div class="col-sm-4">
                        <div class="card bg-warning" style="width:20rem;">
                            <div class="card-body">
                                <h5 class="card-title"><a href="# ">View Cart</h5></a>
                                <h6 class="card-subtitle mb-2 text-muted">Category subtitle</h6>
                                <p class="card-text">Some quick example text to build on the Category title and make up the bulk of the card's content.</p>

                            </div>
                        </div>
                    </div>

                </div>

                <div class="row mt-3">
                    <div class="col-sm-4">
                        <div class="card bg-warning" style="width: 20rem;">
                            <div class="card-body">
                            <h5 class="card-title"><a href="contact.php ">View Contact</h5></a>
                                <h6 class="card-subtitle mb-2 text-muted">Category subtitle</h6>
                                <p class="card-text">Some quick example text to build on the Category title and make up the bulk of the card's content.</p>

                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="card bg-warning" style="width:20rem;">
                            <div class="card-body">
                                <h5 class="card-title"><a href="viewsold.php ">View Sold Item</h5></a>
                                <h6 class="card-subtitle mb-2 text-muted">Category subtitle</h6>
                                <p class="card-text">Some quick example text to build on the Category title and make up the bulk of the card's content.</p>

                            </div>
                        </div>

                    </div>
                    <div class="col-sm-4">
                        <div class="card bg-warning" style="width: 20rem;">
                            <div class="card-body">
                                <h5 class="card-title"><a href="#">Generate Report</h5></a>
                                <h6 class="card-subtitle mb-2 text-muted">Category subtitle</h6>
                                <p class="card-text">Some quick example text to build on the Category title and make up the bulk of the card's content.</p>

                            </div>
                        </div>
                    </div>

                </div>


            </div>


            <!-- Navbar content -->
        </div>
    
    </body>
</html>