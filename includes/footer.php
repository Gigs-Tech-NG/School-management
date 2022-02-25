 <?php
// session_start();
 	function validate(){
  if(isset($_POST['Register'])){
   // $discipline=htmlspecialchars($_POST['discipline']);
   $fullname=htmlspecialchars($_POST['fullname']);
   $matricno=htmlspecialchars($_POST['matricno']);
   $session=htmlspecialchars($_POST['session']);
   $dept=htmlspecialchars($_POST['faculty']);
   $programme=htmlspecialchars($_POST['dept']);
   $level=htmlspecialchars($_POST['level']);
 //  $semester=htmlspecialchars($_POST['semester']);
   $cousre=$_POST['course'];
   date_default_timezone_set('Africa/Lagos');
   $regdate= date("Y-m-d h:i:sa"); 
   

 foreach ($cousre as $key => $val ) {
    $courees=$cousre[$key];
    include "config.php";
$select="SELECT * FROM courseregister WHERE course='".$courees."' 
 AND matricno='$matricno' AND session='$session' AND  faculty='$dept' AND dept='$programme' AND level='$level'";
 $result=mysqli_query($connection,$select);
 $norow=mysqli_num_rows($result);
if($norow >=1 ) {
     return "You have already registered the selected course(s)";
  }
  
    
   else{

  include "config.php";
 $register="INSERT INTO courseregister (fullname,matricno,session,faculty,dept,level,course,examscore,cascore,second_resusult_text,second_resusult_exam,third_resusult_text,third_resusult_exam,regdate)
        VALUES('$fullname','$matricno','$session','$dept','$programme','$level','".mysqli_real_escape_string($connection,$courees)."','0','0','0','0','0','0','$regdate')";
        $result=mysqli_query($connection, $register);
 } }
 
         if(!$result){
                   die("failed").mysqli_connect_error();
               }
              elseif(!empty($level)){
      
       $level= ($level);
       include "config.php";
       $req=mysqli_query($connection,"SELECT * FROM level WHERE id='$level'");
       if(!$req){
        
       }while($row=mysqli_fetch_assoc($req)){
        $levelR=$row['name'];
       }
      // }
       $derreq=mysqli_query($connection,"SELECT * FROM depts WHERE id='$programme'");
       if(!$derreq){
        
       }while($row=mysqli_fetch_assoc($derreq)){
        $deptR=$row['name'];
       } 
        $dersreq=mysqli_query($connection,"SELECT * FROM faculties WHERE id='$dept'");
       if(!$dersreq){
        
       }while($row=mysqli_fetch_assoc($dersreq)){
        $programmeR=$row['name'];
       } 
      if(($levelR !='')) {
     $payment=mysqli_query($connection,"INSERT INTO primary1 (Student_name,RegNo,level,Session) VALUES('$fullname','$matricno','$levelR','$session')"); 
      if(!$result){
                  echo "failed";
               } 
       else{

 $update=mysqli_query($connection,"UPDATE application SET level='$levelR',faculty='$programmeR',department='$deptR' WHERE matricNo='$matricno'"); 
  
		if(!$update){
		  
		}	
        else{	 
            return "Courses Registered";
        }
              
            
   
          }
      }  
      }   
      }}
    ?> 