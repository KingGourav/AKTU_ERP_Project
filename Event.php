<?php
SESSION_start();



 
include ("connection.php");
error_reporting(0);

 $query1 = "SELECT `news1`, `news2`, `news3` FROM `notification_website`";
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
      <link rel="stylesheet" href="animate.css">
      <link rel="stylesheet" type="text/css" href="main.css">
      <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300&display=swap" rel="stylesheet">

    <title>Cool Developer</title>
  </head>
  <body>
  <div class="container-fluid">
    <div class="row">
      <div id="a" class="col-12"style="background-color:orange;">
        <!-- small slider only notification -->
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active text-center">
    <h4><i class="fas fa-bullhorn fa-1x"><?php echo $ne1;  ?></i></h4>
    </div>
    <div class="carousel-item text-center">
    <h4><i class="fas fa-bullhorn"></i><?php echo $ne2;  ?></h4>
    </div>
    <div class="carousel-item text-center">
     <h4><i class="fas fa-bullhorn"></i><?php echo $ne3;  ?></h4>
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
      <div class="col-12">
        <!-- navigation bar -->

        <nav class="navbar navbar-expand-lg navbar-light a" style="background-color: #fff;">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 top">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="eye.html">Home</a>
        </li>
        <li class="nav-item t">
          <a class="nav-link active" href="parentlogin.php">PARENT'Slogin</a>
        </li>
          <li class="nav-item t">
          <a class="nav-link active" href="#">JOBS</a>
        </li>
          <li class="nav-item t">
          <a class="nav-link active" href="#">HAPPENINGS</a>
        </li>
          <li class="nav-item t">
          <a class="nav-link active" href="#">CAREER GUIDANCE</a>
        </li>
   <li class="nav-item t">
          <a class="nav-link active" href="#">CONFERENCES</a>
        </li>
          <li class="nav-item t">
          <a class="nav-link active" href="#">STUDY ABROAD</a>
        </li>
          <li class="nav-item t">
          <a class="nav-link active" href="#">ADDMISSION</a>
        </li>
          <li class="nav-item t">
          <a class="nav-link active" href="quize/login.html">EXAM</a>
        </li>
          <li class="nav-item t">
          <a class="nav-link active" href="#">INTERNATIONAL's ADDMISSION</a>
        </li>
          <li class="nav-item t">
          <a class="nav-link active" href="#">CONTACT US</a>
        </li>
       
      </ul>
   
    </div>
  </div>
