<?php
session_start();
if(( $_SESSION['LOGGEDstudent']) !="true"){
    echo"<script> location.href='loggin.php'  </script>";
}

$_SESSION['timeout'] = time(); 
if (time()-$_SESSION['timeout'] > 600){
   unset($_SESSION['timeout']);
  // echo "<script> location.href='forget.php' <script>";
}
?> <?php
   if (isset($_GET['courseRegId'])){
   
     $id = $_GET['courseRegId'];
     
    
   
        
  $delete = "DELETE FROM  courseregister WHERE  courseRegId = $id";

 include_once "config.php";
   
   $result = mysqli_query($connection,$delete);
   
   if (!$result){
    die (("failed").mysqli_connect_error());
   }
 else{
   //  echo"<script> location.href='dropcourse.php'  </script>";
   echo '<script> alert("Deleted")
     window.location = "dropcourse.php";
     </script>';

}
}

?>    