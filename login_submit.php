<?php
//include "nevigation.php";
  $dbConnectLink= mysqli_connect("localhost" , "shammi" , "shammi" , "learning");
	if($dbConnectLink->connect_error){
		die("connection faild".$dbConnectLink->connect_error);
	
	}
	$email= $_POST["Username"];
	$password= $_POST["password"];
	
	$sql="select firstName,email,password, admin from users where email='$email' and password='$password'";
	//echo $sql;
	$result=mysqli_query($dbConnectLink,$sql);
		$rowcount=mysqli_num_rows($result);
		if($rowcount==1){
			$row=mysqli_fetch_row($result);
			
			$_SESSION["email"]=$email;
                        echo "login successfull";
                        echo "<meta http-equiv='refresh' content='0;url=index.php'>";
			//echo "welcome $row[3]";
                        echo "<br>";
			echo "<a href='index.php'>go to menu</a>";
			echo "<br/><br />";
			
			$_SESSION["name"]=$row[0];
                        $_SESSION["admin"]=$row[3];
		}
		else{
					echo "invalid user";
                                        echo "<br>redirecting in 5 sec";
                                        echo "<meta http-equiv='refresh' content='5;url=index.php'>";
			}
	
  
?>
</body>
</html> 