<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <?php
    include "navigation.php";
    ?>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Pure Veg Rasoi</title>
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
      <label class="midhead3">CUSTOMER REGISTARTION</label>
  </div>
 
    
	<form id="registerForm" name="form1" method="post" action="registration_submit.php" class="form-group" data-parsley-validate="">
      <div class="row">
	  	 <div class="col-md-3 col-sm-6 col-xs-12">
                     <label class="lab1">First Name
				<input type="text" name="firstName" class="form-control" required=""/>
			</label>
		 </div>	
		 <div class="col-md-3 col-sm-6 col-xs-12">
			 <label class="lab1" > Last Name
			<input type="text" name="lastName" class="form-control" required=""/>
			</label>
		 </div>
      </div>
	  <div class="row">
	  		<div class="col-md-6 col-sm-6 col-xs-12">
				<label class="lab3">Male 
      			<input type="radio" name="gender" class="radio-inline" value="male" required=""/>
				</label>
				<label class="lab3">Female 
      			<input type="radio" name="gender" class="radio-inline" value="female" required=""/>
				</label>
			</div>
				
	  </div>
	  <div class="row">
	  <div class="col-md-3 col-sm-6 col-xs-12">
				  <label class="lab3">Age
				  <input type="text" name="age" class="form-control" required=""/>
				  </label>
			</div>
	   
	  		<div class="col-md-3 col-sm-6 col-xs-12">
				<label class="lab3"> Weight
      			<input type="text" name="weight" class="form-control" required=""/>
				</label>
			</div>
		</div>
		<div class="row">
			
			<div class="col-md-3 col-sm-6 col-xs-12">
				 <label class="lab3">Height
      			<input type="text" name="height" class="form-control" required=""/>
				</label>
			</div>
			
	  	
                            <div class="col-md-3 col-sm-6 col-xs-12">
				  <label class="lab3">Phone Number
				  <input type="text" name="phoneNumber" class="form-control" required=""/>
				  </label>
			</div>
	  		
			
	  </div>
	  <div class="row">
	  		
			<div class="col-md-3 col-sm-6 col-xs-12">
				<label class="lab3">
				Email<input type="text" name="email" class="form-control" required=""/>
				</label>
			</div>
	  
	   
	   		<div class="col-md-3 col-sm-6 col-xs-12">
				<label class="lab3">
				Password<input type="text" name="password" class="form-control" required=""/>
				</label>
			</div>
	  	</div>	
		<div class="row">
		 <div class="col-md-6 col-sm-6 col-xs-12" >
				<label class="lab3">
				 <input name="dietType" type="radio" value="veg" class="radio-inline" required=""/>Veg
				 </label>
				 <label class="lab3">
				<input name="dietType" type="radio" value="nonVeg" class="radio-inline" required=""/>Non-veg
				</label>  
			</div>
		</div>
	
		<div class="row">
			<div class="col-md-3 col-sm-6 col-xs-12">
				  <label class="lab3">Sequrity Question
				  <input type="text" name="question" class="form-control" required="" />
				  </label>
			</div>
			<div class="col-md-3 col-sm-6 col-xs-12">
				  <label class="lab3">Answer
				  <input type="text" name="answer" class="form-control" required="" />
				  </label>
			</div>
		</div>
	   <div class="row">
	  	<div class="col-md-6 col-sm-6 col-xs-12">
			<input type="submit" name="Submit" value="Submit" align="middle" class="btn-primary index06"/>
		</div>
	  </div>
     </form>    
</div>
    <script type="text/javascript">
$(function () {
  $('#registerForm').parsley().on('field:validated', function() {
    var ok = $('.parsley-error').length === 0;
    $('.bs-callout-info').toggleClass('hidden', !ok);
    $('.bs-callout-warning').toggleClass('hidden', ok);
  })
  .on('form:submit', function() {
    return false; // Don't submit form for this demo
  });
});
</script>
</body>
</html>

