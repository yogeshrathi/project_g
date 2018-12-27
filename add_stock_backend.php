<?php

require_once 'conn.php';
$name=$_POST['name'];
$item=$_POST['item'];
$quantity=$_POST['quantity'];
$date=$_POST['date'];
$bardan=$_POST['bardan'];
$bags=$_POST['bags'];
$total=$_POST['total'];
$commission=$_POST['commission'];
$GE=$_POST['GE'];
$L1=$_POST['L1'];
$L2=$_POST['L2'];
$TH=$_POST['TH'];
$UT=$_POST['UT'];
$VT=$_POST['VT'];

$sql="INSERT INTO $name(`DATE`,`ITEM_TYPE`,`QUANTITY`,`NO_OF_BARDANS`,`NO_OF_BAGS`) VALUES ('$date','$item','$quantity','$bardan','$bags')";


if ($conn->query($sql) === TRUE) 
	{
		$sql1="INSERT INTO $item( `NAME`, `DATE`, `NO_OF_BAGS`, `NO_OF_BARDANS`, `SOLD_FLAG`, `GOWDOWN_EXP_FLAG`, `LARI_F1`, `LARI_F2`, `THADI_FLAG`, `COMISSION`, `VATAV`, `UTARAI_FLAG`, `QUANTITY`, `TOTAL`, `WASTE`) VALUES ('$name','$date','$bags','$bardan',0,'$GE','$L1','$L2','$TH','$commission','$VT','$UT','$quantity','$total',0)";

		if ($conn->query($sql1) === TRUE) 
		{
			$sql2="INSERT INTO total_quantity( `NAME`,`TYPE`, `DATE`, `NO_OF_BAGS`, `NO_OF_BARDANS`, `SOLD_FLAG`,`QUANTITY`, `TOTAL`) VALUES ('$name','$item','$date','$bags','$bardan',0,'$quantity','$total')";

		  if ($conn->query($sql2) === TRUE) 
		{	
	    echo "New record created successfully";
	header("refresh:00;url=add_stock.php");

		}}}
		
	else 
	{
    echo "Error: " . $sql . "<br>" . $conn->error;
	}



?>