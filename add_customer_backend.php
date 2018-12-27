<?php

require_once 'conn.php';
$name=$_POST['name'];
$mob=$_POST['mob_no'];
$vill=$_POST['village'];
$sql="INSERT INTO customers(`NAME`,`MOB_NO`,`VILLAGE`) VALUES ('$name','$mob','$vill')";


if ($conn->query($sql) === TRUE) 
	{
		$sql1="CREATE TABLE `project_g`.`$name` ( `SR_NO` INT(100) NOT NULL AUTO_INCREMENT , `DATE` DATE NOT NULL , `ITEM_TYPE` VARCHAR(100) NOT NULL , `QUANTITY` INT(100) NOT NULL , `NO_OF_BARDANS` INT(100) NOT NULL , `NO_OF_BAGS` INT(100) NOT NULL , PRIMARY KEY (`SR_NO`)) ENGINE = MyISAM"; 

		if ($conn->query($sql1) === TRUE) 
		{
	    echo "New record created successfully";
	header("refresh:00;url=view_customer.php");

		}}	 
		
	else 
	{
    echo "Error: " . $sql . "<br>" . $conn->error;
	}



?>