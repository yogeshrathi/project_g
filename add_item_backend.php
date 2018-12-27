<?php
require_once 'conn.php'; 
$item=$_POST['item'];
$sql="INSERT INTO items(NAME) VALUES ('$item')";
if ($conn->query($sql) === TRUE) 
	{
	 $sql1="CREATE TABLE `project_g`.`$item` ( `SR_NO` INT(100) NOT NULL AUTO_INCREMENT , `NAME` VARCHAR(100) NOT NULL , `DATE` DATE NOT NULL , `NO_OF_BAGS` INT(100) NOT NULL , `NO_OF_BARDANS` INT(100) NOT NULL , `SOLD_FLAG` INT(100) NOT NULL , `GOWDOWN_EXP_FLAG` INT(100) NOT NULL , `LARI_F1` INT(100) NOT NULL , `LARI_F2` INT(100) NOT NULL , `THADI_FLAG` INT(100) NOT NULL , `COMISSION` INT(100) NOT NULL , `VATAV` INT(100) NOT NULL , `UTARAI_FLAG` INT(100) NOT NULL , `QUANTITY` INT(100) NOT NULL , `TOTAL` INT(100) NOT NULL , `WASTE` INT(100) NOT NULL , PRIMARY KEY (`SR_NO`)) ENGINE = MyISAM";
	 if ($conn->query($sql1) === TRUE) 
	    {echo "New record created successfully";

header("refresh:00;url=add_item.php");
}
	} 	
	else 
	{
    echo "Error: " . $sql . "<br>" . $conn->error;
	}
?>