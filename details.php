<!DOCTYPE html>
<html>
 
		   
  <head>
  
  
    <title>LIBRARY MANAGEMENT</title>
	
	  <link rel="stylesheet" href="details.css">
</head>
  <body>
  
    <div id="nav_wrapper"><br>
<ul>
<li><a href="show.php"> Go back </a></li>
<li><a href="logout.php">Logout</a></li>


</ul>
</div>
  
  <a href="show.php"> Go back </a> 
     
		  <h1 align="center">patient details </h1>
		 
	 
	    <br/>
	
	 
	 		 
		<br/><br/>
		
	    <table border="1">
	   
	   <tbody>
	      <?php  
		   include("config.php");
		   $patient_id=$_GET['id'];
		   $query=mysql_query("SELECT * FROM patient WHERE patient_id='$patient_id'");
		  while($row=mysql_fetch_object($query))
		  {
			  ?>
			    <tr>
				  <td>Name : </td> 
				  <td><?php echo $row->name?></td>
				</tr>
				<tr>
				  <td>Registration no : </td> 
				  <td><?php echo $row->reg_no?></td>
				</tr>
				<tr>
				  <td>Age : </td> 
				  <td><?php echo $row->age?></td>
				</tr>
				<tr>
				  <td>Gender : </td> 
				  <td>
				  
				  <?php


			$que=mysql_query("SELECT gender.gender_name FROM gender where gender.gender_id = $row->gender_id ");
		  while($ge=mysql_fetch_object($que))
		  {
			

		  echo $ge->gender_name ."</br>";
		  
		  }  ?>
				  
				  
				  
				  </td>
				</tr>
				<tr>
				  <td>Address : </td> 
				  <td><?php echo $row->address?></td>
				</tr>
				<tr>
				  <td>Date of Admission: </td> 
				  <td><?php echo $row->d_add?></td>
				</tr>
				<tr>
				  <td>Date of Operation: </td> 
				  <td><?php echo $row->d_op?></td>
				</tr>
				<tr>
				  <td>Date of Discharge: </td> 
				  <td><?php echo $row->d_dis?></td>
				</tr>
				<tr>
				  <td>Diagnosis: </td> 
				  <td><?php


			$qued=mysql_query("SELECT diagnosis.d_name FROM diagnosis inner join patient_diagnosis on diagnosis.d_id = patient_diagnosis.diagnosis_id where patient_diagnosis.patient_id = $row->patient_id ");
		  while($ee=mysql_fetch_object($qued))
		  {
			

		  echo $ee->d_name ."</br>";
		  
		  }  ?> </td>
				</tr>
				<tr>
				  <td>Blood Group: </td> 
				  <td><?php

				$quer=mysql_query("select * from bgroup where bgroup_id = ".$row->bgroup_id." ");
	while($ro=mysql_fetch_object($quer))
				{
				  echo $ro->bgroupname;
				  
				} ?></td>
				</tr>
				<tr>
				  <td>Echocardiogram</td> 
				  <td><?php echo $row->echo?></td>
				  <td><img  style="width:400px ;height:400px;" src="<?php echo 'echo/'.$row->echoimage ?>"> </td>
				</tr>
				<tr>
				  <td>CXR</td> 
				  <td><?php echo $row->cxr?></td>
				  <td><img  style="width:400px ;height:400px;" src="<?php echo 'cxr/'.$row->cxrimage ?>"> </td>
				</tr>
				<tr>
				  <td>CT scan</td> 
				  <td><?php echo $row->ctscan?></td>
				  <td><img  style="width:400px ;height:400px;" src="<?php echo 'ctscan/'.$row->ctscanimage ?>"> </td>
				</tr>
				<tr>
				  <td>Operative findings</td> 
				  <td><?php echo $row->op_findings?></td>
				</tr>
				<tr>
				  <td>BSA</td> 
				  <td><?php echo $row->bsa?></td>
				</tr>
				<tr>
				  <td>Height : </td> 
				  <td><?php echo $row->height?></td>
				</tr>
				<tr>
				  <td>Weight : </td> 
				  <td><?php echo $row->weight?></td>
				</tr>
				<tr>
				  <td>LVEF: </td> 
				  <td><?php echo $row->lvef?></td>
				</tr>
				<tr>
				  <td>Residual VSD : </td> 
				  <td><?php if( $row->re_vsd==0)
				  {
					  echo "No";
				  }else
				  {
					  echo "Yes";
				  }
					  
				  ?></td>
				</tr>
				<tr>
				  <td>Post op Renal impairment : </td> 
				  <td><?php if( $row->pop_renal==0)
				  {
					  echo "No";
				  }else
				  {
					  echo "Yes";
				  }
					  
				  ?></td>
				</tr>
				<tr>
				  <td>Perioneal Dialysis in post op period : </td> 
				  <td><?php if( $row->predia_pop==0)
				  {
					  echo "No";
				  }else
				  {
					  echo "Yes";
				  }
					  
				  ?></td>
				</tr>
				<tr>
				  <td>Post operative wound infection : </td> 
				  <td><?php if( $row->powi==0)
				  {
					  echo "No";
				  }else
				  {
					  echo "Yes";
				  }
					  
				  ?></td>
				</tr>
				<tr>
				  <td>Duration of surgery : </td> 
				  <td><?php echo $row->duration_o_s?></td>
				</tr>
				<tr>
				  <td>Stay in post operative ward : </td> 
				  <td><?php echo $row->st_in_pop?></td>
				</tr>
				<tr>
				  <td>Stay in ICU : </td> 
				  <td><?php echo $row->st_in_icu?></td>
				</tr>
				<tr>
				  <td>Re-Exploration : </td> 
				  <td><?php if( $row->re_explo==0)
				  {
					  echo "No";
				  }else
				  {
					  echo "Yes";
				  }
					  
				  ?></td>
				</tr>
				<tr>
				  <td>Re Operation : </td> 
				  <td><?php if( $row->re_op==0)
				  {
					  echo "No";
				  }else
				  {
					  echo "Yes";
				  }
					  
				  ?></td>
				</tr>
				<tr>
				  <td>Use of TCA : </td> 
				  <td><?php if( $row->use_tca==0)
				  {
					  echo "No";
				  }else
				  {
					  echo "Yes";
				  }
					  
				  ?></td>
				</tr>
				<tr>
				  <td>Use of antegrade Cerebral Circulation : </td> 
				  <td><?php if( $row->use_actegrade==0)
				  {
					  echo "No";
				  }else
				  {
					  echo "Yes";
				  }
					  
				  ?></td>
				</tr>
				<tr>
				  <td>Duration of ventilation : </td> 
				  <td><?php echo $row->duration_o_ven?></td>
				</tr>
				<tr>
				  <td>Delayed sternal closure : </td> 
				  <td><?php if( $row->dsc==0)
				  {
					  echo "No";
				  }else
				  {
					  echo "Yes";
				  }
					  
				  ?></td>
				</tr>
				<tr>
				  <td>Rec Laryngeal Nerve palsy : </td> 
				  <td><?php if( $row->rlnp==0)
				  {
					  echo "No";
				  }else
				  {
					  echo "Yes";
				  }
					  
				  ?></td>
				</tr>
				<tr>
				  <td>Phrenic nerve palsy </td> 
				  <td><?php if( $row->pnp==0)
				  {
					  echo "No";
				  }else
				  {
					  echo "Yes";
				  }
					  
				  ?></td>
				</tr>
				<tr>
				  <td>Stroke </td> 
				  <td><?php if( $row->stroke==0)
				  {
					  echo "No";
				  }else
				  {
					  echo "Yes";
				  }
					  
				  ?></td>
				</tr>
				<tr>
				  <td>Paraplegia </td> 
				  <td><?php if( $row->paraplegia==0)
				  {
					  echo "No";
				  }else
				  {
					  echo "Yes";
				  }
					  
				  ?></td>
				</tr>
				<tr>
				  <td>Hemorrhage : </td> 
				  <td><?php echo $row->hemo?></td>
				</tr>
				<tr>
				  <td>Stay in hospital : </td> 
				  <td><?php echo $row->st_i_hos?></td>
				</tr>
				<tr>
				  <td>Mortality:  </td> 
				  <td><?php if( $row->mort==0)
				  {
					  echo "No";
				  }else
				  {
					  echo "Yes";
				  }
					  
				  ?></td>
				</tr>
				<tr>
				  <td>ECCT </td> 
				  <td><?php echo $row->ecct?></td>
				</tr>
				<tr>
				  <td>XCT </td> 
				  <td><?php echo $row->xct?></td>
				</tr>
			  
			  <?php
			  
		  }
		  
		  
		  
		  
		  
		  ?>
	   
	   
	   
	   </tbody>
	</table>
</div>
</div>
  
  </body>

</html>