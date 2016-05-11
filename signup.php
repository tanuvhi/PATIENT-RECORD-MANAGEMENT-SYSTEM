<html>
<head>
	<title>Signup</title>
</head>

<body>

<form>
<?php
//including the database connection file
include_once("config.php");

//echo "Today is " . date("Y/m/d") . "<br>";

if(isset($_POST['Submit'])) {
	$uname = $_POST['uname'];
	$pass = $_POST['pass'];
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	
//echo var_dump($_POST);		
	// checking empty fields
if(empty($uname) ||empty($pass) ||empty($fname) || empty($lname) ) 
	{
	
		if(empty($uname)) {
			echo "<font color='red'>User Name field is empty.</font><br/>";
		}
		if(empty($pass)) {
			echo "<font color='red'>Password field is empty.</font><br/>";
		}		
		if(empty($fname)) {
			echo "<font color='red'> First Name field is empty.</font><br/>";
		}
		
		if(empty($lname)) {
			echo "<font color='red'>Last name field is empty.</font><br/>";
		}
		
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} 
	else 
	
		{ 
		//echo "<font color='green'>Data added successfully.";
		// if all the fields are filled (not empty) 
			
		//insert data to database	
		$result= mysql_query("INSERT INTO doctors(uname,pass,fname,lname) VALUES('$uname','$pass','$fname','$lname')");
		
		//display success message
		echo "<font color='green'>You has been registered successfully.";
		echo "<br/><a href='index.php'>Go to Homepage</a>";
		}
}
?>
</form>
</body>
</html>
