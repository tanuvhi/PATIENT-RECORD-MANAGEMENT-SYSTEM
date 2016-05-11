<?php

include_once("config.php");
session_start();

if(($_SERVER["REQUEST_METHOD"]=="POST") && isset($_POST["submit"]))
	{
		$username=$_POST["uname"];
		$password= $_POST["pass"];
		$doctors_id="";
		$fname="";
	
		$result = mysql_query("SELECT * FROM doctors where uname='$username' and pass ='$password'");
		while($res = mysql_fetch_array($result)){  		
		 
		$doctors_id= (string)$res['doctors_id'];
	
		$username = $res['uname'];
		$fname = $res['fname'];
			}
		if($doctors_id!="")
		{
	
			$_SESSION["username"]= $username;
			$_SESSION["doctors_id"]= $doctors_id;
			$_SESSION["fname"]= $fname;
			
		
		header("location:show.php");
		}
		else
		{
			echo "wrong username or password";
		}
	}

?>

<html>
	<head>
		<title> Index </title>
	<link rel="stylesheet" href="login.css"/>
		
	</head>
	<body>
	
	<a href='index.php'>Home</a>
	<div class ="a">
	<p style="color:red">
<h2>Login</h2>
</p>

	
	<form method="post">

 <input type="text" name="uname" value="" placeholder = "Enter your Username " align ="center"></br>
 <br><input type="password" name="pass" value="" placeholder ="Enter your password" align ="center"></br>
 <br><input type="submit" name="submit" value="login"><br>
	
	</body>

</html>