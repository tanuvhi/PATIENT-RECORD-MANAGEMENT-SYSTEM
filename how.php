<!DOCTYPE html>
<html>
 
		   
  <head>
  
  <link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="main.css">
       <meta charset="utf-8">
       <meta name="viewport" content="width=device-width, initial-scale=1">
	   <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
      <script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
	  <script src="primary.js"></script>
  

    <title>Show</title>
	
	<link rel="stylesheet" href="show.css">
	
	<div class ="a">
	<p style="color:red">
       <meta charset="utf-8">
      
	
	
  </head>
  <body>
  <H4 align="center">Patient Name </H4>
   <br/>
	
	  <div class="from-group">
	  <table class="table table-bordered" border="1" align="center">
	   <thead>
	     <tr>
		   <th>Patient Name</th>
		    <th>Reg no:</th>
		    <th>Age</th>
			 <th>Date of admission</th>
		    </tr>
	   
	   </thead>
	   <tbody>
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