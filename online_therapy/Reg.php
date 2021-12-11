<?php 
include("dbconn.php");
include('function.php');

if($_SERVER["REQUEST_METHOD"] == "POST"){
   $username=$_POST['username'];
    $password=$_POST['password'];

    $pass1=md5($password);
    $salt="a1Bz20ydqelm8m1wql";
    $pass1=$salt.$pass1;
	 if(empty($username) || empty($password)) {    
            if(empty($username)) {
            echo "<font color='red'>Username field is empty!</font><br/>";
        }    

        if(empty($password)) {
            echo "<font color='red'>Password field is empty!</font><br/>";
        }    
    } else {
		//read from database
		$query="SELECT * FROM `admin` WHERE username='$username' limit 1";
		$result=mysqli_query($dbconn,$query);
	
		if ($result)
		{
			if($result && mysqli_num_rows($result)>0)
		{
			$user_data =mysqli_fetch_assoc($result);
			if ($user_data['password']===$pass1)
			{
				$_SESSION['admin_id']=$user_data['admin_id'];
				header("Location:adminindex.php");
				
				
				
				 
				
           
				
			}
		}
		}
		
echo "invalid password";
}} 
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
                    <h2>LOGIN</h2>
                    <form class="form" method="POST">
                        <input type="username"  name="username" class="input-box" placeholder="username" required>
                        <input type="password" name="password" class="input-box" placeholder="Password" required>
                        <button type="submit" class="submit-btn">login</button>
                        <input type="checkbox"><span>Remember Me</span>
						<h6>
                                <a href="user_signup.php" class="link">Create User Account</a>
                            </h6>
                        
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