
                  <?php

               include 'connect.php';


                  	if(isset($_GET['delete_id']))
                  	{
                  		// select image from db to delete
                  		$stmt_select = $DB_con->prepare('SELECT user_image FROM users WHERE id =:uid');
                  		$stmt_select->execute(array(':uid'=>$_GET['delete_id']));
                  		$imgRow=$stmt_select->fetch(PDO::FETCH_ASSOC);
                  		unlink("../../../secretary/".$imgRow['user_image']);

                  		// it will delete an actual record from db
                  		$stmt_delete = $DB_con->prepare('DELETE FROM users WHERE id =:uid');
                  		$stmt_delete->bindParam(':uid',$_GET['delete_id']);
                  		$stmt_delete->execute();

                  		 header("Location: secretaries.php");
                  	}

                  ?>