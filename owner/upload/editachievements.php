<?php

	error_reporting( ~E_NOTICE );

	require_once 'dbconfig.php';

	if(isset($_GET['edit_id']) && !empty($_GET['edit_id']))
	{
		$id = $_GET['edit_id'];
		$stmt_edit = $DB_con->prepare('SELECT * FROM achievements WHERE ID =:uid');
		$stmt_edit->execute(array(':uid'=>$id));
		$edit_row = $stmt_edit->fetch(PDO::FETCH_ASSOC);
		extract($edit_row);
	}
	else
	{
		header("Location: ../pages/tables/achievements.php");
	}



	if(isset($_POST['btn_save_updates']))
	{
		$title = $_POST['title'];// user name
		$achievements = $_POST['achievements'];// user email

		$imgFile = $_FILES['user_image']['name'];
		$tmp_dir = $_FILES['user_image']['tmp_name'];
		$imgSize = $_FILES['user_image']['size'];

		if($imgFile)
		{
			$upload_dir = '../../achievements/'; // upload directory
			$imgExt = strtolower(pathinfo($imgFile,PATHINFO_EXTENSION)); // get image extension
			$valid_extensions = array('jpeg', 'jpg', 'png', 'gif'); // valid extensions
			$userpic = rand(1000,1000000).".".$imgExt;
			if(in_array($imgExt, $valid_extensions))
			{
				if($imgSize < 5000000)
				{
					unlink($upload_dir.$edit_row['Pic']);
					move_uploaded_file($tmp_dir,$upload_dir.$userpic);
				}
				else
				{
					$errMSG = "Sorry, your file is too large it should be less then 5MB";
				}
			}
			else
			{
				$errMSG = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
			}
		}
		else
		{
			// if no image selected the old image remain as it is.
			$userpic = $edit_row['user_image']; // old image from database
		}


		// if no error occured, continue ....
		if(!isset($errMSG))
		{
			$stmt = $DB_con->prepare('UPDATE achievements
									     SET title=:title,
									     	 achievements=:achievements,
										     Pic=:upic
								       WHERE ID=:uid');
			$stmt->bindParam(':title',$title);
			$stmt->bindParam(':achievements',$achievements);
			$stmt->bindParam(':upic',$userpic);
			$stmt->bindParam(':uid',$id);

			if($stmt->execute()){
				?>
                <script>
				alert('Successfully Updated ...');
				window.location.href='../pages/tables/achievements.php';
				</script>
                <?php
			}
			else{
				$errMSG = "Sorry Data Could Not Updated !";
			}

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
    	<h1 class="h2">Update gallery details. <a class="btn btn-success" href="../pages/tables/gallery.php"> all photos </a>
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
    	<td><label class="control-label">Title.</label></td>
        <td><input class="form-control" type="text" name="title" value="<?php echo $edit_row['title']; ?>" required /></td>
    </tr>


    <tr>
    	<td><label class="control-label">Details.</label></td>
        <td><input class="form-control" type="text" name="achievements" value="<?php echo $edit_row['achievements']; ?>" required /></td>
    </tr>

  

<tr>
	<td><label class="control-label"> Img.</label></td>
		<td>
			<p><img src="../../achievements/<?php echo $edit_row['Pic']; ?>" height="150" width="150" /></p>
			<input class="input-group" type="file" name="user_image" accept="image/*" />
		</td>
</tr>
<?php



 ?>




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
