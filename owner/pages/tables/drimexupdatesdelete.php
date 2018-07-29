
                  <?php

          include 'connect.php';


                    if(isset($_GET['delete_id']))
                    {
                      // select image from db to delete
                      // $stmt_select = $DB_con->prepare('SELECT Pic FROM updates WHERE ID =:uid');
                      // $stmt_select->execute(array(':uid'=>$_GET['delete_id']));
                      // $imgRow=$stmt_select->fetch(PDO::FETCH_ASSOC);
                      // unlink("../../../articles/".$imgRow['Pic']);

                      // // it will delete an actual record from db
                      // $stmt_delete = $DB_con->prepare('DELETE FROM riyanews WHERE ID =:uid');
                      // $stmt_delete->bindParam(':uid',$_GET['delete_id']);
                      // $stmt_delete->execute();

                      //  header("Location: drimexupdates.php");
                    }

                      if(isset($_GET['delete_idd']))
                    {
                      // select image from db to delete
                      $stmt_select = $DB_con->prepare('SELECT Pic FROM updates WHERE ID =:uid');
                      $stmt_select->execute(array(':uid'=>$_GET['delete_idd']));
                      $imgRow=$stmt_select->fetch(PDO::FETCH_ASSOC);
                      unlink("../../../articles/".$imgRow['Pic']);

                      // it will delete an actual record from db
                      $stmt_delete = $DB_con->prepare('DELETE FROM updates WHERE ID =:uid');
                      $stmt_delete->bindParam(':uid',$_GET['delete_idd']);
                      $stmt_delete->execute();

                       header("Location: drimexupdates.php");
                    }

                  ?>