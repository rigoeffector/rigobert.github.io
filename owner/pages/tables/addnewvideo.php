


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
          Riya App new video

          </h1>

        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">


              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">new video</h3>
                </div><!-- /.box-header -->
                <div class="box-body">


                  	
  <a href="videos.php" class="btn btn-success">See all video</a>
                  <form method="post" enctype="multipart/form-data" class="form-horizontal">

<?php include 'dbcon.php';?>


         <?php
      //print_r ($_FILES['file']);
      if(isset($_FILES['file'])){
      
        $name = $_FILES['file']['name'];
        $extension = explode('.', $name);
        $extension = end($extension);
        $type = $_FILES['file']['type'];
        $size = $_FILES['file']['size'] /1024/1024;
        $random_name = rand();
        $tmp = $_FILES['file']['tmp_name'];
        
        
        if($size >= 1597152000000000)
        {
          $message="File must not greater than 15mb";
        }else
        {
          move_uploaded_file($tmp, "../../../videos/".$random_name.'.'.$extension);  
          mysqli_query($con, "INSERT INTO tbl_video (name,url) 
          VALUES('$name', '$random_name.$extension')");
          $message="Video has been successfully uploaded !";
        }
        // echo "$message <br/> <br/>";
        // echo "size: $size mb<br/>";
        // echo "random_name: $random_name <br/>";
        // echo "name: $name <br/>";
        // echo "type: $type <br/><br/>";
?>
<div class="alert alert-success">
                                <strong><span class="glyphicon glyphicon-info-sign"></span> <?php echo $message; ?></strong>
                          </div>

<?php


      }
  
    ?>
          Select Video : <br/>
            <input name="UPLOAD_MAX_FILESIZE" value="20971520"  type="hidden"/>
            <input type="file" name="file" id="file" />
            <br/><br/>
            <input type="submit" class="btn btn-success" value="Upload" />
       



                  <!-- 	<table class="table table-bordered table-responsive">

                      <tr>
                      	<td><label class="control-label">video name.</label></td>
                          <td><br><br></td>
                      </tr>


                   
                  	



                      <tr>
                          <td colspan="2"><button type="submit" name="btnsave" class="btn btn-success">
                          <span class="glyphicon glyphicon-save"></span> &nbsp; Add
                          </button>
                          </td>
                      </tr>

                      </table> -->


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