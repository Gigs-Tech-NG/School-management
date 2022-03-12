
<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
   
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
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
  
<style>

 body{
        font-family: Arail, sans-serif;
    }
    /* Formatting search box */
    .search-box{
        width: 300px;
        position: relative;
        display: inline-block;
        font-size: 14px;
    }
    .search-box input[type="text"]{
        height: 32px;
        padding: ;
        border: 1px solid #CCCCCC;
        font-size: 14px;
    }
    .result{
        position: absolute;        
        z-index: 999;
        top:%;
        left: 0;
    }
    .search-box input[type="text"], .result{
        width: 50%;
        box-sizing: border-box;
    }
    /* Formatting result items */
    .result p{
        margin: 0;
        padding: ;
        border: 1px solid #CCCCCC;
        border-top: none;
        cursor: pointer;
    }
    .result p:hover{
        background: #f2f2f2;
    }
</style>





</head>
<body>

        <input type="text" autocomplete="off" placeholder="Search..." id="category" />
       <div class="result">
       
     </div>
	<!--table id="items">
		
		  <tr>
		      <th>Student Name</th>
		      
		      <th>Fixed Amount Paying</th>
		      <th>Student</th>
		      <th>Price</th>
		  </tr>
		  
		  <tr class="item-row">
        
 <div class="delete-wpr"><a class="delete" href="javascript:;"  title="Remove row">X</a></div>
 <form method="POST" action="recipt2nd.php" >
       <td class="item-name"  > <input type="text" autocomplete="off" placeholder="Student Name" name="name" required=""/></td>
       
    </div>
    
		      
		      
		      <td ><input type='tel' name='paymode'disabled="" value="#20,000" style="width: 100%;" class="cost" required=""/></td>
		      <td> <input type='number' placeholder="2ND Term" disabled="" class="qty" style="width: 100%;"/> </td>
		      <td><span class="price">#0.00</span></td>
		  </tr>
		  
		  
          	
                
                
                	  <tr id="hiderow">
    
		  </tr>
		  
		  <tr>
		      <td colspan="2" class="blank"> </td>
		      <td colspan="2" class="total-line">Subtotal</td>
		      <td class="total-value"><div id="subtotal">#0.00</div></td>
              
		  </tr>
		  <tr>

		      <td colspan="2" class="blank"> </td>
		      <td colspan="2" class="total-line">Total</td>
		      <td class="total-value"><div id="total">#0.00</div></td>
		  </tr>
		  <tr>
		      <td colspan="2" class="blank">  Amount-paid
    
</td>
		     <td class="total-value"><input type="number"  placeholder ="e.g 10000" id="paid" name="fee" required=""/></td>
             	     
		  </tr>
		  <tr>
		      <td colspan="2" class="blank"> </td>
		      <td colspan="2" class="total-line balance">Balance Due</td>
		      <td class="total-value balance"><div class="due"> #0.00</div></td>
		  </tr>
		
		</table>

		<div id="terms">
		  
		  
	
	
	</div>
		<!--input type="submit" name="submit" value="PAYMENT" />
                </form-->

 
<p><?php 
    if(!empty($_SESSION['record'])){
        echo ($_SESSION['record']);
        unset($_SESSION['record']);
    }
?></p>


</body>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

<script>
$(document).ready(function(){
    $('#category').on("keyup input", function(){
        /* Get input value on change */
        var inputVal = $(this).val();
        var resultDropdown = $(this).siblings(".result");
        if(inputVal.length){
            $.get("backeneded.php", {term: inputVal}).done(function(data){
                // Display the returned data in browser
                resultDropdown.html(data);
            });
        } else{
            resultDropdown.empty();
        }
    });
    
    // Set search input value on click of result item
    $(document).on("click", ".result p", function(){
        $(this).parents(".search-box").find('input[type="text"]').val($(this).text());
        $(this).parent(".result").empty();
    });
});
</script>
</html>



