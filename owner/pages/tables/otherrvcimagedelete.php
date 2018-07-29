
                  <?php

                include 'connect.php';


                


                    if(isset($_GET['delete_idd']))
                    {
                      //select image from db to delete
                      $stmt_select = $DB_con->prepare('SELECT Pico FROM updates WHERE ID =:uid');
                      $stmt_select->execute(array(':uid'=>$_GET['delete_idd']));
                      $imgRow=$stmt_select->fetch(PDO::FETCH_ASSOC);
                      unlink("../../../updates/".$imgRow['Pico']);

                      // it will delete an actual record from db
                      $stmt_delete = $DB_con->prepare('UPDATE updates SET Pico = NULL,caption =NULL WHERE ID =:uid');
                      $stmt_delete->bindParam(':uid',$_GET['delete_idd']);
                      $stmt_delete->execute();

                       header("Location: rvcupdates.php");
                    }

                  ?>