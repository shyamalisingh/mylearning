<?php
include "db_connect.php";


$dbconnetlink = mysql_connect("localhost", "shammi", "shammi", "learning"); 

mysql_select_db("movedb",$dbconnetlink); 

$interestData = mysql_query("SELECT * FROM `Interests`") or die(mysql_error()); 

$interestCategories = mysql_query("SELECT * FROM `Occupational Interest Categories`") or die(mysql_error()); 

echo '<ol id="occupationalInterestsList">'; 

while($interestDataRow = mysql_fetch_array($interestData)) { 
    if($interestDataRow['O*NET-SOC Code']==$careerSOC && $interestDataRow['Scale ID']=='OI' && $interestDataRow['Data Value']>=3.5) { 
        echo '<li><h3>' . $interestDataRow['Element Name'] . '</h3></li><br />'; 
        while($interestCategoriesRow = mysql_fetch_array($interestCategories)) { 
            if($interestCategoriesRow['OI Name']==$interestDataRow['Element Name']) { 
                echo '<ul><li><p style="margin-right:75px;">' . $interestCategoriesRow['OI Description'] . '</p></li></ul>';                                        
            } 
        } 
    } 
     
} 
?>