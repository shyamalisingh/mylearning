<?php
session_start();
?>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="style/style1.css">
        <link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css">
        <link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css.map">
        <script src="js/bootstrap.js" type="javascript"></script>
    </head>
    <body>
        <?php
        include 'db_connect.php';
        $username = $_SESSION["email"];
        $sql = "select ord_item,bill,placed_order.email from placed_order "
                . "RIGHT OUTER JOIN users on users.email=placed_order.email where placed_order.email in ('$username') ";
        $result = mysqli_query($dbConnectLink, $sql);
        ?>
        <h1 class="top1">Welcome</h1>
        <h2 class="top1">Healthy Bite</h2>
        <div class="container modal-header table-striped">
            <div class="row modal-header">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <h1 class="top1">Items Details</h1>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <h1 class="top1">Bill Details</h1>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <h1 class="top1">User Name</h1>
                </div>
            </div>
            <?php
            while ($row = mysqli_fetch_row($result)) {
                ?>
                <div class="row">
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <?php
                        echo $row[0];
                        ?>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <?php
                        echo $row[1];
                        ?>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <?php
                        echo $row[2];
                        ?>
                    </div>
                </div>
<?php
}
?>
        </div>
    </body>

</html>




