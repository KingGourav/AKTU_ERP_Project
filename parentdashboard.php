 <?php 
 
SESSION_start();



 $a = $_SESSION['user_name'];

include("connection.php");
error_reporting(0);
 
 $query = "SELECT `news1`, `news2`, `news3` FROM `notification_parents`";
$data = mysqli_query($conn, $query);
$total = mysqli_num_rows($data);


  while ($result = mysqli_fetch_assoc($data)) {

$b=$result['news1'];
$c=$result['news2'];
$d=$result['news3'];





   
}


?>

 


         







<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>Parent Dashboard</title>
  </head>
  <body class="bg-light">
  </body>

    <div class="container-fluid"style="background:orange;">
      <div class="row">
        <div class="col-12">
          <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
     <p class="text-center"><i class="fas fa-bullhorn"></i>  Notification....<?php echo $b;?></p>
    </div>
    <div class="carousel-item">
      <p class="text-center"><i class="fas fa-bullhorn"></i>  Notification....<?php echo $c;?></p>
    </div>
    <div class="carousel-item">
       <p class="text-center"><i class="fas fa-bullhorn"></i>   Notification....<?php echo $d;?></p>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </a>
</div>


        </div>
       
      </div>
    </div>
 <div class="container"style="margin-top: 50px; ">
          <div class="row">
            <marquee><p>Welcome to Parents Dashboard</p></marquee>
         
              
                  <div class="col-4 a" style="box-shadow: 2px 2px 5px #d9d9d9, -2px -2px 5px #fff;background-color: #fff;"><i class="fas fa-user fa-4x fa-align-center a"></i>
                    <br>
                    <a href="student1.php">
                    <p class="text-center">Student Info</p></a>
                  </div>




                  <div class="col-4 a" style="box-shadow: 2px 2px 5px #d9d9d9, -2px -2px 5px #fff;background-color: #fff;"><i class="fas fa-book fa-5x fa-align-center a"></i><br>
<a href="library1.php">
  <p class="text-center">Library</p></a></div>
                    <div class="col-4 a" style="box-shadow: 2px 2px 5px #d9d9d9, -2px -2px 5px #fff;background-color: #fff;"><i class="far fa-bookmark fa-4x fa-align-center a"></i><br><a href="exam1.php"><p class="text-center">Exam Result</p></a></div>
         
         
          </div>
           <div class="row" style="margin-top: 50px;">
         
              
                  <div class="col-4 a" style="box-shadow: 2px 2px 5px #d9d9d9, -2px -2px 5px #fff;background-color: #fff;"><i class="fas fa-hotel fa-4x fa-align-center a"></i>
                    <br>
                   <a href="hostel1.php"> <p class="text-center">Hostel</p></a>
                  </div>




                   <div class="col-4 a" style="box-shadow: 2px 2px 5px #d9d9d9, -2px -2px 5px #fff;background-color: #fff;"><i class="fas fa-bus fa-4x fa-align-center a"></i><br><a href="transport1.php"><p class="text-center">Transport</p></a></div>
                    <div class="col-4 a" style="box-shadow: 2px 2px 5px #d9d9d9, -2px -2px 5px #fff;background-color: #fff;"><i class="fas fa-rupee-sign fa-4x fa-align-center a"></i><br><a href="money.php"><p class="text-center">Fee record</p></a></div>
                     <div class="row" style="margin-top: 50px;">
         
              
                  <div class="col-4 a" style="box-shadow: 2px 2px 5px #d9d9d9, -2px -2px 5px #fff;background-color: #fff;"><i class="fas fa-certificate  fa-4x fa-align-center a"></i>
                    <br>
                    <p class="text-center">Intership <br>Certification</p>
                  </div>




                   <div class="col-4 a" style="box-shadow: 2px 2px 5px #d9d9d9, -2px -2px 5px #fff;background-color: #fff;"><i class="fas fa-award fa-5x fa-align-center a"></i><br><p class="text-center">Events</p></div>
                    <div class="col-4 a" style="box-shadow: 2px 2px 5px #d9d9d9, -2px -2px 5px #fff;background-color: #fff;"><i class="fas fa-chart-bar fa-5x fa-align-center a"></i><br><p class="text-center">Graphs</p></div>




         
         <div class="col-12 text-center bg-dark" style="color: #fff;margin-top: 100px;"><h7>Developed by coolDeveloper</h7></div>
          </div>
        </div>
   


    <!-- Optional JavaScript; choose one of the two! -->
<script src="https://kit.fontawesome.com/9d33041dbc.js" crossorigin="anonymous"></script>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
             <script src="https://cdn.jsdelivr.net/npm/darkmode-js@1.5.7/lib/darkmode-js.min.js"></script>
<script>
  function addDarkmodeWidget() {
    new Darkmode().showWidget();
  }
  window.addEventListener('load', addDarkmodeWidget);
</script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
  </body>
</html>
<style>
  i
  {
    color: orange;
    
  }
p
{
  margin-top: 5px;
  font-weight: bold;

}
.a:hover
{
  border-bottom: 3px solid orange;
  color: #000;

}


</style>