<?php

require_once('connection.php');


$cons= $_POST['Consignment'];

$sql = "SELECT * FROM emplyee INNER JOIN consignment ON emplyee.id = consignment.assign_to_id WHERE ccn = '$cons'";

$result = mysqli_query($conn,$sql);
$no = mysqli_num_rows($result);
if($no == 1){
while($data = mysqli_fetch_assoc($result)) {
extract($data);

?>

<head>
<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
  position: relative;
  color: black;
  left:35px;
}
th, td {
  padding: 5px;
  text-align: center;
  color: black;
}

.blank1 {
    position:relative;
    left: 70px;
    color: black;
}
.blank2 {
    position:relative;
    left: 700px;
    color: black;
}

.print{
    position:relative;
    left:100px;
    color: black;
    padding:0 50px 0 50px;
}


.orderstatus {

  display: block;
  padding: 1em 0;
  position: relative;
  text-align: center;
  min-height: 150px;

}

.orderstatus.done:before {
  background: #32841f;
  
}
.orderstatus:before {
  content: '';
  height: 100%;
  position: absolute;
  left: 50%;
  width: 2px;
  
  background: #939393;
  margin: 0 25px;
}

.orderstatus:last-child:before {
  height: 0;
}

.orderstatus.done {

}

@media only screen and (max-width: 40em) {
  .orderstatus {
    text-align: left;
  }
  .orderstatus:before {
    left: 0;
  }
  .orderstatus .orderstatus-text {
    left: 0;
    width: 100%;
  }
}

.orderstatus-text {
  position: relative;
  width: 50%;
  left: 50%;
  text-align: left;
  padding-left: 60px;
  font-weight: bold;
}


.orderstatus-container {
  padding: 2em 0;
  position: relative;
  bottom:700px;
  left:300px;
}

.orderstatus time {
  display: block;
  font-size: 20px;
  color: #939393;
  font-weight: bold;
}

.orderstatus.done time {

}

@media only screen and (max-width: 40em) {
  .orderstatus-container {
    text-align: center;
  }
}

.orderstatus-check {
  font-family: "Helvetica", Arial, sans-serif;
  border: 2px solid #939393;
  width: 50px;
  height: 50px;
  display: inline-block;
  text-align: center;
  line-height: 48px;
  border-radius: 50%;
  margin-bottom: 0.5em;
  background: #fff;
  z-index: 2;
  position: absolute;
 
  left: 50%;
  font-weight: 900;
}

.done .orderstatus-check {
  
  border-color: grey;
  
}

@media only screen and (max-width: 40em) {
  .orderstatus-check {
    left: 0;
  }
}

.orderstatus-active {
  text-align: center;
  position: relative;
  left: 25px;
  top: 20px;
  
  font-weight: 900;
}

@media only screen and (max-width: 40em) {
  .orderstatus-active {
    display: none;
  }
}

</style>
</head>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html><head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Admin</title>
<!-- <link href="css/mystyle.css" rel="stylesheet" type="text/css">
<link href="css/style.css" rel="stylesheet" type="text/css">   -->
<link rel="stylesheet" type="text/css" media="screen" href="style.php">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif}
.w3-bar,h1,button {font-family: "Montserrat", sans-serif}
.fa-anchor,.fa-coffee {font-size:200px}

</style>
</head>

<body>

<table border="0" cellpadding="0" cellspacing="0" align="center" width="900">


<style type="text/css">



</style>

<div id="page-wrapper">
  <div class="graphs">
    <br><h1 class="blank1">Order Details</h1>

 <h3 class="blank1"><b>ORDER ID: <?php echo $ccn;?></b></h3>
      
