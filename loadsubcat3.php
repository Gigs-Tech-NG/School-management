<?php 
include('config.php');

$parent_cat = $_GET['parent_cat'];

$query = mysqli_query($connection,"SELECT * FROM application WHERE admissionstatus = '$parent_cat'  ");
if(!$query){
    echo "failed";
}
while($row = mysqli_fetch_array($query)) {
    $level = $row['level'];
	echo "<option value='$row[name]'>$row[name]</option>";
}



//
?>