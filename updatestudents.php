
<?php include("config.php"); ?> 
<?php
$query = "
 UPDATE student SET ".$_POST["name"]." = '".$_POST["value"]."' 
 WHERE  stdId= '".$_POST["pk"]."'";
mysqli_query($connection, $query);    
?>
