<?php
session_start();
include("connection.php");
error_reporting(0);


?>



<html>
<head>
	
</head>
<body>
<div class="hero">
<div class="form-box">
	<div class="button-box">
		<div id="btn"></div>
		<button type="button" class="toggle-btn" onclick="login()" style="color:  #b3ffb3">Login</button>
		<button type="button" class="toggle-btn" onclick="Register()" style="color:  #b3ffb3">Register</button>


	</div>
       
<div class="social-icons">
<img src="fb.png">
<img src="tw.png">
<img src="gp.png">
</div>
<form id="login" class="input-group" action="" method="post">
	<input type="text" name="userid" class="a" placeholder="User Id"  style="color:  #fff;font-style: bold;" required>
	<input type="password" name="password" class="a" placeholder="Enter Password"  style="color:  #fff;" required>

	<button type="Submit" class="Submit-btn" name="submit" style="margin-top: 60px">Login</button>

</form>
<?php
if (isset($_POST['submit']))
 {
           $luser = $_POST['userid'];
           $pwd = $_POST['password'];
           $query = "SELECT * FROM FACUILTY_LOGIN WHERE userid='$luser' && password='$pwd'";
          $data = mysqli_query($conn, $query);
          $total = mysqli_num_rows($data);
          echo $luser;
          echo $pwd;
                  
        if ($total == 1) {
          	$_SESSION['user_name']= $luser;
          	header('location:facuiltydashboard.php');
          }
          else
          {
          	echo "login Failed";
          }
}





?>
<form id="Register" class="input-groupd">
	<input type="text" name="input-field" class="b"  placeholder="User Id"   style="color:  #b3ffb3" required>
	<input type="email" name="input-field" class="b"  placeholder="Email Id"   style="color:  #b3ffb3" required>

	<input type="text" name="input-field" class="b"  placeholder="Enter Password"  style="color:  #b3ffb3"  required>
	<input type="checkbox" name="chech-box" class="b" ><span style="color:  #b3ffb3">Agree terms and Condition</span>
	<button type="Submit" class="Submit-btn" style="margin-top: 20px">Register</button>

</form>
</div>

</div>
<script>
	var x = document.getElementById("login");
	var y = document.getElementById("Register"); 
	var z = document.getElementById("btn"); 
	
	function Register(){
		x.style.left = "-400px";
		y.style.left = "50px";
        z.style.left = "110px";

	}
    function login(){
		x.style.left = "50px";
		y.style.left = "450px";
        z.style.left = "0px";

	}
    
</script>


	</body>
</html>

<style>
	



	*{

margin:0;
padding:0;
font-family: sans-serif;

}
.hero{

	height: 100%;
	width:100%;
	background-image: linear-gradient(rgba(0,0,0,0.4),rgba(0,0,0,0.4)),url(banner.jpg);
	background-position: center;
	background-size: cover;
	position: absolute; 
}
.form-box{

width: 380px;
height: 480px;
position: relative;
margin: 6% auto;
background: #000;
padding: 5px;
overflow: hidden;
border-radius: 39px;
}

.button-box{

width: 220px;
margin: 35px auto;
position: relative;
box-shadow: 0 0 20px 9px #ff61241f;
border-radius: 30px;

}
.toggle-btn{

padding: 10px 30px;
cursor: pointer;
background: transparent;
border: 0;
outline: none;
position: relative;
}
#btn{
 top: 0;
 left: 0;
 position: absolute;
 width: 110px;
 height: 100%;
 background: linear-gradient(to right, #ff105f,#ffad06);
 border-radius: 30px;
 transition: .5s;
}
.social-icons{
	margin: 30px auto;
     text-align: center;
}
.social-icons img{
	width: 30px;
	margin: 0 12px;
	box-shadow: 0 0 0 20px 0 #7f7f7f3d;
	cursor: pointer;
	border-radius: 50%;
}
.input-group{
	top: 200px;
	position: absolute;
	width: 280px;
	transition: .5s;
}

.a{
	width: 100% ;
	padding: 10px 0 ;
	margin: 5px 0 ;
	border-left: 0 ;
	border-top: 0 ;
	border-right: 0 ;
	border-bottom: 1px solid #999 ;
	outline: none ;
	background: transparent ; 
}
.input-groupd{
	top: 200px;
	position: absolute;
	width: 280px;
	transition: .5s;
}
.b{
	width: 100% ;
	padding: 10px 0 ;
	margin: 5px 0 ;
	border-left: 0 ;
	border-top: 0 ;
	border-right: 0 ;
	border-bottom: 1px solid #999 ;
	outline: none ;
	background: transparent ; 
}
.Submit-btn{
	width: 85%;
	padding: 10px 30px;
	cursor: pointer;
	display: block;
	margin: auto;
	background:linear-gradient(to right, #ff105f,#ffad06);
	border:0;
	outline: none;
	border-radius: 30px; 
	color: #fff;
	font-weight: bold;
}
.chech-box{
	margin: 30px 10px 30px 0;
}
.span{
	color: #777;
	font-size: 12px;bottom: 68px;
	position: absolute;
}
#login{
left: 50px;
}
#Register{
left: 450px;
}
</style>