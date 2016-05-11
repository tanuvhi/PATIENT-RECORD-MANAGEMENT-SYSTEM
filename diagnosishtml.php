<html>
<head>

 <link rel="stylesheet" href="diagnosis.css">
<script type="text/javascript" src="http://services.iperfect.net/js/IP_generalLib.js"></script>


</head>

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

<body>

 <div id="nav_wrapper"><br>
   <ul>
  <li><a href='show.php'> Go to Homepage </a></li>
  <li><a href ="logout.php">Logout</a></li>
  </ul></div>
  <div class ="a">
  </div>
		<td></td>
				
		
	<form  action="diagnosis.php" method="post" enctype="multipart/form-data" name="form1">
		<table width="25%" border="0">
			<t> <br><br>
				<td> Diagnosis Name</td>
				<td><input type="text" name="d_name" required></td>
			</tr>
			
			<tr> 
				<td>
				<input type="submit" name="Submit" value="Add">
				
				
				</td>
			</tr>
		</table>
	</form>
</body>
</html> 