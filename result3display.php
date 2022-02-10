<?php
include("connection.php");
error_reporting(0);
$query = "SELECT * FROM SEMESTER3";
$data = mysqli_query($conn, $query);
$total = mysqli_num_rows($data);

?>
<div class="container-fluid bg-light">
  <div class="row">
    <div class="col-12 text-center" style="color: red;"><h4> SEMESTER 3 EXAM REPORT</h4>

  </div>
  <div class="row" style="margin-top: 30px;margin-bottom: 50px;background-color: #fff;">
    <div class="col-6">Total no of records <?php echo($total) ?></div>
    <div class="col-6"><a href="excel.php"><button type="button" class="btn btn-primary" style="text-align: center;align-items: center;margin-left: 50px;">Export Excel</button></a></div>
  </div>
</div>







<table class="table table-dark table-hover table-striped" style="border:1px solid orange;">
 <thead>
    <tr>
      <th scope="col">Roll No</th>
       <th scope="col">Name</th>
      <th scope="col">Father Name</th>
      <th scope="col">Course</th>
      <th scope="col">Year</th>
       <th scope="col">Python Development</th>
      <th scope="col">Physics</th>
      <th scope="col">Linux Server</th>
      <th scope="col">DBMS</th>
       
      <th scope="col">Network Security</th>
      <th scope="col">Total Marks</th>
      <th scope="col">CGPA</th>
     
      
    </tr>
  </thead>


<?php


if($total != 0)
{
while ($result = mysqli_fetch_assoc($data)) {
  echo " <tbody>
    <tr>
<td>".$result['roll']."</td>

<td>".$result['name']."</td>
<td>".$result['father']."</td>
<td>".$result['course']."</td>
<td>".$result['year']."</td>
<td>".$result['python']."</td>
<td>".$result['physics']."</td>
<td>".$result['linux']."</td>
<td>".$result['dbms']."</td>
<td>".$result['networking']."</td>
<td>".$result['total']."</td>
<td>".$result['cgpa']."</td>


    </tr>
   
  </tbody>";
}
  
}
else
{
  echo "no Record found !";
}

?>
  
 
  <?php 








  ?>
</table>





<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>Display Semester 3 Exam RECORD</title>
  </head>
  <body>
 

























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

</style>