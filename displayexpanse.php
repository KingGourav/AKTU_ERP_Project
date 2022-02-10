<?php
include("connection.php");
error_reporting(0);
$query = "SELECT * FROM EXPANSE";
$data = mysqli_query($conn, $query);
$total = mysqli_num_rows($data);

?>
<div class="container-fluid">
  <div class="row">
    <div class="col-12 text-center" style="color: red;"><h4>Expanse Record</h4>

  </div>
  <div class="row">
    <div class="col-6">Total no of records <?php echo($total) ?></div>
    <div class="col-6"><a href="excel.php"><button type="button" class="btn btn-primary" style="margin-left: 200px;">Export Excel</button></a></div>
  </div>
</div>







<table class="table table-dark table-hover table-striped" style="border:1px solid orange;">
 <thead>
    <tr>
      <th scope="col">Id No</th>
   
      <th scope="col">Date</th>
      <th scope="col">Year</th>
      <th scope="col">Amount</th>
       <th scope="col">Work</th>
      <th scope="col">Invoice</th>
   
    
      
    </tr>
  </thead>


<?php


if($total != 0)
{
while ($result = mysqli_fetch_assoc($data)) {
  echo " <tbody>
    <tr>
<td>".$result['id']."</td>

<td>".$result['date']."</td>
<td>".$result['year']."</td>
<td>".$result['amount']."</td>
<td>".$result['work']."</td>
<td>".$result['invoice']."</td>



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

    <title>Display Expanse Record</title>
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