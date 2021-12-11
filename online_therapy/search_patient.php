ss<!DOCTYPE html>
<html>
<head>
	<title>psychatrist</title>
	<link rel="stylesheet"  href="style3.css">

	<link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Open+Sans:wght@300&display=swap" rel="stylesheet">
</head>

<header>
	<h1>psychatrist<span>Patient</span></h1>
		

</header>

<body>	
<form method="post" action="search_patient.php" class="patientsearch">

	<?php include ('dbconn.php') ;?>

	<div class="input-group">
		<label style="font-weight: bold; font-size: 30px">Search By:</label>
		<label style="font-weight: bold">Patient ID</label>
		<label style="font-weight: bold">Patient Name</label>
		<input type="text" name="PID" />

	</div>

	<div class="input-group">
		<button type="submit" name="SearchP" class="btn">Search</button>
	</div>

		</form>

		<?php 

         if (isset($_POST['SearchP'])) {

         ?>	<table class="table3">
         	<caption style="margin-left: 34px;padding: 10px;font-weight: bold;font-size: 30px;" class="asd">Patient Information</caption>>

		<tr>
		<th>PatientID</th>
		<th>Name</th>
		<th>Email</th>
		<!--<th>BloodGroup</th>-->


		</tr> <?php 
		


		$PID =$_POST['PID'];
 $PID = mysqli_real_escape_string($dbconn,$PID);
		$sqlP="SELECT  * FROM  user WHERE user_id=('$PID') OR fname=('$PID') " ;
		$resultP=mysqli_query($dbconn,$sqlP);
		if(mysqli_num_rows($resultP)==1){
			while ($rowP=$resultP->fetch_assoc()) {

				echo "<tr><td>".$rowP["user_id"]."</td><td>".$rowP["fname"]."</td><td>".$rowP['Email']."</td><td>"
				."</td></tr>";
			}


			echo "</table";
	


		}
	}?>
	
</body>
</html>