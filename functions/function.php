<?php
include "../includes/db.php";
function getDept(){
	global $con;
	$getdept=" select * from departments";
	$rungetdept=mysqli_query($con,$getdept);
	echo"Departments:";
	while ($row=mysqli_fetch_array($rungetdept)) {
		$dept_id=$row['department_id'];
		$dept_name=$row['department_name'];
		$dept_location=$row['department_location'];
		$dept_chair=$row['department_chairperson'];
		$dept_num=$row['number_course'];
		$dept_desc=$row['department_desc'];

		echo "<li style='display:inline; padding:10px; margin:auto; font-size:20px; '> <a href='department.php?dept=$dept_id' style='color:white; text-decoration:none;'>$dept_name</a></li>";
	}
}
function deptDetails(){
	global $con;
	if(!isset($_GET['dept'])){
		echo "welcome to our departments";
	}
	else{
		$dept_id=$_GET['dept'];
		$getdept=" select * from departments where department_id='$dept_id'";
		$rungetdept=mysqli_query($con,$getdept);
		while($row=mysqli_fetch_assoc($rungetdept)){
		$dept_name=$row['department_name'];
		$dept_location=$row['department_location'];
		$dept_chair=$row['department_chairperson'];
		$dept_num=$row['number_course'];
		$dept_desc=$row['department_desc'];
	
		echo "
		<div width='500' height='auto;' align='left;'>
		<h2 style='text-align:center;'>$dept_name</h2>
		<img src='../images/b1.jpg' width='400' height='300'>
		<p> Chairperson: $dept_chair</p>
		<p> The department is located in: $dept_location</p>
		<p style='width:400'>Number of courses in the department: $dept_num</p>
		<p>$dept_desc</p>

		</div>
		";
		}
	}

}
function getTrans(){
	global $con;
	$get_trans=" select * from transport";
	$run_trans=mysqli_query($con,$get_trans);
	echo"Vehicles:";
	while ($row=mysqli_fetch_array($run_trans)) {
		$tran_id=$row['transport_id'];
		$v_name=$row['vehicle'];

		echo "<li style='display:inline; padding:10px; margin:auto; font-size:20px; '> <a href='transport.php?trans=$tran_id' style='color:white; text-decoration:none;'>$v_name</a></li>";
	}
}
function transDetails(){
	global $con;
	if(!isset($_GET['trans'])){
		echo "welcome to our transport department";
	
	}
	
	else{
		$trans_id=$_GET['trans'];
		$get_trans=" select * from transport where transport_id='$trans_id'";
		$run_get_trans=mysqli_query($con,$get_trans);
		
		while($row=mysqli_fetch_assoc($run_get_trans)){
			$v_name=$row['vehicle'];
			$trans_manager=$row['transport_manager'];
			$v_desc=$row['vehicle_desc'];	
			echo "
			<div width='500' height='auto;' align='left;'>
			<h2 style='text-align:center;'>$v_name</h2>
			<img src='../images/bus.jpg' width='400' height='300'>
			<p> Transport Manager: $trans_manager</p>
			<p>$v_desc</p>

			</div>
			";
		}

	}

}
function getLibrary(){
	global $con;
	$get_lib=" select * from library";
	$run_lib=mysqli_query($con,$get_lib);
	echo"library:";
	while ($row=mysqli_fetch_array($run_lib)) {
		$lib_id=$row['library_id'];
		$lib_name=$row['library_name'];

		echo "<li style='display:inline; padding:10px; margin:auto; font-size:20px; '> <a href='library.php?lib=$lib_id' style='color:white; text-decoration:none;'>$lib_name</a></li>";
	}
}

