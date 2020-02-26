<!DOCTYPE html>
<html>
<head>

	<title>Doctor's information</title>
	<link rel="stylesheet" type="text/css" href="styled.css">

		 <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700%7CPT+Serif:400,700,400italic' rel='stylesheet'>
		  <link href="https://fonts.googleapis.com/css?family=Montserrat|Open+Sans" rel="stylesheet">
</head>
<body >

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

  	<div class="table">
  	<h1 align="center";>DOCTOR'S LIST WITH DETAILS</h1>
   <table style="width:100%">
		<tr>
			<th>NAME</th>
			<th>SKILL</th>
			<th>SPECIALIST</th>
			<th>STUDIES</th>
			<th>CHAMBER</th>
		</tr>
  <?php
$conn = mysqli_connect("localhost", "root", "", "smarthc");
  if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
  } 
$sql="SELECT * from dinfo";  $result = $conn->query($sql);
  if ($result->num_rows > 0) {

   while($row = $result->fetch_assoc()) {
    echo"<tr> <td>". $row["name"]."</td><td>".$row["skill"] ."</td><td>".$row["specialist"]."</td><td>".$row["studies"]."</td><td>".$row["chamber"]."</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
   </table>
  	</div>
  </div>
</body>
</html>
