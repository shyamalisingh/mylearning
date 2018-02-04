<!DOCTYPE html>
<?php
// Start the session
session_start();
?>
<html>
    <head>
        <link rel="icon" href="images/tabicon.jpg">
        <?php
        include "db_connect.php";
        ?>
        <?php
        $username = "guest";
        if (isset($_SESSION["name"])) {
            $username = $_SESSION["name"];
        }

        //echo "<h1 class=top1><b>Hi $username</h1></b>";
        ?>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

        <link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css">
        <link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css.map">
        <link rel="stylesheet" type="text/css"href="style/style1.css">
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
          <script src="js/parsley.min.js"></script>

        <style>
            body{
                background-image: url("images/back7.jpg");
                background-repeat: no-repeat;
                /*background-color: #EDF4D2;*/
                background-size: cover;
                height: 1024px;


            }
            ul.top {
                list-style-type: none;
                margin: 0;
                padding: 0;
                overflow: hidden;
                background-color: #333333;
            }

            li.top {
                float: left;
            }

            li a.top {
                display: block;
                color: white;
                text-align: center;
                padding: 16px;
                text-decoration: none;
            }

            li a.top:hover {
                background-color: #111111;
                }
                
                li a.logo {
                display: block;
                color: red;
                text-align: center;
                padding: 16px;
                text-decoration: #111111;
                font-family:sans-serif;
            }
        </style>
    </head>
    <body>

        <h1><a href="login.php"> &nbsp;<?php
                if (!isset($username)) {
                    $username = "guest";
                }
                ?> </a></h1>

       
            

      

        
            <ul class="top">
                <li class="top"><a class="logo" href="#home"><b>Pure Veg Rasoi</b></a></li>
                <li class="top"><a class="top" href="#home">Overview</a></li>
                <?php
                if (isset($_SESSION["admin"])) {
                    echo "<li class='top'><a class='top' href='#home'>Admin</a></li>";
                }
                ?>
                <li class="top"><a class="top" href="index.php">Menu</a></li>
                <?php
                if (isset($_SESSION["email"])) {
                    echo "<li class='top'><a class='top' href='order_history.php'>Order History</a></li>";
                }
                ?>

                <li class="top"><a class="top" href="#about">Photo</a></li>
                <li class="top">
                    <?php
                    if (isset($_SESSION["email"])) {
                        echo "<a class='top' href='logout.php'>logout</a>";
                    } else {
                        echo "<a class='top' href='login.php'>login</a>";
                    }
                    ?>      
                </li>
                <li class="top" style="float: right;">
                    <a class='top'><?php echo "Welcome $username"; ?></a>
                </li>
            </ul>
        




