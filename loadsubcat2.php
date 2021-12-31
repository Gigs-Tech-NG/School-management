<?php 
include('config.php');

$parent_cat = $_GET['parent_cat'];

$query = mysqli_query($connection,"SELECT * FROM application WHERE level = {$parent_cat} AND gender='female' ");
while($row = mysqli_fetch_array($query)) {
	echo "<option value='$row[email]'>$row[surname] $row[middlename] $row[lastname]</option>";
}
$room_cat = $_GET['room_cat'];
$queried = mysqli_query($connection,"SELECT * FROM hostel2 WHERE id = {$room_cat}");
while($col = mysqli_fetch_array($queried)){
    echo "<option value='$col[bunk1]'>$col[bunk1]</option>
    <option value='$col[bunk2]'>$col[bunk2]</option>
    <option value='$col[bunk3]'>$col[bunk3]</option>
    <option value='$col[bunk4]'>$col[bunk4]</option>";
}
?>