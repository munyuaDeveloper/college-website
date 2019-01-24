<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<script src="js/jquery2.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script type="text/javascript" href="main.js"></script>
  <!--there is a problem connecting with bootstrap-->
	<link rel="stylesheet" type="text/css" href="bootstrap-3.3.7-dist\bootstrap-3.3.7-dist\css\bootstrap.min.css">
  <script type="text/javascript" href="bootstrap-3.3.7-dist\bootstrap-3.3.7-dist\js\bootstrap.min.js">
  </script>
</head>
<body>
<div id="footer" style="background-color: #555;">
	<div class="col-sm-3" style="border-right: 2px solid white; color: white;">
		<h3 style="text-decoration: underline;">Contact us</h3>
		<p>Tell:0705984772 <span class=" glyphicon glyphicon-earphone"></span></p>
		<p>Email:coastline@gmail.com <span class=" glyphicon glyphicon-envelope"></span> </p>
		<p>P.O.Box: 3464-10108</p>
		<p>Location: Bamburi,Mombasa </p>
		
	</div >
		<div class="col-sm-3" style="border-right: 2px solid white; color: white;">
		<h3 style="text-decoration: underline; text-align: center;">Hot links</h3>
	    
	    <div class="hotlinks">
	    	<ul style="list-style:none; margin-left: 60px; color: white;">
		    	<li ><a href="../index.php" style="color: white;">Home</a></li>
		    	<li><a href="index.php?my_account" style="color: white;">My Account
		          <?php
		          if(isset($_GET['my_account'])){

		            if(isset($_SESSION['reg_no'])){
		               echo "<script> window.open('students/student.php','_self')</script>";
		            }
		            else{
		             
		              echo "<script> window.open('students/login.php','_self')</script>";
		            }
		    
		          } 

		          ?></a>
		      	</li>
		    <li><a href="facilities/library.php" style="color: white;">Library</a></li>
		    <li><a href="facilities/transport.php" style="color: white;">Transport</a></li>
		    <li><a href="facilities/sport.php" style="color: white;">sport</a></li>
		</ul>
	</div>
	</div>
		<div class="col-sm-3" style="border-right: 2px solid white; color: white;">
		<h3 style="text-decoration: underline;">Contact us</h3>
		<p>Tell:0705984772 <span class=" glyphicon glyphicon-earphone"></span></p>
		<p>Email:coastline@gmail.com <span class=" glyphicon glyphicon-envelope"></span> </p>
		<p>P.O.Box: 3464-10108</p>
		<p>Location: Bamburi,Mombasa </p>
		
		
	</div>
		<div class="col-sm-3" style="border-right: 2px solid white; color: white;">
		<h3 style="text-decoration: underline;">Contact us</h3>
		<p>Tell:0705984772 <span class=" glyphicon glyphicon-earphone"></span></p>
		<p>Email:coastline@gmail.com <span class=" glyphicon glyphicon-envelope"></span> </p>
		<p>P.O.Box: 3464-10108</p>
		<p>Location: Bamburi,Mombasa </p>
		
	</div>
	<h4 style="text-align: center; color: white;"> &copy; 2018-2022 Coastline Community College</h4>
</div>
</body>
</html>