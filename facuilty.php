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

    <title>Facuilty Registration Form</title>
  </head>
  <body class="bg-light">
   
<div class="container">
<div class="card-header text-center" style="background-color: orange;color: #fff;box-shadow: 0px 0px 4px 2px rgba(0,0,0,.5);"><h1>Facuilty Registration Form</h1></div>
<div class="card-body" style="background-color: #fff;">
  <form action="" method="post" enctype="multipart/form-data">
    <div class="form-group" style="">
      <label>Id</label>
      <input type="text" name="id" value="" class="form-control">
    </div>
    <div class="form-group" style="">
      <label>Name</label>
      <input type="text" name="name" value="" class="form-control">
    </div>
    <div class="form-group" style="">
      <label>Gender</label>
      <input type="text" name="gender" value="" class="form-control">
    </div>
    <div class="form-group">
      <label>DOB</label>
      <input type="text" name="dob" value="" class="form-control">
    </div>
    <div class="form-group">
      <label>Proffesion</label>
      <input type="text" name="proffesion" value="" class="form-control">
    </div>
    <div class="form-group">
      <label>Contact</label>
      <input type="text" name="contact" value="" class="form-control">
    </div>
    <div class="form-group">
      <label>Whatsup</label>
      <input type="text" name="whatsup" value="" class="form-control">
    </div>
    <div class="form-group">
      <label>mail</label>
      <input type="text" name="mail" value="" class="form-control">
    </div>
    <div class="form-group">
      <label>Address</label>
      <input type="text" name="address" value="" class="form-control">
    </div>
    <div class="form-group">
      <label>Qulification</label>
      <input type="text" name="qulification" value="" class="form-control">
    </div>
    <div class="form-group">
      <label>Experince</label>
      <input type="text" name="experince" value="" class="form-control">
    </div>
    <div class="form-group">
      <label>Experince Time</label>
      <input type="text" name="experincetime" value="" class="form-control">
    </div>

    <div class="form-group">
      <label>Post</label>
      <input type="text" name="post" value="" class="form-control">
    </div>
    <div class="form-group">
      <label>Building</label>
      <input type="text" name="building" value="" class="form-control">
    </div>
    <div class="form-group">
      <label>Floor</label>
      <input type="text" name="floor" value="" class="form-control">
    </div>
    <div class="form-group">
      <label>Cabin no</label>
      <input type="text" name="cabin"  value=""class="form-control">
    </div>
    <div class="form-group">
     
      <img src="a.jpg" class="img-thumbnail"style="width: 200px;height: 200px;">
      <label style="margin-top: 200px;">Uplod your photo</label>
      <input type="file" name="uploadfile" value=""  />
    </div>
     <center><input type="submit" name="submit" value="Submit"/ class="btn btn-primary"style="width: 200px"></center>
  </form>
 
</div>
<div class="card-footer text-center bg-dark"><p style="color: #fff;letter-spacing: 1px;">Facuilty Registration Form</p></div>
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

$z = $_POST['id'];
$a = $_POST['name'];
$b = $_POST['gender'];
$c = $_POST['dob'];
$d = $_POST['proffesion'];
$e = $_POST['contact'];
$f = $_POST['whatsup'];
$g = $_POST['mail'];
$h = $_POST['address'];
$i = $_POST['qulification'];
$j = $_POST['experince'];
$k = $_POST['experincetime'];
$l = $_POST['post'];
$m = $_POST['building'];
$n = $_POST['floor'];
$o = $_POST['cabin'];


$filename = $_FILES["uploadfile"]["name"];
$tempname = $_FILES["uploadfile"]["tmp_name"];
$folder = "image/".$filename;
move_uploaded_file($tempname, $folder);
echo "<img src='$folder' height='100' width='100' />";

if ($z!="" && $a!="" && $b!=""&&$c!="" && $d!="" && $e!="" && $f!="" && $g!="" && $h!="" && $i!="" && $j!="" && $k!="" && $l!="" && $m!="" && $n!="" && $o!="" && $folder!="") {


$query = "INSERT INTO FACUILTY VALUES ('$z','$a','$b','$c','$d','$e','$f','$g','$h','$i','$j','$k','$l','$m','$n','$o','$folder')";
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




