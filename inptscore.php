<?php
session_start();
?>
<html>
<head>
<title>De Potter College || Re-defining lost hope</title>
		<link href="css41/bootstrap.css" rel="stylesheet" type="text/css" media="screen"> 
        <link rel="stylesheet" type="text/css" href="css/DT_bootstrap.css">
        <link rel="icon" href="images/logo.png">
    </head><?php include("hints.php");?>
	<script src="jsss/jquery.js" type="text/javascript"></script>
	<script src="jsss/bootstrap.js" type="text/javascript"></script>
	
	<script type="text/javascript" charset="utf-8" language="javascript" src="jsss/jquery.dataTables.js"></script>
	<script type="text/javascript" charset="utf-8" language="javascript" src="jsss/DT_bootstrap.js"></script>

<style>
</style>
<body style="color:blue">
     <h5><a href="administration.php">Homepage</a></h5>
	    <div class="row-fluid">
	        <div class="span12">
	            <div class="container-fluid" style="width:100%;padding-left:2%;padding-right:2%">
		<br />
		<h2 style="text-align: center;"><p>UPLOAD STUDENTS RESULT</p></h2>
        <h5 style="text-align: center;">search for student</h5>	
		<br />
       
		 <?php require("includes/functions.php"); ?> 
	<form method="post"	action="">
		<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
			<thead>
				<tr>
				 <th>S/N</th>
					<th align="center">Matric No</th>
                    <th align="center">Fullname</th>
                
                    <th align="center">CA Score(30%)</th>
			
                      <th align="center">Exam(70%)</th>
                     <th align="center">Action</th>
                   
				</tr>
                 <?php
                 
         if(isset(  $_SESSION['level'])){
       $level= (  $_SESSION['level']);
       include "config.php";
       $req=mysqli_query($connection,"SELECT * FROM level WHERE id='$level'");
       if(!$req){
        
       }while($row=mysqli_fetch_assoc($req)){
        $levelR=$row['name'];
       }
    } ?>
        <?php
                 
         if(isset(   $_SESSION['dept'])){
       $Dept= (   $_SESSION['dept']);
       include "config.php";
       $req=mysqli_query($connection,"SELECT * FROM depts WHERE id='$Dept'");
       if(!$req){
        
       }while($row=mysqli_fetch_assoc($req)){
        $deptR=$row['name'];
       }
    } ?>
     <?php
                 
         if(isset(   $_SESSION['faculty'])){
       $facuit= (   $_SESSION['faculty']);
       include "config.php";
       $req=mysqli_query($connection,"SELECT * FROM faculties WHERE id='$facuit'");
       if(!$req){
        
       }while($row=mysqli_fetch_assoc($req)){
        $facuitR=$row['name'];
       }
    } ?>
       
                
    <?php
if($_GET['score'] == ""){
    echo"<script> location.href='stafflogin.php'  </script>";
};
?>
     <?php
  include_once "config.php";
