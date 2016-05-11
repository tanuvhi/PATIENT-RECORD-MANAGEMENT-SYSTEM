<?php
include("config.php");
$output='';



$query=mysql_query("select * from patient where reg_no = ".$_POST["reg"]." ");

if (mysql_num_rows($query)>0)
{
	
	echo "invalid";
	
}else{
	
	echo "valid";
}



?>