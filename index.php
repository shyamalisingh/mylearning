   <?php
      include "nevigation.php";
      ?>
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
                            <input type="hidden" name="menuitem[]" value="<?php echo $row[0]; ?>"/>
                        </li>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <li>
    <?php
    echo $row[1];
    ?>
                            <input type="hidden" name="price[]" value="<?php echo $row[1]; ?>"/>
                        </li>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <label for="chk1"></label><input type="checkbox" id="chk1"name="order[]" value='<?php echo "\"$row[0]\""; ?>'/>
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