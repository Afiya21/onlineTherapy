<?php
// including the database connection file
include("dbconn.php");
if($_SERVER["REQUEST_METHOD"] == "POST"){  
    $psychtherapist_firstName=$_POST['psychtherapist_firstname'];
    $psychtherapist_lastName=$_POST['psychtherapist_lastname'];
	$psychtherapist_Gender=$_POST['psychtherapist_gender'];
	$psychtherapist_Experience=$_POST['psychtherapist_experience'];
	$psychtherapist_Age=$_POST['psychtherapist_age'];
	$psychtherapist_Specialized=$_POST['psychtherapist_specialized'];
	$psychtherapist_Adress=$_POST['psychtherapist_adress'];
    $username=$_POST['username'];
    $password=$_POST['password'];

    $pass1=md5($password);
    $salt="a1Bz20ydqelm8m1wql";
    $pass1=$salt.$pass1;

    
        //updating the table
        $query = "INSERT INTO psychtherapist(psychtherapist_firstname,psychtherapist_lastname,psychtherapist_gender,psychtherapist_experience,psychtherapist_age,psychtherapist_specialized,psychtherapist_adress,username, password) 
                VALUES ('$psychtherapist_firstName','$psychtherapist_lastName','$psychtherapist_Gender','$psychtherapist_Experience','$psychtherapist_Age','$psychtherapist_Specialized','$psychtherapist_Adress','$username','$pass1')";

        $result = mysqli_query($dbconn,$query);
        


}
        
    

?>


<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="with=device-width, initial scale=1.0">
    <title>Online Psychotherapy and Mentorship System</title>
    <link rel="stylesheet" href="Reg.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,300;0,400;0,500;0,600;0,700;0,900;1,300&display=swap" rel="stylesheet">
</head>
<body>
  <div class="container">
        <div class="card">
            <div class="inner-box" id="card">
                <div class="card-front">
                    <h2>Add psychtherapist</h2>
                    <form class="form" method="POST">
                        <input type="psychtherapist_firstname"  name="psychtherapist_firstname" class="input-box" placeholder="psychtherapist firstname" required>
						<input type="psychtherapist_lastname"  name="psychtherapist_lastname" class="input-box" placeholder="psychtherapist lastname" required>
						<input type="psychtherapist_gender"  name="psychtherapist_gender" class="input-box" placeholder="psychtherapist gender" required>
						<input type="psychtherapist_experience"  name="psychtherapist_experience" class="input-box" placeholder="psychtherapist experience" required>
						<input type="psychtherapist_age"  name="psychtherapist_age" class="input-box" placeholder="psychtherapist age" required>
						<input type="psychtherapist_specialized"  name="psychtherapist_specialized" class="input-box" placeholder="psychtherapist specialized" required>
						<input type="psychtherapist_adress"  name="psychtherapist_adress" class="input-box" placeholder="psychtherapist adress" required>
						<input type="username"  name="username" class="input-box" placeholder="username" required>
                        <input type="password" name="password" class="input-box" placeholder="Password" required>
                        <button type="submit" class="submit-btn">add</button>
                        
                        
                    </form>
                  
                </div>
             
                
               
            </div>
        </div>

  </div>

  
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