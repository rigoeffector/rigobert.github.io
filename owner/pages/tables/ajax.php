<?php
/*
Author: Javed Ur Rehman
Website: https://www.allphptricks.com
*/

include('db.php');
if($_POST['id']){
	$id=$_POST['id'];
	if($id==0){
		echo "<option>Select levels</option>";
		}else{
			$sql = mysqli_query($con,"SELECT * FROM `levels` WHERE department_id='$id'");
			while($row = mysqli_fetch_array($sql)){
				echo '<option value="'.$row['levels_name'].'">'.$row['levels_name'].'</option>';
				}
			}
		}
?>