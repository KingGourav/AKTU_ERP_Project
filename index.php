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
          <a class="nav-link active" href="e.php">JOBS</a>
        </li>
          <li class="nav-item t">
          <a class="nav-link active" href="cer.php">HAPPENINGS</a>
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
<header>
  <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <ol class="carousel-indicators">
    <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"></li>
    <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"></li>
    <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"></li>
  </ol>
  <div class="carousel-inner" style="margin: 10px;">
    <div class="carousel-item active">
      <img src="a.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Student Chamber</h5>
        <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="e.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Campus Infrastructure</h5>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="d.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Campus Library</h5>
        <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </a>
</div>
</header>

<div class="container"style="margin-top: 50px;background-color: #fff;box-shadow: 0 5px 35px rgba(0,0,0,0.2);">
  <div class="row">
    <div class="col-12">
      <h1 style="position: absolute;">#Think</h1><h1 style="color: orange;position: relative;margin-left: 125px;">BIG</h1>
      <p style="font-weight: bold;"class="text-center">Addmission with Scholarship Closing soon</p>
      <button class="btn btn-success wow pulse" style="margin-top: -60px;margin-right: 0px;margin-left: 90%;margin-bottom:10px;border:none;background-color: orange;color: #fff;font-weight: bold;">Apply now</button>


      <i class="fab fa-whatsapp-square fa-2x"style="color: orange;"></i>
      <i class="fas fa-phone-square-alt fa-2x" style="color:orange; "></i>
      <i class="fas fa-map-marker-alt fa-2x" style="color: orange;"></i>

    </div>
  </div>
</div>

<div class="container-fluid" style="margin-top: 40px;">
<div class="row to" style="background-color: #fff;box-shadow: 2px 4px 2px rgba(0,0,0,0.3);transition: 0.5s;">
  <div class="col-12 text-center">
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
     <h1>Cool Campus is now among  <b style="color: orange;">20 rank in India</b></h1>
     <p>to be recongnised for promating innovation and entrepreneruship</p>
    </div>
    <div class="carousel-item">
       <h1>Ranked amongst  <b style="color: orange;">Top 100 Institutions in India</b> by NBD</h1>
     <p>Campus is ranked among top 100  collage by NBD ranking released by ministry of Humun Resource Development</p>
    </div>
    <div class="carousel-item">
        <h1>Rank 80  <b style="color: orange;">amongst all Indian universities</b> by NBD</h1>
     <p>to be recongnised for promating innovation and entrepreneruship</p>
    </div>
     <div class="carousel-item">
        <h1>Rank amongst <b style="color: orange;">top 100 Engenearing institutions </b> by NBD</h1>
     <p>Campus is ranked among top 100 Engenering collage by NBD ranking released by ministry of Humun Resource Development</p>
    </div>
     <div class="carousel-item">
        <h1>Rank amongst  <b style="color: orange;">Top 50 Management Institutions</b> by NBD</h1>
     <p>Campus is ranked among top 50 Management collage by NBD ranking released by ministry of Humun Resource Development</p>
    </div>
     <div class="carousel-item">
        <h1>Cool Campus is now among  <b style="color: orange;">20 rank in India</b></h1>
     <p>to be recongnised for promating innovation and entrepreneruship</p>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"style="color: orange;"></span>
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
<section class="main_heading my-5">
  <div class=" text-center">
<h1 class="display-4 wow zoomIn" style="font-family: sans-serif; ">INNOVATIONS AT Campus</h1>
<hr class="w-25 mx-auto"/>
</div>

<div class="container" style="margin-top: 20px;">
  <div class="row">
    <div class="col-4">
     <div class="card" style="width: 20rem;box-shadow: 0 5px 35px rgba(0,0,0,0.2); ">
  <img src="3d.jpg" class="card-img-top" alt="..."style="height: 260px;">
  <div class="card-body">
    <h5 class="card-title"style="color: #000;">3D Enviroment</h5>
    <p class="card-text"style="text-align: center;justify-content: center;">In this project has setup the 3D world with the help of three.js concept.It provide the content which use websites</p>
    <a href="https://www.youtube.com/watch?v=9fbfz7zJMwQ&t=4s" class="btn btn-primary  wow bounceIn"style="background-color: orange;border:none; font-weight: bold;">See project</a>
  </div>
