<style>

</style>
<div class="container-fluid">
  <div class="row">
    <div class="col-12 text-center" style="color: red;"><h4>Notification For Students</h4>

  </div>
  <div class="row">
    <div class="col-6"></div>
    <div class="col-6"></div>
  </div>
</div>







<table class="table table-dark table-hover table-striped" style="border:1px solid orange;">
 <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">News1</th>
       <th scope="col">News2</th>
      <th scope="col">News3</th>
     
      <th scope="col" colspan="2">Operation</th>
    </tr>
  </thead>


<?php
include("connection.php");
error_reporting(0);
$query = "SELECT * FROM NOTIFICATION_STUDENT";
$data = mysqli_query($conn, $query);
$total = mysqli_num_rows($data);



if($total != 0)
{
while ($result = mysqli_fetch_assoc($data)) {
  echo " <tbody>
    <tr>
    <td>".$result['id']."</td>

<td>".$result['news1']."</td>

<td>".$result['news2']."</td>
<td>".$result['news3']."</td>

<td><a href='update_student_news.php?z=$result[id]&a=$result[news1]&b=$result[news2]&c=$result[news3]'>Edit</a></td>

   
   
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

    <title>Hello, world!</title>
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