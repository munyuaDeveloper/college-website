<?php
session_start();
include "includes/db.php";

?>

<!DOCTYPE html>
<html>
<head>
	<title>Coastline Commuunity College</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="bootstrap-3.3.7-dist\bootstrap-3.3.7-dist\css\bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="bootstrap-3.3.7-dist\bootstrap-3.3.7-dist\css\animate.min.css">
  <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="style.css">


<!-- Start WOWSlider.com HEAD section -->
	<link rel="stylesheet" type="text/css" href="engine1/style.css" media="screen" />
	<style type="text/css">a#vlb{display:none}</style>
	<script type="text/javascript" src="engine1/jquery.js"></script>
<!-- End WOWSlider.com HEAD section -->

</head>
<body>
  <nav class="navbar navbar-inverse" style="margin: 0;">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>                        
        </button>
        <a class="navbar-brand" href="#">COASTLINE C. COLLEGE</a>
      </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#"><span class="glyphicon glyphicon-home"></span> Home</a></li>
        <li><a href="#about">About us <span class=" glyphicon glyphicon-info-sign"></span></a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown">Academics
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="academics/results.php"><span class=" glyphicon glyphicon-list"></span> Results</a></li>
            <li><a href="academics/department.php"><span class=" glyphicon glyphicon-list"></span> Departments</a></li>
            <li><a href="academics/clubs.php"><span class=" glyphicon glyphicon-list"></span> Clubs</a></li>
            <li><a href="academics/academic_tour.php"><span class=" glyphicon glyphicon-list"></span> Events</a></li>
          </ul>
        </li>
        <li><a href="index.php?my_account">My Account</a></li>
          <?php
          if(isset($_GET['my_account'])){

            if(isset($_SESSION['reg_no'])){
               echo "<script> window.open('students/student.php','_self')</script>";
            }
            else{
             
              echo "<script> window.open('students/login.php','_self')</script>";
            }
    
          } 

          ?>

          
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown">Facilities
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <?php
            $get_facilty=" select * from facilities";
            $run_facility=mysqli_query($con,$get_facilty);
            while ($row=mysqli_fetch_array($run_facility)) {
              $f_id=$row['facility_id'];
              $f_name=$row['facility_name'];
              $webpage=$row['webpage'];
              echo "<li><a href='facilities/$webpage'><span class='glyphicon glyphicon-list'></span> $f_name</a></li>";
            }

            ?>
           
          </ul>
        </li>

      </ul>
      <ul class="nav navbar-nav navbar-right">
       <li> 
        <?php
        if( @$_SESSION['reg_no']){
          echo "<a href='students/logout.php'><span class='glyphicon glyphicon-log-out'></span> Logout</a></li>";

        }
        else{
          echo "<a href='students/login.php'><span class='glyphicon glyphicon-log-in'></span> Login</a></li>";
        }
        ?>
         
      </ul>
    </div>
    </div>
  </nav>
    <!--nav ends here-->
    <!--content starts here-->
  <div  class="container-fluid content_wrapper">
    <!--sidebar starts here-->
    <div id="sidebar" style="background-color: white;" class="container-fluid">
      <img src="images/logo.png" width="200" height="100">
      <img src="images/whatNew.png" width="200" height="80">
      <ul style="color: lightgreen;">
        <li>School opens on March 20th 2018</li>
        <li>1st years admission on Mon 14/5/2018</li>
        <li>Exams start on Tue 12/6/2018</li>
        <li>School opens on March 20th 2018</li>
        <li>1st years admission on Mon 14/5/2018</li>
        <li>Exams start on Tue 12/6/2018</li>
      </ul>
    </div>
    <!--sidebar ends here-->
    <!--content area starts here-->
    

<!-- Start WOWSlider.com BODY section id=wowslider-container1 -->
	<div id="wowslider-container1" style="margin-left: 26%;">
	<div class="ws_images">
