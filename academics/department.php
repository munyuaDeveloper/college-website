<!DOCTYPE html>
<html>
<head>
	<title>En-Bridge</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../css/bootstrap.min.css"/>
	<script src="../js/jquery2.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script type="text/javascript" href="../main.js"></script>
	

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
          <li class="active" class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown">Academics
            <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#">Departments</a></li>
              <li><a href="#">Clubs</a></li>
              <li><a href="#">Events</a></li>
            </ul>
          </li>
          <li><a href="#">My Account</a></li>
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown">Facilities
            <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#">Transport</a></li>
              <li><a href="#">Laboratories</a></li>
              <li><a href="#">Sports</a></li>
              <li><a href="#">Library</a></li>
              <li><a href="#">Dormitories</a></li>
              <li><a href="#">Classes</a></li>
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
  <div class="container-fluid" style="background-color: #f1f1f1;">
    <div class="content_wrapper"> 
       <div id="topbar" style="color:white;">
        <ul id="dept" >
          <?php
            include "../functions/function.php";
            getDept();

          ?>
        </ul>
         </div>
            <div id="sidebar" style="background-color: white; width: 25%;">
          <img src="../images/logo.png" width="300" height="200">
          <img src="../images/whatNew.png" width="200" height="80">
          <ul style="color: lightgreen;">
            <li>School opens on March 20th 2018</li>
            <li>1st years admission on Mon 14/5/2018</li>
            <li>Exams start on Tue 12/6/2018</li>
          </ul>
         </div>
      <div id="content_area" style="height: auto; text-align: center; width: 75%;"> 
          <div id="content1" style="float: left; width: 70%;" >
          
            <?php
            deptDetails();
            ?>
        </div>
        <div id="content2" style="float: right; width: 30%;">
          <h2>Chairperson Profile</h2>
          <p>here is the details of the staff members</p>
          <p>here is the details of the staff members</p>
          <p>here is the details of the staff members</p>
          <p>here is the details of the staff members</p>
          <p>here is the details of the staff members</p>
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