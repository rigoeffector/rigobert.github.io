<?php

	error_reporting( ~E_NOTICE ); // avoid notice

	require_once '../../upload/dbconfig.php';

	if(isset($_POST['btnsave']))
	{
		$username = $_POST['user_name'];// user name
		$userjob = $_POST['user_job'];// user emai
    $phone = $_POST['phone'];


		$imgFile = $_FILES['user_image']['name'];
		$tmp_dir = $_FILES['user_image']['tmp_name'];
		$imgSize = $_FILES['user_image']['size'];


		
			$upload_dir = '../../../riyaimagesenglish/'; // upload directory

			$imgExt = strtolower(pathinfo($imgFile,PATHINFO_EXTENSION)); // get image extension

			// valid image extensions
			$valid_extensions = array('jpeg', 'jpg', 'png', 'gif'); // valid extensions

			// rename uploading image
			$userpic = rand(1000,1000000).".".$imgExt;

			// allow valid image file formats
			if(in_array($imgExt, $valid_extensions)){
				// Check file size '5MB'
				if($imgSize < 50000000000000000000)				{
					move_uploaded_file($tmp_dir,$upload_dir.$userpic);
				}
				else{
					$errMSG = "Sorry, your file is too large.";
				}
			}
			else{
				$errMSG = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
			}

		// if no error occured, continue ....
		if(!isset($errMSG))
		{
			$stmt = $DB_con->prepare('INSERT INTO riyanewsenglish(title,sdescription,description,Pic,dateadded) VALUES(:title, :sdescription, :description, :upic,now())');
			$stmt->bindParam(':title',$username);
			$stmt->bindParam(':sdescription',$userjob);
      $stmt->bindParam(':description',$phone);
			$stmt->bindParam(':upic',$userpic);

			if($stmt->execute())
			{
				$successMSG = "new riya news and events uccesfully inserted ...";
				// header("refresh:5;index.php"); // redirects image view page after 5 seconds.
			}
			else
			{
				$errMSG = "error while inserting....";
        ?>

<!-- <script type="text/javascript"> alert('no');</script> -->
        <?php
			}
		}
	}
?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
  <title>Riya </title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.2 -->
    <link href="../../bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons -->
    <link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <!-- DATA TABLES -->
    <link href="../../plugins/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="../../dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link href="../../dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="skin-blue">
    <div class="wrapper">

      <?php include "header.php"; ?>
 <?php if (isset($_SESSION['usr_id'])) { ?>
      <!-- Right side column. Contains the navbar and content of the page -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
          Riya App  Riya news and events

          </h1>

        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">


              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Riya news and events</h3>
                </div><!-- /.box-header -->
                <div class="box-body">


                  	<?php
                  	if(isset($errMSG)){
                  			?>
                              <div class="alert alert-danger">
                              	<span class="glyphicon glyphicon-info-sign"></span> <strong><?php echo $errMSG; ?></strong>
                              </div>
                              <?php
                  	}
                  	else if(isset($successMSG)){
                  		?>
                          <div class="alert alert-success">
                                <strong><span class="glyphicon glyphicon-info-sign"></span> <?php echo $successMSG; ?></strong>
                          </div>
                          <?php
                  	}
                  	?>
  <a href="riyanewsenglish.php" class="btn btn-success">See all RIYA news and events </a>
                  <form method="post" enctype="multipart/form-data" class="form-horizontal">

                  	<table class="table table-bordered table-responsive">

                      <tr>
                      	<td><label class="control-label">RIYA news and events Title.</label></td>
                          <td><input class="form-control" required type="text" name="user_name" placeholder="Enter RIYA news Title" value="<?php echo $username; ?>" /></td>
                      </tr>

                      <tr>
                        <td><label class="control-label">RIYA news  and events short description with 100 characters</label></td>
                          <td><textarea class="form-control"  style="height: 70px" required type="text" name="user_job" placeholder="RIYA news  short description"></textarea></td>
                      </tr>


                      <tr>
                        <td><label class="control-label">RIYA news  and events description</label></td>
                          <td><textarea class="form-control" type="text" name="phone" placeholder="RIYA news  description" required="" style="height: 140px"><pre style="font-size: 20px;
    font-family: "Times New Roman", Times, serif;color:grey">

</pre></textarea>

                            <!-- <input class="form-control" type="number" name="phone" placeholder="news and updates description" /> --></td>
                      </tr>

                      <tr>
                      	<td><label class="control-label">RIYA NEWS  and events Img.</label></td>
                          <td><input class="input-group" required type="file" name="user_image" accept="image/*" /></td>
                      </tr>

                  		
                      <tr>
                          <td colspan="2"><button type="submit" name="btnsave" class="btn btn-success">
                          <span class="glyphicon glyphicon-save"></span> &nbsp; Add
                          </button>
                          </td>
                      </tr>

                      </table>


                  </form>



                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      <?php include "../../footer.php"; ?>
    </div><!-- ./wrapper -->

    <!-- jQuery 2.1.3 -->
    <script src="../../plugins/jQuery/jQuery-2.1.3.min.js"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="../../bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- DATA TABES SCRIPT -->
    <script src="../../plugins/datatables/jquery.dataTables.js" type="text/javascript"></script>
    <script src="../../plugins/datatables/dataTables.bootstrap.js" type="text/javascript"></script>
    <!-- SlimScroll -->
    <script src="../../plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <!-- FastClick -->
    <script src='../../plugins/fastclick/fastclick.min.js'></script>
    <!-- AdminLTE App -->
    <script src="../../dist/js/app.min.js" type="text/javascript"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../../dist/js/demo.js" type="text/javascript"></script>
    <!-- page script -->
    <script type="text/javascript">
      $(function () {
        $("#example1").dataTable();
        $('#example2').dataTable({
          "bPaginate": true,
          "bLengthChange": false,
          "bFilter": false,
          "bSort": true,
          "bInfo": true,
          "bAutoWidth": false
        });
      });
    </script>

  </body>
</html>
<?php } else { ?>
<?php } ?>