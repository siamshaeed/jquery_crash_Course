<?php 
if (isset($_GET['division'])) {
	$id=$_GET['division'];
	//echo $id;
}
?>

<?php 
$db= new mysqli("localhost", "root", "", "mysqliquery"); 
$sql = "SELECT * FROM districts WHERE div_id = '$id' ";

$data = $db->query($sql);
?>
<option value="" hidden>Select</option>
<?php while($rows = $data->fetch_assoc() ){ ?>

	<option value="<?php echo $rows['dist_id']; ?>"><?php echo $rows['dist_name']; ?></option>

<?php } ?>


 