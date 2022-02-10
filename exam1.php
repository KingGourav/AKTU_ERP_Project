<?php
 session_start();
 $a = $_SESSION['user_name'];

include("connection.php");
error_reporting(0);

 
 $query = "SELECT `roll`, `name`, `father`, `course`, `year`, `math`, `english`, `computer`, `ai`, `web`, `total`, `cgpa` FROM `SEMESTER1` WHERE  $a=`roll`";
$data = mysqli_query($conn, $query);
$total = mysqli_num_rows($data);


  while ($result = mysqli_fetch_assoc($data)) {
  
$b=$result['roll'];
$c=$result['name'];
$d=$result['father'];
$e=$result['course'];
$f=$result['year'];
$g=$result['math'];
$h=$result['english'];
$i=$result['computer'];
$j=$result['ai'];
$k=$result['web'];
$l=$result['total'];
$m=$result['cgpa'];


}
// semester 2


 $query1 = "SELECT `roll`, `name`, `father`, `course`, `year`, `os`, `java`, `php`, `maths2`, `ds`, `total`, `cgpa` FROM `SEMESTER2` WHERE  $a=`roll`";
$data1 = mysqli_query($conn, $query1);
$total1 = mysqli_num_rows($data1);


  while ($result1 = mysqli_fetch_assoc($data1)) {

$b1=$result1['roll'];
$c1=$result1['name'];
$d1=$result1['father'];
$e1=$result1['course'];
$f1=$result1['year'];
$g1=$result1['os'];
$h1=$result1['java'];
$i1=$result1['php'];
$j1=$result1['maths2'];
$k1=$result1['ds'];
$l1=$result1['total'];
$m1=$result1['cgpa'];


// semester 3


 $query2 = "SELECT `roll`, `name`, `father`, `course`, `year`, `python`, `physics`, `linux`, `dbms`, `networking`, `total`, `cgpa` FROM `SEMESTER3` WHERE  $a=`roll`";
$data2 = mysqli_query($conn, $query2);
$total2 = mysqli_num_rows($data2);


  while ($result2 = mysqli_fetch_assoc($data2)) {

$b2=$result2['roll'];
$c2=$result2['name'];
$d2=$result2['father'];
$e2=$result2['course'];
$f2=$result2['year'];
$g2=$result2['python'];
$h2=$result2['physics'];
$i2=$result2['linux'];
$j2=$result2['dbms'];
$k2=$result2['networking'];
$l2=$result2['total'];
$m2=$result2['cgpa'];




   
}

   
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
    <div class="container">
      <div class="row">
        <div class="col-12" style="margin: 10px;">
          <div class="card">
            <div class="card-header">
              <h4 class="text-center">Semester 1 RESULT</h4>
              <p>Roll no :- <?php echo $b; ?></p>
              <p>Name :- <?php echo $c; ?></p>
               <p>Father Name :- <?php echo $d; ?></p>
               <p>Course :- <?php echo $e; ?></p>
               <p>Year :- <?php echo $f; ?></p>
            </div>
            <div class="card-body">
          <table class="table">
  <thead>
    <tr>
      <th scope="col">Enginearing Maths1 </th>
      <th scope="col">Proffesional English </th>
      <th scope="col">C Language </th>
      <th scope="col">Artificial Inteligance </th>
      <th scope="col">Web Development </th>
    </tr>
  </thead>
  <tbody>
   <tr>
     <td><?php echo $g; ?></td>
      <td><?php echo $h; ?></td>
       <td><?php echo $i; ?></td>
        <td><?php echo $j; ?></td>
         <td><?php echo $k; ?></td>
   </tr>
  </tbody>
</table>




            </div>
            <div class="card-footer">

              <p>Total marks Obtain :- <?php echo $l; ?> </p>

<p>CGPA Score:- <?php echo $m; ?></p>

            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-12" style="margin: 10px;">
          <div class="card">
            <div class="card-header">
              <h4 class="text-center">Semester 2 RESULT</h4>
              <p>Roll no :- <?php echo $b1; ?> </p>
              <p>Name :- <?php echo $c1; ?> </p>
               <p>Father Name :- <?php echo $d1; ?> </p>
                <p>Course :- <?php echo $e1; ?></p>
               <p>Year :- <?php echo $f1; ?></p>
            </div>
            <div class="card-body">
          <table class="table">
  <thead>
    <tr>
      <th scope="col">Operating system</th>
      <th scope="col">Java Development</th>
      <th scope="col">Php Development</th>
      <th scope="col">Enginearing Maths2</th>
      <th scope="col">Data Structure</th>
    </tr>
  </thead>
  <tbody>
   <tr>
     <td><?php echo $g1; ?></td>
      <td><?php echo $h1; ?></td>
       <td><?php echo $i1; ?></td>
        <td><?php echo $j1; ?></td>
         <td><?php echo $k1; ?></td>
   </tr>
  </tbody>
</table>




            </div>
            <div class="card-footer"><p>Total marks Obtain :- <?php echo $l1; ?> </p>

<p>CGPA Score:- <?php echo $m1; ?></p>

            </div>
          </div>
        </div>
      </div>
    </div>
        <div class="container">
      <div class="row">
        <div class="col-12" style="margin: 10px;">
          <div class="card">
            <div class="card-header">
              <h4 class="text-center">Semester 3 RESULT</h4>
              <p>Roll no :-<?php echo $b2; ?> </p>
              <p>Name :-<?php echo $c2; ?></p>
               <p>Father Name :- <?php echo $d2; ?></p>
                 <p>Course :- <?php echo $e2; ?></p>
               <p>Year :- <?php echo $f2; ?></p>
            </div>
            <div class="card-body">
          <table class="table">
  <thead>
    <tr>
      <th scope="col">Python</th>
      <th scope="col">Physics</th>
      <th scope="col">Linux Server</th>
      <th scope="col">DBMS</th>
      <th scope="col">Network Security</th>
    </tr>
  </thead>
  <tbody>
   <tr>
     <td><?php echo $g2; ?></td>
      <td><?php echo $h2; ?></td>
       <td><?php echo $i2; ?></td>
        <td><?php echo $j2; ?></td>
         <td><?php echo $k2; ?></td>
   </tr>
  </tbody>
</table>




            </div>
            <div class="card-footer"><p>Total marks Obtain :- <?php echo $l2; ?> </p>

<p>CGPA Score:- <?php echo $m2; ?></p>

            </div>
          </div>
        </div>
      </div>
    </div>
        <div class="container">
      <div class="row">
        <div class="col-12" style="margin: 10px;">
          <div class="card">
            <div class="card-header">
              <h4 class="text-center">Semester 4 RESULT</h4>
              <p>Roll no :-</p>
              <p>Name :-</p>
               <p>Father Name :-</p>
            </div>
            <div class="card-body">
          <table class="table">
  <thead>
    <tr>
      <th scope="col">Enginearing Maths1</th>
      <th scope="col">Proffesional English</th>
      <th scope="col">C Language</th>
      <th scope="col">Artificial Inteligance</th>
      <th scope="col">Web Development</th>
    </tr>
  </thead>
  <tbody>
   <tr>
     <td></td>
      <td></td>
       <td></td>
        <td></td>
         <td></td>
   </tr>
  </tbody>
</table>




            </div>
            <div class="card-footer"><p>Total marks Obtain :- </p>

<p>CGPA Score:-</p>

            </div>
          </div>
        </div>
      </div>
    </div>
      
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