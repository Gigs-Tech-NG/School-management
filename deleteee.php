    <?php
    	$id=$_GET['id'];
    	include('config.php');
    	mysqli_query($db,"delete from uploade where id='$id'");
    echo"<script>location.href='indexcc.php'</script>";
    ?>