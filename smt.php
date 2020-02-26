
<!DOCTYPE html>
<html>
<head>
	<title>Welcome to Home</title>
	<link rel="stylesheet" type="text/css" href="style.css">

		 <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700%7CPT+Serif:400,700,400italic' rel='stylesheet'>
		  <link href="https://fonts.googleapis.com/css?family=Montserrat|Open+Sans" rel="stylesheet">
</head>
<body>
  <div class="bgimage" >
  	<div class="menu">
  		<div class="leftmenu">
  			<h4>SMART HEALTH CARE</h4>
  		</div>
  		<div class="rightmenu">
  			<ul>
                <li><a href="welcome.php">Home</a></li>
                <li><a href="medicine.php">Medicine</a></li>
  				<li><a href="smt.php">Smart Treatment</a></li>
  				<li><a href="dinfo.php">Doctor's</a></li>
                <li><a href="about.php">About Us</a></li>
                <li>
                <?php
session_start();
mysqli_connect("localhost","root","");
mysqli_select_db("smarthc");
if($_SESSION["user"]==true)
{

    echo $_SESSION["user"];
}
else
{
	 header('location:login.php');
}

?>
                                    <li><a href="logout.php">LOGOUT</a> </li>
                
  				
  			</ul>
  		</div>
  	</div> 
<head>
	<meta charset="utf-8">
	<title>Registation Page</title>
	<link rel="stylesheet" type="text/css" href="smt1.css">
</head>
<body>
  <div class="box">
		<h2>GENERAL TREATMENT</h2>
<form action="gmedi.php" method="post" enctype="multipart/form-data">
  	<div class="inputbox">
    	<input type="submit" name="" required="" Value="FIND">  
    </div>
  </form>

  <div class="box2">
		<h3>EMERGENCY DOCTOR</h3>
<form action="emergency.php" method="post" enctype="multipart/form-data">
  	<div class="inputbox">
    	<input type="submit" name="" required="" Value="FIND">  
    </div>
  </form>

  </div>


