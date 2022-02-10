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
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

    <title>Student Registration Form</title>
  </head>
  <body class="bg-light">
   
<div class="container">
<div class="card-header text-center" style="background-color: orange;color: #fff;box-shadow: 0px 0px 4px 2px rgba(0,0,0,.5);"><h1>Student Registration Form</h1></div>
<div class="card-body" style="background-color: #fff;">
  <form action="" method="post" enctype="multipart/form-data">
    <div class="form-group" style="">
      <label>Name</label>
      <input type="text" name="name" value="" class="form-control">
    </div>
    <div class="form-group" style="">
      <label>Age</label>
      <input type="text" name="age" value="" class="form-control">
    </div>
    <div class="form-group">
      <label>Gender</label>
      <input type="text" name="gender" value="" class="form-control">
    </div>
    <div class="form-group">
      <label>Course</label>
      <input type="text" name="course" value="" class="form-control">
    </div>
    <div class="form-group">
      <label>Year</label>
      <input type="text" name="year" value="" class="form-control">
    </div>
    <div class="form-group">
      <label>Stream</label>
      <input type="text" name="stream" value="" class="form-control">
    </div>
    <div class="form-group">
      <label>mail</label>
      <input type="text" name="mail" value="" class="form-control">
    </div>
    <div class="form-group">
      <label>contact no</label>
      <input type="text" name="contact" value="" class="form-control">
    </div>
    <div class="form-group">
      <label>Whatsup no</label>
      <input type="text" name="whatsup" value="" class="form-control">
    </div>
    <div class="form-group">
      <label>Enter percentage:</label>
      <input type="text" name="enter" value="" class="form-control">
    </div>
    <div class="form-group">
      <label>Matrix percentage:</label>
      <input type="text" name="tenth" value="" class="form-control">
    </div>

    <div class="form-group">
      <label>Father Name</label>
      <input type="text" name="father" value="" class="form-control">
    </div>
    <div class="form-group">
      <label>Mother Name</label>
      <input type="text" name="mother" value="" class="form-control">
    </div>
    <div class="form-group">
      <label>Address</label>
      <input type="text" name="address" value="" class="form-control">
    </div>
    <div class="form-group">
      <label>Permanent Address</label>
      <input type="text" name="paddress"  value=""class="form-control">
    </div>
    <div class="form-group">
      <label>Parent Contact no</label>
      <input type="text" name="pcontact" value="" class="form-control">
      <img src="a.jpg" class="img-thumbnail"style="width: 200px;height: 200px;">
      <label style="margin-top: 200px;">Uplod your photo</label>
      <input type="file" name="uploadfile" value=""  />
    </div>
     <center><input type="submit" name="submit" value="Submit"/ class="btn btn-primary"style="width: 200px"></center>
  </form>
 
</div>
<div class="card-footer text-center bg-dark"><p style="color: #fff;letter-spacing: 1px;">Student Registration Form</p></div>
</div>
</body>




























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

$a = $_POST['name'];
$b = $_POST['age'];
$c = $_POST['gender'];
$d = $_POST['course'];
$e = $_POST['year'];
$f = $_POST['stream'];
$g = $_POST['mail'];
$h = $_POST['contact'];
$i = $_POST['whatsup'];
$j = $_POST['enter'];
$k = $_POST['tenth'];
$l = $_POST['father'];
$m = $_POST['mother'];
$n = $_POST['address'];
$o = $_POST['paddress'];
$p = $_POST['pcontact'];

$filename = $_FILES["uploadfile"]["name"];
$tempname = $_FILES["uploadfile"]["tmp_name"];
$folder = "image/".$filename;
move_uploaded_file($tempname, $folder);
echo "<img src='$folder' height='100' width='100' />";

if ($a!="" && $b!=""&&$c!="" && $d!="" && $e!="" && $f!="" && $g!="" && $h!="" && $i!="" && $j!="" && $k!="" && $l!="" && $m!="" && $n!="" && $o!="" && $p!="" && $folder!="") {


$query = "INSERT INTO STUDENT VALUES ('$a','$b','$c','$d','$e','$f','$g','$h','$i','$j','$k','$l','$m','$n','$o','$p','$folder')";
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
.form-control
{
  border:0px;
  
  border-bottom: 2px solid #000;
  margin-bottom: 4px;
  outline:0px;
  text-align: center;
  color: #000;
font-family: 'Roboto', sans-serif;
background-color: transparent;
transition: 0.5s all;
}
.form-control:hover
{
  transform: translateY(-10px);

}
label
{
  color: #000;
  font-weight: bold;
  text-shadow: 1px 4px 2px rgba(0,0,0,0.3);
  transition: 1s;
}
label:hover
{
  color: orange;
  text-shadow: none;
}
h1
{
  color: #fff;
 font-family: 'Roboto', sans-serif;
 font-weight: 500;
}
button
{
  margin-top: 5px;
  width: 100px;
}
.card-footer
{
  margin-bottom: 20px;
}
p{
  font-weight: bold;
  font-family: 'Roboto', sans-serif;
  color: orange;
}


</style>




