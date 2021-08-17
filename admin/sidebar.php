<html>

<body  class="sticky-header left-side-collapsed" onload="initMap()" >
  <section>
    <!-- left side start-->
    
      <div class="left-side sticky-left-side">
      <!--logo and iconic logo start-->
      <div class="logo">
        <h1><a href="home.php">Easy <span>Admin</span></a></h1>
      </div>
      <!--logo and iconic logo end-->
      <div class="left-side-inner">
        <!--sidebar nav start-->
        <ul class="nav nav-pills nav-stacked custom-nav">
          
          <?php 
            if($_SESSION['user']=='admin')
            {
              ?>
         <li class="active"><a href="home.php"><i class="lnr lnr-home"></i><span>Dashboard</span></a></li>
          <li class="menu-list">
            <a href="#"><i class="lnr lnr-users"></i>
              <span>Employee</span></a>
            <ul class="sub-menu-list">
              <li><a href="add_emplyee.php">Add Employee</a> </li>
              <li><a href="view_emplyee.php">View Employee</a></li>
              <li><a href="triggers.php">Employee Records</a></li>
            </ul>
          </li>
              <li class="menu-list">
            <a href="#"><i class="lnr lnr-map-marker"></i>
              <span>Branch</span></a>
            <ul class="sub-menu-list">
              <li><a href="add_branchrequest.php">Add branch</a> </li>
              <li><a href="branch_details.php">View branch</a></li>
            </ul>
          </li>   
           <li class="menu-list">
            <a href="#"><i class="fa fa-truck"></i>
              <span>Courier</span></a>
            <ul class="sub-menu-list">             
              <li><a href="view_consignment.php">Courier reports</a> </li>
              <li><a href="new_courier.php">New couriers</a> </li>
              <li><a href="intransit.php">In-transit</a> </li>
              <li><a href="dispatched.php">Dispatched</a> </li>
              <li><a href="delayed.php">Delayed</a> </li>
              <li><a href="delivered.php">Delivered</a> </li>
            </ul>
          </li>  
          <?php
        }
        if($_SESSION['user']=='corporate')
        {
          ?>
       <li class="active"><a href="home_db.php"><i class="lnr lnr-home"></i><span>Dashboard</span></a></li>
       
       <li><a href="dispatched1.php"><i class="lnr lnr-file-empty"></i><span>Consignment Report</span></a></li>

<li><a href="emp_cons.php"><i class="lnr lnr-file-empty"></i><span>Update Consignment Report</span></a></li>
       
       
          <?php
        }

         if($_SESSION['user']=='dealer')
        {
          ?>
          <li class="active"><a href="home_staff.php"><i class="lnr lnr-home"></i><span>Dashboard</span></a></li>
          <li class="menu-list">
            <a href="#"><i class="lnr lnr-map-marker"></i>
              <span>Branch Details</span></a>
            <ul class="sub-menu-list">
            <li><a href="view_branchrequest.php">View branch</a> </li>
            
            </ul>
          </li>


     <li class="menu-list">
            <a href="#"><i class="lnr lnr-users"></i>
              <span>Employee Details</span></a>
            <ul class="sub-menu-list">
            <li><a href="view_emplyee1.php">View Employee</a> </li>
            </ul>
          </li>




       <!-- <li><a href="#"><i class="lnr lnr-cog"></i><span>Branch Details</span></a></li> -->
       
         <li class="menu-list">
            <a href="#"><i class="lnr lnr-file-empty"></i>
              <span>Consignment Report</span></a>
            <ul class="sub-menu-list">
            <li><a href="view_consignment_staff.php">View Consignment</a> </li>
            </ul>
          </li>

           <li class="menu-list">
            <a href="#"><i class="fa fa-edit"></i>
              <span>Update Status</span></a>
            <ul class="sub-menu-list">
            <li><a href="new_courier_staff.php">New Courier </a> </li>
            <li><a href="intransit_staff.php">In-transit </a> </li>
            <li><a href="dispatched_staff.php">Dispatched</a> </li>
            <li><a href="delayed_staff.php">Delayed </a> </li>
            <li><a href="delivered_staff.php">Delivered </a> </li>
            </ul>
          </li>
             
          
          <?php
        }
      
        ?>

  


          <!-- <li><a href=" admin/about"><i class="lnr lnr-book"></i> <span>About Us</span></a></li> -->
          
     <!--      <li class="menu-list"><a href="#"><i class="lnr lnr-list"></i> <span>Event </span></a>
            <ul class="sub-menu-list">
              <li><a href=" admin/addproduct">Add Event</a> </li>
              <li><a href=" admin/viewproduct">View Event</a></li>
            </ul>
          </li> -->

         <!--  <li class="menu-list"><a href="#"><i class="lnr lnr-menu"></i> <span>Service</span></a>
            <ul class="sub-menu-list">
              <li><a href=" admin/addservice">Add Service</a> </li>
              <li><a href=" admin/viewservice">View Service</a></li>
            </ul>
          </li> -->
       <!--    <li class="menu-list"><a href="#"><i class="lnr lnr-history"></i> <span>Quote</span></a>
            <ul class="sub-menu-list">
              <li><a href=" admin/testimonial">Add quote</a> </li>
              <li><a href=" admin/viewtestimonial">View quote</a></li>
            </ul>
          </li> -->
         <!--  <li><a href=" admin/quotation"><i class="lnr lnr-briefcase"></i> <span>Quotation</span></a></li> -->
