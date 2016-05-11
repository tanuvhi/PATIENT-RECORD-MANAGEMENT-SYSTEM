<html>
<head>

<link rel="stylesheet" href="post.css">
<link rel="stylesheet" href="index.css">
<script type="text/javascript" src="http://services.iperfect.net/js/IP_generalLib.js"></script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	 
	<title>Add Patient</title>
   <link rel="stylesheet" href="post_insert.css">
</head>

<body>

<div id="nav_wrapper"><br>
   <ul>
  <li><a href='show.php'> Go to Homepage </a></li>
  <li><a href ="logout.php">Logout</a></li>
  </ul>
  </div>
<div class="a">

<?php
session_start();

if(!isset($_SESSION["username"]))
{
	header("location:index.php");
}
else
{
	echo "welcome ".$_SESSION['fname']."<br>";
	//echo " <a href='logout.php'> LogOut </a> ";
	echo" <br><br>";
	
	
}

if(isset($_POST["logout"]))
{
	header("location:logout.php");
}
$_POST['name']="fd";
?>



	<form  action="post.php" method="post" enctype="multipart/form-data" name="form1">
		<table width="25%" border="0">
			<tr> 
				<td>Name</td>
				<td><input type="text" name="pname" required></td>
			</tr>
			<tr> 
				<td>Registration no: </td>
				<td><input type="text" name="reg_no" id="reg"  ></td>
				<td> <span id = "reg_status"> </span></td>
			</tr>
			<tr> 
				<td>Age</td>
				<td><input type="text" name="age"></td>
			</tr>
			<tr> 
				<td>Gender</td>
				<td><input type="radio" name="gender" value="1"> Male<br>
					<input type="radio" name="gender" value="2"> Female<br>
				</td>
			</tr>
			<tr> 
				<td>Address</td>
				<td> <textarea name="address" rows="5" cols="30"> </textarea></td>
			</tr>
			
			<tr>
				<td> Date of admission: </td>
				<td> <input type="text" name="d_add" id="date1" alt="date" class="IP_calendar" title="Y-m-d"> </td>
			</tr>
		
			<tr>
				<td> Date of operation: </td>
				<td> <input type="text" name="d_op" id="date1" alt="date" class="IP_calendar" title="Y-m-d"> </td>
			</tr>
			<tr>
				<td> Date of discharge: </td>
				<td> <input type="text" name="d_dis" id="date1" alt="date" class="IP_calendar" title="Y-m-d"> </td>
			</tr>
			
			<tr>
				<td> Diagnosis: </td>
				<td>
				<select name="diagnosis[]" multiple="multiple">
				      <?php  
		   include("config.php");
		   
		   $query=mysql_query("SELECT * FROM diagnosis order by d_id desc");
		  while($row=mysql_fetch_object($query))
		  {
			  ?>
				 
				 <option value='<?php echo $row->d_id ?>'><?php echo $row->d_name?></option>
		  <?php } ?>
				</select>
				</td>
			</tr>
			
			<tr>
				<td> Blood group: </td>
				 <td>
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
				<td> <textarea name="echo" rows="10" cols="30"> </textarea></td>
				<td><input type="file" name="echoimage"></td>
			</tr>
			<tr> 
				<td>CXR</td>
				<td> <textarea name="cxr" rows="10" cols="30"> </textarea></td>
				<td><input type="file" name="cxrimage"></td>
			</tr>
			<tr> 
				<td>CT scan</td>
				<td> <textarea name="ctscan" rows="10" cols="30"> </textarea></td>
				<td><input type="file" name="ctscanimage"></td>
			</tr>
			<tr> 
				<td>Operation findings: </td>
				<td> <textarea name="op_findings" rows="10" cols="30"> </textarea></td>
			</tr>
			
			<tr> 
				<td>BSA: </td>
				<td><input type="text" name="bsa"></td>
			</tr>
			
			<tr> 
				<td>Height: </td>
				<td><input type="text" name="height"></td>
			</tr>
			<tr> 
				<td>Weight: </td>
				<td><input type="text" name="weight"></td>
			</tr>
			
			<tr> 
				<td>LVEF: </td>
				<td><input type="text" name="lvef"></td>
			</tr>
			<tr> 
				<td>Residual VSD</td>
				<td><input type="radio" name="re_vsd" value="1"> Yes
					<input type="radio" name="re_vsd" value="0"> No<br>
				</td>
			</tr>
			<tr> 
				<td>Post op Renal impairment</td>
				<td><input type="radio" name="pop_renal" value="1"> Yes
					<input type="radio" name="pop_renal" value="0"> No<br>
				</td>
			</tr>
			<tr> 
				<td>Peritoneal dialysis in post op period: </td>
				<td><input type="radio" name="predia_pop" value="1"> Yes
					<input type="radio" name="predia_pop" value="0"> No<br>
				</td>
			</tr>
			<tr> 
				<td>post operative wound infection: </td>
				<td><input type="radio" name="powi" value="1"> Yes
					<input type="radio" name="powi" value="0"> No<br>
				</td>
			</tr>
			<tr> 
				<td>Duration of surgery</td>
				<td><input type="text" name="duration_o_s"></td>
			</tr>
			
			<tr> 
				<td>Stay in post operative ward</td>
				<td><input type="text" name="st_in_pop"></td>
			</tr>
			<tr> 
				<td>Stay in ICU</td>
				<td><input type="text" name="st_in_icu"></td>
			</tr>
			<tr> 
				<td>Re exploration: </td>
				<td><input type="radio" name="re_explo" value="1"> Yes
					<input type="radio" name="re_explo" value="0"> No<br>
				</td>
			</tr>
			<tr> 
				<td>Re operation: </td>
				<td><input type="radio" name="re_op" value="1"> Yes
					<input type="radio" name="re_op" value="0"> No<br>
				</td>
			</tr>
			<tr> 
				<td>Use of TCA: </td>
				<td><input type="radio" name="use_tca" value="1"> Yes
					<input type="radio" name="use_tca" value="0"> No<br>
				</td>
			</tr>
			<tr> 
				<td>Use of Antegrade cerebral Circulation: </td>
				<td><input type="radio" name="use_actegrade" value="1"> Yes
					<input type="radio" name="use_actegrade" value="0"> No<br>
				</td>
			</tr>
			<tr> 
				<td>Duration of ventilation</td>
				<td><input type="text" name="duration_o_ven"></td>
			</tr>
			<tr> 
				<td>Delayed sternal clouser: </td>
				<td><input type="radio" name="dsc" value="1"> Yes
					<input type="radio" name="dsc" value="0"> No<br>
				</td>
			</tr>
			<tr> 
				<td>Rec laryngel Nerve palsy: </td>
				<td><input type="radio" name="rlnp" value="1"> Yes
					<input type="radio" name="rlnp" value="0"> No<br>
				</td>
			</tr>
			
			<tr> 
				<td>Phrenic nerve palsy: </td>
				<td><input type="radio" name="pnp" value="1"> Yes
					<input type="radio" name="pnp" value="0"> No<br>
				</td>
			</tr>
			<tr> 
				<td>Stroke: </td>
				<td><input type="radio" name="stroke" value="1"> Yes
					<input type="radio" name="stroke" value="0"> No<br>
				</td>
			</tr>
			<tr> 
				<td>Paraplagia: </td>
				<td><input type="radio" name="paraplegia" value="0"> Yes
					<input type="radio" name="paraplegia" value="1"> No<br>
				</td>
			</tr>
			<tr> 
				<td>Hemorrhage</td>
				<td><input type="text" name="hemo"></td>
			</tr>
			<tr> 
				<td>Stay in hospital</td>
				<td><input type="text" name="st_i_hos"></td>
			</tr>
			<tr> 
				<td>Mortality</td>
				<td><input type="radio" name="mort" value="1"> Yes
					<input type="radio" name="mort" value="0"> No<br>
				</td>
			</tr>
			<tr> 
				<td>Ecct</td>
				<td><input type="text" name="ecct"></td>
			</tr>
			<tr> 
				<td>Xct</td>
				<td><input type="text" name="xct"></td>
			</tr>
			
			
			
			
			
		
				
			<tr> 
				<td></td>
				<td>
				<input type="submit" name="Submit" value="Add" onclick="return valid()">
				<div id="result"></div>
				
				</td>
				
			</tr>
		</table>
	</form>
</body>


<?php
$_POST['name']="fd";
?>


<script type='text/javascript'>
var retVal = null; 

function ajaxCallBack(retString){
    retVal = retString;
	
}
	  function valid()
	  {

		  
		  var txt=document.getElementById( "reg" ).value;
		


	
		  if(txt != '')
		  {
			  $.ajax({
				  
				  url:"reg.php",
				  method:"post",
				  data:{reg:txt},
				  dataType:"text",
				  async: false,
				  success:function(data)
				  {
					 ajaxCallBack(data);
					  
				  }
			  });
			
			    if(retVal=="invalid")
					  {
						  alert("This Registration number is allready taken")
						  return false;
					  }
			  
		  }
		  
	  }




</script>
</html>