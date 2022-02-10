<?php
session_start();
include("connection.php");
error_reporting(0);


?>
<form action="" method="post">
	User name<input type="text" name="id" value=""/><br><br>
	Password <input type="text" name="password" value=""><br><br>
	<input type="submit" name="submit" value="login"><br>
	

</form>
<?php
if (isset($_POST['submit']))
 {
           $luser = $_POST['id'];
           $pwd = $_POST['password'];
           $query = "SELECT * FROM TEST WHERE id='$luser' && password='$pwd'";
          $data = mysqli_query($conn, $query);
          $total = mysqli_num_rows($data);
          echo $luser;
          echo $pwd;
                  
        if ($total == 1) {
          	$_SESSION['user_name']= $luser;
          	header('location:studentdashboard.php');
          }
          else
          {
          	echo "login Failed";
          }
}





?>