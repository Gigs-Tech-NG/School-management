<?php
$con=mysqli_connect("localhost","root","","applvxvg_mobileapp");
$select=mysqli_query($con,"SELECT * FROM products_description where id='364'");
while($row=mysqli_fetch_assoc($select)){
 $listed   =$row['products_description'];
 $array=count($listed);
    for($i=0;$array>$i;$i++){
        //  foreach (array_values($list)[0] as $card) {
              echo $array[$i];
           //   }
    }

}
?>