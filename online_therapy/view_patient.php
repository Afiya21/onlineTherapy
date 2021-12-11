<!DOCTYPE html>
<html>
<head>


    <meta name="viewport" content="with=device-width, initial scale=1.0">
    <title>Online Psychotherapy and Mentorship System</title>


	<link rel="stylesheet" href="style5.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,300;0,400;0,500;0,600;0,700;0,900;1,300&display=swap" rel="stylesheet">
</head>

<body>
<header>
<h1>  patients Information</h1>
</header>

	<table class="table4">
		<tr>
		<th>id</th>
		<th>firstName</th>
	    <th>lastName</th>
		<th>email</th>
	   <th>Password</th>
	

		</tr>

		<?php 
		include("dbconn.php");
		$query="SELECT  * FROM  user";
	$result=mysqli_query($dbconn,$query);
		
		
		if(mysqli_num_rows($result)>=1){
			while ($row3=$result->fetch_assoc()) {

				echo "<tr><td>".$row3["user_id"]."</td><td>".$row3["fname"]."</td><td>".$row3["lname"].
				"</td><td>".$row3["email"]."</td><td>".$row3['password']."</td></tr>";

			echo "</table";
	
		}}

		?>
		
	</table>

  
        <script>
        var card = document.getElementById("card");
        function openRegister(){
            card.style.transform = "rotateY(-180deg)";
        }
        function openLogin(){
            card.style.transform = "rotateY(0deg)";
        }
        </script>

</body>
</html>