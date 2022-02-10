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

    <title>Staff Registration</title>
  </head>
  <body>
    <div class="container-fluid bg-dark">
      <div class="row">
        <div class="col-12 text-center" style="color: #fff;"><b><h2>STAFF Registration</h2></b></div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-9" style="margin-top: 20px;">
           <form action="" method="post" enctype="multipart/form-data">
    <div class="form-group" style="">
      <label>ID NO</label>
      <input type="text" name="id" value="" class="form-control" style="background-color: transparent;outline: none;border:none;border-bottom: 2px solid black;color: #fff;font-weight: bold;">
    </div>
    <div class="form-group" style="">
      <label>Name</label>
      <input type="text" name="name" value="" class="form-control"style="background-color: transparent;outline: none;border:none;border-bottom: 2px solid black;color: #fff;font-weight: bold;">
    </div>
       <div class="form-group" style="">
      <label>Age</label>
      <input type="text" name="age" value="" class="form-control"style="background-color: transparent;outline: none;border:none;border-bottom: 2px solid black;color: #fff;font-weight: bold;">
    </div>
     <div class="form-group" style="">
      <label>Gender</label>
      <input type="text" name="gender" value="" class="form-control"style="background-color: transparent;outline: none;border:none;border-bottom: 2px solid black;color: #fff;font-weight: bold;">
    </div>
     <div class="form-group" style="">
      <label>Proffesion</label>
      <input type="text" name="proffesion" value="" class="form-control"style="background-color: transparent;outline: none;border:none;border-bottom: 2px solid black;color: #fff;font-weight: bold;">
    </div>
    <div class="form-group" style="">
      <label>Date of Joining</label>
      <input type="text" name="dat" value="" class="form-control"style="background-color: transparent;outline: none;border:none;border-bottom: 2px solid black;color: #fff;font-weight: bold;">
    </div>
    <div class="form-group" style="">
      <label>Contact</label>
      <input type="text" name="contact" value="" class="form-control"style="background-color: transparent;outline: none;border:none;border-bottom: 2px solid black;color: #fff;font-weight: bold;">
    </div>
      <div class="form-group" style="">
      <label>Whatsup</label>
      <input type="text" name="whatsup" value="" class="form-control"style="background-color: transparent;outline: none;border:none;border-bottom: 2px solid black;color: #fff;font-weight: bold;">
    </div>
     <div class="form-group" style="">
      <label>Salary</label>
      <input type="text" name="salary" value="" class="form-control"style="background-color: transparent;outline: none;border:none;border-bottom: 2px solid black;color: #fff;font-weight: bold;">
    </div>
     <div class="form-group" style="">
      <label>Father Name</label>
      <input type="text" name="father" value="" class="form-control"style="background-color: transparent;outline: none;border:none;border-bottom: 2px solid black;color: #fff;font-weight: bold;">
    </div>
    <div class="form-group" style="">
      <label>Mother Name</label>
      <input type="text" name="mother" value="" class="form-control"style="background-color: transparent;outline: none;border:none;border-bottom: 2px solid black;color: #fff;font-weight: bold;">
    </div>
      <div class="form-group" style="">
      <label>Address</label>
      <input type="text" name="address" value="" class="form-control"style="background-color: transparent;outline: none;border:none;border-bottom: 2px solid black;color: #fff;font-weight: bold;">
    </div>
      <div class="form-group" style="">
      <label>Id Proof</label>
      <input type="text" name="proof" value="" class="form-control"style="background-color: transparent;outline: none;border:none;border-bottom: 2px solid black;color: #fff;font-weight: bold;">
    </div>
      <div class="form-group" style="">
      <label>Experince</label>
      <input type="text" name="experince1" value="" class="form-control"style="background-color: transparent;outline: none;border:none;border-bottom: 2px solid black;color: #fff;font-weight: bold;">
    </div>

        </div>
        <div class="col-3" style="margin-top: 40px;"> <div class="form-group">
    
      <img src="a.jpg" class="img-fluid"style="width: 200px;height: 200px;box-shadow: 2px 2px 5px #d9d9d9, -2px -2px 5px #fff;margin-left: 20px;">
      <label style="margin-top: 10px;">Uplod your photo</label>
      <input type="file" name="uploadfile" value=""  />
    </div></div>
    <div class="col-12" style="margin-top: 50px;margin-bottom: 100px;"> <center><input type="submit" name="submit" value="Submit"/ class="btn btn-primary "style="width: 300px;"></center></div>
      </form>
      </div>
    </div>
    <div class="container-fluid bg-dark">
      <div class="row">
        <div class="col-12 text-center">Staff Registration Form</div>
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

$a = $_POST['id'];
$b = $_POST['name'];
$c = $_POST['age'];
$d = $_POST['gender'];
$e = $_POST['proffesion'];
$f = $_POST['dat'];
$g = $_POST['contact'];
$h = $_POST['whatsup'];
$i = $_POST['salary'];
$j = $_POST['father'];
$k = $_POST['mother'];
$l = $_POST['address'];
$m = $_POST['proof'];
$n = $_POST['experince1'];

$filename = $_FILES["uploadfile"]["name"];
$tempname = $_FILES["uploadfile"]["tmp_name"];
$folder = "image/".$filename;
move_uploaded_file($tempname, $folder);
echo "<img src='$folder' height='100' width='100' />";

if ($a!="" && $b!=""&& $c!="" && $d!="" && $e!="" && $f!="" && $g!="" && $h!="" && $i!="" && $j!="" && $k!="" && $l!="" && $m!="" && $n!="" && $folder!="") {


$query = "INSERT INTO STAFF VALUES ('$a','$b','$c','$d','$e','$f','$g','$h','$i','$j','$k','$l','$m','$n','$folder')";
$data = mysqli_query($conn, $query);

if ($data) {
echo "data insert successfully....";
}
}
else
{
 die("data not inserted check your form".mysqli_connect_error());
}

}


?> 
<style>
  body
  {
background-image: url(staff.jpg);
background-size: cover;
background-position: center;
background-repeat: no-repeat;
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