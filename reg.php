<?php
require_once("condb.php");
if($_POST['btnIn'] =="Insert"){
	$nam = $_POST['user'];
	$pwds = $_POST['pass'];
	$val = "'$nam', '$pwds'";
	$sqlIn = "INSERT INTO user VALUES($val)";
	$qryIn = mysqli_query($con,$sqlIn);
	if($qryIn){
		echo'<font color="green"><p align="center"> SUCCESSFULLY REGISTERD!</p></font>';
	}
    
	else {
		
        header('location:registration.php');
    /*echo'<font color="red"><p align="center"> ERROR!</p></font>';*/
	}
}
?>

<?php
session_start();
mysql_connect("localhost","root","");
mysql_select_db("smarthc");

if(isset($_REQUEST["submit"]))
{
	  $user=$_REQUEST["user"];
	  $pass=$_REQUEST["pass"];
	  $query=mysql_query("select * from user where user='$user' && pass='$pass'");
	  $rowcount=mysql_num_rows($query);
	  if($rowcount==true)
	  {
		    $_SESSION["user"]=$user;
		   header('location:welcome.php');
	  }
	  else
	  {
		   echo "<center>YOUR USER & PASSWORD IS INVALID!</center>";
	  }
}

?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Registration Succesful</title>
	<link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>
  <div class="box">
		<h2>LOGIN</h2>
  <form action="login.php" method="post" enctype="multipart/form-data">
  	<div class="inputbox">
    	<input type="text" name="user" required="" placeholder="username">

      
    </div>
    <div class="inputbox">
    	<input type="password" name="pass" required="" placeholder="password">
        
    </div>
    <input type="submit" name="submit" value="Login" placeholder="" url: >
  </form>
    
  </div>
</body>
</html>