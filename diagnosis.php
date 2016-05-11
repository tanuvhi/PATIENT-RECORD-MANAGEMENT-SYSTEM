

<?php
session_start();

if(!isset($_SESSION["username"]))
{
	header("location:index.php");
}
else
{
	echo "welcome ".$_SESSION['fname']."<br>";
	echo " <a href='logout.php'> LogOut </a> ";
	echo" <br><br>";
	
	
}

if(isset($_POST["logout"]))
{
	header("location:logout.php");
}
$_POST['name']="fd";



//including the database connection file
include_once("config.php");
if(isset($_POST['Submit'])) 
{
	
	$d_name= $_POST['d_name'];
	
	$result= mysql_query("INSERT INTO diagnosis( d_name) VALUES('$d_name')");
		echo "Congratulations ".$_SESSION['fname']." !! <br><br>";
		echo "<font color='green'>New Diagnosis has been added successfully.<br><br>";
		echo "<br/><a href='show.php'>Go to Homepage</a>";
		
}
?>
