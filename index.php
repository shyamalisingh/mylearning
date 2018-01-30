<?php
include "navigation.php";
?>
<br>
<div class ="container">
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <label class="midhead">Order delicious food online!</label>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <label class="midhead1">What you would like to have today.....!</label>
        </div>
    </div>
</div>
<form name="choice_form" id="choice_form" action="menu.php" method="POST">
    <div class="container">
        <div class="row">
            <div class="dropdown">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <select name="foodType" placeholder="food type"class="index1">
                        <option value="northIndian">North Indian</option>
                        <option value="panjabi">Panjabi</option>
                        <option value="southIndian">South Indian</option>
                        <option value="chienes">Chienes</option>
                        <option value="jain">Jainism</option>
                    </select>
                </div>
            </div>
            <div class="dropdown">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <select name="menuType"class="index1">
                        <option value="snackes">Snacks</option>
                        <option value="lunch">Lunch</option>
                        <option value="teaTime">Tea Time</option>
                        <option value="coffee">Cafe coffee day</option>
                        <option value="dinner">Dinner</option>
                    </select>
                </div>
            </div>
            <div class="dropdown">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <input type="submit" value="submit" class="btn-primary index2"/>
                </div>
            </div>
        </div>
    </div>
</form>
