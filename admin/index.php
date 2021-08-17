<?php

  if(isset($_REQUEST['s1']))
  {
    include('../connection.php');
     $username=$_REQUEST['username'];
     $password=$_REQUEST['password'];

     $login_type=$_REQUEST['type'];



     if($login_type==='admin')
     {
      $res=mysqli_query($conn,"SELECT * FROM `admin` WHere admin='$username' And password='$password'");
      

    }

    if($login_type==='corporate')
    {
       $res=mysqli_query($conn,"SELECT * FROM `delivery_boy` WHere user_id='$username' And password='$password'");

    }
       if($login_type==='dealer')
    {
       $res=mysqli_query($conn,"SELECT * FROM `staff` WHere username='$username' And password='$password'");

    }


    

    $ros=mysqli_fetch_array($res);

  // /print_r($ros);

  if($ros)
  {
        session_start();
    
    $_SESSION['user']=$login_type;

    echo"<script>alert('login sucess');window.location='home.php'</script>";
  }
  else {
    echo"<script>alert('login error');window.location='index.php';</script>";
  }

     


  }



  ?>
<!DOCTYPE HTML>
<html>
<head>
  <title></title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
  <!-- Bootstrap Core CSS -->
  <link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
  <!-- Custom CSS -->
  <link href="css/style.css" rel='stylesheet' type='text/css' />
  <!-- Graph CSS -->
  <link href="css/font-awesome.css" rel="stylesheet"> 
  <!-- jQuery -->
  <!-- lined-icons -->
  <link rel="stylesheet" href="css/icon-font.min.css" type='text/css' />
  <!-- //lined-icons -->
  <!-- chart -->
  <script src="js/Chart.js"></script>
  <!-- //chart -->
  <!--animate-->
  <link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
  <script src="js/wow.min.js"></script>
  <script>
    new WOW().init();
  </script>
  <!--//end-animate-->
    <!----webfonts--->
    <link href='//fonts.googleapis.com/css?family=Cabin:400,400italic,500,500italic,600,600italic,700,700italic' rel='stylesheet' type='text/css'>
    <!---//webfonts---> 
    <!-- Meters graphs -->
    <script src="js/jquery-1.10.2.min.js"></script>
    <!-- Placed js at the end of the document so the pages load faster -->

<style>
.login_align {
   position: relative;
   left: 30px;
}

</style>
  </head> 

  <body class="sign-in-up">
    <section>
      <div id="page-wrapper" class="sign-in-wrapper">
        <div class="graphs">
          <div class="sign-in-form">
            <div class="sign-in-form-top">
              <p><span>Sign In to</span> <a href="index.html">Admin</a></p>
            </div>
            <div class="signin">
<!--              <div class="signin-rit">
                <span class="checkbox1">
                  <label class="checkbox"><input type="checkbox" name="checkbox" checked="">Forgot Password ?</label>
                </span>
                <p><a href="#">Click Here</a> </p>
                <div class="clearfix"> </div>
              </div>-->
              
              <form action="" method="post">
                <div class = "login_align">
                <div class="log-input">
                  <div class="log-input-left">
                    <input type="text" class="user" name="username" placeholder="Enter your username" required=""/>
                  </div>
                
                  </span>
                  <div class="clearfix"> </div>
                </div>
                <div class="log-input">
                  <div class="log-input-left">
                    <input type="password" class="lock" name="password" placeholder="Enter your password"/>
                  </div>
                  
                  </span>
                  <div class="clearfix"> </div>
                </div>
          
                <div class="log-input">
                 <div class="log-input-left">
                  <select class="form-control" id="sel1" name="type" required="">
                  <option value="admin">Admin</option>
                    <option value="dealer">Staff</option>
                    <option value="corporate">Delivery Boy</option>
                  </select>
                  </div>
                   
                  </span>
                  </div>
                  <div class="clearfix"> </div>
                
                <input type="submit" value="Login to your account" name="s1">
               </div>
              </form>	
              <!--  -->
            </div>
<!--            <div class="new_people">
              <h4>For New People</h4>
              <p>Having hands on experience in creating innovative designs,I do offer design 
                solutions which harness.</p>
              <a href="sign-up.html">Register Now!</a>
            </div>-->
          </div>
        </div>
      </div>
      <!--footer section start-->
      <footer>
        <p> Designed by <a href="#" target="_blank">yes2Design</a></p>
      </footer>
      <!--footer section end-->
    </section>

    <script src="js/jquery.nicescroll.js"></script>
    <script src="js/scripts.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
  </body>
  </html>


