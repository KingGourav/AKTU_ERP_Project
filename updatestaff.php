
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

    <title>Staff Updation Form</title>
  </head>
  <body class="bg-light">
   
<div class="container">
<div class="card-header text-center" style="background-color: orange;color: #fff;box-shadow: 0px 0px 4px 2px rgba(0,0,0,.5);"><h1>Staff Updation Form</h1></div>
<div class="card-body" style="background-color: #fff;">
  <form action="" method="GET" >
    <div class="form-group" style="">
      <label>Id NO</label>
      <input type="text" name="id" value="<?php  echo $_GET['a']; ?>" class="form-control">
    </div>
    <div class="form-group" style="">
      <label>Name</label>
      <input type="text" name="name" value="<?php  echo $_GET['b']; ?>" class="form-control">
    </div>
    <div class="form-group">
      <label>Age</label>
      <input type="text" name="age" value="<?php  echo $_GET['c']; ?>" class="form-control">
    </div>
    <div class="form-group">
      <label>Gender</label>
      <input type="text" name="gender" value="<?php  echo $_GET['d']; ?>" class="form-control">
    </div>
    <div class="form-group">
      <label>proffesion</label>
      <input type="text" name="proffesion" value="<?php  echo $_GET['e']; ?>" class="form-control">
    </div>
    <div class="form-group">
      <label>Date Of Joining</label>
      <input type="text" name="dat" value="<?php  echo $_GET['f']; ?>" class="form-control">
    </div>
    <div class="form-group">
      <label>Contact</label>
      <input type="text" name="contact" value="<?php  echo $_GET['g']; ?>" class="form-control">
    </div>
    <div class="form-group">
      <label>Whatsup</label>
      <input type="text" name="whatsup" value="<?php  echo $_GET['h']; ?>" class="form-control">
    </div>
    <div class="form-group">
      <label>Salary</label>
      <input type="text" name="salary" value="<?php  echo $_GET['i']; ?>" class="form-control">
    </div>
    <div class="form-group">
      <label>Father Name</label>
      <input type="text" name="father" value="<?php  echo $_GET['j']; ?>" class="form-control">
    </div>
    <div class="form-group">
      <label>Mother Name</label>
      <input type="text" name="mother" value="<?php  echo $_GET['k']; ?>" class="form-control">
    </div>

    <div class="form-group">
      <label>Address</label>
      <input type="text" name="address" value="<?php  echo $_GET['l']; ?>" class="form-control">
    </div>
    <div class="form-group">
      <label>Proof</label>
      <input type="text" name="proof" value="<?php  echo $_GET['m']; ?>" class="form-control">
    </div>
    <div class="form-group">
      <label>Experince</label>
      <input type="text" name="experince1" value="<?php  echo $_GET['n']; ?>" class="form-control">
    </div>
    
     <center><input type="submit" name="submit" value="Update"/ class="btn btn-primary"style="width: 200px"></center>
  </form>

  <?php
if($_GET['submit'])
{

	$na = $_GET['id'];
	$nb = $_GET['name'];
	$nc = $_GET['age'];
	$nd = $_GET['gender'];
	$ne = $_GET['proffesion'];
	$nf = $_GET['dat'];
	$ng = $_GET['contact'];
	$nh = $_GET['whatsup'];
	$ni = $_GET['salary'];
	$nj = $_GET['father'];
	$nk = $_GET['mother'];
	$nl = $_GET['address'];
	$nm = $_GET['proof'];
	$nn = $_GET['experince1'];

	
	$query = "UPDATE STAFF SET NAME='$nb' , AGE='$nc' , GENDER='$nd' , PROFFESION='$ne' , DAT='$nf' , CONTACT='$ng' ,WHATSUP='$nh' , SALARY='$ni' , FATHER='$nj' , MOTHER='$nk' , ADDRESS='$nl' , PROOF='$nm' ,EXPERINCE1='$nn' WHERE ID='$na' ";
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
<div class="card-footer text-center bg-dark"><p style="color: #fff;letter-spacing: 1px;">Staff Update info Form</p></div>
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




