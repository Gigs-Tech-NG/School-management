<?php 
session_start();
             
         if(isset(  $_SESSION['level'])){
       $level= (  $_SESSION['level']);
       include "config.php";
       $req=mysqli_query($connection,"SELECT * FROM level WHERE id='$level'");
       if(!$req){
        
       }while($row=mysqli_fetch_assoc($req)){
        $levelR=$row['name'];
       }
    } 
                 
         if(isset(   $_SESSION['dept'])){
       $Dept= (   $_SESSION['dept']);
       include "config.php";
       $req=mysqli_query($connection,"SELECT * FROM depts WHERE id='$Dept'");
       if(!$req){
        
       }while($row=mysqli_fetch_assoc($req)){
        $deptR=$row['name'];
       }
    } 
                 
         if(isset(   $_SESSION['faculty'])){
       $facuit= (   $_SESSION['faculty']);
       include "config.php";
       $req=mysqli_query($connection,"SELECT * FROM faculties WHERE id='$facuit'");
       if(!$req){
        
       }while($row=mysqli_fetch_assoc($req)){
        $facuitR=$row['name'];
       }
    } 
                 
        
    include "config.php"  ;                     
   if(isset($_POST['scor'])){
    include "config.php";
$scor = $_POST['scor'];
	//$matric = $_POST['matric'];
    //$fulname = $_POST['fulname'];
    if(($_SESSION['semester'] =='THIRD TERM')) {
        //$total2 =	$examscr + $catext ;
                  
$nc = count($scor);
for($i=0;$i<$nc;$i++)
{
    $catext =addslashes($_POST['catext'][$i]);
     	$examscr =addslashes($_POST['examscr'][$i]);
      //	$matric = addslashes($_POST['matric'][$i]);
        $total3 =	$examscr + $catext ;
    // addslashes($_POST['fulname'][$i]);

     $scoid= $scor[$i];
     include "config.php";
 /*
        	$query= mysqli_query($connection,"SELECT * FROM courseregister WHERE
         session='". $_SESSION['session']."' AND  faculty='". $_SESSION['faculty']."' AND dept='". $_SESSION['dept']."' 
         AND level='".$_SESSION['level']."' AND course ='". $_SESSION['course']."' AND class='$levelR'" );
     if(!$query){
        echo 'failed';
       }
       	while($row=mysqli_fetch_array($query)){
       	    include "config.php";
           $toally= ($row['first_term']);
           }
 */
     $update = "update courseregister set third_resusult_text='".$catext."',class='$levelR',third_term='".$total3."',
     third_resusult_exam='".$examscr."' where courseRegId='".$scoid."'";
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
        //$total2 =	$examscr + $catext ;
                  
$nc = count($scor);
for($i=0;$i<$nc;$i++)
{
    $catext =addslashes($_POST['catext'][$i]);
     	$examscr =addslashes($_POST['examscr'][$i]);
      //	$matric = addslashes($_POST['matric'][$i]);
        $total2 =	$examscr + $catext ;
    // addslashes($_POST['fulname'][$i]);
     $scoid= $scor[$i];
     include "config.php";
 /*
        	$query= mysqli_query($connection,"SELECT * FROM courseregister WHERE
         session='". $_SESSION['session']."' AND  faculty='". $_SESSION['faculty']."' AND dept='". $_SESSION['dept']."' 
         AND level='".$_SESSION['level']."' AND course ='". $_SESSION['course']."' AND class='$levelR'" );
     if(!$query){
        echo 'failed';
       }
       	while($row=mysqli_fetch_array($query)){
       	    include "config.php";
           $toally= ($row['first_term']);
           }
 */
     $update = "update courseregister set second_resusult_text='".$catext."',class='$levelR',second_term='".$total2."',
     second_resusult_exam='".$examscr."' where courseRegId='".$scoid."'";
    $result =mysqli_query($connection,$update);

    if (!$result){
        die (("faileds").mysqli_connect_error());
    } 
  else{
    
     echo "<script> location.href='uploadstudentresult.php' </script>";
     
  }
   }
   }
   
     elseif(( $_SESSION['semester'] =='FIRST TERM')) {
        
         include "config.php";
        //  $i=0;          
$nc = count($scor);

 for($i=0;$i<$nc;$i++)
{
    //$scoid= $scor[$i];

	$catext =addslashes($_POST['catext'][$i]);
     	$examscr =addslashes($_POST['examscr'][$i]);
        $total33 =	$examscr + $catext ;
    $scoid= $scor[$i];
     $update = "update courseregister set cascore='".$catext."',first_term='".$total33."',
     examscore='".$examscr."',class='$levelR' where courseRegId='".$scoid."'";
    $result =mysqli_query($connection,$update);

    if (!$result){
        die (("faileds").mysqli_connect_error());
    } 
  else{
    
     echo "<script> location.href='uploadstudentresult.php' </script>";
      
  }
  }
      
  }
    }
?>