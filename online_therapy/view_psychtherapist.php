<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="with=device-width, initial scale=1.0">
    <title>Online Psychotherapy and Mentorship System</title>
    <link rel="stylesheet" href="Reg.css">
    <link rel="stylesheet" href="style5.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,300;0,400;0,500;0,600;0,700;0,900;1,300&display=swap" rel="stylesheet">
</head>
<header>
<h1> psychatrist information</h1>
</header>
<body>
  

		</tr>

	 
		                                      <?php
                                      include('dbconn.php');

                                     
                                      $query = "SELECT * FROM psychtherapist ";
                                      $result = mysqli_query($dbconn,$query);
									  ?>
									  <h1 style="margin-left:35% ;margin-top:80px"   class="asd"></h1>
	<table class="table4">
		<tr>
		<th> ID</th>
        <th>firstName</th>
		<th>lastName</th>
        <th>experience</th>
        <th>age</th>
        <th>speccialize</th>
        <th>address</th>
        <th>username</th>
        <th>Password</th>
        <th>
        </tr>

<?php
                                                                if($result){
                                            while($res = mysqli_fetch_array($result)) {     
 echo "<tr> <td>".$res['psychtherapist_id']."</td> <td>".$res['psychtherapist_firstname']."</td> <td>".$res['psychtherapist_lastname']."</td>
 <td>".$res['psychtherapist_experience']."</td> 
 <td>".$res['psychtherapist_age']."</td>
 <td>".$res['psychtherapist_specialized']."</td> 
 <td>".$res['psychtherapist_adress']."</td> 
 <td>".$res['username']."</td>
 <td>".$res['password']."</td></tr>";
                                            
									
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