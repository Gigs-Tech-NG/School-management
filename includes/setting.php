<?php
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
             $marital=$row['maritalStatus'];
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
              $pasword=$row['pasword'];
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
           $firstname = $firstnameS. ' ' .$middle;
        }
    }


     ?>
    <?php
	function validate(){
    if(isset($_POST['edit']))
    {
        
    //get form data
      include "config.php";
      $erro="";
    $matricNo=mysqli_real_escape_string($connection,$_POST['matric']);
    $phone=mysqli_real_escape_string($connection,$_POST['phone']); 
    $relationship=mysqli_real_escape_string($connection,$_POST['relationship']); 
    $email=mysqli_real_escape_string($connection,$_POST['email']);
    $pasword=md5(mysqli_real_escape_string($connection,$_POST['pass']));
   $target_dir="img/";
     $image=($_FILES["file"]["name"]);
       $target_file = $target_dir . basename($_FILES["file"]["name"]);

           $extension  = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    //valid file extension
   $extension_arr= array('png', 'jpg', 'jpeg','jfif');
    //check
   if(!in_array($extension,$extension_arr)){
   return "file not supported";
   }
       //if file alrady exist
       if(file_exists($target_file)){
        //   return "Image already exit";
        }  
    
   // if( $fullname=="" || $phone=="" || $usernam=="" || $pass=="" || $email=="" || $confirm_pass==""){
   // $erro= "please fill out all fields";
   // }
         //check if matric NO has already been taken
        $checkusermatric=mysqli_query($connection,"SELECT * FROM application WHERE matricNo='$matricNo'");
       if(mysqli_num_rows($checkusermatric) >= 1){
         return "Matric Number exit";
          }
                   
if (!preg_match("/^[a-zA-Z-' ]*$/", $fullname )) {
 return "Only letters and white space allowed";
  }
  
                
  include "config.php";
                $sql="update application set matricNo='$matricNo',maritalStatus='$relationship',pasword='$pasword',picture='$image',phone='$phone' WHERE matricNo='".$_SESSION['matricNo']."'";
                $result=mysqli_query($connection,$sql);
                if(!$result){
                    die("failed").mysqli_connect_error();
                }
      
           else{
            if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file))
            {
                   return "Updated"; 
            }
                    
            else
            {
              
                return  "Sorry, there was an error uploading your file"; 
            }
    
        }
        }
  }   ?>
  
   <link rel="stylesheet" href="csss/normalize.css">
    <!-- Main csss -->
    <link rel="stylesheet" href="csss/main.css">
    <!-- Bootstrap csss -->
    <link rel="stylesheet" href="csss/bootstrap.min.css">
    <!-- Fontawesome csss -->
    <link rel="stylesheet" href="csss/all.min.css">
    <!-- Flaticon csss -->
    <link rel="stylesheet" href="fonts/flaticon.css">
    <!-- Animate csss -->
    <link rel="stylesheet" href="csss/animate.min.css">
    <!-- Select 2 csss -->
    <link rel="stylesheet" href="csss/select2.min.css">
    <!-- Date Picker csss -->
    <link rel="stylesheet" href="csss/datepicker.min.css">
    <!-- Custom csss -->
    <link rel="stylesheet" href="style.css">
    <!-- Modernize jsss -->
    <script src="jsss/modernizr-3.6.0.min.js"></script>
    
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

   <script>
$(document).ready(function() {
	$('#state').change(function(){
		var state= $(this).val();
		$("#lga"wink.load("applicantform.php",{state:state, ajax: 'true'});
	});
});
</script> 
    
    
    
    
    
</head><body>
    <!-- Preloader Start Here -->
    <div id="preloader"></div>