<?php
include 'db_connect.php';
if (!empty($_POST["ct_id"])) {
	# Show the data Which is Selected
	$ct_id = $_POST["ct_id"];

}

?>

<?php
$table_name = $ct_id;
$show = "SELECT * FROM ".$table_name;

$result = mysqli_query($con,$show);
$cts = array();

while ($row = mysqli_fetch_assoc($result)) {
	$cts[] = $row;
}

$data = mysqli_num_rows($result);

//print_r($cts);
$serial_no = 0;

?>
	<div class="row">
		<table class="table table-condensed">
			
			<tr  class="info">
				<td>#</td>
				<td>Course Code</td>
				<td>Course Name</td>
				<td>Date</td>
				<td>Update</td>
			</tr>

<?php if($data > 0) { ?>
<?php foreach ($cts as $key) { $serial_no++; ?>
	
			<tr>
				<td><?php echo $serial_no; ?></td>
				<td><?php echo $key['coursecode']; ?></td>
				<td><?php echo $key['coursename']; ?></td>
				<td><?php echo $key['examdate']; ?></td>
				<td><a class="btn btn-danger" href="update.php?id=<?php echo $key['id']; ?>&db_name=<?php echo $table_name; ?>&coursecode=<?php echo $key['coursecode']; ?>&coursename=<?php echo $key['coursename']; ?>&examdate=<?php echo $key['examdate']; ?>">Edit</a></td>
			</tr>			
<?php } } ?>


		</table>
	</div>