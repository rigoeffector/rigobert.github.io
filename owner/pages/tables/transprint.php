

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
  <title>eMarks </title>
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

      <!-- Right side column. Contains the navbar and content of the page -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
          eMarks App transcript print

          </h1>

        </section>

        <!-- Main content -->
        <section class="content">
          
      <div class="row">
     <div class="col-lg-12">







<?php
  
    $regno = $_POST['regno'];
    $academicyear =  $_POST['year'];

?>



<h3>THIS THE FORMAL TRANSCRIPT REPORT with registration number of <?php echo  $regno ; ?></h3>




                                          <div id="printMe">
                                            <div style="width:800px;color:grey;height:800px; padding:20px; text-align:center; border: 10px solid #535955" >
                                            <div style="width:750px; height:750px; padding:20px; text-align:center; border: 5px solid #787878">
                                              <!-- <h3>ESwahili </h3> -->
                                              <img src="./ur.jpeg" style="width:200px;height:100px"><br/>
                                                   <span style="font-size:50px; font-weight:bold">Official transcript</span>
                                                   <br><br>
                                                   <table class="table table-striped">
                          <thead>
                            <tr>
                          <th >Modules</th>
                          <th>CAT marks</th>
                          <th>Exam marks</th>
                            <th>Total</th>
                         

                        </tr>
                      </thead>
                        <tbody>


                          <?php
               $conn = mysqli_connect("localhost","root","");
                 mysqli_select_db($conn,"emarks");


               $result=mysqli_query($conn,"SELECT * from marks where regno ='$regno' and academicyear = '$academicyear'");

               while($test = mysqli_fetch_array($result))

               {
                 $id = $test['ID'];
                 //echo "<tbody>";

                 echo "<tr align=''>";
$name = $test['names'];
                  echo"<td>" .$test['module']."</font></td>";
                       //  echo"<td>" .$test['dateofbirth']."</font></td>";
                 echo"<td>" .$test['CAT']."</font></td>";

$academicyear = $test['academicyear'];

                 echo"<td>" .$test['Exam']."</font></td>";
                 // echo"<td>" .$test['academicyear']."</font></td>";
                 echo"<td>" .$test['total']."</font></td>";
                 //echo"<td>" .$test['Sector']."</font></td>";
                 //echo"<td>" .$test['education']."</font></td>";
                 //echo"<td>" .$test['martial']."</font></td>";
                
    echo "</tr>";
               }
               mysqli_close($conn);
               ?>




                        </tbody>
                      </table>
                                                 <span style="font-size:25px"><i>Student name .</i></span><br>
                                                 <?php echo $name; ?> <br/><br/>

                                                  <span style="font-size:25px"><i>With Registration number of .</i></span><br>
                                                 <?php echo $regno; ?> <br/><br/><br/>
                                       <span style="font-size:25px"><i>Academic Year .</i></span><br>
                                                 <?php echo $academicyear; ?> <br>
                                                 


                                                  <span style="font-size:25px"><i>Signed by Dean of So Ict John RUKUNDO .</i></span><br>
                                                
                                                    <img src="./sign.jpg" style="width:200px;height:100px"><br/>
                                            </div>
                                            </div>
                                          </div>
                                            <button onclick="printDiv('printMe')">Print your certificate</button>
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




  
?>









  <?php

                   $DB_HOST = 'localhost';
  $DB_USER = 'root';
  $DB_PASS = '';
  $DB_NAME = 'emarks';

  try{
    $DB_con = new PDO("mysql:host={$DB_HOST};dbname={$DB_NAME}",$DB_USER,$DB_PASS);
    $DB_con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  }
  catch(PDOException $e){
    echo $e->getMessage();
  }


                    if(isset($_GET['delete_id']))
                    {
                     

                      // it will delete an actual record from db
                      $stmt_delete = $DB_con->prepare('DELETE FROM marks WHERE ID =:uid');
                      $stmt_delete->bindParam(':uid',$_GET['delete_id']);
                      $stmt_delete->execute();
                      if($stmt_delete){
                        ?>

                       <!--  <script type="text/JavaScript">alert("yess")</script> -->
                        <?php
                      }

                      // header("Location: index.php");
                    }

                  ?>
        
     </div>
      </div><!-- /row -->
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
