<?php
	include('config.php');
    if(isset($_POST['submit'])){
        $email=$_POST['email'];
    	$userid = $_GET['id'];
        $bunk = $_POST['bunk'];  
   $sqlee=mysqli_query($connection,"INSERT INTO hon(email,id) VALUES('$email','$userid')");
   $queryy =mysqli_query($connection, "UPDATE application set rnumb='$userid' WHERE email='$email'" );
   $all = $sqlee && $queryy;
  
   if(!$sqlee){
    echo "not inserted " ."<br>";
   }else{
                       // echo"inserted "."<br>";
                    }
                    if(!$queryy){
                        echo "not updated "."<br>";
                    }else{
                       // echo "updated "."<br>";
                    }
                   
    
   	$all = $sqlee && $queryy;
   
    
                   if($all== TRUE){
                    //if('($roww["bunk1"]|| $roww["bunk2"] || $roww["bunk3"] || $roww["bunk4"])=="chosen" where id ="$roww["id"]" '){
                          // echo "bunk already chosen";
                        
   // }else{
                    //echo "all is true";

                                               	
    					include('config.php');
                        $idm=$_GET['id'];
    					$qu=mysqli_query($connection,"SELECT * FROM hostel WHERE id='$idm'");
    					while($rowe=mysqli_fetch_array($qu)){
    					   $me=$rowe['id'];
                           //echo $me;
    						
            if ($bunk=="bunk1"){
           // echo   
            $dell=mysqli_query($connection,"update hostel set bunk1 = 'chosen' where id='$me'");
                if($dell){
                    echo "bunk1 chosen sucessfully "."<br>";
               }
                } 
                  elseif ($bunk=="bunk2"){
                $delll=mysqli_query($connection,"update hostel set bunk2 = 'chosen' where id='$me'");
                if($delll){
                    echo "bunk2 chosen sucessfully "."<br>";
                }
            } 
              elseif ($bunk=="bunk3"){
                $dellll=mysqli_query($connection,"update hostel set bunk3 = 'chosen' where id='$me'");
                if($dellll){
                    echo "bunk3 chosen sucessfully "."<br>";
                }
            } 
              elseif ($bunk=="bunk4"){
                $delllll=mysqli_query($connection,"update hostel set bunk4 = 'chosen' where id='$me'");
                if($delllll){
                    echo "bunk4 chosen sucessfully "."<br>";
                }
            } else{
                if(!$dell){
                    echo "Error:".$dell."<br>".mysqli_error($connection);
                    //echo "bunk 1 not deleted";
                }elseif(!$delll){
                    echo "Error:".$delll."<br>".mysqli_error($connection);
                }elseif(!$dellll){
                    echo "Error:".$dellll."<br>".mysqli_error($connection);
                }elseif(!$delllll){
                    echo "Error:".$delllll."<br>".mysqli_error($connection);
                }elseif('$roww["bunk1"]&&$roww["bunk2"] && $roww["bunk3"]&& $roww["bunk4"]=="chosen" where id ="$me" '){
                            $delete_room = mysqli_query($connection,"delete from hostel Where id = '$me'");
                            if($delete_room){
                                echo "room altered";
                            }
                        }
            }
            }
            }
           // }  
           }
?>
