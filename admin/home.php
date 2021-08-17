<?php
include('header.php');
include('sidebar.php');
include('../connection.php');
?>  
<html>
<head>
<style>

.box12 {
  background: white;
  margin-top: 3%;
  margin-right:2%;
  margin-bottom:10%
   
  width: 20%;
  padding: 20px 25px;
  box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
  transition: all 0.3s cubic-bezier(.25,.8,.25,1);
  float:left;
  font-family: "Open Sans", sans-serif;
  font-size: 20px;
  color:black;
  background-image: url('backg1.jpg');
}

.box12:hover {
  border-top-right-radius: 10px;
  border-bottom-right-radius: 10px;
  animation-name: example;
  animation-duration: 0s;
  border-right: 15px solid #8bc34a;
  box-shadow: 0 14px 28px rgba(0,0,0,0.25), 0 10px 10px rgba(0,0,0,0.22);
}

.box13 {
  background: white;
  margin-top: 3%;
  margin-right:3%;
  margin-bottom:10%
  width: 50%;
  float:left;
  padding: 20px 200px;
  box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
  transition: all 0.3s cubic-bezier(.25,.8,.25,1);
  position:relative;
  left:350px;
  font-family: "Open Sans", sans-serif;
  font-size: 30px;
  color:black;
  background-image: url('backg1.jpg');
}

.box13:hover {
  border-top-right-radius: 10px;
  border-bottom-right-radius: 10px;
  animation-name: example;
  animation-duration: 0s;
  border-right: 15px solid #8bc34a;
  box-shadow: 0 14px 28px rgba(0,0,0,0.25), 0 10px 10px rgba(0,0,0,0.22);
}


</style>
</head>
<body>



<div id="page-wrapper">
  <div class="graphs">
  
    <h3>Welcome to Admin panel</h3>
  </div>
  <!--body wrapper start-->



<div class="box13"> TOTAL COURIERS<br><b><h1>
<?php 
$sql="SELECT ccn FROM consignment ";

if ($result=mysqli_query($conn,$sql))
  {
  // Return the number of rows in result set
  $rowcount=mysqli_num_rows($result);
  printf(" %d \n",$rowcount);
  // Free result set
  mysqli_free_result($result);
  }
?>
<i class="lnr lnr-layers" style="float:right"></i></h1></b></div>
<br><br><br><br><br><br><br><br><br><br>
<div class="box12"> NEW COURIERS<br><b><h1>
<?php 
$sql="SELECT ccn FROM consignment Where status='New Courier'";

if ($result=mysqli_query($conn,$sql))
  {
  // Return the number of rows in result set
  $rowcount=mysqli_num_rows($result);
  printf(" %d \n",$rowcount);
  // Free result set
  mysqli_free_result($result);
  }
?>
<i class="fa fa-truck" style="float:right"></i></h1></b></div>

<div class="box12"> TOTAL SHIPPED<br><b><h1>
<?php 
$sql="SELECT ccn FROM consignment Where status='Dispatched'";

if ($result=mysqli_query($conn,$sql))
  {
  // Return the number of rows in result set
  $rowcount=mysqli_num_rows($result);
  printf(" %d \n",$rowcount);
  // Free result set
  mysqli_free_result($result);
  }
?>
<i class="lnr lnr-layers" style="float:right"></i></h1></b></div>

<div class="box12"> IN-TRANSIT COURIERS<br><b><h1>
<?php 
$sql="SELECT ccn FROM consignment Where status='In-transit' ";

if ($result=mysqli_query($conn,$sql))
  {
  // Return the number of rows in result set
  $rowcount=mysqli_num_rows($result);
  printf(" %d \n",$rowcount);
  // Free result set
  mysqli_free_result($result);
  }
?>
<i class="lnr lnr-layers" style="float:right"></i></h1></b></div>

<div class="box12"> DELAYED COURIERS<br><b><h1>
<?php 
$sql="SELECT ccn FROM consignment Where status='Delayed' ";

if ($result=mysqli_query($conn,$sql))
  {
  // Return the number of rows in result set
  $rowcount=mysqli_num_rows($result);
  printf(" %d \n",$rowcount);
  // Free result set
  mysqli_free_result($result);
  }
?>
<i class="lnr lnr-layers" style="float:right"></i></h1></b></div>




<div class="box12"> COURIERS DELIEVRED<br><b><h1>
<?php 
$sql="SELECT ccn FROM consignment Where status='Delivered' ";

if ($result=mysqli_query($conn,$sql))
  {
  // Return the number of rows in result set
  $rowcount=mysqli_num_rows($result);
  printf(" %d \n",$rowcount);
  // Free result set
  mysqli_free_result($result);
  }
?>
<i class="lnr lnr-layers" style="float:right"></i></h1></b></div>

</div>
<!--body wrapper end-->
</div>


<?php
include('footer.php');
?>


</body>
</html>
