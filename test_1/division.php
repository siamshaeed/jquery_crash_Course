<?php $db= new mysqli("localhost", "root", "", "mysqliquery"); 

$sql = "SELECT * FROM division";
$data=$db->query($sql);
?>

<center style="padding-top: 50px; width: 30%; height:180px; background: gray; margin: 0px auto; font-size: 20px">
<form>
	
	Division: <select name="div_id" id="division">
		<option value="" hidden>Select</option>
		<?php 
		while ($rows= $data->fetch_assoc()) {
		?>

			<option value="<?php echo $rows['div_id']; ?>"><?php echo $rows['divname']; ?></option>

		<?php
	}
		?>
		 </select>

		 	Districts: <select name="dist_id" id="districts">
			<option value="" hidden>Select</option>

		</select>

		
		 <!-- 	Towns: <select name="town_id " id="towns">
			<option value="" hidden>Select</option>
		</select>
 -->
		
<br>
<!-- <input type="button" id="btn" value="Submit"> -->

	
</form>
</center>

<div id="town_info">
	
</div>

<script src="https://code.jquery.com/jquery-3.2.1.min.js" ></script>

<script>
	$(document).ready(function(){
		$("#division").change(function(){
			var value = $("#division").val();
			$.get('districts.php', 
				{division:value}, function(data){
          $("#districts").html(data);
        });
		});

		$("#districts").change(function(){
			var value = $("#districts").val();
			$.get('twon.php', 
				{districts:value}, function(data){
          $("#towns").html(data);
        });
		});

		$("#towns").change(function(){
			var town_info = $("#towns").val();
			$.get('town_info.php',
			{info:town_info}, function(data){
				$("#town_info").html(data);

			});
		});

	});
</script>


