<?php

$_SESSION['timeout'] = time(); 
if (time()-$_SESSION['timeout'] > 1800){
   unset($_SESSION['timeout']);
  // echo "<script> location.href='forget.php' <script>";
}
if(( $_SESSION['LOGGEDict']) !="true"){
   echo"<script> location.href='stafflogin.php'  </script>";
}


?>
 <?php
                 
         if(isset( $_SESSION['semester'])){
       $sememster= ( $_SESSION['semester']);
       include "config.php";
       $req=mysqli_query($connection,"SELECT * FROM semester WHERE id='$sememster'");
       if(!$req){
        
       }while($row=mysqli_fetch_assoc($req)){
        $semsteR=$row['name'];
       }
    } ?>
    <?php
if($_GET['score'] == ""){
    echo"<script> location.href='stafflogin.php'  </script>";
};
?>