</div>
    </div>
    <div class="col-4"> <div class="card" style="width: 20rem;box-shadow: 0 5px 35px rgba(0,0,0,0.2); ">
  <img src="robo.gif" class="card-img-top" alt="..."style="height: 260px;">
  <div class="card-body">
    <h5 class="card-title"style="color: #000;">Robotic Hand</h5>
    <p class="card-text">In this project has create the metallic robitic hand which are controlled by hand</p>
    <a href="#" class="btn btn-primary  wow bounceIn"style="background-color: orange;border:none; font-weight: bold;">See project</a>
  </div>
</div></div>
    <div class="col-4"> <div class="card" style="width: 20rem;box-shadow: 0 5px 35px rgba(0,0,0,0.2); ">
  <img src="hologram.gif" class="card-img-top" alt="..."style="height: 260px;">
  <div class="card-body">
    <h5 class="card-title"style="color: #000;">Hologram</h5>
    <p class="card-text">Its really amazing project based on holography concept.It create a 3d hologram .</p>
    <a href="#" class="btn btn-primary wow bounceIn"style="background-color: orange;border:none; font-weight: bold;">See project</a>
  </div>

</div>
</div>
  <div class="col-12"><center><button class="btn btn-primary wow zoomOut" style="margin-top: 40px;box-shadow: 0 5px 35px rgba(0,0,0,0.2);background-color: orange;font-weight: bold;border:none;">See more project -></button></center></div>
</section>

<!-- next section for innovation -->
<section class="main_heading my-5">
  <div class=" text-center">
<h1 class="display-4 wow zoomIn" style=" ">LATEST NEWS!</h1>
<p class="text-center wow zoomIn">LPU strikes deals with Google, SAP, Oracle etc to offer free industry training to students!</p>
<hr class="w-25 mx-auto"/>
</div>

<div class="container" style="margin-top: 20px;">
  <div class="row">
    <div class="col-4">
     <div class="card" style="width: 20rem;box-shadow: 0 5px 35px rgba(0,0,0,0.2); ">
  <img src="c1.gif" class="card-img-top" alt="..."style="height: 260px;">
  <div class="card-body">
    <h5 class="card-title"style="color: #000;">Microsoft</h5>
    <p class="card-text"style="text-align: center;justify-content: center;">Campus Collaboration With Microsoft: Signs Up MoU For Hosting Google Center Of Excellence At Campus</p>
    <a href="#" class="btn btn-primary wow bounceIn"style="background-color: orange;border:none; font-weight: bold;">See project</a>
  </div>
</div>
    </div>
    <div class="col-4"> <div class="card" style="width: 20rem;box-shadow: 0 5px 35px rgba(0,0,0,0.2); ">
  <img src="c2.gif" class="card-img-top" alt="..."style="height: 260px;">
  <div class="card-body">
    <h5 class="card-title"style="color: #000;">RedHat linux</h5>
    <p class="card-text">Campus Collaboration With RedHat: Signs Up  S-developer  Hosting RedHat Center Of Excellence of  At Campus</p>
    <a href="#" class="btn btn-primary wow bounceIn"style="background-color: orange;border:none; font-weight: bold;">See project</a>
  </div>
</div></div>
    <div class="col-4"> <div class="card" style="width: 20rem;box-shadow: 0 5px 35px rgba(0,0,0,0.2); ">
  <img src="c3.gif" class="card-img-top" alt="..."style="height: 260px;">
  <div class="card-body">
    <h5 class="card-title"style="color: #000;">Vmware</h5>
    <p class="card-text">Campus Collaboration With Vmware: Signs Up Software Developer for company Excellence At Campus</p>
    <a href="#" class="btn btn-primary wow bounceIn"style="background-color: orange;border:none; font-weight: bold;">See project</a>
  </div>

</div>
</div>
  <div class="col-12"><center><button class="btn btn-primary wow zoomOut" style="margin-top: 40px;box-shadow: 0 5px 35px rgba(0,0,0,0.2);background-color: orange;font-weight: bold;border:none;">See more -></button></center></div>
</section>

<section class="main_heading my-5">
  <div class=" text-center">
