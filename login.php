       <?php
        include "navigation.php";
        ?>


        <div class="container">
            <div class="row">

                <form id="form1" name="loginForm" action="login_submit.php" method="POST" class="col-md-4">
                    <div class="input-append">
                        <label for="Username" class="control-label">Username</label>
                        <span><input type="text"  name="Username" placeholder="Enter Name" id="Username" class="form-control"/>
                            <i class="glyphicon glyphicon-user"></i>
                    </div>

                    <br><br>
                    <div>
                        <label for="Password"><b>Password</b> </label>
                        <input type="text" name="password" placeholder="Enter Password" id="Password" class="form-control">

                    </div>
                    <br><br>
                    <div class="row">
                        <input type="submit" value="Login" class="btn black-btn col-md-4"/>

                        <a href="registration.php" class="btn">SignUp</a>
                        <a href='answer.php'>forget password</a>
                        <br>
                    </div>
            </div>
        </div>
    </body>
</html>


