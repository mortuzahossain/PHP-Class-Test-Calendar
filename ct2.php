<!DOCTYPE html>
<html>
<head>
	<title>CT Routine</title>
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>


<div class="header container text-center">
	<div class="row">
		<h1>Class Routine</h1>
	</div>
</div>

<div class="container">
	<ul class="nav nav-pills">
	  <li ><a href="index.php">CT1</a></li>
	  <li class="active"><a href="ct2.php">CT2</a></li>
	  <li ><a href="ct3.php">CT3</a></li>
	  <li ><a href="ct4.php">CT4</a></li>
	</ul>
</div>


<?php

include('db_connect.php');

$table_name = "ct2";
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

<div class="container show-data">
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
				<td><a class="btn btn-danger" href="update.php?id=<?php echo $key['id']; ?>&db_name=<?php echo $table_name; ?>">Edit</a></td>
			</tr>			
<?php } } ?>


		</table>
	</div>
</div>

</body>
</html>