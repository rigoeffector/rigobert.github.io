<?php
ob_start();
session_start();
include_once '../login/dbconnect.php';
?>

<header class="main-header">
  <!-- Logo -->
  <a href="indexp.php" class="logo"><b>RVC</b> Policing</a>
  <!-- Header Navbar: style can be found in header.less -->
  <nav class="navbar navbar-static-top" role="navigation">
    <!-- Sidebar toggle button-->
    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
      <span class="sr-only">Toggle navigation</span>
    </a>
    <!-- Navbar Right Menu -->
    <div class="navbar-custom-menu">
      <ul class="nav navbar-nav">
        <!-- Messages: style can be found in dropdown.less-->

        <!-- User Account: style can be found in dropdown.less -->
        <li class="dropdown user user-menu">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <img src="dist/img/pol.jpg" class="user-image" alt="User Image"/>

            <?php if (isset($_SESSION['usr_id'])) { ?>




            <span class="hidden-xs"> <?php echo $_SESSION['usr_name']; ?></span>


          </a>
          <ul class="dropdown-menu">
            <!-- User image -->
            <li class="user-header">
              <img src="dist/img/pol.jpg" class="img-circle" alt="User Image" />
              <p>
               <?php echo $_SESSION['usr_name']; ?>
              </p>
            </li>
            <!-- Menu Body -->

            <!-- Menu Footer-->
            <li class="user-footer">
             
              <div class="pull-right">
                <a href="../login/logout.php" class="btn btn-default btn-flat">Sign out</a>
              </div>
            </li>
          </ul>
        </li>
      </ul>
    </div>
  </nav>
</header>
<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="dist/img/pol.jpg" class="img-circle" alt="User Image" />
      </div>
      <div class="pull-left info">
        <p> <?php echo " ". $_SESSION['usr_name']; ?></p>

        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>
    <!-- search form -->

    <!-- /.search form -->
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu">
      <li class="header">MAIN NAVIGATION</li>
      <li class=" treeview">
        <a href="indexp.php">
          <i class="fa fa-dashboard"></i> <span>Dashboard</span>
        </a>

      </li>

      <li class=" treeview">
        <a href="./pages/tables/generaterepop.php">
          <i class="fa fa-print"></i> <span>Generate report</span>
        </a>

      </li>


      <!--  <li class="treeview">
        <a href="#">
          <i class="fa fa-edit"></i> <span>RVC updates</span>
          <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
          <li><a href="./pages/tables/addrvcupdates.php"><i class="fa fa-circle-o"></i>add new updates</a></li>
          <li><a href="./pages/tables/rvcupdates.php"><i class="fa fa-circle-o"></i>All RVC updates</a></li>
        
        </ul>
      </li>
 -->


<!-- <li class="treeview">
        <a href="#">
          <i class="fa fa-edit"></i> <span>Achievements</span>
          <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
          <li><a href="./pages/tables/addnewachievements.php"><i class="fa fa-circle-o"></i>Add new Achievement</a></li>
          <li><a href="./pages/tables/achievements.php"><i class="fa fa-circle-o"></i>All Achievements</a></li>
          <li><a href="./pages/tables/wordnoimages.php"><i class="fa fa-circle-o"></i> Words with no images</a></li>
        </ul>
      </li>

 -->

<!-- 
      <li class="treeview">
        <a href="#">
          <i class="fa fa-users"></i> <span>Secretary</span>
          <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
          <li><a href="./pages/tables/addnewsecretary.php"><i class="fa fa-circle-o"></i>Add new Secretary</a></li>
          <li><a href="./pages/tables/secretaries.php"><i class="fa fa-circle-o"></i>All Secretaries</a></li>
           <li><a href="./pages/tables/wordnoimages.php"><i class="fa fa-circle-o"></i> Words with no images</a></li> 
        </ul>
      </li> -->

     <!--  <li class="treeview">
        <a href="#">
          <i class="fa fa-users"></i> <span>Policing</span>
          <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
          <li><a href="./pages/tables/addnewpolicing.php"><i class="fa fa-circle-o"></i>Add new Policing</a></li>
          <li><a href="./pages/tables/policings.php"><i class="fa fa-circle-o"></i>All Policings</a></li>
           <li><a href="./pages/tables/wordnoimages.php"><i class="fa fa-circle-o"></i> Words with no images</a></li> 
        </ul>
      </li> -->

<!-- 
      <li class="treeview">
        <a href="#">
          <i class="fa fa-edit"></i> <span>Why We do It</span>
          <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
          <li><a href="./pages/tables/addnewupdate.php"><i class="fa fa-circle-o"></i>New Reason</a></li>
          <li><a href="./pages/tables/updates.php"><i class="fa fa-circle-o"></i>All Reasons</a></li>
        
        </ul>
      </li> -->
<!-- 
       <li class="treeview">
        <a href="#">
          <i class="fa fa-edit"></i> <span>Why You may Choose us </span>
          <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
          <li><a href="./pages/tables/addchooseus.php"><i class="fa fa-circle-o"></i>Add new reason</a></li>
          <li><a href="./pages/tables/chooseusreasons.php"><i class="fa fa-circle-o"></i>All reasons</a></li>
      
        </ul>
      </li> -->



 <!--  <li class="treeview">
        <a href="#">
          <i class="fa fa-edit"></i> <span>Services</span>
          <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
          <li><a href="./pages/tables/addnewservice.php"><i class="fa fa-circle-o"></i>Add new Service</a></li>
          <li><a href="./pages/tables/services.php"><i class="fa fa-circle-o"></i>All Services</a></li>
          <li><a href="./wordnoimages.php"><i class="fa fa-circle-o"></i> Words with no images</a></li>
        </ul>
      </li> -->
<!-- 
       <li class="treeview">
        <a href="#">
          <i class="fa fa-edit"></i> <span>About Us</span>
          <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
          <li><a href="./pages/tables/addnewepisode.php"><i class="fa fa-circle-o"></i>Description</a></li>
          <li><a href="./pages/tables/whatwedo.php"><i class="fa fa-circle-o"></i>What we do</a></li>
          <li><a href="./pages/tables/mission.php"><i class="fa fa-circle-o"></i>Mission</a></li>
          <li><a href="./pages/tables/vision.php"><i class="fa fa-circle-o"></i>Vision</a></li>
          <li><a href="./pages/tables/aim.php"><i class="fa fa-circle-o"></i>Aim</a></li>
          <li><a href="./pages/tables/team.php"><i class="fa fa-circle-o"></i>Team</a></li>
          <li><a href="./wordnoimages.php"><i class="fa fa-circle-o"></i> Words with no images</a></li>
        </ul>
      </li> -->


   <!--  <li class="treeview">
        <a href="#">
          <i class="fa fa-edit"></i> <span>Job offer</span>
          <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
          <li><a href="./pages/tables/addnewjoboffer.php"><i class="fa fa-circle-o"></i>Add new Job offer</a></li>
          <li><a href="./pages/tables/joboffers.php"><i class="fa fa-circle-o"></i>Job offers</a></li>
         
        </ul>
      </li> -->



<!-- 
      <li class="treeview">
        <a href="#">
          <i class="fa fa-edit"></i> <span>Achievements</span>
          <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
          <li><a href="./pages/tables/addnewachievement.php"><i class="fa fa-circle-o"></i>Add new Achievement</a></li>
          <li><a href="./pages/tables/achievements.php"><i class="fa fa-circle-o"></i>All Achievements</a></li>
          <li><a href="./pages/tables/wordnoimages.php"><i class="fa fa-circle-o"></i> Words with no images</a></li>
        </ul>
      </li> -->

<!-- 
      <li class="treeview">
        <a href="#">
          <i class="fa fa-edit"></i> <span>Videos</span>
          <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
          <li><a href="./pages/tables/addnewvideo.php"><i class="fa fa-circle-o"></i>Add new Video</a></li>
          <li><a href="./pages/tables/videos.php"><i class="fa fa-circle-o"></i>All Videos</a></li>
          <li><a href="./pages/tables/wordnoimages.php"><i class="fa fa-circle-o"></i> Words with no images</a></li>
        </ul>
      </li> -->


     <!-- <li class="treeview">
        <a href="#">
          <i class="fa fa-edit"></i> <span>Akazi</span>
          <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
          <li><a href="./pages/tables/addnewjob.php"><i class="fa fa-circle-o"></i>Akazi gashya</a></li>
          <li><a href="./pages/tables/jobs.php"><i class="fa fa-circle-o"></i>Utuzi twose</a></li>
          <li><a href="./wordnoimages.php"><i class="fa fa-circle-o"></i> Words with no images</a></li>
        </ul>
      </li> -->
<!-- 
      <li class="">
        <a href="./pages/tables/cvs.php">
          <i class="fa fa-edit"></i> <span>CVs</span>
        
        </a>
        
      </li> -->


     <!--  <li class="treeview">
        <a href="#">
          <i class="fa fa-folder"></i> <span>Report</span>
          <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
          <li><a href="pages/tables/newuser.php"><i class="fa fa-circle-o"></i> Users</a></li>
          <li><a href="pages/tables/newuser.php"><i class="fa fa-circle-o"></i> Users with certificate</a></li>
          <li><a href="pages/tables/newuser.php"><i class="fa fa-circle-o"></i> Words with images</a></li>
          <li><a href="pages/tables/newuser.php"><i class="fa fa-circle-o"></i> Words with no images</a></li>

        </ul>
      </li> -->


    </ul>
  </section>
  <!-- /.sidebar -->
</aside>
<?php } else { ?>
<a href="../admin/index.php"><img src="images/login.jpg" alt=""></a>
<?php } ?>
<?php ob_end_flush(); ?>