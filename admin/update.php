<?php

	include('db_connect.php');

	$id = $_GET['id'];
	$db_name = $_GET['db_name'];
	$coursecode = $_GET['coursecode'];
	$coursename = $_GET['coursename'];
	$examdate = $_GET['examdate'];

?>
<!DOCTYPE html>
<html>
<head>
	<title>Update Page</title>
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div class="header container text-center">
	<div class="row">
		<h1>Class Routine</h1>
	</div>
</div>

<div class="show-data container">
	<form class="form-horizontal col-md-12" action="" method="post">
	  <div class="form-group">
	    <label for="inputEmail3" class="col-sm-2 control-label">Couser Code</label>
	    <div class="col-sm-7">
	      <input type="text" class="form-control" value="<?php echo $coursecode ?>" name="code">
	    </div>
	  </div>
	  
	  <div class="form-group">
	    <label for="inputEmail3" class="col-sm-2 control-label">Couser Name</label>
	    <div class="col-sm-7">
	      <input type="text" class="form-control" value="<?php echo $coursename ?>" name="name">
	    </div>
	  </div>

	  <div class="form-group">
	    <label for="inputEmail3" class="col-sm-2 control-label">Exam Date</label>
	    <div class="col-sm-7">
	      <input type="date" class="form-control" name="date" value="<?php echo $examdate; ?>">
	    </div>
	  </div>

	  <div class="form-group">
	    <div class="col-sm-offset-2 col-sm-10">
	      <button type="submit" class="btn btn-default" name="update" >Update</button>
	      <button type="submit" class="btn btn-danger" name="delete" >Delete</button>

	    </div>
	  </div>
	</form>
</div>


	<?php


		if (isset($_POST['update'])) {
			$course_code = $_POST['code'];
			$course_name = $_POST['name'];
			$exam_date = $_POST['date'];
		
			if (!empty($course_code) || !empty($course_name) || !empty($exam_date)) {
				#Do Something
				$update_query = "UPDATE $db_name SET coursecode='$course_code',coursename='$course_name',examdate='$exam_date' WHERE id = $id";
				//cho $update_query;
				if (mysqli_query($con,$update_query)) {
					header('Location: index.php');
				} else {
					echo "Something Wrong !!! Please Try Again...";
				}
			} else {
				#Show Worning
				echo "<div class = 'container'>PLease Fill All The Information</div>";
			}

		}

		if (isset($_POST['delete'])) {
			$delete_query = "DELETE FROM $db_name WHERE id = $id";
			if (mysqli_query($con,$delete_query)) { # Successfull then go to admin page
				header('Location: add.php');
			} else { # Show Worning For not Delete

			}
		}
	?>


</body>
</html>