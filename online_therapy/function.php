<?php
function check_login($dbconn)
{
	if (isset($_SESSION['admin_id']));
	{
		$id=$_SESSION['admin_id'];
		$query= "select * FROM `admin` WHERE admin_id='$id' limit 1";
		$result=mysqli_query($dbconn,$query);
		if($result && mysqli_num_rows($result)>0)
		{
			$user_data=mysqli_fetch_assoc($result);
			return $user_data;
		}
	}
	//redirect to login page
	header("location:/Reg.php");
	die;
}