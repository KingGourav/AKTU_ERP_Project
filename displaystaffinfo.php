<?php
include("connection.php");
error_reporting(0);
$query = "SELECT * FROM STAFF";
$data = mysqli_query($conn, $query);
$total = mysqli_num_rows($data);

?>
<div class="container-fluid">
  <div class="row">
    <div class="col-12 text-center" style="color: red;"><h4>Staff Record</h4>

  </div>
  <div class="row">
    <div class="col-6">Total no of records <?php echo($total) ?></div>
    <div class="col-6"></div>
  </div>
</div>







<table class="table table-dark table-hover table-striped" style="border:1px solid orange;">
 <thead>
    <tr>
      <th scope="col">Id No</th>
       <th scope="col">Image</th>
      <th scope="col">Name</th>
      <th scope="col">Age</th>
      <th scope="col">Gender</th>
       <th scope="col">Proffesion</th>
      <th scope="col">Date of joining</th>
      <th scope="col">Contact</th>
      <th scope="col">Whatsup no</th>
       
      <th scope="col">Salary</th>
      <th scope="col">Father Name</th>
      <th scope="col">Mother name</th>
       <th scope="col">Address</th>
      <th scope="col">Proof</th>
      <th scope="col">Experince</th>
      
    </tr>
  </thead>


<?php


if($total != 0)
{
while ($result = mysqli_fetch_assoc($data)) {
  echo " <tbody>
    <tr>
<td>".$result['id']."</td>
<td><img src='".$result['image']."' height='100px' width='100px' /></td>
<td>".$result['name']."</td>
<td>".$result['age']."</td>
<td>".$result['gender']."</td>
<td>".$result['proffesion']."</td>
<td>".$result['dat']."</td>
<td>".$result['contact']."</td>
<td>".$result['whatsup']."</td>
<td>".$result['salary']."</td>
<td>".$result['father']."</td>
<td>".$result['mother']."</td>
<td>".$result['address']."</td>
<td>".$result['proof']."</td>
<td>".$result['experince1']."</td>

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

    <title>Display Staff Record</title>
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