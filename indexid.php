<?php 
include('configuration.php'); 
$query_parent = mysqli_query($conn,"SELECT appId, level  FROM application group by level") or die("Query failed: ".mysqli_error());
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Dependent DropDown List</title>
<script type="text/javascript" src="js_drop/jquery.js"></script>
<script type="text/javascript">
$(document).ready(function() {
    
	$("#parent_cat").change(function() {
		$(this).after('<div id="loader"><img src="img_drop/loading.gif" alt="loading subcategory" /></div>');
		$.get('loadsubcat.php?parent_cat=' + $(this).val(), function(data) {
			$("#sub_cat").html(data);
			$('#loader').slideUp(200, function() {
				$(this).remove();
			});
		});	
    });

});
</script>
</head>

<body>
<form method="get">
	<label for="category">Parent Category</label>
    <select name="parent_cat" id="parent_cat">
    <option>select level*</option>
        <?php while($row = mysqli_fetch_array($query_parent)): ?>
        <option value="<?php echo $row['level']; ?>"><?php echo $row['level']; ?></option>
        <?php endwhile; ?>
    </select>
    <br/><br/>
  
    <label>Sub Category</label>
    <select name="sub_cat" id="sub_cat"><option>select level first*</option></select>
    
</form>
</body>
</html>
