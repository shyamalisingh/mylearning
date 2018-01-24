<!DOCTYPE html>
<?php
// Start the session
session_start();
?>
<html>
    <head>

        <?php
        include "db_connect.php";

        $username = "guest";
        if (isset($_SESSION["name"])) {
            $username = $_SESSION["name"];
        }

        echo "<h1 class=top1><b>welcome $username</h1></b>";
        ?>

        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css">
        <link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css.map">
        <link rel="stylesheet" type="text/css"href="style/style1.css">
        <script src="js/bootstrap.js" type="javascript"></script>


    </head>
    <body>
        <h1><a href="login.php"> &nbsp;<?php
                if (!isset($username)) {
                    $username = "guest";
                }
                ?> </a></h1>

        <svg height="130" width="700">
        <defs>
        <linearGradient id="grad1" x1="10%" y1="0%" x2="100%" y2="0%">
        <stop offset="10%"
              style="stop-color:rgb(255,255,0);stop-opacity:1" />
        <stop offset="100%"
              style="stop-color:rgb(255,0,0);stop-opacity:1" />
        </linearGradient>
        </defs>
        <ellipse cx="100" cy="70" rx="100" ry="55" fill="url(#grad1)" />
        <text fill="#ffffff" font-size="25" font-family="Verdana"
              x="30" y="80">Healthy Bite</text>

        <style>
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
        </style>
        <ul class="top">
            <li class="top"><a class="top" href="#home">Overview</a></li>
            <?php
            if (isset($_SESSION["admin"])){
                
            
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
        </ul>



