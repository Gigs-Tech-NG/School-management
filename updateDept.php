<?php include("config.php"); ?> 
<?php
$query = "
 UPDATE faculties SET ".$_POST["name"]." = '".$_POST["value"]."' 
 WHERE  id= '".$_POST["pk"]."'";
mysqli_query($connection, $query);    
?>
