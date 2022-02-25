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
            $levels=$row['level'];
            $balance=$row['balance'];
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
      <!-- Normalize csss -->
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
    
    
    
    
    
</head>

       <body>
    <!-- Preloader Start Here -->
    <div id="preloader"></div>