<table style="width:50%; align:'center';">

            <tr>            
              <th>Order ID: </th>
              <td><?php echo $ccn;?></td>  
            </tr>
            <tr>            
              <th>Sender's name: </th>
            <td><?php echo $shippername;?></td>
            </tr>
            <tr>
              <th>Sender's address: </th>
            <td><?php echo $shipperasddress;?></td>
            </tr>
            <tr>
              <th>Phone number: </th>
            <td><?php echo $phone;?></td>
            </tr>
            <tr>              
              <th>No. of items: </th>
            <td><?php echo $no_of_item;?></td>
            </tr>
            <tr>
              <th>Branch ID: </th>
            <td><?php echo $branch_id;?></td>
            </tr>
            <tr>
              <th>Date of booking: </th>
            <td><?php echo $date_of_booking;?></td>
            </tr>
            <tr>
              <th>Charge: </th>
            <td><?php echo $shipment_charge;?></td>
            </tr>
            <tr>
              <th>Reciver name: </th>
            <td><?php echo $reciver_name;?></td>
            </tr>
            <tr>
              <th>Reciver address: </th>
            <td><?php echo $reciver_address;?></td>
            </tr>
            <tr>
              <th>Reciver phone: </th>
            <td><?php echo $reciver_phone;?></td>
            </tr>
            <tr>
              <th>Material Type: </th>
            <td><?php echo $material_descrption;?></td>
            </tr>
            <tr>
              <th>Branch Name: </th>
            <td><?php echo $booked_at_branch;?></td>
            </tr>
            <tr>
              <th>Destination Branch ID: </th>
            <td><?php echo $destination_id;?></td>
            </tr>
            <tr>
              <th>Destination Branch Name: </th>
            <td><?php echo $destination_name;?></td>
            </tr>
            <tr>
              <th>Total weight: </th>
            <td><?php echo $total_weight;?></td>
            </tr>
            <tr>
              <th>Shipment Charge: </th>
            <td><?php echo $shipment_charge;?></td>
            </tr>
            <tr>
              <th>Status: </th>
            <td><?php echo $status;?></td>
            </tr>
            
              
        </table>
        <br><br>
        <div class="print">
        <button onclick="window.print()">Print</button>
        </div>
        
      </div>
    </div>
  </div>
<br><br>

<section>

  <div class="row orderstatus-container">
    <div class="medium-12 columns">
<h3 class="blank2"><b>DELIVERY BOY: <button type="button" onclick="alert('Employee ID: <?php echo $assign_to_id;?>\nEmployee Name: <?php echo $name;?>\nEmployee Phone number: <?php echo $phone_no;?>')">Veiw Details</button></b></h3>
            
      <div class="orderstatus">
        <div class="orderstatus-check"><span class="orderstatus-number">
    <?php
if($status === 'Delivered') {
   echo '<body style="color:#368d22">';
  }
else
{
echo '<body style="color:orange">';
}
?>
          4  </span></div>
        <div class="orderstatus-text">
          <time>12th Dec 2020</time>
          <p>Delivered</p> 
        </div> 
      </div>
      <div class="orderstatus done">
        <div class="orderstatus-check"><span class="orderstatus-number">3</span></div>
        <div class="orderstatus-text">
          <time>8th Dec 2020</time>
          <p>Dispatched</p>
        </div>
      </div>
      <div class="orderstatus done">
        <div class="orderstatus-check"><span class="orderstatus-number">2</span></div>
        <div class="orderstatus-text">
          <time>4th Dec 2020</time>
          <p>Intransit</p>
        </div>
      </div>

      <div class="orderstatus done">
        <div class="orderstatus-check"><span class="orderstatus-number">1</span></div>
        <div class="orderstatus-text">
          <time>2nd Dec 2020</time>
          <p>Courier Booked</p>
        </div>
      </div>
  
    </div>
  </div>
</section>
</body>
</html>
<?php }//while
}//if
else {
echo 'In else....';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html><head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Admin</title>
<link href="css/mystyle.css" rel="stylesheet" type="text/css">
<link href="css/style.css" rel="stylesheet" type="text/css">
<style type="text/css">
.style1 {color: #FF0000}
.style3 {font-family: verdana, tohama, arial}
</style>
</head>

<body>

<table border="0" cellpadding="0" cellspacing="0" align="center" width="900">

  <tbody><tr>

    <td width="900">
<?php include("header.php"); ?>

</td>

  </tr>

 

  <tr>

    <td bgcolor="SkyBlue">
<style type="text/css">




 

<table class="ds_box" id="ds_conclass" style="display: none;" cellpadding="0" cellspacing="0">

  <tbody><tr>

    <td id="ds_calclass"> </td>

  </tr>

</tbody></table>



  <br>




  <br>

  <table bgcolor="SkyBlue" cellpadding="2" cellspacing="2" align="center" width="75%">

   

    <tbody><tr>

      <td class="Partext1" bgcolor="SkyBlue" align="right"><div align="center">

  <span class="Partext1"><br>

   
   </span>

  <table bgcolor="SkyBlue" cellpadding="2" cellspacing="2" align="center" width="75%">

     <tbody><tr>
<h3 style="font-family:Verdana; font-size:12px;">Consignment Number <font color="#FF0000"><?php echo $cons; ?></font> not found. Please verify the Number.<br/>
<a href="search-edit.php">Go Back</a> to Search Again.</h3>
       </tr>

        </tbody></table>


</td>

  </tr>

  <tr>
</td>

  </tr>

</tbody></table>

</body></html>



<?php
}//else
?>
