<?php

//fetch.php

$connect = new PDO("mysql:host=localhost:3306;dbname=depotte1_depotter", "depotte1", "h05fB*m7G5i");

$output = '';

$query = '';

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
}
else
{
 $query = "
 SELECT * FROM course ORDER BY id
 ";
}

$statement = $connect->prepare($query);
$statement->execute();

while($row = $statement->fetch(PDO::FETCH_ASSOC))
{
 $data[] = $row;
}

echo json_encode($data);

?>
