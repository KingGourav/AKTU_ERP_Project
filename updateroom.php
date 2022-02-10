
<?php
include ("connection.php");
error_reporting(0);



?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

    <title>Room Updation Form</title>
  </head>
  <body class="bg-light">
   
<div class="container">
<div class="card-header text-center" style="background-color: orange;color: #fff;box-shadow: 0px 0px 4px 2px rgba(0,0,0,.5);"><h1>Room Updation Form</h1></div>
<div class="card-body" style="background-color: #fff;">
  <form action="" method="GET" >
    <div class="form-group" style="">
      <label>Roll No</label>
      <input type="text" name="roll" value="<?php  echo $_GET['a']; ?>" class="form-control">
    </div>
    <div class="form-group" style="">
      <label>Name</label>
      <input type="text" name="name" value="<?php  echo $_GET['b']; ?>" class="form-control">
    </div>
    <div class="form-group">
      <label>Branch</label>
      <input type="text" name="branch" value="<?php  echo $_GET['c']; ?>" class="form-control">
    </div>
    <div class="form-group">
      <label>Course</label>
      <input type="text" name="course" value="<?php  echo $_GET['d']; ?>" class="form-control">
    </div>
    <div class="form-group">
      <label>Year</label>
      <input type="text" name="year" value="<?php  echo $_GET['e']; ?>" class="form-control">
    </div>
    <div class="form-group">
      <label>Father Name</label>
      <input type="text" name="father" value="<?php  echo $_GET['f']; ?>" class="form-control">
    </div>
    <div class="form-group">
      <label>Mother Name</label>
      <input type="text" name="mother" value="<?php  echo $_GET['g']; ?>" class="form-control">
    </div>
    <div class="form-group">
      <label>Room Type</label>
      <input type="text" name="roomtype" value="<?php  echo $_GET['h']; ?>" class="form-control">
    </div>
    <div class="form-group">
      <label>Date</label>
      <input type="text" name="date" value="<?php  echo $_GET['i']; ?>" class="form-control">
    </div>
    <div class="form-group">
      <label>Floor</label>
      <input type="text" name="floor" value="<?php  echo $_GET['j']; ?>" class="form-control">
    </div>
    <div class="form-group">
      <label>roomno</label>
      <input type="text" name="roomno" value="<?php  echo $_GET['k']; ?>" class="form-control">
    </div>
     <center><input type="submit" name="submit" value="Update"/ class="btn btn-primary"style="width: 200px"></center>
  </form>

  <?php
if($_GET['submit'])
{

	$na = $_GET['roll'];
	$nb = $_GET['name'];
	$nc = $_GET['branch'];
	$nd = $_GET['course'];
	$ne = $_GET['year'];
	$nf = $_GET['father'];
	$ng = $_GET['mother'];
	$nh = $_GET['roomtype'];
	$ni = $_GET['date'];
	$nj = $_GET['floor'];
	$nk = $_GET['roomno'];

	
	$query = "UPDATE ROOM SET NAME='$nb' , BRANCH='$nc' , COURSE='$nd' , YEAR='$ne' , FATHER='$nf' , MOTHER='$ng' ,ROOMTYPE='$nh' , Dat='$ni' , FLOOR='$nj' , ROOMNO='$nk' WHERE ROLL='$na' ";
	$data = mysqli_query($conn, $query);
	if ($data) {

		echo "data update successfully";
	}
	else
	{
		echo "not update";
	}
}
else
{
	echo "click to update for save changes";
}


?> 
 
</div>
<div class="card-footer text-center bg-dark"><p style="color: #fff;letter-spacing: 1px;">Student Update info Form</p></div>
</div>

</body>




























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
.form-control
{
  border:0px;
  
  border-bottom: 2px solid #000;
  margin-bottom: 4px;
  outline:0px;
  text-align: center;
  color: #000;
font-family: 'Roboto', sans-serif;
background-color: transparent;
transition: 0.5s all;
}
.form-control:hover
{
  transform: translateY(-10px);

}
label
{
  color: #000;
  font-weight: bold;
  text-shadow: 1px 4px 2px rgba(0,0,0,0.3);
  transition: 1s;
}
label:hover
{
  color: orange;
  text-shadow: none;
}
h1
{
  color: #fff;
 font-family: 'Roboto', sans-serif;
 font-weight: 500;
}
button
{
  margin-top: 5px;
  width: 100px;
}
.card-footer
{
  margin-bottom: 20px;
}
p{
  font-weight: bold;
  font-family: 'Roboto', sans-serif;
  color: orange;
}


</style>




