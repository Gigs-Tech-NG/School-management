<?php
if(isset($_POST['get_option']))
{
 $host = 'localhost:3306';
 $user = 'alqudust_nujabah';
 $pass = 'Nujabah22/11,';
 mysql_connect($host, $user, $pass);
 mysql_select_db('alqudust_nuja');
 $connection=mysqli_connect("localhost:3306","alqudust_nujabah","Nujabah22/11,","alqudust_nuja");

 $state = $_POST['get_option'];
 $find=mysqli_query($connection,"select surname from application where level='$state'");
 while($row=mysqli_fetch_array($find))
 {
  echo "<option>".$row['surname']."</option>";
 }
 exit;
}
?>