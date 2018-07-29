<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>RVC</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" >
    <link rel="stylesheet" type="text/css" media="screen" href="../css/rsvp.css"/>
    <link rel="stylesheet" href="../css/responsive.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="shortcut icon" href="http://sstatic.net/stackoverflow/img/favicon.ico">

</head>
<body>

    <!-- follow us link -->

    <!-- end of follows links -->
    <!-- main header -->
<div class="containers">
    <video autoplay muted loop id="myVideo">
        <source src="../videos/RYVCPC VIDEO FINAL.mp4" type="video/MP4"/>
    </video>
<div class="content">
<div class="wrapper">
    <div class="navbar">
    <div class="toggle">
        <i class="fas fa-bars " id="menu"></i>
    </div>

        <ul id="nav_link">
            <li >
                <a href="#">For Organization</a>
            </li>

            <li>
                <a href="aboutus.php">About Us</a>
            </li>
            <li>
                <a href="structure.php">Structure</a>
            </li>
        </ul>

</div>

<div id="logo">
        <img src="../img/lg.jpg"/>
    </div>
</div>
</div>


    <!-- end of main header -->


<div class="runabout">
<!-- core values -->
<div class="core_value">
    <h3>Core Values </h3>
    <ul>
        Patriotism<hr>
    </ul>
    <ul>
        Honest<hr>
    </ul>
    <ul>
        Determination<hr>
    </ul>
    <ul>
        To Be Discipline<hr>
    </ul>
    <ul>
        To Be Professional
    </ul>

</div>
    <div class="description">
        <header></header>
        <p>

        </p>
        <a href="member.php"><button id="member"></button></a>

    </div>


</div>
</div>






<!-- mission and vision -->
<div class="all_about">
    <div class="maincontainer">
        <div class="thecard">
            <div class="thefront">
                <h3></h3>
                <div class="mission">
                    <p></p>
                </div>
                <center>
                <div class="slogan_mission">
                 <p></p>
                </div>
                </center>

            </div>
            <div class="theback">
                <h3></h3>
            <div class="vision">
                    <p></p>
                </div>
                <center>
                <div class="slogan_vision">
                 <p></p>
                </div>
                </center>
            </div>
        </div>

    </div>

</div>
<!-- NEWS AND UPDATES -->
<div class="all_events">    
<div class="event_back">
    <div class="Pagination">
    <i class="fas fa-chevron-circle-left next"></i>
    <i class="fas fa-chevron-circle-right next"></i>
   
</div>
<center><h3></h3></center>
    <div class="events">

                 <?php
           include 'conn.php';


           $result=mysqli_query($conn,"SELECT * from updates ORDER BY ID DESC LIMIT 3");

           while($test = mysqli_fetch_array($result))
           {
                ?>

                <!-- 
                    <div style="background: url(./articles/<?php //echo $test['Pic']; ?>) no-repeat 0px 0px;
    background-size: cover;
    min-height: 300px;
    padding: 0;" class="col-md-4 serv-grid1">
                <div class="inner_grid">
                    <h3><?php//echo $test['title']  ?></h3>

                    <p>In <?php //echo $test['district']  ?>,<?php// echo $test['sdescription']  ?>...</p>
                    <a href="article.php?view=<?php// echo $test['ID'];?>">Read more</a>
                </div>
            </div> -->

              <div class="box1">
            <!-- <h4 id="title">Title</h4> -->
            <div class="images">

                <img src="../updates/<?php echo $test['Pic']; ?>"/>
            </div>
            <div class="about_event">
                <p><?php echo $test['sdescription']  ?>...</p>
            </div>
            <a href="ReadMore.php?view=<?php echo $test['ID'];?>"><button id="Readmore">Read More</button></a>

        </div>

                <?php
           }
           ?>
            
    
</div>
</div>
</div>

 <!-- achivement section -->

