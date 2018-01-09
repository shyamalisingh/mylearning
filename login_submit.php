<?php
// Start the session
session_start();
?>

<?php
  $dbConnectLink= mysqli_connect("localhost" , "shammi" , "shammi" , "learning");
	if($dbConnectLink->connect_error){
		die("connection faild".$dbConnectLink->connect_error);
	
	}
	$email= $_POST["Username"];
	$password= $_POST["password"];
	
	$sql="select firstName,email,password from users where email='$email' and password='$password'";
	//echo $sql;
	$result=mysqli_query($dbConnectLink,$sql);
		$rowcount=mysqli_num_rows($result);
		if($rowcount==1){
			$row=mysqli_fetch_row($result);
			
			$_session["email"]=$email;
			echo "welcome user $row[0]";
			echo "<a href='logout.php'>logout</a>";
			echo "<br/><br />";
			
			$_session["name"]=$row[0];
		}
		else{
					echo "invalid user";
			}
	
  
?>
