<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>RVC</title>
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
<style>
    #regForm {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        margin: 100px auto;
        padding: 40px;
        width: 70%;
        min-width: 200px;
    }

    h1 {
        text-align: center;
    }
    input {
    padding: 10px;
    width: 100%;
    font-size: 17px;
    border: 0px;
    outline: none;
    border-bottom: 1px solid rgba(3, 50, 65,0.8);
}
 
    /* Mark input boxes that gets an error on validation: */

    input.invalid {
        background-color: #ffdddd;
    }
    /* Hide all steps by default: */

    .tab {
        display: none;
    }

    button {
        background-color: rgba(3, 50, 66, 0.8);
        color: #ffffff;
        border: none;
        padding: 10px 25px;
        font-size: 17px;
        cursor: pointer;
    }

    button:hover {
        opacity: 0.8;
    }

    #prevBtn {
        background-color: #bbbbbb;
    }
    /* Make circles that indicate the steps of the form: */

    .step {
        height: 15px;
        width: 15px;
        margin: 0 2px;
        background-color: rgba(3, 50, 66, 0.8);
        border: none;
        border-radius: 50%;
        display: inline-block;
        opacity: 0.5;
    }

    .step.active {
        opacity: 1;
    }
    /* Mark the steps that are finished and valid: */

    .step.finish {
        background-color: rgba(3, 50, 66, 0.8);
    }
    .input{
      background: transparent;
      outline: none;
      border-bottom: 2px solid #000;
      border: 0px;
      position: relative;
    }
</style>
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





<div class="contact_details">
    <div class="member_title">
    <center><p>Become  a Youth Volunteer Member</p></center>
    <div class="core_values_member">
      <div class="word">
        <span>Patriotism</span>
        <span>Honest</span>
        <span>Be Professional</span>
        <span>Determination</span>
        <span>To Be Discipline</span>
      </div>

    </div>
</div>
</div>
<form id="regForm" action="/action_page.php">
        <h1>Register for New member</h1>
        <!-- One "tab" for each step in the form: -->
        <div class="tab">Names
            <p><input placeholder="First name..." oninput="this.className = ''" name="fname"  class="input"></p>
            <p><input placeholder="Last name..." oninput="this.className = ''" name="lname" class="input"></p>
        </div>
        <div class="tab">Contact Info:
            <p><input placeholder="E-mail..." oninput="this.className = ''" name="email" class="input"></p>
            <p><input placeholder="Phone..." oninput="this.className = ''" name="phone" class="input"></p>
        </div>
        <div class="tab">Birthday:
            <p><input oninput="this.className = ''" name="dd" type="date"></p>
           
        </div>
        <div class="tab">Profile Picture:
            <p><input placeholder="Your Picture..." oninput="this.className = ''" name="uname" type="file"></p>

        </div>
        <div style="overflow:auto;">
            <div style="float:right;">
                <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
            </div>
        </div>
        <!-- Circles which indicates the steps of the form: -->
        <div style="text-align:center;margin-top:40px;">
            <span class="step"></span>
            <span class="step"></span>
            <span class="step"></span>
            <span class="step"></span>
        </div>
    </form>
    <script>
        var currentTab = 0; // Current tab is set to be the first tab (0)
        showTab(currentTab); // Display the crurrent tab

        function showTab(n) {
            // This function will display the specified tab of the form...
            var x = document.getElementsByClassName("tab");
            x[n].style.display = "block";
            //... and fix the Previous/Next buttons:
            if (n == 0) {
                document.getElementById("prevBtn").style.display = "none";
            } else {
                document.getElementById("prevBtn").style.display = "inline";
            }
            if (n == (x.length - 1)) {
                document.getElementById("nextBtn").innerHTML = "Submit";
            } else {
                document.getElementById("nextBtn").innerHTML = "Next";
            }
            //... and run a function that will display the correct step indicator:
            fixStepIndicator(n)
        }

        function nextPrev(n) {
            // This function will figure out which tab to display
            var x = document.getElementsByClassName("tab");
            // Exit the function if any field in the current tab is invalid:
            if (n == 1 && !validateForm()) return false;
            // Hide the current tab:
            x[currentTab].style.display = "none";
            // Increase or decrease the current tab by 1:
            currentTab = currentTab + n;
            // if you have reached the end of the form...
            if (currentTab >= x.length) {
                // ... the form gets submitted:
                document.getElementById("regForm").submit();
                return false;
            }
            // Otherwise, display the correct tab:
            showTab(currentTab);
        }

        function validateForm() {
            // This function deals with validation of the form fields
            var x, y, i, valid = true;
            x = document.getElementsByClassName("tab");
            y = x[currentTab].getElementsByTagName("input");
            // A loop that checks every input field in the current tab:
            for (i = 0; i < y.length; i++) {
                // If a field is empty...
                if (y[i].value == "") {
                    // add an "invalid" class to the field:
                    y[i].className += " invalid";
                    // and set the current valid status to false
                    valid = false;
                }
            }
            // If the valid status is true, mark the step as finished and valid:
            if (valid) {
                document.getElementsByClassName("step")[currentTab].className += " finish";
            }
            return valid; // return the valid status
        }

        function fixStepIndicator(n) {
            // This function removes the "active" class of all steps...
            var i, x = document.getElementsByClassName("step");
            for (i = 0; i < x.length; i++) {
                x[i].className = x[i].className.replace(" active", "");
            }
            //... and adds the "active" class on the current step:
            x[n].className += " active";
        }
    </script>


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
