<?php 
include "config.php";
$id = $_GET['id'];
  $update = mysqli_query($connection,"update book_request set status='read' where id = '$id'");
                              if(!$update){
                                  echo "error".$update.mysqli_error($connection);
                              }else{
                                 echo "<script>location.href='administration.php'</script>";
                              }
                              

?>