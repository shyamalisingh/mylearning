<html>
<head></head>
<body>
<h1>Welcome</h1>

<h2>Healthy Bite</h2>
<div class="container">
<?php
require("db_connect.php");
include "nevigation.php";
if(!isset($_POST["submit"])){
?>
	
<div class="row">
	<form action="answer.php" method="POST" class="col-md-4">
		<div class="input-append">
			<label class="control-label"><h2>enter email</h2></label>
			<input type="text" name="email" placeholder="enter email" id="email" class="form-control"/>
		</div>
		<br><br>
		<input type="submit" value="enter" name="submit" class="btn black-btn col-md-4"/>
		
	</form>	
</div>	
<?php
}
else{
?>
<?php
$user=$_POST["email"];
$sql="select question from users where email='$user'";
//echo $sql;
$results= mysqli_query($dbConnectLink,$sql);
$rowcount=mysqli_num_rows($results);
if($rowcount==1){
	$row = mysqli_fetch_row($results);
	
?>
	<form action="new_password.php" method="POST" class="col-md-4">
		<div class="input-append">
			<label class="control-label"><h1>your sequrity Question was: <?php echo $row[0];?></h1></label>
		</div>	
			
		<div class="row">
			<div class="input-append">
				<label class="control-label"><h1>type answer:</h1>
				<input type="text" name="answer" placeholder="type your answer" id="answer" class="form-control"/>
				<input type="hidden" name="email" placeholder="enter email" id="email" class="form-control" value="<?php echo $user ?>"/>
				<input type="submit" value="enter" name="submit" class="btn black-btn col-md-4"/>	
			</div>
		</div>
	</form>	
<?php	
	}else{
		echo "go back to home";
		echo "<a href='answer.php'>forget password</a>";
	}
}
?>
	

</div>	
</body>
</html>