<?php
 session_start();
 $a = $_SESSION['user_name'];

include("connection.php");
error_reporting(0);
 
 $query = "SELECT `roll`, `name`, `age`, `gender`, `course`, `branch`, `year`, `date`, `contactno`, `father`, `address`, `location` FROM `TRANSPORT` WHERE  $a=`roll`";
$data = mysqli_query($conn, $query);
$total = mysqli_num_rows($data);


  while ($result = mysqli_fetch_assoc($data)) {
  
$b=$result['roll'];
$c=$result['name'];
$d=$result['age'];
$e=$result['gender'];
$f=$result['course'];
$g=$result['branch'];
$h=$result['year'];
$i=$result['date'];
$j=$result['contactno'];
$k=$result['father'];
$l=$result['address'];
$p=$result['location'];






   
}


?>










<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body class="bg-light" style="font-weight: bold;">
   <div class="container">
     <div class="row">
       <div class="col-12">
         
<div class="card" style=" align-items: center;">
  <img src="" class="card-img-top" alt="..." style="width: 300px;height: 300px;margin-top: 2px;">
  <div class="card-body">
    <h5 class="card-title">Transport Information</h5>
    <p class="card-text">
      <label>Roll no:- <?php echo $b; ?></label><br>
       <label>Name:- <?php echo $c; ?></label><br>
       <label>Age:- <?php echo $d; ?></label><br>
       <label>Gender:- <?php echo $e; ?></label><br>
       <label>Course:- <?php echo $f; ?></label><br>
       <label>Branch:- <?php echo $g; ?></label><br>
       <label>Year:- <?php echo $h; ?></label><br>
       <label>Date of join:- <?php echo $i; ?></label><br>
       <label>Contact No:- <?php echo $j; ?></label><br>
       <label>Father Name:- <?php echo $k; ?></label><br>
       <label>Address:- <?php echo $l; ?></label><br>
        <label>location:- <?php echo $p; ?></label><br>
      

      

    </p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>

       </div>
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