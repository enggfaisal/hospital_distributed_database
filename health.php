<?php
require_once("condb.php");
	 $sqlShow = "SELECT * FROM health ORDER BY name ASC";
	 $qryShow = mysqli_query($con,$sqlShow);
	 $numShow = mysqli_num_rows($qryShow);
	if ($numShow>0) { 
?>
<table border="1"style="margin:200px 0px 0px 200px">
		<tr>
			<th>NAME</th>
			<th>CHAMBER</th>
		</tr>
	<?php while($recShow = mysqli_fetch_object($qryShow)){?>
	<tr style="background: red;">
			<td><?php echo $recShow->name; ?></td>
			<td><?php echo $recShow->chamber; ?></td>
		</tr>
	<?php } ?>
	</table>
<?php 
} else {
    echo "No Data Found";
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Emergency Doctor's</title>
	<link rel="stylesheet" type="text/css" href="emergency.css">
</head>
<body>
  <div class="box">
		<h2>SPEACIALIEST</h2>
<form action="emergency.php" method="post" enctype="multipart/form-data">
  	<div class="inputbox">
    	<input type="submit" name="" required="" Value="Medicine">  
    </div>
  </form>
      
      <form action="cardiology.php" method="post" enctype="multipart/form-data">
              <div class="inputbox">
    	<input type="submit" name="" required="" Value="Cardiology">
    </div>
  </form>
      
            <form action="neurology.php" method="post" enctype="multipart/form-data">
              <div class="inputbox">
    	<input type="submit" name="" required="" Value="Neurology">
    </div>
  </form>
      

      
            <form action="health.php" method="post" enctype="multipart/form-data">
              <div class="inputbox">
    	<input type="submit" name="" required="" Value="Health">
    </div>
  </form>
      
            <form action="sergury.php" method="post" enctype="multipart/form-data">
              <div class="inputbox">
    	<input type="submit" name="" required="" Value="Sergury">
    </div>
  </form>
      
            <form action="neonatal.php" method="post" enctype="multipart/form-data">
              <div class="inputbox">
    	<input type="submit" name="" required="" Value="Neonatal">
    </div>
  </form>
                 <form action="mental.php" method="post" enctype="multipart/form-data">
              <div class="inputbox">
    	<input type="submit" name="" required="" Value="Mental">
                  <a href="smt.php">PREVIOUS</a>
    </div>
  </form>

  </div>
</body>
</html>


