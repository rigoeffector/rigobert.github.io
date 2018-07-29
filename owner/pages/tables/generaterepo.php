


<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
  <title>RVC </title>
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

      <?php include "headers.php"; ?>
 <?php if (isset($_SESSION['usr_id'])) { ?>

      <!-- Right side column. Contains the navbar and content of the page -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
          RVC App Generate Report
          </h1>

        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-8">


              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Generate Report</h3>
                </div><!-- /.box-header -->
                <div class="box-body">


                   


  <!-- <a href="home.php" class="btn btn-warning">Welcome District Coordinator</a> -->
                  <form method="post" enctype="multipart/form-data" class="form-horizontal">

                   <label class="control-label">Please on District.</label>
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
                              
                            </select><br>
<button type="submit" name="btnsave" class="btn btn-success">
                          <span class="glyphicon glyphicon-upload"></span> &nbsp; Generate
                          </button>
                        
                  </form>



                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
            <div class="col-xs-12">
              <?php
             
include "connect.php";


  if(isset($_POST['btnsave']))
  {
    // 
    
    // $stmt_edit = $DB_con->prepare('SELECT * FROM reports WHERE district =:district ');
    // $stmt_edit->execute(array(':district'=>$district));
    // $edit_row = $stmt_edit->fetch(PDO::FETCH_ASSOC);
    // extract($edit_row);

    // echo "string";?>

 <a class="btn btn-success"  onclick="printDiv('printMe')">Generate Report</a><br/><br/>
  <div id="printMe">
    <h2 align="center">Report of <?php  echo $_POST[district]; ?></h2>
 <table id="" class="table table-bordered " style="background-color: white">
                    <thead>
                      <tr>

                        <th>Report</th>
                        <th>Date added</th>
                        
                        <!--   <th>Delete</th>
 -->
      

 
                      </tr>
                    </thead>
                    <tbody>


                      <?php
           $conn = mysqli_connect("localhost","root","");
             mysqli_select_db($conn,"rvc");



                $district = $_POST['district'];
                //echo $district;

           $result=mysqli_query($conn,"SELECT * from reports WHERE district='$district'");

           while($test = mysqli_fetch_array($result))
           {
             // $id = $test['ID'];
             // //echo "<tbody>";
             echo "<tr align='center'>";

              echo"<td>" .$test['message']."</font></td>";
               echo"<td>" .$test['dateadded']."</font></td>";
              //echo $district;
             //echo "</tbody>";
           }
           mysqli_close($conn);
           ?>




                    </tbody>
                  
                  </table>
                </div>
                 <script>
                                                function printDiv(divName){
                                                  var printContents = document.getElementById(divName).innerHTML;
                                                  var originalContents = document.body.innerHTML;
                                                  document.body.innerHTML = printContents;
                                                  window.print();
                                                  document.body.innerHTML = originalContents;
                                                }
                                              </script>
    <?php
  }
?>
             
            </div>
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