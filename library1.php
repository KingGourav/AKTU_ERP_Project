<?php
 session_start();
 $a = $_SESSION['user_name'];

include("connection.php");
error_reporting(0);
 
 $query = "SELECT `roll`, `name`, `course`, `branch`, `year`, `date`, `book`, `bookname`, `returndate` FROM `LIBRARY` WHERE  $a=`roll`";
$data = mysqli_query($conn, $query);
$total = mysqli_num_rows($data);


  while ($result = mysqli_fetch_assoc($data)) {
  
$b=$result['roll'];
$c=$result['name'];
$d=$result['course'];
$e=$result['branch'];
$f=$result['year'];
$g=$result['date'];
$h=$result['book'];
$i=$result['bookname'];
$j=$result['returndate'];





   
}


?>














<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="glass.css">
</head>
<body style="color: #000;">
	<section>
		<div class="card">
			<div class="face front">
				<h1 class="debit">Library card <br><label class="a">Roll No -<?php echo $b; ?></label><br>
				<label>Name -<?php echo $c; ?></label><br>
				<label>Course -<?php echo $d; ?></label><br>
				<label>Branch -<?php echo $e; ?></label><br></h1>
			
				
			</div>
			<div class="face back">
				<div class="blackbar" style="border-bottom: 2px solid orange;"><label>Year -<?php echo $f; ?></label><br>
				<label>Date of issue -<?php echo $g; ?></label><br>
					<label>Book No -<?php echo $h; ?></label><br>
				<label>Book Name -<?php echo $i; ?></label><br>
					<label>Return Date -<?php echo $j; ?></label><br></div>

				
			</div>
		</div>
	</section>

</body>
</html>