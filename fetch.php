<?php

//fetch.php

$connect = new PDO("mysql:host=localhost:3306;dbname=alqudust_nuja", "alqudust_nujabah", "Nujabah22/11,");

$output = '';

$query = '';

if(isset($_POST["query"]))
{
 $search = str_replace(",", "|", $_POST["query"]);
 $query = "
 SELECT * FROM application 
 WHERE appId REGEXP '".$search."' 
 OR surname REGEXP '".$search."' 
 OR gender REGEXP '".$search."' 
 OR acceptancefee REGEXP '".$search."' 
 OR admissionstatus REGEXP '".$search."'
  OR phone REGEXP '".$search."' 
 OR email REGEXP '".$search."'
  OR processedate REGEXP '".$search."'
 ";
}
else
{
 $query = "
 SELECT * FROM application WHERE admissionstatus='ADMITTED' ORDER BY appId DESC
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
