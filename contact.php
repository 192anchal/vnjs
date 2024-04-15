<?php

session_start();
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
</head>

<body>

    <!-- Navbar start -->

    <div class="container-fluid">
        <div class="row ">
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
                                        <a class="nav-link" aria-current="page" href="index.php">Home</a>
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
                                <a class="nav-link active" href="contact.php">CONTACT US</a>
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

        
        <!-- Navbar end -->
        <h1 align="center">CONTACT US</h1>
        <form action="contact_code.php" method="post">
            <div class="row">
                <div class="col-sm-4"></div>
                <div class="col-sm-4">
                    <div class="mb-3">
                        <label class="form-label">Name</label>
                        <input type="text" name="name" class="form-control">
                    </div>
                </div>
                <div class="col-sm-4"></div>
            </div>

            <div class="row">
                <div class="col-sm-4"></div>
                <div class="col-sm-4">
                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" name="email" class="form-control">
                    </div>
                </div>
                    <div class="col-sm-4"></div>
            </div>

                <div class="row">
                    <div class="col-sm-4"></div>
                    <div class="col-sm-4">
                        <div class="mb-3">
                            <label class="form-label">Mobile</label>
                            <input type="number" name="mobile" class="form-control">
                        </div>
                    </div>
                        <div class="col-sm-4"></div>
                </div>

                    <div class="row">
                        <div class="col-sm-4"></div>
                        <div class="col-sm-4">
                            <div class="mb-3">
                                <label class="form-label">Message</label>
                                <textarea class="context" name="message"></textarea>
                            </div>
                        </div>
                            <div class="col-sm-4"></div>
                    </div>

                        <div class="row">
                            <div class="col-sm-5"></div>
                            <div class="col-sm-2">
                                <input type="submit" value="submit" />
                            </div>
                            <div class="col-sm-5"></div>
                        </div>
        </form>
        <!--contact start-->


        <!--contact start-->

        <!--Footer start-->
        <hr />

        <div class="row">
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
                <a href="tel:+91 7457000870">+91 7457000870</a>
                <br />
                <i class="fa-solid fa-envelope"></i>
                <a href="email:viandjast@gmail.com">viandjast@gmail.com</a>
            </div>
            <div class="col-sm-3 " rules="cols">
                <h5>Connect with Us</h5>
                <a href="#">Facebook</a>
                <br />
                <a href="#">Twitter</a>
                <br />
                <a href="#">Instagram</a>
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
    </div>
    <!--footer end-->
    <hr />

</body>

</html>