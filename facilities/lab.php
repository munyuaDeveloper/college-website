<!DOCTYPE html>
<html>
<head>
	<title>Coastline Community College</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../bootstrap-3.3.7-dist\bootstrap-3.3.7-dist\css\bootstrap.min.css">
  <script type="text/javascript" href="../bootstrap-3.3.7-dist\bootstrap-3.3.7-dist\js\bootstrap.min.js">
  </script>
	

  <link rel="stylesheet" type="text/css" href="../style.css">
</head>
<body>
<div class="main_wrapper" >
  <div>
    <nav class="navbar navbar-inverse" style="margin: 0;">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>                        
          </button>
          <a class="navbar-brand" href="../index.php">COASTLINE C. COLLEGE</a>
        </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          <li ><a href="../index.php">Home</a></li>
          <li><a href="#">About us</a></li>
          <li  class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown">Academics
            <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#">Departments</a></li>
              <li><a href="#">Clubs</a></li>
              <li><a href="#">Events</a></li>
            </ul>
          </li>
          <li><a href="#">My Account</a></li>
          <li class="active" class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown">Facilities
            <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <?php
              $get_facilty=" select * from transport";
              $run_facility=mysqli_query($con,$get_facilty);
              while ($row=mysqli_fetch_array($run_facility)) {
                $tran_id=$row['transport_id'];
                $f_name=$row['transport_name'];
                echo "<li><a href='transport.php?trans_id=$tran_id'>$f_name</a></li>";
              }

              ?>
             
            </ul>
          </li>

        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
          <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
        </ul>
      </div>
      </div>
    </nav>
  </div>
  <div class="container-fluid">
    <div class="content_wrapper"> 
       <div id="topbar" style="color:white;">
        <ul id="dept" >
          <?php
            include "../functions/function.php";

            getLab();
          ?>
        </ul>
         </div>
            <div id="sidebar" style="background-color: white; width: 20%;">
          <img src="../images/logo.png" width="200" height="150">
          <img src="../images/whatNew.png" width="200" height="80">
          <ul style="color: lightgreen;">
            <li>School opens on March 20th 2018</li>
            <li>1st years admission on Mon 14/5/2018</li>
            <li>Exams start on Tue 12/6/2018</li>
          </ul>
         </div>
      <div id="content_area" style="height: auto; text-align: center; width: 80%; background-color: #f1f1f1;"> 
          <div id="content1" style="float: left; width: 80%;" >
          
            <?php
      
            labDetails();
            ?>
        </div>
        <div id="content2" style="float: right; width: 20%;">
          <h3>Transport Manager Profile</h3>
        </div>
      </div>
    </div>
  </div>
<?php
include "../footer.php";
?>
  
  </div> 
</body>
</html>