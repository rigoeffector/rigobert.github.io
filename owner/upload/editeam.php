<?php

	error_reporting( ~E_NOTICE );

	require_once 'dbconfig.php';

	if(isset($_GET['edit_id']) && !empty($_GET['edit_id']))
	{
		$id = $_GET['edit_id'];
		$stmt_edit = $DB_con->prepare('SELECT * FROM team WHERE ID =:uid');
		$stmt_edit->execute(array(':uid'=>$id));
		$edit_row = $stmt_edit->fetch(PDO::FETCH_ASSOC);
		extract($edit_row);
	}
	else
	{
		header("Location: ../pages/tables/team.php");
	}



	if(isset($_POST['btn_save_updates']))
	{
		$username = $_POST['user_name'];// user name
$position = $_POST['position'];
$twitter = $_POST['twitter'];
$linkedin = $_POST['linkedin'];
$facebook = $_POST['facebook'];
$welcome = $_POST['welcome'];

		$imgFile = $_FILES['user_image']['name'];
		$tmp_dir = $_FILES['user_image']['tmp_name'];
		$imgSize = $_FILES['user_image']['size'];

		if($imgFile)
		{
			$upload_dir = '../../team/'; // upload directory
			$imgExt = strtolower(pathinfo($imgFile,PATHINFO_EXTENSION)); // get image extension
			$valid_extensions = array('jpeg', 'jpg', 'png', 'gif'); // valid extensions
			$userpic = rand(1000,1000000).".".$imgExt;
			if(in_array($imgExt, $valid_extensions))
			{
				if($imgSize < 5000000)
				{
					//unlink($upload_dir.$edit_row['userPic']);
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
			$userpic = $edit_row['Pic']; // old image from database
		}


		// if no error occured, continue ....
		if(!isset($errMSG))
		{
			$stmt = $DB_con->prepare('UPDATE team
									     SET name=:title,
										     position=:position,
										     twitter=:twitter,
										     linkedin=:linkedin,
										     facebook=:facebook,
										     Pic=:upic,
										     welcome=:welcome
								       WHERE ID=:uid');
			$stmt->bindParam(':title',$username);
			$stmt->bindParam(':position',$position);
			$stmt->bindParam(':twitter',$twitter);
			$stmt->bindParam(':linkedin',$linkedin);
			$stmt->bindParam(':facebook',$facebook);
			$stmt->bindParam(':upic',$userpic);
			$stmt->bindParam(':uid',$id);
			$stmt->bindParam(':welcome',$welcome);

			if($stmt->execute()){
				?>
                <script>
				alert('Successfully Updated ...');
				window.location.href='../pages/tables/team.php';
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
    	<h1 class="h2">Update team member details. <a class="btn btn-success" href="../pages/tables/team.php"> all team member </a>
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
    	<td><label class="control-label">Name.</label></td>
        <td><input class="form-control" type="text" name="user_name" value="<?php echo $edit_row[name]; ?>" required /></td>
    </tr>

    <tr>
    	<td><label class="control-label">Position.</label></td>
        <td><input class="form-control" type="text" name="position" value="<?php echo $edit_row['position']; ?>" required /></td>
    </tr>

    <tr>
    	<td><label class="control-label">Twitter.</label></td>
        <td><input class="form-control" type="text" name="twitter" value="<?php echo $edit_row['twitter']; ?>" required /></td>
    </tr>
    <tr>
    	<td><label class="control-label">Linkedin.</label></td>
        <td><input class="form-control" type="text" name="linkedin" value="<?php echo $edit_row['linkedin']; ?>" required /></td>
    </tr>
    <tr>
    	<td><label class="control-label">Facebook.</label></td>
        <td><input class="form-control" type="text" name="facebook" value="<?php echo $edit_row['facebook']; ?>" required /></td>
    </tr>

     <tr>
    	<td><label class="control-label">Welcome note.</label></td>
        <td><textarea class="form-control" type="text" name="welcome"><?php echo $edit_row['welcome']; ?></textarea>  </td>
    </tr>
   

<tr>
	<td><label class="control-label"> Img.</label></td>
		<td>
			<p><img src="../../team/<?php echo $edit_row['Pic']; ?>" height="150" width="150" /></p>
			<input class="input-group" type="file" name="user_image" accept="image/*" />
		</td>
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
