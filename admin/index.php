<?php include 'db_connect.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Add Data Part</title>
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="jquery-1.12.0.min.js"></script>
</head>
<body>

<div class="header container text-center">
	<div class="row">
		<h1>Add Data</h1>
	</div>
</div>

<?php

$db_table 		= "";
$course_code 	= "";
$course_name 	= "";
$exam_date 		= "";

if (isset($_POST['add_data'])) {
	$db_table 		= $_POST['ctname'];
	$course_code 	= $_POST['code'];
	$course_name 	= $_POST['name'];
	$exam_date 		= $_POST['date'];

	if (!empty($db_table) && !empty($course_code) && !empty($course_name) && !empty($exam_date)) {
		$insert_qury = "INSERT INTO $db_table (coursecode,coursename,examdate) VALUES ('$course_code','$course_name','$exam_date')";
		if (mysqli_query($con,$insert_qury)) {
			header('Location: index.php');
		} else {
			echo "Something Wrong !!! Please Try Again...";
		}
	} else {
		echo "Please Fill All The Input and try Again";
	}
}

?>


<div class="show-data container">
	<form class="form-horizontal col-md-12" action="" method="post">
	  	<div class="form-group">

	  	<label for="inputEmail3" class="col-sm-2 control-label"></label>
		    <div class="col-sm-7">
		      <select class="form-control" name="ctname" onChange="getCts(this.value);" id="ct-list">
			  	<option value="ct1">CT - 1</option>
			  	<option value="ct2">CT - 2</option>
			  	<option value="ct3">CT - 3</option>
			  	<option value="ct4">CT - 4</option>
			</select>
		    </div>
		</div>
		  <div class="form-group">
		    <label for="inputEmail3" class="col-sm-2 control-label">Couser Code</label>
		    <div class="col-sm-7">
		      <input type="text" class="form-control" value="<?php echo $course_code; ?>" name="code">
		    </div>
		  </div>
		  
		  <div class="form-group">
		    <label for="inputEmail3" class="col-sm-2 control-label">Couser Name</label>
		    <div class="col-sm-7">
		      <input type="text" class="form-control" value="<?php echo $course_name; ?>" name="name">
		    </div>
		  </div>

		  <div class="form-group">
		    <label for="inputEmail3" class="col-sm-2 control-label">Exam Date</label>
		    <div class="col-sm-7">
		      <input type="date" class="form-control" name="date" value="<?php echo $exam_date; ?>">
		    </div>
		  </div>

		  <div class="form-group">
		    <div class="col-sm-offset-2 col-sm-10">
		      <button type="submit" class="btn btn-default" name="add_data" >Add New</button>
		    </div>
		  </div>
	</form>
</div>
<?php

$table_name = "ct1";
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
<div id="show" class="container text-center show-data">
	<!-- Default load CT1 Data -->
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
</div>

<!-- Showing Data -->
<script>
    function getCts(val) {
        //alert(val);
        $.ajax({
            type: "POST",
            url: "show.php",
            data:'ct_id='+val,
            success: function(data){
                $("#show").html(data);
            }
        });

    }
</script>


</body>
</html>