</nav>
      </div>
      <div class="col-12"><nav class="navbar navbar-expand-lg navbar-light" style="background-color: #fff;">
  <div class="container-fluid">
    <a class="navbar-brand" href="eye.html">CoolDevelopers</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#" style="margin-left: 20px;">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="#">Link</a>
        </li>
        <li class="nav-item dropdown"style="border-bottom: 2px solid orange;">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Addmission
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown"style="border-top: 2px solid orange;border-bottom: 2px solid orange;margin-top: 10px;">
            <div class="container">
              <div class="row" style="width:1000px;">
        <div class="col-3">
          <h6 class="text-left">Get Started</h6>
           <li><a class="dropdown-item" href="#">Overview</a></li>
            <li><a class="dropdown-item" href="#">How to Apply ?</a></li>
             <li><a class="dropdown-item" href="displaycalender.php">Important Dates</a></li>
            <li><a class="dropdown-item" href="#">Scholarships</a></li>
            <li><a class="dropdown-item" href="#">Study Abroad</a></li>
             <li><a class="dropdown-item" href="#">Campus Location</a></li>
              <li><a class="dropdown-item" href="#">Carrer Assesment</a></li>
               <li><a class="dropdown-item" href="#">Reporting and Induction</a></li>
                <li><a class="dropdown-item" href="#">Resenditial Facilities</a></li>
        </div>
        <div class="col-3">
           <h6 class="text-center">Program by Qulification</h6>
           <li><a class="dropdown-item" href="#">After 10th <p>(Diploma program)</p></a></li>
            <li><a class="dropdown-item" href="#">After 12th <p>(Under Graduation <br>Programes)</p></a></li>
             <li><a class="dropdown-item" href="#">After Graduation<br> (Master program)</a></li>
              <li><a class="dropdown-item" href="#">After Post Graduation</a></li>
               <li><a class="dropdown-item" href="#">Doctoral programs</a></li>
                <li><a class="dropdown-item" href="#">After Diploma or certificate</a></li>
                 <li><a class="dropdown-item" href="#">All Programmes</a></li>
        </div>
        <div class="col-3">
           <h6 class="text-center">PROGRAMMES BY TYPE</h6>
           <li><a class="dropdown-item" href="#">Standard or Regular Programmes</a></li>
            <li><a class="dropdown-item" href="#">Lateral Entry Programmes</a></li>
             <li><a class="dropdown-item" href="#">Integrated Bachelors-Master<br> Programmes</a></li>
            <li><a class="dropdown-item" href="#">Honorous Programmes</a></li>
             <li><a class="dropdown-item" href="#">Part Time Programmes</a></li>
            <li><a class="dropdown-item" href="#">Study Abroad Programmes</a></li>
             <li><a class="dropdown-item" href="#">Short term course/EDP </a></li>
            <li><a class="dropdown-item" href="#">Top Engenering Course (Btec-Mtec)</a></li>
        </div>
        <div class="col-3">
           <h6 class="text-center">INTERNATIONAL APPLICANTS</h6>
           <li><a class="dropdown-item" href="#">Overvierw</a></li>
            <li><a class="dropdown-item" href="#">Program Offered</a></li>
              <li><a class="dropdown-item" href="#">English Language Requirement</a></li>
            <li><a class="dropdown-item" href="#">Scholarship</a></li>
             <li><a class="dropdown-item" href="#">How to Apply ?</a></li>

        </div>
      </div>
    </div>
          </ul>
        </li>
          <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Academics
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown" style="border-top: 2px solid orange;border-bottom: 2px solid orange;margin-top: 10px;">
            <div class="container">
              <div class="row" style="width:800px;">
        <div class="col-6">
          <h6 class="text-left">How We Teach</h6>
           <li><a class="dropdown-item" href="#">Live Project</a></li>
            <li><a class="dropdown-item" href="#">Industry immersion</a></li>
             <li><a class="dropdown-item" href="#">Interdisciplinary Minors</a></li>
            <li><a class="dropdown-item" href="#">curriculum innovations</a></li>
            <li><a class="dropdown-item" href="#">Guest Lecture / workshops</a></li>
             <li><a class="dropdown-item" href="#">Assesment / Evaluation</a></li>
              <li><a class="dropdown-item" href="#">Mentoring and Advising</a></li>
               <li><a class="dropdown-item" href="#">Stackholder feedback</a></li>
               
        </div>
        <div class="col-6">
           <h6 class="text-left">HIGHLIGHTS</h6>
           <li><a class="dropdown-item" href="#">Research@campus</p></a></li>
            <li><a class="dropdown-item" href="#">Human Resources Development Center</p></a></li>
             <li><a class="dropdown-item" href="#">Corparate Traning</a></li>
              <li><a class="dropdown-item" href="#">Placements </a></li>
               <li><a class="dropdown-item" href="#">Libraries</a></li>
                <li><a class="dropdown-item" href="#">Labotaries</a></li>
                 <li><a class="dropdown-item" href="#">Accademic Calender</a></li>
                   <li><a class="dropdown-item" href="#">Holiday List</a></li>
        </div>
     
       
      </div>
    </div>
          </ul>
        </li>
         <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Campus Life
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown"style="border-top: 2px solid orange;border-bottom: 2px solid orange;margin-top: 10px;">
            <div class="container">
              <div class="row" style="width:600px;">
        <div class="col-6">
          <h6 class="text-left">Campus life</h6>
           <li><a class="dropdown-item" href="#">Entrepreneurship</a></li>
            <li><a class="dropdown-item" href="#">Sports</a></li>
             <li><a class="dropdown-item" href="#">Arts and Culture</a></li>
            <li><a class="dropdown-item" href="#">Campus Events</a></li>
            <li><a class="dropdown-item" href="#">Student Organization</a></li>
             <li><a class="dropdown-item" href="#">Community Services</a></li>
              <li><a class="dropdown-item" href="#">Visitors</a></li>
               <li><a class="dropdown-item" href="#">Diversity</a></li>
                <li><a class="dropdown-item" href="#">On campus job</a></li>
                  <li><a class="dropdown-item" href="#">Fun Zone</a></li>
                <li><a class="dropdown-item" href="#">Career Enhancement Intatives</a></li>
        </div>
        <div class="col-6">
           <h6 class="text-left">STUDENT SERVICES</h6>
           <li><a class="dropdown-item" href="#">Campus Security</a></li>
            <li><a class="dropdown-item" href="#">Uni Hospital</a></li>
             <li><a class="dropdown-item" href="#">University Management System</a></li>
              <li><a class="dropdown-item" href="#"> Residential Facilities</a></li>
               <li><a class="dropdown-item" href="#">Transportation Facilities</a></li>
                <li><a class="dropdown-item" href="#">Shopping and Dining</a></li>
                 <li><a class="dropdown-item" href="#">Banking and Postal Services</a></li>
                  <li><a class="dropdown-item" href="#"> Education Loan Assistance</a></li>
                 <li><a class="dropdown-item" href="#">Placements</a></li>
                  <li><a class="dropdown-item" href="#">Startup School</a></li>
        </div>
        
      </div>
    </div>
          </ul>
        </li>
      <li class="nav-item">
          <a class="nav-link active" href="#">Reserch</a>
        </li>
         <li class="nav-item">
          <a class="nav-link active" href="#">Placements</a>
        </li>
      </ul>
   
    </div>
  </div>
