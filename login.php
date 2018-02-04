<?php
include "navigation.php";
?>


<div class="container">
    <div class="row">

        <form id="form1" name="loginForm"  id="loginForm" action="login_submit.php" method="POST" class="col-md-4 login-form" data-parsley-validate="">
            <div class="form-group">
                <label for="Username" class="control-label lab1">Username</label>
                <span><input type="text"  name="Username" placeholder="Enter Name" id="Username" class="form-control" required=""/>
                </span>   
            </div>


            <div class="form-group">
                <label for="Password" class="control-label lab2"><b>Password</b> </label>
                <input type="password" name="password" placeholder="Enter Password" id="Password" class="form-control" required="">
                
            </div>

            <div class="row">
                <input type="submit" value="Login" class="btn black-btn col-md-2 index04"/>
                <input type="button" class="btn nam1 index04 col-md-3" onclick="document.location='registration.php'"  value="SignUp"/>
                <input type="button" class="btn nam1 index04 col-md-5" onclick="document.location='answer.php'" value="Forget Password"/>
                            </div>
    </div>
</div>
<script type="text/javascript">
$(function () {
  $('#loginForm').parsley().on('field:validated', function() {
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


