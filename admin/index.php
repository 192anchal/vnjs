<?php
error_reporting(0);
$msg=$_REQUEST['msg'];
//echo $msg;
if($msg==1){
$msgerr1="Invalid email or password ";
}
if($msg==2){
  $msgerr1="Log out Successfully ";
  }
  if($msg==3){
    $msgerr1="Don't try to fool me!! ";
    }
  
?>

<?php
session_start();
?>
<html>
<head>
<link href="/assets/css/adminstyle.css" type="text/css" rel="stylesheet" />
<style>
img{
	width: 100%;
}
.login {
    height: 100%;
    width: 100%;
    background: radial-gradient(#6782B4, #B1BFD8);
    position: relative;
}
.login_box {
    width: 850px;
    height: 500px;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
    background: #fff;
    border-radius: 10px;
    box-shadow: 1px 4px 22px -8px #0004;
    display: flex;
    overflow: hidden;
}
.login_box .left{
  width: 41%;
  height: 100%;
  padding: 25px 25px;
  
}
.login_box .right{
  width: 59%;
  height: 100%  
}
.left .top_link a {
    color: #452A5A;
    font-weight: 400;
}
.left .top_link{
  height: 20px
}
.left .contact{
	display: flex;
    align-items: center;
    justify-content: center;
    align-self: center;
    height: 100%;
    width: 73%;
    margin: auto;
}
.left h3{
  text-align: center;
  margin-bottom: 40px;
}
.left input {
    border: none;
    width: 80%;
    margin: 15px 0px;
    border-bottom: 1px solid #4f30677d;
    padding: 7px 9px;
    width: 100%;
    overflow: hidden;
    background: transparent;
    font-weight: 600;
    font-size: 14px;
}
.left{
	background: linear-gradient(-45deg, #dcd7e0, #fff);
}
.submit {
    border: none;
    padding: 15px 70px;
    border-radius: 8px;
    display: block;
    margin: auto;
    margin-top: 120px;
    background: #583672;
    color: #fff;
    font-weight: bold;
    -webkit-box-shadow: 0px 9px 15px -11px rgba(88,54,114,1);
    -moz-box-shadow: 0px 9px 15px -11px rgba(88,54,114,1);
    box-shadow: 0px 9px 15px -11px rgba(88,54,114,1);
}


.right {
	 background: linear-gradient( #0CBABA, #380036);
   color: #fff;
	position: relative;
  background-color:ackgrred;
}

.right .right_text{
  height: 100%;
  position: relative;
  transform: translate(0%, 45%);
  margin-top: -70px;
}
.right_text h2{
  display: block;
  width: 100%;
  text-align: center;
  font-size: 50px;
  font-weight: 500;
}
.right-text h5{
  display: block;
  width: 100%;
  text-align: center;
  font-size: 19px;
  font-weight: 400;
}

.right .right-inductor{
  position: absolute;
  width: 70px;
  height: 7px;
  background: #fff0;
  left: 50%;
  bottom: 70px;
  transform: translate(-50%, 0%);
}
.top_link img {
    width: 28px;
    padding-right: 7px;
    margin-top: -3px;
}
</style>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

</head>

<body>

<!--<h1>Admin Pannel</h1>
<div class="container">
<form action="logcode.php" method="post">
  <h4><?php echo $msgerr1; ?></h4>
  
Email:
<input type="email" name="email"/>
<br/><br/>
Password:
<input type="password" name="password"/>
<br/><br/>
<input type="submit" value="Login"/>
<a href="../index.php">Back to home</a>
<h6>Designed & Developed by : Trisha Mishra </h6>
</form>
</div>-->


	<section class="login ">
    <marquee><h1>ADMIN LOGIN</h1></marquee>
		<div class="login_box">
			<div class="left">
				
				<div class="contact">
					<form action="logcode.php" method="post">
						<h3>SIGN IN</h3>
             <h4><?php echo $msgerr1; ?></h4>
						<input type="email" name="email" placeholder="EMAIL" autocomplete="off">
						<input type="password"  name="password" placeholder="PASSWORD"autocomplete="off">
						<button class="submit">LET'S GO</button>
            <a href="../index.php">Back to home</a>
					</form>
          	</div>
      </div>
      
      
			<div class="right">
      <div class="right_text">
					<h2>WELCOME!</h2>
					<h5 style="text-align:center; font-size: 90%;">Enter your details and start journey with us</h5>
				</div>
			</div>
		</div>
	</section>

</body>
</html>