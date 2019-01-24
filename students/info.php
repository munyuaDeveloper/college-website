	<div class="col-sm-4">
							<div class="img-rounded" style="background-color:#96ebf1;">
								<h4 style="text-align: center;">Contact information</h4> 
								<div class="img-rounded" style="background-color: white; margin: 2px;" >
									<?php
									global $con;
									if($_SESSION['reg_no']){
										$reg_no=$_SESSION['reg_no'];
										$query=" select * from contact_information where reg_no='$reg_no'";
										$run_query=mysqli_query($con,$query);
										$info=mysqli_fetch_array($run_query);
										$adm=$info['reg_no'];
										$phone=$info['phone'];
										$email=$info['email'];
										$city=$info['city'];
										$postal_code=$info['postal_code'];
										$postal_address=$info['postal_address'];
										$home_address=$info['home_address'];
									}


									?>

									<table >
										<tr >
											<td>Phone <span class=" glyphicon glyphicon-earphone"></span></td>
											<td>  <?php echo $phone ?> </td>
										</tr>
										<tr>
											<td>Email <span class=" glyphicon glyphicon-envelope"></span></td>
											<td> <?php echo $email ?> </td>
										</tr>
										<tr>
											<td>City</td>
											<td> <?php echo $city ?> </td>
										</tr>
										<tr>
											<td>Postal Code</td>
											<td> <?php echo $postal_code ?> </td>
										</tr>
										<tr>
											<td>Postal Address</td>
											<td> <?php echo $postal_address ?> </td>
										</tr>
										<tr>
											<td>Home Address</td>
											<td> <?php echo $home_address ?> </td>
										</tr>
										<tr align="center">
											<td colspan="4">
												<button class=" btn btn-sm" name="updateContact" style="width: 170px;"> update</button>
											</td>
										</tr>
									</table>
								</div>
							</div>
						
						</div>
						<div class="col-sm-4" >
							<div class="img-rounded" style="background-color:#96ebf1;">
								<h4 style="text-align: center;">basic information</h4> 
								<div class="img-rounded" style="background-color: white; margin: 2px;" >
									<?php
									global $con;
									if($_SESSION['reg_no']){
										$reg_no=$_SESSION['reg_no'];
										$query=" select * from basic_information where reg_no='$reg_no'";
										$run_query=mysqli_query($con,$query);
										$info=mysqli_fetch_array($run_query);
										$adm=$info['reg_no'];
										$names=$info['names'];
										$id=$info['id_no'];
										$sex=$info['sex'];
										$date=$info['date_birth'];
									}


									?>
									<table>
										<tr >
											<td>Admision No</td>
											<td> <?php echo $adm ?> </td>
										</tr>
										<tr>
											<td>Names</td>
											<td> <?php echo $names ?> </td>
										</tr>
										<tr>
											<td>ID No/Passport</td>
											<td> <?php echo $id ?> </td>
										</tr>
										<tr>
											<td>Gender</td>
											<td> <?php echo $sex ?> </td>
										</tr>
										<tr>
											<td>Date of Birth</td>
											<td> <?php echo $date ?> </td>
										</tr>
									</table>
							</div>
							</div>
						
						</div>
						
						<div class="col-sm-4">
							<div class="img-rounded" style="background-color:#96ebf1;">
								<h4 style="text-align: center;">Financial information</h4> 
								<div class="img-rounded" style="background-color: white; margin: 2px;" >
									<?php
									global $con;
									if($_SESSION['reg_no']){
										$reg_no=$_SESSION['reg_no'];
										$query=" select * from financial_information where reg_no='$reg_no'";
										$run_query=mysqli_query($con,$query);
										$info=mysqli_fetch_array($run_query);
										$adm=$info['reg_no'];
										$total_billed=$info['total_billed'];
										$total_paid=$info['total_paid'];
										$balance=$info['balance'];
										
									}


									?>
									<table >
										<tr>
											<td >Total Billed</td>
											<td> <?php echo $total_billed ?> </td>
										</tr>
										<tr>
											<td>Total Paid</td>
											<td> <?php echo $total_paid ?> </td>
										</tr>
										<tr>
											<td>balance</td>
											<td> <?php echo $balance ?> </td>
										</tr>
										
										
									</table>
								</div>
							</div>
						
						</div>