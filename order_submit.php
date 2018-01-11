
<?php
include "db_connect.php";
//$orders=$_POST["menuitem"];
$prices=$_POST["price"];
$orders = $_POST["order"];
/*foreach ($orders as $checkbox) {
    echo  $checkbox;
    echo "<br/>";
}*/
$items = implode(',', $orders);
$priceSql = "select sum(price) from menu_items where items in ($items)";
//echo $priceSql;
$resultPrice = mysqli_query($dbConnectLink, $priceSql);
$rowPrice = mysqli_fetch_row($resultPrice);
//echo $items;
$total=0;
foreach ($prices as $price) {
  $total+= $price; 
}
//echo "Total price $total";
$sql="insert into placed_order (ord_item,bill) values ('$items','$rowPrice[0]')";
//echo "$sql";
$result= mysqli_query($dbConnectLink, $sql);
if($result==TRUE){
			echo "order placed successfully!";
		}
		else{
			echo "error" . $result . "<br>" . $dbConnectLink->error;
		}
$dbConnectLink->close();
//echo "your final order is=$items <br> and your total bill is=$total";

?>

