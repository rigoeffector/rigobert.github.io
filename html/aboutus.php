<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>www.rsvp.com</title>
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css">
    <link rel="stylesheet" type="text/css" media="screen" href="../css/rsvp.css"/>
    <link rel="stylesheet" href="../css/responsive.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>     
    <script type="text/javascript">
        $ (function(){
            $("#menu").click(function(){
                $("#nav_link").slideToggle();
            }); 
        });
        $(document).ready(function(){
                    /*! Fades in page on load */
                    $('body').css('display', 'none');
                    $('body').fadeIn(2000);
                
        });
      
      

</script>
</head>
<body>
<div class="wrapper">
    <div class="navbar">
    <div class="toggle">
        <i class="fas fa-bars " id="menu"></i>
    </div>

        <ul id="nav_link">
            <li >
                <a href="index.php">For Organization</a>
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



    <!-- all about memebr -->
    <div class="aboutus" >
            <div class="background_img">
                <div class="center">
                <div class="content_about" id="fade-scroll">
                  <center><h1>Who We are</h1></center>
                    <p>
                    Nowadays, we have around 50 000 members around the country which includes students in higher
                     learning institutions and secondary schools as well as youth in different districts mainly 
                     graduates decided to contribute in country development programs and crime prevention. 
                     Trained (4 intakes): 313, 315, 500 & 395: 1533 Target: 1 000 000 members by 2020 
                    </p>
                </div>
                </div>
                <center><p id="what_we_do">What We DO</p></center>
            <div class="what_wedo" id="fade-scroll">
            
                <div class="todo_list">
                    <div class="icons">
                    <i class="fas fa-lock"></i>
                    </div>
                    <div class="first">
                    <p>Engage in crime prevention strategies </p>
                    </div>
                </div>
                <div class="todo_list">
                    <div class="icons">
                    <i class="fas fa-hands-helping"></i>
                    </div>
                    <div class="first">
                    <p>Capacity building for Rwanda Youth Volunteers in community policing </p>
                    </div>
                </div>

                 <div class="todo_list">
                    <div class="icons">
                    <i class="fas fa-meh-blank"></i>
                    </div>
                    <div class="first">
                    <p>Mobilization of the  Youth Volunteers  in preventing crimes </p>
                    </div>
                </div>

                <div class="todo_list">
                    <div class="icons">
                    <i class="fas fa-briefcase-medical"></i>
                    </div>
                    <div class="first">
                    <p>Promotion of health, hygiene and sanitation activities </p>
                    </div>
                </div>

                <div class="todo_list">
                    <div class="icons">
                    <i class="fas fa-briefcase-medical"></i>
                    </div>
                    <div class="first">
                    <p>Promotion of health, hygiene and sanitation activities </p>
                    </div>
                </div>
                <div class="todo_list">
                    <div class="icons">
                    <i class="fab fa-envira"></i>
                    </div>
                    <div class="first">
                    <p>Promotion of health, hygiene and sanitation activities </p>
                    </div>
                </div>



            </div>
        </div>
           



    </div>

  




</div>
        <!-- partners -->
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
        <!-- partners -->
      <!-- footer -->


<div class="footer">
        
        <h4>&copy; copyright RSVP 2018</h4>

<div class="subscribe">
<div class="email">
    <input type="email" name="" placeholder="Subscribe here .........">
</div>
<div class="enevlop">
    <i class="fas fa-envelope"></i>
</div>
</div>

            
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
                <form class="modal-content " action="/action_page.php">
                    <div class="imgcontainer">
                        <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
                         <h5>Post a Crime</h5>  
                    </div>
                            <div class="container">
                                        <label for="name">Full Name</label>
                                            <input type="text" placeholder="Enter your  Full name" name="" required='true'>
                                        <label for="email">Email Address</label>
                                            <input type="text" placeholder="Enter Your Email Address" name="" require>
                                        <label for="crime_address">Crime Address</label>
                                            <input type="text" placeholder="Enter Crime Address" name="" required>
                                        <label for="crime_address2">crime_address2</label>
                                            <input type="text" placeholder="Enter Crime Address 2" name=""required>
                                        <label for="crime">Describe Crime</label><br/>
                                            <textarea name="" id="post_area" cols="122" rows="10"></textarea>
                                        <div class="container" style="background-color:rgba(3, 50, 66, 0.8);'">
                                        <center><button id="button" type="button"  >Submit</button>
                                        <button id="button" type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button></center>
                                            
                            </div>
                </form>
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
      </script>
</body>
</html>