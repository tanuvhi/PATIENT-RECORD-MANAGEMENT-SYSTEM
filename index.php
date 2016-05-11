<?php
//including the database connection file
include_once("config.php");
session_start();

//fetching data in descending order (lastest entry first)
$result = mysql_query("SELECT * FROM post ORDER BY postid DESC");
?>


<html>
<head>

<title>Home</title>
<link rel="stylesheet" href="index.css">

</head>

<body>
<div id="nav"><br>
<div id="nav_wrapper"><br>
<ul>
<li><a href="signup.html">Signup</a></li>
<li><a href="login.php">Login</a></li>
<li><a href="how.php"> Patient List</a></li>
<li><a href="contact.html">Contact</a></li>
<li><a href="about.html">About Doctor</a></li>

</ul>



</div>

</div>



<?php
if(!empty($_SESSION["userid"]))
			  {
				  echo "welcome ".$_SESSION['fname']."<br>";
				  	echo " <a href='logout.php'> LogOut </a> ";
			  }
			  else
			  {
				  //echo " <a href='login.php'><span style='text-align:'>Login </span></a> ";
			  }
				  ?>
				   







  
<br><br>


	



</body>
</html>