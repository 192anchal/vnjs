<?php
session_start();
if(!isset($_SESSION['admin']))
{
  header("location:index.php");
}
?>
<?php
include("connection.php");
$query = "select * from tbl_category";
$res = mysqli_query($con, $query);

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
        .catbox {
            border: 1px solid #FB7BA2;
            margin-top: 40px;
        }

        .catbody {
            background-image: linear-gradient(#FB7BA2, #FCE043);
        }
    </style>
</head>


<body>
    <!--left-header start-->

    <div class="container-fluid catbody">
        <!-- Header -->
        <div class="row">
            <div class="col-sm-2 bg-warning dashboard">
                <center> 
                    <img src="images (4).jpg" alt="" height="70px" width="100px" >
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
                        <div class="row p-auto" style="background-color: hsl(225, 80%, 62%); ">
                        <h4  class="col-sm-8 ms-auto pt-3"  style="text-align:center; color: black;">ADD PRODUCT </h4>
                            <div class="col-sm-1 text-center ms-auto" >
                                <b><a href="logout.php" style="color:black ;">
                                    <i class="fa-solid fa-user "></i> Log out</a></b>
                            </div>
                        </div>
                <!--header end-->
                <form class="row g-3" action="pro_code.php" method="post" enctype="multipart/form-data">
                    <div class="col-sm-3"></div>
                    <div class="col-md-3">
                        <label for="validationDefault01" class="form-label">Product name</label>
                        <input type="text" class="form-control" id="validationDefault01" name="pro_name" required>
                    </div>
                    <div class="col-md-3">
                        <label for="validationDefault02" class="form-label">Product Image</label>
                        <input type="file" class="form-control" id="validationDefault02" name="file" required>
                    </div>
                    <div class="col-sm-3"></div>

                    <div class="col-sm-3"></div>
                    <div class="col-md-3">
                        <label for="validationDefault04" class="form-label">Category</label>
                        <select class="form-select" id="validationDefault04" name="cat" required>
                            <option selected disabled value="">Choose...</option>
                            <?php
                            while ($row = mysqli_fetch_array($res)) {
                            ?>
                                <option value="<?php echo $row['cat_id']; ?>"><?php echo $row['name']; ?></option>
                            <?php
                            }
                            ?>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <label for="validationDefault02" class="form-label">Total unit</label>
                        <input type="number" class="form-control" id="validationDefault02" name="unit" required>
                    </div>
                    <div class="col-sm-3"></div>

                    <div class="col-sm-3"></div>
                    <div class="col-md-3">
                        <label for="validationDefault01" class="form-label">Cost Price</label>
                        <input type="number" class="form-control" id="validationDefault01" name="cp" required>
                    </div>
                    <div class="col-md-3">
                        <label for="validationDefault02" class="form-label">Selling Price</label>
                        <input type="number" class="form-control" id="validationDefault02" name="sp" required>
                    </div>
                    <div class="col-sm-3"></div>
                    <div class="col-sm-3"></div>
                    <div class="col-md-3">
                        <label for="validationDefault01" class="form-label">Expiry Date</label>
                        <input type="date" class="form-control" id="validationDefault01" name="expirydate" required>
                    </div>
                    <div class="col-md-3">
                        <label class="form-label" for="textAreaExample">Description</label>
                        <textarea class="form-control" id="textAreaExample1" name="des"></textarea>

                    </div>
                    <div class="col-sm-3"></div>

                    <div class="col-sm-3"></div>
                    <div class="col-sm-6">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
                            <label class="form-check-label" for="invalidCheck2">
                                Agree to terms and conditions
                            </label>
                        </div>
                    </div>
                    <div class="col-sm-3"></div>

                    <div class="col-sm-3"></div>
                    <div class="col-6">
                        <button class="btn btn-primary" type="submit">Add Product</button>
                    </div>
                    <div class="col-sm-3"></div>

                </form>
            </div>
        </div>
    </div>
    </div>

</body>
</html>