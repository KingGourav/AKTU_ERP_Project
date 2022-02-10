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

    <title> Fee Record</title>
  </head>
  <body>
    <section>
    <div class="container-fluid bg-dark">
      <div class="row">
        <div class="col-12 text-center" style="color: #fff;"><b><h2>Fee Record</h2></b></div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-9" style="margin-top: 20px;">
           <form action="" method="GET" enctype="multipart/form-data">
    <div class="form-group" style="">
      <label>Roll No</label>
      <input type="text" name="roll" placeholder="becarefull" value="" class="form-control" style="background-color: transparent;outline: none;border:none;border-bottom: 2px solid black;color: #fff;font-weight: bold;">
    </div>
    <div class="form-group" style="">
      <label>Name</label>
      <input type="text" name="name" value="" class="form-control"style="background-color: transparent;outline: none;border:none;border-bottom: 2px solid black;color: #fff;font-weight: bold;">
    </div>
       <div class="form-group" style="">
      <label>Father Name</label>
      <input type="text" name="father" value="" class="form-control"style="background-color: transparent;outline: none;border:none;border-bottom: 2px solid black;color: #fff;font-weight: bold;">
    </div>
     <div class="form-group" style="">
      <label>Course</label>
      <input type="text" name="course" value="" class="form-control"style="background-color: transparent;outline: none;border:none;border-bottom: 2px solid black;color: #fff;font-weight: bold;">
    </div>
     <div class="form-group" style="">
      <label>Branch</label>
      <input type="text" name="branch" value="" class="form-control"style="background-color: transparent;outline: none;border:none;border-bottom: 2px solid black;color: #fff;font-weight: bold;">
    </div>
    <div class="form-group" style="">
      <label>Date of Submission</label>
      <input type="text" name="dat" placeholder="2020-12-01" value="" class="form-control"style="background-color: transparent;outline: none;border:none;border-bottom: 2px solid black;color: #fff;font-weight: bold;">
    </div>
 
     <div class="form-group" style="">
      <label>Semester-1</label>
      <input type="text" name="semester1" value="" class="form-control"style="background-color: transparent;outline: none;border:none;border-bottom: 2px solid black;color: #fff;font-weight: bold;">
    </div>
     <div class="form-group" style="">
      <label>Semester-2</label>
      <input type="text" name="semester2" value="" class="form-control"style="background-color: transparent;outline: none;border:none;border-bottom: 2px solid black;color: #fff;font-weight: bold;">
    </div>
     <div class="form-group" style="">
      <label>Semester-3</label>
      <input type="text" name="semester3" value="" class="form-control"style="background-color: transparent;outline: none;border:none;border-bottom: 2px solid black;color: #fff;font-weight: bold;">
    </div>
     <div class="form-group" style="">
      <label>Semester-4</label>
      <input type="text" name="semester4" value="" class="form-control"style="background-color: transparent;outline: none;border:none;border-bottom: 2px solid black;color: #fff;font-weight: bold;">
    </div>
     <div class="form-group" style="">
      <label>Semester-5</label>
      <input type="text" name="semester5" value="" class="form-control"style="background-color: transparent;outline: none;border:none;border-bottom: 2px solid black;color: #fff;font-weight: bold;">
    </div>
     <div class="form-group" style="">
      <label>Semester-6</label>
      <input type="text" name="semester6" value="" class="form-control"style="background-color: transparent;outline: none;border:none;border-bottom: 2px solid black;color: #fff;font-weight: bold;">
    </div>
     <div class="form-group" style="">
      <label>Semester-7</label>
      <input type="text" name="semester7" value="" class="form-control"style="background-color: transparent;outline: none;border:none;border-bottom: 2px solid black;color: #fff;font-weight: bold;">
    </div>
       <div class="form-group" style="">
      <label>Semester-8</label>
      <input type="text" name="semester8" value="" class="form-control"style="background-color: transparent;outline: none;border:none;border-bottom: 2px solid black;color: #fff;font-weight: bold;">
    </div>
      <div class="form-group" style="">
      <label>Total Amount Recived</label>
      <input type="text" name="total" value="" class="form-control"style="background-color: transparent;outline: none;border:none;border-bottom: 2px solid black;color: #fff;font-weight: bold;">
    </div>
     <div class="form-group" style="">
      <label>Left Amount</label>
      <input type="text" name="leftamount" value="" class="form-control"style="background-color: transparent;outline: none;border:none;border-bottom: 2px solid black;color: #fff;font-weight: bold;">
    </div>
     

        </div>
        <div class="col-3" style="margin-top: 40px;"> <div class="form-group">
    
      <img src="a.jpg" class="img-fluid"style="width: 200px;height: 200px;box-shadow: 2px 2px 5px #d9d9d9, -2px -2px 5px #fff;margin-left: 20px;">
     
    </div></div>
    <div class="col-12" style="margin-top: 50px;margin-bottom: 100px;"> <center><input type="submit" name="submit" value="Submit"/ class="btn btn-primary "style="width: 300px;"></center></div>
      </form>
      </div>
    </div>
    <div class="container-fluid bg-dark">
      <div class="row">
        <div class="col-12 text-center">Fee Submission Form</div>
      </div>
    </div>
</div>
</section>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="jquery.ripples-min.js"></script>
<script type="text/javascript">
  $(document).ready(function()
  {
    $('section').ripples();
  })
</script>
  </body>
</html>
<?php
if ($_GET['submit']) {

$a = $_GET['roll'];
$b = $_GET['name'];
$c = $_GET['father'];
$d = $_GET['course'];
$e = $_GET['branch'];
$f = $_GET['dat'];
$g = $_GET['semester1'];
$h = $_GET['semester2'];
$i = $_GET['semester3'];
$j = $_GET['semester4'];
$k = $_GET['semester5'];
$l = $_GET['semester6'];
$m = $_GET['semester7'];
$n = $_GET['semester8'];
$o = $_GET['total'];
$p = $_GET['leftamount'];



if ($a!="" && $b!=""&& $c!="" && $d!="" && $e!="" && $f!="" && $g!="" && $h!="" && $i!="" && $j!="" && $k!="" && $l!="" && $m!="" && $n!="" && $o!="" && $p!="") {


$query = "INSERT INTO FEE VALUES ('$a','$b','$c','$d','$e','$f','$g','$h','$i','$j','$k','$l','$m','$n','$o','$p')";
$data = mysqli_query($conn, $query);

if ($data) {
echo "Fee Submit successfully....";
}
}
else
{
 die("Fee Not Submited".mysqli_connect_error());
}

}


?> 
<style>
  

  section
{
  
  
  
  background-image: url(staff.jpg);
background-size: cover;
background-position: center;
background-repeat: no-repeat;

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