if (isset($_POST['update'])) {
    $crd = $_GET['score'];
 
		$catext =mysqli_real_escape_string($connection,$_POST['catext']);
     	$examscr =mysqli_real_escape_string($connection,$_POST['examscr']);
        if(( $_SESSION['semester']) =='THIRD TERM'){
        $totalt3 =	$examscr + $catext ;
       $first=' ';
        $second=' ';
    	$query= mysqli_query($connection,"SELECT * FROM courseregister WHERE
         session='". $_SESSION['session']."' AND  faculty='". $_SESSION['faculty']."' AND dept='". $_SESSION['dept']."' 
         AND level='".$_SESSION['level']."' AND class='$levelR' AND first_term !='$first' AND second_term !='$second'");
       if(!$query){
        echo 'failed';
       }
       	while($row=mysqli_fetch_assoc($query)){
	$totalt1=$row['first_term'];
	$totalt2=$row['second_term'];
	//$total3=$row['third_term'];
     include "config.php";
	 $update = "update courseregister set cascore='$catext',first_term='$totalt1',second_term='$totalt2',third_term='$totalt3',class='$levelR',examscore='$examscr' where courseRegId='$crd'";
    $result =mysqli_query($connection,$update);

    if (!$result){
        die (("faileds").mysqli_connect_error());
    } 
  else{
    
     echo "<script> location.href='uploadstudentresult.php' </script>";
      
  
      
  
   
    }
     }
    } 
    
    elseif(($_SESSION['semester'] =='SECOND TERM')) {
        $total2 =	$examscr + $catext ;
        	$query= mysqli_query($connection,"SELECT * FROM courseregister WHERE
         session='". $_SESSION['session']."' AND  faculty='". $_SESSION['faculty']."' AND dept='". $_SESSION['dept']."' 
         AND level='".$_SESSION['level']."' AND course ='". $_SESSION['course']."' AND class='$levelR'");
       if(!$query){
        echo 'failed';
       }
       	while($row=mysqli_fetch_assoc($query)){
	$totalt1=$row['first_term'];
         include "config.php";
	 $update = "update courseregister set second_resusult_text='$catext',first_term='$totalt1',class='$levelR',second_term='$total2',
     second_resusult_exam='$examscr' where courseRegId='$crd'";
    $result =mysqli_query($connection,$update);

    if (!$result){
        die (("faileds").mysqli_connect_error());
    } 
  else{
    
     echo "<script> location.href='uploadstudentresult.php' </script>";
      
  }
      
  
   
    }
    } 
     elseif(($semsteR =='FIRST TERM')) {
        $total33 =	$examscr + $catext ;
         include "config.php";
	 $update = "update courseregister set cascore='$catext',first_term='$total33',examscore='$examscr',class='$levelR' where courseRegId='$crd'";
    $result =mysqli_query($connection,$update);

    if (!$result){
        die (("faileds").mysqli_connect_error());
    } 
  else{
    
     echo "<script> location.href='uploadstudentresult.php' </script>";
      
  
      
  
   
    }
    } 
    
  
   
    }
  ?> 
			</thead>
			<?php
			 
			  if (isset($_GET['score'])){
    $id = $_GET['score'];
 include "config.php";
			  $sn=0;
			  $sn =$sn + 1; 
$select = mysqli_query($connection, "SELECT * FROM courseregister where courseRegId='$id'");

if(!$select){
    $error = "not selected";
}while($row =mysqli_fetch_assoc($select)){
	
	$fllname=$row['fullname'];
	$matricn=$row['matricno'];
	$cascres=$row['cascore'];
	$exam=$row['examscore'];
	$course=$row['course'];
  
			?>
			<tr>
				<td>
					<?php echo $sn++ ;?>
				</td>
				<td>
				<?php echo $matricn ;?>
				</td>
               
                 <td>
               <?php echo $fllname ;?>
                </td>
              
                 <td><input type="text"style="border:none;"  name="catext" value="<?php echo $cascres ;?>" required>
                </td>
                 <td><input type="text" style="border:none;" name="examscr" value="<?php echo $exam ;?>" required>
                </td>
                <td><button class="signupbtn" type="submit" name="update">Update</button>
                
                </td>
			</tr>
			</tr>
            
			<?php
			} }
          //  echo $semsteR;
			?>
		</table>
       
        </form>
	</div>
	</div>
	</div>
</body>
<br />
<br />
 <script>
$(document).ready(function(){
$('#faculty').on('change',function(){
   $facultyName=$(this).val();
   if($facultyName){
      $.ajax({
          type:'POST',
          url:'fetchData.php',
          data:'faculty='+$facultyName,
          success:function(html){
           console.log(html);
           $('#dept').html(html);
          },
      
      });
   } else{
       $('#dept').html('<option value="">Select faculty first </option>');
   }
});
}); 
</script>
 <script language="javascript" type="text/javascript">
        function printDiv(divID) {
            //Get the HTML of div
            var divElements = document.getElementById(divID).innerHTML;
            //Get the HTML of whole page
            var oldPage = document.body.innerHTML;

            //Reset the page's HTML with div's HTML only
            document.body.innerHTML = 
              "<html><head><title></title></head><body>" + 
              divElements + "</body>";

            //Print Page
            window.print();

            //Restore orignal HTML
            document.body.innerHTML = oldPage;

          
        }
    </script>
     

<script>
$(document).ready(function(){
$('#faculty').on('change',function(){
   $facultyName=$(this).val();
   if($facultyName){
      $.ajax({
          type:'POST',
          url:'fetchData.php',
          data:'faculty='+$facultyName,
          success:function(html){
           console.log(html);
           $('#dept').html(html);
          },
      
      });
   } else{
       $('#dept').html('<option value="">Select dept first </option>');
   }
});

$('#dept').on('change',function(){
   $deptName=$(this).val();
   if($deptName){
      $.ajax({
          type:'POST',
          url:'fetchData.php',
          data:'dept='+$deptName,
          success:function(html){
           console.log(html);
           $('#level').html(html);
          },
      
      });
   } else{
       $('#level').html('<option value="">Select programme first </option>');
   }
});

$('#level').on('change',function(){
   $levelName=$(this).val();
   if($levelName){
      $.ajax({
          type:'POST',
          url:'fetchData.php',
          data:'level='+$levelName,
          success:function(html){
           console.log(html);
           $('#semester').html(html);
          },
      
      });
   } else{
       $('#semester').html('<option value="">Select level first </option>');
   }
});

$('#semester').on('change',function(){
   $semesterName=$(this).val();
   if($semesterName){
      $.ajax({
          type:'POST',
          url:'fetchData.php',
          data:'semester='+$semesterName,
          success:function(html){
           console.log(html);
           $('#course').html(html);
          },
      
      });
   } else{
       $('#course').html('<option value="">Select semester first </option>');
   }
});
}); 
</script>  
<link rel="stylesheet" type="text/css" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/css/bootstrap-datepicker.min.css"> 
   <link rel="stylesheet" type="text/css" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/css/bootstrap-datepicker3.min.css"> 
   <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/js/bootstrap-datepicker.min.js"></script> 
</body>
</html>

 <?php //require("includes/footer.php"); ?> 