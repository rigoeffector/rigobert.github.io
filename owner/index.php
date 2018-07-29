
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Admin | Dashboard</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.2 -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons -->
    <link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <!-- Morris chart -->
    <link href="plugins/morris/morris.css" rel="stylesheet" type="text/css" />
    <!-- jvectormap -->
    <link href="plugins/jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
    <!-- Daterange picker -->
    <link href="plugins/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link href="dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

  </head>
  <body class="skin-blue">
    <div class="wrapper">

  <?php
include "header.php";

   ?>


  <?php if (isset($_SESSION['usr_id'])) { ?>


  
      <!-- Right side column. Contains the navbar and content of the page -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Dashboard
            <small>RVC App</small>
          </h1>

        </section>

    
        <!-- Main content -->
        <section class="content">
          <!-- Info boxes -->
          <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-red"><i class="ion ion-ios-people-outline"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">RVC Crimex</span>
                  <span class="info-box-number">
                    <?php
        include 'conn.php';
   
       $count = mysqli_fetch_array(mysqli_query($con, "SELECT COUNT(*) FROM crime"));

echo $count[0];
        //echo 50; ?></span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
            </div><!-- /.col -->
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-blue"><i class="fa fa-envelope"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">RVC Messages</span>
                  <span class="info-box-number">
                     <?php
         include 'conn.php';
    
       $count = mysqli_fetch_array(mysqli_query($con, "SELECT COUNT(*) FROM contactus"));

echo $count[0];
        //echo 50; ?>
      </span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
            </div><!-- /.col -->

            <!-- fix for small devices only -->
            <div class="clearfix visible-sm-block"></div>

            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-green"><i class="ion ion-ionic"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">RVC Updates</span>
                  <span class="info-box-number">
                    <?php
       include 'conn.php';

      $count = mysqli_fetch_array(mysqli_query($con, "SELECT COUNT(*) FROM updates"));

echo $count[0];
       //echo 50; ?>
                  </span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
            </div><!-- /.col -->
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-orange"><i class="ion ion-ios-people-outline"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">RVC Achievements</span>
                  <span class="info-box-number">
                    <?php
    include 'conn.php';
       $count = mysqli_fetch_array(mysqli_query($con, "SELECT COUNT(*) FROM achievements "));

echo $count[0];
        //echo 50; ?></span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
            </div><!-- /.col -->
          </div><!-- /.row -->







<div class="row">
           
           
             <div class="col-md-12">
              <!-- TABLE: LATEST ORDERS -->
              <div class="box box-info">
                <div class="box-header with-border">
                  <h3 class="box-title">Crime reports</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <div class="table-responsive">
                    <table class="table no-margin">
                      <thead>
                        <tr>
                          <th>Name</th>
                          <th>Email</th>
                          <th>Address 1</th>
                          <th>Address 2</th>
                          <th>Details</th>
                          <th>Date</th>
                          <th>Read</th>
                          <th>Delete</th>
                        </tr>
                      </thead>
                       <tbody>


                      <?php
          include "./pages/tables/connects.php";


           $result=mysqli_query($conn,"SELECT * from crime ORDER BY ID DESC");

           while($test = mysqli_fetch_array($result))
           {
             $id = $test['ID'];
             //echo "<tbody>";
             echo "<tr align=''>";
               //echo"<td>" .$test['banner_id']."</font></td>";
              echo"<td><span class='label label-success'>" .$test['name']."</span></td>";
             echo"<td><a href='#'>" .$test['email']."</a></td>";
            echo"<td><span class='label label-warning'>" .$test['address1']."</span></td>";
            echo"<td><span class='label label-warning'>" .$test['address2']."</span></td>";
            echo"<td>" .$test['Details']."</font></td>";
            echo"<td>" .$test['dateadded']."</font></td>";



           
             ?>

             <?php
                if ($test['readen']=='') {
                  # code...
                  ?><td><span class="label label-success">Pending</span></td>
                    <!-- <td >
              <a href="./pages/tables/crimeupdate.php?delete_id=<?php //echo $test['ID']; ?>" title="click for delete" onclick="return confirm('sure to mark us read ?')" class='btn btn-success'>Read</a></td> -->
                  <?php
                }else{
                  echo"<td><span class='label label-success'>Reed on " .$test['readendate']."</span></td>";
                }
             ?>
              
               

                <td >
              <a href="./pages/tables/crimedelete.php?delete_id=<?php echo $test['ID']; ?>" title="click for delete" onclick="return confirm('sure to delete this message?')" class='btn btn-danger'>Delete</a></td>
           


<?php


               //echo"<td> <a href ='prisonerupdate.php?id=$id'><button class='btn btn-success'>Update</button></a>"
               //echo"<td> <a href ='prisonnertransfer.php?id=$id'><button class='btn btn-info'>Transfer</button></a>";
               //echo"<td> <a href ='realesedprisoner.php?id=$id'><button class='btn btn-success'>Realese</button></a>";

               //echo"<td> <a href ='prisonerdeleteadmin.php?id=$id'><button class='btn btn-default'>out</button></a>";

             echo "</tr>";
             //echo "</tbody>";
           }
           mysqli_close($conn);
           ?>




                    </tbody>
                     
                    </table>
                  </div><!-- /.table-responsive -->
                </div><!-- /.box-body -->
               
              </div><!-- /.box -->
            </div><!-- /.col -->


          

            <!-- fix for small devices only -->
            <div class="clearfix visible-sm-block"></div>

            </div>
            <div class="row">
              <div class="col-md-12">
              <!-- TABLE: LATEST ORDERS -->
              <div class="box box-info">
                <div class="box-header with-border">
                  <h3 class="box-title">Message from the users</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <div class="table-responsive">
                    <table class="table no-margin">
                      <thead>
                        <tr>
                          <th>Name</th>
                          <th>Email</th>
                          <th>Phone</th>
                          <th>Message</th>
                          <!-- <th>Date</th> -->
                          <th>Read</th>
                          <th>Delete</th>
                        </tr>
                      </thead>
                       <tbody>


                      <?php
          include "./pages/tables/connects.php";


           $result=mysqli_query($conn,"SELECT * from contactus ORDER BY ID DESC");

           while($test = mysqli_fetch_array($result))
           {
             $id = $test['ID'];
             //echo "<tbody>";
             echo "<tr align=''>";
               //echo"<td>" .$test['banner_id']."</font></td>";
              echo"<td><span class='label label-success'>" .$test['name']."</span></td>";
             echo"<td><a href='#'>" .$test['email']."</a></td>";
            echo"<td><span class='label label-warning'>" .$test['telephone']."</span><br>".$test['dateadded']."</td>";
            echo"<td>" .$test['message']."</font></td>";
            // echo"<td>" .$test['dateadded']."</font></td>";



           
             ?>

             <?php
                if ($test['readen']=='') {
                  # code...
                  ?>
                    <td >
              <a href="./pages/tables/smsupdate.php?delete_id=<?php echo $test['ID']; ?>" title="click for delete" onclick="return confirm('sure to mark us read ?')" class='btn btn-success'>Read</a></td>
                  <?php
                }else{
                  echo"<td><span class='label label-success'>Reed on " .$test['readendate']."</span></td>";
                }
             ?>
              
               

                <td >
              <a href="./pages/tables/smsdelete.php?delete_id=<?php echo $test['ID']; ?>" title="click for delete" onclick="return confirm('sure to delete this message?')" class='btn btn-danger'>Delete</a></td>
           


<?php


               //echo"<td> <a href ='prisonerupdate.php?id=$id'><button class='btn btn-success'>Update</button></a>"
               //echo"<td> <a href ='prisonnertransfer.php?id=$id'><button class='btn btn-info'>Transfer</button></a>";
               //echo"<td> <a href ='realesedprisoner.php?id=$id'><button class='btn btn-success'>Realese</button></a>";

               //echo"<td> <a href ='prisonerdeleteadmin.php?id=$id'><button class='btn btn-default'>out</button></a>";

             echo "</tr>";
             //echo "</tbody>";
           }
           mysqli_close($conn);
           ?>




                    </tbody>
                     
                    </table>
                  </div><!-- /.table-responsive -->
                </div><!-- /.box-body -->
               
              </div><!-- /.box -->
            </div><!-- /.col -->
            </div>


           







        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

      <?php


      include "footer.php"; ?>

    </div><!-- ./wrapper -->

    <!-- jQuery 2.1.3 -->
    <script src="plugins/jQuery/jQuery-2.1.3.min.js"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- FastClick -->
    <script src='plugins/fastclick/fastclick.min.js'></script>
    <!-- AdminLTE App -->
    <script src="dist/js/app.min.js" type="text/javascript"></script>
    <!-- Sparkline -->
    <script src="plugins/sparkline/jquery.sparkline.min.js" type="text/javascript"></script>
    <!-- jvectormap -->
    <script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js" type="text/javascript"></script>
    <script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js" type="text/javascript"></script>
    <!-- daterangepicker -->
    <script src="plugins/daterangepicker/daterangepicker.js" type="text/javascript"></script>
    <!-- datepicker -->
    <script src="plugins/datepicker/bootstrap-datepicker.js" type="text/javascript"></script>
    <!-- iCheck -->
    <script src="plugins/iCheck/icheck.min.js" type="text/javascript"></script>
    <!-- SlimScroll 1.3.0 -->
    <script src="plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <!-- ChartJS 1.0.1 -->
    <script src="plugins/chartjs/Chart.min.js" type="text/javascript"></script>

    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="dist/js/pages/dashboard2.js" type="text/javascript"></script>

    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js" type="text/javascript"></script>
  </body>
</html>
<?php } else { ?>
<?php } ?>
