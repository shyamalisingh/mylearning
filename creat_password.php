<?php
// Start the session
session_start();
?>
<?php
	
	$dbConnectLink= mysqli_connect("localhost","shammi","shammi","learning");
		if($dbConnectLink->connect_error) {
			
			die ("connection failed: ". $dbConnectLink->connect_error);
		}
	$newpassword=$_POST["newpassword"];
	$reenter=$_POST["reenter_password"];
	
	$sql= "select user_id,question,answer from users where "
?>		