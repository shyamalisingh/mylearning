
	
	<?php
		require("db_connect.php");
	
		$firstName= $_POST["firstName"];
		$lastName= $_POST["lastName"];
		$gender= $_POST["gender"];
		$age= $_POST["age"];
		$weight= $_POST["weight"];
		$height= $_POST["height"];
		$dietType= $_POST["dietType"];
		$phoneNumber= $_POST["phoneNumber"];
		$email= $_POST["email"];
		$password=$_POST["password"];
		$question=$_POST["question"];
		$ans=$_POST["answer"];
		
		$sql = "INSERT INTO users (firstName, lastName, gender, age, weight, height, dietType, phoneNumber, email, password,question,answer)
		VALUES ('$firstName', '$lastName', '$gender', '$age', '$weight', '$height', '$dietType', '$phoneNumber', '$email',
		'$password','$question','$ans')";
		$result=$dbConnectLink->query($sql);
		if ($result=== TRUE) {
			echo "New record created successfully";
		} else {
			echo "Error: " . $sql . "<br>" . $dbConnectLink->error;
		}
		$dbConnectLink->close();
		?>
	