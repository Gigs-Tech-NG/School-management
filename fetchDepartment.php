<?php include("config.php"); ?> 
<?php
//$matricno =$_SESSION['matricno'];
   $result=mysqli_query($connection,"select * FROM faculties");  
//$result = mysqli_query($connection, $query);
$output = array();
while($row = mysqli_fetch_assoc($result))
{
 $output[] = $row;
}
echo json_encode($output);
?>