<!--          <li><a href="tables.html"><i class="lnr lnr-menu"></i> <span>Tables</span></a></li>              
          
          <li class="menu-list"><a href="#"><i class="lnr lnr-indent-increase"></i> <span>Menu Levels</span></a>  
            <ul class="sub-menu-list">
              <li><a href="charts.html">Basic Charts</a> </li>
            </ul>
          </li>
          <li><a href="codes.html"><i class="lnr lnr-pencil"></i> <span>Typography</span></a></li>
          <li><a href="media.html"><i class="lnr lnr-select"></i> <span>Media Css</span></a></li>
          <li class="menu-list1"><a href="#"><i class="lnr lnr-book"></i>  <span>Pages</span></a> 
            <ul class="sub-menu-list1">
              <li><a href="sign-in.html">Sign In</a> </li>
              <li><a href="sign-up.html">Sign Up</a></li>
              <li><a href="blank_page.html">Blank Page</a></li>
            </ul>
          </li>-->
        </ul>
        <!--sidebar nav end-->
      </div>
    </div>
    <!-- left side end-->
    
    <!-- main content start-->
<div class="main-content">
  <!-- header-starts -->
  <div class="header-section">

    <!--toggle button start-->
    <a class="toggle-btn  menu-collapsed"><i class="fa fa-bars"></i></a>
    <!--toggle button end-->

    <!--notification menu start -->
    <div class="menu-right">
      <div class="user-panel-top">  	
        <div class="profile_details_left">
          <ul class="nofitications-dropdown">
            <div class="clearfix"></div>	
          </ul>
        </div>
        <div class="profile_details">		
          <ul>
            <li class="dropdown profile_details_drop">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                <div class="profile_img">	
                  <!-- <span style="background:url(images/1.jpg) no-repeat center"> </span>  -->
                  <div class="user-name">
                    <p>Admin<span>Administrator</span></p>
                  </div>
                  <i class="lnr lnr-chevron-down"></i>
                  <i class="lnr lnr-chevron-up"></i>
                  <div class="clearfix"></div>	
                </div>	
              </a>
              <ul class="dropdown-menu drp-mnu">
<!--                <li> <a href="#"><i class="fa fa-cog"></i> Settings</a> </li> 
                <li> <a href="#"><i class="fa fa-user"></i>Profile</a> </li> -->
                <li> <a href="logout.php"><i class="fa fa-sign-out"></i> Logout</a> </li>
              </ul>
            </li>
            <div class="clearfix"> </div>
          </ul>
        </div>		
<!--        <div class="social_icons">
          <div class="col-md-4 social_icons-left">
            <a href="#" class="yui"><i class="fa fa-facebook i1"></i><span>300<sup>+</sup> Likes</span></a>
          </div>
          <div class="col-md-4 social_icons-left pinterest">
            <a href="#"><i class="fa fa-google-plus i1"></i><span>500<sup>+</sup> Shares</span></a>
          </div>
          <div class="col-md-4 social_icons-left twi">
            <a href="#"><i class="fa fa-twitter i1"></i><span>500<sup>+</sup> Tweets</span></a>
          </div>
          <div class="clearfix"> </div>
        </div>            	-->
        <div class="clearfix"></div>
      </div>
    </div>
    <!--notification menu end -->
  </div>
  <!-- //header-ends -->

</body>
</html>