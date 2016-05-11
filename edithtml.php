
<html>
<head>	
	<title>Edit Data</title>
	<link rel="stylesheet" href="post.css">
	
	<script type="text/javascript" src="http://services.iperfect.net/js/IP_generalLib.js"></script>
	
</head>

<body>
<div class ="a">
	<a href="show.php">Home</a>
	<br/><br/>
	
	<form name="form1" method="post" enctype="multipart/form-data" action="edit.php">
		<table border="1">
	   
	   <tbody>
	      <?php  
		   include("config.php");
		   $patient_id=$_GET['id'];
		   
		   $query=mysql_query("SELECT * FROM patient WHERE patient_id='$patient_id'");
		   
		   $male_status = 'unchecked';
		   $female_status = 'unchecked';
		   $true_re_vsd='unchecked';
		   $false_re_vsd='unchecked';
		   $true_pop_renal='unchecked';
		   $false_pop_renal='unchecked';
		   $true_pre_dia='unchecked';
		   $false_pre_dia='unchecked';
		   $true_powi='unchecked';
		   $false_powi='unchecked';
		   $true_re_explo='unchecked';
		   $false_re_explo='unchecked';
		   $true_re_op='unchecked';
		   $false_re_op='unchecked';
		   $true_use_tca='unchecked';
		   $false_use_tca='unchecked';
		   $true_use_actegrade='unchecked';
		   $false_use_actegrade='unchecked';
		   $true_dsc='unchecked';
		   $false_dsc='unchecked';
		   $true_rlnp='unchecked';
		   $false_rlnp='unchecked';
		   $true_pnp='unchecked';
		   $false_pnp='unchecked';
		   $true_stroke='unchecked';
		   $false_stroke='unchecked';
		   $true_paraplegia='unchecked';
		   $false_paraplegia='unchecked';
		   $true_mort='unchecked';
		   $false_mort='unchecked';
		   
		   
		  while($row=mysql_fetch_object($query))
		  {   //gender
			  if ($row->gender_id == 1) 
			  {
				$male_status = 'checked';

			  }
			  else if ($row->gender_id == 2) 
				{
					$female_status = 'checked';
	
				}
				//re_vsd
				if($row->re_vsd == 1)
					{
						$true_re_vsd = 'checked';
					}
				else if($row->re_vsd == 0)
					{
						$false_re_vsd = 'checked';
					}
				//pop_renal
				if($row->pop_renal == 1)
					{
						$true_pop_renal = 'checked';
					}
				else if($row->pop_renal == 0)
					{
						$false_pop_renal = 'checked';
					}
				//predia_pop
				if($row->predia_pop == 1)
					{
						$true_pre_dia = 'checked';
					}
				else if($row->predia_pop == 0)
					{
						$false_pre_dia = 'checked';
					}
				//powi
				if($row->powi == 1)
					{
						$true_powi = 'checked';
					}
				else if($row->powi == 0)
					{
						$false_powi = 'checked';
					}
				//re_explo
				if($row->re_explo == 1)
					{
						$true_re_explo = 'checked';
					}
				else if($row->re_explo == 0)
					{
						$false_re_explo = 'checked';
					}
					//re_op
				if($row->re_op == 1)
					{
						$true_re_op = 'checked';
					}
				else if($row->re_op == 0)
					{
						$false_re_op = 'checked';
					}
				//use_tca
				if($row->use_tca == 1)
					{
						$true_use_tca = 'checked';
					}
				else if($row->use_tca == 0)
					{
						$false_use_tca = 'checked';
					}
				//use_actegrade
				if($row->use_actegrade == 1)
					{
						$true_use_actegrade = 'checked';
					}
				else if($row->use_actegrade == 0)
					{
						$false_use_actegrade = 'checked';
					}
				//dsc
				if($row->dsc == 1)
					{
						$true_dsc = 'checked';
					}
				else if($row->dsc == 0)
					{
						$false_dsc = 'checked';
					}
				//rlnp
				if($row->rlnp == 1)
					{
						$true_rlnp = 'checked';
					}
				else if($row->rlnp == 0)
					{
						$false_rlnp = 'checked';
					}
				//pnp
				if($row->pnp == 1)
					{
						$true_pnp = 'checked';
					}
				else if($row->pnp == 0)
					{
						$false_pnp = 'checked';
					}
				//strokes
				if($row->stroke == 1)
					{
						$true_stroke = 'checked';
					}
				else if($row->stroke == 0)
					{
						$false_stroke = 'checked';
					}
				//paraplegia
				if($row->paraplegia == 1)
					{
						$true_paraplegia = 'checked';
					}
				else if($row->paraplegia == 0)
					{
						$false_paraplegia = 'checked';
					}
					
				
				//mort
				if($row->mort == 1)
					{
						$true_mort = 'checked';
					}
				else if($row->mort == 0)
					{
						$false_mort = 'checked';
					}
			 
			
			  ?>
			    <tr>
				  <td>Name : </td> 
				  <td colspan="2" ><input type="text" name="pname" value=<?php echo $row->name?>></td>
				</tr>
				<tr>
				  <td>Registration no : </td> 
				  <td colspan="2"><input type="text" name="reg_no" value=<?php echo $row->reg_no?>></td>
				</tr>
				<tr>
				  <td >Age : </td> 
				  <td colspan="2" ><input type="text" name="age" value=<?php echo $row->age?>></td>
				</tr>
				<tr>
				  <td>Gender : </td> 
				  <td colspan="2" ><input type="radio" name="gender" value="1" <?PHP print $male_status; ?>> Male<br>
					  <input type="radio" name="gender" value="2" <?PHP print $female_status; ?>> FeMale<br>
				  </td>
				</tr>
				<tr>
				  <td>Address : </td> 
				  <td colspan="2" ><input type="text" name="address" value=<?php echo $row->address?>></td>
				</tr>
				<tr>
				  <td>Date of Admission: </td> 
				  <td colspan="2" ><input type="text" name="d_add" id="date1" alt="date" class="IP_calendar" title="Y-m-d" value=<?php echo $row->d_add?>></td>
				</tr>
				<tr>
				  <td>Date of Operation: </td> 
				  <td colspan="2" ><input type="text" name="d_add" id="date1" alt="date" class="IP_calendar" title="Y-m-d" value=<?php echo $row->d_op?>></td>
				</tr>
				<tr>
				  <td>Date of Discharge: </td> 
				  <td colspan="2" ><input type="text" name="d_add" id="date1" alt="date" class="IP_calendar" title="Y-m-d" value=<?php echo $row->d_dis?>></td>
				</tr>
				<tr>
				  <td>Blood Group: </td> 
				   <td colspan="2" >
				 <select name="Blood">
					<option value="1">A+</option>
					<option value="2">A-</option>
					<option value="3">B+</option>
					<option value="4">B-</option>
					<option value="5">AB+</option>
					<option value="6">AB-</option>
					<option value="7">O+</option>
					<option value="8">O-</option>
				</select> </td>
				</tr>
				<tr>
				  <td>Echocardiogram</td> 
				  <td><textarea name="echo" rows="10" cols="30" ><?php echo $row->echo?></textarea> </td>
					<td>
						<table>
							<tr>
								<td>
									<img  style="width:300px ;height:300px;" src="<?php echo 'echo/'.$row->echoimage ?>">
								</td>
								<td>
									<input type="file" name="echoimage">
								</td>
							</tr>
						</table>
					</td>
				</tr>
				<tr>
				  <td>CXR</td> 
				  <td><textarea name="cxr" rows="10" cols="30"  ><?php echo $row->cxr?> </textarea> </td>
				  <td>
						<table>
							<tr>
								<td>
									<img  style="width:300px ;height:300px;" src="<?php echo 'cxr/'.$row->cxrimage ?>">
								</td>
								<td>
									<input type="file" name="cxrimage">
								</td>
							</tr>
						</table>
					</td>
				</tr>
				<tr>
				  <td>CT scan</td> 
				  <td><textarea name="ctscan" rows="10" cols="30"  ><?php echo $row->ctscan?> </textarea> </td>
					<td>
						<table>
							<tr>
								<td>
									<img  style="width:300px ;height:300px;" src="<?php echo 'ctscan/'.$row->ctscanimage ?>">
								</td>
								<td>
									<input type="file" name="ctscanimage">
								</td>
							</tr>
						</table>
					</td>
				</tr>
				<tr>
				  <td>Operative findings</td> 
				  <td colspan="2" ><textarea name="op_findings" rows="10" cols="30"  ><?php echo $row->op_findings?> </textarea> </td>
				</tr>
				<tr>
				  <td>BSA</td> 
				  <td colspan="2" ><input type="text" name="bsa" value=<?php echo $row->bsa?>></td>
				</tr>
				<tr>
				  <td>Height : </td> 
				  <td colspan="2" ><input type="text" name="height" value=<?php echo $row->height?>></td>
				</tr>
				<tr>
				  <td>Weight : </td> 
				  <td colspan="2" ><input type="text" name="weight" value=<?php echo $row->weight?>></td>
				</tr>
				<tr>
				  <td>LVEF: </td> 
				  <td colspan="2" ><input type="text" name="lvef" value=<?php echo $row->lvef?>></td>
				</tr>
				<tr>
				  <td>Residual VSD : </td> 
				  <td colspan="2" >
					<input type="radio" name="re_vsd" value="1" <?PHP print $true_re_vsd; ?>> Yes
					<input type="radio" name="re_vsd" value="0" <?PHP print $false_re_vsd; ?>> No<br>
				  </td>
				</tr>
				<tr>
				  <td>Post op Renal impairment : </td> 
				  <td colspan="2" >
					<input type="radio" name="pop_renal" value="1" <?PHP print $true_pop_renal; ?>> Yes
					<input type="radio" name="pop_renal" value="0" <?PHP print $false_pop_renal; ?>> No<br>
				  </td>
				</tr>
				<tr>
				  <td>Peritoneal Dialysis in post op period : </td> 
				  <td colspan="2" >
					<input type="radio" name="predia_pop" value="1" <?PHP print $true_pre_dia; ?>> Yes
					<input type="radio" name="predia_pop" value="0" <?PHP print $false_pre_dia; ?>> No<br>
				  </td>
				</tr>
				<tr>
				  <td>Post operative wound infection : </td> 
				  <td colspan="2" >
					<input type="radio" name="powi" value="1" <?PHP print $true_powi; ?>> Yes
					<input type="radio" name="powi" value="0" <?PHP print $false_powi; ?>> No<br>
				  </td>
				</tr>
				<tr>
				  <td>Duration of surgery : </td> 
				  <td colspan="2" ><input type="text" name="duration_o_s" value=<?php echo $row->duration_o_s?>></td>
				</tr>
				<tr>
				  <td>Stay in post operative ward : </td> 
				  <td colspan="2" ><input type="text" name="st_in_pop" value=<?php echo $row->st_in_pop?>></td>
				</tr>
				<tr>
				  <td>Stay in ICU : </td> 
				  <td colspan="2" ><input type="text" name="st_in_icu" value=<?php echo $row->st_in_icu?>></td>
				</tr>
				<tr>
				  <td>Re-Exploration : </td> 
				  <td colspan="2" >
					<input type="radio" name="re_explo" value="1" <?PHP print $true_re_explo; ?>> Yes
					<input type="radio" name="re_explo" value="0" <?PHP print $false_re_explo; ?>> No<br>
				  </td>
				</tr>
				<tr>
				  <td>Re Operation : </td> 
				  <td colspan="2" >
					<input type="radio" name="re_op" value="1" <?PHP print $true_re_op; ?>> Yes
					<input type="radio" name="re_op" value="0" <?PHP print $false_re_op; ?>> No<br>
				  </td>
				</tr>
				<tr>
				  <td>Use of TCA : </td> 
				  <td colspan="2" >
					<input type="radio" name="use_tca" value="1" <?PHP print $true_use_tca; ?>> Yes
					<input type="radio" name="use_tca" value="0" <?PHP print $false_use_tca; ?>> No<br>
				  </td>
				</tr>
				<tr>
				  <td>Use of antegrade Cerebral Circulation : </td> 
				  <td colspan="2" >
					<input type="radio" name="use_actegrade" value="1" <?PHP print $true_use_actegrade; ?>> Yes
					<input type="radio" name="use_actegrade" value="0" <?PHP print $false_use_actegrade; ?>> No<br>
				  </td>
				</tr>
				<tr>
				  <td>Duration of ventilation : </td> 
				  <td colspan="2" ><input type="text" name="duration_o_ven" value=<?php echo $row->duration_o_ven?>></td>
				</tr>
				<tr>
				  <td>Delayed sternal closure : </td> 
				  <td colspan="2" >
					<input type="radio" name="dsc" value="1" <?PHP print $true_dsc; ?>> Yes
					<input type="radio" name="dsc" value="0" <?PHP print $false_dsc; ?>> No<br>
				  </td>
				</tr>
				<tr>
				  <td>Rec Laryngeal Nerve palsy : </td> 
				  <td colspan="2" >
					<input type="radio" name="rlnp" value="1" <?PHP print $true_rlnp; ?>> Yes
					<input type="radio" name="rlnp" value="0" <?PHP print $false_rlnp; ?>> No<br>
				  </td>
				</tr>
				<tr>
				  <td>Phrenic nerve palsy </td> 
				  <td colspan="2" >
					<input type="radio" name="pnp" value="1" <?PHP print $true_pnp; ?>> Yes
					<input type="radio" name="pnp" value="0" <?PHP print $false_pnp; ?>> No<br>
				  </td>
				</tr>
				<tr>
				  <td>Stroke </td> 
				  <td colspan="2" >
					<input type="radio" name="stroke" value="1" <?PHP print $true_stroke; ?>> Yes
					<input type="radio" name="stroke" value="0" <?PHP print $false_stroke; ?>> No<br>
				  </td>
				</tr>
				<tr>
				  <td>Paraplegia </td> 
				  <td colspan="2" >
					<input type="radio" name="paraplegia" value="1" <?PHP print $true_paraplegia; ?>> Yes
					<input type="radio" name="paraplegia" value="0" <?PHP print $false_paraplegia; ?>> No<br>
				  </td>
				</tr>
				<tr>
				  <td>Hemorrhage : </td> 
				  <td colspan="2" ><input type="text" name="hemo" value=<?php echo $row->hemo?>></td>
				</tr>
				<tr>
				  <td>Stay in hospital : </td> 
				  <td colspan="2" ><input type="text" name="st_i_hos" value=<?php echo $row->st_i_hos?>></td>
				</tr>
				<tr>
				  <td>Mortality:  </td> 
				  <td colspan="2" >
					<input type="radio" name="mort" value="1" <?PHP print $true_mort; ?>> Yes
					<input type="radio" name="mort" value="0" <?PHP print $false_mort; ?>> No<br>
				  </td>
				</tr>
				<tr>
				  <td>ECCT </td> 
				  <td colspan="2" ><input type="text" name="ecct" value=<?php echo $row->ecct?>></td>
				</tr>
				<tr>
				  <td>XCT </td> 
				  <td colspan="2" ><input type="text" name="xct" value=<?php echo $row->xct?>></td>
				</tr>
				
				<tr>
					<td><input type="hidden" name="patient_id" value=<?php echo $_GET['id'];?>></td>
					<td><input type="submit" name="Submit" value="Add"  onClick="return confirm('Are you sure you want to Edit?')"></td>
				</tr>
			  
			  <?php
			  
		  }
		  
		  
		  
		  
		  
		  ?>
	   
	   
	   
	   </tbody>
	</table>
			
	
	</form>
</body>
</html>

