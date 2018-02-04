   <?php
      include "navigation.php";
      
      ?>
    <br>
    <form name="order_form" id="order_form" action="order_submit.php" method="POST">


<?php
$foodType=$_POST['foodType'];
$menuType=$_POST['menuType'];
$sql = "select items,price from menu_items WHERE sub_category='$foodType' AND category='$menuType'";

$result = mysqli_query($dbConnectLink, $sql);
?>
        
        <label class="head1"><?php
        echo  $_POST['foodType']." ".$_POST['menuType'];
        
        ?>
         </label>
        
        <br>
        <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-12">
                <h2 class="head01">ItemS</h2>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <h2 class="head01">PricE</h2>

            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <h2 class="head01">selecT IteM</h2>

            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <h2 class="head01">selecteD ItemS</h2>
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

                        <li class="row1">
                <?php
                echo $row[0];
                ?>
                            <input type="hidden" name="menuitem[]"  value="<?php echo $row[0]; ?>"/>
                        </li>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <li class="row2">
    <?php
    echo $row[1];
    ?>
                            <input type="hidden" name="price[]"  value="<?php echo $row[1]; ?>"/>
                        </li>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <label for="chk1"></label><input type="checkbox" id="chk1"name="order[]"class="row2" value='<?php echo "\"$row[0]\""; ?>'/>
                    </div>
                </div>
    <?php
} 
?>
            <input type="submit" value="place order" class="btn-primary index03"/>
    </form>
</ul>

</body>
</html> 