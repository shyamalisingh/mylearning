        <?php
        include 'db_connect.php';
        include "nevigation.php";
        $username = $_SESSION["email"];
        $sql = "select ord_item,bill,placed_order.email from placed_order "
                . "RIGHT OUTER JOIN users on users.email=placed_order.email where placed_order.email in ('$username') ";
        $result = mysqli_query($dbConnectLink, $sql);
        ?>
        
       
        <div class="container modal-header">
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




