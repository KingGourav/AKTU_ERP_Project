<style>

</style>
<div class="container-fluid">
  <div class="row">
    <div class="col-12 text-center" style="color: red;"><h4>Library Record</h4>

  </div>
  <div class="row">
    <div class="col-6"></div>
    <div class="col-6"></div>
  </div>
</div>







<table class="table table-dark table-hover table-striped" style="border:1px solid orange;">
 <thead>
    <tr>
      <th scope="col">Roll no</th>
       <th scope="col">Name</th>
      <th scope="col">Course</th>
      <th scope="col">Branch</th>
      <th scope="col">Year</th>
       <th scope="col">Date of issue</th>
      <th scope="col">Book no</th>
      <th scope="col">Book Name</th>
      <th scope="col">Return Date</th>

      <th scope="col" colspan="1">Operation</th>
    </tr>
  </thead>


<?php
include("connection.php");
error_reporting(0);
$query = "SELECT * FROM LIBRARY";
$data = mysqli_query($conn, $query);
$total = mysqli_num_rows($data);



if($total != 0)
{
while ($result = mysqli_fetch_assoc($data)) {
  echo " <tbody>
    <tr>
<td>".$result['roll']."</td>

<td>".$result['name']."</td>
<td>".$result['course']."</td>
<td>".$result['branch']."</td>
<td>".$result['year']."</td>
<td>".$result['date']."</td>
<td>".$result['book']."</td>
<td>".$result['bookname']."</td>
<td>".$result['returndate']."</td>

     <td><a href='updatelibrary.php?a=$result[roll]'onclick='return checkdelete()'>Delete</a></td>
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
<script type="text/javascript">
	function checkdelete()
	{
		return confirm('Are you sure you want to delete this data');
	}
</script>




<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>Library Record</title>
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