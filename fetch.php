<?php
include("config.php");
$output='';



$query=mysql_query("select * from patient where name LIKE'%".$_POST["search"]."%'");

if(empty($_POST["search"]))
{
		echo "<br/><br/>patient NOT FOUND";
}

	else if (mysql_num_rows($query)>0)
		  
	{

		 $output.= '<h4>SEARCH RESULTS</h4>';
		 $output= '<div class="table-responsive">
		      <table border = "1">
			    <tr>
				  <th>Patient Name</th>
				  <th>Registration Number</th>
				   <th>Age</th>
				   <th>DETAILS</th>
				     
					
					 




				</tr>';

				while($row=mysql_fetch_object($query))
				{
					$output .= '
					
					<tr>
						<td>'.$row->name.'</td>
						<td>'.$row->reg_no.'</td>
						<td>'.$row->age.'</td>
						<td><a href="details.php? id=' .$row->patient_id .'">DETAILS</a> </td>
					</tr>
					
					
					';





				}

				echo $output;
				
}





?>
