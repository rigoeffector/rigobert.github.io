<?php

	error_reporting( ~E_NOTICE ); // avoid notice

	require_once '../../upload/dbconfig.php';

	if(isset($_POST['btnsave']))
	{
		
    $position = $_POST['position'];
$sdescription = $_POST['sdescription'];
$description = $_POST['description'];
$employee = $_POST['employee'];

		


			$stmt = $DB_con->prepare('INSERT INTO jobs(position,sdescription,description,employees,dateadded) VALUES(:position,:sdescription, :description, :employees,now())');
			$stmt->bindParam(':position',$position);
      $stmt->bindParam(':sdescription',$sdescription);
			$stmt->bindParam(':description',$description);
      $stmt->bindParam(':employees',$employee);
			if($stmt->execute())
			{
				$successMSG = "new job offer succesfully added ...";
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
?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
  <title>Drimex </title>
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
   <!--  <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
  <script>tinymce.init({ selector:'textarea' });</script> -->
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
          Drimex Job offer

          </h1>

        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">


              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Drimex Job offers</h3>
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
  <a href="joboffers.php" class="btn btn-success">See all Drimex Job offers </a>
                  <form method="post" enctype="multipart/form-data" class="form-horizontal">

                  	<table class="table table-bordered table-responsive">

                      <!-- <tr>
                        <td><label class="control-label">District.</label></td>
                          <td>
                             <select class="form-control" id="sel1" name="district">
                              <option>---select district---</option>
                              <option>Bugesera</option>
                              <option>Gatsibo</option>
                              <option>Kayonza</option>
                              <option>Kirehe</option>
                               <option>Ngoma</option>
                              <option>Nyagatare</option>
                              <option>Rwamagana</option>
                              <option>Gasabo</option>
                               <option>Kicukiro</option>
                              <option>Nyarugenge</option>
                              <option>Burera</option>
                              <option>Gakenke</option>
                               <option>Gicumbi</option>
                              <option>Musanze</option>
                              <option>Rulindo</option>
                              <option>Gisagara</option>
                               <option>Huye</option>
                              <option>Kamonyi</option>
                              <option>Muhanga</option>
                              <option>Nyamagabe</option>
                               <option>Nyanza</option>
                              <option>Nyaruguru</option>
                              <option>Ruhango</option>
                              <option>Karongi</option>
                               <option>Ngororero</option>
                              <option>Nyabihu</option>
                              <option>Nyamasheke</option>
                              <option>Rubavu</option>
                               <option>Rusizi</option>
                              <option>Rutsiro</option>
                              
                            </select>

                           </td>
                      </tr> -->

                      <tr>
                        <td><label class="control-label">Position.</label></td>
                          <td><input class="form-control" required type="text" name="position" placeholder="Enter position"  /></td>
                      </tr>

                      <tr>
                        <td><label class="control-label">Job short description with 10 characters</label></td>
                          <td><input class="form-control"  required type="text" name="sdescription" placeholder="Enter Job short description"/></td>
                      </tr>
                      <tr>
                        <td><label class="control-label">Job description</label></td>
                          <td><textarea class="form-control" style="height:80px" required type="text" name="description" placeholder="Enter Job description"></textarea></td>
                      </tr>

                      <tr>
                        <td><label class="control-label">Position.</label></td>
                          <td><input class="form-control" required type="number" name="employee" placeholder="Enter Drimex news Title" /></td>
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