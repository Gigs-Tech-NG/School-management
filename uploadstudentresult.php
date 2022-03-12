<?php
session_start();

$_SESSION['timeout'] = time(); 
if (time()-$_SESSION['timeout'] > 1800){
   unset($_SESSION['timeout']);
  // echo "<script> location.href='forget.php' <script>";
}
if(( $_SESSION['LOGGEDict']) !="true"){
   echo"<script> location.href='stafflogin.php'  </script>";
}?>
<html>
<head>
<title>De Potter College || Re-defining lost hope</title>
		<link href="css41/bootstrap.css" rel="stylesheet" type="text/css" media="screen"> 
        <link rel="stylesheet" type="text/css" href="css/DT_bootstrap.css">
        <link rel="icon" href="images/logo.png">
</head><?php include "config.php";?>
	<script src="jsss/jquery.js" type="text/javascript"></script>
	<script src="jsss/bootstrap.js" type="text/javascript"></script>
	
	<script type="text/javascript" charset="utf-8" language="javascript" src="jsss/jquery.dataTables.js"></script>
	<script type="text/javascript" charset="utf-8" language="javascript" src="jsss/DT_bootstrap.js"></script>

<style>
</style>
<body style="color:blue">
     <h5><a href="adminict.php">Homepage</a></h5>
	    <div class="row-fluid">
	        <div class="span12">
	            <div class="container-fluid" style="width:100%;padding-left:2%;padding-right:2%">
		<br />
		<h2 style="text-align: center;"><p>UPLOAD STUDENTS RESULT</p></h2>
        <h5 style="text-align: center;">search for student</h5>	
		<br />
        
		 <?php require("includes/functions.php"); ?> 
	<form method="post"	action="allscore.php">
      <button  class="btn btn-danger" name="scores" type="submit" style="background:#F52126; color:#fff; border:none; font-size:16px; padding:4px 8px;">
         UPLOAD ALL SCORES</button>
		<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
			<thead>
				<tr>
                 <th align="center"></th>
				 <th>S/N</th>
                 
					<th align="center">Matric No</th>
                    
                    <th align="center">Fullname</th>
                
                    <th align="center">CA Score(40%)</th>
			
                      <th align="center">Exam(60%)</th>
                      
                     <th align="center">Action</th>
                   
				</tr>
                
			</thead>
		<?php include ("remote.php");?>
</body>
</html>

 <?php //require("includes/footer.php"); ?> 