<div class="achievements">
    <div class="Pagination">
    <i class="fas fa-chevron-circle-left next"></i>
    <i class="fas fa-chevron-circle-right next"></i>
    
    </div>

    <?php
           include 'conn.php';


           $result=mysqli_query($conn,"SELECT * from achievements ORDER BY ID DESC LIMIT 3");

           while($test = mysqli_fetch_array($result))
           {
                ?>

                
                   

    <div class="achievements_container">
      <div class="imgBox">
        <img src ="../achievements/<?php echo $test['Pic']; ?>" />
      </div>
      <div class="details">
        <div class="contents_details">
          <h2><?php echo $test['title']; ?></h2>
          <p><?php echo $test['achievements']; ?></p>

        </div>
      </div>
    </div>

                <?php
           }
           ?>



 <!--    

    <div class="achievements_container">
      <div class="imgBox">
        <img src ="../img/4.jpg" />
      </div>
      <div class="details">
        <div class="contents_details">
          <h2>achievements</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,
            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
            nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
            reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
            pariatur. Excepteur sint occaecat cupidatat non proident,
            sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

        </div>
      </div>
    </div> -->
</div>




<!-- ================================================ -->




<!-- fot test -->
    <!-- partners -->
<div class="partners_wrappper">
    <center><h3 id="header"></h3></center>
<div class="partners" id="hideme">

    <div class="all_partners">
    <a href="#" class="box">
    <h2><span>RNP -</span> Rwanda National Police</h2>
    <!-- <img src="../img/Partner.jpg"/> -->

    </a>

    <a href="#" class="box">
    <h2><span>Minalok -</span> Rwanda Ministry</h2>

    </a>

    <a href="#" class="box">
    <h2><span>SFH -</span> Rwanda </h2>

    </a>

    <a href="#" class="box">
    <h2><span>Cok -</span> Rwanda </h2>

    </a>
    </div>
</div>
</div>
        <!-- partners -->

        <!-- contactus -->
        <div class="contact_details">
        <center><h3></h3></center>
        <div class="contact">

            <!-- <div class="contactinfo">
                <form>
                <label id="label" class="focus">
                    FullName
                </label>
                <input class=" " type="email" name="" required>
                <label id="label">
                    E-mail
                </label><br/>
                <input class="input" type="email" name="" required>
                <label id="label">
                    Message
                </label><br/>
                <textarea id="my_subject" cols="94" rows="5" charswidth="23" name="text_body"></textarea><br/>
                <center><button id="submit">Submit</button></center>


                </form>

            </div> -->

            <?php

    error_reporting( ~E_NOTICE ); // avoid notice

    require_once '../owner/upload/dbconfig.php';

    if(isset($_POST['btnsave']))
    {
        
    $Name = $_POST['Name'];
$Email = $_POST['Email'];
$Phone = $_POST['Phone'];
$Message = $_POST['Message'];

        


            $stmt = $DB_con->prepare('INSERT INTO contactus(name,email,telephone,message,dateadded) VALUES(:Name,:Email, :Phone, :Message,now())');
            $stmt->bindParam(':Name',$Name);
      $stmt->bindParam(':Email',$Email);
            $stmt->bindParam(':Phone',$Phone);
      $stmt->bindParam(':Message',$Message);
            if($stmt->execute())
            {
                $successMSG = "new job offer succesfully added ...";
                ?>
                <script type="text/javascript">
                    alert("Thanks for your feedback, our team will contact you soon!!!!!")
                </script>

                <?php
                // header("refresh:5;index.php"); // redirects image view page after 5 seconds.
            }
            else
            {
                ?>
                <script type="text/javascript">
                    alert("Sorry, your message has not been sent. try again!!!!!")
                </script>

                <?php
                $errMSG = "error while inserting....";
        ?>

<!-- <script type="text/javascript"> alert('no');</script> -->
        <?php
            }
        
    }
?>
            <div class="formBox">
              <form class="" method="post">
                <div class="inputBox">
                  <div class="inpuText">
                    FullName
                  </div>
                  <input class="input " type="text" name="Name" required>
                  <div class="inpuText">
                    Email
                  </div>
                  <input class="input " type="email" name="Email" required>
                  <div class="inpuText">
                    Tel
                  </div>
                  <input class="input " type="text" name="Phone" required>
                  <div class="inpuText">
                    Message
                  </div>
                  <textarea class="input_area " type="text" name="Message" required></textarea>
                  <div class="inpuText"> 
                    <input class="button " type="submit" name="btnsave" value="Send Message" required>
                  </div>

                </div>

              </form>

            </div>


        </div>
        </div>
        <!-- contat -->
        <!-- footer -->


