
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
            border: 1px solid #ed07ed;
            margin-top: 40px;
        }

        .catbody {
            background-image: linear-gradient(#ea5280, #fca643);
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
                    <h4  class="col-sm-8 ms-auto pt-3"  style="text-align:center; color: black;"> CATEGORY</h4>
                        <div class="col-sm-1 text-center ms-auto" >
                            <b><a href="logout.php" style="color:black ;">
                                <i class="fa-solid fa-user "></i> Log out</a></b>
                        </div>
                    </div>
                <!--header end-->
                <form action="cat_code.php" method="post">
                    <div class="sm-3"></div>
                    <div class="sm-6">
                        <label for="exampleInputEmail1" class="form-label">Category Name</label>
                        <input type="text" name="category"  class="form-control" style="width:30%; background-color: #ea5280; " placeholder="Add Category Name">
                    </div>
                    <div class="sm-3"></div>

                    <br />
                    <button type="submit" class="btn btn-primary" style="margin-bottom: 2%; ">ADD</button>
                </form>
                <table class="table align-middle mb-0 bg-gradient" style="box-shadow: rgb(98, 102, 237);">
                    <thead style="color:rgb(37, 18, 21); background-color:#4353e7;">
                        <tr>
                            <th>S.No</th>
                            <th>Name</th>
                            <th>Date</th>
                            <th>Edit</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Updated Code -->
                        <?php
                                    $i = 1;
                                    while ($row = mysqli_fetch_array($res)) {
                                    ?>
                                        <tr>
                                            <td><?php echo $i; ?></td>
                                            <td><?php echo $row['name']; ?></td>
                                            <td><?php echo $row['date']; ?></td>
                                            <td><a href="cat_edit.php?id=<?php echo $row['cat_id']; ?>">edit</a></td>
                                        </tr>
                                    <?php
                                        $i++;
                                    }
                                    ?>
                        <!-- Updated Code -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>