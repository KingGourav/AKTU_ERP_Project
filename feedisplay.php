<?php
include("connection.php");
error_reporting(0);
$query = "SELECT * FROM FEE";
$data = mysqli_query($conn, $query);
$total = mysqli_num_rows($data);

?>
<div class="container-fluid">
  <div class="row">
    <div class="col-12 text-center" style="color: red;"><h4>Fee Display Record</h4>

  </div>
  <div class="row">
    <div class="col-6">Total no of records <?php echo($total) ?></div>
    <div class="col-6"><a href="excel.php"><button type="button" class="btn btn-primary">Export Excel</button></a></div>
  </div>
</div>







<table class="table table-dark table-hover table-striped" style="border:1px solid orange;">
 <thead>
    <tr>
      <th scope="col">Roll No</th>
       <th scope="col">Name</th>
      <th scope="col">Father Name</th>
      <th scope="col">Course</th>
      <th scope="col">Branch</th>
       <th scope="col">Date of Submission</th>
      <th scope="col">semester1</th>
      <th scope="col">semester2</th>
      <th scope="col">semester3</th>
       
      <th scope="col">Semester4</th>
      <th scope="col">semester5</th>
      <th scope="col">Semester6</th>
       <th scope="col">Semester7</th>
      <th scope="col">Semester8</th>
      <th scope="col">Total Amount Recived</th>
      <th scope="col">Total Left Amount</th>
      
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
<td>".$result['branch']."</td>
<td>".$result['dat']."</td>
<td>".$result['semester1']."</td>
<td>".$result['semester2']."</td>
<td>".$result['semester3']."</td>
<td>".$result['semester4']."</td>
<td>".$result['semester5']."</td>
<td>".$result['semester6']."</td>
<td>".$result['semester7']."</td>
<td>".$result['semester8']."</td>
<td>".$result['total']."</td>
<td>".$result['leftamount']."</td>

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

    <title>Display Fee Record</title>
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