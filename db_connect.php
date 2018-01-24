
<?php
$dbConnectLink=mysqli_connect("localhost","shammi","shammi","learning");
	
		if ($dbConnectLink->connect_error) {
			echo 'connection failed';
			die("Connection failed: " . $dbConnectLink->connect_error);
		} 
		
//function writeMsg() {
   // echo "Hello world!";
//}
?>