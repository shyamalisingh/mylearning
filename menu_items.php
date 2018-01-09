<!DOCTYPE html>
<html>
    <head>
        <?php
        include="db_connect.php";
        ?>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css">
        <link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css.map">
       
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
    </ul>
    <br>
    
    
    <label>New South Indian & Chinese Foods Menu</label>
    <br>
    <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
            <h2>Chinese Food</h2>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12">
            <h2>Price</h2>

        </div>
        <div class="col-md-3 col-sm-6 col-xs-12">
            <h2>select Item</h2>

        </div>
    </div>
    <ul>
        <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-12">
                <li>crispy noodles</li>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <li>50/-</li>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <label for="chk1"></label><input type="checkbox" id="chk1"/>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 col-sm-6 col- xs-12">
                <li>Chowmein
            </div>
        </div>
        
        
        <div class="row">
            <div class="col-md-3 col-sm-6 col- xs-12">
                <ul>
                <li>Veg-Chowmein</li>
                </ul>
            </div>
            <div class="col-md-3 col-sm-6 col- xs-12">
                <li>70/-</li>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 col-sm-6 col- xs-12">
                <ul>
                <li>Non-veg Chowmein</li>
                </ul>
            </div>
            <div class="col-md-3 col-sm-6 col- xs-12">
                <li>80/-</li>
            </div>
        </div>
                
                
            
        </li>
        <li>Haka Saka Chowmein</li>
    </ul>



</body>
</html> 