<?php
$fn=$_POST['firstname'];
$ln=$_POST['lastname'];
$g=$_POST['gender'];
$pn=$_POST['phonenumber'];
$checkBox=$_POST['sub'];
$city=$_POST['city'];

echo "<b>welcome to my world</b> $fn $ln <br>";
echo "<b> your gender is:</b> $g <br>";
echo "<b> your phone number is:</b> $pn <br>";
echo "<br>your select subjects are:";
	foreach($checkBox as $subjects){
		echo " $subjects,";
	}
	
echo "<br>u are belong to: <b> $city</b>";
?>