<div class="footer">

        <h4>&copy; copyright RSVP 2018</h4>
<center>
<div class="subscribe">
    <div class="email">
    <input type="email" name="" placeholder="Subscribe here .........">
    </div>

    <div class="enevlop">
    <i class="fas fa-envelope"></i>
    </div>

</div>
</center>

        <div class="followus">
        <div class="cons">
            <i style="color:white" class="fab fa-twitter"></i>
        </div>
        <div class="cons">
            <i style="color:white" class="fab fa-facebook-f"></i>
        </div>
        <div class="cons">
            <i style="color:white"class="fab fa-youtube"></i>
        </div>
        <div class="cons">
            <i style="color:white" class="fab fa-linkedin-in"></i>
        </div>

    </div>

        <button id="mybtn"onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Post a crime</button>
            <div id="id01" class="modal">
                <form class="modal-content animate" action="#" method="post">
                    <div class="imgcontainer">
                        <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
                         <h5>Post a Crime</h5>
                    </div>
                            <div class="container">
                                        <label for="name">Full Name</label>
                                            <input class="input" type="text" placeholder="Enter your  Full name" name="Name" required='true'>
                                        <label for="email">Email Address</label>
                                            <input class="input" type="text" placeholder="Enter Your Email Address" name="Email" require>
                                        <label for="crime_address">District</label><br>
                                          <!--   <input class="input" type="text" placeholder="Enter Crime Address" name="Address1" required> -->
                                             <select class="form-control input" style="width: 200px" id="sel1" name="Address1">
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
                                        <label for="crime_address2">Address</label>
                                            <input type="text" placeholder="Enter Crime Address 2" name="Address2"required>
                                        <label for="crime">Describe Crime</label><br/>
                                            <textarea name="Details" id="post_area" cols="122" rows="10"></textarea>
                                        <div class="container" style="background-color:rgba(3, 50, 66, 0.8);'">
                                        <center><button id="button" type="submit" name="crime"  >Submit</button>
                                        <button id="button" type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button></center>

                            </div>
                </form>
                <?php

    error_reporting( ~E_NOTICE ); // avoid notice

    require_once '../owner/upload/dbconfig.php';

    if(isset($_POST['crime']))
    {

$Name = $_POST['Name'];      
$Email = $_POST['Email'];       
$Address1 = $_POST['Address1']; 
$Address2 = $_POST['Address2'];
$Details = $_POST['Details'];        


            $stmt = $DB_con->prepare('INSERT INTO crime(name,email,address1,address2,Details,dateadded) VALUES(:Name,:Email, :Address1, :Address2, :Details,now())');
            $stmt->bindParam(':Name',$Name);
      $stmt->bindParam(':Email',$Email);
            $stmt->bindParam(':Address1',$Address1);
      $stmt->bindParam(':Address2',$Address2);
      $stmt->bindParam(':Details',$Details);
            if($stmt->execute())
            {
                $successMSG = "new job offer succesfully added ...";
                ?>
                <script type="text/javascript">
                    alert("Thanks for reportnig a crime, we will review this crime!!!!!")
                </script>

                <?php
                // header("refresh:5;index.php"); // redirects image view page after 5 seconds.
            }
            else
            {
                ?>
                <script type="text/javascript">
                    alert("Sorry, your message has not been sent. try again!!!!!")
                </script>

                <?php
                $errMSG = "error while inserting....";
        ?>

<!-- <script type="text/javascript"> alert('no');</script> -->
        <?php
            }
        
    }
?>
            </div>
<!-- end of post rime -->

</div>
      <script>
        var modal=document.getElementById('post');
        window.onclick =function(event){
            if(event.target ==modal)
            {
                modal.style.display = "none";
            }
            }
$ (function(){
            $(".toggle").click(function(){
                $("#nav_link").slideToggle().css('display','inline-block');

            });
          
            $(document).ready(function(){
            $('body').css('display', 'none');
            $('body').fadeIn(2000);
            });
            $('.next').click(function(){
                $('.box1').eq(4).fadeIn();
           
            });
});
      </script>


</body>
</html>
