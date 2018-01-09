<?php
// Start the session
session_start();
?>

<?php
	require("db_connect.php");
	$newpassword=$_POST["newpassword"];
	$user=$_session["email"];
	
	$sql= "update users set password=$newpassword where email=$user";
		$result=mysqli_query($dbConnectLink,$sql);
		if($result==TRUE){
			echo "password change successfully!";
		}
		else{
			echo "error";
		}

$dbConnectLink->close();
?>