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

    <title>Parents Registration Form</title>
  </head>
  <body>
   
<div class="container">
<div class="card-header text-center" style="background-color: orange;color: #fff;box-shadow: 0px 0px 4px 2px rgba(0,0,0,.5);"><h1>Parent Registration Form</h1></div>
<div class="card-body">
  <form action="" method="GET">
     <div class="form-group">
      <label> Roll No</label>
      <input type="text" name="roll" class="form-control">
    </div>
    <div class="form-group">
      <label> Father Name</label>
      <input type="text" name="father" class="form-control">
    </div>
    <div class="form-group">
      <label>Age</label>
      <input type="text" name="age1" class="form-control">
    </div>
    <div class="form-group">
      <label>Occoupation</label>
      <input type="text" name="occoupation1" class="form-control">
    </div>
    <div class="form-group">
      <label>contact no</label>
      <input type="text" name="contact1" class="form-control">
    </div>
    <div class="form-group">
      <label>Mail</label>
      <input type="text" name="mail1" class="form-control">
    </div>
    <div class="form-group">
      <label>Address</label>
      <input type="text" name="address1" class="form-control">
    </div>
    <div class="form-group">
      <label>Annual Income</label>
      <input type="text" name="anualincome" class="form-control">
    </div>
    <div class="form-group">
      <label>Mother Name</label>
      <input type="text" name="mother" class="form-control">
    </div>
    <div class="form-group">
      <label>Age</label>
      <input type="text" name="age2" class="form-control">
    </div>
    <div class="form-group">
      <label>Occoupation</label>
      <input type="text" name="occoupation2" class="form-control">
    </div>
    <div class="form-group">
      <label>Contact no</label>
      <input type="text" name="contact2" class="form-control">
    </div>

    <div class="form-group">
      <label>Mail</label>
      <input type="text" name="mail2" class="form-control">
    </div>
    <div class="form-group">
      <label>Address</label>
      <input type="text" name="address2" class="form-control">
    </div>
    <center><input type="submit" name="submit" value="Submit"/ class="btn btn-primary"style="width: 200px"></center>
  </form>
   
</div>
<div class="card-footer text-center"><p>Parents Registration Form</p></div>
</div>
</body>
<?php
if ($_GET['submit']) {

$a = $_GET['roll'];
$b = $_GET['father'];
$c = $_GET['age1'];
$d = $_GET['occoupation1'];
$e = $_GET['contact1'];
$f = $_GET['mail1'];
$g = $_GET['address1'];
$h = $_GET['anualincome'];
$i = $_GET['mother'];
$j = $_GET['age2'];
$k = $_GET['occoupation2'];
$l = $_GET['contact2'];
$m = $_GET['mail2'];
$n = $_GET['address2'];




if ($a!="" && $b!=""&&$c!="" && $d!="" && $e!="" && $f!="" && $g!="" && $h!="" && $i!="" && $j!="" && $k!="" && $l!="" && $m!="" && $n!="") {


$query = "INSERT INTO PARENTS VALUES ('$a','$b','$c','$d','$e','$f','$g','$h','$i','$j','$k','$l','$m','$n')";
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
<style>
.form-control
{
  border:0px;
  
  border-bottom: 2px solid orange;
  margin-bottom: 4px;
  outline:0px;
  text-align: center;
  color: #fff;
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
  color: #fff;
  font-weight: bold;
}
label:hover
{
  color: orange;
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
  background-color: #fff;
  color: orange;
}
.card-footer
{
  margin-bottom: 20px;
}
p{
  font-weight: bold;
  font-family: 'Roboto', sans-serif;
  color: #fff;
}
.container
{
  background-color: #0A738E;
}
body
{
  background-color: #fff;
}
</style>