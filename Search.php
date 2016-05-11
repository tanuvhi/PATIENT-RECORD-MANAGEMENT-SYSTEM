<!DOCTYPE html>
<html>
  <head>
     <title>Search</title>
	 
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	 
	
   <link rel="stylesheet" href="search.css">
     
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
  </ul></div></div>
  <div class ="a">
 
  
     <div class="container">
	 <br/>
	 <h2 align="center">SEARCH Patient HERE</h2>
	 <br/>
	  <div class="from-group">
	    <div class="input-group">
		  <span class="input-group-addon">SEARCH</span>
		  <td><input type="text" name="search_text" id="search_text" placeholder="Search your Patient by name" /></td>
		  <td><img src="icon.png" alt="icon" style="width:44px;height:28px;"></td>
		  
		</div>
	  </div>
	  <br/><br/>
	  <div id="result">
	     
	  </div>
	   
	 
	 </div>
   </body>
</html>


<script>
  $(document).ready(function()
  {
	  $('#search_text').keyup(function()
	  {
		  var txt=$(this).val();
		  if(txt != '')
		  {
			  $.ajax({
				  
				  url:"fetch.php",
				  method:"post",
				  data:{search:txt},
				  dataType:"text",
				  success:function(data)
				  {
					  $('#result').html(data);
				  }
			  });
			  
			  
			  
		  }
		  else
		  {
			   $('#result').html('');
			   $.ajax({
				  
				  url:"fetch.php",
				  method:"post",
				  data:{search:txt},
				  dataType:"text",
				  success:function(data)
				  {
					  $('#result').html(data);
				  }
			  });
			 
		  }
	  });
	  
  });








</script>