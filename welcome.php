
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
                
                </li>
  				
  			</ul>
  		</div>
  	</div> 
  	<div class="text">
  		<h4>SMART.HEALTH.CARE</h4>
  		<h1>BE-SMART & HEALTHY</h1>
  		<h3>WE ARE FIRST IN BD WHO PROVIDE THIS SERVICE</h3>
  		<button id="button1">LIKE-SHARE</button>
  		<button id="button2">SUSCRIBE US</button>
  	</div>
  </div>
</body>
</html>