function libDetails(){
	global $con;
	if(!isset($_GET['lib'])){
		echo "welcome to our Library facilities!";
	
	}
	
	else{
		$lib_id=$_GET['lib'];
		$get_lib=" select * from library where library_id='$lib_id'";
		$run_lib=mysqli_query($con,$get_lib);
		
		while($row=mysqli_fetch_assoc($run_lib)){
			$lib_name=$row['library_name'];
			$lib_manager=$row['library_manager'];
			$lib_desc=$row['library_desc'];	
			echo "
			<div width='500' height='auto;' align='left;'>
			<h2 style='text-align:center;'>$lib_name</h2>
			<img src='../images/lib.jpg' width='400' height='300'>
			<p> Library Manager: $lib_manager</p>
			<p>$lib_desc</p>

			</div>
			";
		}

	}

}
function getSport(){
	global $con;
	$get_sport=" select * from sports";
	$run_sport=mysqli_query($con,$get_sport);
	echo" This are our Sports:";
	while ($row=mysqli_fetch_array($run_sport)) {
		$sport_id=$row['sport_id'];
		$game_name=$row['game'];

		echo "<li style='display:inline; padding:10px; margin:auto; font-size:20px; '> <a href='sport.php?sport=$sport_id' style='color:white; text-decoration:none;'>$game_name</a></li>";
	}
}

function sportDetails(){
	global $con;
	if(!isset($_GET['sport'])){
		echo "welcome to our Library facilities!";
	
	}
	
	else{
		$sport_id=$_GET['sport'];
		$get_sport=" select * from sports where sport_id='$sport_id'";
		$run_sport=mysqli_query($con,$get_sport);
		
		while($row=mysqli_fetch_assoc($run_sport)){
			$game_name=$row['game'];
			$game_manager=$row['game_manager'];
			$game_desc=$row['game_desc'];	
			echo "
			<div width='500' height='auto;' align='left;'>
			<h2 style='text-align:center;'>$game_name</h2>
			<img src='../images/game.jpg' width='400' height='300'>
			<p> Game Manager: $game_manager</p>
			<p>$game_desc</p>

			</div>
			";
		}

	}

}

function getLab(){
	global $con;
	$get_lab=" select * from laboratory";
	$run_lab=mysqli_query($con,$get_lab);
	echo" This are our Sports:";
	while ($row=mysqli_fetch_array($run_lab)) {
		$lab_id=$row['lab_id'];
		$lab_name=$row['lab_name'];

		echo "<li style='display:inline; padding:10px; margin:auto; font-size:20px; '> <a href='lab.php?lab=$lab_id' style='color:white; text-decoration:none;'>$lab_name</a></li>";
	}
}

