
                  <?php

                  	$DB_HOST = 'localhost';
  $DB_USER = 'root';
  $DB_PASS = '';
  $DB_NAME = 'riya';

  try{
    $DB_con = new PDO("mysql:host={$DB_HOST};dbname={$DB_NAME}",$DB_USER,$DB_PASS);
    $DB_con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  }
  catch(PDOException $e){
    echo $e->getMessage();
  }


                  	if(isset($_GET['delete_id']))
                  	{
                  		// select image from db to delete
                  		$stmt_select = $DB_con->prepare('SELECT Pic FROM event WHERE ID =:uid');
                  		$stmt_select->execute(array(':uid'=>$_GET['delete_id']));
                  		$imgRow=$stmt_select->fetch(PDO::FETCH_ASSOC);
                  	  unlink("../../../eventimages/".$imgRow['Pic']);

                  		// it will delete an actual record from db
                  		$stmt_delete = $DB_con->prepare('DELETE FROM event WHERE ID =:uid');
                  		$stmt_delete->bindParam(':uid',$_GET['delete_id']);
                  		$stmt_delete->execute();

                  		 header("Location: events.php");
                  	}

                  ?>