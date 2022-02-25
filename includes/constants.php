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
    <!-- Data Table csss -->
    <link rel="stylesheet" href="csss/jquery.dataTables.min.css">
    <!-- Custom csss -->
    <link rel="stylesheet" href="style.css">
    <!-- Modernize jsss -->
    <script src="jsss/modernizr-3.6.0.min.js"></script>
</head>

<body>
    <!-- Preloader Start Here -->
    <div id="preloader"></div>


<?php include "config.php";$select="SELECT * FROM application WHERE matricNo='".$_SESSION['matricNo']."'"; 
$result=mysqli_query($connection, $select); if(mysqli_num_rows($result) > 0){while($row=mysqli_fetch_assoc($result)){ 
    $genderJ=$row['dob'];$marital=$row['maritalStatus'];$admissionstatus=$row['admissionstatus'];$address=$row['address']
    ;$firstchoice=$row['firstchoice'];$secondchoice=$row['secondchoice'];$phone=$row['phone'];$faculty=$row['faculty'];
     $department=$row['department']; $level=$row['level']; $sfuulname=$row['fullname']; $sponsoraddress=$row['sponsoraddress'];
      $depart=$row['department'];$sponsorphone=$row['sponsorphone'];$gender= $row['gender']; $matricNo=$row['matricNo'];
      $pasword=$row['pasword']; $state= $row['state'];$religion= $row['religion'];$balance3=$row['balance_three'];
      $balance4=$row['balance_four'];$fee3=$row['fee_three'];$fee4=$row['fee_four'];$paymode4=$row['paymode_four'];
      $paymode3=$row['paymode_three'];$paymode2=$row['paymode_two'];$paymode=$row['paymode'];$balance2=$row['balance_two'];
      $balance=$row['balance'];$fee2=$row['fee_two'];$fee=$row['fee'];$acceptance=$row['acceptancefee'];$transid=$row['transid']
      ;$amount=$row['amount'];$invoice=$row['invoice']; $passport=$row['picture'];$id = $row['appId'];$state=$row['state'];
      $local=$row['lga'];$fullnames=$row['fullname']; $matricno=$row['matricNo'];$sponsoraddress=$row['sponsoraddress'];
      $sponsorphone=$row['sponsorphone'];$email_val =$row['email'];$firstnameS = $row['surname']; $middle = $row['middlename']
      ;$firstname = $firstnameS. ' ' .$middle; $date=$row['date']; $lastname = $row['lastname'];$score = $row['score'];
      $fullname = $firstnameS. ' ' .$middle. ' ' .$lastname;}}?>