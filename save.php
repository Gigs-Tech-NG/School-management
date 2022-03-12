<form method="post">
<?php

include "config.php";
$select = mysqli_query($connection,"select * from application ");
if(!$select){
        echo"no match";
}while($row=mysqli_fetch_array($select)){
$surname=$row['surname'];
$firstname=$row['middlename'];
$all= $surname.' '.$firstname;
$idz= $row['appId'];
if(isset($_POST['submit'])){
        // $name= $_POST['name'];
         //$id= $_POST['id'];
 $update=mysqli_query($connection,"update application set name='$all' where appId='$idz'");
 if($update){
        echo "updated";
        echo $row['name'].' '.$idz;
 }else{
       echo "error".$update.mysqli_error($connection);
 }
 //echo $surname.' '.$firstname.' '.$idz;
 }
 }
?>
<input type="text" value="<?php echo $surname.' '.$row['middlename']?>" name="name">
<input type="text" value="<?php echo $row['appId']?>" name="id">
<?php 


?>
<input type="submit" name="submit">
</form>