<a href="#"><img src="data1/images/archideaphoto_googleclassroom.jpg" alt="THIS IS OUR COMPUTER LAB" title="THIS IS OUR COMPUTER LAB" id="wows0"/></a>
<a href="#"><img src="data1/images/cicbs_laboratory.jpg" alt="OUR  SCIENCE LABORATORY" title="OUR  SCIENCE LABORATORY" id="wows1"/></a>
<a href="#"><img src="data1/images/download.jpg" alt="OUR CLASS ROOMS" title="OUR CLASS ROOMS" id="wows2"/></a>
<a href="#"><img src="data1/images/lib.jpg" alt="OUR LIBRARY" title="OUR LIBRARY" id="wows3"/></a>
<a href="#"><img src="data1/images/parry_tosenthal_asc_1.jpg" alt="OUR AUDITORIUM" title="OUR AUDITORIUM" id="wows4"/></a>
<a href="#"><img src="data1/images/small261.jpg" alt="OUR COLLEGE BUS" title="OUR COLLEGE BUS" id="wows5"/></a>
</div>
<div class="ws_bullets"><div>
<a href="#wows0" title="THIS IS OUR COMPUTER LAB"><img src="data1/tooltips/archideaphoto_googleclassroom.jpg" alt="THIS IS OUR COMPUTER LAB"/>1</a>
<a href="#wows1" title="OUR  SCIENCE LABORATORY"><img src="data1/tooltips/cicbs_laboratory.jpg" alt="OUR  SCIENCE LABORATORY"/>2</a>
<a href="#wows2" title="OUR CLASS ROOMS"><img src="data1/tooltips/download.jpg" alt="OUR CLASS ROOMS"/>3</a>
<a href="#wows3" title="OUR LIBRARY"><img src="data1/tooltips/lib.jpg" alt="OUR LIBRARY"/>4</a>
<a href="#wows4" title="OUR AUDITORIUM"><img src="data1/tooltips/parry_tosenthal_asc_1.jpg" alt="OUR AUDITORIUM"/>5</a>
<a href="#wows5" title="OUR COLLEGE BUS"><img src="data1/tooltips/small261.jpg" alt="OUR COLLEGE BUS"/>6</a>
</div></div>

	</div>
	<script type="text/javascript" src="engine1/script.js"></script>
<!-- End WOWSlider.com BODY section -->

    <div id="content_area" class="container-fluid"></div> 
  </div>
  <!--content end here--> 
  <h4 class="wow slideInRight" data-wow-duration="30s" data-wow-iteration="10" style="color:red;margin: 0; padding: 0;"> Welcome to Coastline Community College. Feel free to explore our facilities...</h4>
  <div id="about" style="margin:5px 50px;">
    <!--this are the columns-->
    <div class="container-fluid">
      <div class="row" align="center" style="margin-top: 50px; background-color: #80d4ff; color: white;">
        <h2 class="wow bounceInLeft"> Assistance Desk</h2>
      <div class="col-sm-3 wow bounceInLeft "  data-wow-delay="1.4s">
         <img src="images/p1.jpg" class="img-circle img-responsive" width="150" height="150">
            <p>Prof.Lukas Kiminda</p>
            <p>Principal</p>
            <p> B.O.G Chairman </p>
            <p>Tell:0705984772</p>
            <p>Email:<br>lukas@gmail.com</p>
      </div>
      <div class="col-sm-3 wow bounceInLeft" data-wow-delay="1.0s" style=" margin-right: 0px;" >
         <img src="images/p2.jpg" class="img-circle img-responsive" width="150" height="150">
            <p>Dr.Peter Munyua</p>
            <p>Deputy Principal</p>
            <p>Chairman PTA</p>
             <p>Tell:0705984772</p>
            <p>Email:<br>lukas@gmail.com</p>
      </div>
      <div class="col-sm-3 wow bounceInLeft" data-wow-delay="0.6s" style=" margin-right: 0px;" >
         <img src="images/p3.jpg" class="img-circle img-responsive" width="150" height="150">
            <p>Dr.Peter Munyua</p>
            <p>Deputy Principal</p>
            <p>Chairman PTA</p>
             <p>Tell:0705984772</p>
            <p>Email:<br>lukas@gmail.com</p>
      </div>
      <div class="col-sm-3 wow bounceInLeft" data-wow-delay="0.2s" style=" margin-right: 0px;" >
         <img src="images/p1.jpg" class="img-circle img-responsive" width="150" height="150">
          <p>Dr.Peter Munyua</p>
          <p>Deputy Principal</p>
          <p>Chairman PTA</p>
           <p>Tell:0705984772</p>
          <p>Email:<br>lukas@gmail.com</p>
      </div>
      </div>
    </div>
    <!--columns end here-->
   </div>
  </div>
  <div class="container-fluid">
    <?php
      include "footer.php";
    ?> 
  </div>
</div>
<script type="text/javascript" href="bootstrap-3.3.7-dist\bootstrap-3.3.7-dist\js\bootstrap.min.js">
  </script>
<script src="js/wow.min.js"></script>
<script >
  new WOW().init();
</script>
</body>
</html>