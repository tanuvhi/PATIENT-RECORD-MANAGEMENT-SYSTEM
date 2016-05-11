<html>
<head>
	<title>Post</title>
</head>

<body>

<form>
<?php
// including the database connection file
include("config.php");
session_start();

if(isset($_POST['Submit']))
{	
    $patient_id = $_POST['patient_id'];
	$image_typeecho= $_FILES['echoimage']['type'];
	$image_nameecho= $_FILES['echoimage']['name'];
	//echo $image_nameecho;
	//echo $image_namecxr;
	//echo $image_namectscan;
	$image_typectscan= $_FILES['ctscanimage']['type'];
	$image_namectscan= $_FILES['ctscanimage']['name'];
	$image_typecxr= $_FILES['cxrimage']['type'];
	$image_namecxr= $_FILES['cxrimage']['name'];
	$pname= $_POST['pname'];
	$reg_no= $_POST['reg_no'];
	$age= $_POST['age'];
	$gender= $_POST['gender'];
	$address= $_POST['address'];
	$d_add= date("Y/m/d");
	$d_op= date("Y/m/d");
	$d_dis= date("Y/m/d");
	$diagnosis= $_POST['a'];
	$bgroup_id= $_POST['Blood'];
	$echo= $_POST['echo'];
	//$echoimage= $_POST['echoimage'];
	$cxr= $_POST['cxr'];
	//$cxrimage= $_POST['cxrimage'];
	$ctscan= $_POST['ctscan'];
	//$ctscanimage= $_POST['ctscanimage'];
	$op_findings= $_POST['op_findings'];
	$bsa= $_POST['bsa'];
	$height= $_POST['height'];
	$weight= $_POST['weight'];
	$lvef= $_POST['lvef'];
	$re_vsd= $_POST['re_vsd'];
	$pop_renal= $_POST['pop_renal'];
	$predia_pop= $_POST['predia_pop'];
	$powi= $_POST['powi'];
	$duration_o_s= $_POST['duration_o_s'];
	$st_in_pop= $_POST['st_in_pop'];
	$st_in_icu= $_POST['st_in_icu'];
	$re_explo= $_POST['re_explo'];
	$re_op= $_POST['re_op'];
	$use_tca= $_POST['use_tca'];
	$use_actegrade= $_POST['use_actegrade'];
	$duration_o_ven= $_POST['duration_o_ven'];
	$dsc= $_POST['dsc'];
	$rlnp= $_POST['rlnp'];
	$pnp= $_POST['pnp'];
	$stroke= $_POST['stroke'];
	$paraplegia= $_POST['paraplegia'];
	$hemo= $_POST['hemo'];
	$st_i_hos= $_POST['st_i_hos'];
	$ecct= $_POST['ecct'];
	$xct= $_POST['xct'];
	$mort= $_POST['mort'];
	
	
	//echo "You have selected :".$_POST['pname'];  //  Displaying Selected Value
	//echo "You have selected :".$_POST['ctscan'];
	
	  //echo" i am boss ";
	
		//updating the table
		$uploadfileecho=move_uploaded_file($_FILES['echoimage']['tmp_name'],'echo/'.$_FILES['echoimage']['name']);
		$uploadfilecxr=move_uploaded_file($_FILES['cxrimage']['tmp_name'],'cxr/'.$_FILES['cxrimage']['name']);
		$uploadfilectscan=move_uploaded_file($_FILES['ctscanimage']['tmp_name'],'ctscan/'.$_FILES['ctscanimage']['name']);
		$result = mysql_query("UPDATE patient SET name='$pname',reg_no='$reg_no',age='$age',gender_id='$gender',address='$address',d_add='$d_add',d_op='$d_op',d_dis='$d_dis',diagnosis='$diagnosis',bgroup_id='$bgroup_id',echo='$echo',echoimage='$image_nameecho',cxr='$cxr',cxrimage='$image_namecxr', ctscan='$ctscan',ctscanimage='$image_namectscan',op_findings='$op_findings',bsa='$bsa',height='$height',weight='$weight',lvef='$lvef',re_vsd='$re_vsd',pop_renal='$pop_renal',predia_pop='$predia_pop',powi='$powi',duration_o_s='$duration_o_s',st_in_pop='$st_in_pop',st_in_icu='$st_in_icu',re_explo='$re_explo',re_op='$re_op',use_tca='$use_tca',use_actegrade='$use_actegrade',duration_o_ven='$duration_o_ven',dsc='$dsc',rlnp='$rlnp',pnp='$pnp',stroke='$stroke',paraplegia='$paraplegia',hemo='$hemo',st_i_hos='$st_i_hos',ecct='$ecct',xct='$xct',mort='$mort' WHERE patient_id=$patient_id");
		//echo "You have selected :".$_POST['ctscan'];
		//echo" this is shit ";
		
		
		//redirectig to the display page. In our case, it is index.php
		header("Location: show.php");
	}

?>
</form>
</body>
</html>