<!DOCTYPE html>
<html>
<head>

	<title>Medicine</title>
	<link rel="stylesheet" type="text/css" href="medicine.css">

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
mysql_connect("localhost","root","");
mysql_select_db("smarthc");
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
  	<h1 align="center";>MEDICINE LIST WITH UPDATE PRICE</h1>
        
        
   <table style="width:100%">
  <tr>
   <th>No</th>
    <th>Name</th> 
      <th>Group</th>
       <th>Company</th>
        <th>Price</th>
  </tr>
  <?php
$conn = mysqli_connect("localhost", "root", "", "smarthc");
  // Check connection
  if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
  } 
$sql="SELECT * from medicinetbl ORDER BY no ASC";  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
   // output data of each row
   while($row = $result->fetch_assoc()) {
    echo"<tr> <td>". $row["no"]."</td><td>".$row["name"] ."</td><td>".$row["group"]."</td><td>".$row["company"]."</td><td>".$row["price"]."</td></tr>";
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
