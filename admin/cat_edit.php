<?php
$id=$_REQUEST['id'];
//echo $id;
include('connection.php');
$query="select * from tbl_category where cat_id='$id'";
$res=mysqli_query($con,$query);
if($row=mysqli_fetch_array($res))
{

?>
<html>
    <head>
    </head>
    <body>
        <div class="container">
        <form action="cat_update.php" method="post">
         <div class="row">
            <div class="col-sm-4"></div>
            <div class="col-sm-4">
             Name
         <input type="text" name="name" value="<?php echo $row['name'];?>"/>
         <input type="hidden" name="id" value="<?php echo $row['cat_id'];?>"/>
         </div>
         <br/>
         <input type="submit" value="Update"/>
         
         <div class="col-sm-4"></div> 
         </div> 
        </form>
        </div>
    </body>
</html>
<?php
}
?>