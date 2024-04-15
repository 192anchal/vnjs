<?php
session_start();
if(!isset($_SESSION['admin']))
{
  header("location:index.php");
}

?>


<?php
include("connection.php");
$query = "select * from tbl_product";
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css"
     integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A=="
      crossorigin="anonymous" referrerpolicy="no-referrer" />
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
                        <h4  class="col-sm-8 ms-auto pt-3"  style="text-align:center; color: black;">VIEW PRODUCT </h4>
                            <div class="col-sm-1 text-center ms-auto" >
                                <b><a href="logout.php" style="color:black ;">
                                    <i class="fa-solid fa-user "></i> Log out</a></b>
                            </div>
                        </div>

                <!--header end-->
                
                    <div class="row">
                        <div class="col-sm-12 ">
                            <!--Table start-->

                            <table style="border:1px solid black; margin-top: 15px; "class="table align-middle mb-0 bg-white">
                                <thead class="bg-warning">
                                    <tr>
                                        <th>Pruduct Id</th>
                                        <th>Product Name</th>
                                        <th>Category Name</th>
                                        <th>Product Image</th>
                                        <th>Total Unit</th>
                                        <th>Cost Price</th>
                                        <th>Selling Price</th>
                                        <th>Expiry Date</th>
                                        <th>Description</th>
                                        <th>Delete</th>
                                        <th>Edit</th>
                                        <th>Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                    $i = 1;
                                    while ($row = mysqli_fetch_array($res)) {
                                    ?>
                                        <tr>
                                            <td><?php echo $i; ?></td>
                                            <td><?php echo $row['pro_name']; ?></td>

                                            <?php $cid = $row['cat_id'];
                                            $query2 = "select * from tbl_category where cat_id='$cid'";
                                            $res2 = mysqli_query($con, $query2);
                                            if ($row2 = mysqli_fetch_array($res2)) 
                                            {
                                            ?>
                                            <td><?php echo $row2['name']; ?></td>
                                            <?php
                                            }
                                            ?>
                                            <td> <img src="product/<?php echo $row['file']; ?>" height="100px"
                                             width="100px" /></td>
                                            <td><?php echo $row['unit']; ?></td>
                                            <td><?php echo $row['c_price']; ?></td>
                                            <td><?php echo $row['s_price']; ?></td>
                                            <td><?php echo $row['expirydate']; ?></td>
                                            <td><?php echo $row['des']; ?></td>
                                            <td><a href="pro_delete.php?id=<?php echo $row['pro_id']; ?>">delete</a></td>
                                            <td><a href="#?id=<?php echo $row['pro_id']; ?>">edit</a></td>
                                            <td><?php echo $row['date']; ?></td>

                                        </tr>
                                    <?php
                                        $i++;
                                    }

                                    ?>
                                </tbody>
                            </table>

                            <!--Table end-->
                        </div>
                    </div>
                
            </div>
        </div>
    </div>
    </div>
</body>

</html>