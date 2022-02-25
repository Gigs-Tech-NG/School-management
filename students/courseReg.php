<?php
session_start();
if(( $_SESSION['LOGGEDstudent']) !="true"){
    echo"<script> location.href='loggin.php'  </script>";
}

$_SESSION['timeout'] = time(); 
if (time()-$_SESSION['timeout'] > 600){
   unset($_SESSION['timeout']);
  // echo "<script> location.href='forget.php' <script>";
}
?>
 <?php 
  include "config.php";
//if(isset($_GET['zJitKoljsddkyhkajswkjwnwkaasjddddjytdnastkjdawndjdtyjsstzgzzstsAFDRSGSjkssjiaakskajaksoasaihahosoajs20kdjoAFDHSDHNHNDMNSJ109'])){
 //   $idss =$_GET['zJitKoljsddkyhkajswkjwnwkaasjddddjytdnastkjdawndjdtyjsstzgzzstsAFDRSGSjkssjiaakskajaksoasaihahosoajs20kdjoAFDHSDHNHNDMNSJ109'];
  //  $amont=10500;

  
     $select="SELECT * FROM application WHERE matricNo='".$_SESSION['matricNo']."'";
    $result=mysqli_query($connection, $select);
    if(mysqli_num_rows($result) > 0){
        while($row=mysqli_fetch_assoc($result)){
             $genderJ=$row['dob'];
             $marital=$row['relationship'];
            $address=$row['address'];
            $firstchoice=$row['firstchoice'];
            $secondchoice=$row['secondchoice'];
            $phone=$row['phone'];
            $faculty=$row['faculty'];
            $department=$row['department'];
            $level=$row['level'];
             $sfuulname=$row['fullname'];
            $sponsoraddress=$row['sponsoraddress'];
            $sponsorphone=$row['sponsorphone'];
            $gender= $row['gender'];
            $matricNo=$row['matricNo'];
              $state= $row['state'];
                $religion= $row['religion'];
             $passport=$row['picture'];
            $id = $row['appId'];
      $state=$row['state'];
$local=$row['lga'];
$fullnames=$row['fullname'];
$sponsoraddress=$row['sponsoraddress'];
$sponsorphone=$row['sponsorphone'];
            $email_val = $row['email'];
             $firstnameS = $row['surname'];
                 $lastname = $row['lastname'];
                  $middle = $row['middlename'];
           $firstname = $firstnameS. ' ' .$middle. ' ' .$lastname;
        }
    }


     ?><!doctype html>
<html>
<head>
<meta charset="utf-8">

  <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

    <title>De Potter College</title>
     <link rel="icon" type="image/png" href="https://www.depotterhealthtech.sch.ng/students/images/logo.png"> 
     
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

 <link href="https://cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.1/bootstrap3-editable/css/bootstrap-editable.css" rel="stylesheet">  
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet">
 <script src="http://code.jquery.com/jquery-2.0.3.min.js"></script>
  <script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
  <link   href="bootstrap3-editable/css/bootstrap-editable.css" rel="stylesheet">
  <script src="bootstrap3-editable/js/bootstrap-editable.min.js"></script>
  <script src="jquery-tabledit-master/jquery.tabledit.min.js"></script>
  <script src="jquery-tabledit-master/jquery.tabledit.js"></script> 
    <script src="jquery-tabledit-master/jquery.tabledit.min.js"></script>
  <script  src="jquery-tabledit-master/jquery.tabledit.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>  
     <script type="text/javascript" src="jquery/jquery-3.3.1.min.js"></script>
      <script type="text/javascript" src="jquery/jquery-3.3.1.js"></script> 
       <script src="http://code.jquery.com/jquery-2.0.3.min.js"></script> 
  <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
  
   
