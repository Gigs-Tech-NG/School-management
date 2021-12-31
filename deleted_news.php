<?php
$id= $_GET['id'];
include"config.php";
$delete=mysqli_query($connection,"DELETE FROM newss WHERE id='$id'");
if($delete){
 echo "<script>window.alert('deleted');
                                        location.href='delete_news.php';
                                       </script>";
}
if(!$delete){
    echo"error".$delete.mysqli_error($connection);
}


?>