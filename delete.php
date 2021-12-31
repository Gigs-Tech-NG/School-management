    <?php
   if (isset($_GET['del'])){
   
     $id = $_GET['del'];
     
    
   
        
  $delete = "DELETE FROM  book WHERE id = $id";

 include_once "config.php";
   
   $result = mysqli_query($connection,$delete);
   
   if (!$result){
    die (("failed").mysqli_connect_error());
   }
 else{
     echo"<script> location.href='all-book.php'  </script>";

}
}

?>    