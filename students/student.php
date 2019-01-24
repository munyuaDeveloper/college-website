<?php
session_start();
include "../includes/db.php";
include "../functions/function.php";

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../css/bootstrap.min.css"/>
	<script src="../js/jquery2.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<script type="text/javascript" href="../main.js"></script>

	<link rel="stylesheet" type="text/css" href="../bootstrap-3.3.7-dist\bootstrap-3.3.7-dist\css\bootstrap.min.css">
  <script type="text/javascript" href="../bootstrap-3.3.7-dist\bootstrap-3.3.7-dist\js\bootstrap.min.js">
  </script>
	
	<link rel="stylesheet" type="text/css" href="student.css">
</head>
<body>
<div class="container-fluid" style="background-color: #f1f1f1;">
	<div class="main_wrapper">
		<div >
			
		<h4><img src="../images/logo.png" width="200" height="50"><b style="text-align: right; margin-left: 600px;"> Welcome:<?php echo $_SESSION['reg_no']; ?> </b> <button class="btn btn-sm"><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> logout</a> </button> </h4>
		</div>
		<div class="content_wrapper" style="color: white;">
			<div id="sidebar" style="background-color:#96ebf1;">
				<h3 style="text-align: left;line-height: 40px; margin: auto;"><span class="glyphicon glyphicon-dashboard"></span> Coastline</h3>
		        <ul style="text-align: left;">
		           <div class="panel-group" style="width: 100%;">
					  <div class="panel panel-defualt" style="background-color:#96ebf1; color: white;">
					    <div class="panel-heading">
					      <h4 class="panel-title">
					        <a data-toggle="collapse" href="#financial"><span class="glyphicon glyphicon-usd"></span> Financials</a>
					      </h4>
					    </div>
					    <div id="financial" class="panel-collapse collapse" style="color: #555;">
					      <ul class="list-group">
					       <li class="list-group-item"><a href="student.php?fee_stat"><span class="glyphicon glyphicon-list"></span> Fee Statement</a> </li>
					        <li class="list-group-item"><a href="student.php?fee_str"><span class="glyphicon glyphicon-list"></span> Fee Structure</a> </li>
					        <li class="list-group-item"><a href="#"><span class="glyphicon glyphicon-print"></span> Print Fee Statement</a> </li>
					      </ul>
					 
					    </div>
					  </div>
					</div>
		          
		          <div class="panel-group" style="width: 100%; ">
					  <div class="panel panel-defualt" style="background-color:#96ebf1; color: white;">
					    <div class="panel-heading">
					      <h4 class="panel-title">
					        <a data-toggle="collapse" href="#academic"> <span class="glyphicon glyphicon-book"></span>  Academics</a>
					      </h4>
					    </div>
					    <div id="academic" class="panel-collapse collapse" style="color: #555;" >
					      <ul class="list-group">
					        <li class="list-group-item"><a href="#"><span class="glyphicon glyphicon-calendar"></span> Time Tables</a> </li>
					        <li class="list-group-item"><a href="student.php?results"><span class="glyphicon glyphicon-list"></span> Results</a> </li>
					        <li class="list-group-item"><a href="#"><span class="glyphicon glyphicon-list"></span> Register Units</a> </li>
					      </ul>
					 
					    </div>
					  </div>
					</div>
		          <div class="panel-group" style="width: 100%;">
					  <div class="panel panel-defualt" style="background-color:#96ebf1; color: white;">
					    <div class="panel-heading" >
					      <h4 class="panel-title">
					        <a data-toggle="collapse" href="#hostel"><span class="	glyphicon glyphicon-bed"></span>  Hostels</a>
					      </h4>
					    </div>
					    <div id="hostel" class="panel-collapse collapse" style="color: #555;">
					      <ul class="list-group">
					       <li class="list-group-item"><a href="#"><span class="glyphicon glyphicon-log-in"></span> Hostel Booking</a> </li>
					        <li class="list-group-item"><a href="#"><span class="glyphicon glyphicon-log-out"></span> Clear Hostel</a> </li>
					        <li class="list-group-item"><a href="#"><span class="glyphicon glyphicon-eye-open"></span> View Hostels</a> </li>
					      </ul>
					 
					    </div>
					  </div>
					</div>
		           <li><a href="#contact" style="color: white;"> <span class="glyphicon glyphicon-erase"></span>  Clearance Request</a></li>
		          <li><a href="#about" style="color: white;"><span class="glyphicon glyphicon-pencil"></span> Reset Password</a></li>
		        </ul>
			</div>
			<div id="content_area">
				<div style="background-color: #555; width: 100%; height: 40px; color: white;line-height: 40px; padding-top:4px;">
					<h4><a href="../index.php" style=" color: white; margin-left: 20px;"><span class="glyphicon glyphicon-home"></span> Home</a></h4>
				</div>
				<div style="float: left;">
					
					<?php
					if(!isset($_GET['fee_stat'])){
						if(!isset($_GET['fee_str'])){
							if(!isset($_GET['results'])){
								if(!isset($_GET['timetable'])){
									if(!isset($_GET['reg_unit'])){
										if(!isset($_GET['hostel_book'])){
											if(!isset($_GET['hostel_clear'])){
												if(!isset($_GET['hostel_view'])){
													if(!isset($_GET['clearance'])){
														if(!isset($_GET['pass_reset'])){
															
																include "info.php";
													
														}
													}

												}

											}

										}

									}

								}

							}

						}

					}
					if(isset($_GET['fee_stat'])){
						feeState();
						
					}
					if(isset($_GET['fee_str'])){
							echo "fee structure";
						}
						if(isset($_GET['results'])){
							getResults();
						}
					?>
				</div>
				<div style="float: right; width: 400px; height:auto; margin-right: 100px;" align="center">
					<?php
						if(isset($_GET['results'])){
							getProfile();
						}
					?>
				</div>
						
			</div>
	
		</div>
		
	</div>

</div>
<?php
include "../footer.php";
?>
</body>
</html>
