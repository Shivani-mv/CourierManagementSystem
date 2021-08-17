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
  margin-right:3%;
  margin-bottom:10%
   
  width: 20%;
  padding: 20px 45px;
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
  padding: 20px 150px;
  box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
  transition: all 0.3s cubic-bezier(.25,.8,.25,1);
  position:relative;
  left:300px;
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
<link href="css-circular-prog-bar.css" rel="stylesheet">
</head>
<body>



<div id="page-wrapper">
  <div class="graphs">
  
    <h3>DASHBOARD</h3>
  </div>
  <!--body wrapper start-->

<div class="box13"> TOTAL DELIVERIES ASSIGNED<br><b><h1>


<?php 
$sql="SELECT ccn FROM consignment Where assign_to_id='1001' AND status!='Delivered'";

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
<br><br><br><br><br><br><br><br>
<div class="box12">COURIERS TO PICKUP<br><b><h1>

<?php 
$sql1="SELECT ccn FROM consignment Where assign_to_id='1001' and status='Dispatched'";

if ($result1=mysqli_query($conn,$sql1))
  {
  // Return the number of rows in result set
  $rowcount1=mysqli_num_rows($result1);
  printf(" %d \n",$rowcount1);
  // Free result set
  mysqli_free_result($result1);
  }
?>

<i class="fa fa-truck" style="float:right"></i></h1></b></div>


<div class="box12"> INTRANSIT COURIERS<br><b><h1>
<?php 
$sql2="SELECT ccn FROM consignment Where assign_to_id='1001' and status='In-transit'";

if ($result2=mysqli_query($conn,$sql2))
  {
  // Return the number of rows in result set
  $rowcount2=mysqli_num_rows($result2);
  printf(" %d \n",$rowcount2);
  // Free result set
  mysqli_free_result($result2);
  }
?>
<i class="lnr lnr-layers" style="float:right"></i></h1></b></div>

<div class="box12"> COURIERS DELIVERED<br><b><h1>
<?php 
$sql3="SELECT ccn FROM consignment Where assign_to_id='1001' and status='Delivered'";

if ($result3=mysqli_query($conn,$sql3))
  {
  // Return the number of rows in result set
  $rowcount3=mysqli_num_rows($result3);
  printf(" %d \n",$rowcount3);
  // Free result set
  mysqli_free_result($result3);
  }
?><i class="lnr lnr-layers" style="float:right"></i></h1></b></div>


<div class="box12"> SHIPPED COURIERS<br><b><h1>
<?php
$sql3="SELECT ccn FROM consignment Where assign_to_id='1001' and status='New Courier'";

if ($result3=mysqli_query($conn,$sql3))
  {
  // Return the number of rows in result set
  $rowcount3=mysqli_num_rows($result3);
  printf(" %d \n",$rowcount3);
  // Free result set
  mysqli_free_result($result3);
}
?>
<i class="lnr lnr-layers" style="float:right"></i></h1></b></div>


</div>
<!--body wrapper end-->
</div>








<?php
include('footer.php');
?>


<script>

function setProgress(elem, percent) {
  var
    degrees = percent * 3.6,
    transform = /MSIE 9/.test(navigator.userAgent) ? 'msTransform' : 'transform';
  elem.querySelector('.counter').setAttribute('data-percent', Math.round(percent));
  elem.querySelector('.progressEnd').style[transform] = 'rotate(' + degrees + 'deg)';
  elem.querySelector('.progress').style[transform] = 'rotate(' + degrees + 'deg)';
  if (percent >= 50 && !/(^|\s)fiftyPlus(\s|$)/.test(elem.className))
    elem.className += ' fiftyPlus';
}

(function() {
  var elem = document.querySelector('.circlePercent'),
    percent = 0,
    stopped = false,
    stopPercent = 50; //Enter variable name to make it dynamic
  (function animate() {
    setProgress(elem, (percent += .25));
    if (percent < 100 && !stopped)
      setTimeout(animate, 15);
    if (percent == stopPercent) {
      stopped = true;
    }
  })();
})();


</script>

</body>
</html>