<h1 class="display-4 wow zoomIn" style=" ">SPORTS ACHIEVEMENT/ EVENTS</h1>
<hr class="w-25 mx-auto"/>
</div>

<div class="container" style="margin-top: 20px;">
  <div class="row">
    <div class="col-4">
     <div class="card" style="width: 20rem;box-shadow: 0 5px 35px rgba(0,0,0,0.2); ">
  <img src="s1.jpg" class="card-img-top" alt="..."style="height: 260px;">
  <div class="card-body">
    <h5 class="card-title"style="color: #000;">Football</h5>
    <p class="card-text"style="text-align: center;justify-content: center;">Campus Became Overall Champion Among Nation???s Private Universities In Khelo India University Games-2020</p>
    <a href="#" class="btn btn-primary wow bounceIn"style="background-color: orange;border:none; font-weight: bold;">Read more</a>
  </div>
</div>
    </div>
    <div class="col-4"> <div class="card" style="width: 20rem;box-shadow: 0 5px 35px rgba(0,0,0,0.2); ">
  <img src="s2.jpg" class="card-img-top" alt="..."style="height: 260px;">
  <div class="card-body">
    <h5 class="card-title"style="color: #000;">Boxing</h5>
    <p class="card-text">
    <p class="card-text"style="text-align: center;justify-content: center;">Campus Student Rani Won Silver Medal At World Boxing Championship 2019 in Asia</p>
    <a href="#" class="btn btn-primary wow bounceIn"style="background-color: orange;border:none; font-weight: bold;">Read more</a>
  </div>
</div></div>
    <div class="col-4"> <div class="card" style="width: 20rem;box-shadow: 0 5px 35px rgba(0,0,0,0.2); ">
  <img src="z.jpg" class="card-img-top" alt="..."style="height: 260px;">
  <div class="card-body">
    <h5 class="card-title"style="color: #000;">Basketball</h5>
    <p class="card-text">Campus Became Overall Champion Among Nation???s Private Universities In Khelo India University Games-2020</p>
    <a href="#" class="btn btn-primary wow bounceIn"style="background-color: orange;border:none; font-weight: bold;">Read more</a>
  </div>

</div>
</div>
  <div class="col-12"><center><button class="btn btn-primary wow zoomOut" style="margin-top: 40px;box-shadow: 0 5px 35px rgba(0,0,0,0.2);background-color: orange;font-weight: bold;border:none;">See more-></button></center></div>
</section>

<section class="main_heading my-5">
  <div class=" text-center">
