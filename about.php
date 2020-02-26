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
	<link rel="stylesheet" type="text/css" href="about.css">
</head>
<body>
  <div class="box">
		<h2>OUR INSTRUCTOR</h2>
<form action="" method="post" enctype="multipart/form-data">
  	<div class="inputbox">
    	 <input type="submit" name="" required="" Value="Md Kamruzzaman">
    </div>
    <div class="inputbox">
    	 <input type="submit" name="" required="" Value="Lecturer of BUBT">
    </div>
  </form>

  <div class="box2">
		<h3>OUR TEAM</h3>
<form action="" method="post" enctype="multipart/form-data">
  	<div class="inputbox">
    	<input type="submit" name="" required="" Value="Md Shariful Islam">  
    </div>
    <div class="inputbox">
    	<input type="submit" name="" required="" Value="Md Faisal Ahmed">  
    </div>
    <div class="inputbox">
    	<input type="submit" name="" required="" Value="Manik Sarker">  
    </div>
    <div class="inputbox">
    	<input type="submit" name="" required="" Value="Md Rezaul Karim">  
    </div>
  </form>

  </div>


