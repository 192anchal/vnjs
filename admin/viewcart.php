<?php
session_start();
if (!isset($_SESSION['admin'])) 
{
    header("location:index.php");
}

?>
<?php
include("connection.php");
$query = "select * from tbl_cart";
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
        .dashbody {
            background-image: linear-gradient(#FB7BA2, #FCE043);

        }

        .dashbord {
            font-size: 26px;
        }
    </style>
</head>


<body>
    <div class="container-fluid">
        <!-- Hecader -->
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
                        <div class="row p-auto" style="background-color: hsl(225, 56%, 62%); ">
                        <h4  class="col-sm-8 ms-auto pt-3"  style="text-align:center; color: black;">Show Cart</h4>
                            <div class="col-sm-1 text-center ms-auto" >
                                <b><a href="logout.php" style="color:black ;">
                                    <i class="fa-solid fa-user "></i> Log out</a></b>
                            </div>
                        </div>
                <!--cart start-->
                <table class="table align-middle mb-0 bg-white">
                    <thead class="bg-warning" >
                        <tr>
                            <th>S.No.</th>
                            <th>User Name</th>
                            <th>Product Name</th>
                            <th>Product image</th>
                            <th>Edit</th>
                            <th>Delete</th>
                            <th>Date</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i=1;
                        while ($row = mysqli_fetch_array($res)) {
                            $user_id = $row['user_id'];
                            $query3="select * from tbl_user where user_id='$user_id'";
                            $res3=mysqli_query($con,$query3);
                            $row3=mysqli_fetch_array($res3);

                            $pro_id = $row['pro_id'];
                            $query2="select * from tbl_product where pro_id='$pro_id'";
                            $res2=mysqli_query($con,$query2);
                            $row2=mysqli_fetch_array($res2);

                        ?> 
                            <tr>
                                <td><?php echo $i; ?></td>
                                <td><?php echo $row3['name'] ?></td>
                                <td><?php echo $row2['pro_name']; ?></td>
                               <td>
                                <img src="product/<?php echo $row2['file']?>" height="100px">
                                </td>
                                  
                                <td><a href="#">edit</a></td>
                                <td><a href="#">delete</a></td>
                                <td><?php echo $row['date']; ?></td>
                            </tr>
                        <?php
                          $i++;
                        }
                        ?>
                    </tbody>

                    <!--cart end-->
            </div>


            <!-- Navbar content -->
        </div>

</body>

</html>