function labDetails(){
	global $con;
	if(!isset($_GET['lab'])){
		echo "welcome to our Library facilities!";
	
	}
	
	else{
		$lab_id=$_GET['lab'];
		$get_lab=" select * from laboratory where lab_id='$lab_id'";
		$run_lab=mysqli_query($con,$get_lab);
		
		while($row=mysqli_fetch_assoc($run_lab)){
			$lab_name=$row['lab_name'];
			$lab_manager=$row['lab_manager'];
			$lab_desc=$row['lab_desc'];	
			echo "
			<div width='500' height='auto;' align='left;'>
			<h2 style='text-align:center;'>$lab_name</h2>
			<img src='../images/lab.jpg' width='500' height='350'>
			<p> laboratory Manager: $lab_manager</p>
			<p>$lab_desc</p>

			</div>
			";
		}

	}

}
function feeState(){
	if(isset($_GET['fee_stat'])){
	global $con;
	$reg_no=$_SESSION['reg_no'];
	$query=" select * from fee_statements where reg_no='$reg_no'";
	$run=mysqli_query($con,$query);
	echo "<table style='width:650px; height:auto; border:2px solid white;'>
			<tr align:center;>
			<th colspan='8' style='border:2px solid white; text-align:center; background-color:white;'><h2>Fee Statement</h2></th>
			</tr>
			<tr>
				<th style='border:2px solid white; text-align:center;'> Adm number</th>
				<th style='border:2px solid white; text-align:center;'> Names</th>
				<th style='border:2px solid white; text-align:center;'> Source</th>
				<th style='border:2px solid white; text-align:center;'> Amount</th>
				<th style='border:2px solid white; text-align:center;'> Date</th>
				<th style='border:2px solid white; text-align:center;'> Balance</th>
			</tr>

		"; 
	
	while($row=mysqli_fetch_array($run)){
		$reg_no=$row['reg_no'];
		$names=$row['names'];
		$source=$row['source'];
		$amount=$row['amount'];
		$date=$row['date'];
		$balance=$row['balance'];
		echo "
			
			<tr >
				<td style='border:2px solid white;'>$reg_no</td>
				<td style='border:2px solid white;'>$names</td>
				<td style='border:2px solid white;'>$source</td>
				<td style='border:2px solid white;'>$amount</td>
				<td style='border:2px solid white;'>$date</td>
				<td style='border:2px solid white;'>$balance</td>
				</tr>
			

		";
	}
	echo "</table>";

}
}
function getResults(){
	if(isset($_GET['results'])){
	global $con;
	$reg_no=$_SESSION['reg_no'];
	$query=" select * from results_y1s1 where reg_no='$reg_no'";
	$run=mysqli_query($con,$query);
	$row=mysqli_fetch_array($run);
	$Ac_year=$row['academic_year'];
	$year_s=$row['year_study'];
	$sem=$row['sem'];
	echo "<table style='width:650px; height:auto; border:2px solid white; background-color:lightgreen;'>
			<tr align:center;>
			<th colspan='8' style='border:2px solid white; text-align:center;'><img src='../images/logo.png' width='200' height='150'>
				<h4> COASTLINE COMMUNITY COLLEGE</h4>
				<p> P.O.BOX 365-80300-Mombasa TEL:0705984772</p>
				<h4>EXAMINATION RESULT SLIP</h4>
			</th>
			</tr>
			<tr>
				<td style='border:2px solid white;'>Registration No:</td>
				<td style='border:2px solid white; ' colspan='4'> $reg_no</td>
			</tr>
			<tr>
				<td style='border:2px solid white; '>Academic year</td>
				<td style='border:2px solid white; ' colspan='4'>$Ac_year</td>
			</tr>
			<tr>
				<td style='border:2px solid white;'>Year of Study</td>
				<td style='border:2px solid white; ' colspan='4'>$year_s</td>
				
			</tr>
			<tr>
				<td style='border:2px solid white; '>Sem</td>
				<td style='border:2px solid white; ' colspan='4'>$sem</td>
			</tr>
			<tr>
				<th style='border:2px solid white; text-align:center;'> CODE</th>
				<th style='border:2px solid white; text-align:center;'>  DESCRIPTION</th>
				<th style='border:2px solid white; text-align:center;'> UNIT(S)</th>
				<th style='border:2px solid white; text-align:center;'> GRADE</th>
			</tr>

		"; 
	
	while($row=mysqli_fetch_array($run)){
		
		$code=$row['unit_code'];
		$unit_name=$row['unit_name'];
		$units=$row['unit(s)'];
		$grade=$row['grade'];
		echo "
			
			<tr >
				<td style='border:2px solid white;'>$code</td>
				<td style='border:2px solid white;'>$unit_name</td>
				<td style='border:2px solid white;'>$units</td>
				<td style='border:2px solid white;'>$grade</td>
				</tr>
			

		";
	}
	echo "<tr>
		<td colspan='7'><p>Signed..................................</p></td>
		
		</tr>
		<tr>
			<td colspan='7'><p>Date.....................................</p></td>
		</tr>
	";
	echo "</table>";

}
}

function getProfile(){
	global $con;
	if(isset($_SESSION['reg_no'])){
	$reg_no=$_SESSION['reg_no'];
	$query=" select * from students where reg_no='$reg_no'";
	$run_query=mysqli_query($con,$query);
	$row=mysqli_fetch_array($run_query);
	$fname=$row['student_Fname'];
	$lname=$row['student_Lname'];
	$id_no=$row['id_no'];
	$email=$row['student_email'];
	$year=$row['year_of_study'];
	echo "
		<div class='img-thumbnail'>
			<img class='img-thumbnail' src='../image1.jpg' width='230' >
			<div style='text-align:left;'>
			<p > registration No: $reg_no</p>
			<p> Year of study: $year</p>
			<p> First Name: $fname</p>
			<p> last Name: $lname</p>
			<p> Id No: $id_no</p>
			<p> Email: $email</p>
			</div>

		</div>

	";

}



}
?>