</nav></div>
  </div>
   <div class="icons">
<ul>
  <a href="#"><li class="facebook"><i class="fab fa-facebook"></i></li></a>
   <a href="#"><li class="twitter"><i class="fab fa-twitter"></i></li></a>
    <a href="https://www.youtube.com/channel/UCBKO1E_Lsl8yxttlxAr6sqg"><li class="youtube"><i class="fab fa-youtube"></i></li></a>
     <a href="#"><li class="linkedin"><i class="fab fa-linkedin"></i></li></a>
       <a href="#"><li class="instagram"><i class="fab fa-instagram"></i></li></a>
</ul>
  </div>
<div class="container-fluid bg-dark" style="color: #fff;margin-top: 10px;">
<div class="row">

  <div class="col-3">
<h1 class="text-left wow zoomIn"style="font-size:15px;margin-top: 5px;">Addmisions</h1>
            <a href="#" class="ho wow bounceIn" style="color: #fff;text-decoration: none;font-size: 13px;">Important Dates</a><br>
            <a href="#" class="ho wow bounceIn" style="color: #fff;text-decoration: none;font-size: 13px;">Scholarships</a><br>
            <a href="#" class="ho wow bounceIn" style="color: #fff;text-decoration: none;font-size: 13px;">Study Abroad</a><br>
               <a href="#" class="ho wow bounceIn" style="color: #fff;text-decoration: none;font-size: 13px;">Carrer Assesment</a><br>
               <a href="#"  class="ho wow bounceIn"style="color: #fff;text-decoration: none;font-size: 13px;">Reporting and Induction</a>
                <a href="#" class="ho wow bounceIn" style="color: #fff;text-decoration: none;font-size: 13px;">Resenditial Facilities</a>
  </div>
   <div class="col-3">
  <h1 class="text-left wow zoomIn"style="font-size:15px;margin-top: 5px;">Usefull links</h1>
            <a href="#" class="ho wow bounceIn" style="color: #fff;text-decoration: none;font-size: 13px;">Important Dates</a><br>
            <a href="#" class="ho wow bounceIn" style="color: #fff;text-decoration: none;font-size: 13px;">Scholarships</a><br>
            <a href="#" class="ho wow bounceIn" style="color: #fff;text-decoration: none;font-size: 13px;">Study Abroad</a><br>
               <a href="#" class="ho wow bounceIn" style="color: #fff;text-decoration: none;font-size: 13px;">Carrer Assesment</a><br>
               <a href="#" class="ho wow bounceIn" style="color: #fff;text-decoration: none;font-size: 13px;">Reporting and Induction</a>
                <a href="#" style="color: #fff;text-decoration: none;font-size: 13px;">Resenditial Facilities</a>
  </div>
   <div class="col-3">
    <h1 class="text-left wow zoomIn"style="font-size:15px;margin-top: 5px;">Login section:-</h1>
            <a href="studentlogin.php" class="ho wow bounceIn" style="color: #fff;text-decoration: none;font-size: 13px;">Student login</a><br>
            <a href="parentlogin.php" class="ho wow bounceIn" style="color: #fff;text-decoration: none;font-size: 13px;">Parent login</a><br>
           
               <a href="adminlogin.php" class="ho wow bounceIn" style="color: #fff;text-decoration: none;font-size: 13px;">Admin login</a><br>
               <a href="library_login.php" class="ho wow bounceIn" style="color: #fff;text-decoration: none;font-size: 13px;">Library</a><br>
                <a href="facuilty_login.php" class="ho wow bounceIn" style="color: #fff;text-decoration: none;font-size: 13px;">Resenditial Facilities</a><br>
                <a href="account_login.php" class="ho wow bounceIn" style="color: #fff;text-decoration: none;font-size: 13px;">Accounts Login</a>
  </div>
  <div class="col-3"><h1 class="text-left"style="font-size:15px;margin-top: 5px;"></h1>
    <p>Download App <i class="fab fa-android fa-2x and" style="margin-right: 4px;"></i><i class="fab fa-apple fa-2x app"></i></p>
    <p>Subscribe Newsletter</p>
    <p>Tel: +91-1234-890804<br>
     Toll Free: 1800 102 1234<br>

     Toll Free: 1800 274 89076</p>