<h1 class="display-4 wow zoomIn" style=" ">To Fall in LOVE with <i class="far fa-thumbs-up"></i></h1>
<hr class="w-25 mx-auto"/>
</div>
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <ol class="carousel-indicators">
    <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></li>
    <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></li>
    <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
     <div class="col-8" style="position: absolute;">
    <img src="g1.jpg" class="img-fluid" style=" width:200px;height: 150px;margin-top: 3px;">
    <img src="g2.jpg" class="img-fluid" style=" width:200px;height: 150px;margin-top: 3px;">
    <img src="g3.jpg" class="img-fluid" style=" width:200px;height: 150px;margin-top: 3px;">
    <img src="g4.jpg" class="img-fluid" style=" width:200px;height: 150px;margin-top: 3px;">
    <img src="g5.jpg" class="img-fluid" style=" width:200px;height: 150px;margin-top: 3px;">
    <img src="g6.jpg" class="img-fluid" style=" width:200px;height: 150px;margin-top: 3px;">
     <img src="g7.jpg" class="img-fluid" style=" width:200px;height: 150px;margin-top: 3px;">
    <img src="g8.jpg" class="img-fluid" style=" width:200px;height: 150px;margin-top: 3px;">
    
    </div>
    <div class="col-4" style="position: relative;float: right;">
      <img src="e.jpg" class="img-fluid" style="width: 400px;height: 300px;position: relative;">
    </div>
    </div>
    <div class="carousel-item">
     <div class="col-8" style="position: absolute;">
    <img src="g9.jpg" class="img-fluid" style=" width:200px;height: 150px;margin-top: 3px;">
    <img src="g10.jpg" class="img-fluid" style=" width:200px;height: 150px;margin-top: 3px;">
    <img src="g11.jpg" class="img-fluid" style=" width:200px;height: 150px;margin-top: 3px;">
    <img src="g12.jpg" class="img-fluid" style=" width:200px;height: 150px;margin-top: 3px;">
    <img src="g13.jpg" class="img-fluid" style=" width:200px;height: 150px;margin-top: 3px;">
    <img src="g14.jpg" class="img-fluid" style=" width:200px;height: 150px;margin-top: 3px;">
     <img src="g15.jpg" class="img-fluid" style=" width:200px;height: 150px;margin-top: 3px;">
    <img src="g16.jpg" class="img-fluid" style=" width:200px;height: 150px;margin-top: 3px;">
    
    </div>
    <div class="col-4" style="position: relative;float: right;">
      <img src="e.jpg" class="img-fluid" style="width: 400px;height: 300px;position: relative;">
    </div>
    </div>
    <div class="carousel-item">
      <div class="col-8" style="position: absolute;">
    <img src="g17.jpg" class="img-fluid" style=" width:200px;height: 150px;margin-top: 3px;">
    <img src="g18.jpg" class="img-fluid" style=" width:200px;height: 150px;margin-top: 3px;">
    <img src="g19.jpg" class="img-fluid" style=" width:200px;height: 150px;margin-top: 3px;">
    <img src="g20.jpg" class="img-fluid" style=" width:200px;height: 150px;margin-top: 3px;">
    <img src="g21.jpg" class="img-fluid" style=" width:200px;height: 150px;margin-top: 3px;">
    <img src="g22.jpg" class="img-fluid" style=" width:200px;height: 150px;margin-top: 3px;">
     <img src="g23.jpg" class="img-fluid" style=" width:200px;height: 150px;margin-top: 3px;">
    <img src="g24.jpg" class="img-fluid" style=" width:200px;height: 150px;margin-top: 3px;">
    
    </div>
    <div class="col-4" style="position: relative;float: right;">
      <img src="e.jpg" class="img-fluid" style="width: 400px;height: 300px;position: relative;">
    </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </a>
</div>

</section>
<div class="container" style="background-color: #fff;box-shadow: 0 5px 35px rgba(0,0,0,0.2);">
     <div class="row">
          <div class="col-3">
             <center> <i class="fas fa-users fa-4x wow zoomIn" style="color: orange;"></i></center>
              <h1 class="text-center">20000+</h1>
              <p class="text-center">Students</p>
             
      </div>
     <div class="col-3">
        <center><i class="fas fa-user-graduate fa-4x wow zoomIn"  style="color: orange;"></i></center>
         <h1 class="text-center">30k+</h1>
              <p class="text-center">ALUMNI</p>
           </div>
            <div class="col-3">
            <center>  <i class="far fa-calendar-check fa-4x wow zoomIn" style="color: orange;"></i></center>
               <h1 class="text-center">600+</h1>
              <p class="text-center">CAMPUS EVENTS</p>
             
                         </div>
         <div class="col-3">
         <center><i class="fas fa-star fa-4x wow zoomIn" style="color: orange;"></i></center>
          <h1 class="text-center">600+</h1>
            <center>  <p class="text-center">SHIGH PROFILE VISITORS</p></center>
           </div>
</div>

 


  </div>

<section class="main_heading my-5">
  <div class=" text-center">
<h1 class="display-4 wow zoomIn" style=" ">A HAPPENING CAMPUS</h1>
<p class="text-center wow zoomIn">Where thinking BIG is a way of life!</p>
<hr class="w-25 mx-auto"/>
</div>

<div class="container" style="margin-top: 20px;">
  <div class="row">
    <div class="col-4">
     <div class="card" style="width: 20rem;box-shadow: 0 5px 35px rgba(0,0,0,0.2); ">
  <img src="a1.jpg" class="card-img-top" alt="..."style="height: 260px;">
  <div class="card-body">
    <h5 class="card-title"style="color: #000;">Mega Concert</h5>
    <p class="card-text"style="text-align: center;justify-content: center;">India???s Most Popular Mega-Musical Live Concert ???Coke Studio 2019??? Held At Campus</p>
    <a href="#" class="btn btn-primary wow bounceIn"style="background-color: orange;border:none; font-weight: bold;">Explore</a>
  </div>
