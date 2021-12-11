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

<div class="header">
	<h2>My Information</h2>
</div>
<form method="post" " class="info">


 


<div class="Dcontent">


	<label>ID: <?php echo "" .isset($_SESSION['psychtherapist_id']);?></label>

	 	   <br>
	 	   <br>
	 	   
	 	   <label> Name : <?php echo $colD['psychtherapist_firstname']; ?></label>
	 	   	 	   <br>
	 	   <br>
	 	   <label> Address : <?php echo $colD['psychtherapist_adress']; ?></label>
	 	   	 	   <br>
	 	   <br>

	 	   <label> Specialized In : <?php echo $colD['psychtherapist_specialized']; ?></label>
	 	   	 	   <br>
	 	   <br>
	 	   



	
        
           
	
</div>

  



 


</form>