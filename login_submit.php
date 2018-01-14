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
			
			$_SESSION["email"]=$email;
			echo "welcome $row[0]";
                        echo "<br>";
			echo "<a href='menu_items.php'>go to menu</a>";
			echo "<br/><br />";
			
			$_SESSION["name"]=$row[0];
		}
		else{
					echo "invalid user";
			}
	
  
?>
