<?php
// Start the session
session_start();
require("db_connect.php");
?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="style/style1.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css.map">

<script src="js/bootstrap.js" type="javascript"></script>


</head>
<body>
<?php
$user=$_POST["email"];
$answer=$_POST["answer"];
$sql="select firstName from users where email='$user' and answer='$answer'";
//echo $sql;
$result=mysqli_query($dbConnectLink,$sql);
$rowcount=mysqli_num_rows($result);
if($rowcount==1){
?>
	<h1>
creat your new password!
</h1>

	<div class="container">
	<div class="row">
	<form id="form2" name="new_password" action="new_password_submit.php" method="POST" class="col-md-4">
	<label class="control-label">Enter Your New Password</label><br>
	<input type="text" name="newpassword" placeholder="Enter New Password" id="newpassword" class="form-control"></input><br><br>
	
	<label class="control-label">Re-Enter Password</label>
	<input type="text" name="reenter_password" placeholder="Re-Enter Password" id="reenter_password" class="form-control"></input>
	<br>
	
	<input type="submit" value="submit" class="btn black-btn col-md-4"/>
	<?php
}
	else{
		echo "wrong secret answer!pls try again!";
		echo "<a href='answer.php'>forget password</a>";
		
	}
?> 

	</body>
	</html>