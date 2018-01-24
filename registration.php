<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <?php
    include "nevigation.php";
    ?>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Healthy Bite</title>
</head>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="css/bootstrap.css">
<!-- Optional theme -->
<link rel="stylesheet" href="css/bootstrap-theme.css">
<!-- Latest compiled and minified JavaScript -->
<script src="js/bootstrap.js">
</script>
<script src="js/user_validation.js">
</script>
<body>
<div class="container">
  <div class="nav-tabs">
   	HEALTHY BITE REGISTARTION
  </div>
 
    
	<form id="form1" name="form1" method="post" action="registration_submit.php" class="form-group" onsubmit="return validateForm()">
      <div class="row">
	  	 <div class="col-md-3 col-sm-6 col-xs-12">
			<label>First Name
				<input type="text" name="firstName" class="form-control" />
			</label>
		 </div>	
		 <div class="col-md-3 col-sm-6 col-xs-12">
			 <label> Last Name
			<input type="text" name="lastName" class="form-control" />
			</label>
		 </div>
      </div>
	  <div class="row">
	  		<div class="col-md-6 col-sm-6 col-xs-12">
				<label>Male 
      			<input type="radio" name="gender" class="radio-inline" value="male"/>
				</label>
				<label>Female 
      			<input type="radio" name="gender" class="radio-inline" value="female"/>
				</label>
			</div>
				
	  </div>
	  <div class="row">
	  <div class="col-md-3 col-sm-6 col-xs-12">
				  <label>Age
				  <input type="text" name="age" class="form-control" />
				  </label>
			</div>
	   
	  		<div class="col-md-3 col-sm-6 col-xs-12">
				<label> Weight
      			<input type="text" name="weight" class="form-control" />
				</label>
			</div>
		</div>
		<div class="row">
			
			<div class="col-md-3 col-sm-6 col-xs-12">
				 <label>Height
      			<input type="text" name="height" class="form-control"/>
				</label>
			</div>
			
	  	
	  <div class="col-md-3 col-sm-6 col-xs-12">
				  <label>Phone Number
				  <input type="text" name="phoneNumber" class="form-control" />
				  </label>
			</div>
	  		
			
	  </div>
	  <div class="row">
	  		
			<div class="col-md-3 col-sm-6 col-xs-12">
				<label>
				Email<input type="text" name="email" class="form-control"/>
				</label>
			</div>
	  
	   
	   		<div class="col-md-3 col-sm-6 col-xs-12">
				<label>
				Password<input type="text" name="password" class="form-control"/>
				</label>
			</div>
	  	</div>	
		<div class="row">
		 <div class="col-md-6 col-sm-6 col-xs-12" >
				<label>
				 <input name="dietType" type="radio" value="veg" class="radio-inline"/>Veg
				 </label>
				 <label>
				<input name="dietType" type="radio" value="nonVeg" class="radio-inline"/>Non-veg
				</label>  
			</div>
		</div>
	
		<div class="row">
			<div class="col-md-3 col-sm-6 col-xs-12">
				  <label>Sequrity Question
				  <input type="text" name="question" class="form-control" />
				  </label>
			</div>
			<div class="col-md-3 col-sm-6 col-xs-12">
				  <label>Answer
				  <input type="text" name="answer" class="form-control" />
				  </label>
			</div>
		</div>
	   <div class="row">
	  	<div class="col-md-6 col-sm-6 col-xs-12">
			<input type="submit" name="Submit" value="Submit" align="middle" class="btn-primary"/>
		</div>
	  </div>
     </form>    
</div>
</body>
</html>

