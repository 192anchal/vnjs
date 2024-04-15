<?php
session_start();
if(!isset($_SESSION['admin']))
{
  header("location:index.php");
}

?>

<?php
include('connection.php');
$query="select * from tbl_order";
$res=mysqli_query($con,$query);

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
    background-image: linear-gradient(#FCE043,#FB7BA2, #FCE043);
}
    </style>
</head>

<body>
    <div class="container-fluid">
        <!-- Hecader -->
        <div class="row">
            <div class="col-sm-2 bg-info dashboard">
                <div id="user-icon">
                    <a href="#"><i class="fa-solid fa-user"></i></a>
                </div>
                <center>
                    <h5>Welcome To Admin</h5>
                </center>
                <a href="../index.php"><button type="button" class="btn btn-success px-5 ">Home</button></a>
                <div class="dash_div">
                    <ul>
                        <a href="dashboard.php">
                            <li>Dashboard</li>
                        </a>
                        <a href="category.php">
                            <li>Add Category</li>
                        </a>
                        <a href="product.php">
                            <li>Add product</li>
                        </a>
                        <a href="viewpro.php">
                            <li>View product</li>
                        </a>
                        <a href="viewuser.php">
                            <li>View Users</li>
                        </a>
                        <a href="notification.php">
                            <li>Add Notification</li>
                        </a>
                        <a href="viewcart.php">
                            <li>View Cart</li>
                        </a>
                        <a href="viewcontact.php">
                            <li>View Contact</li>
                        </a>
                        <a href="viewsold.php">
                            <li>View Sold Item</li>
                        </a>
                        <a href="#">
                            <li>Generate Report</li>
                        </a>
                    </ul>
                </div>
            </div>
            <div class="col-sm-10 dashbody">
                <div class="row bg-success  pb-4">
                
                    <div class="col-sm-12 text-end">
                        <i class="fa-solid fa-user"></i>
                        <a href="logout.php"> Log out</a>
                    </div>
                </div>
                <h3 align="center">View Sold Item</h3>
                <table class="table align-middle mb-0 bg-white">
                    <thead class="bg-light">
                    <th>S.No.</th>
                    <th>User Name</th>
                    <th>Product Name</th>
                    <th>Product images</th>
                    <th>Unit</th>
                    <th>Delete</th>
                    <th>Edit</th>
                    <th>Date</th>
                 </thead>
                 <tbody>
                    <?php
                    $i=1;
                    while($row=mysqli_fetch_array($res)){
                        $user_id = $row['user_id'];
                        $pro_id = $row['pro_id'];
                        $query3 = "select * from tbl_product where pro_id='$pro_id'";
                        $res3 = mysqli_query($con, $query3);
                        $row3 = mysqli_fetch_array($res3);
                    ?>
                  <tr>
                    <td><?php echo $i; ?></td>
                    <?php

                    $query2="select * from tbl_user where user_id='$user_id'";
             
                     $res2=mysqli_query($con,$query2);
                    $row2=mysqli_fetch_array($res2);

                    ?>
                    <td><?php echo $row2['name']; ?></td>
                    <td><?php echo $row3['pro_name']; ?></td>
                    <td style="max-width:300px;"><img src="product/<?php echo $row3['file'];?> " class="w-100"/></td>
                    <td><?php echo $row['quantity']; ?></td>
                    <td><a href="#">delete</a></td>
                    <td><a href="#">edit</a></td>
                    <td><?php echo $row['order_date']; ?></td>
                    
                    
                  </tr>
                  <?php
                  $i++;
                    }
                    ?>

                  </tbody>
                </table>
                


            </div>
            <!-- Navbar content -->
        </div>
    
    </body>
</html>