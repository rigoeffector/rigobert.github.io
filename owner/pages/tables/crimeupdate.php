
                  <?php

               include 'connect.php';


                    if(isset($_GET['delete_id']))
                    {
                      // select image from db to delete
                      // $stmt_select = $DB_con->prepare('SELECT Pic FROM riyanews WHERE ID =:uid');
                      // $stmt_select->execute(array(':uid'=>$_GET['delete_id']));
                      // $imgRow=$stmt_select->fetch(PDO::FETCH_ASSOC);
                      // unlink("../../../riyaimages/".$imgRow['Pic']);

                      // it will delete an actual record from db
                      $readen = 'yes';
                      $stmt_delete = $DB_con->prepare('UPDATE crime
                                                       SET readen=:readen,
                                                            readendate=now()
                                                       WHERE ID=:uid');
                      $stmt_delete->bindParam(':readen',$readen);
                      $stmt_delete->bindParam(':uid',$_GET['delete_id']);
                      $stmt_delete->execute();

                       header("Location: ../../indexp.php");
                    }


      // $stmt = $DB_con->prepare('UPDATE jobs
      //                  SET company=:title,
      //                  position=:position,
      //                  places=:places,
      //                    sdescription=:short,
      //                    description=:details,
      //                    Pic=:upic
      //                  WHERE ID=:uid');
      // $stmt->bindParam(':title',$username);
      // $stmt->bindParam(':position',$position);
      // $stmt->bindParam(':places',$places);
      // $stmt->bindParam(':short',$userjob);
      // $stmt->bindParam(':details',$userjob1);
      // $stmt->bindParam(':upic',$userpic);
      // $stmt->bindParam(':uid',$id);
                  ?>