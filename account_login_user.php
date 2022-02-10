<?php
include ("connection.php");
error_reporting(0);



?>





<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>Account Login Users</title>
    <link rel="icon" href="icon.jpg" type="image/icon type">
  </head>
  <body>
    <div class="container-fluid bg-dark">
      <div class="row">
        <div class="col-12 text-center" style="color: #fff;"><b><h2>Account Login Users</h2></b></div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-9" style="margin-top: 20px;">
           <form action="" method="post" enctype="multipart/form-data">
    <div class="form-group" style="">
      <label>User Id</label>
      <input type="text" name="userid" value="" class="form-control" style="background-color: transparent;outline: none;border:none;border-bottom: 2px solid black;color: #fff;font-weight: bold;">
    </div>
    <div class="form-group" style="">
      <label>Password</label>
      <input type="text" name="password" value="" class="form-control"style="background-color: transparent;outline: none;border:none;border-bottom: 2px solid black;color: #fff;font-weight: bold;">
    </div>
       

        </div>
        <div class="col-3" style="margin-top: 40px;"> <div class="form-group">
    
      <img src="a.jpg" class="img-thumbnail"style="width: 200px;height: 200px;box-shadow: 2px 2px 5px #d9d9d9, -2px -2px 5px #fff;margin-left: 20px;">
      
    </div></div>
    <div class="col-12" style="margin-top: 50px;margin-bottom: 100px;"> <center><input type="submit" name="submit" value="Submit"/ class="btn btn-primary "style="width: 300px;"></center></div>
      </form>
      </div>
    </div>
    <div class="container-fluid bg-dark">
      <div class="row">
        <div class="col-12 text-center">Generate Account Login</div>
      </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
  </body>
</html>
<?php
if ($_POST['submit']) {

$a = $_POST['userid'];
$b = $_POST['password'];


if ($a!="" && $b!="") {


$query = "INSERT INTO ACCOUNT_LOGIN VALUES ('$a','$b')";
$data = mysqli_query($conn, $query);

if ($data) {
echo "data insert successfully....";
}
}
else
{
 echo "not inserted";
}

}


?> 
<style>
  body
  {
background: linear-gradient(45deg, #e91e63, #ff9800);
color: #fff;
  }
input
{
  color: #fff;
  text-align: center;align-items: center;outline: 0px;
  margin-top: 8px;
 
  background: transparent;


}
input:hover
{
  box-shadow: none;
}
label
{
  
  font-weight: bold;
  color: #fff;

}
img:hover
{
  box-shadow: none;
}
</style>