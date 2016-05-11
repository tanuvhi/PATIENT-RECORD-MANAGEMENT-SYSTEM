<!DOCTYPE html>
<html>
 
		   
  <head>
    <title>Patient History</title>
	
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="main.css">
       <meta charset="utf-8">
       <meta name="viewport" content="width=device-width, initial-scale=1">
	   <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
      <script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
	  <script src="primary.js"></script>
	
	<link rel="stylesheet" href="show.css">
	
	<div class ="a">
	<p style="color:red">
       <meta charset="utf-8">
      
	
	
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
  <div id="nav">
  <div id="nav_wrapper"><br>
  <ul> 
 
   <li><a href="post_insert.php">Add Patient</a></li> 
   <li><a href="search.php"> Search </a></li>
    <li><a href="diagnosishtml.php"> Add Diagnosis </a></li>
   <li><a href="logout.php">Logout</a></li>
</ul>
</div>
</div>   
 
   
  <b><h1  align ="center"> Patient History	 </b></h1>
  
    	  <div class="ink" >
		  
	 
	 
	 <br/><br/>
	
	  <div class="from-group">
	 		 
		
		
	    <table class="table table-bordered" border="1" align="center">
	   <thead>
	     <tr>
		   <th>Patient Name</th>
		   <th>Reg no:</th>
		    <th>Age</th>
			 <th>Date of admission</th>
			 <th>DETAILS</th>
			  <th>EDIT</th>
			   <th>Delete</th> 
		 </tr>
	   
	   </thead>
	   
	      <?php  
		   include("config.php");
		   
		   $query=mysql_query("SELECT * FROM patient order by patient_id desc");
		  while($row=mysql_fetch_object($query))
		  {
			  ?>
			  
			    <tr>
				  <td><?php echo $row->name?></td>
				  <td><?php echo $row->reg_no?></td>
				  <td><?php echo $row->age?></td>
				  <td><?php echo $row->d_add?></td>
				  <td><a href="details.php? id=<?php echo $row->patient_id ?>">DETAILS</a> </td>
				  <td><a href="edithtml.php?id=<?php echo $row->patient_id?>" onClick="return confirm('Are you sure you want to Edit?')">Edit</a> </td>
				  <td><a href="delete.php?id=<?php echo $row->patient_id?>" onClick="return confirm('Are you sure you want to delete?')">Delete </a></td>
				
			
				   
				
			    </tr>
			
			  
			  <?php
			  
		  }
		  
		  
		  
		  
		  
		  ?>
	   
	   
	   
	   
	</table>
</div>
</div>
  
  </body>

</html>