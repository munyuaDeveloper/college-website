<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Student Login</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../css/bootstrap.min.css"/>
  <script src="../js/jquery2.js"></script>
  <script src="../js/bootstrap.min.js"></script>
    <!--there is a problem connecting with bootstrap-->
  <link rel="stylesheet" type="text/css" href="../bootstrap-3.3.7-dist\bootstrap-3.3.7-dist\css\bootstrap.min.css">
  <script type="text/javascript" href="../bootstrap-3.3.7-dist\bootstrap-3.3.7-dist\js\bootstrap.min.js">
  </script>
  
  
      <link rel="stylesheet" href="css/style.css">

  
</head>

<body>
    <nav class="navbar navbar-inverse" style="margin: 0; font-size: 18px;">
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
        <li><a href="#"> About us <span class=" glyphicon glyphicon-info-sign"></span></a></li>
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
        <li><a href="login.php">My Account</a></li>
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
            include "../includes/db.php";
            $get_facilty=" select * from facilities";
            $run_facility=mysqli_query($con,$get_facilty);
            while ($row=mysqli_fetch_array($run_facility)) {
              $f_id=$row['facility_id'];
              $f_name=$row['facility_name'];
              $webpage=$row['webpage'];
              echo "<li><a href='../facilities/$webpage'><span class='glyphicon glyphicon-list'></span> $f_name</a></li>";
            }

            ?>
           
          </ul>
        </li>

      </ul>
      <ul class="nav navbar-nav navbar-right">
        <?php
        if( @$_SESSION['reg_no']){
          echo "<a href='logout.php' style='line-height:40px;'><span class='glyphicon glyphicon-log-out' ></span> Logout</a></li>";

        }
        else{
          echo "<a href='login.php' style='line-height:40px;'><span class='glyphicon glyphicon-log-in'></span> Login</a></li>";
        }
        ?>
      </ul>
    </div>
    </div>
  </nav>

  <div class="background-wrap">
  <div class="background"></div>
</div>

<form id="accesspanel" action="login.php" method="post">
  <h1 id="litheader">Student Login</h1>
  <div class="inset">
    <p>
      <input type="text" name="reg_no" id="email" placeholder="Registration number" required>
    </p>
    <p>
      <input type="password" name="id_no" id="password" placeholder="National id number" required>
    </p>
  </div>
  <p class="p-container">
    <input type="submit" name="login" id="go" value="login">
  </p>
</form>
  <!--<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
 <script  src="js/index.js"></script>
-->
<?php
 if (isset($_POST['login'])) {
   global $con;
   $reg_no=$_POST['reg_no'];
   $password=$_POST['id_no'];
   $query="select * from students where reg_no='$reg_no' AND id_no='$password'";
   $run_query=mysqli_query($con,$query);
   if(!($row=mysqli_num_rows($run_query))==0){
    echo "<script> alert('you logged in successfully!')</script>";
    echo "<script> window.open('student.php','_self')</script>";
    $_SESSION['reg_no']=$reg_no;
   }
   else{
     echo "<script> alert('You are not registered as a student in this insititution! Please register with us.')</script>";
    echo "<script> window.open('login.php','_self')</script>";
   }
 }






?>



</body>

</html>
