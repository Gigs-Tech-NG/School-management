<?php
session_start();

$_SESSION['timeout'] = time(); 
if (time()-$_SESSION['timeout'] > 1800){
   unset($_SESSION['timeout']);
  // echo "<script> location.href='forget.php' <script>";
}
if( ($_SESSION['LOGGEDstudent'] or $_SESSION['LOGGED'] )!="true"){
    echo"<script> location.href='loggin.php'  </script>";
}

?>
<?php
include "config.php";
//$conn=new PDO('mysql:host=localhost; dbname=depotter', 'root', '') or die(mysql_error());
?>
<html>
<head>
<title>Year 1 Lectures</title>
		<link href="css41/bootstrap.css" rel="stylesheet" type="text/css" media="screen"> 
        <link rel="stylesheet" type="text/css" href="css41/DT_bootstrap.css">
</head>
	<script src="jsss/jquery.js" type="text/javascript"></script>
	<script src="jsss/bootstrap.js" type="text/javascript"></script>
	
	<script type="text/javascript" charset="utf-8" language="javascript" src="jsss/jquery.dataTables.js"></script>
	<script type="text/javascript" charset="utf-8" language="javascript" src="jsss/DT_bootstrap.js"></script>

<style>
</style>
<body>
	    <div class="row-fluid">
	        <div class="span12">
	            <div class="container">
		<br />
		<h1 style="text-align: center;"><p>Year 1 Lectures</p></h1>
        <h5 style="text-align: center;">search by course code </h5>	
		<br />
		<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example" margin="-20%">
			<thead>
				<tr>
					<th align="center">Post No</th>
					<th align="center">Posted By</th>
                    <th align="center">Posted on</th>
                    <th align="center">Course Title</th>
					<th align="center">Course Code</th>
                    <th align="center">Google link</th>
                    
                   
				</tr>
                
			</thead>
			<?php
			//$today = date('d/m/Y');
			//$expired=date(d'd/m/Y',strtotime($row['login_DATE'].'+3 days'));
			//if($today == $expired)


			$query=mysqli_query($connection,"SELECT * FROM  year_1 WHERE date = '$today' ORDER BY id ASC");
			while($row=mysqli_fetch_array($query)){
			 $idd = $row['id'];
     $fname = $row['poster']; $lname = $row['date'];  $mname = $row['course_code']; $title=$row['title']; $stu_email = $row['course_link'];
      $stu_no = $row['detail']; 
				$name=$row['poster'];
			?>
			<tr>
			
				<td>
					<?php echo $idd ;?>
				</td>
				<td>
				 &nbsp;	<?php echo $fname;?>
				</td>
                <td>
                	<?php echo $lname;?>
                </td>
                <td>
                   <?php echo $title;?> 
                
                </td>
                <td>
                	<?php echo $mname;?>
                </td>
                <td>
                	<?php echo "<a href='https://$row[course_link]' style='text-align:left;font-family:italic; color:blue;font-size:24px;'>  
       $row[detail]</a>"; ?></td>
                </td>
                
                
			</tr>
            
			<?php }?>
		</table>
        
	</div>
	</div>
	</div>
</body>
<br />
<br />
</html>
