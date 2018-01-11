<!DOCTYPE html>
<html>
    <head>
        <?php
        include "db_connect.php";
        ?>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css">
        <link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css.map">
        <link rel="stylesheet" type="text/css"href="style/style1.css">
        <script src="js/bootstrap.js" type="javascript"></script>


    </head>
    <h1><a href="login.php">Welcome</a></h1>
    <svg height="130" width="700">
    <defs>
    <linearGradient id="grad1" x1="0%" y1="0%" x2="100%" y2="0%">
    <stop offset="10%"
          style="stop-color:rgb(255,255,0);stop-opacity:1" />
    <stop offset="100%"
          style="stop-color:rgb(255,0,0);stop-opacity:1" />
    </linearGradient>
    </defs>
    <ellipse cx="100" cy="70" rx="85" ry="55" fill="url(#grad1)" />
    <text fill="#ffffff" font-size="25" font-family="Verdana"
          x="30" y="80">Healthy Bite</text>

    </svg>

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
</head>
<body>
    <ul class="top">
        <li class="top"><a class="top" href="#home">Overview</a></li>
        <li class="top"><a class="top" href="#menu">Menu</a></li>
        <li class="top"><a class="top" href="#contact">Reviews</a></li>
        <li class="top"><a class="top" href="#about">Photo</a></li>
        <li class="top"><a class="top" href="#about">Login</a></li>
    </ul>
    <br>
    <form name="order_form" id="order_form" action="order_submit.php" method="POST">
       
    
    <?php
    $dbconnetlink = mysqli_connect("localhost", "shammi", "shammi", "learning");
    $sql = "select items,price from menu_items";
    $result = mysqli_query($dbconnetlink, $sql);
    ?>

    <label class="top1">New South Indian & Chinese Foods Menu</label>
    <br>
    <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
            <h2 class="top1">Chinese Food</h2>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12">
            <h2 class="top1">Price</h2>

        </div>
        <div class="col-md-3 col-sm-6 col-xs-12">
            <h2 class="top1">select Item</h2>

        </div>
        <div class="col-md-3 col-sm-6 col-xs-12">
            <h2 class="top1">selected Items</h2>
        </div>
    </div>
    <ul>

        <?php
        while ($row = mysqli_fetch_row($result)) {

            //$sqlb = "SELECT menu_items.items,child_menu.price from menu_items LEFT OUTER JOIN child_menu on child_menu.menu_items_id=menu_items.id where menu_items.items='$row[0]'";
           // $result2 = mysqli_query($dbconnetlink, $sqlb);
            //echo $sqlb;
       ?>
            <div class="row">
                    <div class="col-md-3 col-sm-6 col-xs-12">

                        <li>
                            <?php
                            echo $row[0];
                            ?>
                            <input type="hidden" name="menuitem[]" value="<?php echo $row[0];?>"/>
                        </li>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <li>
                            <?php
                            echo $row[1];
                            ?>
                            <input type="hidden" name="price[]" value="<?php echo $row[1];?>"/>
                        </li>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <label for="chk1"></label><input type="checkbox" id="chk1"name="order[]" value='<?php echo "\"$row[0]\"";?>'/>
                    </div>
                </div>
       <?php
        }
        ?>
         <input type="submit" value="place order" class="btn-primary"/>
        </form>
    </ul>
    
</body>
</html> 