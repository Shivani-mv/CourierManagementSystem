<?php

require_once('../connection.php');


$cons= $_POST['Consignment'];

$sql = "SELECT * FROM consignment WHERE ccn = '$cons'";

$result = mysqli_query($conn,$sql);
$no = mysqli_num_rows($result);
if($no == 1){
while($data = mysqli_fetch_assoc($result)) {
extract($data);

?>

<script>
    $(document).ready(function () {

        $('#example').DataTable();
    });
</script>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html><head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Admin</title>
<link href="css/mystyle.css" rel="stylesheet" type="text/css">
<link href="css/style.css" rel="stylesheet" type="text/css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif}
.w3-bar,h1,button {font-family: "Montserrat", sans-serif}
.fa-anchor,.fa-coffee {font-size:200px}

table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 5px;
  text-align: left;
}

.blank1{
    position:relative;
    color: black;
}

.print{
    position:relative;
    color: black;
    left: 770px;
}
</style>
</head>

<body>

<table border="0" cellpadding="0" cellspacing="0" align="center" width="900">


<style type="text/css">



</style>

<div id="page-wrapper">
  <div class="graphs">
    <br><h1 class="blank1" style="align:'center';">Order Details</h1>

 <h3 class="blank1" ><b>ORDER ID: <?php echo $ccn;?></b></h3>
      
<table style="width:100%; align:'center';">

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
            <tr>
              <th>Assigned to: </th>
            <td><?php echo $assign_to_id;?></td>
            </tr>
              
        </table>
        <br><br>
        <div class="print" style="align:'center';">
        <button class="btn btn-primary" onclick="window.print()">Print</button>
        </div>

      </div>
    </div>
  </div>
<br><br>
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

table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
  position: relative;
  color: black;
  left:35px;
}


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