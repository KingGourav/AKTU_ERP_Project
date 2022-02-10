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

    <title>Exam Form Registration</title>
  </head>
  <body>
    <div class="container-fluid bg-dark">
      <div class="row">
        <div class="col-12 text-center" style="color: #fff;"><b><h2>Exam Form Registration</h2></b></div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-9" style="margin-top: 20px;">
           <form action="" method="post" enctype="multipart/form-data">
    <div class="form-group" style="">
      <label>Roll</label>
      <input type="text" name="roll" value="" class="form-control" style="background-color: transparent;outline: none;border:none;border-bottom: 2px solid black;color: #fff;font-weight: bold;">
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
      <label>Year</label>
      <input type="text" name="year" value="" class="form-control"style="background-color: transparent;outline: none;border:none;border-bottom: 2px solid black;color: #fff;font-weight: bold;">
    </div>
    <div class="form-group" style="">
      <label>Semester</label>
      <input type="text" name="semester" value="" class="form-control"style="background-color: transparent;outline: none;border:none;border-bottom: 2px solid black;color: #fff;font-weight: bold;">
    </div>
      <div class="form-group" style="">
      <label>Subject 1</label>
      <input type="text" name="subject1" value="" class="form-control"style="background-color: transparent;outline: none;border:none;border-bottom: 2px solid black;color: #fff;font-weight: bold;">
    </div>
     <div class="form-group" style="">
      <label>Subject 2</label>
      <input type="text" name="subject2" value="" class="form-control"style="background-color: transparent;outline: none;border:none;border-bottom: 2px solid black;color: #fff;font-weight: bold;">
    </div>
     <div class="form-group" style="">
      <label>Subject 3</label>
      <input type="text" name="subject3" value="" class="form-control"style="background-color: transparent;outline: none;border:none;border-bottom: 2px solid black;color: #fff;font-weight: bold;">
    </div>
    <div class="form-group" style="">
      <label>Subject 4</label>
      <input type="text" name="subject4" value="" class="form-control"style="background-color: transparent;outline: none;border:none;border-bottom: 2px solid black;color: #fff;font-weight: bold;">
    </div>
     <div class="form-group" style="">
      <label>Subject 5</label>
      <input type="text" name="subject5" value="" class="form-control"style="background-color: transparent;outline: none;border:none;border-bottom: 2px solid black;color: #fff;font-weight: bold;">
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
        <div class="col-12 text-center">Exam Registration Form</div>
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

$a = $_POST['roll'];
$b = $_POST['name'];
$c = $_POST['father'];
$d = $_POST['course'];
$e = $_POST['branch'];
$f = $_POST['year'];
$g = $_POST['semester'];
$h = $_POST['subject1'];
$i = $_POST['subject2'];
$j = $_POST['subject3'];
$k = $_POST['subject4'];
$k = $_POST['subject5'];



if ($a!="" && $b!=""&& $c!="" && $d!="" && $e!="" && $f!="" && $g!="" && $h!="" && $i!="" && $j!="" && $k!="" && $k!="") {


$query = "INSERT INTO EXAMFORM VALUES ('$a','$b','$c','$d','$e','$f','$g','$h','$i','$j','$k','$k')";
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