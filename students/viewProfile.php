<?php ob_start(); ?> 
<?php include("includes/bkheader.php"); ?>
<?php include("includes/connection.php"); ?>
 <?php include("includes/functions.php"); ?> 
 <?php include("includes/studenthead.php"); ?>
 <?php include("includes/studentMenu.php"); ?>
      
               <img src="images/resulheader.png" class="img-responsive" id="resultsheet"  >
                            <h4 id="resulttitle">My Profile</h4>    

       
                 <table  id="studentresultdetail"> 
                 <tr>
                   <td class='tblwidth'> 
                    <?php 
    $matricno=$_SESSION['matricno'];
    $select_profile="SELECT * FROM students WHERE matricno='$matricno'";
    $result=mysqli_query($connection,$select_profile);
    while($data=mysqli_fetch_array($result)){
    $picture=$data['picture']; 
    echo "<br/>";
 // echo "Welcome: ". $name=$data['firstname']."<br/>";
  echo "<img src='$picture' alt=\"My profile picture\">";         
 }
?></td>
                 </tr>
        <tr> 
        <br/><br/>
<br/><br/> 
        <td class='tblwidth'>
        
        <?php 
   $result=mysqli_query($connection,"select stdId, states.name as statename, locals.local_name  as lgname, students.* FROM students
join states on states.state_id= students.state join locals on locals.local_id=students.lga 
 where  students.matricno='".$_SESSION['matricno']."' ");        
    if(!$result){
     $failure = "Information not matched";
    }else{
    while($data=mysqli_fetch_array($result)){
    //$picture=$data['picture'];
      echo "<P>".
        "<span class='stddetals'>FULL NAME: </span>"."<br/>".
        "<span class='stddetals'>MATRIC.NO: </span>  "."<br/>".
        "<span class='stddetals'>DEPARTMENT:</span>  "."<br/>".  
       "<span class='stddetals'>PROGRAMME:</span>  "."<br/>".
       "<span class='stddetals'>LEVEL: </span>  "."<br/>".
       
       "<span class='stddetals'>EMAIL ADDRESS:  </span>"."<br/>".
       "<span class='stddetals'>PHONE NUMBER: </span>  "."<br/>".
       "<span class='stddetals'>CONTACT ADDRESS: </span>  "."<br/>".
        "<span class='stddetals'>STATE: </span>  "."<br/>".
         "<span class='stddetals'>LGA: </span>  "."<br/>".  
          "<span class='stddetals'>GENDER: </span>  "."<br/>".  
          "<span class='stddetals'>DATE OF BIRTH: </span>  "."<br/>".
           "<span class='stddetals'>RELIGION: </span>  "."<br/>".
           "<span class='stddetals'>MARITAL STATUS: </span>  "."<br/>".
           "<span class='stddetals'>NEXT OF KIN NAME: </span>  "."<br/>". 
            "<span class='stddetals'>NEXT OF KIN PHONE: </span>  "."<br/>".
            "<span class='stddetals'>NEXT OF KIN ADDRESS: </span>  "."<br/>". 
            
      "</P>";
      echo"  </td> "; 
      echo"  <td class='tblwidth'> ". 
         "<span class='stddetals' >" .$name=$data['firstname'].   "    ".$name=$data['middlename'].   "    ". $name=$data['lastname']."</span><br/>".
        " <span class='stddetals'>" .$name=$data['matricno']."</span><br/>".
         " <span class='stddetals'>" .$name=$data['faculty']."</span><br/>".  
       " <span class='stddetals'>" .$name=$data['dept']."</span><br/>".
       " <span class='stddetals'>" .$name=$data['level']."</span><br/>".
        
       "<span class='stddetals'>" .$name=$data['email']."</span><br/>". 
       " <span class='stddetals'>" .$name=$data['phone']."</span><br/>".
       " <span class='stddetals'>" .$name=$data['stdaddress']."</span><br/>".   
       "<span class='stddetals'>" .$name=$data['statename']."</span><br/>".
       "<span class='stddetals'>" .$name=$data['lgname']."</span><br/>". 
       "<span class='stddetals'>" .$name=$data['gender']."</span><br/>".
       "<span class='stddetals'>" .$name=$data['dob']."</span><br/>". 
       "<span class='stddetals'>" .$name=$data['religion']."</span><br/>". 
       "<span class='stddetals'>" .$name=$data['maritalstatus']."</span><br/>".
       "<span class='stddetals'>" .$name=$data['nokname']."</span><br/>". 
        "<span class='stddetals'>" .$name=$data['nokphone']."</span><br/>". 
        "<span class='stddetals'>" .$name=$data['nokaddress']."</span><br/>". 
     " </td> ";
    
    echo "<br/>";
 }
}
 ?>  

 </tr> 
  </table> 
  
    <br/><br/>
       
  
                      <?php 
    if(!empty($failure)){
     echo "<span class='btn btn-warning'>" .$failure."</span>"; 
    }
     if(!empty($success)){
     } 
     ?>
      
      <div class="row">  
     <div class="col-md-6"> 
       <div class="form-group">  
        <input type="button" value="Print" onclick="javascript:printDiv('print')" />   
      </div>
   </div> 
  
 </div> 
                </div>
        </div> 
        
         </div>
        
  <?php require("includes/footer.php"); ?>