</head> 
<body> 
   
 <?php
  if(isset($_POST['submit'])){
    $discipline=htmlspecialchars($_POST['discipline']);
   $fullname=htmlspecialchars($_POST['fullname']);
   $matricno=htmlspecialchars($_POST['matricno']);
   $session=htmlspecialchars($_POST['session']);
   $faculty=htmlspecialchars($_POST['faculty']);
   $dept=htmlspecialchars($_POST['dept']);
   $level=htmlspecialchars($_POST['level']);
   $semester=htmlspecialchars($_POST['semester']);
   $course=$_POST['course'];
  
  // $examscore=htmlspecialchars($_POST['examscore']);
  //$cascore=htmlspecialchars($_POST['cascore']);
   $regdate= date("Y-m-d h:i:sa"); 
   
   if(empty($fullname)){
     $failure = "Please enter your full name"; 
   }else if(empty($matricno)){
     $failure = "Please enter your matric no."; 
   }else if(empty($semester)){
     $failure = "Please enter current session."; 
   } else if(empty($faculty)){
     $failure = "Please enter faculty."; 
   }else if(empty($dept)){
     $failure = "Please enter your dept."; 
   }else if(empty($level)){
     $failure = "Please enter your level."; 
   } else if(empty($semester)){
     $failure = "Please enter semester."; 
   }else if(empty($course)){
     $failure = "Please enter course."; 
   }else{
    foreach($_POST['course'] as $key => $chkcourse){ 
          
  $sel=mysqli_query($connection,"SELECT * FROM  courseregister WHERE  course='".$chkcourse."' AND matricno = '$matricno' AND faculty='$faculty' AND dept='$dept' AND session='$session' AND level='$level' AND semester='$semester' ");             
   $norow=mysqli_num_rows($sel);
       }
  if($norow >=1) {
     $failure = "You have already registered the selected course(s)";
   } else{
   foreach($_POST['course'] as $mycourse){ 
   $query=mysqli_query($connection,"INSERT INTO courseregister (courseRegId,discipline,fullname,matricno,session,faculty,dept,level,semester,course,examscore,cascore,regdate) 
   VALUES('','$discipline','$fullname','$matricno','$session','$faculty','$dept','$level','$semester','".mysqli_real_escape_string($connection, $mycourse)."','0','0','$regdate')");
   }
   if($query) {
     $success = "You have successfully registere the selected courses";
   } else{
       $failure =  "Course registration failed".mysqli_error($connection); 
   }
          
    }
    
    }
  }
  ?>

 <?php 
    if(!empty($failure)){
     echo "<span class='btn btn-warning'>" .$failure."</span>"; 
    }
     if(!empty($success)){
    
    echo "<span class='btn btn-success'>" .$success."</span>";
     } 
     ?>
  <h4 class="page-head-line">COURSE REGISTRATION FORM</h4>
<form action="" method="post" class="regform" role="form" >
 

 <div class="controls"> 
  <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                   <span style="color:red"></span>
                    <input id="form_name" type="hidden" name="discipline" onblur="inputValidation(this)" class="form-control" placeholder="Please enter your course of study. *" readonly="readonly"  value="<?php $query =mysqli_query($connection,"SELECT * FROM students where matricno = '".$_SESSION['matricno']."'");
                      while($data=mysqli_fetch_array($query)){
                       echo $data['discipline'];
                      }
                     ?>">
                    <div id="textField"></div>
                </div>
            </div>
        </div>
 <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                   FULL NAME:<span style="color:red">*</span>
                    <input id="form_name" type="text" name="fullname" onblur="disciplineValidation(this)" class="form-control" placeholder="Please enter your ful name starting with surname. *"   readonly="readonly" 
                    value="<?php echo $firstname ;?>">
                  <div id="discipline"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                   MATRIC NUMBER:<span style="color:red">*</span>
                    <input id="form_name" type="text" name="matricno" onblur="matricValidation(this)" class="form-control" value="<?php echo $_SESSION['matricNo'];?>"  readonly="readonly" data-error="Firstname is required.">
                  <div id="matric"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                   CURRENT SESSION (YEAR):<span style="color:red">*</span>
                   
  <?php
   $already_selected_value = '- Select current Session-';
   $earliest_year = 1950;

print '<select name="session" class="form-control col-lg-12 col-md-12 col-sm-4 col-xs-12" style=" height:50px;" onblur="sessionValidation(this)" >';
echo ' <option  value="0">- Select current Session-</option>';  
foreach (range(date('Y'), $earliest_year) as $x) {
    print '<option value="'.$x.'"'.($x === $already_selected_value ? ' selected="selected"' : '').'>'.$x.'</option>';
}
print '</select>';
echo '<div id="session"></div>';
?>
                    <div class="help-block with-errors"></div>
                </div>
            </div>
        </div><br/>
<div class="row">  
    <div class="col-md-6"> 
        <div class="form-group"> 
            <label for="form_message">DEPARTMENT</label>
      
            <select  id="faculty" name="faculty"  class="form-control col-lg-12 col-md-12 col-sm-4 col-xs-12" style=" height:50px;">
            <option value="">Select dept</option>
    <?php  
                 
 $query =$connection->query("SELECT * FROM faculties"); 
 $rowCount=$query->num_rows;
 
       if($rowCount > 0){
  while($row=$query->fetch_assoc()){ 
    $faculted=$row['id'];
    $named=$row['name'];
   echo '<option value= "'.$row['id'].'">'.$row['name'].'</option>';
 }
   }else{
     //echo '<option value="">dept not found </option>';
   }
 ?>    
  </select> 
 
  </div>
   </div>
   </div>
     <br/>
  <script>
$(document).ready(function () {
  $("#faculty").change(function () {
     switch($(this).val()) {
        case (#faculted):
            $("#dept").html("<?php  
                 
 $query =$connection->query("SELECT * FROM depts"); 
 $rowCount=$query->num_rows;
 
       if($rowCount > 0){
  while($row=$query->fetch_assoc()){ 
    $faculted=$row['id'];
    $named=$row['name'];
   echo '<option value= "'.$row['id'].'">'.$row['name'].'</option>';
 }
   }else{
     //echo '<option value="">dept not found </option>';
   }
 ?>  ");
            break;
      
        default:
            $("#dept").html("<option value=''>Select faculty*</option>");
     }
  });
});
</script>

   <div class="row">  
     <div class="col-md-6"> 
       <div class="form-group">  
         <label for="form_message">PROGRAMME</label> 
        <select id="dept"  name="dept" class="form-control col-lg-12 col-md-12 col-sm-4 col-xs-12" style=" height:50px;">
       <option value="">Select dept first </option>
      
       </select> 
      </div>
   </div> 
 </div>
   <br/>
 
 
 <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="form_message">LEVEL</label>
                         <select id="level"  name="level" class="form-control col-lg-12 col-md-12 col-sm-4 col-xs-12" style=" height:50px;">
                            <option value="">Select programme first </option>
                            </select>
                    <div class="help-block with-errors"></div>
                </div>
            </div>
  </div>  <br/>
  <div class="row">          
              <div class="col-md-6"> 
                    <div class="form-group">  
                         <label for="form_message">SEMESTER</label> 
                             <select id="semester"  name="semester" class="form-control col-lg-12 col-md-12 col-sm-4 col-xs-12" style=" height:50px;">
                    <option value="">Select level first </option>
                          </select> 
                         </div>
                </div>
        </div>
           <br/> 
        <div class="row">          
              <div class="col-md-12"> 
                    <div class="form-group">  
                         <label for="form_message">COURSES</label> 
                             <select id="course"  name="course[]" multiple="multiple" class="form-control col-lg-12 col-md-12 col-sm-4 col-xs-12" style=" height:300px;">
                    <option value="">Select semester first </option>
                          </select> 
                         </div>
                </div>
        </div> <br/>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <input type="submit" name="submit"  value="REGISTER COURSE(S)" style=" height:50px;" class="btn btn-success btn-send">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
        </div>
 </form> 
 </div>
 </div> 
   <footer class="footer-wrap-layout1">
                    <div class="copyright">© Copyrights <a href="#">Depotter</a> 2021. All rights reserved. Designed by <a
                            href="#">Agertech Solutions and Consult</a></div>
                </footer>
                <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
   
  
   <script type="text/javascrpt" src="bootstrap/js/bootstrap.js"></script>
     <script type="text/javascrpt" src="js/jquery-3.3.1.js"></script>  
     <script type="text/javascrpt" src="js/jquery-3.3.1.min.js"></script>
    <script type="text/javascrpt" src="flexslider/jquery.flexslider.js"></script> 
    
     <script src="assets/js/jquery-1.11.1.js"></script>
    <script src="assets/js/bootstrap.js"></script>      
     <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB1JdygIDgHWHcRqf9p08O1STb-AB7zRco&callback=initMap"
  type="text/javascript"></script>
  
   <link rel="stylesheet" type="text/css" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/css/bootstrap-datepicker.min.css"> 
   <link rel="stylesheet" type="text/css" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/css/bootstrap-datepicker3.min.css"> 
   <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/js/bootstrap-datepicker.min.js"></script> 
   <script src="lightbox2/lightbox.min.js"></script> 

<script language="javascript" type="text/javascript">
        function printDiv(divID) {
            //Get the HTML of div
            var divElements = document.getElementById(divID).innerHTML;
            //Get the HTML of whole page
            var oldPage = document.body.innerHTML;

            //Reset the page's HTML with div's HTML only
            document.body.innerHTML = 
              "<html><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8"><title></title></head><body>" + 
              divElements + "</body>";

            //Print Page
            window.print();

            //Restore orignal HTML
            document.body.innerHTML = oldPage;

          
        }
    </script>
</body>
</html>