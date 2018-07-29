<?php

	error_reporting( ~E_NOTICE );

	require_once 'dbconfig.php';

	if(isset($_GET['edit_id']) && !empty($_GET['edit_id']))
	{
		$id = $_GET['edit_id'];
		$stmt_edit = $DB_con->prepare('SELECT * FROM jobs WHERE ID =:uid');
		$stmt_edit->execute(array(':uid'=>$id));
		$edit_row = $stmt_edit->fetch(PDO::FETCH_ASSOC);
		extract($edit_row);
	}
	else
	{
		header("Location: ../pages/tables/joboffers.php");
	}



	if(isset($_POST['btn_save_updates']))
	{
		
		$position = $_POST['position'];
		$sdescription = $_POST['sdescription'];
		$description = $_POST['description'];
		$employee = $_POST['employee'];		
			$stmt = $DB_con->prepare('UPDATE jobs
									     SET position=:position,
										     sdescription=:sdescription,
										     description=:description,
										     employees=:employee
								       WHERE ID=:uid');
			$stmt->bindParam(':position',$position);
			$stmt->bindParam(':sdescription',$sdescription);
			$stmt->bindParam(':description',$description);
			$stmt->bindParam(':employee',$employee);
			$stmt->bindParam(':uid',$id);

			if($stmt->execute()){
				?>
                <script>
				alert('Successfully Updated ...');
				window.location.href='../pages/tables/joboffers.php';
				</script>
                <?php
			}
			else{
				$errMSG = "Sorry Data Could Not Updated !";
			}

		


	}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="bootstrap/css/bootstrap-theme.min.css">

<!-- custom stylesheet -->
<link rel="stylesheet" href="style.css">

<!-- Latest compiled and minified JavaScript -->
<script src="bootstrap/js/bootstrap.min.js"></script>

<script src="jquery-1.11.3-jquery.min.js"></script>
</head>
<body>



<div class="container">


	<div class="page-header">
    	<h1 class="h2">Update Drimex job offers. <a class="btn btn-success" href="../pages/tables/joboffers.php"> all Drimex job offers</a>
			<!-- <a class="btn btn-info" href="../pages/tables/wordnoimages.php"> all students </a></h1> -->
    </div>

<div class="clearfix"></div>
<form method="post" enctype="multipart/form-data" class="form-horizontal">


    <?php
	if(isset($errMSG)){
		?>
        <div class="alert alert-danger">
          <span class="glyphicon glyphicon-info-sign"></span> &nbsp; <?php echo $errMSG; ?>
        </div>
        <?php
	}
	?>


	<table class="table table-bordered table-responsive">

   <tr>
    	<td><label class="control-label">Position.</label></td>
        <td><input class="form-control" type="text" name="position" value="<?php echo $edit_row['position']; ?>" required /></td>
    </tr>

    <tr>
    	<td><label class="control-label">Short description.</label></td>
        <td><textarea class="form-control" type="text" name="sdescription" required ><?php echo $edit_row['sdescription']; ?></textarea>
        </td>
    </tr>
    
     <tr>
    	<td><label class="control-label">Description.</label></td>
        <td><textarea class="form-control" type="text" name="description" rows="5"><?php echo $edit_row['description']; ?>
</textarea>
        	</td>
    </tr>

<tr>
    	<td><label class="control-label">Number of employees needed.</label></td>
        <td><input class="form-control" type="number" name="employee" value="<?php echo $edit_row['employees']; ?>" required /></td>
    </tr>

    <tr>
        <td colspan="2"><button type="submit" name="btn_save_updates" class="btn btn-success">
        <span class="glyphicon glyphicon-save"></span> Update
        </button>


        </td>
    </tr>

    </table>

</form>



</div>
</body>
</html>
