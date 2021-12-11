<?php
include("dbconn.php");
if($_SERVER["REQUEST_METHOD"] == "POST"){
 $psychtherapist_id=$_POST['psychtherapist_id']; {
 
	$querydelete="DELETE FROM psychtherapist WHERE psychtherapist_id ='$psychtherapist_id' ";
	$result=mysqli_query($dbconn,$querydelete);
	
	
}
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
                    <h2>delete psychtherapist</h2>
                    <form class="form" method="POST">
                        <input type="psychtherapist_id"  name="psychtherapist_id" class="input-box" placeholder="psychtherapist id" required>
                      
                        <button type="submit" class="submit-btn">delete</button>
                        
                        
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