<form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Enter your Email" aria-label="Search"style="height: 40px;">
        <button class="btn btn-outline-success" type="submit" style="background-color: orange;color: #fff;font-weight: bold;">GO</button>
      </form>
           </div>
</div>
</div>
<div class="container-fluid"style="background-color: #000;">
  <div class="row">
    <div class="col-2"><img src="a.jpg" class="img-fluid" style="border-radius: 50%;position: absolute;width: 70px;height: 70px;margin-left: 10px;margin-top: 5px;"></div>
    <div class="col-5"style="margin-top: 5px;">
<p style="color: gray;position: relative;">India's Largest University* Campus Professional University, Mohanlalganj-Lucknow, G.T. Road, Morawa, Lucknow (INDIA) -144411.
Website: https://www.campus.in</p>
    </div>
    <div class="col-5"style="margin-top: 5px;">
      <p style="color: gray;">Anti-Ragging / ICCASH / Privacy Policy/ Disclaimer / Student Grievance Redressal / RTI / Feedback
Problem with this page ? Contact CoolDeveloper
</p>
</div>
<div class="col-12 text-center"><center><p style="color: gray">Developed by CoolDeveloper</p></center>
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
    <script src="wow.min.js"></script>
              <script>
              new WOW().init();
              </script> 
 
         <script src="https://cdn.jsdelivr.net/npm/darkmode-js@1.5.7/lib/darkmode-js.min.js"></script>
<script>
  function addDarkmodeWidget() {
    new Darkmode().showWidget();
    
  }
  window.addEventListener('load', addDarkmodeWidget);
</script> 

<script src="https://kit.fontawesome.com/9d33041dbc.js" crossorigin="anonymous"></script>
<script>(function(w, d) { w.CollectId = "5feb64512558920eb9818718"; var h = d.head || d.getElementsByTagName("head")[0]; var s = d.createElement("script"); s.setAttribute("type", "text/javascript"); s.async=true; s.setAttribute("src", "https://collectcdn.com/launcher.js"); h.appendChild(s); })(window, document);</script>
  </body>
</html>