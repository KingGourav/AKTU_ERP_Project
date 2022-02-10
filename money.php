<?php
 session_start();
 $a = $_SESSION['user_name'];

include("connection.php");
error_reporting(0);
 
 $query = "SELECT `roll`, `name`, `father`, `course`, `branch`, `dat`, `semester1`, `semester2`, `semester3`, `semester4`, `semester5`, `semester6`, `semester7`, `semester8`, `total`, `leftamount` FROM `FEE` WHERE  $a=`roll`";
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
$p=$result['total'];
$q=$result['leftamount'];






   
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

    <title>Hello, world!</title>
  </head>
  <body>
   <section>
    <h3>Fee Record</h3>
    <div class="box">
     <label>Roll No ---> <?php echo $b;?></label><br>
         <label>Name---> <?php echo $c;?></label><br>
             <label>Father Name---> <?php echo $d;?></label><br>
                 <label>Course---> <?php echo $e;?></label><br>
                     <label>Branch---> <?php echo $f;?></label><br>
                         <label>Date---> <?php echo $g;?></label><br>
                             <label>Semester1---> <?php echo $h;?></label><br>
                     <label>Semester2---> <?php echo $i;?></label><br>
                         <label>semester3---> <?php echo $j;?></label><br>
                             <label>Semester4---> <?php echo $k;?></label><br>
                                 <label>Semester5---> <?php echo $l;?></label><br>
                                     <label>Semester6---> <?php echo $m;?></label><br>
                                         <label>Semester7---> <?php echo $n;?></label><br>
                                             <label>Semester8---> <?php echo $o;?></label><br>
                                                 <label>Total paid amount Current Semester---> <?php echo $p;?></label><br>           

 <label>Total unpaid amount Current Semester---> <?php echo $q;?></label><br>
</div>

   </section>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="jquery.ripples-min.js"></script>
<script type="text/javascript">
  $(document).ready(function()
  {
    $('section').ripples();
  })
</script>
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
  section
  {
    width: 100%;
    height: 100vh;
   

      background-image: url(staff.jpg);
background-size: cover;
background-position: center;
background-repeat: no-repeat;
  }
  h3
  {
    text-align: center;
    color: #fff;
  }
  .box
  {
  
    margin-left: 30px;
    color: #fff;
   
    letter-spacing: 1px;
    font-style: serif;
  }
  label
  {
    margin: 4px;
  }
</style>