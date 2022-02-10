<?php
session_start();
include("connection.php");
error_reporting(0);


?>






<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="parentlogin_style.css">
</head>
<body>
	<section>
		<div class="box">
			<div class="form">
				<h2>Login</h2>
				<form action="" method="post">
					<div class="inputBx">
						<input type="text" name="userid" placeholder="UsernameId">
					</div>
					<div class="inputBx">
						<input type="password" name="password" placeholder="Password">
					</div>
					
					<div class="inputBx">

						<input type="submit" name="submit" value="Login">
					</div>
				</form>
				<p>Forget <a href="#">Password</a></p>
				<p>Need an <a href="#">Account</a></p>
			</div>
		</div>
	</section>
<?php
if (isset($_POST['submit']))
 {
           $luser = $_POST['userid'];
           $pwd = $_POST['password'];
           $query = "SELECT * FROM ADMIN_LOGIN WHERE userid='$luser' && password='$pwd'";
          $data = mysqli_query($conn, $query);
          $total = mysqli_num_rows($data);
       
        if ($total == 1) {
          	$_SESSION['user_name']= $luser;
          	header('location:dashboard.php');
          }
          else
          {
          	echo "login Failed";
          }
}





?>
</body>
</html>
<style>
	*
{
	margin: 0;
	padding: 0;
	box-sizing: border-box;
	font-family: sans-serif;
}
section
{
	display: flex;
	justify-content: center;
	align-items: center;
	min-height: 100vh;
	background: linear-gradient(-30deg,#03a9fa 0%, #3a78b7 50%,#262626 50%, #607d8b 100%);
	filter: hue-rotate(120deg); 
	animation: animate 10s linear infinite;
}
@keyframes animate {
	0%
	{
		filter: hue-rotate(0deg); 
	}
	100%
	{
		filter: hue-rotate(360deg); 
	}
}
.box
{
	position: relative;
	padding: 50px;
	width: 360px;
	height: 480px;
	display: flex;
	justify-content: center;
	align-items: center;
	background-color: rgba(255,255,255,0.1);
	border-radius: 6px;
	box-shadow: 0 5px 35px rgba(0,0,0,0.2);
}
.boyx:after
{
	content: '';
	position: absolute;
	top: 5px;
	left: 5px;
	right: 5px;
	bottom: 5px;
	border-radius: 5px;
	background-color: linear-gradient(to bottom, rgba(255,255,255,0.3) 0%, rgba(255,255,255,0.1) 15%,transparent 50%, transparent 85%,rgba(255,255,255,0.3) 0%);
}
.box .form
{
	position: relative;width: 100%;
}
.box .form h2
{
	color: #fff;
	font-weight: 600;
	letter-spacing: 2px;
	margin-bottom: 30px;
}
.box .form .inputBx
{
	position: relative;
	width: 100%;
	margin-bottom: 20px;
}
.box .form .inputBx input
{
	width: 100%;
	outline: none;
	border:1px solid rgba(255,255,255,0.2);
	background-color: transparent;
	padding: 8px 10px;
	border-radius: 6px;
	color: #fff;
	font-size: 16px;
	font-weight: 300;
	box-shadow: inset 0 0 25px rgba(0,0,0,0.2);
}
.box .form .inputBx input[type="submit"]
{
	background-color: #fff;
	color: #000;
	max-width: 100px;
	padding: 8px 10px;
	box-shadow: none;
	font-weight: 500;
	letter-spacing: 1px;
	cursor: pointer;
	border:none;
}
.box .form .inputBx input::placeholder
{
	color: #fff;
}
.remember
{
	position: relative;display: inline-block;color: #fff;
	font-weight: 300;
	margin-bottom: 10px;
	cursor: pointer;
}
.box .form p
{
	color: #fff;
	font-weight: 300;
	font-size: 15px;
	margin-top: 5px;
}
.box .form a
{
	color: #fff;
	letter-spacing: 1px;
}
</style>