</div>
    </div>
    <div class="col-4"> <div class="card" style="width: 20rem;box-shadow: 0 5px 35px rgba(0,0,0,0.2); ">
  <img src="a2.jpg" class="card-img-top" alt="..."style="height: 260px;">
  <div class="card-body">
    <h5 class="card-title"style="color: #000;">Laureate Dalai Lama</h5>
    <p class="card-text">Campus Students Get Lessons Of Life From The Nobel Laureate Dalai Lama Himself.</p>
    <a href="#" class="btn btn-primary wow bounceIn"style="background-color: orange;border:none; font-weight: bold;">Explore</a>
  </div>
</div></div>
    <div class="col-4"> <div class="card" style="width: 20rem;box-shadow: 0 5px 35px rgba(0,0,0,0.2); ">
  <img src="a3.jpg" class="card-img-top" alt="..."style="height: 260px;">
  <div class="card-body">
    <h5 class="card-title"style="color: #000;">PM Narendra Modi</h5>
    <p class="card-text">LPU Student And Olympian Sawarn Singh Virk Bagged Multiple Medals At Rowing Championships</p>
    <a href="#" class="btn btn-primary wow bounceIn"style="background-color: orange;border:none; font-weight: bold;">Explore</a>
  </div>

</div>
</div>
  <div class="col-12"><center><button class="btn btn-primary wow zoomOut" style="margin-top: 40px;box-shadow: 0 5px 35px rgba(0,0,0,0.2);background-color: orange;font-weight: bold;border:none;">See more -></button></center></div>
</section>

<section class="main_heading my-5">
  <div class=" text-center">
<h1 class="display-4 wow zoomIn" style=" ">Testimonials</h1>
<p class="text-center wow zoomIn">What our students have to say about us!</p>

</div>
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <div class="col-12" style="">
    <img src="ttt.jpg" class="img-fluid" style=" width:200px;height: 150px;margin: 3px;">
    <img src="t2.jpg" class="img-fluid" style=" width:200px;height: 150px;margin: 3px;">
    <img src="t3.jpg" class="img-fluid" style=" width:200px;height: 150px;margin: 3px;">
    <img src="t4.jpg" class="img-fluid" style=" width:200px;height: 150px;margin: 3px;">
    <img src="t5.jpg" class="img-fluid" style=" width:200px;height: 150px;margin: 3px;">
    <img src="t6.jpg" class="img-fluid" style=" width:200px;height: 150px;margin: 3px;">
   
    
    </div>
    </div>
    <div class="carousel-item">
    <div class="col-12" style="">
    <img src="t6.jpg" class="img-fluid" style=" width:200px;height: 150px;margin: 3px;">
    <img src="ttt.jpg" class="img-fluid" style=" width:200px;height: 150px;margin: 3px;">
    <img src="t7.jpg" class="img-fluid" style=" width:200px;height: 150px;margin: 3px;">
    <img src="t8.jpg" class="img-fluid" style=" width:200px;height: 150px;margin: 3px;">
    <img src="t1.jpg" class="img-fluid" style=" width:200px;height: 150px;margin: 3px;">
    <img src="t5.jpg" class="img-fluid" style=" width:200px;height: 150px;margin: 3px;">
   
    
    </div>
    </div>
    <div class="carousel-item">
    <div class="col-12" style="">
    <img src="t3.jpg" class="img-fluid" style=" width:200px;height: 150px;margin: 3px;">
    <img src="t2.jpg" class="img-fluid" style=" width:200px;height: 150px;margin: 3px;">
    <img src="tt.png" class="img-fluid" style=" width:200px;height: 150px;margin: 3px;">
    <img src="t5.jpg" class="img-fluid" style=" width:200px;height: 150px;margin: 3px;">
    <img src="t6.jpg" class="img-fluid" style=" width:200px;height: 150px;margin: 3px;">
    <img src="ttt.jpg" class="img-fluid" style=" width:200px;height: 150px;margin: 3px;">
   
    
    </div>
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
</section>

<div class="container-fluid">
<div class="row">
  <div class="col-12">
    <h1 class="text-center wow zoomIn">Two Thirds of the World is Covered by Water</h1>
    <p class="text-center wow zoomIn">The rest by The Campus Community!</p>
    <img src="map.jpg" class="img-fluid" style="width: 100%;height: 400px;">
  </div>
</div>
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