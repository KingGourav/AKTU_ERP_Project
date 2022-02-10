<?php
 session_start();
 $a = $_SESSION['user_name'];

include("connection.php");
error_reporting(0);
 
 $query = "SELECT `name`, `roll`, `course`, `branch`, `year`, `whatsup1`, `contact1`, `mail`, `father`, `occoupation1`, `income`, `contact2`, `mother`, `occoupation2`, `contact3`, `mail2`, `tenth`, `two`, `addtional`, `current`, `village`, `pincode` FROM `STUDENT1` WHERE  $a=`roll`";
$data = mysqli_query($conn, $query);
$total = mysqli_num_rows($data);


  while ($result = mysqli_fetch_assoc($data)) {
  echo $a;
$b=$result['name'];
$c=$result['roll'];
$d=$result['course'];
$e=$result['branch'];
$f=$result['year'];
$g=$result['whatsup1'];
$h=$result['contact1'];
$i=$result['mail'];
$j=$result['father'];
$k=$result['occoupation1'];
$l=$result['income'];
$m=$result['contact2'];
$n=$result['mother'];
$o=$result['occoupation2'];
$p=$result['contact3'];
$q=$result['mail2'];
$r=$result['tenth'];
$s=$result['two'];
$t=$result['addtional'];
$u=$result['current'];
$v=$result['village'];
$w=$result['pincode'];





   
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

    <title>Student Portfilo</title>
  </head>
  <body>
    <div class="container bg-light">
      <div class="row">
        <div class="col-12 text-center"><h1 style="color: red;font-weight: 700;">Student Details</h1></div>
      </div>
    </div>
    <div class="container overflow-hidden" style="margin-top: 40px;margin-bottom: 40px;">
  <div class="row gy-5">
    <div class="col-6" style="">
      <div class="p-3 border bg-light" style="box-shadow: 2px 4px 16px rgba(0,0,0,0.5);">
        <p>Personal Details</p>
          <label>Name ---><?php echo $b; ?></label><br>
          <label>Roll ---><?php echo $c; ?></label><br>
          <label>Course ---><?php echo $d; ?></label><br>
          <label>Branch ---><?php echo $e; ?></label><br>
          <label>Year ---><?php echo $f; ?></label><br>
          <label>Whatsup No ---><?php echo $g; ?></label><br>
          <label>Contact No ---><?php echo $h; ?></label><br>
          <label>Mail ---><?php echo $i; ?></label><br>







      </div>
    </div>
    <div class="col-6">
      <div class="p-3 border bg-light" style="box-shadow: 2px 4px 16px rgba(0,0,0,0.5);"> <p>Parents Details</p>
          <label>Father Name ---><?php echo $j; ?></label><br>
          <label>Occoupation ---><?php echo $k; ?></label><br>
          <label>Anual Income ---><?php echo $l; ?></label><br>
          <label>Contact No ---><?php echo $m; ?></label><br>
           <label>Mother Name ---><?php echo $n; ?></label><br>
          <label>Occoupation< ---><?php echo $o; ?>/label><br>
          <label>Contact No ---><?php echo $p; ?></label><br>
           <label>Mail ---><?php echo $q; ?></label><br></div>
    </div>
    <div class="col-6">
      <div class="p-3 border bg-light" style="box-shadow: 2px 4px 16px rgba(0,0,0,0.5);">  <p>Educational Details</p>
            <label>10th marks ---><?php echo $r; ?></label><br>
            <label>12th marks ---><?php echo $s; ?></label><br>
            <label>Addtional Course ---><?php echo $t; ?></label></div>
    </div>
    <div class="col-6" >
      <div class="p-3 border bg-light" style="box-shadow: 2px 4px 16px rgba(0,0,0,0.5);"><p>Address Details</p>
          <label>Current Address ---><?php echo $u; ?></label><br>
          <label>Village Address ---><?php echo $v; ?></label><br>
          <label>Pincode ---><?php echo $w; ?></label>


        </div>
    </div>
  </div>
</div>
<div class="container-fluid bg-dark">
  <div class="row">
    <div class="col-12 text-center"><h3 style="color: #fff;font-weight: 100;">Developed by Cool Developers</h3>
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
<style>
  
  p
  {
    color: red;
    font-weight: bold;
    letter-spacing: 1px;
  }
  label
  {
    color: #000;
    font-weight: bold;
  }
</style>