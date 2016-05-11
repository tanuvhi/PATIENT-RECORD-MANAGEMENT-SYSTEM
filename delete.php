<?php
//including the database connection file
include("config.php");

echo "i have a bus";

//getting id of the data from url
$id = $_GET['id'];

//deleting the row from table
$result = mysql_query("DELETE FROM patient WHERE patient_id=$id");

//redirecting to the display page (index.php in our case)
header("Location:show.php");
?>

