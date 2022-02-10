<?php 
include ("connection.php");
error_reporting(0);

 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
 	<form action="" method="GET">
 		Name<input type="name" name="name">
 		<input type="submit" name="submit" value="submit">
 	</form>
 
 </body>
 </html>
 <?php 
 $a = $_GET['name'];

 $query = "INSERT INTO DOC VALUES ('$a')";
 $data = mysqli_query($conn ,$query);
 if ($data) {
 	echo "inserted";
 }
 else

 {
 	echo "not inserted";
 }

  ?>