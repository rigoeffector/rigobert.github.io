
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title> Dashboard</title>
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
include "headerc.php";

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
            <div class="col-md-6 col-sm-6 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-red"><i class="fa fa-envelope"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">Your Reports</span>
                  <span class="info-box-number">
                    <?php
        include 'conn.php';
   $who = $_SESSION['usr_name'];
       $count = mysqli_fetch_array(mysqli_query($con, "SELECT COUNT(*) FROM reports where bywho='$who'"));

echo $count[0];
        //echo 50; ?></span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
            </div><!-- /.col -->
            <div class="col-md-6 col-sm-6 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-blue"><i class="fa fa-users"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">RVC Members</span>
                  <span class="info-box-number">
                     <?php
         include 'conn.php';
    
       $count = mysqli_fetch_array(mysqli_query($con, "SELECT COUNT(*) FROM members"));

echo $count[0];
        //echo 50; ?>
      </span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
            </div><!-- /.col -->

            <!-- fix for small devices only -->
            <div class="clearfix visible-sm-block"></div>

            
          </div><!-- /.row -->







<div class="row">
           
           
             <div class="col-md-12">
              <!-- TABLE: LATEST ORDERS -->
              <div class="box box-info">
                <div class="box-header with-border">
                  <h3 class="box-title">Members</h3>
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
                          <th>First Name</th>
                          <th>Last Name</th>
                          <th>Phone</th>
                          <th>Email</th>
                          <th>Image</th>
                         
                        </tr>
                      </thead>
                       <tbody>


                      <?php
          include "./pages/tables/connects.php";


           $result=mysqli_query($conn,"SELECT * from members");

           while($test = mysqli_fetch_array($result))
           {
             $id = $test['id'];
             //echo "<tbody>";
             echo "<tr align=''>";
               //echo"<td>" .$test['banner_id']."</font></td>";
              echo"<td><span class='label label-success'>" .$test['fname']."</span></td>";
              echo"<td><span class='label label-success'>" .$test['lname']."</span></td>";
             echo"<td>" .$test['phone']."</td>";
             echo"<td><a href='mailto:'>" .$test['email']."</a></td>";



           
             ?>

              
               

                <td ><img style="width: 50px" src="../members/<?php echo $test['user_image'] ?>">
             </td>
           


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
