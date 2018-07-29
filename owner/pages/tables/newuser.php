<?php


include_once 'dbconnect.php';

//set validation error flag as false
$error = false;

//check if form is submitted
if (isset($_POST['signup'])) {
	$name = mysqli_real_escape_string($con, $_POST['name']);
	$email = mysqli_real_escape_string($con, $_POST['email']);
	$password = mysqli_real_escape_string($con, $_POST['password']);
	$cpassword = mysqli_real_escape_string($con, $_POST['cpassword']);

	//name can contain only alpha characters and space
	if (!preg_match("/^[a-zA-Z ]+$/",$name)) {
		$error = true;
		$name_error = "Name must contain only alphabets and space";
	}
	if(!filter_var($email,FILTER_VALIDATE_EMAIL)) {
		$error = true;
		$email_error = "Please Enter Valid Email ID";
	}
	if(strlen($password) < 6) {
		$error = true;
		$password_error = "Password must be minimum of 6 characters";
	}
	if($password != $cpassword) {
		$error = true;
		$cpassword_error = "Password and Confirm Password doesn't match";
	}
	if (!$error) {
		if(mysqli_query($con, "INSERT INTO users(name,email,password,levels) VALUES('" . $name . "', '" . $email . "', '" . md5($password) . "','1')")) {
			$successmsg = "New user has Successfully Registered! ";
		} else {
			$errormsg = "Error in registering new user...Please try again later!";
		}
	}
}
?>


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
          eMarks App marks

          </h1>

        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
        <div class="col-lg-4 col-lg-offset-4">



<form method="post" class="form-group">
  
      

<select style="width:200px;height:40px" name="department" class="department">
<option value="0">Select department</option>
<?php
include('db.php');
$sql = mysqli_query($con,"select * from department");
while($row=mysqli_fetch_array($sql))
{
echo '<option value="'.$row['department_id'].'">'.$row['department_name'].'</option>';
} ?>
</select><br/><br/>
<select style="width:200px;height:40px" name="levels" class="levels">
<option>Select levels</option>
</select>




<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function()
{
$(".department").change(function()
{
var department_id=$(this).val();
var post_id = 'id='+ department_id;

$.ajax
({
type: "POST",
url: "ajax.php",
data: post_id,
cache: false,
success: function(cities)
{
$(".levels").html(cities);
} 
});

});
});
</script>
<br/><br/>

<input type="submit" class=" btn btn-success" name="send" value="View marks of this class">

<br/><br/>

</form>



                
        </div><!-- /col-lg-6 -->
      </div>
       <div class="row">
     <div class="col-lg-12">
       
<?php

  if(isset($_POST['send'])){
   // $module = $_POST['module'];



      $department = $_POST['department'];
      $levels = $_POST['levels'];






      echo "<h2><b>This is the marks for class ".$levels. "</b></h2>";

    ?>
 <a class="btn btn-success"  onclick="window.print()">Generate Report</a><br/><br/>
 <table id="example1" class="table table-bordered " style="background-color: white">
                    <thead>
                      <tr>

                        <th>Type</th>
                        <th>RegNo</th>
                        <th>StudentName</th>
                        <th>Department</th>
                        <th>Level</th>
                        <th>Module</th>
                        <th>Lecturer</th>
                        <th>CAT MARKS</th>
                        <th>Exam MARKS</th>
                        <th>Total</th>
                         <th>Remarks</th>
                        
                          <!-- <th>Delete</th> -->

      

 
                      </tr>
                    </thead>
                    <tbody>


                      <?php
           $conn = mysqli_connect("localhost","root","");
             mysqli_select_db($conn,"emarks");



                $lect = $_SESSION['usr_name'];

           $result=mysqli_query($conn,"SELECT marks.department,marks.lecturer,marks.type,marks.ID,marks.regno,marks.names,marks.CAT,marks.Exam,marks.total,marks.levels,marks.module,department.department_id,department.department_name from marks INNER JOIN department ON marks.department = department.department_id where department = '$department' and levels ='$levels'");

           while($test = mysqli_fetch_array($result))
           {
             $id = $test['ID'];
             //echo "<tbody>";
             echo "<tr align='center'>";

              echo"<td>" .$test['type']."</font></td>";
               echo"<td>" .$test['regno']."</font></td>";
               echo"<td>" .$test['names']."</font></td>";







             echo"<td>" .$test['department_name']."</font></td>";
             echo"<td>" .$test['levels']."</font></td>";
             echo"<td>" .$test['module']."</font></td>";
             echo"<td>" .$test['lecturer']."</font></td>";
             if($test['CAT']<25){
              echo"<td style='color:red'><b>" .$test['CAT']."</b></td>";
             }else
             echo"<td>" .$test['CAT']."</font></td>";
             if($test['Exam']<25){
              echo"<td style='color:red'><b>" .$test['Exam']."</b></td>";
            }else
             echo"<td>" .$test['Exam']."</font></td>";
             if($test['total']<50){
               echo"<td style='color:red'><b>" .$test['total']."</b></td>";
             }else
             echo"<td>" .$test['total']."</font></td>";
             if($test['CAT'] <25 and $test['total']<50){
               echo"<td style='color:red'><b>Retake</b></td>";
             }else if($test['CAT'] >=25 and $test['Exam']<25 and $test['total']<50){
                 echo"<td style='color:red'><b>Remedial</b></td>";
             }else{
              echo "<td style='color:green'><b>Passed</b></td>";
             }

             ?>

            <!--  <td><a href="../upload/editlecturer.php?edit_id=<?php //echo $test['ID']; ?>" title="click for edit" onclick="return confirm('sure to edit ?')" class='btn btn-success'>Update</a></td> -->


            <!--  <td><a href="?delete_id=<?php //echo $test['ID']; ?>" title="click for delete" onclick="return confirm('sure to delete ?')" class='btn btn-danger'>Delete</a></td> -->
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
    <?php
    


  }

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
