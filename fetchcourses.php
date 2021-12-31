
<?php include("config.php"); ?> 
<?php
//$matricno =$_SESSION['matricno'];
if(isset($_POST["query"]))
{
 $search = str_replace(",", "|", $_POST["query"]);
 $query = "
 SELECT * FROM course 
 WHERE name REGEXP '".$search."' 
 OR semester_id REGEXP '".$search."' 
 OR coursetitle REGEXP '".$search."' 
 OR creditunit REGEXP '".$search."' 
  OR lectureday1 REGEXP '".$search."' 
   OR lectureday2 REGEXP '".$search."' 
 ";
}else{
   $result=mysqli_query($connection,"select * FROM course");  
}
//$result = mysqli_query($connection, $query);
$output = array();
while($row = mysqli_fetch_assoc($result))
{
 $output[] = $row;
}
echo json_encode($output);
?>