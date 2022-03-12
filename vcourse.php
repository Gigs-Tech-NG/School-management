<?php
session_start();

$_SESSION['timeout'] = time(); 
if (time()-$_SESSION['timeout'] > 1800){
   unset($_SESSION['timeout']);
  // echo "<script> location.href='forget.php' <script>";
}
if(( $_SESSION['LOGGED']) !="true"){
    echo"<script> location.href='stafflogin.php'  </script>";
}

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">

  <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

    <title>De Potter College</title>
     <link rel="icon" type="image/png" href="images/logo.png"> 
     <link rel="stylesheet" type="text/css" href="studentstyle.css"> 
      <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.css" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput-typeahead.css" />
  <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.min.js" crossorigin="anonymous"></script>
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
      
     <script type="text/javascript" src="jquery/jquery-3.3.1.min.js"></script>
      <script type="text/javascript" src="jquery/jquery-3.3.1.js"></script> 
       <script src="http://code.jquery.com/jquery-2.0.3.min.js"></script> 
  <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
  
      <!--deleting multiple rows--> 
   <script>
function show_confirm22()
    {
    var r=confirm("The selected entry will be parmanently deleted!");
    if (r==true)
    {return true;
    }
    else
    {
    return false;
    }
    }
</script>
<!--check box selection-->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"> </script>
<script language="javascript">
    $(function(){
    // add multiple select / deselect functionality
    $("#selectall").click(function () {
          $('.case').attr('checked', this.checked);
    });
    // if all checkbox are selected, check the selectall checkbox
    // and viceversa
    $(".case").click(function(){

        if($(".case").length == $(".case:checked").length) {
            $("#selectall").attr("checked", "checked");
        } else {
            $("#selectall").removeAttr("checked");
        }

    });
});
</script>
<!--check box selection-->
  
  
   
</head> 
<body>
    <?php include("includes/functions.php"); ?>
<h3 style="color:red;text-align:center">CLICK ON ANY DATA TO EDIT</h3>
 
   </div>
   <table class="table table-bordered table-striped">
    <thead>
     <tr align="center">
      <th width="8%">s/n</th>
      <th width="12%">COURSE TITLE</th>  
       <th width="26%">COURSE NAME</th>
       <th width="8%">CREDIT UNIT</th>
       
    </thead>
    <tbody id="student_data">
    </tbody>
   </table>                                                               
     </div>
         </div>
        </div>         
      <?php include "rdept.php";?>
    </div>  
             </div>
 <!-- <div class="userfooter"> @ 2018 De Potter College of Health Tech. </div> -->
    <script >
        function toggleSidebar(){
           document.getElementById("menus").classList.toggle('active'); 
        }
    </script>
       
     <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
   
     <script src="assets/js/jquery-1.11.1.js"></script>
    <script src="assets/js/bootstrap.js"></script>      
     
  
  <title>Live Table Data Edit Delete using Tabledit Plugin in PHP</title>  
            <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet">
    <script src="http://code.jquery.com/jquery-2.0.3.min.js"></script> 
 
  <script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
  <link   href="bootstrap3-editable/css/bootstrap-editable.css" rel="stylesheet">
  <script src="bootstrap3-editable/js/bootstrap-editable.min.js"></script>
  <script src="jquery-tabledit-master/jquery.tabledit.min.js"></script>
  <script src="jquery-tabledit-master/jquery.tabledit.js"></script> 
    <script src="jquery-tabledit-master/jquery.tabledit.min.js"></script>
  <script  src="jquery-tabledit-master/jquery.tabledit.js"></script>
 
      
     <script type="text/javascript" src="jquery/jquery-3.3.1.min.js"></script>
      <script type="text/javascript" src="jquery/jquery-3.3.1.js"></script> 
       <script src="http://code.jquery.com/jquery-2.0.3.min.js"></script> 
  <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.1/bootstrap3-editable/js/bootstrap-editable.js"></script>
  <script>
function myFunction() {
    window.print();
}

function inputValidation(inputTxt) {
  var regx =/^[a-zA-Z\s]+$/; 
  var  textField=document.getElementById("textField");
  if(inputTxt.value !=''){
      
     if(inputTxt.value.match(regx)){
         
        textField.textContent='Correct';
      textField.style.color='green';
      
      }else{
        textField.textContent='Invalid input: only letters and white space are allowed';
    textField.style.color='red';
      }
   
   }else{
      textField.textContent='Please enter your Course of study';
    textField.style.color='red';
   } 
}

function disciplineValidation(inputTxt) {
  var regx = /^[a-zA-Z\s]+$/; 
  var  discipline=document.getElementById("discipline");
  if(inputTxt.value !=''){
     if(inputTxt.value.match(regx)){
         
        discipline.textContent='Correct';
      discipline.style.color='green';
      
      }else{
        discipline.textContent='Invalid input: only letters and white space are allowed';
    discipline.style.color='red';
      } 
   }else{
      discipline.textContent='Please enter your full name';
    discipline.style.color='red';
   } 
}

function matricValidation(inputTxt){
     var  matric=document.getElementById("matric"); 
     if(inputTxt.value !=''){
        matric.textContent='correct';
    matric.style.color='green';  
     }else{
      matric.textContent='Please enter your  matric no';
    matric.style.color='red';
   }
}
function sessionValidation(inputTxt){
 var  session=document.getElementById("session"); 
     if(inputTxt.value !=0){
        session.textContent='correct';
    session.style.color='green';  
     }else{
      session.textContent='Please enter current session';
    session.style.color='red';
   }
}

function facultyValidation(inputTxt){
 var  faculty=document.getElementById("faculty"); 
     if(inputTxt.value !=0){
        faculty.textContent='correct';
    faculty.style.color='green';  
     }else{
      faculty.textContent='Please enter your faculty';
    faculty.style.color='red';
   }
}
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
       $('#dept').html('<option value="">Select faculty first </option>');
   }
});
}); 
</script>



<script>
$(document).ready(function(){
 var count = 1;
 $('#add').click(function(){
  count = count + 1;
  var html_code = "<tr id='row"+count+"'>";
   html_code += "<td contenteditable='true' class='item_name'></td>";
   html_code += "<td><button type='button' name='remove' data-row='row"+count+"' class='btn btn-danger btn-xs remove'>-</button></td>";   
   html_code += "</tr>";  
   $('#crud_table').append(html_code);
 });
 
 $(document).on('click', '.remove', function(){
  var delete_row = $(this).data("row");
  $('#' + delete_row).remove();
 });
 
 $('#save').click(function(){
  var item_name = [];
  $('.item_name').each(function(){
   item_name.push($(this).text());
  });
  $.ajax({
   url:"insertfaculty.php",
   method:"POST",
   data:{item_name:item_name},
   success:function(data){
    alert(data);
    $("td[contentEditable='true']").text("");
    for(var i=2; i<= count; i++)
    {
     $('tr#'+i+'').remove();
    }
    fetch_item_data();
   }
  });
 });
 
 function fetch_item_data()
 {
  $.ajax({
   url:"fetch.php",
   method:"POST",
   success:function(data)
   {
    $('#inserted_item_data').html(data);
   }
  })
 }
 fetch_item_data();
 
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
   <script type='text/javascript' src='touchHover.js'></script>
   
   
