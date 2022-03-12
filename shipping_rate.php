<?php
include "config.php";
if(isset($_POST['submit'])){
    $staname=$_POST['statename'];
    $nc = count($staname);
for($i=0;$i<$nc;$i++){
 $stateid =addslashes($_POST['stateid'][$i]);
     	$rate =addslashes($_POST['rate'][$i]);
  $statename=$staname[$i];
    //foreach($state as $val){
     $insert=mysqli_query($connection,"INSERT INTO shipping_rate (state_id,states_name,rates) VALUES ('".$stateid."','".$statename."','".$rate."')");
}
}
?><!doctype html>
<html>
<body>
<form method="post">
<input type="submit" name="submit">
<table>
<thead>
<tr>
<th>id</th>
<th>state</th>
<th>shipping rate</th>
</tr>
</thead>
<?php
  $insert=mysqli_query($connection,"SELECT * FROM states");
  while($row=mysqli_fetch_assoc($insert)){
    $staid=$row['state_id'];
     $staname=$row['name'];
      // $rate=$row['rates'];
 // }

  ?> 
<tbody>

<tr>
<td><input type="text" name="stateid[]" value="<?php echo $staid;?>"></td>
<td><input type="text" name="statename[]" value="<?php echo $staname;?>"></td>
<td><input type="text" name="rate[]" value="00"></td>
</tr>

</tbody>
<?php }
?>
</table>

</form>

<form method="post">
<label>State *</label>
            <select  id="faculty" name="faculty">
            <option value="">Select state</option>
            <?php  
            $query =$connection->query("SELECT * FROM states"); 
 $rowCount=$query->num_rows;
       if($rowCount > 0){
  while($row=$query->fetch_assoc()){ 
   echo '<option value= "'.$row['state_id'].'">'.$row['name'].'</option>';
 }
   }
 ?>
   </select>
   <label>Rate *</label>
       <!-- <input type="text" id="dept"  name="rate" required-->
       <select  id="dept"  name="dept" required>
                                        <option value="">Select state first * </option>
         
         
        </form>
        <?php include "data.php" ?>
</body></html>