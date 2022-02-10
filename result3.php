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

    <title>Semester 1 result</title>
  </head>
  <body>
    <section>
    <div class="container-fluid bg-dark">
      <div class="row">
        <div class="col-12 text-center" style="color: #fff;"><b><h2>Semester 1 Result</h2></b></div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-9" style="margin-top: 20px;">
           <form action="" method="post" enctype="multipart/form-data">
    <div class="form-group" style="">
      <label>Roll No</label>
      <input type="text" name="roll" value="" class="form-control" style="background-color:rgba(255,255,255,0.8);outline: none;border:none;border-bottom: 2px solid black;color: orange;font-weight: bold;">
    </div>
    <div class="form-group" style="">
      <label>Name</label>
      <input type="text" name="name" value="" class="form-control"style="background-color:rgba(255,255,255,0.8);outline: none;border:none;border-bottom: 2px solid black;color: orange;font-weight: bold;">
    </div>
       <div class="form-group" style="">
      <label>Father Name</label>
      <input type="text" name="father" value="" class="form-control"style="background-color:rgba(255,255,255,0.8);outline: none;border:none;border-bottom: 2px solid black;color: orange;font-weight: bold;">
    </div>
     <div class="form-group" style="">
      <label>Course</label>
      <input type="text" name="course" value="" class="form-control"style="background-color:rgba(255,255,255,0.8);outline: none;border:none;border-bottom: 2px solid black;color: orange;font-weight: bold;">
    </div>
     <div class="form-group" style="">
      <label>Year</label>
      <input type="text" name="year" value="" class="form-control"style="background-color:rgba(255,255,255,0.8);outline: none;border:none;border-bottom: 2px solid black;color: orange;font-weight: bold;">
    </div>
    <div class="form-group" style="">
      <label>Python</label>
      <input type="text" name="python" value="" class="form-control"style="background-color: rgba(255,255,255,0.8);outline: none;border:none;border-bottom: 2px solid black;color: #000;font-weight: bold;">
    </div>
    <div class="form-group" style="">
      <label>Physics</label>
      <input type="text" name="physics" value="" class="form-control"style="background-color: rgba(255,255,255,0.8);outline: none;border:none;border-bottom: 2px solid black;color: orange;font-weight: bold;">
    </div>
      <div class="form-group" style="">
      <label>Linux Server</label>
      <input type="text" name="linux" value="" class="form-control"style="background-color: rgba(255,255,255,0.8);outline: none;border:none;border-bottom: 2px solid black;color: orange;font-weight: bold;">
    </div>
     <div class="form-group" style="">
      <label>DBMS</label>
      <input type="text" name="dbms" value="" class="form-control"style="background-color: rgba(255,255,255,0.8);outline: none;border:none;border-bottom: 2px solid black;color: orange;font-weight: bold;">
    </div>
     <div class="form-group" style="">
      <label>Network Security</label>
      <input type="text" name="networking" value="" class="form-control"style="background-color: rgba(255,255,255,0.8);outline: none;border:none;border-bottom: 2px solid black;color: orange;font-weight: bold;">
    </div>
    <div class="form-group" style="">
      <label>Total Marks Obtain</label>
      <input type="text" name="total" value="" class="form-control"style="background-color: rgba(255,255,255,0.8);outline: none;border:none;border-bottom: 2px solid black;color: orange;font-weight: bold;">
    </div>
      <div class="form-group" style="">
      <label>CGPA</label>
      <input type="text" name="cgpa" value="" class="form-control"style="background-color: rgba(255,255,255,0.8);outline: none;border:none;border-bottom: 2px solid black;color: #fff;font-weight: bold;">
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
        <div class="col-12 text-center">Semester3 Result Form</div>
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
if ($_POST['submit']) {

$a = $_POST['roll'];
$b = $_POST['name'];
$c = $_POST['father'];
$d = $_POST['course'];
$e = $_POST['year'];
$f = $_POST['python'];
$g = $_POST['physics'];
$h = $_POST['linux'];
$i = $_POST['dbms'];
$j = $_POST['networking'];
$k = $_POST['total'];
$l = $_POST['cgpa'];




if ($a!="" && $b!=""&& $c!="" && $d!="" && $e!="" && $f!="" && $g!="" && $h!="" && $i!="" && $j!="" && $k!="" && $l!="") {


$query = "INSERT INTO SEMESTER3 VALUES ('$a','$b','$c','$d','$e','$f','$g','$h','$i','$j','$k','$l')";
$data = mysqli_query($conn, $query);

if ($data) {
echo "Marks insert successfully....";
}
}
else
{
 die("Marks not inserted check your form".mysqli_connect_error());
}

}


?> 
<style>
  

  section
{
  
  
  
  background-image: url(semester3.jpg);
background-size: cover;
background-position: center;
background-repeat: no-repeat;

}
input
{
  color: #fff;
  text-align: center;align-items: center;outline: 0px;
  margin-top: 8px;
 
  background: rgba(255,255,255,0.3);


}
input:hover
{
  box-shadow: none;
}
label
{
  
  font-weight: bold;
  color: orange;

}
img:hover
{
  box-shadow: none;
}
</style>
