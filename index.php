<?php

session_start();
include("admin/connection.php");

if (isset($_SESSION['user'])) {
    $email = $_SESSION['user'];

    $query3 = "select * from tbl_user where email='$email'";
    $res3 = mysqli_query($con, $query3);
    $row3 = mysqli_fetch_array($res3);
    $user_id = $row3['user_id'];

    $query_c = "select count(*) from tbl_cart where user_id='$user_id'";

    $res_c = mysqli_query($con, $query_c);
    $row_c = mysqli_fetch_array($res_c);
}
//echo $email;


$query = "select * from tbl_category";
$res = mysqli_query($con, $query);

$query2 = "select * from tbl_notification order by not_id desc limit 1";
$res2 = mysqli_query($con, $query2);
$row2 = mysqli_fetch_array($res2);
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
<div id="container-fluid">
    <!-- Navbar start -->

    <div class="container-fluid indexbody ">
        <div class="row sticky-top">
            <div class="col-sm-12 p-0 ">
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
                                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                                        <a class="nav-link" href="about.php">About</a>
                                        <a class="nav-link" href="products.php">Product </a>
                                      <a class="nav-link" aria-current="page" href="profile.php">My profile</a>
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
        <marquee onmouseover="stop();" onmouseout="start();">
            <h3><?php echo $row2['message']; ?></h3>
        </marquee>

        <!-- Navbar end -->

        <!--Slider start-->


        <div class="row">
            <div class="col-sm-12 p-3">
                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="assets/images/1(1).png" class="d-block w-100" alt="image" height="500">
                        </div>
                        <div class="carousel-item">
                            <img src="assets/images/2(1).png" class="d-block w-100" alt="image" height="500">
                        </div>

                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>

        <hr />
        <!--Slider end-->






        <!--Product start-->

        <?php
        while ($row = mysqli_fetch_array($res)) {
        ?>
        <div id="conatiner-fluid">
            <h3 class="text-center" style="font-family: monotype corsiva; font-size: 50px; color: antiquewhite;text-shadow: 2px 2px 5px black;"><?php echo $row['name'] ?></h3>
            <hr />
            <div class="row">
                <?php
                $cat_id = $row['cat_id'];
                $query2 = "select * from tbl_product where cat_id='$cat_id' order by pro_id desc limit 4";
                $res2 = mysqli_query($con, $query2);
                while ($row2 = mysqli_fetch_array($res2)) {

                ?>
                    <div class="col-sm-3 mt-4">
                        <div class="card">
                            <img src="admin/product/<?php echo $row2['file'] ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Rs.<?php echo $row2['s_price'] ?>/-</h5>
                                <p class="fw-bold"><?php echo $row2['pro_name']; ?></p>
                                <small class="card-text d-block"><?php echo $row2['des']; ?></small>
                                <div class="mt-2">
                                    <a href="cart_code.php?pro_id=<?php echo $row2['pro_id']; ?>&cate_id=<?php echo $row2['cat_id']; ?>" class="btn btn-primary">Add to cart</a>
                                    <a href="single.php?pro_id=<?php echo $row2['pro_id']; ?>" class="btn btn-primary float-end">Buy now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>
            <hr />
        <?php
        }
        ?>
</div>
        <br />


        <!--Most Popular start-->

        <!--Most Popular start2-->

        <div class="row">
            <div class="col-sm-4"></div>
            <div class="col-sm-4">
                <center>
                    <h2>Most Popular Pickle</h2>
                </center>
            </div>
            <div class="col-sm-4"></div>
        </div>
        <hr />


        <div class="row">
            <div class="col-sm-3 ">
                <div class="card">
                    <img src="assets/images/img7.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Rs.500/-</h5>
                        <p class="fw-bold">Mango-Pickle</p>
                        <small class="card-text d-block">Some quick example text to build on the card title and make up the bulk of the card's content.</small>
                        <div class="mt-2">
                            <a href="#" class="btn btn-primary">Add to cart</a>
                            <a href="#" class="btn btn-primary float-end">Buy now</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card">
                    <img src="assets/images/img8.jpg"" class=" card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Rs.500/-</h5>
                        <p class="fw-bold">Mango-Pickle</p>
                        <small class="card-text d-block">Some quick example text to build on the card title and make up the bulk of the card's content.</small>
                        <div class="mt-2">
                            <a href="#" class="btn btn-primary">Add to cart</a>
                            <a href="#" class="btn btn-primary float-end">Buy now</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card">
                    <img src="assets/images/img9.jpeg"" class=" card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Rs.400/-</h5>
                        <p class="fw-bold">Mango-Pickle</p>
                        <small class="card-text d-block">Some quick example text to build on the card title and make up the bulk of the card's content.</small>
                        <div class="mt-2">
                            <a href="#" class="btn btn-primary">Add to cart</a>
                            <a href="#" class="btn btn-primary float-end">Buy now</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card">
                    <img src="assets/images/img10.jpg"" class=" card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Rs.400/-</h5>
                        <p class="fw-bold">Mango-Pickle</p>
                        <small class="card-text d-block">Some quick example text to build on the card title and make up the bulk of the card's content.</small>
                        <div class="mt-2">
                            <a href="#" class="btn btn-primary">Add to cart</a>
                            <a href="#" class="btn btn-primary float-end">Buy now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr?>

            <!--Most Popular end2-->

            <!--Special Jaggery start-->

            <div class="row">
                <div class="col-sm-4"></div>
                <div class="col-sm-4">
                    <center>
                        <h2>Special Jaggery</h2>
                    </center>
                </div>
                <div class="col-sm-4"></div>
            </div>
            <hr />

            <div class="row">
                <div class="col-sm-3 ">
                    <div class="card">
                        <img src="assets/images/gal5.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Rs.500/-</h5>
                            <p class="fw-bold">Jaggery</p>
                            <small class="card-text d-block">Some quick example text to build on the card title and make up the bulk of the card's content.</small>
                            <div class="mt-2">
                                <a href="#" class="btn btn-primary">Add to cart</a>
                                <a href="#" class="btn btn-primary float-end">Buy now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card">
                        <img src="assets/images/gal6.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Rs.500/-</h5>
                            <p class="fw-bold">Jaggery</p>
                            <small class="card-text d-block">Some quick example text to build on the card title and make up the bulk of the card's content.</small>
                            <div class="mt-2">
                                <a href="#" class="btn btn-primary">Add to cart</a>
                                <a href="#" class="btn btn-primary float-end">Buy now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card">
                        <img src="assets/images/gal7.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Rs.400/-</h5>
                            <p class="fw-bold">Jaggery</p>
                            <small class="card-text d-block">Some quick example text to build on the card title and make up the bulk of the card's content.</small>
                            <div class="mt-2">
                                <a href="#" class="btn btn-primary">Add to cart</a>
                                <a href="#" class="btn btn-primary float-end">Buy now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card">
                        <img src="assets/images/gal5.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Rs.400/-</h5>
                            <p class="fw-bold">Jaggery</p>
                            <small class="card-text d-block">Some quick example text to build on the card title and make up the bulk of the card's content.</small>
                            <div class="mt-2">
                                <a href="#" class="btn btn-primary">Add to cart</a>
                                <a href="#" class="btn btn-primary float-end">Buy now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <hr />
            <!--Special Jaggery end-->

            <!--Our Certificate start-->


            <div class="row">
                <div class="col-sm-4"></div>
                <div class="col-sm-4">
                    <h2 align="center">Our Certificate</h2>
                </div>
                <div class="col-sm-4"></div>
            </div>

            <hr />

            <div class="row">
                <div class="col-sm-6 ">
                    <img src="assets/images/gal10.jpeg" height="378px" width="100%" />
                </div>
                <div class="col-sm-6">
                    <div class="row">
                        <div class="col-sm-6">
                            <a href="#"><img src="assets/images/certification1.png" height="184px" width="100%" /></a>
                        </div>
                        <div class="col-sm-6">
                            <a href="#"><img src="assets/images/certification2.png" height="184px" width="100%" /></a>
                        </div>
                    </div>
                    <div class="col-sm-12 p-0">
                        <div class="row mt-4">
                            <div class="col-sm-6">
                                <a href="#"><img src="assets/images/certification3.png" height="184px" width="100%" /></a>
                            </div>
                            <div class="col-sm-6">
                                <div class="col-sm-12 p-0">
                                    <a href="#"><img src="assets/images/certification4.png" height="184px" width="100%" /></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr />
            <!--Our Certificate end-->

            <!--Jaggery Praduct start-->


            <div class="row">
                <div class="col-sm-4"></div>
                <div class="col-sm-4">
                    <h2 align="center">Pickle Product</h2>
                </div>
                <div class="col-sm-4"></div>
            </div>

            <hr />
            <div class="row">
                <div class="col-sm-2">
                    <img src="assets/images/img7.jpg" height="200px" width="100%" />
                </div>
                <div class="col-sm-2">
                    <img src="assets/images/img8.jpg" height="200px" width="100%" />
                </div>
                <div class="col-sm-2">
                    <img src="assets/images/img9.jpeg" height="200px" width="100%" />
                </div>
                <div class="col-sm-2">
                    <img src="assets/images/img10.jpg" height="200px" width="100%" />
                </div>
                <div class="col-sm-2">
                    <img src="assets/images/img11.jpg" height="200px" width="100%" />
                </div>
                <div class="col-sm-2">
                    <img src="assets/images/img12.jpg" height="200px" width="100%" />
                </div>
            </div>
            <hr />
            <hr />
            <!--Jaggery Praduct end-->

            <!--Special Bank Offers start-->


            <div class="row">
                <div class="col-sm-4"></div>
                <div class="col-sm-4">
                    <h2 align="center">Bank Offers</h2>
                </div>
                <div class="col-sm-4"></div>
            </div>

            <hr />

            <div class="row">
                <div class="col-sm-3">
                    <a href="#"><img src="assets/images/bank1.jpg" height="300px" width="100%" /></a>
                </div>
                <div class="col-sm-3">
                    <a href="#"><img src="assets/images/bank2.jpg" height="300px" width="100%" /></a>
                </div>
                <div class="col-sm-3">
                    <a href="#"><img src="assets/images/bank3.jpg" height="300px" width="100%" /></a>
                </div>
                <div class="col-sm-3">
                    <a href="#"><img src="assets/images/bank4.jpg" height="300px" width="100%" /></a>
                </div>
            </div>

            <hr />
            <!--Special Bank Offers end-->

            <!--Product of Vinegar start-->


            <div class="row">
                <div class="col-sm-4"></div>
                <div class="col-sm-4">
                    <h2>Special Vinegar Product</h2>
                </div>
                <div class="col-sm-4"></div>
            </div>

            <hr />

            <div class="row">
                <div class="col-sm-6">
                    <img src="assets/images/img4.jpg" height="350px" width="100%" />
                </div>
                <div class="col-sm-6">
                    <div class="row">
                        <div class="col-sm-6">
                            <img src="assets/images/img3.jpeg" height="175px" width="100%" />
                        </div>
                        <div class="col-sm-6">
                            <img src="assets/images/img3.jpg" height="175px" width="100%" />
                        </div>
                    </div>
                    <div class="col-sm-12 p-0">
                        <div class="row">
                            <div class="col-sm-6">
                                <img src="assets/images/img5.jpg" height="175px" width="100%" />
                            </div>
                            <div class="col-sm-6">
                                <div class="col-sm-12 p-0">
                                    <img src="assets/images/img6.jpg" height="175px" width="100%" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr />
            <hr />
            <!--Product of Vinegar end-->

            <!--Sugarcane start-->


            
            <hr />
            <!--Sugarcane end-->

            <!--Special Vinegar Product start-->

            <div class="row">
                <div class="col-sm-4"></div>
                <div class="col-sm-4">
                    <center>
                        <h2> Vinegar Product</h2>
                    </center>
                </div>
                <div class="col-sm-4"></div>
            </div>
            <hr />

            <div class="row">
                <div class="col-sm-6 ">
                    <img src="assets/images/gal10.jpeg" height="300px" width="100%" />
                </div>
                <div class="col-sm-6">
                    <img src="assets/images/gal10.jpg" height="300px" width="100%" />
                </div>
            </div>

            <hr />
    </div>
    <!--Special Vinegar Product end-->
    <hr />


    <!--Footer start-->

    <div class="containter px-4">
        <div class="row ">
            <div class="col-sm-3">
                <h5>ADDRESS</h5>
                <span>
                    N.H.- 58, Lucknow-Kursi Road,
                    <br />
                    Kursi Road, Jankipuram,
                    <br />
                    Lucknow, U.P., 201206 India
                </span>
                <br />
                <i class="fa-solid fa-phone"></i>
                <a href="tel:+91 7457000870">+91 8707032993</a>
                <br />
                <i class="fa-solid fa-envelope"></i>
                <a href="email:viandjast@gmail.com">anchal@gmail.com</a>
            </div>
            <div class="col-sm-3 " rules="cols">
                <h5>Connect with Us</h5>
                <a href="#">Facebook</a>
                <br />
                <a href="#">Twitter</a>
                <br />
                <a href="#">Instagram</a>
                <br />
                <!-- <img src="assets/images/gavai_logo2.png" alt="" height="60px" /> -->
            </div>

            <div class="col-sm-3">
                <h5>Let Us Help You</h5>
                <a href="#">Your Account</a>
                <br />
                <a href="#">100% Purchase Protection</a>
                <br />
                <a href="#">Vinegar and jaggery Store App Download</a>

            </div>
            <div class="col-sm-3">
                <h5>Follow us</h5>
                <a href="#"><img src="assets/images/facebook.png" height="20px" /></a>
                <br />
                <a href="#"><img src="assets/images/twitter.png" height="20px" /></a>
                <br />
                <a href="#"><img src="assets/images/instagram.png" height="20px" /></a>
                <br />
                <a href="#"><img src="assets/images/youtube.png" height="20px" /></a>
                <br />

            </div>
        </div>

        <!--footer end-->
        <hr />
    </div>
</div>
</body>

</html>