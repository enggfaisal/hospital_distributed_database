<?php
require_once("condb.php");
	 $sqlShow = "SELECT * FROM gastric ORDER BY name ASC";
	 $qryShow = mysqli_query($con,$sqlShow);
	 $numShow = mysqli_num_rows($qryShow);
	if ($numShow>0) { 
?>
<table border="1"style="margin:200px 0px 0px 450px">
		<tr>
			<th>AGE</th>
			<th>NAME</th>
			<th>DOSES</th>
		</tr>
	<?php while($recShow = mysqli_fetch_object($qryShow)){?>
	<tr style="background: red;">
			<td><?php echo $recShow->age; ?></td>
			<td><?php echo $recShow->name; ?></td>
			<td><?php echo $recShow->doses; ?></td>
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
	<title>Registation Page</title>
	<link rel="stylesheet" type="text/css" href="smt.css">
</head>
<body>
  <div class="box">
		<h2>GENERAL TREATMENT</h2>
<form action="gmedi.php" method="post" enctype="multipart/form-data">
  	<div class="inputbox">
    	<input type="submit" name="" required="" Value="Faver">  
    </div>
  </form>
      
      <form action="cold.php" method="post" enctype="multipart/form-data">
              <div class="inputbox">
    	<input type="submit" name="" required="" Value="Cold">
    </div>
  </form>
      
            <form action="skin.php" method="post" enctype="multipart/form-data">
              <div class="inputbox">
    	<input type="submit" name="" required="" Value="Skin">
    </div>
  </form>
      

      
            <form action="allargic.php" method="post" enctype="multipart/form-data">
              <div class="inputbox">
    	<input type="submit" name="" required="" Value="Allargic">
    </div>
  </form>
      
            <form action="thin_closet.php" method="post" enctype="multipart/form-data">
              <div class="inputbox">
    	<input type="submit" name="" required="" Value="Thin Closet">
    </div>
  </form>
      
            <form action="intense_pain.php" method="post" enctype="multipart/form-data">
              <div class="inputbox">
    	<input type="submit" name="" required="" Value="Intense">
    </div>
  </form>
                 <form action="gastric.php" method="post" enctype="multipart/form-data">
              <div class="inputbox">
    	<input type="submit" name="" required="" Value="Gastric">
                  <a href="smt.php">PREVIOUS</a>
    </div>
  </form>

  </div>
</body>
</html>


