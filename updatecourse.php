
<?php include("config.php"); ?> 
<?php
$query = "
 UPDATE course SET ".$_POST["name"]." = '".$_POST["value"]."' 
 WHERE  id= '".$_POST["pk"]."'";
mysqli_query($connection, $query);    
?>
