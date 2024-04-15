<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header("location:index.php");
}
?>
<?php
$con=mysqli_connect("localhost","root","","vnjs");
$query="select * from tbl_notification";
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
.dashbody {
            background-image: linear-gradient(#FB7BA2, #FCE043);
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
                        <div class="row p-auto" style="background-color: hsl(225, 80%, 62%); ">
                        <h3  class="col-sm-8 ms-auto pt-3"  style="text-align:center; color: black;">NOTIFICATION</h3>
                            <div class="col-sm-1 text-center ms-auto" >
                                <b><a href="logout.php" style="color:black ;">
                                    <i class="fa-solid fa-user "></i> Log out</a></b>
                            </div>
                        </div>
                <h3 align="center" style="margin-right: 20px;">ADD NOTIFICATION</h3>
                <form action="noti_code.php" method="post">
                    <div class="row">
                        <div class="col-sm-4"></div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="comment">
                                    <h5>Comment:</h5>
                                </label>
                                <textarea class="form-control" name="noti"></textarea>
                            </div>
                        </div>
                        <div class="col-sm-4"></div>
                    </div>
                    <br />
                    <div class="row">
                        <div class="col-sm-4"></div>
                        <div class="col-sm-4">
                            <input type="submit" value="ADD" style="height: 40px; width: 120px; background-color: #6060f0; margin-bottom: 20px; " />
                        </div>
                        <div class=" col-sm-4">
                        </div>
                    </div>
                    <!--show notification start-->
                    <table class="table align-middle mb-0 bg-white">
                    <thead class="bg-warning">
                            <tr>
                                <th>S.No.</th>
                                <th>Message</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $i=1;
                            while($row=mysqli_fetch_array($res)){
                           ?>
                                <tr>
                              <td><?php echo $i;?></td>
                              <td><?php echo $row['message']; ?></td>
                              <td><a href="#">edit</a></td>
                              <td><a href="noti_del.php?id=<?php echo $row['not_id'] ?>">delete</a></td>
                           </tr>
                           <?php
                        $i++;   
                        }
                           ?>
                        </tbody>
                        <!--show notification end-->
                </form>


            </div>


            <!-- Navbar content -->
        </div>

</body>

</html>