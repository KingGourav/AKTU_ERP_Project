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

    <title>Accounts Form</title>
  </head>
  <body class="bg-light">
   
<div class="container">
<div class="card-header text-center" style="background-color: orange;color: #fff;box-shadow: 0px 0px 4px 2px rgba(0,0,0,.5);"><h1>Salary Registration Form</h1></div>
<div class="card-body" style="background-color: #fff;">
  <form action="" method="post" enctype="multipart/form-data">
    <div class="form-group" style="">
      <label>Id No</label>
      <input type="text" name="id" value="" class="form-control">
    </div>
    <div class="form-group" style="">
      <label>Name</label>
      <input type="text" name="name" value="" class="form-control">
    </div>
    <div class="form-group">
      <label>Proffesion</label>
      <input type="text" name="proffesion" value="" class="form-control">
    </div>
    <div class="form-group">
      <label>Amount</label>
      <input type="text" name="amount" value="" class="form-control">
    </div>
    <div class="form-group">
      <label>Date</label>
      <input type="text" name="date" value="" class="form-control">
    </div>
    <div class="form-group">
      <label>Month</label>
      <input type="text" name="month" value="" class="form-control">
    </div>
    <div class="form-group">
      <label>Year</label>
      <input type="text" name="year" value="" class="form-control">
    </div>
    <div class="form-group">
      <label>Invoice No</label>
      <input type="text" name="invoice" value="" class="form-control">
    </div>
     <center><input type="submit" name="submit" value="Submit"/ class="btn btn-primary"style="width: 200px"></center>
  </form>
 
</div>
<div class="card-footer text-center bg-dark"><p style="color: #fff;letter-spacing: 1px;">Salary Registration Form</p></div>
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

$a = $_POST['id'];
$b = $_POST['name'];
$c = $_POST['proffesion'];
$d = $_POST['amount'];
$e = $_POST['date'];
$f = $_POST['month'];
$g = $_POST['year'];
$h = $_POST['invoice'];




if ($a!="" && $b!=""&&$c!="" && $d!="" && $e!="" && $f!="" && $g!="" && $h!="") {


$query = "INSERT INTO SALARY VALUES ('$a','$b','$c','$d','$e','$f','$g','$h')";
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




