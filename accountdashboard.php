<?php
SESSION_start();



 $a = $_SESSION['user_name'];
include ("connection.php");
error_reporting(0);


include("connection.php");
error_reporting(0);
 
 $query = "SELECT `name`,`image`,`proffesion` FROM `hostelstaff` WHERE  $a=`id`";
$data = mysqli_query($conn, $query);
$total = mysqli_num_rows($data);


  while ($result = mysqli_fetch_assoc($data)) {

$b=$result['name'];
$c=$result['image'];
$d=$result['proffesion'];







   
}
 $query1 = "SELECT `news1`, `news2`, `news3` FROM `notification_accounts`";
$data1 = mysqli_query($conn, $query1);
$total1 = mysqli_num_rows($data1);


  while ($result1 = mysqli_fetch_assoc($data1)) {

$ne1=$result1['news1'];
$ne2=$result1['news2'];
$ne3=$result1['news3'];





   
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

    <title>Facuilty Dashboard</title>
  </head>
  <body><div class="container-fluid" style="margin-bottom: 20px;background-color: orange;">
    
    <div class="row">
      <div class="col-12">
        

        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
  <p class="text-center"style="color: black;font-weight: bold;"><?php echo $ne1; ?></p>
    </div>
    <div class="carousel-item">
     <p class="text-center"style="color: black;font-weight: bold;"><?php echo $ne2; ?></p>
    </div>
    <div class="carousel-item">
   <p class="text-center"style="color: black;font-weight: bold;"><?php echo $ne3; ?></p>
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

    
   <div class="container-fluid bg-light" style="box-shadow: 4px 4px 10px #d9d9d9, -4px -4px 10px #fff;">
     <div class="row">
       <div class="col-2"style="box-shadow: 4px 4px 10px #d9d9d9, -4px -4px 10px #fff;">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <img src="<?php echo $c;   ?>" class="img-fluid" style="width: 100px;height: 100px;border-radius: 50%;box-shadow: 2px 2px 5px #d9d9d9, -2px -2px 5px #fff;border:2px solid #000;align-items: center;background-color: #fff;">
              <h5><?php echo $b; ?></h5>
              <p><?php echo $d; ?></p>
            </div>
          </div>
        </div>
  <div class="container-fluid" style="margin-top: 7px; background-color: #fff;">
          <div class="row">
            <div class="col-12">

              <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
  

  <div class="btn-group" role="group">
    <button id="btnGroupDrop1" type="button" class="btn  dropdown-toggle " data-bs-toggle="dropdown" aria-expanded="false" style="outline: 0px;"><i class="fas fa-user"></i>
      Account
    </button>
    <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">

       <li><a class="dropdown-item" href="salary.php"> Salary</a></li>
      <li><a class="dropdown-item" href="displaysalary.php">Display Salary Record</a></li>
    </ul>
  </div>
</div>

            </div>
          </div>
        </div>
         <div class="container-fluid" style="margin-top: 7px; background-color: #fff;">
          <div class="row">
            <div class="col-12">

              <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
  

  <div class="btn-group" role="group">
    <button id="btnGroupDrop1" type="button" class="btn  dropdown-toggle " data-bs-toggle="dropdown" aria-expanded="false" style="outline: 0px;"><i class="fas fa-user"></i>
      Student
    </button>
    <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">

       <li><a class="dropdown-item" href="displaystudentrecord.php"> Display student</a></li>
      <li><a class="dropdown-item" href="parentsdisplayinfo.php">Display Parent</a></li>
    </ul>
  </div>
</div>

            </div>
          </div>
        </div>
                 <div class="container-fluid" style="margin-top: 7px; background-color: #fff;">
          <div class="row">
            <div class="col-12">

              <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
  

  <div class="btn-group" role="group">
    <button id="btnGroupDrop1" type="button" class="btn  dropdown-toggle " data-bs-toggle="dropdown" aria-expanded="false" style="outline: 0px;"><i class="fas fa-user"></i>
      Facuilty
    </button>
    <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">

       <li><a class="dropdown-item" href="facuiltydisplaydata.php"> Display Facuilty</a></li>
     
    </ul>
  </div>
</div>

            </div>
          </div>
        </div>
                 <div class="container-fluid" style="margin-top: 7px; background-color: #fff;">
          <div class="row">
            <div class="col-12">

              <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
  

  <div class="btn-group" role="group">
    <button id="btnGroupDrop1" type="button" class="btn  dropdown-toggle " data-bs-toggle="dropdown" aria-expanded="false" style="outline: 0px;"><i class="fas fa-user"></i>
      Staff
    </button>
    <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">


       <li><a class="dropdown-item" href="displaystaffinfo.php"> Display Staff Data</a></li>
      <li><a class="dropdown-item" href="displayhostelinfo.php">Display Hostel Staff</a></li>
    </ul>
  </div>
</div>

            </div>
          </div>
        </div>
            <div class="container-fluid" style="margin-top: 7px; background-color: #fff;">
          <div class="row">
            <div class="col-12">

              <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
  

  <div class="btn-group" role="group">
    <button id="btnGroupDrop1" type="button" class="btn  dropdown-toggle " data-bs-toggle="dropdown" aria-expanded="false" style="outline: 0px;"><i class="fas fa-clipboard-list"></i>
      Expanses
    </button>
    <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
      <li><a class="dropdown-item" href="expanse.php">Add Expanse Entry</a></li>
      <li><a class="dropdown-item" href="displayexpanse.php">Display Expanse Report</a></li>
      
      

    </ul>
  </div>
</div>

            </div>
          </div>
        </div>
           

            <div class="container-fluid" style="margin-top: 7px; background-color: #fff;">
          <div class="row">
            <div class="col-12">

              <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
  

  <div class="btn-group" role="group">
    <button id="btnGroupDrop1" type="button" class="btn  dropdown-toggle " data-bs-toggle="dropdown" aria-expanded="false" style="outline: 0px;"><i class="fas fa-hotel"></i>
      Reports
    </button>
    <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
      
             <li><a class="dropdown-item" href="feedisplay.php">Display Fee </a></li>
     <li><a class="dropdown-item" href="displaysalary.php">Display Salary </a></li>
      <li><a class="dropdown-item" href="displayexpanse.php">Display Expanse </a></li>
  </div>
</div>


            </div>
          </div>

        </div>
                  <div class="container-fluid" style="margin-top: 7px; background-color: #fff;">
          <div class="row">
            <div class="col-12">

              <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
  

  <div class="btn-group" role="group">
    <button id="btnGroupDrop1" type="button" class="btn  dropdown-toggle " data-bs-toggle="dropdown" aria-expanded="false" style="outline: 0px;"><i class="fas fa-comments-dollar"></i>
      Fee Records
    </button>
    <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
      <li><a class="dropdown-item" href="feedisplay.php">Display Fee Records</a></li>
       <li><a class="dropdown-item" href="feedisplayoperation.php"> Fee Operations</a></li>
         <li><a class="dropdown-item" href="fee.php"> Fee Submit</a></li>
     
    </ul>
  </div>
</div>


            </div>
          </div>

        </div>

                  <div class="container-fluid" style="margin-top: 7px; background-color: #fff;">
          <div class="row">
            <div class="col-12">

              <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
  

  <div class="btn-group" role="group">
    <button id="btnGroupDrop1" type="button" class="btn  dropdown-toggle " data-bs-toggle="dropdown" aria-expanded="false" style="outline: 0px;"><i class="fas fa-comments"></i>
      Notifications
    </button>
    <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
      <li><a class="dropdown-item" href="notification_student.php">Notification for Student</a></li>
      <li><a class="dropdown-item" href="notification_parents.php">Notification for parents</a></li>
      
    </ul>
  </div>
</div>


            </div>
          </div>

        </div>
                  
         <div class="container-fluid" style="margin-top: 7px; background-color: #fff;">
          <div class="row">
            <div class="col-12">

              <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
  

  <div class="btn-group" role="group">
    <button id="btnGroupDrop1" type="button" class="btn  dropdown-toggle " data-bs-toggle="dropdown" aria-expanded="false" style="outline: 0px;"><i class="fas fa-chart-pie"></i>
      Graphs
    </button>
    <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
      <li><a class="dropdown-item" href="#">Student Graph</a></li>
      <li><a class="dropdown-item" href="#">Semester 1 graph</a></li>
       <li><a class="dropdown-item" href="#">Semester 2 graph</a></li>
      <li><a class="dropdown-item" href="#">Semester 3 graph</a></li>
       <li><a class="dropdown-item" href="#">Fee graph</a></li>

    </ul>
  </div>
</div>


            </div>
          </div>

        </div>


     

        <div class="container-fluid" style="background-color: #fff;margin-top: 100px;">
  <div class="row">
    <div class="col-12"><img src="4.png" class="img-fluid"></div>
  </div>
</div>
       </div>
       <div class="col-10 " style="background-color: #fff;">
         <nav class="navbar navbar-expand-lg navbar-light bg-light" style="border-bottom: 3px solid orange;">
  <div class="container-fluid"style="box-shadow: 2px 2px 5px #d9d9d9, -2px -2px 5px #fff;">
    <a class="navbar-brand" href="eye.html">Account Dashboard</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Display Exam Report</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="feedisplay.php">Display Fee Record</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            OneClick
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="displayattendence.php">View Attendence Report</a></li>
            <li><a class="dropdown-item" href="displaycalender.php">View Accademic Report</a></li>
            <li><a class="dropdown-item" href="displayexam.php">View Exam Report</a></li>
            <li><a class="dropdown-item" href="#">View Student Report</a></li>
             <li><a class="dropdown-item" href="#">View Facuilty Report</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Go to WEBSITE</a></li>
          </ul>
        </li>
       
      </ul>
      <form class="d-flex" action="" method="GET">
        <input class="form-control me-2" type="search" placeholder="Enter ID No" aria-label="Search" name="name">
       <input type="submit" name="submit" value="search" style="background-color: orange;color: #000;font-weight: bold;" class="btn">
      </form>
      <?php 
if (isset($_GET['submit'])){
  $a = $_GET['name'];
 $query = "SELECT `roll`, `name`,`father`, `course`,`branch`, `dat`,`semester1`, `semester2`,`semester3`, `semester4`,`semester5`, `semester6`,`semester7`, `semester8` FROM `Fee` WHERE  $a=`roll`";
$data = mysqli_query($conn, $query);
$total = mysqli_num_rows($data);


  while ($result = mysqli_fetch_assoc($data)) {
  
$b=$result['roll'];
$c=$result['name'];
$d=$result['father'];
$e=$result['course'];
$f=$result['branch'];
$g=$result['dat'];
$h=$result['semester1'];
$i=$result['semester2'];
$j=$result['semester3'];
$k=$result['semester4'];
$l=$result['semester5'];
$m=$result['semester6'];
$n=$result['semester7'];
$o=$result['semester8'];





   
}
}

      ?>
    </div>
  </div>
</nav>
<div class="container"style="margin: 2px;">
  <div class="row" style="margin-top: 50px;">
    <div class="col-4">
      <div class="card" style="box-shadow: 4px 4px 10px #d9d9d9, -4px -4px 10px #fff;">
        <div class="card-body"><img src="1.png" class="img-fluid" style="height: 270px;">   user</div>
      </div>
    </div>
      <div class="col-4">  <div class="card" style="box-shadow: 4px 4px 10px #d9d9d9, -4px -4px 10px #fff;">
        <div class="card-body"><img src="2.png" class="img-fluid" style="height: 270px;">   user</div>
      </div></div>
        <div class="col-4">  <div class="card" style="box-shadow: 4px 4px 10px #d9d9d9, -4px -4px 10px #fff;">
        <div class="card-body"><img src="3.png" class="img-fluid" style="height: 270px;">  user</div>
      </div></div>
<div class="container"style="margin-top: 20px;">
  <div class="row">

    <div class="col-12">

      <section>
        <?php
                 $query1 = "SELECT * FROM HOSTELSTAFF";
$data1 = mysqli_query($conn, $query1);
$total1 = mysqli_num_rows($data1);
echo "Total Hostel Staff ---->";echo $total1;

?>
  <?php
                 $query2 = "SELECT * FROM STAFF";
$data2 = mysqli_query($conn, $query2);
$total2 = mysqli_num_rows($data2);
echo "Total Campus Staff ---->";echo $total2;

?>
  <?php
                 $query3 = "SELECT * FROM FACUILTY";
$data3 = mysqli_query($conn, $query3);
$total3 = mysqli_num_rows($data3);
echo "Total Campus Facuilty ---->";echo $total3;

?>
  <?php
                 $query4 = "SELECT * FROM STUDENT";
$data4 = mysqli_query($conn, $query4);
$total4 = mysqli_num_rows($data4);
echo "Total Campus STUDENT ---->";echo $total4;

?>
  <?php
                 $query5 = "SELECT * FROM PARENTS";
$data5 = mysqli_query($conn, $query5);
$total5 = mysqli_num_rows($data5);
echo "Total Parents ---->";echo $total5;

?>


</section>

</div>
<div class="col-12" style="margin-top: 20px;"><table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">Roll</th>
      <th scope="col">Name</th>
       <th scope="col">Father Name</th>
      <th scope="col">Course</th>
       <th scope="col">Branch</th>
      <th scope="col">Date</th>
       <th scope="col">Semester1</th>
      <th scope="col">Semester2</th>
       <th scope="col">Semester3</th>
      <th scope="col">Semester4</th>
       <th scope="col">Semester5</th>
      <th scope="col">Semester6</th>
       <th scope="col">Semester7</th>
      <th scope="col">Semester8</th>
   
    </tr>
  </thead>
  <tbody>
    <tr>
    <td><?php echo $b; ?></td>
    <td><?php echo $c; ?></td>
     <td><?php echo $d; ?></td>
    <td><?php echo $e; ?></td>
     <td><?php echo $f; ?></td>
    <td><?php echo $g; ?></td>
     <td><?php echo $h; ?></td>
    <td><?php echo $i; ?></td>
     <td><?php echo $j; ?></td>
    <td><?php echo $k; ?></td>
     <td><?php echo $l; ?></td>
    <td><?php echo $m; ?></td>
     <td><?php echo $n; ?></td>
    <td><?php echo $o; ?></td>
 
  
    </tr>
  </tbody>
</table></div>

</div>
</div>

<div class="container-fluid bg-dark"style="margin-top:300px;">
  <div class="row">
    <div class="col-2">1</div>
      <div class="col-2">2</div>
        <div class="col-2">3</div>
          <div class="col-2">4</div>
            <div class="col-2">5</div>
  </div>
</div>
       </div>
     </div>
   </div>
<script src="https://kit.fontawesome.com/9d33041dbc.js" crossorigin="anonymous"></script>
    <!-- Optional JavaScript; choose one of the two! -->

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
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="jquery.ripples-min.js"></script>
<script type="text/javascript">
  $(document).ready(function()
  {
    $('section').ripples();
  })
</script>
  </body>
</html>
<style>
  i
  {
    color: orange;
  }
  h5
  {
    color: orange;
    text-shadow: 2px 1px 2px rgba(0,0,0,0.4);
    font-weight: bold;
  }
  p{

color: orange;

      }
      section
      {
       background-image: url(staff.jpg);
       background-size: cover;
       background-position: center;
       background-repeat: no-repeat;
        width: 100%;
        height: 400px;
        color: #fff;
      }
      .dropdown-item:hover
      {
        background-color: orange;
        color: #fff;
        font-weight: bold;
      }
</style>